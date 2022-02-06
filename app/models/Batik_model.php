<?php 

class Batik_model {
    private $batik = [
        [
            "nama" => "Batik A",
            "asal_prov" => "Jabar",
            "asal_kota" => "Kota A" 
        ],
        [
            "nama" => "Batik B",
            "asal_prov" => "Jatim",
            "asal_kota" => "Kota B" 
        ]
    ];

    public function getAllBatik(){
        return $this->batik;
    }
}