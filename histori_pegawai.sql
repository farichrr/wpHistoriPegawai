-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jul 2016 pada 13.31
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
CREATE  DATABASE histori_pegawai;
USE histori_pegawai;
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_akademik`
--

CREATE TABLE `jabatan_akademik` (
  `kode_jabatanakademik` varchar(30) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('TP0002', 'Dosen Tetap Paruh Waktu');

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
