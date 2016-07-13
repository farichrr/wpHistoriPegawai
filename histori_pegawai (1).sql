-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jul 2016 pada 18.22
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `histori_pegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `user` varchar(30) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`user`, `pass`, `nama`, `level`) VALUES
('admin', 'admin', 'admin', 1),
('pegawai', 'pegawai', 'pegawai', 2),
('budi', '123456', 'Budi Ariyanto', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pegawai`
--

CREATE TABLE `detail_pegawai` (
  `nip` bigint(12) NOT NULL,
  `nama` text NOT NULL,
  `tipe_pegawai` varchar(30) NOT NULL,
  `unit` varchar(30) NOT NULL,
  `status_aktif` varchar(30) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `tanggal_keluar` date NOT NULL,
  `keterangan_alasan` varchar(255) NOT NULL,
  `status_pegawai` varchar(50) NOT NULL,
  `pangkat_internal` varchar(50) NOT NULL,
  `pangkat_inpassing` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `jabatan_akademik` varchar(50) NOT NULL,
  `status_mengajar` varchar(50) NOT NULL,
  `rekening_bank` int(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `lampiran_biodata` varchar(255) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `telepon1` bigint(12) NOT NULL,
  `telepon2` bigint(12) NOT NULL,
  `alamat_malang` varchar(100) NOT NULL,
  `kodepos_malang` int(5) NOT NULL,
  `alamat_asal` varchar(100) NOT NULL,
  `kodepos_asal` int(5) NOT NULL,
  `negara` text NOT NULL,
  `propinsi` text NOT NULL,
  `kota` text NOT NULL,
  `status_pernikahan` text NOT NULL,
  `pendidikan_terakhir` varchar(30) NOT NULL,
  `golongan_darah` text NOT NULL,
  `no_tanda_pengenal` bigint(30) NOT NULL,
  `tanda_pengenal` varchar(30) NOT NULL,
  `no_bpjs_ketenagakerjaan` bigint(30) NOT NULL,
  `no_bpjs_kesehatan` bigint(30) NOT NULL,
  `no_bpjs_pensiun` bigint(30) NOT NULL,
  `no_askes_tambahan` bigint(30) NOT NULL,
  `npwp` bigint(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan_inpassing`
--

CREATE TABLE `golongan_inpassing` (
  `kode_golonganinpassing` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan_inpassing`
--

INSERT INTO `golongan_inpassing` (`kode_golonganinpassing`, `keterangan`) VALUES
('1', 'III'),
('2', 'IV'),
('3', NULL),
('4', NULL),
('5', NULL),
('6', NULL),
('7', NULL),
('8', NULL),
('9', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan_internal`
--

CREATE TABLE `golongan_internal` (
  `kode_golonganinternal` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan_internal`
--

INSERT INTO `golongan_internal` (`kode_golonganinternal`, `keterangan`) VALUES
('1', 'non JAD'),
('2', '100'),
('3', '150'),
('4', '200'),
('5', '300'),
('6', '400'),
('7', '550'),
('8', '700'),
('9', '850'),
('10', '1050'),
('11', 'A'),
('12', 'B'),
('13', 'C'),
('14', 'D'),
('15', NULL),
('16', NULL),
('17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `kode_jabatan` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`kode_jabatan`, `keterangan`) VALUES
('J001', 'Rektor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_akademik`
--

CREATE TABLE `jabatan_akademik` (
  `kode_jabatanakademik` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan_akademik`
--

INSERT INTO `jabatan_akademik` (`kode_jabatanakademik`, `keterangan`) VALUES
('JA001', 'Tenaga Pengajar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_inpassing`
--

CREATE TABLE `pangkat_inpassing` (
  `kode_pangkatinpassing` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_inpassing`
--

INSERT INTO `pangkat_inpassing` (`kode_pangkatinpassing`, `keterangan`) VALUES
('1', 'Penata Muda'),
('2', 'Penata Muda Tingkat I'),
('3', 'Penata'),
('4', 'Penata Tingkat I'),
('5', 'Pembina'),
('6', 'Pembina Tingkat I'),
('7', 'Pembina Utama Muda'),
('8', 'Pembina Utama Madya'),
('9', 'Pembina Utama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pangkat_internal`
--

CREATE TABLE `pangkat_internal` (
  `kode_pangkatinternal` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pangkat_internal`
--

INSERT INTO `pangkat_internal` (`kode_pangkatinternal`, `keterangan`) VALUES
('1', 'Adyapaka Muda II'),
('2', 'Adyapaka Madya I'),
('3', 'Adyapaka Madya II'),
('4', 'Adyapaka Chandra I'),
('5', 'Adyapaka Chandra II'),
('6', 'Adyapaka Chandra III'),
('7', 'Adyapaka Purna I'),
('8', 'Adyapaka Purna II'),
('9', 'Wira Karya Muda'),
('10', 'Wira Karya Pratama'),
('11', 'Wira Karya Madya'),
('12', 'Wira Karya Utama'),
('13', 'Wira Karya Purna'),
('14', NULL),
('15', NULL),
('16', NULL),
('17', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_inpassing`
--

CREATE TABLE `ruang_inpassing` (
  `kode_ruanginpassing` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang_inpassing`
--

INSERT INTO `ruang_inpassing` (`kode_ruanginpassing`, `keterangan`) VALUES
('1', 'a'),
('2', 'b'),
('3', 'c'),
('4', 'd'),
('5', 'e'),
('6', NULL),
('7', NULL),
('8', NULL),
('9', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang_internal`
--

CREATE TABLE `ruang_internal` (
  `kode_ruanginternal` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ruang_internal`
--

INSERT INTO `ruang_internal` (`kode_ruanginternal`, `keterangan`) VALUES
('1', '0 - 2'),
('2', '> 2 - 4'),
('3', '> 4 - 6'),
('4', '> 6 - 8'),
('5', '> 8 - 10'),
('6', '> 10 - 12'),
('7', '> 12 - 14'),
('8', '> 14 - 16'),
('9', '> 16 - 18'),
('10', '> 18 - 20'),
('11', '> 20 - 22'),
('12', '> 22 - 24'),
('13', '> 24 - 26'),
('14', '> 26 - 28'),
('15', '> 28 - 30'),
('16', '> 30 - 32'),
('17', '> 32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_pegawai`
--

CREATE TABLE `status_pegawai` (
  `kode_statuspegawai` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status_pegawai`
--

INSERT INTO `status_pegawai` (`kode_statuspegawai`, `keterangan`) VALUES
('S0001', 'KKWT'),
('S0002', 'Perpanjangan KKWT'),
('S0003', 'Tetap'),
('S0004', 'Tetap Paruh Waktu'),
('S0005', 'Tidak Tetap'),
('S0006', 'Tugas/Ijin Belajar'),
('S0007', 'Dinas Khusus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_pegawai`
--

CREATE TABLE `tipe_pegawai` (
  `kode_tipepegawai` varchar(30) DEFAULT NULL,
  `keterangan` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tipe_pegawai`
--

INSERT INTO `tipe_pegawai` (`kode_tipepegawai`, `keterangan`) VALUES
('TP0001', 'Dosen Tetap Penuh Waktu'),
('TP0002', 'Dosen Tetap Paruh Waktu'),
('TP0003', 'Dosen Luar Biasa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `kode_unit` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`kode_unit`, `keterangan`) VALUES
('FAK01', 'Fakultas Ekonomi dan Bisnis'),
('PS11', 'Prodi Manajemen'),
('PS12', 'Prodi Akuntansi'),
('LAB011', 'Laboratorium FEB'),
('FAK02', 'Fakultas Bahasa dan Seni'),
('PS21', 'Prodi Sastra Inggris'),
('PS22', 'Prodi Pendidikan Bhs. Mandarin'),
('LAB021', 'Laboratorium FBS'),
('FAK03', 'Fakultas Sains dan Teknologi'),
('PS31', 'Prodi Teknik Informatika'),
('PS32', 'Prodi Sistem Informasi'),
('PS33', 'Prodi Desain Komunikasi Visual'),
('PS41', 'Prodi Teknik Industri'),
('PS51', 'Prodi Kimia');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
