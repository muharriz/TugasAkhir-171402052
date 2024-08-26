$(document).ready(function(){
    $('#form-ulasan').submit(function(e){
        e.preventDefault();
        var ulasan = $('textarea[name=ulasan]').val(); // Ambil nilai input ulasan 
        var dataT = JSON.stringify({ ulasan: ulasan }); // Bentuk objek JSON untuk dikirim

        fetch('http://127.0.0.1:5000/single-predict', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: dataT
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json(); // Mengembalikan respons dalam bentuk JSON
        })
        .then(data => {
                hasil = JSON.stringify(data); // Tampilkan respons data sebagai string JSON
                hasil = JSON.parse(hasil);

                var base_url = window.location.origin + '/TA_171402052/';

                
                if(hasil.usability == "positif"){
                    $('#icon_us').attr("src",base_url + "assets/img/happy.png");  
                }else if(hasil.usability == "negatif"){
                    $('#icon_us').attr('src',base_url + "assets/img/angry.png") ;       
                }else{
                    $('#icon_us').attr('src', base_url + "assets/img/neutral.png") ;          
                }

                if(hasil.credibility == "positif"){
                    $('#icon_cr').attr("src",base_url + "assets/img/happy.png");    
                }else if(hasil.credibility == "negatif"){
                    $('#icon_cr').attr('src',base_url + "assets/img/angry.png") ;       
                }else{
                    $('#icon_cr').attr('src', base_url + "assets/img/neutral.png") ;          
                }

                if(hasil.availability == "positif"){
                    $('#icon_av').attr("src",base_url + "assets/img/happy.png");    
                }else if(hasil.availability == "negatif"){
                    $('#icon_av').attr('src',base_url + "assets/img/angry.png") ;       
                }else{
                    $('#icon_av').attr('src', base_url + "assets/img/neutral.png") ;          
                }
          
                $('#sent_us').text(hasil.usability);
                $('#sent_cr').text(hasil.credibility);
                $('#sent_av').text(hasil.availability);
                $('#sentimen').text(ulasan);
        })
        .catch(error => {
            alert('Terjadi kesalahan: ' + error.message); // Tangani kesalahan
        });
    });


    
});
