<?php
// File: KaryawanTetap.php
require_once 'Karyawan.php';

class KaryawanTetap extends Karyawan {
    private $tujangan_kesehatan;
    private $opsi_saham_id;

    public function __construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari, $tujangan_kesehatan, $opsi_saham_id) {
        parent::__construct($id_karyawan, $nama_karyawan, $dapartemen, $hari_kerja_masuk, $gaji_dasar_per_hari);
        $this->tujangan_kesehatan = $tujangan_kesehatan;
        $this->opsi_saham_id = $opsi_saham_id;
    }

    // Tahap 4: Query Spesifik Tetap
    public static function getDaftarTetap($db) {
        $query = "SELECT * FROM tabel_karyawan WHERE jenis_karyawan = 'tetap'";
        $stmt = $db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Tahap 5: Overriding Hitung Gaji (Gaji Dasar * Hari Masuk + Tunjangan)
    public function hitungTotalBiaya() {
        return ($this->gaji_dasar_per_hari * $this->hari_kerja_masuk) + $this->tujangan_kesehatan;
    }

    // Tahap 5: Overriding Tampilkan Atribut Unik
    public function tampilkanInfoJalur() {
        return "ID Saham: " . $this->opsi_saham_id . " | Tunjangan: Rp " . number_format($this->tujangan_kesehatan, 0, ',', '.');
    }
}
?>