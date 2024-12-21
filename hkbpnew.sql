/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.28-MariaDB : Database - hkbpnew
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hkbpnew` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `hkbpnew`;

/*Table structure for table `anggota_keluargas` */

DROP TABLE IF EXISTS `anggota_keluargas`;

CREATE TABLE `anggota_keluargas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kepala_keluarga_id` bigint(20) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jeniskelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempatlahir` varchar(255) NOT NULL,
  `tanggallahir` date NOT NULL,
  `baptis` enum('Sudah Baptis','Belum Baptis') NOT NULL DEFAULT 'Belum Baptis',
  `sidi` enum('Sudah Sidi','Belum Sidi') NOT NULL DEFAULT 'Belum Sidi',
  `alamat` varchar(255) NOT NULL,
  `notelpon` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `anggota_keluargas_kepala_keluarga_id_foreign` (`kepala_keluarga_id`),
  CONSTRAINT `anggota_keluargas_kepala_keluarga_id_foreign` FOREIGN KEY (`kepala_keluarga_id`) REFERENCES `kepala_keluargas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `anggota_keluargas` */

LOCK TABLES `anggota_keluargas` WRITE;

insert  into `anggota_keluargas`(`id`,`kepala_keluarga_id`,`nama`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`baptis`,`sidi`,`alamat`,`notelpon`,`created_at`,`updated_at`) values (2,2,'Mamad Alkatiri B','Laki-laki','Berastagi','1002-02-12','Sudah Baptis','Sudah Sidi','Medan',85830141906,'2024-06-05 10:22:20','2024-06-05 10:22:20'),(3,3,'Mamad Alkatiri B','Laki-laki','Berastagi','2222-02-21','Sudah Baptis','Sudah Sidi','Medan',85830141906,'2024-06-05 20:41:54','2024-06-05 20:41:54'),(4,2,'Jesica Purba','Laki-laki','Parsoburan','2025-05-05','Sudah Baptis','Sudah Sidi','Muara',85830141906,'2024-06-05 21:39:15','2024-06-05 21:39:15'),(5,2,'Muhammad Sumbul','Laki-laki','Tarutung','2001-02-12','Sudah Baptis','Sudah Sidi','Tarutung',81397896490,'2024-06-06 09:05:14','2024-06-06 09:05:14'),(6,2,'Khaled Khasimiri','Laki-laki','Arab','2025-02-21','Sudah Baptis','Sudah Sidi','Saudi',78284898182,'2024-06-06 09:10:35','2024-06-06 09:10:35'),(7,2,'Ismail Ahmad Kanabawi','Laki-laki','Tarutung','2003-02-12','Sudah Baptis','Sudah Sidi','Muara',85830141906,'2024-06-06 09:11:32','2024-06-06 09:11:32'),(8,2,'Agub Qamaruddin Dibiaz','Laki-laki','Madrid','2020-08-21','Sudah Baptis','Belum Sidi','Birmingham',78076545215156,'2024-06-06 09:12:25','2024-06-06 09:12:25'),(9,2,'Khidir Karawita','Laki-laki','Libya','1234-02-21','Sudah Baptis','Sudah Sidi','Israel',8281312898,'2024-06-06 09:13:43','2024-06-06 09:13:43'),(10,2,'Usman Abdul Jalil Sisha','Perempuan','Tanjung Balai','2021-07-22','Sudah Baptis','Sudah Sidi','Banten',8238732183,'2024-06-06 09:14:45','2024-06-06 09:14:45'),(11,2,'Arnold','Laki-laki','Tanjung Balai','2024-06-10','Sudah Baptis','Sudah Sidi','Banten',8238732183,'2024-06-10 21:19:06','2024-06-10 21:19:06'),(12,6,'Arnold','Laki-laki','Tanjung Balai','2004-03-21','Sudah Baptis','Sudah Sidi','Banten',8238732183,'2024-06-10 21:25:07','2024-06-10 21:25:07'),(13,7,'zas','Laki-laki','as','2001-03-12','Sudah Baptis','Sudah Sidi','Tarutung',81397896490,'2024-06-12 13:13:33','2024-06-12 13:13:33');

UNLOCK TABLES;

/*Table structure for table `donasis` */

DROP TABLE IF EXISTS `donasis`;

CREATE TABLE `donasis` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `donasis_id_user_foreign` (`id_user`),
  CONSTRAINT `donasis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `donasis` */

LOCK TABLES `donasis` WRITE;

insert  into `donasis`(`id`,`id_user`,`tanggal`,`jenis`,`nama`,`jumlah`,`created_at`,`updated_at`) values (2,1,'2024-05-12','Sudah kembali dari rumah sakit','Felix Natanael Butarbutar','300000','2024-04-20 10:43:34','2024-05-14 11:07:31'),(3,1,'2005-06-12','Hamauliateon','Ferry Bastian Siagian','100000','2024-04-23 08:37:41','2024-05-07 14:39:13'),(4,1,'2023-02-12','Sedekah','Bowo Manalu','100000','2024-04-24 08:32:29','2024-04-24 08:32:29'),(6,1,'2024-06-09','Pembangunan','Mama Franklyn','200000000','2024-05-07 14:38:23','2024-05-07 14:38:23');

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
  `id_user` bigint(20) unsigned NOT NULL,
  `nama` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `galeri_id_user_foreign` (`id_user`),
  CONSTRAINT `galeri_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeri` */

LOCK TABLES `galeri` WRITE;

insert  into `galeri`(`id`,`id_user`,`nama`,`photo`,`created_at`,`updated_at`) values (8,1,'NHKBP Peanajagar','image/photo/1797131597880756.jpg','2024-04-23 20:17:28',NULL),(9,1,'Reward Pelajar yang Berprestasi','image/photo/1797131611356923.jpg','2024-04-23 20:17:41','2024-04-24 15:58:04'),(11,1,'Refreshing ReNa','image/photo/1797131861095114.jpg','2024-04-23 20:21:39','2024-04-24 15:58:19'),(12,1,'Refreshing ReNa','image/photo/1797131890804778.jpg','2024-04-23 20:22:07','2024-04-24 15:58:34'),(13,1,'Reward Pelajar yang Berprestasi','image/photo/1797131942140628.jpg','2024-04-23 20:22:56','2024-04-24 15:58:47'),(14,1,'Pemberian Cendramata','image/photo/1797131987749851.jpg','2024-04-23 20:23:39','2024-04-24 16:00:59'),(15,1,'Jalan Salib','image/photo/1797132036812452.jpg','2024-04-23 20:24:26',NULL),(16,1,'Perayaan Ulangtahun Gereja','image/photo/1797132070193916.jpg','2024-04-23 20:24:58','2024-04-24 16:01:17'),(17,1,'Punguan Koor Ina Kamis','image/photo/1797132097261741.jpg','2024-04-23 20:25:24','2024-04-24 16:01:44'),(20,1,'Natal Remaja Naposo Bulung dan Parguru Malua','image/photo/1797205336271560.jpg','2024-04-24 15:49:30','2024-04-24 15:55:06'),(21,1,'Punguan Koor Ama Maranatha','image/photo/1797206272226515.jpg','2024-04-24 16:04:23',NULL),(22,1,'Guru Sekolah Minggu','image/photo/1797206305073162.jpg','2024-04-24 16:04:54',NULL),(23,1,'Natal ia','image/photo/1797206326799296.jpg','2024-04-24 16:05:15','2024-04-24 16:11:19'),(24,1,'ReNa HKBP Peanajagar','image/photo/1797206349829581.jpg','2024-04-24 16:05:37',NULL);

UNLOCK TABLES;

/*Table structure for table `jadwalibadahs` */

DROP TABLE IF EXISTS `jadwalibadahs`;

CREATE TABLE `jadwalibadahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `namaibadah` varchar(255) NOT NULL,
  `ayatalkitab` varchar(255) NOT NULL,
  `haritanggal` date NOT NULL,
  `waktu` time NOT NULL DEFAULT '10:00:00',
  `pelayan` varchar(255) NOT NULL,
  `lokasiibadah` varchar(255) NOT NULL,
  `id_user` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jadwalibadahs_id_user_foreign` (`id_user`),
  CONSTRAINT `jadwalibadahs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwalibadahs` */

LOCK TABLES `jadwalibadahs` WRITE;

insert  into `jadwalibadahs`(`id`,`namaibadah`,`ayatalkitab`,`haritanggal`,`waktu`,`pelayan`,`lokasiibadah`,`id_user`,`created_at`,`updated_at`) values (4,'NATAL 1','Lukas 2:1-8','2024-12-25','10:00:00','Pdt. Hotlan Parmonangan Butarbutar,M.Th','HKBP PEANAJAGAR',1,'2024-04-25 15:43:22','2024-05-07 14:25:00'),(6,'EPHIPANIAS','Markus 2:1-5','2024-05-12','10:00:00','Pdt.Eprista Tampubolon,S.Th','HKBP PEANAJAGAR',1,'2024-05-07 14:21:25','2024-05-07 14:27:54'),(7,'I DUNG TRINITATIS','Psalmen 103:2-5','2024-05-19','10:00:00','Pdt.Eprista Tampubolon,S.Th','HKBP PEANAJAGAR',1,'2024-05-07 14:24:28','2024-05-07 14:27:39'),(8,'II DUNG TRINITATIS','Amsal 8:12-15','2024-05-26','10:00:00','Pdt. Hotlan Parmonangan Butarbutar,M.Th','HKBP PEANAJAGAR',1,'2024-05-07 14:26:06','2024-05-07 14:26:06'),(9,'III DUNG TRINITATIS','Jesaya 12:1-12','2024-06-02','10:00:00','Pdt. Hotlan Parmonangan Butarbutar,M.Th','HKBP PEANAJAGAR',1,'2024-05-07 14:27:04','2024-05-07 14:27:04');

UNLOCK TABLES;

/*Table structure for table `kepala_keluargas` */

DROP TABLE IF EXISTS `kepala_keluargas`;

CREATE TABLE `kepala_keluargas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `lingkungan_id` bigint(20) unsigned NOT NULL,
  `namakeluarga` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `peleantaon` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kepala_keluargas_lingkungan_id_foreign` (`lingkungan_id`),
  CONSTRAINT `kepala_keluargas_lingkungan_id_foreign` FOREIGN KEY (`lingkungan_id`) REFERENCES `lingkungans` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kepala_keluargas` */

LOCK TABLES `kepala_keluargas` WRITE;

insert  into `kepala_keluargas`(`id`,`lingkungan_id`,`namakeluarga`,`alamat`,`peleantaon`,`created_at`,`updated_at`) values (1,6,'Irvan bacol','parsoburan','195000.00','2024-06-05 08:47:24','2024-06-05 08:47:33'),(2,1,'Op. Putri Silaban','Sialuompu','195000.00','2024-06-05 10:22:02','2024-06-06 09:08:21'),(3,8,'BJG123','Medan','195000.00','2024-06-05 20:41:39','2024-06-05 20:41:39'),(4,1,'A.Manalu','Medan','0.00','2024-06-05 21:37:39','2024-06-05 21:37:39'),(5,1,'A. Firman Pane','Parsoburan','195000.00','2024-06-10 21:18:42','2024-06-10 21:18:42'),(6,1,'A. Dewa Sitorus','Jl. Merpati','195000.00','2024-06-10 21:24:49','2024-06-10 21:24:49'),(7,2,'rs','Madrid','195000.00','2024-06-12 13:12:42','2024-06-12 13:12:42'),(8,1,'dony matthew aritonang','Tarutung','1900000.00','2024-06-12 13:56:17','2024-06-12 13:56:17');

UNLOCK TABLES;

/*Table structure for table `keuangans` */

DROP TABLE IF EXISTS `keuangans`;

CREATE TABLE `keuangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` bigint(20) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` enum('Kas gereja','Persembahan','Danasosial','Donasi','Lainnya') NOT NULL,
  `pemasukan` bigint(20) NOT NULL,
  `pengeluaran` bigint(20) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `keuangans_id_user_foreign` (`id_user`),
  CONSTRAINT `keuangans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `keuangans` */

LOCK TABLES `keuangans` WRITE;

insert  into `keuangans`(`id`,`id_user`,`tanggal`,`kategori`,`pemasukan`,`pengeluaran`,`keterangan`,`created_at`,`updated_at`) values (1,1,'2024-05-12','Persembahan',1283000,0,'Pelan 1A,2A,3A','2024-04-24 13:27:52','2024-05-07 14:29:54'),(3,1,'2024-05-12','Donasi',300000,0,'Hamauliateon','2024-05-07 14:30:40','2024-05-07 14:30:40'),(4,1,'2024-05-19','Persembahan',1142000,100000,'Pengeluaran untuk minum pengurus','2024-05-07 14:32:25','2024-05-07 14:32:25'),(5,1,'2024-05-26','Persembahan',1329000,0,'Pelean 1a,2a,3a','2024-05-07 14:33:10','2024-05-07 14:33:10'),(6,1,'2024-06-02','Persembahan',1082000,300000,'Pengeluaran untuk membeli alat kebersihan gereja','2024-05-07 14:34:24','2024-05-07 14:34:24');

UNLOCK TABLES;

/*Table structure for table `lingkungans` */

DROP TABLE IF EXISTS `lingkungans`;

CREATE TABLE `lingkungans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `lingkungans` */

LOCK TABLES `lingkungans` WRITE;

insert  into `lingkungans`(`id`,`nama`,`created_at`,`updated_at`) values (1,'Kapernaum',NULL,NULL),(2,'Tiberias',NULL,NULL),(3,'Jerusalem',NULL,NULL),(4,'Samaria',NULL,NULL),(5,'Nazaret',NULL,NULL),(6,'Betlehem',NULL,NULL),(7,'Galilea',NULL,NULL),(8,'Sion',NULL,NULL);

UNLOCK TABLES;

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (54,'2014_10_12_000000_create_users_table',1),(55,'2014_10_12_100000_create_password_reset_tokens_table',1),(56,'2019_08_19_000000_create_failed_jobs_table',1),(57,'2019_12_14_000001_create_personal_access_tokens_table',1),(58,'2024_04_20_164657_create_donasis_table',1),(59,'2024_04_28_132503_create_keuangans_table',1),(60,'2024_05_04_004812_create_pengumumen_table',1),(61,'2024_06_03_112948_create_lingkungans_table',1),(62,'2024_06_03_124608_create_kepala_keluargas_table',1),(63,'2024_06_03_163004_create_anggota_keluargas_table',1),(64,'2024_06_07_105840_create_galeri_table',1),(65,'2024_06_10_203730_create_jadwalibadahs_table',1);

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
  `id_user` bigint(20) unsigned NOT NULL,
  `judul` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pengumumen_id_user_foreign` (`id_user`),
  CONSTRAINT `pengumumen_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengumumen` */

LOCK TABLES `pengumumen` WRITE;

insert  into `pengumumen`(`id`,`id_user`,`judul`,`keterangan`,`tanggal`,`photo`,`created_at`,`updated_at`) values (3,1,'SURAT KEMENKES TAPUT','11/05/2024/KEMENKES/TAPUT/NO/6','2024-05-13','image/pengumuman/1798376693059892.png','2024-05-07 14:07:43',NULL),(4,1,'SURAT SMA 1 TARUTUNG','Penerimaan mahasiswa baru','2024-06-06','image/pengumuman/1798377070694512.jpg','2024-05-07 14:13:43',NULL),(5,1,'Undangan Rapat Pendeta 1','Rapat ephorus 2024','2024-08-11','image/pengumuman/1798377166149372.jpeg','2024-05-07 14:15:14','2024-06-10 21:25:27'),(6,1,'SENTRALISASI KEUANGAN HKBP','Kebijakan baru HKBP Pusat','2024-02-12','image/pengumuman/1798377268605101.jpg','2024-05-07 14:16:52',NULL),(7,1,'Undangan Natal Naposobulung','Natal Naposobulung','2024-12-28','image/pengumuman/1798377490898795.jpeg','2024-05-07 14:20:24',NULL);

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
  `id_user` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id_user`,`name`,`email`,`email_verified_at`,`password`,`two_factor_secret`,`two_factor_recovery_codes`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','admin@gmail.com',NULL,'$2y$10$pJcY0nDd5u6APWU5V/s.nOCjF6lieXZAHWpgOyo9BMRcYZg3ZP2PS',NULL,NULL,NULL,'2024-06-10 20:58:13','2024-06-10 20:58:13');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
