/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.28-MariaDB : Database - hkbppeanajagar
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hkbppeanajagar` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `hkbppeanajagar`;

/*Table structure for table `datajemaats` */

DROP TABLE IF EXISTS `datajemaats`;

CREATE TABLE `datajemaats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `baptis` enum('Sudah Baptis','Belum Baptis') NOT NULL,
  `sidi` enum('Sudah Sidi','Belum Sidi') DEFAULT 'Belum Sidi',
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `notelpon` bigint(20) NOT NULL,
  `peleantaon` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `datajemaats` */

LOCK TABLES `datajemaats` WRITE;

insert  into `datajemaats`(`id`,`nama`,`jeniskelamin`,`baptis`,`sidi`,`tempat`,`tanggal`,`alamat`,`notelpon`,`peleantaon`,`created_at`,`updated_at`) values (2,'Felix Natanael Butarbutar','Laki-laki','Sudah Baptis','Sudah Sidi','Hutaginjang','2005-11-13','Hutaginjang',85142232559,195000,'2024-04-19 10:34:39','2024-05-28 22:48:40'),(5,'Irvan Lumbangaol','Laki-laki','Sudah Baptis','Sudah Sidi','Siborongborong','2005-08-08','Siborongborong',81223147489,195000,'2024-05-07 13:55:06','2024-05-07 13:55:06'),(6,'Arnoldus Fajar','Laki-laki','Sudah Baptis','Sudah Sidi','Tanjung Balai','2005-04-20','Tanjung Balai',82369399933,0,'2024-05-07 13:56:22','2024-05-07 13:56:22'),(8,'Jesica Purba','Perempuan','Sudah Baptis','Sudah Sidi','Lubuk Pakam','2005-07-11','Lubuk Pakam',85278876226,0,'2024-05-07 13:59:46','2024-05-07 13:59:46'),(9,'Wanja Ujung','Laki-laki','Sudah Baptis','Sudah Sidi','Sidikalang','2004-11-12','Jl. Merpati',85367665624,195000,'2024-05-13 20:57:59','2024-05-13 20:57:59'),(10,'Shem Aritonang','Perempuan','Sudah Baptis','Sudah Sidi','Tarutung','2004-04-21','Jl. Sisingamangaraja',867856557899,195000,'2024-05-13 20:59:19','2024-05-13 20:59:19'),(11,'Samuel Gurning','Laki-laki','Sudah Baptis','Sudah Sidi','Sipoholon','2000-02-12','Sipoholon',82255637893,195000,'2024-05-13 21:00:35','2024-05-13 21:00:35'),(12,'Yoseph Sihombing','Laki-laki','Sudah Baptis','Belum Sidi','Sibolga','2005-02-08','Simorangkir',81355678922,0,'2024-05-13 21:01:58','2024-05-13 21:01:58'),(13,'Sarah Silalahi','Perempuan','Sudah Baptis','Sudah Sidi','Tarutung','1999-04-02','Jl. Mulyadi',85613312442,195000,'2024-05-13 21:03:27','2024-05-13 21:03:27'),(14,'Lidia Aritonang','Perempuan','Sudah Baptis','Sudah Sidi','Tarutung','1997-08-17','Jl. Horas',83128908998,0,'2024-05-13 21:04:54','2024-05-13 21:04:54'),(15,'Samuel Hasibuan','Laki-laki','Sudah Baptis','Sudah Sidi','Tarutung','2000-04-11','Jl. Horas',83128908923,195000,'2024-05-27 21:26:57','2024-05-27 21:26:57');

UNLOCK TABLES;

/*Table structure for table `donasis` */

DROP TABLE IF EXISTS `donasis`;

CREATE TABLE `donasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `donasis` */

LOCK TABLES `donasis` WRITE;

insert  into `donasis`(`id`,`tanggal`,`jenis`,`nama`,`jumlah`,`created_at`,`updated_at`) values (2,'2024-05-12','Sudah kembali dari rumah sakit','Felix Natanael Butarbutar','300000','2024-04-20 10:43:34','2024-05-14 11:07:31'),(3,'2005-06-12','Meminta doa agar anak lulus UTBK','Ferry Bastian Siagian','100000','2024-04-23 08:37:41','2024-05-17 13:40:02'),(4,'2023-02-12','Sedekah','Bowo Manalu','100000','2024-04-24 08:32:29','2024-04-24 08:32:29'),(6,'2024-06-09','Pembangunan','Mama Franklyn','200000000','2024-05-07 14:38:23','2024-05-07 14:38:23');

UNLOCK TABLES;

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

LOCK TABLES `failed_jobs` WRITE;

UNLOCK TABLES;

/*Table structure for table `galeri` */

DROP TABLE IF EXISTS `galeri`;

CREATE TABLE `galeri` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeri` */

LOCK TABLES `galeri` WRITE;

insert  into `galeri`(`id`,`nama`,`photo`,`created_at`,`updated_at`) values (7,'Natal Remaja Naposo Bulung dan Parguru Malua','image/photo/1797131572367943.jpg','2024-04-23 20:17:03','2024-04-24 15:57:11'),(8,'NHKBP Peanajagar','image/photo/1797131597880756.jpg','2024-04-23 20:17:28',NULL),(9,'Reward Pelajar yang Berprestasi','image/photo/1797131611356923.jpg','2024-04-23 20:17:41','2024-04-24 15:58:04'),(11,'Refreshing ReNa','image/photo/1797131861095114.jpg','2024-04-23 20:21:39','2024-04-24 15:58:19'),(12,'Refreshing ReNa','image/photo/1797131890804778.jpg','2024-04-23 20:22:07','2024-04-24 15:58:34'),(13,'Reward Pelajar yang Berprestasi','image/photo/1797131942140628.jpg','2024-04-23 20:22:56','2024-04-24 15:58:47'),(14,'Pemberian Cendramata','image/photo/1797131987749851.jpg','2024-04-23 20:23:39','2024-04-24 16:00:59'),(15,'Jalan Salib','image/photo/1797132036812452.jpg','2024-04-23 20:24:26',NULL),(16,'Perayaan Ulangtahun Gereja','image/photo/1797132070193916.jpg','2024-04-23 20:24:58','2024-04-24 16:01:17'),(17,'Punguan Koor Ina Kamis','image/photo/1797132097261741.jpg','2024-04-23 20:25:24','2024-04-24 16:01:44'),(20,'Natal Remaja Naposo Bulung dan Parguru Malua','image/photo/1797205336271560.jpg','2024-04-24 15:49:30','2024-04-24 15:55:06'),(21,'Punguan Koor Ama Maranatha','image/photo/1797206272226515.jpg','2024-04-24 16:04:23',NULL),(22,'Guru Sekolah Minggu','image/photo/1797206305073162.jpg','2024-04-24 16:04:54',NULL),(23,'Natal ia','image/photo/1797206326799296.jpg','2024-04-24 16:05:15','2024-04-24 16:11:19'),(24,'ReNa HKBP Peanajagar','image/photo/1797206349829581.jpg','2024-04-24 16:05:37',NULL),(25,'TANJUNG BALAI','image/photo/1797266880726466.png','2024-04-25 08:07:43','2024-04-25 08:09:12');

UNLOCK TABLES;

/*Table structure for table `jadwalibadahs` */

DROP TABLE IF EXISTS `jadwalibadahs`;

CREATE TABLE `jadwalibadahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namaibadah` varchar(255) NOT NULL,
  `ayatalkitab` varchar(255) NOT NULL,
  `haritanggal` date NOT NULL,
  `waktu` time DEFAULT '10:00:00',
  `pelayan` varchar(255) NOT NULL,
  `lokasiibadah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwalibadahs` */

LOCK TABLES `jadwalibadahs` WRITE;

insert  into `jadwalibadahs`(`id`,`namaibadah`,`ayatalkitab`,`haritanggal`,`waktu`,`pelayan`,`lokasiibadah`,`created_at`,`updated_at`) values (6,'EPHIPANIAS','Markus 2: 1-5','2024-05-12','10:00:00','Pdt.Eprista Tampubolon,S.Th','HKBP PEANAJAGAR','2024-05-07 14:21:25','2024-05-07 14:27:54'),(7,'I DUNG TRINITATIS','Psalmen 103 : 2 - 5','2024-05-19','10:00:00','Pdt.Eprista Tampubolon,S.Th','HKBP PEANAJAGAR','2024-05-07 14:24:28','2024-05-07 14:27:39'),(8,'II DUNG TRINITATIS','Amsal 8 : 12 - 15','2024-05-26','10:00:00','Pdt. Hotlan Parmonangan Butarbutar,M.Th','HKBP PEANAJAGAR','2024-05-07 14:26:06','2024-05-07 14:26:06'),(9,'III DUNG TRINITATIS','Jesaya 12 : 1 - 12','2024-06-02','10:00:00','Pdt. Hotlan Parmonangan Butarbutar,M.Th','HKBP PEANAJAGAR','2024-05-07 14:27:04','2024-05-07 14:27:04'),(10,'LETARE','Yohannes 3 : 1-3','2024-06-08','11:00:00','Pdt. R Butarbutar','HKBP PEANAJAGAR','2024-05-27 09:17:04','2024-05-27 09:17:17'),(11,'BONA TAON LINGKUNGAN','Lukas 3:1-9','2024-07-06','13:00:00','Pdt. R Butarbutar','HKBP PEANAJAGAR','2024-05-27 21:29:31','2024-05-27 21:29:31');

UNLOCK TABLES;

/*Table structure for table `keuangans` */

DROP TABLE IF EXISTS `keuangans`;

CREATE TABLE `keuangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `kategori` enum('Kas gereja','Persembahan','Danasosial','Donasi','Lainnya') NOT NULL,
  `pemasukan` bigint(20) NOT NULL,
  `pengeluaran` bigint(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `keuangans` */

LOCK TABLES `keuangans` WRITE;

insert  into `keuangans`(`id`,`tanggal`,`kategori`,`pemasukan`,`pengeluaran`,`keterangan`,`created_at`,`updated_at`) values (1,'2024-05-12','Persembahan',1283000,0,'Pelan 1A,2A,3A','2024-04-24 13:27:52','2024-05-07 14:29:54'),(3,'2024-05-12','Donasi',300000,0,'Hamauliateon','2024-05-07 14:30:40','2024-05-07 14:30:40'),(4,'2024-05-19','Persembahan',1142000,100000,'Pengeluaran untuk minum pengurus','2024-05-07 14:32:25','2024-05-07 14:32:25'),(5,'2024-05-26','Persembahan',1329000,0,'Pelean 1a,2a,3a','2024-05-07 14:33:10','2024-05-07 14:33:10'),(6,'2024-06-02','Persembahan',1082000,300000,'Pengeluaran untuk membeli alat kebersihan gereja','2024-05-07 14:34:24','2024-05-07 14:34:24');

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2014_10_12_200000_add_two_factor_columns_to_users_table',2),(6,'2023_04_19_151551_create_datajemaats_table',2),(7,'2023_04_21_173311_create_keuangans_table',2),(8,'2023_04_21_173329_create_donasis_table',2),(9,'2023_04_21_191842_create_jadwalibadahs_table',2),(10,'2023_04_24_100659_create_galeri_table',2),(11,'2023_05_01_162533_create_wartas_table',2);

UNLOCK TABLES;

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

LOCK TABLES `password_reset_tokens` WRITE;

UNLOCK TABLES;

/*Table structure for table `pengumumen` */

DROP TABLE IF EXISTS `pengumumen`;

CREATE TABLE `pengumumen` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengumumen` */

LOCK TABLES `pengumumen` WRITE;

insert  into `pengumumen`(`id`,`judul`,`keterangan`,`tanggal`,`photo`,`created_at`,`updated_at`) values (3,'SURAT KEMENKES TAPUT','11/05/2024/KEMENKES/TAPUT/NO/6','2024-05-13','image/pengumuman/1798376693059892.png','2024-05-07 14:07:43',NULL),(4,'SURAT SMA 1 TARUTUNG','Penerimaan mahasiwa baru','2024-06-06','image/pengumuman/1798377070694512.jpg','2024-05-07 14:13:43',NULL),(5,'Undangan Rapat Pendeta','Rapat ephorus 2024','2024-08-11','image/pengumuman/1798377166149372.jpeg','2024-05-07 14:15:14',NULL),(6,'SENTRALISASI KEUANGAN HKBP','Kebijakan baru HKBP Pusat','2024-02-12','image/pengumuman/1798377268605101.jpg','2024-05-07 14:16:52',NULL),(7,'Undangan Natal Naposobulung','Natal Naposobulung','2024-12-28','image/pengumuman/1798377490898795.jpeg','2024-05-07 14:20:24',NULL);

UNLOCK TABLES;

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

LOCK TABLES `personal_access_tokens` WRITE;

UNLOCK TABLES;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id_user` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id_user`,`name`,`email`,`email_verified_at`,`password`,`two_factor_secret`,`two_factor_recovery_codes`,`remember_token`,`created_at`,`updated_at`) values (9,'Felix Natanael Butarbutar','admin@gmail.com',NULL,'$2y$10$Y3o4FdIv/YYWjC.TjJYR.ONXeiMpdNDeNm4A5QSI/8PbY0qQSrWiS',NULL,NULL,NULL,'2024-05-10 16:08:24','2024-05-10 16:08:24');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
