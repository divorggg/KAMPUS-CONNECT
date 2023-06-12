-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 11 Jun 2023 pada 22.50
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kampus_connect`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_mhs`
--

CREATE TABLE `detail_mhs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idmhs` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `tipe` varchar(255) NOT NULL,
  `kantor` varchar(255) NOT NULL,
  `rentang` varchar(255) NOT NULL,
  `detail` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_mhs`
--

INSERT INTO `detail_mhs` (`id`, `idmhs`, `name`, `tipe`, `kantor`, `rentang`, `detail`, `created_at`, `updated_at`, `pp`) VALUES
(1, 2, 'kejgbw', '', 'hbobouibij', 'jbkjb', 'jhbj', '2023-06-11 10:46:58', '2023-06-11 10:46:58', ''),
(5, 2, 'Web Front End', 'kemampuan', '', '', 'ehvbrjhe vehdbvje jvhev ihje jerjv ehjh eibruvuiwbvibweivj vekjvuywebhjv whevhwh ev wh v2wehvc wjh vcywebfiwbjvnw v chwbhf vwhb vjbw', '2023-06-11 11:53:00', '2023-06-11 11:53:00', ''),
(6, 2, 'Senior Flutter Defeloper', 'pekerjaan', 'PT. Bangkit Bersama Kita', 'Januari 2020 - Desember 2022', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nisl dolor. Donec convallis quam a dignissim pulvinar. Nullam rhoncus elit a nisi elementum, sed luctus tortor porta. Etiam ac pellentesque lorem.', '2023-06-11 11:57:25', '2023-06-11 11:57:25', ''),
(7, 2, 'Junior Flutter Developer', 'pekerjaan', 'PT. Kita Bangkit', 'Januari 2018 - Desember 2019', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin in nisl dolor. Donec convallis quam a dignissim pulvinar. Nullam rhoncus elit a nisi elementum, sed luctus tortor porta. Etiam ac pellentesque lorem.', '2023-06-11 11:57:51', '2023-06-11 11:57:51', ''),
(8, 2, 'S1 Teknik Informatika', 'pendidikan', 'Universitas Kita Ajah', 'Agustus 2013 - Desember 2017', '', '2023-06-11 11:58:17', '2023-06-11 11:58:17', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lamaran`
--

CREATE TABLE `lamaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_mahasiswa` varchar(255) NOT NULL,
  `id_perusahaan` varchar(255) NOT NULL,
  `tgl_lamaran` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `keterampilan` varchar(255) NOT NULL,
  `pengalaman` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `job` varchar(255) NOT NULL,
  `pendidikan` text NOT NULL,
  `des` text NOT NULL,
  `pp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `alamat`, `email`, `no_hp`, `keterampilan`, `pengalaman`, `created_at`, `updated_at`, `job`, `pendidikan`, `des`, `pp`) VALUES
('1', 'uservuxH', '', '', '', '', '', '2023-06-09 09:56:38', '2023-06-09 09:56:38', '', '', '', ''),
('2', 'Divo Rio Gilang', 'kgjslkjkjbre,', 'admin@gmail.com', 'wekgbkljrg', '', '', '2023-06-11 10:12:23', '2023-06-11 13:50:10', 'Mahasiswaklj', '', '', 'file/2//648633828ec93.png'),
('4', 'user_VQSvFR', '', 'admin11@gmail.com', '', '', '', '2023-06-11 13:29:45', '2023-06-11 13:29:45', 'Mahasiswa', '', '', '../img/undraw_profile.svg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_user', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_06_09_135802_mahasiswa', 1),
(4, '2023_06_09_135810_perusahaan', 1),
(5, '2023_06_09_135814_lamaran', 1),
(6, '2023_06_09_143322_pekerjaan', 1),
(7, '2023_06_11_053059_detailmhs', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pekerjaan`
--

CREATE TABLE `pekerjaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `gaji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pekerjaan`
--

INSERT INTO `pekerjaan` (`id`, `id_perusahaan`, `posisi`, `deskripsi`, `status`, `created_at`, `updated_at`, `gaji`) VALUES
(1, '1', 'Sales Executive', 'PT Astra International Tbk membuka lowongan untuk posisi Sales Executive. Posisi ini bertanggung jawab untuk menjual produk-produk otomotif kepada pelanggan. Gaji yang ditawarkan kompetitif dan berdasarkan pencapaian penjualan. Kami mencari individu yang memiliki keterampilan komunikasi yang baik, orientasi pada hasil, dan kemampuan untuk bekerja dengan target.', 'Aktif', '2023-06-01 17:25:43', '2023-06-06 15:57:45', 19000000),
(2, '1', 'Marketing Analyst', 'PT Astra International Tbk sedang mencari Marketing Analyst yang akan bertanggung jawab dalam melakukan analisis pasar dan kompetitor, mengidentifikasi peluang bisnis, dan mengembangkan strategi pemasaran. Gaji yang ditawarkan sesuai dengan pengalaman dan kualifikasi. Pelamar diharapkan memiliki pemahaman yang baik tentang industri otomotif dan kemampuan analitis yang kuat.', 'Aktif', '2023-06-06 09:42:42', '2023-06-07 13:01:56', 10000000),
(3, '1', 'IT Support Specialist', 'PT Astra International Tbk membutuhkan IT Support Specialist untuk mendukung infrastruktur teknologi informasi perusahaan. Tugas utama meliputi instalasi, pemeliharaan, dan pemecahan masalah sistem komputer, jaringan, dan perangkat lunak. Gaji yang ditawarkan berdasarkan pengalaman dan keahlian. Kandidat yang berhasil akan bekerja di lingkungan kerja yang dinamis dan menantang.', 'Aktif', '2023-06-03 10:50:55', '2023-06-07 09:12:19', 9000000),
(4, '1', 'Finance Manager', 'PT Astra International Tbk sedang mencari seorang Finance Manager yang akan bertanggung jawab dalam mengelola aspek keuangan perusahaan. Tanggung jawab meliputi pembuatan laporan keuangan, pengelolaan anggaran, dan analisis keuangan. Gaji yang ditawarkan kompetitif dan berdasarkan pengalaman. Pelamar diharapkan memiliki pengetahuan yang mendalam tentang keuangan dan kemampuan kepemimpinan yang kuat.', 'Aktif', '2023-06-01 10:58:14', '2023-06-06 20:14:06', 10000000),
(5, '2', 'Software Engineer', 'Kami sedang mencari Software Engineer yang memiliki pengalaman dalam pengembangan aplikasi web.', 'Aktif', '2023-06-05 10:23:58', '2023-06-08 10:50:31', 19000000),
(6, '2', 'Network Administrator', 'Kami membutuhkan Network Administrator yang ahli dalam mengelola dan memelihara jaringan komputer.', 'Aktif', '2023-06-07 02:34:22', '2023-06-08 12:00:32', 18000000),
(7, '3', 'Brand Manager', 'Kami mencari Brand Manager yang memiliki keahlian dalam merencanakan dan melaksanakan strategi pemasaran.', 'Aktif', '2023-06-07 21:00:16', '2023-06-08 08:05:34', 9000000),
(8, '3', 'Supply Chain Analyst', 'Kami sedang mencari Supply Chain Analyst yang akan bertanggung jawab dalam mengoptimalkan rantai pasokan.', 'Aktif', '2023-06-02 21:27:13', '2023-06-03 19:50:41', 6000000),
(9, '3', 'Sales Executive', 'Kami membutuhkan Sales Executive yang memiliki kemampuan dalam menjalin hubungan dengan pelanggan.', 'Tidak Aktif', '2023-05-31 21:02:26', '2023-06-06 17:40:02', 16000000),
(10, '4', 'Relationship Manager', 'Kami mencari Relationship Manager yang akan bertanggung jawab dalam mengelola hubungan dengan nasabah.', 'Aktif', '2023-06-06 22:40:30', '2023-06-08 22:19:55', 20000000),
(11, '5', 'Credit Analyst', 'Kami sedang mencari Credit Analyst yang akan melakukan analisis kredit untuk pengajuan pinjaman.', 'Aktif', '2023-06-05 13:48:54', '2023-06-07 15:37:09', 6000000),
(12, '5', 'Customer Service Officer', 'Kami membutuhkan Customer Service Officer yang akan memberikan pelayanan terbaik kepada nasabah.', 'Tidak Aktif', '2023-06-05 12:18:08', '2023-06-05 20:48:24', 25000000),
(13, '6', 'Production Supervisor', 'Kami mencari Production Supervisor yang akan mengawasi dan mengkoordinasi kegiatan produksi.', 'Aktif', '2023-06-04 05:54:07', '2023-06-05 15:45:22', 20000000),
(14, '6', 'Quality Control Analyst', 'Kami sedang mencari Quality Control Analyst yang akan melakukan pengujian kualitas produk.', 'Aktif', '2023-06-08 04:58:19', '2023-06-08 17:37:15', 22000000),
(15, '6', 'Sales Representative', 'Kami membutuhkan Sales Representative yang akan bertanggung jawab dalam menjual produk kepada pelanggan.', 'Aktif', '2023-06-04 20:47:57', '2023-06-05 11:37:54', 6000000),
(16, '7', 'Engineer', 'Kami sedang mencari Engineer yang memiliki pengalaman dalam industri minyak dan gas.', 'Aktif', '2023-06-02 23:50:42', '2023-06-05 12:05:00', 16000000),
(17, '7', 'HSE Officer', 'Kami membutuhkan HSE Officer yang akan bertanggung jawab dalam menjaga keselamatan dan kesehatan kerja.', 'Aktif', '2023-05-31 22:14:46', '2023-06-06 21:46:08', 18000000),
(18, '8', 'Mine Engineer', 'Kami mencari Mine Engineer yang memiliki pengetahuan dalam pengelolaan tambang batu bara.', 'Aktif', '2023-06-05 19:49:15', '2023-06-07 14:06:07', 18000000),
(19, '8', 'Environmental Specialist', 'Kami sedang mencari Environmental Specialist yang akan mengawasi dan mengelola isu lingkungan.', 'Aktif', '2023-06-03 23:06:16', '2023-06-04 08:02:51', 11000000),
(20, '8', 'HR Officer', 'Kami membutuhkan HR Officer yang akan bertanggung jawab dalam manajemen sumber daya manusia.', 'Tidak Aktif', '2023-06-07 07:37:33', '2023-06-08 20:39:23', 15000000),
(21, '9', 'Production Operator', 'Kami sedang mencari Production Operator yang akan bertanggung jawab dalam proses produksi rokok.', 'Aktif', '2023-06-06 18:55:11', '2023-06-08 01:55:18', 17000000),
(22, '9', 'Maintenance Technician', 'Kami membutuhkan Maintenance Technician yang akan melakukan perawatan dan perbaikan mesin.', 'Tidak Aktif', '2023-06-07 14:32:59', '2023-06-08 00:12:52', 17000000),
(23, '10', 'Sales Manager', 'Kami mencari Sales Manager yang akan mengelola tim penjualan dan mencapai target penjualan.', 'Aktif', '2023-06-05 16:36:17', '2023-06-05 18:40:48', 6000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `industri` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `perusahaan`
--

INSERT INTO `perusahaan` (`id`, `nama`, `deskripsi`, `lokasi`, `industri`, `created_at`, `updated_at`, `logo`) VALUES
(1, 'PT Astra International Tbk', 'Perusahaan otomotif terbesar di Indonesia', 'Jakarta', 'Otomotif', NULL, NULL, 'logoPerusahaan/1.png'),
(2, 'PT Telkom Indonesia (Persero) Tbk', 'Perusahaan telekomunikasi terkemuka di Indonesia', 'Bandung', 'Telekomunikasi', NULL, NULL, 'logoPerusahaan/2.png'),
(3, 'PT Unilever Indonesia Tbk', 'Perusahaan produk konsumen terkemuka di Indonesia', 'Jakarta', 'Produk Konsumen', NULL, NULL, 'logoPerusahaan/3.png'),
(4, 'PT Bank Mandiri (Persero) Tbk', 'Perusahaan perbankan terbesar di Indonesia', 'Jakarta', 'Perbankan', NULL, NULL, 'logoPerusahaan/4.webp'),
(5, 'PT Bank Central Asia Tbk', 'Perusahaan perbankan terkemuka di Indonesia', 'Jakarta', 'Perbankan', NULL, NULL, 'logoPerusahaan/5.webp'),
(6, 'PT Indofood Sukses Makmur Tbk', 'Perusahaan makanan terbesar di Indonesia', 'Jakarta', 'Makanan', NULL, NULL, 'logoPerusahaan/6.png'),
(7, 'PT Pertamina (Persero)', 'Perusahaan energi terbesar di Indonesia', 'Jakarta', 'Energi', NULL, NULL, 'logoPerusahaan/7.png'),
(8, 'PT Adaro Energy Tbk', 'Perusahaan pertambangan batu bara terbesar di Indonesia', 'Jakarta', 'Pertambangan', NULL, NULL, 'logoPerusahaan/8.jpg'),
(9, 'PT Gudang Garam Tbk', 'Perusahaan produsen rokok terbesar di Indonesia', 'Kediri', 'Rokok', NULL, NULL, 'logoPerusahaan/9.png'),
(10, 'PT Semen Indonesia (Persero) Tbk', 'Perusahaan produsen semen terbesar di Indonesia', 'Jakarta', 'Konstruksi', NULL, NULL, 'logoPerusahaan/10.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin1@gmail.com', '$2y$10$4igdjtU/AN2t7c3fS9/6IOwg7SPUTdraeihNXBTb7kdLTasfiggk6', 'mahasiswa', '2023-06-09 09:56:38', '2023-06-09 09:56:38'),
(2, 'admin@gmail.com', '$2y$10$3eBP5Dnf0mw1NrYZuLihc.ER8A0eJcDAiKcmQDReFZntSRwZw.eFe', 'mahasiswa', '2023-06-11 10:12:23', '2023-06-11 10:12:23'),
(4, 'admin11@gmail.com', '$2y$10$T9/EP62RwojoBKzcqypOL.iyWVv5QBp3TzRio/HBYrj4EsIEC8UXG', 'mahasiswa', '2023-06-11 13:29:45', '2023-06-11 13:29:45');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_mhs`
--
ALTER TABLE `detail_mhs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD UNIQUE KEY `mahasiswa_email_unique` (`email`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_mhs`
--
ALTER TABLE `detail_mhs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `lamaran`
--
ALTER TABLE `lamaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pekerjaan`
--
ALTER TABLE `pekerjaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
