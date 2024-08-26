<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index2');
    }

    public function upload_csv(): string
    {
        return view('upload_csv2');
    }

    public function manual_input(): string
    {
        return view('manual_input2');
    }
    public function predict_csv(): string
    {

     	if(!isset($_POST['csv_upload'])){
  
     		$csv = $_FILES['csv_upload']['tmp_name'];

     		$ulasan = [];
     		$url = "http://127.0.0.1:5000/multiple-predict";

			$handle = fopen($csv,"r");
			while (($row = fgetcsv($handle,1000, ",")) != FALSE) //get row values
			{
		     
		     	$x = array(
		     				'ulasan'=>$row[1]
		     			);
				array_push($ulasan, $x);
			    
			}
			array_shift($ulasan);

			$curl = curl_init();

			curl_setopt($curl, CURLOPT_URL, $url);
		    curl_setopt($curl, CURLOPT_POST, 1);
		    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($ulasan));
		    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
		    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
		            

		    $result_json = curl_exec($curl);

		    curl_close($curl);

		    $result = json_decode($result_json);
		    $us_pos_count = 0;
		    $us_net_count = 0;
		    $us_neg_count = 0;

		    $cr_pos_count = 0;
		    $cr_net_count = 0;
		    $cr_neg_count = 0;

		    $av_pos_count = 0;
		    $av_net_count = 0;
		    $av_neg_count = 0;

		    
		    foreach ($result as $key) {
		    	if($key->usability == 'positif'){
		    		$us_pos_count++;
		    	}
		    	else if($key->usability == 'netral'){
		    		$us_net_count++;
		    	}
		    	else if($key->usability == 'negatif'){
		    		$us_neg_count++;
		    	}

		    	if($key->credibility == 'positif'){
		    		$cr_pos_count++;
		    	}
		    	else if($key->credibility == 'netral'){
		    		$cr_net_count++;
		    	}
		    	else if($key->credibility == 'negatif'){
		    		$cr_neg_count++;
		    	}

		    	if($key->availability == 'positif'){
		    		$av_pos_count++;
		    	}
		    	else if($key->availability == 'netral'){
		    		$av_net_count++;
		    	}
		    	else if($key->availability == 'negatif'){
		    		$av_neg_count++;
		    	}
		    }
		    
		    $data = array(
		    				'result'=>$result,
		    				'file_name'=>$_FILES['csv_upload']['name'],
		    				'total_data'=>count($result),
		    				'us_pos_count'=>$us_pos_count,
		    				'us_net_count'=>$us_net_count,
		    				'us_neg_count'=>$us_neg_count,
		    				'cr_pos_count'=>$cr_pos_count,
		    				'cr_net_count'=>$cr_net_count,
		    				'cr_neg_count'=>$cr_neg_count,
		    				'av_pos_count'=>$av_pos_count,
		    				'av_net_count'=>$av_net_count,
		    				'av_neg_count'=>$av_neg_count,
		    );

		    return view('hasil_csv2',$data);

    	}
    	else{
    		echo('Gagal');
    	}
        
    }
}
