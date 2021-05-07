<?php
class Pasien_model extends CI_Model {
    public $id, $nama, $kode, $gender, $tmp_lahir, $tgl_lahir;

    public function jenis_kelamin() {
        return $this->gender=="L" ? "Laki-laki" : "Perempuan";
    }
}

?>