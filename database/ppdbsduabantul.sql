-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2020 pada 12.04
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `psbsdua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `asal_mula_anak`
--

CREATE TABLE `asal_mula_anak` (
  `kode_pendaftaran` varchar(100) NOT NULL,
  `masuk_sbg` varchar(100) NOT NULL,
  `asal_anak` varchar(100) NOT NULL,
  `nama_tk` varchar(100) NOT NULL,
  `alamat_tk` varchar(100) NOT NULL,
  `nama_sklh_asal` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `dari_kls` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `asal_mula_anak`
--

INSERT INTO `asal_mula_anak` (`kode_pendaftaran`, `masuk_sbg`, `asal_anak`, `nama_tk`, `alamat_tk`, `nama_sklh_asal`, `tanggal`, `dari_kls`) VALUES
('210077906503', 'Siswa Baru Kelas 1', 'Taman Kanak-kanak(TK)', 'TK Seruni Badau', 'Jl. Jendral Sudirman', '-', '-', '-');

-- --------------------------------------------------------

--
-- Struktur dari tabel `catatan`
--

CREATE TABLE `catatan` (
  `kode_pendaftaran` varchar(100) NOT NULL,
  `nama_1` varchar(100) NOT NULL,
  `kelas_1` varchar(100) NOT NULL,
  `nama_2` varchar(100) NOT NULL,
  `kelas_2` varchar(100) NOT NULL,
  `hubungan` varchar(100) NOT NULL,
  `ortu_1` varchar(100) NOT NULL,
  `ortu_2` varchar(100) NOT NULL,
  `dll` varchar(100) NOT NULL,
  `riwayat_kesehatan` varchar(100) NOT NULL,
  `akte_kelahiran` varchar(500) NOT NULL,
  `ijazah` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `catatan`
--

INSERT INTO `catatan` (`kode_pendaftaran`, `nama_1`, `kelas_1`, `nama_2`, `kelas_2`, `hubungan`, `ortu_1`, `ortu_2`, `dll`, `riwayat_kesehatan`, `akte_kelahiran`, `ijazah`) VALUES
('210077906503', '-', '-', '-', '-', '-', '-', '-', '-', '-', 'IMG-20190201-WA0001.jpg', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_otru`
--

CREATE TABLE `data_otru` (
  `kode_pendaftaran` varchar(100) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `tmpt_lahir_ayah` varchar(100) NOT NULL,
  `tgl_lahir_ayah` date NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pendidikan_ayah` varchar(100) NOT NULL,
  `penghasilan_ayah` varchar(100) NOT NULL,
  `no_hp_ayah` int(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `tmpt_lahir_ibu` varchar(100) NOT NULL,
  `tgl_lahir_ibu` date NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `pendidikan_ibu` varchar(100) NOT NULL,
  `penghasilan_ibu` varchar(100) NOT NULL,
  `no_hp_ibu` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_otru`
--

INSERT INTO `data_otru` (`kode_pendaftaran`, `nama_ayah`, `tmpt_lahir_ayah`, `tgl_lahir_ayah`, `pekerjaan_ayah`, `pendidikan_ayah`, `penghasilan_ayah`, `no_hp_ayah`, `nama_ibu`, `tmpt_lahir_ibu`, `tgl_lahir_ibu`, `pekerjaan_ibu`, `pendidikan_ibu`, `penghasilan_ibu`, `no_hp_ibu`) VALUES
('210077906503', 'Edy Suprapto', 'Badau', '2020-08-19', 'Pegawai Negeri Sipil', 'S2', '3 - 5 Juta/bln', 2147483647, 'Agustiniyati', 'Kelapa Kampit', '2020-07-31', 'Ibu Rumah Tangga', 'SMK', '5 - 7 Juta/bln', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_siswa`
--

CREATE TABLE `data_siswa` (
  `kode_pendaftaran` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(20) NOT NULL,
  `berat_bdn` int(100) NOT NULL,
  `tinggi_bdn` int(100) NOT NULL,
  `golongan_darah` enum('A','B','AB','O') NOT NULL,
  `penyakit` varchar(1000) NOT NULL,
  `alergi_makanan` varchar(1000) NOT NULL,
  `alamat_rumah` varchar(100) NOT NULL,
  `jarak_rumah_kesekolah` varchar(100) NOT NULL,
  `bertempat_tinggal_pada` enum('Orang tua','Menumpang','Asrama','Lainnya') NOT NULL,
  `status` enum('Belum diverifikasi','diterima','tidak diterima','') NOT NULL,
  `tgl_pendaftaran` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_siswa`
--

INSERT INTO `data_siswa` (`kode_pendaftaran`, `nama_lengkap`, `jenis_kelamin`, `tmpt_lahir`, `tgl_lahir`, `agama`, `berat_bdn`, `tinggi_bdn`, `golongan_darah`, `penyakit`, `alergi_makanan`, `alamat_rumah`, `jarak_rumah_kesekolah`, `bertempat_tinggal_pada`, `status`, `tgl_pendaftaran`) VALUES
('210077906503', 'Eef Mekelliano', 'Laki-laki', 'Kelapa Kampit', '2020-08-20', 'Islam', 47, 162, 'AB', 'tidak ada', 'tidak ada', 'JL.Karya Bakti, Desa Badau, Kecamatan Badau, Belitung, Bangka Belitung', '3 - 5 Km', 'Orang tua', 'diterima', '2020-08-21 12:39:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_daftar`
--

CREATE TABLE `pengaturan_daftar` (
  `id` int(11) NOT NULL,
  `opsi` enum('Buka','Tutup','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan_daftar`
--

INSERT INTO `pengaturan_daftar` (`id`, `opsi`) VALUES
(1, 'Buka');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan_pengumuman`
--

CREATE TABLE `pengaturan_pengumuman` (
  `id` int(11) NOT NULL,
  `opsi` enum('Buka','Tutup','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengaturan_pengumuman`
--

INSERT INTO `pengaturan_pengumuman` (`id`, `opsi`) VALUES
(1, 'Buka');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `asal_mula_anak`
--
ALTER TABLE `asal_mula_anak`
  ADD UNIQUE KEY `kode_pendaftaran` (`kode_pendaftaran`);

--
-- Indeks untuk tabel `catatan`
--
ALTER TABLE `catatan`
  ADD UNIQUE KEY `kode_pendaftaran` (`kode_pendaftaran`);

--
-- Indeks untuk tabel `data_otru`
--
ALTER TABLE `data_otru`
  ADD UNIQUE KEY `kode_pendaftaran` (`kode_pendaftaran`);

--
-- Indeks untuk tabel `data_siswa`
--
ALTER TABLE `data_siswa`
  ADD PRIMARY KEY (`kode_pendaftaran`);

--
-- Indeks untuk tabel `pengaturan_daftar`
--
ALTER TABLE `pengaturan_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan_pengumuman`
--
ALTER TABLE `pengaturan_pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `pengaturan_daftar`
--
ALTER TABLE `pengaturan_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengaturan_pengumuman`
--
ALTER TABLE `pengaturan_pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
