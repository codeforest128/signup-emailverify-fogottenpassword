<?php
// Name: filter.php
// Usage: filter.php?fld_search=<replace_with_variable_to search>"
// 	$d = '{
//   "query": {
//     "bool": {
//       "must": [
//         { "match": { "age": "40" } }
//       ],
//       "must_not": [
//         { "match": { "state": "ID" } }
//       ]
//     }
//   }
// }';
// $d = '{
// 	"query": {
// 		"match_phrase": {"firstname": "Garcia"}
// 	}
// }';
	// $d = '{
	//   "query": { "match_all": {} },
	//   "_source": ["account_number", "balance"]
	// }';
	// Works well
	// $d = '{
	// 	"query": {
	// 		"bool": {
	// 			"must": [
	// 				{"match": {"firstname": "Garcia"}}
	// 				{"match": {"lastname": "Garcia"}}
	// 			]
	// 		}
	// 	}
	// }';
	$s = $_GET['fld_search'];
	// $d = '{
	// "query": {
	//     "bool": {
	//       "must": [{
	//         "multi_match": {
	//             "query": "'.$s.'",
	//             "type": "best_fields",
	//             "fields": [ "firstname", "lastname" ],
	//             "tie_breaker": 0.3,
	//             "minimum_should_match": "30%"
	//         }
	//       }]
	//     }
	//   }
	// }';
	$d = '{
		 "_source":["name","surname","emailaddress","researchfocus","shortbio"],
		 "query":{
				"multi_match" : {
					 "query":"William",
					 "fields":["surname","researchfocus"]
				}
		 }
	}';

	$c = curl_init();
	$url = "http://127.0.0.1:9200/scientists/_search?pretty";
	//$url = "http://127.0.0.1:9200/_search?pretty";
	curl_setopt($c, CURLOPT_URL, $url);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_POSTFIELDS, $d);
	curl_setopt($c, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	$output = curl_exec($c);
	echo json_encode($output);
	curl_close($c);
?>
