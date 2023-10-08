-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 08:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblist_film`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `keterangan`) VALUES
(1, 'AC', 'AC 1 PK'),
(2, 'Sofa', NULL),
(3, 'Layar Lebar', NULL),
(4, 'LCD Projector', NULL),
(5, 'Sound System', NULL),
(6, 'Snack', NULL),
(7, 'Minuman', NULL),
(8, 'Kursi', '');

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) NOT NULL,
  `idgenre` int(11) NOT NULL,
  `idstudio` int(11) NOT NULL,
  `produksi` varchar(100) NOT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `status` enum('trending','popular','coming soon') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `judul`, `idgenre`, `idstudio`, `produksi`, `foto`, `deskripsi`, `keterangan`, `status`) VALUES
(1, 'KKN di Desa Penari', 1, 2, 'MD Pictures', NULL, 'KKN Di Desa Penari diadaptasi dari salah satu cerita horror yang telah viral di tahun 2019 melalui Twitter, menurut sang penulis, cerita ini diambil dari sebuah kisah nyata sekelompok mahasiswa yang tengah melakukan program KKN (Kuliah Kerja Nyata) di Desa Penari. Tak berjalan mulus, serentetan pengalaman horror pun menghantui mereka hingga program KKN tersebut berakhir tragis.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/jtDRXPTZT-M\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'trending'),
(2, 'Jakarta vs Everybody', 4, 4, 'Pratama Pradana Picture', NULL, 'Dom, seorang remaja yang sedang mencari jati diri, mencoba segala cara untuk mencapai mimpinya sebagai seorang aktor di Jakarta. Setelah serangkaian audisi yang gagal, Dom bertemu Radit dan Pinkan, seorang pasangan muda yang memberikannya pekerjaan. Menggunakan keterampilan aktingnya untuk berperan sebagai karakter yang berbeda, Dom terjemus dalam dunia hitam.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/vxEocfIALhc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(3, 'Cinta Subuh', 5, 5, 'Falcon Pictures', NULL, 'Angga, mahasiswa laki-laki yang jarang salat tepat waktu, jatuh cinta kepada Ratih, perempuan muda cerdas dan relijius, yang tidak pernah mengharapkan laki-laki seperti Angga mampu mencuri hatinya.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/DD79b9xhvkI\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(4, 'Jurassic World Dominion', 7, 1, 'Amblin Entertainment', NULL, 'Jurassic World Dominion adalah film petualangan sci-fi Amerika yang akan datang disutradarai oleh Colin Trevorrow, yang menulis skenario dengan Emily Carmichael, berdasarkan cerita oleh Trevorrow dan rekan penulisnya, Derek Connolly.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/k-RY-1UPFgQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming soon'),
(5, 'I Need You Baby', 2, 4, 'Blue Water Films', NULL, 'CATHY dan BENO 5 tahun menikah belum hamil juga.. !! Papi Mami Cathy yang tinggal di Australia mengancam, tahun depan kalau nggak hamil juga Cathy di minta ceraikan Beno. Cathy stress!..', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/TNzTUNEmqt8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(6, 'Ku Kira Kau Rumah', 5, 3, 'Sinemaku Pictures', NULL, 'PRAM, seorang pemuda yang kesepian, yang tak dapat bentuk rasa \"kasih\" dari kedua orang tuanya. Kekosongannya ia isi dengan menciptakan lagu-lagu bagus yang tak pernah didengar siapapun.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/yLIY-yaF9tE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(7, 'Kuntilanak 3', 1, 4, 'MVP Pictures', NULL, 'Setelah petualangan menghadapi dan mengalahkan kuntilanak, Geng Kuntilanak pulang dan mendapat kesulitan menjalankan kehidupan mereka secara normal.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/pSptzOeVqn8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'trending'),
(8, 'Pelangi Tanpa Warna', 6, 1, 'Falcon Pictures', NULL, 'Tak pernah terbayangkan oleh Fedi (Rano Karno), rancangan indah dalam pernikahannya hancur karena sang istri mengidap Alzheimer. Dari hari ke hari, Kirana (Maudy Koesnaedi) terus melupakan semua hal sederhana hingga paling penting dalam hidupnya.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/702ZWUwgU2Q\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(9, 'Doctor Strange in the Multiverse of Madness', 7, 3, 'Marvel Studios', NULL, 'Perjalanan ke tempat yang tidak diketahui bersama Doctor Strange, dengan bantuan sekutu mistis baik lama maupun baru, melintasi realitas alternatif Multiverse yang membingungkan dan berbahaya untuk menghadapi musuh baru yang misterius.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/NE2z4y2Imnc\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'trending'),
(10, 'The Batman', 3, 5, 'DC Films, 6th & Idaho, dan Dylan Clark Produ', NULL, 'Ketika Riddler, seorang pembunuh berantai yang sadis mulai membunuh tokoh-tokoh politik penting di Gotham, Batman dituntut untuk menyelidiki korupsi tersembunyi di kota itu dan mempertanyakan keterlibatan keluarganya.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/mqqft2x_Aa4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(11, 'The Ice Age Adventures of Buck Wild', 7, 2, 'Walt Disney Pictures, Bardel Entertainment, 2', NULL, 'The Ice Age Adventures of Buck Wild adalah sebuah film komedi petualangan animasi komputer Amerika tahun 2022 yang disutradarai oleh John C. Donkin, dalam debut penyutradaraannya, dengan skenario oleh Jim Hecht, Ray DeLaurentis, dan William Schifrin.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/0U0L4uT0btQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(12, 'The Lost City', 2, 4, 'Paramount', NULL, 'Loretta Sage seorang penulis novel romantis yang suka menyendiri, namun kehidupanya berubah ketika melakukan tur buku dengan lan model tampan yang menjadi cover novel terbarunya.mereka terseret dalam upaya penculikan yang membuat mereka berdua berada dalam petualangan yang tidak terduga di sebuah hutan.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/nfKO9rYDmE8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(13, 'Turning Red', 6, 5, 'Walt Disney Pictures dan Pixar Animation Studios', NULL, 'Turning Red adalah film animasi fantasi remaja yang diproduksi Walt Disney Pictures dan Pixar Animation Studios serta didistribusikan oleh Walt Disney Studios Motion Pictures. Ditulis dan disutradarai Domee Shi, diproduseri oleh Lindsey Collins, dan dibintangi oleh Rosalie Chiang dan Sandra Oh.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/XdKzUbAiswE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(14, 'Thor: Love and Thunder', 3, 1, 'Marvel Studios', NULL, 'Thor: Love and Thunder adalah sebuah film adiwira Amerika Serikat yang berdasarkan pada karakter Marvel Comics Thor, diproduksi oleh Marvel Studios dan didistribusikan oleh Walt Disney Studios Motion Pictures.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/Go8nTmfrQd8\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming soon'),
(15, 'Keluarga Cemara 2', 6, 3, 'Visinema Pictures; Jagartha; Blibli; Astro Shaw', NULL, 'Keluarga Cemara 2 adalah film drama keluarga Indonesia tahun 2022 yang disutradarai oleh Ismail Basbeth dan merupakan sekuel dari film Keluarga Cemara. Film produksi Visinema Pictures ini dibintangi oleh Ringgo Agus Rahman, Nirina Zubir, dan Adhisty Zara.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/DdpM2cLoJUQ\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'coming soon'),
(16, 'Gara-Gara Warisan', 2, 2, 'Starvision Plus', NULL, 'Tiga bersaudara yang tidak pernah akur terpaksa bersaing memperebutkan warisan berupa sebuah guest house milik Dahlan, ayah mereka. Adam, anak sulung yang menyalahkan sikap keras ayahnya untuk kegagalan-kegagalan hidupnya. Laras, anak tengah yang berjiwa independen dan idealis. Dan Dicky, anak bungsu kesayangan ayahnya yang dimanja sejak kecil dan tumbuh sebagai pemuda yang bengal. Siapakah yang akan menjadi ahli waris pilihan?', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/bgrJaKR9w-A\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(17, 'The Other Side', 4, 4, 'Lingkar Pictures', NULL, 'Alea seorang remaja 16 tahun yang memutuskan untuk pindah dari Jakarta ke Bandung, karena ingin melupakan mantannya Reynand yang berselingkuh dengan sahabatnya sendiri.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/ITuh3Lx1zpw\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(18, 'The Doll 3', 1, 3, 'Hitmaker Studios', NULL, 'Pasca tragedi kecelakaan yang membuat kedua orang tua Tara meninggal, kini Tara hanya memiliki adik laki-laki bernama Gian sebagai anggota keluarganya. Namun, kecelakaan tersebut membuat Gian trauma, hingga Gian memilih untuk mengakhiri hidupnya.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/l3RiBklg6ss\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'trending'),
(19, 'Ben & Jody', 4, 5, 'Visinema Pictures', NULL, 'Sejak keluar dari Filosofi Kopi, Ben (Chicco Jerikho) yang kini aktif membela kelompok petani untuk melawan perusahaan, kini menghilang. Jody (Rio Dewanto) sebagai sahabat setianya pun melakukan pencarian untuk menemukan keberadaan Ben.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/RHTrW0LN3E4\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular'),
(20, 'Uncharted', 3, 1, 'Columbia Pictures, PlayStation Productions, Atlas Entertainment, A2 Productions', NULL, 'Nathan Drake direkrut oleh pemburu harta karun berpengalaman Victor Sullivan (Sully) untuk mengembalikan kekayaan yang dikumpulkan oleh Ferdinand Magellan dan hilang 500 tahun yang lalu oleh House of Moncada.', '<iframe width=\"1100\" height=\"600\" src=\"https://www.youtube.com/embed/eHp3MbsCbMg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'popular');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id`, `nama`, `keterangan`) VALUES
(1, 'Horror', 'Film Horror'),
(2, 'Comedy', NULL),
(3, 'Action', NULL),
(4, 'Drama', NULL),
(5, 'Romance', NULL),
(6, 'Keluarga', NULL),
(7, 'Adventure', NULL),
(8, 'Fantasy', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(40) NOT NULL,
  `role` enum('admin','manager','staff','penonton') NOT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `fullname`, `email`, `username`, `password`, `role`, `foto`) VALUES
(1, 'Soni Nurafiq', 'soni@gmail.com', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'admin', 'soni.jpg'),
(2, 'Budi Santoso', 'budi@gmail.com', 'budi', '8e1c09c6427af15a85de62688aaca29a9708d79f', 'manager', 'budi.jpg'),
(3, 'Beni Wahyudi', 'beni@gmail.com', 'beni', '89e28f4efa388c8101aa9b6783fb4dbaece29911', 'penonton', 'beni.jpg'),
(4, 'Irawati', 'ira@gmail.com', 'ira', '57eb06a8e1a610067d3f9764ecd0db60478a614d', 'penonton', 'ira.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `studio`
--

CREATE TABLE `studio` (
  `id` int(11) NOT NULL,
  `kode` varchar(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `idfasilitas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `studio`
--

INSERT INTO `studio` (`id`, `kode`, `nama`, `idfasilitas`) VALUES
(1, 'S0001', 'Studio 01', 2),
(2, 'S0002', 'Studio 2', 3),
(3, 'S0003', 'Studio 3', 1),
(4, 'S0004', 'Studio 4', 4),
(5, 'S0005', 'Studio 5', NULL),
(6, 'S0006', 'Studio 6', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `waktu_tayang`
--

CREATE TABLE `waktu_tayang` (
  `id` int(11) NOT NULL,
  `idfilm` int(11) NOT NULL,
  `tayang_perdana` varchar(45) NOT NULL,
  `durasi` varchar(45) NOT NULL,
  `jam_mulai` varchar(45) DEFAULT NULL,
  `jam_selesai` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `waktu_tayang`
--

INSERT INTO `waktu_tayang` (`id`, `idfilm`, `tayang_perdana`, `durasi`, `jam_mulai`, `jam_selesai`) VALUES
(1, 1, '30 April 2022', '2j 1m', '13.00', '15.01'),
(2, 2, '24 Juni 2021', '1j 40m', '16.30', '18.10'),
(3, 3, '19 Mei 2022', '1j 52m', NULL, NULL),
(4, 4, '8 Juni 2022', '2j 26m', NULL, NULL),
(5, 5, '7 April 2022', '77 menit', NULL, NULL),
(6, 6, '3 Februari 2022', '1j 30m', NULL, NULL),
(7, 7, '30 April 2022', '1j 45m', NULL, NULL),
(8, 8, '17 Februari 2022', '85 menit', NULL, NULL),
(9, 9, '5 Mei 2022', '2j 6m', NULL, NULL),
(10, 10, '2 Maret 2022', '2j 56m', NULL, NULL),
(11, 11, '28 Januari 2022', '1j 22m', NULL, NULL),
(12, 12, '23 Maret 2022', '1j 52m', NULL, NULL),
(13, 13, '21 Februari 2022', '1j 40m', NULL, NULL),
(14, 14, '8 Juli 2022', '2j 13m', NULL, NULL),
(15, 15, '23 Juni 2022', '-', NULL, NULL),
(16, 16, '30 April 2022', '1j 57m', NULL, NULL),
(17, 17, '17 Maret 2022', '134 menit', NULL, NULL),
(18, 18, '26 Mei 2022', '115 menit', NULL, NULL),
(19, 19, '27 Januari 2022', '114 menit', NULL, NULL),
(20, 20, '16 Februari 2022', '1j 56m', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_film_studio1` (`idstudio`),
  ADD KEY `fk_film_genre1` (`idgenre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studio`
--
ALTER TABLE `studio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_studio_fasilitas1` (`idfasilitas`);

--
-- Indexes for table `waktu_tayang`
--
ALTER TABLE `waktu_tayang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_waktu_tayang_film1` (`idfilm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `studio`
--
ALTER TABLE `studio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `waktu_tayang`
--
ALTER TABLE `waktu_tayang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `fk_film_genre1` FOREIGN KEY (`idgenre`) REFERENCES `genre` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_film_studio1` FOREIGN KEY (`idstudio`) REFERENCES `studio` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `studio`
--
ALTER TABLE `studio`
  ADD CONSTRAINT `fk_studio_fasilitas1` FOREIGN KEY (`idfasilitas`) REFERENCES `fasilitas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `waktu_tayang`
--
ALTER TABLE `waktu_tayang`
  ADD CONSTRAINT `fk_waktu_tayang_film1` FOREIGN KEY (`idfilm`) REFERENCES `film` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
