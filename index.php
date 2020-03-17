<?php
// include 'Inheritance/Matpel.php';

spl_autoload_register(Function ($class){
    include'Inheritance/'. $class.'.php';
});
$obj = new Matpel();
$siswa = new Siswa();
echo $siswa -> findSiswa('a');
echo $obj ->agama();


?>