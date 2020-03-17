<?php
namespace oop\inheritance;
include 'Siswa.php';

Class Matpel extends Siswa{

    public function agama(){
        $nilai = 70;
        //..matpel agama nilainya 70;
        return $this -> getSiswa() . 'matpel agama nilainya'.$nilai;
    }
}

$obj = new Matpel();
echo $obj -> agama();
?>