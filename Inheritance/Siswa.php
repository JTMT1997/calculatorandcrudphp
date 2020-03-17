<?php
namespace oop\inheritance;
class Siswa{
    protected function getSiswa(){
        $siswa = 'Jhon Doe';
        return $siswa;
    }
    public function findSiswa($params){
        return $params;
    }
}

?>