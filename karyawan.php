<?php
// File: Karyawan.php

abstract class Karyawan {
    // Atribut Global Terenkapsulasi (Protected)
    protected $id_karyawan;
    protected $nama_karyawan;
    protected $dapartemen;
    protected $hari_kerja_masuk;
    protected $gaji_dasar_per_hari;

    public function __construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari) {
        $this->id_karyawan = $id_karyawan;
        $this->nama_karyawan = $nama_karyawan;
        $this->dapartemen = $dapartemen;
        $this->hari_kerja_masuk = $hari_kerja_masuk;
        $this->gaji_dasar_per_hari = $gaji_dasar_per_hari;
    }

    // 2 Abstract Method wajib
    abstract public function hitungTotalBiaya(); // Merepresentasikan hitung total gaji
    abstract public function tampilkanInfoJalur(); // Merepresentasikan info spesifik status kerja
}
?>