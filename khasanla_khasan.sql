-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: khasanla_khasan
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `kategoris`
--

DROP TABLE IF EXISTS `kategoris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategoris` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(25) NOT NULL,
  `slug_nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategoris`
--

LOCK TABLES `kategoris` WRITE;
/*!40000 ALTER TABLE `kategoris` DISABLE KEYS */;
INSERT INTO `kategoris` (`id`, `nama_kategori`, `slug_nama`) VALUES (1,'ABAYA','abaya'),(2,'UNDERSCARF','underscarf'),(3,'KHIMAR','khimar'),(4,'PRAYER SET','prayer-set'),(5,'NIQAB','niqab'),(6,'AKSESORIS','aksesoris');
/*!40000 ALTER TABLE `kategoris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `konfirmasis`
--

DROP TABLE IF EXISTS `konfirmasis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `konfirmasis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `formid` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `pesan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `formid` (`formid`),
  CONSTRAINT `konfirmasis_ibfk_1` FOREIGN KEY (`formid`) REFERENCES `transaksis` (`formid`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `konfirmasis`
--

LOCK TABLES `konfirmasis` WRITE;
/*!40000 ALTER TABLE `konfirmasis` DISABLE KEYS */;
INSERT INTO `konfirmasis` (`id`, `formid`, `gambar`, `pesan`, `created_at`, `updated_at`) VALUES (1,'IB4XmyiotljB3CZr','1530676832.png',NULL,'2018-07-03 21:00:33','2018-07-03 21:00:33'),(2,'WlA0aFghzFwPo8VZ','1531763163.png',NULL,'2018-07-16 10:46:04','2018-07-16 10:46:04'),(3,'WlA0aFghzFwPo8VZ','1531763232.png',NULL,'2018-07-16 10:47:12','2018-07-16 10:47:12'),(6,'lKIhX9YPzMKt9y5v','1531784156.png',NULL,'2018-07-16 16:35:56','2018-07-16 16:35:56'),(7,'d1MWsxItp5S9V9yt','1531784513.png','warna hitam','2018-07-16 16:41:53','2018-07-16 16:41:53'),(8,'IbMJQZz0fq308iY2','1531785113.png',NULL,'2018-07-16 16:51:53','2018-07-16 16:51:53'),(9,'FkqG2RdjStzx8srF','1531785301.png',NULL,'2018-07-16 16:55:01','2018-07-16 16:55:01'),(10,'gSTXUqkwG9q9lBl4','1533041094.png','tes','2018-07-31 05:44:54','2018-07-31 05:44:54');
/*!40000 ALTER TABLE `konfirmasis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2014_02_09_225721_create_visitor_registry',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pelanggans`
--

DROP TABLE IF EXISTS `pelanggans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pelanggans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `telepon` varchar(18) NOT NULL,
  `alamat` varchar(500) NOT NULL,
  `provinsi` int(25) NOT NULL,
  `kota` int(25) NOT NULL,
  `kodepos` int(5) NOT NULL,
  `formid` varchar(255) NOT NULL,
  `kurir` varchar(5) NOT NULL,
  `ongkir` varchar(25) NOT NULL,
  `kode` int(3) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `formid` (`formid`),
  CONSTRAINT `pelanggans_ibfk_1` FOREIGN KEY (`formid`) REFERENCES `transaksis` (`formid`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pelanggans`
--

LOCK TABLES `pelanggans` WRITE;
/*!40000 ALTER TABLE `pelanggans` DISABLE KEYS */;
INSERT INTO `pelanggans` (`id`, `nama`, `telepon`, `alamat`, `provinsi`, `kota`, `kodepos`, `formid`, `kurir`, `ongkir`, `kode`, `created_at`, `updated_at`) VALUES (1,'Amanda','085341198776','Komplek KBB, Jln. Jujur No. 1, Tanah Sareal Bogor',9,79,63456,'Pg0y3EiSf3P1aW7S','jne','40000',631,'2018-07-03 08:23:27','2018-07-03 08:23:27'),(2,'Lailatul','087989344677','JL. Tebet Raya No. 84, Tebet, Jakarta Selatan',6,153,74443,'Ee30kQfH7DE8dhKd','pos','34000',943,'2018-07-03 08:26:44','2018-07-03 08:26:44'),(3,'tessy','08687463678','tes no tes',11,251,86588,'b4eVhFqwzVa2507J','jne','66000',885,'2018-07-03 17:41:38','2018-07-03 17:41:38'),(4,'Tatates','8687463678',',jkglcl;jyfkj,mn,kgv',7,131,86588,'IB4XmyiotljB3CZr','jne','156000',222,'2018-07-03 20:59:23','2018-07-03 20:59:23'),(5,'Dania','081235512223','Jl. Kenangan no. 10 Kuningan',9,211,32132,'gSTXUqkwG9q9lBl4','jne','52000',768,'2018-07-05 08:27:15','2018-07-05 08:27:15'),(6,'tessy','8687463678','kota lama',11,243,86588,'WlA0aFghzFwPo8VZ','jne','66000',534,'2018-07-16 10:44:59','2018-07-16 10:44:59'),(7,'Lisa Nisa','081372148773','Ds. Rojari Kampung Air',10,105,56990,'lKIhX9YPzMKt9y5v','jne','36000',65,'2018-07-16 16:16:59','2018-07-16 16:16:59'),(8,'rara','8687463678',',jkglcl;jyfkj,mn,kgv',4,64,86588,'d1MWsxItp5S9V9yt','pos','66000',968,'2018-07-16 16:41:10','2018-07-16 16:41:10'),(9,'Lisanisa','081290700907','Jalan Prawira No 5',10,209,59824,'IbMJQZz0fq308iY2','jne','28000',687,'2018-07-16 16:50:03','2018-07-16 16:50:03'),(10,'rara','081290700907','Kumbangan Lintas 8',10,209,59824,'FkqG2RdjStzx8srF','jne','28000',302,'2018-07-16 16:53:34','2018-07-16 16:53:34');
/*!40000 ALTER TABLE `pelanggans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `produks`
--

DROP TABLE IF EXISTS `produks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `produks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori_id` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `slug_nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(3) NOT NULL,
  `deskripsi` text NOT NULL,
  `rekomendasi` enum('Y','N') NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_kategori` (`kategori_id`),
  CONSTRAINT `produks_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategoris` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `produks`
--

LOCK TABLES `produks` WRITE;
/*!40000 ALTER TABLE `produks` DISABLE KEYS */;
INSERT INTO `produks` (`id`, `kategori_id`, `nama_produk`, `slug_nama`, `harga`, `stok`, `deskripsi`, `rekomendasi`, `gambar`, `created_at`, `updated_at`) VALUES (1,1,'Ummi Set','ummi-set',399000,10,'Bahan : Wolfis\r\nLD : 110 cm\r\nPB : 140 cm','Y','1530626027.png','2018-07-03 06:53:47','2018-07-31 05:13:47'),(2,1,'Nabawi Set','nabawi-set',375000,3,'Nabawi Set berisi :\r\n+ Abaya\r\n+ Khimar Jumbo non-pad\r\n+ Masker (mudah lepas pasang tanpa khawatir jatuh)\r\n+ Kancing cadangan 2 pcs.\r\n\r\nUkuran abaya All size (LD 120cm, PB 140cm)\r\nUkuran khimar All size (PD 95cm, PBlkg 110cm)','Y','1530626200.png','2018-07-03 06:56:40','2018-07-31 05:14:08'),(3,2,'INNER SYAR\'I / UNDERSCARF HAFIDZAH','inner-syari-underscarf-hafidzah',70000,14,'Butuh inner hijab yang panjang?\r\nUnderscarf Hafidzah bisa menjadi pilihan Inner Syar\'i terbaikmu. Dengan bahan yang stretch dan adem akan membuat nyaman seharian di pakai.\r\n\r\nKelebihan Underscarf Hafidzah :\r\n?? Menutupi pundak hingga punggung\r\n?? Menutupi bentuk leher\r\n?? Menghalangi anak rambut terlihat\r\n?? Menutupi area dahi lebih banyak, sehingga aurat khususnya rambut jauh lebih maksimal tertutup.\r\n?? Menutupi dagu/double chin.\r\n\r\nDetail :\r\nPanjang Belakang : 55 (dari kepala/batas pad)\r\nPanjang depan : 35 (dari bawah dagu)\r\nLubang Wajah : 25\r\nPilihan bahan :\r\n- Spandek Katun Rayon\r\n- Spandek Katun hyget','Y','1530626536.png','2018-07-03 07:02:16','2018-08-05 01:25:24'),(4,2,'INNER SYAR\'I / UNDERSCARF SALAFAH','inner-syari-underscarf-salafah',70000,6,'Butuh inner hijab yang panjang?\r\nUnderscarf Salafah bisa menjadi pilihan Inner Syar\'i terbaikmu. Dengan bahan yang stretch dan adem akan membuat nyaman seharian di pakai.\r\n\r\nKelebihan Underscarf Salafah :\r\n?? Menutupi pundak hingga punggung\r\n?? Menutupi bentuk leher\r\n?? Menghalangi anak rambut terlihat\r\n?? Menutupi Pipi chubby\r\n\r\nDetail :\r\nPanjang Belakang : 60 (dari kepala/batas pad)\r\nPanjang depan : 35 (dari bawah dagu)\r\nLubang Wajah : 26\r\nBahan : Spandek Katun Rayon','Y','1530626663.png','2018-07-03 07:04:23','2018-08-05 01:28:09'),(5,3,'Tie Back Khimar (Abu-abu Tua)','tie-back-khimar-abu-abu-tua',290000,4,'Siapa sih yang nggak tau Tie Back?\r\nKhimar dengan model pad ikat ini bisa jadi item favourite kamu, yang langsung di pakai setelah kering di jemur. Alias cuci-kering-pakai??? Bahan Wolfis sudah sangat terkenal dengan kenyamanannya, sebab tidak membentuk tubuh akhwat juga tidak mudah kusut, pentinf sekali ini.\r\n\r\nHadir tie back khimar dengan banyak varian warna kesukaan customers Khasan Labels, BOLD SERIES ?? . \r\nTie Back khimar bisa di ikat di dalam atau luar. Tali yanh berfungsi sebagai pad+inner ini benar-benar membantu akhwat lebih praktis dan leluasa.\r\n\r\nTie Back Khimar (include cadar)\r\nBahan :\r\nWolfis (warna)\r\nJetblack (hitam)','Y','1530626981.png','2018-07-03 07:09:41','2018-08-05 01:28:21'),(6,3,'Khimar Arsyila','khimar-arsyila',265000,10,'Khimar Arsyila sebagai salah satu bentuk dari Merdeka dan Ketentraman seorang Muslimah.\r\nMengenakan Khimar Arsyila berarti berusaha menyempurnakan pakaian sesuai syariat, ini adalah do\'a, harapan dan tujuan Khimar Arsyila.\r\n\r\nMenjaga Ketentraman akhwat saat memakai Arsyila pagi maupun petang.\r\nDETAILS :\r\nBahan :\r\nWolfis (warna)\r\nHitam (Jetblack)\r\nUkuran : All size ( panjang depan belakang 135 cm)','Y','1530627091.png','2018-07-03 07:11:31','2018-08-05 01:28:44'),(7,5,'Niqab Asma\'','niqab-asma',45000,14,'Niqab Asma\' adalah Niqab Bandana dengan matterial Wolfis dan Jetblack untuk warna Hitam.\r\n\r\nSifat :\r\n- Tidak menerawang.\r\n- Lembut\r\n- Breathable\r\n- Tidak mudah tersibak tiupan angin, ?\r\n\r\nUkuran : All size\r\n- Panjang layer depan : 49 cm\r\n- Lebar layer depan : 39 cm\r\n- Lebar Tali Pengikat : 7 cm\r\n- Panjang Tali Pengikat : 60 cm\r\n(ukuran diatas adalah kurang lebihnya saat pengukuran)','N','1530627325.png','2018-07-03 07:15:25','2018-08-05 01:29:01'),(8,5,'Niqab Fatimah','niqab-fatimah',150000,8,'Niqab Fatimah (Purdah) hadir kembali dengan desain sangat nyaman, layer depan menutupi dada dan layer belakng menutupi hingga pinggang, total 3 layers.\r\n\r\nNiqab Fatimah menggunakan Bahan Sifon silky Jetblack yang hitam pekat juga lembut, jadi ukty jangan khawatir, sifon silky halus di wajah dan hitam Jetblack tidak membuat transparan karena double layers untuk layers wajah.','Y','1530627436.png','2018-07-03 07:17:16','2018-08-05 01:29:22'),(9,5,'Niqab Aisyah','niqab-aisyah',30000,5,'Niqab Aisyah adalah Niqab Tali dengan matterial wolfis dan Jetblack untuk warna Hitam.\r\n\r\nSifat :\r\n- Tidak menerawang.\r\n- Lembut\r\n- Breathable\r\n- Tanpa jahitan bawah mata\r\n- Tidak mudah tersibak angin, ?\r\n\r\nUkuran : All size\r\n- Panjang layer depan : 49 cm\r\n- Lebar layer depan : 39 cm\r\n- Lebar Tali Pengikat : 1 cm\r\n- Panjang Tali Pengikat : 60 cm\r\n(ukuran diatas adalah kurang lebihnya saat pengukuran)','N','1530627551.png','2018-07-03 07:19:11','2018-08-05 01:29:44'),(10,5,'Niqab Qibtiyah','niqab-qibtiyah',45000,6,'Niqab Qibtiyah adalah Niqab Curve / eyes cat dengan matterial Wolfis dan Jetblack untuk warna Hitam.\r\n\r\nSifat :\r\n- Tidak menerawang.\r\n- Lembut\r\n- Breathable\r\n- Tidak mudah tersibak tiupan angin, ?\r\n\r\nUkuran : All size\r\n- Panjang layer depan : 49 cm\r\n- Lebar layer depan : 39 cm\r\n- Lebar Tali Pengikat : 7 cm\r\n- Panjang Tali Pengikat : 60 cm\r\n(ukuran diatas adalah kurang lebihnya saat pengukuran)','N','1530627642.png','2018-07-03 07:20:42','2018-08-05 01:30:21'),(11,6,'Kaos Kaki Wudhu','kaos-kaki-wudhu',20000,14,'Kaos kaki adalah wajib untuk Muslimah. Muslimah aktif di luar ruangan akan jauh lebih mudah dan praktis dengan menggunakan Kaos Kaki yang memudahkan berwudhu di luar rumah. \r\nHadir kaos kaki khusus untuk memudahkan berWudhu, Kaos Kaki Wudhu.\r\n?? Nyaman\r\n?? Empuk\r\n?? Praktis\r\n\r\nBahan :\r\nSpandek nylon dan katun\r\n\r\nUkuran : All size\r\nKurang lebih 40 cm (di hitung dari ujung jempol kaki)','Y','1530627819.png','2018-07-03 07:23:39','2018-08-05 01:30:40'),(12,6,'Kaos Kaki Jempol','kaos-kaki-jempol',20000,5,'Matterial kaos kaki jempol di Khasan ini empuk & adem karena ada serat cottonnya?\r\n\r\nPilihan warnanya juga banyaaaak, bisa buat koleksi kamu pribadi atau hadiahkan buat sahabat kamu atau bisa juga kamu jual kembali loh!\r\n\r\nBahan :\r\nSpandex nylon dan katun\r\n\r\nUkuran : All size\r\nKurang lebih 30 cm (di hitung dari ujung jempol kaki)','N','1530627911.png','2018-07-03 07:25:11','2018-08-05 01:35:27'),(13,6,'Gloves','gloves',20000,5,'Sarung tangan atau gloves memiliki kelebihan lain, yaitu menutup seluruh telapak tangan hingga jemari .\r\n\r\nBahan :\r\nSpandek Nylon\r\n\r\nKeterangan :\r\n- Panjang +- 20cm\r\n- detail bordir bunga','N','1530628037.png','2018-07-03 07:27:17','2018-08-05 01:35:42'),(14,6,'Muslimah Essential','muslimah-essential',25000,10,'Bismillah..\r\nMenjawab kebutuhan kita Muslimah, kebutuhan pendukung agar tetap nyaman menutup aurat, kini ready stock Muslimah Essential dengan 2 series,\r\n1. Basic\r\n2. Colors\r\n\r\nDengan wadah (box) membuat Items seperti pins dll tidak berantakan, so lebih mudah menyimpan serta di bawa kemanapun?\r\n\r\nMasing-masing package berisi 50 pcs pin dll\r\n- Peniti\r\n- Peniti crown\r\n- Pentul Besar\r\n- Pentul Kecil\r\n- Hijab Clip\r\n\r\nHarga : Rp. 25,000/box','Y','1530628131.png','2018-07-03 07:28:51','2018-08-05 01:35:56');
/*!40000 ALTER TABLE `produks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonis`
--

DROP TABLE IF EXISTS `testimonis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `pesan` text NOT NULL,
  `nilai` int(5) NOT NULL,
  `formid` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonis`
--

LOCK TABLES `testimonis` WRITE;
/*!40000 ALTER TABLE `testimonis` DISABLE KEYS */;
INSERT INTO `testimonis` (`id`, `nama`, `gambar`, `pesan`, `nilai`, `formid`, `created_at`, `updated_at`) VALUES (1,'Tatates','1531681451.png','Barang Bagus sesuai pesanan',5,'IB4XmyiotljB3CZr','2018-07-15 12:04:11','2018-07-15 12:04:11'),(2,'tessy','1531683929.png','Tidak sesuai harapan',1,'IB4XmyiotljB3CZr','2018-07-15 12:45:29','2018-07-15 12:45:29'),(3,'Tata','1531684019.png','Bagus, pelayanan baik',3,'IB4XmyiotljB3CZr','2018-07-15 12:46:59','2018-07-15 12:46:59'),(4,'kjgjhgjh','1533463261.png','bagus, suka',5,'IB4XmyiotljB3CZr','2018-08-05 03:01:05','2018-08-05 03:01:05'),(5,'Koko','1533464000.png','Lanjutkan',4,'IB4XmyiotljB3CZr','2018-08-05 03:13:21','2018-08-05 03:13:21'),(6,'Lia','1533464397.png','Pengiriman Cepat',5,'IB4XmyiotljB3CZr','2018-08-05 03:19:58','2018-08-05 03:19:58');
/*!40000 ALTER TABLE `testimonis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `transaksis`
--

DROP TABLE IF EXISTS `transaksis`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `transaksis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk_id` int(11) NOT NULL,
  `formid` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(3) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `subtotal` varchar(50) NOT NULL,
  `status` varchar(25) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  KEY `produk_id` (`produk_id`),
  KEY `formid` (`formid`),
  CONSTRAINT `transaksis_ibfk_1` FOREIGN KEY (`produk_id`) REFERENCES `produks` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `transaksis`
--

LOCK TABLES `transaksis` WRITE;
/*!40000 ALTER TABLE `transaksis` DISABLE KEYS */;
INSERT INTO `transaksis` (`id`, `produk_id`, `formid`, `tanggal`, `qty`, `total_harga`, `subtotal`, `status`, `created_at`, `updated_at`) VALUES (1,4,'Pg0y3EiSf3P1aW7S','2018-07-03',1,70000,'130,000.00','unpaid','2018-07-03 08:14:54','2018-07-03 08:14:54'),(2,9,'Pg0y3EiSf3P1aW7S','2018-07-03',2,60000,'130,000.00','unpaid','2018-07-03 08:14:54','2018-07-03 08:14:54'),(3,2,'Ee30kQfH7DE8dhKd','2018-07-03',3,1125000,'1,125,000.00','unpaid','2018-07-03 08:24:28','2018-07-03 08:24:28'),(4,13,'b4eVhFqwzVa2507J','2018-07-04',1,20000,'20,000.00','unpaid','2018-07-03 17:40:21','2018-07-03 17:40:21'),(5,5,'IB4XmyiotljB3CZr','2018-07-04',1,290000,'290,000.00','Paid','2018-07-03 20:58:40','2018-07-03 20:58:40'),(6,2,'gSTXUqkwG9q9lBl4','2018-07-05',1,375000,'955,000.00','Paid','2018-07-05 08:21:21','2018-07-05 08:21:21'),(7,5,'gSTXUqkwG9q9lBl4','2018-07-05',2,580000,'955,000.00','Paid','2018-07-05 08:21:21','2018-07-05 08:21:21'),(10,8,'WlA0aFghzFwPo8VZ','2018-07-16',1,150000,'150,000.00','Paid','2018-07-16 10:44:28','2018-07-16 10:44:28'),(11,8,'lKIhX9YPzMKt9y5v','2018-07-16',1,150000,'220,000.00','Paid','2018-07-16 16:15:51','2018-07-16 16:15:51'),(12,4,'lKIhX9YPzMKt9y5v','2018-07-16',1,70000,'220,000.00','Paid','2018-07-16 16:15:51','2018-07-16 16:15:51'),(13,8,'d1MWsxItp5S9V9yt','2018-07-16',1,150000,'150,000.00','Paid','2018-07-16 16:40:48','2018-07-16 16:40:48'),(14,8,'IbMJQZz0fq308iY2','2018-07-16',1,150000,'150,000.00','Paid','2018-07-16 16:49:15','2018-07-16 16:49:15'),(15,4,'FkqG2RdjStzx8srF','2018-07-16',1,70000,'70,000.00','Paid','2018-07-16 16:52:50','2018-07-16 16:52:50');
/*!40000 ALTER TABLE `transaksis` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES (4,'coba','coba@coba.com','$2y$10$8ZN6jUDfDLNeTYrFeJKZAu7aeb9Fz8bcFyi0Bvt.y51QUHJTEtYTi','H70Hw9r3ui0QNoQGX2l5xngXyT6lNAh2ran8DQhMBu4Z6OGsIQJ4OdzeZS5s','2018-04-29 23:38:19','2018-04-29 23:38:19'),(5,'admin','admin@admin.com','$2y$10$RGsG8ZYISa/FzIwYa5Ay2Ojc5i9YIUioR4iD12ZGIgDtt1PKbKQrW','6DK59tksBgZpRTa4bz7pKaNf67SzYAmMkzitMFwKmERaFkSSYMtbjGIzIgJu','2018-05-03 06:51:17','2018-05-03 06:51:17'),(6,'topan','vilfanvenci@gmail.com','$2y$10$iAdE8QvtaClUIZI/cYNCWu8n5R2vIhejUKHQdFbZp4FniXvzwImWC',NULL,'2018-08-20 21:11:29','2018-08-20 21:11:29');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visitor_registry`
--

DROP TABLE IF EXISTS `visitor_registry`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `visitor_registry` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ip` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(4) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clicks` int(10) unsigned NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visitor_registry`
--

LOCK TABLES `visitor_registry` WRITE;
/*!40000 ALTER TABLE `visitor_registry` DISABLE KEYS */;
INSERT INTO `visitor_registry` (`id`, `ip`, `country`, `clicks`, `created_at`, `updated_at`) VALUES (1,'127.0.0.1',NULL,2,'2018-07-02 01:15:48','2018-07-02 01:15:48'),(2,'114.142.171.26','ID',2,'2018-08-20 06:24:48','2018-08-20 06:24:48'),(3,'114.142.171.39','ID',4,'2018-08-20 21:10:37','2018-08-20 21:10:37'),(4,'36.65.151.190','ID',4,'2018-08-29 01:35:24','2018-08-29 01:35:24'),(5,'36.65.145.246','ID',2,'2018-08-31 01:35:39','2018-08-31 01:35:39'),(6,'36.65.180.108','ID',2,'2018-09-01 03:02:27','2018-09-01 03:02:27'),(7,'114.142.170.13','ID',4,'2018-09-08 04:04:17','2018-09-08 04:04:17');
/*!40000 ALTER TABLE `visitor_registry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'khasanla_khasan'
--

--
-- Dumping routines for database 'khasanla_khasan'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-11  0:04:36
