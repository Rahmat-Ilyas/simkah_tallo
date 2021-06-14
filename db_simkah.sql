-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jun 2021 pada 21.52
-- Versi server: 10.4.18-MariaDB
-- Versi PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simkah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$GaLxMPNSqrGKrU45PCjQcOAwXlAtvnKGl05HWadIWfyIXG37iF3hy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_istri`
--

CREATE TABLE `tb_data_istri` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `warga_negara` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tggl_lahir` datetime NOT NULL,
  `umur` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_istri`
--

INSERT INTO `tb_data_istri` (`id`, `pendaftar_id`, `warga_negara`, `nik`, `nama`, `tempat_lahir`, `tggl_lahir`, `umur`, `alamat`, `status`, `agama`, `pekerjaan`, `pas_foto`) VALUES
(2, 1, 'WNI', '9980987654321', 'Fatimah', 'Mamuju', '1998-06-28 00:00:00', '22', 'Jl. Jenral Sudirman, No 12. Jakarta', 'Perawan', 'Islam', 'Mahasiswi', 'pas-foto-istri-1622298438.jpg'),
(3, 2, 'WNA', '9980987654321', 'Fatimah', 'Mamuju', '2006-05-24 00:00:00', '15', 'Jl. Jenral Sudirman, No 12. Jakarta', 'Perawan', 'Islam', 'Mahasiswi', 'pas-foto-istri-1623233347.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_suami`
--

CREATE TABLE `tb_data_suami` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `warga_negara` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tggl_lahir` datetime NOT NULL,
  `umur` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `pas_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_suami`
--

INSERT INTO `tb_data_suami` (`id`, `pendaftar_id`, `warga_negara`, `nik`, `nama`, `tempat_lahir`, `tggl_lahir`, `umur`, `alamat`, `status`, `agama`, `pekerjaan`, `pas_foto`) VALUES
(2, 1, 'WNI', '9980123456789', 'Fadil Al Fakai', 'Kambuno', '1998-02-14 00:00:00', '23', 'Jl. Jenral Sudirman, No 12. Jakarta', 'Jejaka', 'Islam', 'Mahasiswa', 'pas-foto-suami-1622298437.png'),
(3, 2, 'WNA', '9980123456789', 'Fadil Al Fakai', 'Kambuno', '2004-02-14 00:00:00', '17', 'Jl. Jenral Sudirman, No 12. Jakarta', 'Jejaka', 'Islam', 'Mahasiswa', 'pas-foto-suami-1623233347.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_data_wali`
--

CREATE TABLE `tb_data_wali` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `no_kk` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `hubungan` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tggl_lahir` varchar(255) NOT NULL,
  `umur` varchar(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telepon` varchar(25) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `bin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_data_wali`
--

INSERT INTO `tb_data_wali` (`id`, `pendaftar_id`, `nik`, `no_kk`, `nama`, `status`, `agama`, `hubungan`, `tempat_lahir`, `tggl_lahir`, `umur`, `alamat`, `no_telepon`, `pekerjaan`, `bin`) VALUES
(2, 1, '9980765443333', '9989777889998', 'Muhammar', 'Nasabah', 'Islam', 'Ayah', 'Karangpuang', '1984-11-24', '36', 'Jl. Jenral Sudirman, No 12. Jakarta', '020320321', 'Petani', 'Ayawa'),
(3, 2, '9980765443333', '9989777889998', 'Muhammar', 'Nasabah', 'Islam', 'Ayah', 'Karangpuang', '1990-09-27', '30', 'Jl. Jenral Sudirman, No 12. Jakarta', '020320321', 'Petani', 'Ayawa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_desa`
--

CREATE TABLE `tb_desa` (
  `id` int(11) NOT NULL,
  `nama_desa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_desa`
--

INSERT INTO `tb_desa` (`id`, `nama_desa`) VALUES
(1, 'BARUGAE'),
(2, 'KAMBUNO'),
(3, 'BONTOTENGGA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id` int(11) NOT NULL,
  `pendaftar_id` int(11) NOT NULL,
  `nik_a` varchar(255) NOT NULL,
  `nama_a` varchar(255) NOT NULL,
  `agama_a` varchar(255) NOT NULL,
  `pekerjaan_a` varchar(255) NOT NULL,
  `alamat_a` varchar(255) NOT NULL,
  `nik_i` varchar(255) NOT NULL,
  `nama_i` varchar(255) NOT NULL,
  `agama_i` varchar(255) NOT NULL,
  `pekerjaan_i` varchar(255) NOT NULL,
  `alamat_i` varchar(255) NOT NULL,
  `jenis_mk` varchar(255) NOT NULL,
  `jumlah_mk` int(11) NOT NULL,
  `pembayaran_mk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id` int(11) NOT NULL,
  `no_pendaftarn` varchar(255) NOT NULL,
  `desa_id` int(11) NOT NULL,
  `tempat_nikah` varchar(255) NOT NULL,
  `tggl_akad` date NOT NULL,
  `waktu_akad` varchar(255) NOT NULL,
  `lokasi_nikah` varchar(255) NOT NULL,
  `email_pendaftar` varchar(255) DEFAULT NULL,
  `penghulu_id` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `tanggal_daftar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id`, `no_pendaftarn`, `desa_id`, `tempat_nikah`, `tggl_akad`, `waktu_akad`, `lokasi_nikah`, `email_pendaftar`, `penghulu_id`, `status`, `tanggal_daftar`) VALUES
(1, '0000-22905-2021', 1, 'Di KUA', '2021-05-31', '12:00', 'Jl. Jenral Sudirman, No 12. Jakarta', NULL, NULL, 'acc', '2021-05-29 00:00:00'),
(2, '0001-20906-2021', 1, 'Di KUA', '2021-06-19', '20:00', 'Jl. Jenral Sudirman, No 12. Jakarta', NULL, NULL, 'new', '2021-06-09 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penghulu`
--

CREATE TABLE `tb_penghulu` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_penghulu`
--

INSERT INTO `tb_penghulu` (`id`, `nama`, `nip`, `alamat`, `jabatan`, `no_telepon`, `status`) VALUES
(1, 'Wahyuddin Annur', '09876666553', 'Jl. Bunga Harapan', 'Penghulu Madya', '085334223452', 'Tidak Aktif'),
(2, 'Amran', '99803442', 'Jl. Manggis', 'Penghulu Muda', '086443223465', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_istri`
--
ALTER TABLE `tb_data_istri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_suami`
--
ALTER TABLE `tb_data_suami`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_data_wali`
--
ALTER TABLE `tb_data_wali`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_penghulu`
--
ALTER TABLE `tb_penghulu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_data_istri`
--
ALTER TABLE `tb_data_istri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_suami`
--
ALTER TABLE `tb_data_suami`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_data_wali`
--
ALTER TABLE `tb_data_wali`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_desa`
--
ALTER TABLE `tb_desa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_penghulu`
--
ALTER TABLE `tb_penghulu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
