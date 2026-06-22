<?php
// File: index.php
require_once 'koneksi/database.php';
require_once 'KaryawanTetap.php';
require_once 'KaryawanKontrak.php';
require_once 'KaryawanMagang.php';

// Inisialisasi Database
$database = new Database();
$db = $database->getConnection();

// Mengambil data per kelompok kategori (Tahap 6 No. 2)
$dataTetap = KaryawanTetap::getDaftarTetap($db);
$dataKontrak = KaryawanKontrak::getDaftarKontrak($db);
$dataMagang = KaryawanMagang::getDaftarMagang($db);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Manajemen Karyawan - Simulasi UAS PBO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container my-5">
        <h2 class="text-center mb-5 fw-bold text-dark">DASHBOARD DATA KARYAWAN PERUSAHAAN</h2>

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-primary text-white"><h5 class="mb-0">Kategori Karyawan: Tetap</h5></div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>Departemen</th>
                            <th>Hari Kerja</th>
                            <th>Spesifikasi Hak Atribut</th>
                            <th>Total Gaji Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataTetap as $row): 
                            $kry = new KaryawanTetap(
                                $row['id_karyawan'], $row['nama_karyawan'], $row['dapartemen'], 
                                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'],
                                $row['tujangan_kesehatan'], $row['opsi_saham_id']
                            );
                        ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($row['nama_karyawan']) ?></strong></td>
                            <td><?= htmlspecialchars($row['dapartemen']) ?></td>
                            <td class="text-center"><?= htmlspecialchars($row['hari_kerja_masuk']) ?> hari</td>
                            <td><span class="badge bg-primary"><?= $kry->tampilkanInfoJalur() ?></span></td>
                            <td class="text-end fw-bold text-primary">Rp <?= number_format($kry->hitungTotalBiaya(), 2, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-success text-white"><h5 class="mb-0">Kategori Karyawan: Kontrak</h5></div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>Departemen</th>
                            <th>Hari Kerja</th>
                            <th>Spesifikasi Hak Atribut</th>
                            <th>Total Gaji Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataKontrak as $row): 
                            $kry = new KaryawanKontrak(
                                $row['id_karyawan'], $row['nama_karyawan'], $row['dapartemen'], 
                                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'],
                                $row['durasi_kontrak_bulan'], $row['agensi_penyaluran']
                            );
                        ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($row['nama_karyawan']) ?></strong></td>
                            <td><?= htmlspecialchars($row['dapartemen']) ?></td>
                            <td class="text-center"><?= htmlspecialchars($row['hari_kerja_masuk']) ?> hari</td>
                            <td><span class="badge bg-success"><?= $kry->tampilkanInfoJalur() ?></span></td>
                            <td class="text-end fw-bold text-success">Rp <?= number_format($kry->hitungTotalBiaya(), 2, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mb-5 shadow-sm">
            <div class="card-header bg-warning text-dark"><h5 class="mb-0">Kategori Karyawan: Magang</h5></div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-hover align-middle">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama Karyawan</th>
                            <th>Departemen</th>
                            <th>Hari Kerja</th>
                            <th>Spesifikasi Hak Atribut</th>
                            <th>Total Gaji Diterima</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($dataMagang as $row): 
                            $kry = new KaryawanMagang(
                                $row['id_karyawan'], $row['nama_karyawan'], $row['dapartemen'], 
                                $row['hari_kerja_masuk'], $row['gaji_dasar_per_hari'],
                                $row['uang_saku_bulanan'], $row['sertifikat_kampus_merdeka']
                            );
                        ?>
                        <tr>
                            <td><strong><?= htmlspecialchars($row['nama_karyawan']) ?></strong></td>
                            <td><?= htmlspecialchars($row['dapartemen']) ?></td>
                            <td class="text-center"><?= htmlspecialchars($row['hari_kerja_masuk']) ?> hari</td>
                            <td><span class="badge bg-warning text-dark"><?= $kry->tampilkanInfoJalur() ?></span></td>
                            <td class="text-end fw-bold text-danger">Rp <?= number_format($kry->hitungTotalBiaya(), 2, ',', '.') ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</body>
</html>