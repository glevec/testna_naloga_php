<?php
    $data = file_get_contents("./podatki.json");
    //$data = file_get_contents("./primer_podatkov.json");
    //print_r($data);

    $arr = json_decode($data, true);
    $rez = array();

    foreach($arr as $key => $jsons) {
        foreach($jsons as $key => $value) {
            $rez[$key][] = $value;
        }
    }

    file_put_contents("rezultat.txt", json_encode($rez));
    //print_r($rez);
?>