<?php

class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $mataKuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    // Constructor
    public function __construct($nim, $nama, $kuliah, $mataKuliah) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mataKuliah = $mataKuliah;
    }

    // Function to set mata kuliah
    public function setMataKuliah($mataKuliah) {
        $this->mataKuliah = $mataKuliah;
    }

    // Function to set nilai, grade, predikat, dan status
    public function setNilai($nilai) {
        $this->nilai = $nilai;
        $this->setGrade();
        $this->setPredikat();
        $this->setStatus();
    }

    // Function to set grade based on nilai
    private function setGrade() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } else {
            $this->grade = 'D';
        }
    }

    // Function to set predikat based on nilai
    private function setPredikat() {
        if ($this->nilai >= 85) {
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 70) {
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            $this->predikat = 'Cukup';
        } else {
            $this->predikat = 'Kurang';
        }
    }

    // Function to set status based on nilai
    private function setStatus() {
        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>