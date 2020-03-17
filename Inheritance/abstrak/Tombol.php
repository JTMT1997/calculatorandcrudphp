<?php
abstract class Tombol {
    abstract public function tekan();
}

class TombolLogin extends Tombol {
    public function tekan(){
        echo "Berhasil Login\n";
    }

}

$tombol = new TombolLogin();
$tombol ->tekan();
?>