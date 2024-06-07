/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.4.28-MariaDB : Database - hkbppea
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`hkbppea` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `hkbppea`;

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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `anggota_keluargas` */

LOCK TABLES `anggota_keluargas` WRITE;

insert  into `anggota_keluargas`(`id`,`kepala_keluarga_id`,`nama`,`jeniskelamin`,`tempatlahir`,`tanggallahir`,`baptis`,`sidi`,`alamat`,`notelpon`,`created_at`,`updated_at`) values (2,2,'Mamad Alkatiri B','Laki-laki','Berastagi','1002-02-12','Sudah Baptis','Sudah Sidi','Medan',85830141906,'2024-06-05 10:22:20','2024-06-05 10:22:20'),(3,3,'Mamad Alkatiri B','Laki-laki','Berastagi','2222-02-21','Sudah Baptis','Sudah Sidi','Medan',85830141906,'2024-06-05 20:41:54','2024-06-05 20:41:54'),(4,2,'Jesica Purba','Laki-laki','Parsoburan','2025-05-05','Sudah Baptis','Sudah Sidi','Muara',85830141906,'2024-06-05 21:39:15','2024-06-05 21:39:15'),(5,2,'Muhammad Sumbul','Laki-laki','Tarutung','2001-02-12','Sudah Baptis','Sudah Sidi','Tarutung',81397896490,'2024-06-06 09:05:14','2024-06-06 09:05:14'),(6,2,'Khaled Khasimiri','Laki-laki','Arab','2025-02-21','Sudah Baptis','Sudah Sidi','Saudi',78284898182,'2024-06-06 09:10:35','2024-06-06 09:10:35'),(7,2,'Ismail Ahmad Kanabawi','Laki-laki','Tarutung','2003-02-12','Sudah Baptis','Sudah Sidi','Muara',85830141906,'2024-06-06 09:11:32','2024-06-06 09:11:32'),(8,2,'Agub Qamaruddin Dibiaz','Laki-laki','Madrid','2020-08-21','Sudah Baptis','Belum Sidi','Birmingham',78076545215156,'2024-06-06 09:12:25','2024-06-06 09:12:25'),(9,2,'Khidir Karawita','Laki-laki','Libya','1234-02-21','Sudah Baptis','Sudah Sidi','Israel',8281312898,'2024-06-06 09:13:43','2024-06-06 09:13:43'),(10,2,'Usman Abdul Jalil Sisha','Perempuan','Tanjung Balai','2021-07-22','Sudah Baptis','Sudah Sidi','Banten',8238732183,'2024-06-06 09:14:45','2024-06-06 09:14:45');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `donasis` */

LOCK TABLES `donasis` WRITE;

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

/*Table structure for table `galeris` */

DROP TABLE IF EXISTS `galeris`;

CREATE TABLE `galeris` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `galeris` */

LOCK TABLES `galeris` WRITE;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jadwalibadahs` */

LOCK TABLES `jadwalibadahs` WRITE;

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kepala_keluargas` */

LOCK TABLES `kepala_keluargas` WRITE;

insert  into `kepala_keluargas`(`id`,`lingkungan_id`,`namakeluarga`,`alamat`,`peleantaon`,`created_at`,`updated_at`) values (1,6,'Irvan bacol','parsoburan','195000.00','2024-06-05 08:47:24','2024-06-05 08:47:33'),(2,1,'Op. Putri Silaban','Sialuompu','195000.00','2024-06-05 10:22:02','2024-06-06 09:08:21'),(3,8,'BJG123','Medan','195000.00','2024-06-05 20:41:39','2024-06-05 20:41:39'),(4,1,'A.Manalu','Medan','0.00','2024-06-05 21:37:39','2024-06-05 21:37:39');

UNLOCK TABLES;

/*Table structure for table `keuangans` */

DROP TABLE IF EXISTS `keuangans`;

CREATE TABLE `keuangans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `keuangans` */

LOCK TABLES `keuangans` WRITE;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

LOCK TABLES `migrations` WRITE;

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2024_04_20_164657_create_donasis_table',1),(6,'2024_04_23_081937_create_galeris_table',1),(7,'2024_04_28_132503_create_keuangans_table',1),(8,'2024_05_04_004812_create_pengumumen_table',1),(9,'2024_06_03_112948_create_lingkungans_table',1),(10,'2024_06_03_124608_create_kepala_keluargas_table',1),(11,'2024_06_03_163004_create_anggota_keluargas_table',1),(12,'2024_06_04_195335_create_jadwalibadahs_table',1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `pengumumen` */

LOCK TABLES `pengumumen` WRITE;

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

LOCK TABLES `users` WRITE;

insert  into `users`(`id_user`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values (1,'admin','admin@gmail.com',NULL,'$2y$10$z4ikTE5CyF9Pgxb2vRdLcuE3bGy60tDN4iEHnnofFsO5MiGejKAJi',NULL,'2024-06-05 08:46:29','2024-06-05 08:46:29');

UNLOCK TABLES;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
