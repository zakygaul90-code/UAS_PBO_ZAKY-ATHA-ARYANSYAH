<?php
// File: KaryawanMagang.php
require_once 'Karyawan.php';

class KaryawanMagang extends Karyawan {
    private $uang_saku_bulanan;
    private $sertifikat_kampus_merdeka;

    public function __construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari, $uang_saku_bulanan, $sertifikat_kampus_merdeka) {
        parent::__construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari);
        $this->uang_saku_bulanan = $uang_saku_bulanan;
        $this->sertifikat_kampus_merdeka = $sertifikat_kampus_merdeka;
    }

    // Tahap 4: Query Spesifik Magang
    public static function getDaftarMagang($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'magang'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Tahap 5: Overriding Hitung Gaji (Gaji Dasar * Hari Masuk + Uang Saku Bulanan)
    public function hitungTotalBiaya() {
        return ($this->gaji_dasar_per_hari * $this->hari_kerja_masuk) + $this->uang_saku_bulanan;
    }

    // Tahap 5: Overriding Tampilkan Atribut Unik
    public function tampilkanInfoJalur() {
        return "Sertifikat: " . $this->sertifikat_kampus_merdeka;
    }
}
?>