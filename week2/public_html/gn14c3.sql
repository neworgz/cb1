-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2015 at 11:20 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gn14c3`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nomorp` text NOT NULL,
  `nig` int(20) NOT NULL,
  PRIMARY KEY (`id`,`nig`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama`, `password`, `nomorp`, `nig`) VALUES
(1, 'yuan', '35015dd23b25a435592d3418396d595f5ef2cbb1', '0987777', 222),
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '087839128028', 222);

-- --------------------------------------------------------

--
-- Table structure for table `sbindo`
--

CREATE TABLE IF NOT EXISTS `sbindo` (
  `no` int(10) NOT NULL AUTO_INCREMENT,
  `tahun` int(10) NOT NULL,
  `perintah` varchar(300) NOT NULL,
  `bacaan` varchar(900) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `jawab_a` varchar(300) NOT NULL,
  `jawab_b` varchar(300) NOT NULL,
  `jawab_c` varchar(300) NOT NULL,
  `jawab_d` varchar(300) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `sbindo`
--

INSERT INTO `sbindo` (`no`, `tahun`, `perintah`, `bacaan`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `kunci`) VALUES
(1, 2015, '', '', 'Dibawah ini, mana yang bukan\r\ntermasuk database Server ?', 'MySQL', 'Ms Access', 'Oracle', 'PostgreSQL', 'B'),
(2, 2015, '', '', 'Sopo kui yeru?', 'Kewan', 'Memolo', 'Setan', 'Tak di ketahui', 'B'),
(3, 2015, 'Perhatikan kutipan rubrik khusus berikut!', 'bhi15_04.png', 'Isi berita pada rubrik khusus tersebut adalah ….', 'Tawuran masih menjadi fakta cukup dominan pendidikan kita.', 'Gejala tawuran sebagai pengalaman semua anak sekolah.', 'Sistem informasi membuat para siswa meniru model pembelajaran yang salah.', 'Kekerasan di sekolah hendaknya segera diberantas.', 'A'),
(4, 2015, 'Bacalah teks berikut untuk menjawab soal nomor 4 – 8!', 'bhi15_03.png', 'Apa yang dilakukan Tono selama tidak masuk sekolah?', 'Bermain bersama teman-temannya', 'Memulung barang-barang bekas', 'Bekerja di dekat pasar', 'Merawat adik-adiknya', 'C'),
(5, 2015, '', '', 'Bagaimanakah keadaan keluarga Tono?\r\nKeadaan keluarga Tono…', 'Kaya raya', 'Suka menolong', 'Sederhana', 'Tidak mampu', 'A'),
(6, 2015, '', '', 'Di manakah Tono memulung barang-barang bekas?', 'Di dekat pertokoan', 'Di terminal', 'Di dekat pasar', 'Di stasiun', 'C'),
(7, 2015, '', '', 'Mengapa Tono menjadi seorang pemulung?', 'Untuk membayar uang sekolah', 'Membiayai keluarganya', 'Orang tuanya tidak pernah memberi uang saku', 'Orang tuanya sakit-sakitan', 'A'),
(8, 2015, '', '', 'Kesimpulan yang tepat untuk bacaan tersebut adalah...', 'Orang tua Tono tidak mengetahui kalau dia menjadi pemulung', 'Tono tidak masuk sekolah selama delapan hari, karena membantu orang tua mencari uang', 'Tono terpaksa menjadi pemulung', 'Dimas dan Adi menjenguk Tono karena sudah delapan hari tidak masuk sekolah', 'A'),
(9, 2015, 'Pahamilah cuplikan dongeng berikut ini!', 'Pada suatu masa di Kerajaan Daha dipimpin oleh seorang raja yang arif dan bijaksana bernama Prabu Erlangga. Prabu Erlangga selalu memperhatikan kesejahteraan rakyatnya, tidak jarang ia pergi ke desa hanya untuk melihat dari dekat kehidupan rakyatnya. Di sebuah desa yang bernama Girah, hidup seorang janda yang sangat bengis. Ia bernama Calon Arang. Calon Arang adalah seorang penganut sebuah aliran hitam, yakni kepercayaan sesat yang selalu mengumbar kejahatan memakai ilmu gaib. Ia mempunyai seorang putri bernama Ratna Manggali. Karena puterinya telah cukup dewasa dan Calon Arang tidak ingin Ratna Manggali tidak mendapatkan jodoh. Karena sifatnya yang bengis, Calon Arang tidak disukai oleh penduduk Girah. Maka tak seorang pemuda pun yang mau memperistri Ratna Manggali. Hal ini membuat marah Calon Arang. Ia berniat membuat resah warga desa Girah.', 'Perbedaan watak antara Prabu Erlangga dengan Calon Arang adalah ….', 'Prabu Erlangga arif bijaksana, sedangkan Calon Arang suka menolong', 'Prabu Erlangga serakah, sedangkan Calon Arang penganut ilmu gaib', 'Prabu Erlangga Arif bijaksana, sedangkan Calon Arang sangat bengis', 'Prabu Erlangga memperhatikan rakyat, sedangkan Calon Arang meresahkan rakyat', 'A'),
(10, 2015, 'Laporan penelitian siswa kelas VI SD Mekar Sari', 'Siswa kelas VI SD Mekar Sari melakukan penelitian tentang kebersihan sungai hulu. Penelitian dilakukan mulai tanggal 8 – 14 Februari 2011. Hasil penelitian menunjukkan bahwa kondisi sungai hulu sangat memprihatinkan. Sungai yang bersih dan sehat sudah jarang ditemui. Sungai yang sehat dan bersih hanya terdapat di desa-desa yang jauh dari industri dan pabrik.', 'Topik laporan penelitian di atas adalah .…', 'Penelitian siswa SD Mekar Sari', 'Limbah pabrik mencemari sungai', 'Kebersihan Sungai Hulu', 'Sungai yang bersih jarang ditemui', 'C'),
(11, 2014, '', 'Danar : ”Kenapa kamu bersedih, To?” (sambil menghampiri Darto)\r\nDarto : ”Nilai ulanganku jelek sekali, Nar.” Aku memang banyak bermain akhir-akhir ini. (tertunduk\r\nlesu)\r\nDanar : ”Sudahlah, To jangan bersedih. Jadikan ini sebuah pelajaran agar kamu lebih rajin belajar.”\r\nDarto : “Aku takut dimarahi ayahku.”\r\nDanar : “Mintalah maaf pada ayahmu, dan berjanji tidak mengulang lagi.”', 'Amanat yang terkandung dalam cuplikan drama tersebut adalah…', 'Jangan selalu bersedih hati', 'Berkata jujur pada orang tua', 'Takut dimarahi orang tua karena nilai jelek', 'Sebagai pelajar kita harus rajin belajar', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `sipa`
--

CREATE TABLE IF NOT EXISTS `sipa` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `perintah` varchar(300) NOT NULL,
  `bacaan` varchar(255) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `jawab_a` varchar(300) NOT NULL,
  `jawab_b` varchar(300) NOT NULL,
  `jawab_c` varchar(300) NOT NULL,
  `jawab_d` varchar(300) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sipa`
--

INSERT INTO `sipa` (`no`, `perintah`, `bacaan`, `pertanyaan`, `jawab_a`, `jawab_b`, `jawab_c`, `jawab_d`, `kunci`) VALUES
(1, 'Cermatilah bacaan berikut ini!', 'bhi15_04.png', 'Kowesopo?', 'Manusia', 'Kewan', 'Memolo', 'Setan', 'A'),
(2, 'Cermatilah bacaan berikut in', 'a1.png', 'Kowesopo?', 'a', 'b', 'c', 'd', 'A'),
(5, 'f', '10985260_10200554851750334_2456237560872451312_n.jpg', 'ghjghj', 'dfgd', 'dfgdfg', 'dfgdfg', 'fgdfg', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `nomorp` text NOT NULL,
  `nis` int(20) NOT NULL,
  PRIMARY KEY (`id`,`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `password`, `nomorp`, `nis`) VALUES
(1, 'cahyo', '80715ba0abd1519336db98136658f1b8657ad053', '087839128028', 222),
(2, 'yeru', '96723941398c4f0baf64d477cc0100c0f1ad8aab', '087839128028', 222),
(3, 'tenglang', '6721c6a1dd5d7c72c6cd919fdb0bfd64b8443f9f', '087839128028', 222);

-- --------------------------------------------------------

--
-- Table structure for table `smtk`
--

CREATE TABLE IF NOT EXISTS `smtk` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `perintah` varchar(300) NOT NULL,
  `bacaan` varchar(255) NOT NULL,
  `pertanyaan` varchar(300) NOT NULL,
  `jawab_a` varchar(300) NOT NULL,
  `jawab_b` varchar(300) NOT NULL,
  `jawab_c` varchar(300) NOT NULL,
  `jawab_d` varchar(300) NOT NULL,
  `kunci` enum('A','B','C','D') NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
