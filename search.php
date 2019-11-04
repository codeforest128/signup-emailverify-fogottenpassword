<?php //echo phpinfo();

  if (isset($_GET['fld_search']) && strlen($_GET['fld_search']) > 0){
		$fld_search = $_GET['fld_search'];
		$index = 'scientists';
		$post = '{
	     "_source":["title","name","surname","organisationname","researchfocus","emailaddress","department","shortbio"],
	     "query":{
	        "multi_match" : {
	           "query":"'.$fld_search.'",
	           "fields":["name","surname","organisationname","researchfocus","department","emailaddress","region","country"]
	        }
	     }
	  }';
		$curl = curl_init();
		$headers[] = 'Content-Type: application/json';
		curl_setopt_array($curl, [
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => 'http://127.0.0.1:9200/'.$index.'/_search?pretty',
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_MAXREDIRS => 3,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => $headers,
			CURLOPT_POSTFIELDS => $post
		]);

		$result = curl_exec($curl);

		if (curl_errno($curl)) {
				echo 'Error:' . curl_error($curl);
				echo json_encode('0');
		}else {
			echo json_encode($result);
			//echo $result;
		}

		curl_close($curl);
  }


  //serach one field
//   $post = '{
//    "query":{
//       "match" : {
//          "lastname":"Burns"
//       }
//    }
// }';


?>
