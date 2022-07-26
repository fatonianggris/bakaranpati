-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 05:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) NOT NULL,
  `header` text NOT NULL,
  `nama_tombol` text NOT NULL,
  `konten` text NOT NULL,
  `foto` text NOT NULL,
  `foto_thumb` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `tag` text NOT NULL,
  `highlight` text NOT NULL,
  `isi_blog` text NOT NULL,
  `gambar` text NOT NULL,
  `gambar_thumb` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `judul`, `tag`, `highlight`, `isi_blog`, `gambar`, `gambar_thumb`, `date`) VALUES
(1, 'Sejarah Brand Batik – CANTINGKU', 'Batik, Sejarah Batik', 'Batik merupakan kain yang terdapat corak dan motif. Pembuatan batik tak lepas dari alat pembuatannya yaitu menggunakan Canting. Canting sendiri merupakan sebuah alat yang digunakan untuk memberikan corak pada batik tulis. Pada alat tersebut memiliki tiga bagian utama yaitu Nyamplung, Cucuk dadn Gagang.', '<p>Nyamplung merupakan tempat menampung cairan malam (lilin yang dicairkan) dan terbuat dari bahan tembaga. Kemudian untuk bagian Cucuk merupakan wadah untuk menyalurkan cairan malam dan bagian yang terakhir adalah Gagang yang berguna sebagai tangkai Canting yang terbuat dari bahan bambu ataupun kayu.</p>\r\n<p>Tiga bagian utama tersebut mewakili jiwa dari warga Pulau Jawa yang merupakan tempat asal mula batik tulis. Gagang menggambarkan pondasi yang cukup kuat sebagaimana keimanan kepada Tuhan Yang Maha Esa, kemudian bagian Nyamplung menggambarkan sebagai kebesaran hati dalam menampung semua permasalahan dalam kehidupan. Bagian terakhir Cucuk, dengan bagan yang berukuran paling kecil dan dalam penggunaannya harus cukup hati-hati ini menyiratkan pada kehidupan bahwa dalam berucap harus sesuai dengan norma agar tidak memunculkan permasalah dengan sesama.</p>\r\n<p>Canting bagi orang awam (belum mengetahui) mungkin disebut sebagai benda mati, tetapi berbeda dengan orang-orang yang telah memahami dan menjiwai canting pada proses pembuatan kain batik, Canting merupakan benda yang mempunyai ruh dan bisa dijelaskan bahwa benda ini mempunyai nyawa. Karena pada saat dalam pembuatan disuguhkan corak-corak keindahan yang tidak pernah dilihat sebelumnya dan keindahan dari corak kain tersebut tak lekang oleh waktu. Untuk menghasilkan batik tulis yang bernilai seni, maka diperlukan penyatuan diri atau menjiwai antara jiwa pembatik (pelaku) dengan Canting yang akan digunakan dalam proses menulis batik tulis tersebut.</p>\r\n<p>Dan juga dibutuhkan harmoni antara hembusan nafas dan perasaan saat mulai menuangkan cairan malam pertama dalam lembaran kain putih. Tidak hanya membutuhkan kekuatan untuk memegang Gagang Canting, tetapi juga kebesaran dalam jiwa dan kesabaran yang cukup besar dalam menciptakan tetes demi tetes goresan keindahan yang dituangkan melalui Cucuk Canting di kain putih tersebut. Dengan begitu akan terciptalah karya-karya keindahan batik tulis yang mempunyai nilai seni.</p>\r\n<p>Batik akan selalu hidup dalam hati dan jiwa manusia yang memiliki ruang kesabaran, ketilitian, penjiwaan yang kaya akan motif dan corak dalam memahami kehidupan.</p>\r\n<p>Owner of Cantingku:</p>\r\n<ol>\r\n<li>Ibu Wiwik Purwasih</li>\r\n<li>Ibu Darni</li>\r\n<li>Ibu Misih</li>\r\n<li>Ibu Suharni</li>\r\n<li>Ibu Juwati</li>\r\n<li>Ibu Karti</li>\r\n<li>Bapak Tamzis Alanas</li>\r\n<li>Ibu Susilaningsih</li>\r\n<li>Ibu Sayem</li>\r\n<li>Ibu Susiwi</li>\r\n</ol>\r\n<p>Address: Bakaran Kulon, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah</p>', 'uploads/blog/3d25500a3c8c3b7564723b1aa9e5d411.png', 'uploads/blog/thumbs/3d25500a3c8c3b7564723b1aa9e5d411.png', '2019-09-30 08:32:27'),
(2, 'Sejarah Brand Batik – ANARGHYA', 'Batik, Sejarah Batik', 'Anarghya merupakan kata yang berasala dari istilah Bahasa Jawa, yang mempunyai arti tak ternilai harganya. Dengan makna tersebut keindahan kain batik tulis yang telah dibuat oleh para pengrajin batik tidak bisa dinilai dengan nominal saja, tetapi estetika keindahan dalam pembuatan dan hasil dari karya tersebut mempunyai nilai seni yang cukup besar. ', '<p>Dalam hal pembuatan batik dibutuhkan kesabaran dan ketelitian yang cukup besar, dimana setiap meneteskan cairan lilin di sebuah kain putih tidak hal yang mudah dilakukan oleh sebagian besar orang. Pada karya-karya batik yang telah dibuat oleh Anarghya mempunyai makna batik tersendiri, sebagai karya seni yang mempunyai nilai seni, nilai wibawa dan nilai peninggalan kebudayaan batik sebagai warisan seni dan budaya bangsa Indonesia yang telah diketahui dan bahkan diakui di seluruh dunia.</p>\r\n<p>Inti dari logo kami adalah bentuk sebuah canting, yang merupakan alat yang digunakan dalam proses pembatikan dan selember kain yang membentuk huruf A (Anarghya) dan sebuah langkah. Ditujukan untuk setiap kami membuat produksi batik selalu mempunyai invoasi dan keunikan tersendiri dalam menghasilkan karya. Sekalipun mendapati beberapa tantangan dengan budaya modern, kami juga akan tetap selalu berkreasi dan menghasilkan karya-karya yang bisa bersaing dengan kebudayaan modern saat ini. Keindahan batik yang kami hasilkan akan selalu terkenang dalam hati.</p>\r\n<p>Owner of Anarghya:</p>\r\n<ol>\r\n<li>Bapak Bagiyo</li>\r\n<li>Bapak Herutomo</li>\r\n<li>Bapak Dardi</li>\r\n<li>Ibu Misih</li>\r\n<li>Ibu Tini</li>\r\n</ol>\r\n<p>Address: Bakaran Wetan RT 001 RW 002 Kec. Juwana Kab. Pati Jawa Tengah</p>', 'uploads/blog/1e560b7b7857a2090b8efc288525d836.png', 'uploads/blog/thumbs/1e560b7b7857a2090b8efc288525d836.png', '2019-09-30 08:33:39'),
(3, 'Sejarah Batik Bakaran Pati', 'Batik, Sejarah Batik', 'Motif batik tulis Bakaran bila dilihat dari segi warna mempunyai mempunyai ciri tersendiri, yaitu warna yang mendominasi batik Bakaran adalah hitam dan coklat. Unsur corak atau motifnya beraliran pada corak motif batik Tengahan dan batik Pesisir. Aliran Tengahan, karena yang memperkenalkan batik tulis pada wilayah Desa Bakaran adalah dari kalangan kerajaan Majapahit.', '<p>Dan Jenis motif tengahan ini diindikasikan pada corak batik Padas Gempal, Gringsing, Bregat Ireng, Sido Mukti, Sido Rukun, Namtikar, Limanan, Blebak Kopik, Merak Ngigel, Nogo Royo, Gandrung, Rawan,Truntum, Megel Ati, Liris, Blebak Duri, Kawung Tanjung, Kopi Pecah, Manggaran, Kedele Kecer, Puspo Baskora, ungker Cantel, blebak lung, dan beberapa motif tengahan yang lain.</p>\r\n<p>Sedangkan beraliran batik tulis pesisir, karena secara geografis letak wilayah Desa tersebut memang terdapat dipesisir pantai dan aliran pesisir ini diindikasikan pada motif batik tulis, blebak Urang, dan loek Chan. Pada umumnya corak batik Bakaran berbeda dengan corak batik daerah lain, baik dari segi gambar, ornamen maupun warnanya. Pada setiap motif umumnya mempunyai makna yang sangat filosofis.</p>\r\n<p>Keterampilan membatik tulis bakaran di Desa Bakaran tak lepas dari buah didikan Nyi Banoewati, penjaga museum pusaka dan pembuat seragam prajurit pada akhir Kerajaan Majapahit abad ke-14.</p>\r\n<p>Motif batik yang diajarkan Nyi Banoewati adalah motif batik Majapahit, misalnya, sekar jagat, padas gempal, magel ati, dan limaran. Sedangkan motif khusus yang diciptakan Nyi Baneowati sendiri yaitu motif gandrung. Motif itu terinspirasi dari pertemuan dengan Joko Pakuwon, kekasihnya, di Tiras Pandelikan.</p>\r\n<p>Waktu itu Joko Pakuwon berhasil menemukan Nyi Banoewati. Kedatangan Joko Pakuwon membuat Nyi Banoewati yang sedang membatik melonjak gembira. Sehingga secara tidak sengaja tangan Nyi Banoewati mencoret kain batik dengan canting berisi malam, yang memang saat itu aktifitasnya disibukkan dengan membatik.</p>\r\n<p>Coretan itu membentuk motif garis-garis pendek. Di sela-sela waktunya, Nyi Banoewati menyempurnakan garis-garis itu menjadi motif garis silang yang melambangkan kegandrungan atau kerinduan yang tidak terobati. Motif-motif khas itu perlu mendapat perlakuan khusus dalam pewarnaan. Pewarnanya pun harus menggunakan bahan-bahan alami. Misalnya, kulit pohon tingi yang menghasilkan warna coklat, kayu tegoran warna kuning, dan akar kudu warna sawo matang.</p>\r\n<p>Sayangnya, bahan-bahan pewarna itu sudah sulit ditemui. Waktu itu, batik bakaran menjadi komoditas perdagangan antar pulau melalui Pelabuhan Juwana dan menjadi tren pakaian para pejabat Kawedanan Juwana. Meskipun kesulitan bahan pewarna, batik tulis bakaran banyak peminat. Saat ini warga Bakaran selain melestarikan motif Nyi Banoewati, mereka juga mengembangkan aneka macam motif kontemporer, antara lain motif pohon druju (juwana), gelombang cinta, kedele kecer, jambu alas, dan blebak urang. Yang kemudian menjadi ciri khas batik bakaran adalah motif ”retak atau remek-nya.</p>\r\n<p>Ada beberapa proses, dan teknik dalam pembuatan batik bakaran, yakni mulai dari nggirah, nyimplong, ngering, nerusi, nembok, medel, nyolet, mbironi, nyogo, dan nglorod. Proses ini bertahap mulai tahap pertama sampai terakhir. Bila sudah selesai maka corak batik sudah bisa dinikmati. Tahapan-tahapan tersebut dikerjakan perajin secara manual tanpa ada alat-alat baru seperti cap, printing, sablon dsb.</p>\r\n<p>Dahulu para perajin sebelum proses pembatikan dimulai, mereka melakukan ritual dulu. Ada yang puasa 3 hari, ada yang satu minggu, ada yang satu bulan ada yang 40 hari. Setelah melakukan puasa ini perajin melakukan pertapaan/ nyep dengan tujuan mendapatkan inspirasi/ ilham, sehingga suatu ketika atau secara tiba-tiba tidak tersadari mendapat gambaran/ bayangan motif batik yang akan dibuat. Biasanya motif tersebut menggambarkan kondisi masyarakat yang ada dan memberikan pesan moral pada masyarakat. Dan ada juga menunjukkan latar belakang si perajin itu sendiri. Jadi setiap motif batik ada maksud dan tujuan yang diharapkan pembatik. Atau ada pesan-pesan yang terkandung didalam motif tersebut.</p>\r\n<p>Sekarang ini batik bakaran sudah ada yang dipatenkan oleh Ditjen HAKI sebagi motif batik milik pati. Terhitung semuanya berjumlah 17 motif yang terpatenkan. Ke17 motif itu semuanya adalah motif klasik. Di antaranya adalah, motif blebak kopik, rawan, liris, kopi pecah, truntum, gringsing, sidomukti, sidorukun, dan limaran, dan lain sebagainya.</p>\r\n<p>Sumber : sumber: http://www.murianews.com</p>', 'uploads/blog/933ba665da8d1476824aed41bf626d57.png', 'uploads/blog/thumbs/933ba665da8d1476824aed41bf626d57.png', '2019-09-30 08:45:17'),
(4, 'Jenis Kain Prima ', 'Batik, Jenis Kain', 'Batik adalah kain bergambar yang pembuatannya secara khusus dengan menuliskan atau menerakan malam pada kain itu, kemudian pengolahannya diproses dengan cara tertentu yang memiliki kekhasan.', '<p>Kain Prima adalah Kain katun yang mempunyai sifat dasar sedikit kasar, namun saat diproduki sebagai pakaian akan terasa nyaman saat digunakan. Pada umumnya Kain Prima dapat diperoleh dengan mudah dipasaran dan harga kainnya cukup terjangkau. Penggunaan kain prima dalam proses pembatikan digunakan pada saat pembuatan motif-motif batik yang unik, seperti pembuatan model bunga secara abstrak.</p>', 'uploads/blog/0b42bc7b8dca271b6b985ab3ae62f461.jpg', 'uploads/blog/thumbs/0b42bc7b8dca271b6b985ab3ae62f461.jpg', '2019-09-30 08:45:57'),
(5, 'Jenis Kain Primis', 'Batik, Jenis Kain', 'Batik adalah kain bergambar yang pembuatannya secara khusus dengan menuliskan atau menerakan malam pada kain itu, kemudian pengolahannya diproses dengan cara tertentu yang memiliki kekhasan.', '<p>Kain Primis adalah Kain katun yang mempunyai sifat dasar yang sama dengan kain prima yaitu nyaman saat digunakan akan tetapi kain Primis mempunyai tingkat ketebalan yang lebih dibandingkan dengan kain Prima. Kain Primis mempunyai harga yang cukup mahal dibandingkan dengan Kain Prima dikarenakan Kain Primis mempunyai tekstur kain yang lebih halus dibandingkan Kain Prima.</p>', 'uploads/blog/b63fa4eac79ccb54943ce4759f8dfcbb.jpg', 'uploads/blog/thumbs/b63fa4eac79ccb54943ce4759f8dfcbb.jpg', '2019-09-30 08:46:37');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `ucapan` text NOT NULL,
  `no_cs` text NOT NULL,
  `email` text NOT NULL,
  `pusat_lokasi` text NOT NULL,
  `label_src` text NOT NULL,
  `nama_promo` text NOT NULL,
  `isi_label_promo` text NOT NULL,
  `alamat_web` text NOT NULL,
  `logo_web` text NOT NULL,
  `logo_web_thumb` text NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `instagram` text NOT NULL,
  `youtube` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `ucapan`, `no_cs`, `email`, `pusat_lokasi`, `label_src`, `nama_promo`, `isi_label_promo`, `alamat_web`, `logo_web`, `logo_web_thumb`, `facebook`, `twitter`, `instagram`, `youtube`, `date`) VALUES
(1, 'Selamat Datang di Batik Bakaran Pati Khas Jawa Tengah', '81242347115', 'dinobudiprakoso@gmail', 'Bakaran Kulon, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', 'Batik Bakar Pati Jawa Tengah', 'PROMO TERBATAS !!!', 'Mari berbelanja dan dapatkan potongan 20% untuk pembelian pertama', 'Bakaran Kulon, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', 'uploads/icon/50fd0aa058dc88fe62d8856812d900ff.png', 'uploads/icon/thumbs/50fd0aa058dc88fe62d8856812d900ff.png', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', '2019-09-30 08:38:26'),
(2, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2019-09-30 08:38:26'),
(3, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', '2019-09-30 08:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(10) NOT NULL,
  `nama_kat` text NOT NULL,
  `icon` text NOT NULL,
  `icon_thumb` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama_kat`, `icon`, `icon_thumb`, `date`) VALUES
(1, 'Kain Batik Kulon', 'uploads/icon/38ed815e7d88167a53ebc55b6b513c22.jpg', 'uploads/icon/thumbs/38ed815e7d88167a53ebc55b6b513c22.jpg', '2019-09-30 08:29:48'),
(2, 'Kain Batik Wetan', 'uploads/icon/46c9f063ce8d27f214d2d697b6aba722.jpg', 'uploads/icon/thumbs/46c9f063ce8d27f214d2d697b6aba722.jpg', '2019-09-30 08:30:24');

-- --------------------------------------------------------

--
-- Table structure for table `pemilik`
--

CREATE TABLE `pemilik` (
  `id` int(10) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `email` text NOT NULL,
  `no_ktp` text NOT NULL,
  `alamat` text NOT NULL,
  `foto_pemilik` text NOT NULL,
  `foto_pemilik_thumb` text NOT NULL,
  `scan_ktp` text NOT NULL,
  `scan_ktp_thumb` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilik`
--

INSERT INTO `pemilik` (`id`, `nama_lengkap`, `email`, `no_ktp`, `alamat`, `foto_pemilik`, `foto_pemilik_thumb`, `scan_ktp`, `scan_ktp_thumb`, `date`) VALUES
(1, 'Batik Indah', 'pengerajinbatik.pati@gmail.com', '3102014403910312', 'Bakaran Indah, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', 'uploads/penjual/686530fc59f2281c5b2f71c4d39b8d2d.jpg', 'uploads/penjual/thumbs/686530fc59f2281c5b2f71c4d39b8d2d.jpg', 'uploads/penjual/03ae16e0169f7f0e286f3801fe101209.png', 'uploads/penjual/thumbs/03ae16e0169f7f0e286f3801fe101209.png', '2019-09-30 09:40:52'),
(2, 'Batik Good', 'pengerajinbatik.indo@gmail.com', '3102014403910319', 'Bakaran Good, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', 'uploads/penjual/08c2fc4133ebf9d537511bb889b3c241.jpg', 'uploads/penjual/thumbs/08c2fc4133ebf9d537511bb889b3c241.jpg', 'uploads/penjual/6b4511fac74fe36072902d6a280fe2db.jpg', 'uploads/penjual/thumbs/6b4511fac74fe36072902d6a280fe2db.jpg', '2019-09-30 09:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `id_toko` text NOT NULL,
  `kat_barang` text NOT NULL,
  `kondisi_barang` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `nama_produk` text NOT NULL,
  `minimal_pembelian` text NOT NULL,
  `harga_barang` text NOT NULL,
  `stok` text NOT NULL,
  `berat` text NOT NULL,
  `desc_barang` text NOT NULL,
  `gambar` text NOT NULL,
  `gambar_thumb` text NOT NULL,
  `gambar_2` text NOT NULL,
  `gambar_2_thumb` text NOT NULL,
  `gambar_3` text NOT NULL,
  `gambar_3_thumb` text NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `id_toko`, `kat_barang`, `kondisi_barang`, `rekomendasi`, `nama_produk`, `minimal_pembelian`, `harga_barang`, `stok`, `berat`, `desc_barang`, `gambar`, `gambar_thumb`, `gambar_2`, `gambar_2_thumb`, `gambar_3`, `gambar_3_thumb`, `date`) VALUES
(1, '1', '1', '1', '1', 'Batik Gradasi Kupu-Kupu Kain Prima ', '1', '190000', '21', '100', '<ul>\r\n<li>Kain Lembut</li>\r\n<li>Kain Halus</li>\r\n<li>Motif Indah</li>\r\n</ul>', 'uploads/produk/cd0b4bcb2a7a489da29ed6224e0664ef.jpg', 'uploads/produk/thumbs/cd0b4bcb2a7a489da29ed6224e0664ef.jpg', 'uploads/produk/8f756188ad32f3060cdbb23c5b9cfc7b.jpg', 'uploads/produk/thumbs/8f756188ad32f3060cdbb23c5b9cfc7b.jpg', 'uploads/produk/eb6c880e39c23e4576ed4d9e8f1703ff.jpg', 'uploads/produk/thumbs/eb6c880e39c23e4576ed4d9e8f1703ff.jpg', '2019-09-30 10:14:55'),
(2, '1', '1', '1', '0', 'Batik Kipas Klasik Kain Prima', '1', '170000', '12', '100', '<ul>\r\n<li>Motif Bagus</li>\r\n<li>Kain Licin</li>\r\n<li>Nyaman di pakai</li>\r\n</ul>', 'uploads/produk/3d4307654c62003b58e9fb785f3dcbfc.jpg', 'uploads/produk/thumbs/3d4307654c62003b58e9fb785f3dcbfc.jpg', 'uploads/produk/bbfe07e32ee5d08a471747a5c649b244.jpg', 'uploads/produk/thumbs/bbfe07e32ee5d08a471747a5c649b244.jpg', 'uploads/produk/38aff1d12ea356acbb4894de318e1ee9.jpg', 'uploads/produk/thumbs/38aff1d12ea356acbb4894de318e1ee9.jpg', '2019-09-30 10:17:25'),
(3, '2', '2', '1', '0', 'Batik Merak Ngigel Kain Primis', '1', '250000', '10', '100', '<ul>\r\n<li>Nyaman</li>\r\n<li>Bagus</li>\r\n<li>Batik Tulis Bakaran</li>\r\n</ul>', 'uploads/produk/f05df2961ad4c9cf64a5703df1fd7e41.jpg', 'uploads/produk/thumbs/f05df2961ad4c9cf64a5703df1fd7e41.jpg', 'uploads/produk/d4a3211bf285d35340605a3adde56bc0.jpg', 'uploads/produk/thumbs/d4a3211bf285d35340605a3adde56bc0.jpg', 'uploads/produk/7f29a3aaeeef4ea402e0b192a27b44bd.jpg', 'uploads/produk/thumbs/7f29a3aaeeef4ea402e0b192a27b44bd.jpg', '2019-09-30 10:21:06'),
(4, '2', '2', '1', '1', 'Batik Tulis 1 Warna Kain Prima ', '1', '120000', '6', '100', '<ul>\r\n<li>Bagus</li>\r\n<li>1 Warna</li>\r\n<li>Cocok Untuk Kondangan</li>\r\n</ul>', 'uploads/produk/22586d317278fce2541e033c5eeff558.jpg', 'uploads/produk/thumbs/22586d317278fce2541e033c5eeff558.jpg', 'uploads/produk/61e851d2ae0c7a1e48e0c533288923a4.jpg', 'uploads/produk/thumbs/61e851d2ae0c7a1e48e0c533288923a4.jpg', 'uploads/produk/1ff88291a0ad531909eda94951451b5d.jpg', 'uploads/produk/thumbs/1ff88291a0ad531909eda94951451b5d.jpg', '2019-09-30 10:23:25');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `id_pemilik_toko` text NOT NULL,
  `kat_toko` text NOT NULL,
  `nama_toko` text NOT NULL,
  `nomor_toko` text NOT NULL,
  `nomor_telepon` text NOT NULL,
  `alamat_toko` text NOT NULL,
  `nama_merek` text NOT NULL,
  `gambar_merek` text NOT NULL,
  `gambar_merek_thumb` text NOT NULL,
  `foto_toko` text NOT NULL,
  `foto_toko_thumb` text NOT NULL,
  `desc_toko` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id`, `id_pemilik_toko`, `kat_toko`, `nama_toko`, `nomor_toko`, `nomor_telepon`, `alamat_toko`, `nama_merek`, `gambar_merek`, `gambar_merek_thumb`, `foto_toko`, `foto_toko_thumb`, `desc_toko`, `date`) VALUES
(1, '1', '1', 'Toko Batik Cantingku', '1D-2323-23-23-23333', '081242347115', 'Bakaran Good, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', 'Cantingku', 'uploads/toko/d2ce03efdb16e66be2f6b5f612b3ed54.png', 'uploads/toko/thumbs/d2ce03efdb16e66be2f6b5f612b3ed54.png', 'uploads/toko/2db2d229c45c241ad6c6c6895bbf30c8.png', 'uploads/toko/thumbs/2db2d229c45c241ad6c6c6895bbf30c8.png', 'Bakaran Kulon, RT 001 RW 001 Kec. Juwana Kab. Pati Jawa Tengah', '2019-09-30 09:57:18'),
(2, '1,2', '3', 'Toko Batik Anarghya', '1W-22DD-23-233-2333', '081242347115', 'Bakaran Wetan RT 001 RW 002 Kec. Juwana Kab. Pati Jawa Tengah', 'Anarghya', 'uploads/toko/4faf6d53aed4cff2fe12c6af5a03d2f0.png', 'uploads/toko/thumbs/4faf6d53aed4cff2fe12c6af5a03d2f0.png', 'uploads/toko/5efc934d90b3c1fab5740096273c357e.png', 'uploads/toko/thumbs/5efc934d90b3c1fab5740096273c357e.png', 'Bakaran Wetan RT 001 RW 002 Kec. Juwana Kab. Pati Jawa Tengah', '2019-09-30 10:09:55');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `no_telepon` text NOT NULL,
  `alamat` text NOT NULL,
  `foto` text NOT NULL,
  `foto_thumb` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `email`, `no_telepon`, `alamat`, `foto`, `foto_thumb`, `date`) VALUES
(2, 'batikpati', '827ccb0eea8a706c4c34a16891f84e7b', 'Batil Pati Indah', 'pengerajinbatik.pati@gmail.com', '081242347115', '', 'uploads/user/92a17229dc4f75444a234aa8005e29e9.jpg', 'uploads/user/thumbs/92a17229dc4f75444a234aa8005e29e9.jpg', '2019-09-29 23:16:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
