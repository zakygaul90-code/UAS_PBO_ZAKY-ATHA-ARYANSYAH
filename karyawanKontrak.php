<?php
// File: KaryawanKontrak.php
require_once 'Karyawan.php';

class KaryawanKontrak extends Karyawan {
    private $durasi_kontrak_bulan;
    private $agensi_penyaluran;

    public function __construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari, $durasi_kontrak_bulan, $agensi_penyaluran) {
        parent::__construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari);
        $this->durasi_kontrak_bulan = $durasi_kontrak_bulan;
        $this->agensi_penyaluran = $agensi_penyaluran;
    }

    // Tahap 4: Query Spesifik Kontrak
    public static function getDaftarKontrak($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'kontrak'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Tahap 5: Overriding Hitung Gaji (Murni Gaji Dasar * Hari Masuk)
    public function hitungTotalBiaya() {
        return $this->gaji_dasar_per_hari * $this->hari_kerja_masuk;
    }

    // Tahap 5: Overriding Tampilkan Atribut Unik
    public function tampilkanInfoJalur() {
        return "Vendor: " . $this->agensi_penyaluran . " (" . $this->durasi_kontrak_bulan . " Bulan)";
    }
}
?>