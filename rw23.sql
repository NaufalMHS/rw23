-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for if
CREATE DATABASE IF NOT EXISTS `if` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `if`;

-- Dumping structure for table if.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `id_akun` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pict` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_akun`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.akun: ~2 rows (approximately)
INSERT INTO `akun` (`id_akun`, `nama`, `username`, `password`, `profile_pict`) VALUES
	('AK_001', 'Galih Respati Permana', 'admin', '$2y$10$bytgzsvefRtHhyjTSEufOu0QutxjViv25VisAAZ5Q0WWT8k7Ud4e.', '1658988281-AK_001.png'),
	('AK-002', 'user', 'user', '$2y$10$Ymj1SX59rBSgWNLLFPoQGOt//LH/lgK.wb/7/wycAhM/AzKqQX722', '1660030140-AK-002.png');

-- Dumping structure for table if.berita
CREATE TABLE IF NOT EXISTS `berita` (
  `id_berita` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_kirim` date NOT NULL,
  `isi` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_update` date NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.berita: ~2 rows (approximately)
INSERT INTO `berita` (`id_berita`, `judul`, `tgl_kirim`, `isi`, `sampul`, `url_slug`, `tgl_update`) VALUES
	('BR-003', 'testing', '2024-08-10', '<p>hehehe</p><p><br></p>', '1723284626-BR-003.png', 'testing', '2024-08-10');

-- Dumping structure for table if.counter
CREATE TABLE IF NOT EXISTS `counter` (
  `ip_addr` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `count` int unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.counter: ~8 rows (approximately)
INSERT INTO `counter` (`ip_addr`, `date`, `count`) VALUES
	('127.0.0.1', '2022-08-24', 6),
	('127.0.0.1', '2022-08-25', 9),
	('114.5.219.239', '2022-08-25', 2),
	('103.100.128.53', '2022-08-25', 1),
	('103.101.107.74', '2022-08-25', 4),
	('127.0.0.1', '2022-08-27', 1),
	('127.0.0.1', '2022-08-29', 24),
	('127.0.0.1', '2022-08-30', 3),
	('UNKNOWN', '2024-08-10', 13),
	('UNKNOWN', '2024-08-11', 1);

-- Dumping structure for table if.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table if.galeri
CREATE TABLE IF NOT EXISTS `galeri` (
  `id_galeri` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_kategori` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.galeri: ~7 rows (approximately)
INSERT INTO `galeri` (`id_galeri`, `id_kategori`, `judul`, `deskripsi`, `images`) VALUES
	('GL-001', 'KT-001', 'test', '<p>haha</p>', '1723284423-GL-001.jpg');

-- Dumping structure for table if.kategori
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kategori` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.kategori: ~2 rows (approximately)
INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
	('KT-001', 'Informatika'),
	('KT-002', 'Kegiatan Himpunan');

-- Dumping structure for table if.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(68, '2014_10_12_000000_create_users_table', 1),
	(69, '2014_10_12_100000_create_password_resets_table', 1),
	(70, '2019_08_19_000000_create_failed_jobs_table', 1),
	(71, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(72, '2022_08_09_022952_create_akuns_table', 1),
	(73, '2022_08_09_025306_create_beritas_table', 1),
	(75, '2022_08_09_034744_create_galeris_table', 1),
	(76, '2022_08_09_035213_create_kurikulums_table', 1),
	(77, '2022_08_09_035422_create_organisasis_table', 1),
	(79, '2022_08_09_035715_create_tentangs_table', 1),
	(80, '2022_08_09_025708_create_dosens_table', 2),
	(83, '2022_08_23_075240_create_counters_table', 3);

-- Dumping structure for table if.organisasi
CREATE TABLE IF NOT EXISTS `organisasi` (
  `id_struktur` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_struktur` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_struktur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.organisasi: ~1 rows (approximately)
INSERT INTO `organisasi` (`id_struktur`, `data_struktur`) VALUES
	('ST-001', '1661839937-ST-001.png');

-- Dumping structure for table if.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.password_resets: ~0 rows (approximately)

-- Dumping structure for table if.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table if.tentang
CREATE TABLE IF NOT EXISTS `tentang` (
  `id_tentang` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `informasi_umum` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_sampul` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `visi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `misi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id_tentang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.tentang: ~1 rows (approximately)
INSERT INTO `tentang` (`id_tentang`, `informasi_umum`, `foto_sampul`, `visi`, `misi`, `tujuan`, `sasaran`) VALUES
	('TG_001', '<div style="">Kebutuhan dan permasalahan komunikasi saat ini semakin menantang seiring dengan perkembangan teknologi informasi dan media yang mengubah cara dan sikap masyarakat.</div><div style=""><br></div><div style="">Program Studi Informatika Itenas membekali mahasiswa agar memiliki wawasan teknologi, kepekaan dalam melihat dan menganalisis serta mampu memecahkan persoalan teknologi melalui strategi dan solusi yang sesuai dengan kebutuhan zaman.</div><div style=""><br></div><div style="">Dimana untuk mendukung hal tersebut mahasiswa akan di dorong untuk menguasai pemahaman serta keterampilan seperti penggunaan piranti lunak (software) yang diarahkan melalui kompetensi Basis Data (Database), Jaringan Komputer (Computer Network), dan Kecerdasan Buatan (Artificial Intelegence) termasuk penguasaan Multimedia.</div><div style=""><br></div><div style="">Lapangan pekerjaan dunia Informatika adalah Administrasi Basis Data, Analisis Basis Data, Sistem Analis, Bisnis Analis, Manager Proyek, Programmer dan Web Developer.</div>', 'about.jpg', '<ul style="padding: 0px; list-style: none;"><span style="display: inline-block; text-align: justify;">Program Studi Informatika Itenas menjadi penyelenggara pendidikan perguruan tinggi yang unggul dalam perekayasaan perangkat lunak pada keahlian utama yaitu jaringan komputer (computer network), kecerdasan buatan (artificial intelegence), dan multimedia, dengan mengedepankan pembangunan karakter, berpikir adaptif, kreatif dan inovatif, serta berperan aktif dalam pembangunan pada lingkup nasional dan global.</span></ul>', '<ol style=""><li style="">Menyelenggarakan pendidikan yang mencakup ilmu informatika, pengembangan karakter serta kemampuan teknis dan manajerial sesuai dengan standar internasional dengan menekankan pada penalaran konseptual, keterampilan menyelesaikan masalah, semangat belajar berkelanjutan, kemampuan beradaptasi serta sikap profesional, sehingga mahasiswa mampu mengembangkan perangkat lunak berkualitas dengan mengikuti perkembangan teknologi terkini</li><li style="">Mengembangkan berbagai kegiatan penelitian untuk meningkatkan kemampuan mahasiswa dalam perekayasaan perangkat lunak pada berbagai platform.</li><li style="">Menerapkan hasil pendidikan dan penelitian dalam bentuk kegiatan pengabdian kepada masyarakat.</li></ol>', '<ol style=""><li style="padding: 0px 0px 8px 26px; position: relative;">Membina mahasiswa dan menghasilkan lulusan yang mampu menerapkan ilmu dan teknologi informasi dalam kegiatan produktif baik berupa barang dan jasa di bidang informatika yang bertujuan untuk pengembangan ilmu, maupun untuk diterapkan sehingga mempunyai nilai komersial yang tinggi.</li><li style="padding: 0px 0px 8px 26px; position: relative;">Membina mahasiswa dan menghasilkan lulusan yang berkarakter yaitu memiliki nilai moral dan kinerja tinggi, memiliki kesanggupan untuk bekerja sama dalam suatu tim multidisiplin, serta bersifat terbuka sehingga dapat tanggap dan bertindak positif terhadap perkembangan ilmu dan teknologi informasi.</li><li style="padding: 0px 0px 8px 26px; position: relative;">Mengembangkan jiwa kewirausahaan dalam bidang teknologi informasi serta membangun jaringan kerja sama dengan instansi pendidikan, pemerintah, dan swasta dalam industri untuk menerapkan keilmuan informatika.</li><li style="padding: 0px 0px 8px 26px; position: relative;">Meningkatkan publikasi hasil penelitian dalam bentuk expo kepada masyarakat, jurnal nasional terakreditasi, jurnal internasional, dan jurnal nasional bereputasi.</li><li style="padding: 0px 0px 8px 26px; position: relative;">Melaksanakan kegiatan-kegiatan pengabdian kepada masyarakat sesuai dengan kompetensi yang dimilikinya, dalam usaha meningkatkan kualitas kehidupan masyarakat.</li></ol>', '<p style="">Sasaran Program Studi Informatika Itenas 2016â€“2020 dituangkan di dalam renstra program studi, dimana renstra tersebut disusun berdasarkan visi, misi serta tujuan program studi dan diselaraskan dengan Renstra Fakultas dan Itenas. Renstra Prodi memuat sasaran program studi untuk tahun 2016 â€“ 2020, yaitu:</p><ol style=""><li style="">Peningkatan tata kelola organisasi dan manajemen</li><li style="">Peningkatan kualitas pendidikan dan kemahasiswaan</li><li style="">Peningkatan produktivitas penelitian dan publikasi</li><li style="">Peningkatan produktivitas pengabdian pada masyarakat</li><li style="">Peningkatan jejaring kerjasama</li></ol><p style="">Selanjutnya strategi pencapaian sasaran Program Studi dikembangkan atas dasar:</p><ol style=""><li style="">Pencapaian keenam sasaran tersebut sesuai target Renstra Itenas</li><li style="">Analisis SWOT mencakup 3 tahun terakhir terhadap ketujuh komponen evaluasi</li></ol><p style="margin-bottom: 0px;">Hasilnya adalah strategi pencapaian ke-enam sasaran (yang dituliskan sebagai S-1 hingga S-5) beserta indikator capaian sasaran (yang dituliskan sebagai IS-1.1. hingga IS-5.2.) yang dapat dilihat pada Tabel 1.</p>');

-- Dumping structure for table if.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_pict` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table if.users: ~1 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `profile_pict`, `remember_token`, `created_at`, `updated_at`) VALUES
	('AK-001', 'Galih Respati Permana', 'admin@gmail.com', NULL, '$2y$10$eyIDNFDrT/w3cT0p3.iAXO4./Wa6XY116GZVOoLmqCYtvFuLfnIJW', '1661783721-AK-001.png', NULL, '2022-08-29 06:48:15', '2022-08-29 09:24:35');

-- Dumping structure for view if.vdosen
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vdosen` 
) ENGINE=MyISAM;

-- Dumping structure for view if.vgaleri
-- Creating temporary table to overcome VIEW dependency errors
CREATE TABLE `vgaleri` (
	`id_galeri` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`id_kategori` VARCHAR(10) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`nama_kategori` VARCHAR(50) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`judul` VARCHAR(100) NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`deskripsi` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci',
	`images` TEXT NOT NULL COLLATE 'utf8mb4_unicode_ci'
) ENGINE=MyISAM;

-- Dumping structure for view if.vdosen
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vdosen`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vdosen` AS select `dosen`.`nidn` AS `nidn`,`dosen`.`nama_dosen` AS `nama_dosen`,`dosen`.`keahlian` AS `keahlian`,`pendidikan_dosen`.`s1` AS `s1`,`pendidikan_dosen`.`s2` AS `s2`,`pendidikan_dosen`.`s3` AS `s3`,`publikasi_dosen`.`data_publikasi` AS `data_publikasi`,`referensi_dosen`.`google_scholar` AS `google_scholar`,`referensi_dosen`.`shinta` AS `shinta`,`referensi_dosen`.`scopus` AS `scopus`,`dosen`.`images` AS `images` from (((`dosen` join `pendidikan_dosen` on((`dosen`.`nidn` = `pendidikan_dosen`.`nidn`))) join `publikasi_dosen` on((`publikasi_dosen`.`nidn` = `dosen`.`nidn`))) join `referensi_dosen` on((`dosen`.`nidn` = `referensi_dosen`.`nidn`))) group by `dosen`.`nidn` order by `dosen`.`nama_dosen`;

-- Dumping structure for view if.vgaleri
-- Removing temporary table and create final VIEW structure
DROP TABLE IF EXISTS `vgaleri`;
CREATE ALGORITHM=UNDEFINED SQL SECURITY DEFINER VIEW `vgaleri` AS select `galeri`.`id_galeri` AS `id_galeri`,`galeri`.`id_kategori` AS `id_kategori`,`kategori`.`nama_kategori` AS `nama_kategori`,`galeri`.`judul` AS `judul`,`galeri`.`deskripsi` AS `deskripsi`,`galeri`.`images` AS `images` from (`galeri` join `kategori` on((`galeri`.`id_kategori` = `kategori`.`id_kategori`)));

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
