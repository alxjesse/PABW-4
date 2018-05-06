<?php

class M_data {

    public function random() {
        $a = array("Malang","Surabaya","Jakarta","Bogor","Jogjakarta","Semarang","Bandung","Pontianak","Medan");
        $b = array_rand($a,2);
        $c = $a[$b[0]];
        return $c;
    }

}