<?php
class Contoh1 extends CI_Controller
{
    public function index()
    {
        phpinfo();
        die;
        echo "<h1>Perkenalkan</h1>";
        echo "Nama saya Imam Nawawi
            Saya tinggal di daerah ciputat
            olahraga yang saya sukai adalah
            bulutangkis";
    }
}
