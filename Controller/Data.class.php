<?php

class Data {

    private $modelAngka;
    private $uiAngka;

    public function Index() {
        require_once 'View/VisualView.class.php';
        $a = new VisualView();
        $a->form();
    }

    public function lihatData() {

        $a = $_POST['Nama'];
        $b = $_POST['email'];
        $c = $_POST['NoHP'];
        $d = $_POST['Alamat'];
        $e = $_POST['check'];
        $f = $_POST['radio'];

        $poto = $_FILES['fileToUpload']['name'];
        $temp = $_FILES['fileToUpload']['tmp_name'];
        move_uploaded_file($temp, $_SERVER['DOCUMENT_ROOT']."PABW4/PABW-4/Assets/Images/".$poto);

        require_once 'Model/M_data.class.php';

        $this->modelAngka = new M_data();
        $asal = $this->modelAngka->random();

        //data yang udah di upload
        $data = array(
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e, 
            'f' => $f,
            'poto' => $poto,
            'asal' => $asal
        );

        require_once 'View/VisualView.class.php';
        $this->uiAngka = new VisualView();
        $this->uiAngka->table($data);
    }
}