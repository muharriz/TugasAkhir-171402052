from Data_Cleaning import Data_Cleaning
from Sastrawi.Stemmer.StemmerFactory import StemmerFactory
from flask import Flask,request,jsonify
from sklearn.feature_extraction.text import TfidfVectorizer
from flask_cors import CORS
import pickle


#load Model
us_model = pickle.load(open('assets/models/MachineLearning/usability_model.pkl', 'rb'))
us_vectorizer = pickle.load(open('assets/models/MachineLearning/usability_vectorizer.pkl', 'rb'))

cr_model = pickle.load(open('assets/models/MachineLearning/credibility_model.pkl', 'rb'))
cr_vectorizer = pickle.load(open('assets/models/MachineLearning/credibility_vectorizer.pkl', 'rb'))

av_model = pickle.load(open('assets/models/MachineLearning/availability_model.pkl', 'rb'))
av_vectorizer = pickle.load(open('assets/models/MachineLearning/availability_vectorizer.pkl', 'rb'))


#flask
app = Flask(__name__)
CORS(app)

@app.route("/")
def home():
	return "Home"

#multiple predict
@app.route("/multiple-predict",methods=['POST'])
def multiple_predict():
	data = request.get_json()
	print(data)
	data_cleaner = Data_Cleaning()
	data_cleaned = []

	# preprocessing
	for x in data:
		data_cleaned.append(data_cleaner.clean(x['ulasan']))

	#tfidf_transform
	us_ulasan_vectorized = us_vectorizer.transform(data_cleaned)
	cr_ulasan_vectorized = cr_vectorizer.transform(data_cleaned)
	av_ulasan_vectorized = av_vectorizer.transform(data_cleaned)

	#predict
	us_prediction = us_model.predict(us_ulasan_vectorized)
	cr_prediction = cr_model.predict(cr_ulasan_vectorized)
	av_prediction = av_model.predict(av_ulasan_vectorized)

	sentimen = {
				'-1':'negatif',
				'0': 'netral',
				'1':'positif'
	}

	hasil = []

	for index,item in enumerate(us_prediction):
		array_hasil = {
					'ulasan': data_cleaned[index],
					'usability': sentimen[str(us_prediction[index])],
					'credibility': sentimen[str(cr_prediction[index])],
					'availability': sentimen[str(av_prediction[index])]
		}
		hasil.append(array_hasil)


	response = jsonify(hasil)
	response.headers.add('Access-Control-Allow-Origin', '*')  # Atur izin untuk semua origin
	response.headers.add('Access-Control-Allow-Methods', 'POST')

	return response,201


#single predict
@app.route("/single-predict",methods=['POST'])
def single_predict():

	data = request.get_json()

	ulasan = [data['ulasan']]

	data_cleaner = Data_Cleaning()

	#preprocessing
	for x in ulasan:
		x = data_cleaner.clean(x)

	#tfidf_transform
	us_ulasan_vectorized = us_vectorizer.transform(ulasan)
	cr_ulasan_vectorized = cr_vectorizer.transform(ulasan)
	av_ulasan_vectorized = av_vectorizer.transform(ulasan)

	#predict
	us_prediction = us_model.predict(us_ulasan_vectorized)
	cr_prediction = cr_model.predict(cr_ulasan_vectorized)
	av_prediction = av_model.predict(av_ulasan_vectorized)

	sentimen = {
				'-1':'negatif',
				'0': 'netral',
				'1':'positif'
	}

	hasil = {
				'ulasan': ulasan[0],
				'usability': sentimen[str(us_prediction[0])],
				'credibility': sentimen[str(cr_prediction[0])],
				'availability': sentimen[str(av_prediction[0])]
	}

	response = jsonify(hasil)
	
	response.headers.add('Access-Control-Allow-Origin', '*')  # Atur izin untuk semua origin
	response.headers.add('Access-Control-Allow-Methods', 'POST')

	return response,201

	

if __name__ == "__main__":
	app.run(debug=True)