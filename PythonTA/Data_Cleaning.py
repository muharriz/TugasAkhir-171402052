#Pre-processing class
class Data_Cleaning:
    def transform_case(self,ulasan):
       return ulasan.lower()
    
    def punctuation_removal(self,ulasan):
        punc = '''!()-[]{};:'"\,<>./?@#$%^&*_~'''
        for x in ulasan:
            if x in punc:
                ulasan = ulasan.replace(x,"")
        return ulasan

    def negation_handling(self,ulasan):
        ulasan = ulasan.replace("tidak ", "tidak_")
        ulasan = ulasan.replace("bukan ", "bukan_")
        ulasan = ulasan.replace("belum ", "belum_")
        ulasan = ulasan.replace("jangan ", "jangan_")

        return ulasan

    
    def tokenization(self,ulasan):
        return ulasan.split(" ")
    
    def stopwords_removal(self,ulasan):
        with open('assets/stopwords.txt', 'r') as file:
            own_stopwords = file.read()
        own_stopwords = own_stopwords.split()
        
        more_stopwords= ['dengan', 'ia','bahwa','oleh','kalau','sangat','tapi']
        total_stopwords = own_stopwords + more_stopwords
        
        ulasan_cleaned = []
        
        for x in ulasan:
            if x not in total_stopwords:
                ulasan_cleaned.append(x)
        
        return ulasan_cleaned
    
    def join(self,ulasan):    
        return " ".join(ulasan)
    
    def stemming(self,ulasan):
        factory = StemmerFactory()
        Stemmer = factory.create_stemmer()
        
        return Stemmer.stem(ulasan)
    
    def clean(self,ulasan):
        ulasan = self.transform_case(ulasan)
        ulasan = self.punctuation_removal(ulasan)
        #ulasan = self.stemming(ulasan)
        ulasan = self.negation_handling(ulasan)
        ulasan = self.tokenization(ulasan)
        ulasan = self.stopwords_removal(ulasan)
        ulasan = self.join(ulasan)
        
        
        return ulasan
