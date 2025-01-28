<?php


//getCakePrices();

function getCakePrices(){
    foreach (readJson()["sections"] as $section){
        if ($section['prices']) {
            foreach($section['prices'] as $category) {
                if($category["category"] === "cakes"){
                    foreach($category["addon"] as $addon){
                        print_r( $addon);
                    }
                    foreach($category["cake"] as $cake){
                        print_r( $cake);
                    }                    
                }
            }
        }
    };
}

function readJson(){
    
    $json = file_get_contents('php/sitedata.json'); 
    
    // Check if the file was read successfully
    if ($json === false) {
        die('Error reading the JSON file');
    }
    
    // Decode the JSON file
    $json_data = json_decode($json, true); 
    
    // Check if the JSON was decoded successfully
    if ($json_data === null) {
        die('Error decoding the JSON file');
    }

    return $json_data;
}