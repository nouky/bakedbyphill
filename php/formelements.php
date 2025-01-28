<?php

function cakeflavorsDropdown($conn)
{
    $sql = "SELECT cakesid, description
			  FROM cakes
			 WHERE active=1
			 ORDER BY description";

    $html = '<select name="cakeflavor" class="form-control input-field"><option value="0" selected>Cake Flavor ??</option>';
    foreach($conn->query($sql) as $row) {
        $html .= '<option value="'. $row['cakesid'] .'">'. $row['description'] .'</option>';
    }
    $html .= "</select>";

    return $html;
}

function getPrices($item) {
    
    $jsondata = file_get_contents('php/sitedata.json'); 
    
	return json_decode($jsondata)->sections[0]->prices[0]->$item;
}

function setDecimal( $value ) {
    if ( strpos( $value, "." ) !== false ) {
        $newval = str_replace(".", ",", $value);
        $newval = hasOneDecimal($newval) ? $newval.'0' : $newval;
        return $newval;
        
    } elseif(!$value) {
        return;
    }
    return $value.',-';
}

function hasOneDecimal($number) {
    $parts = explode(",", $number);
    if (count($parts) === 2 && strlen($parts[1]) === 1) {
        return true;
    }
    return false;
}