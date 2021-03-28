-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Mar 2021 pada 19.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guyuprukun`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `activities`
--

CREATE TABLE `activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `activities`
--

INSERT INTO `activities` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`, `users_id`) VALUES
(1, 'Kerja Bakti', 'kerja bakti untuk membuat portal dalam rangka pembatasan ruang gerak dimasa pandemi covid-19', 'FB_IMG_1595771908461.jpg', '2021-02-10 19:35:21', '2021-02-10 19:35:21', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email_pengirim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_tujuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_02_05_131840_create_activities_table', 1),
(29, '2021_02_15_011237_create_tipe_kas_table', 2),
(30, '2021_02_15_011908_modif_tipekas_table', 3),
(31, '2021_02_15_012216_create_tipe_kas_details_table', 4),
(33, '2021_02_15_014719_edit_table', 5),
(34, '2021_02_15_030805_modif_increment_table', 6),
(35, '2021_02_28_232204_create_messages_table', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kas`
--

CREATE TABLE `tipe_kas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subtotal` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_kas`
--

INSERT INTO `tipe_kas` (`id`, `created_at`, `updated_at`, `name`, `subtotal`) VALUES
(2, NULL, '2021-02-27 07:42:57', 'GRSeribuSaja', '43000.00'),
(3, NULL, '2021-02-27 07:57:03', 'GRSeragam', '60000.00'),
(4, NULL, '2021-02-15 03:25:57', 'GRRefresing', '11000.00'),
(5, NULL, '2021-02-27 07:56:32', 'GRPeduli', '60000.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_kas_details`
--

CREATE TABLE `tipe_kas_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` decimal(8,2) NOT NULL,
  `tipe_kas_id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tipe_kas_details`
--

INSERT INTO `tipe_kas_details` (`id`, `created_at`, `updated_at`, `name`, `subtotal`, `tipe_kas_id`, `users_id`) VALUES
(17, '2021-02-27 07:41:36', '2021-02-27 07:41:36', 'Agung prayogi', '10000.00', 2, 1),
(18, '2021-02-27 07:41:36', '2021-02-27 07:41:36', 'mulyadi', '20000.00', 2, 2),
(19, '2021-02-27 07:41:36', '2021-02-27 07:41:36', 'Ilham romadhon', '20000.00', 2, 3),
(20, '2021-02-27 07:41:36', '2021-02-27 07:41:36', 'Retno yulianti', '10000.00', 2, 4),
(21, '2021-02-27 07:42:57', '2021-02-27 07:42:57', 'Agung prayogi', '3000.00', 2, 1),
(22, '2021-02-27 07:42:57', '2021-02-27 07:42:57', 'mulyadi', '10000.00', 2, 2),
(23, '2021-02-27 07:42:57', '2021-02-27 07:42:57', 'Ilham romadhon', '20000.00', 2, 3),
(24, '2021-02-27 07:42:57', '2021-02-27 07:42:57', 'Retno yulianti', '10000.00', 2, 4),
(25, '2021-02-27 07:56:32', '2021-02-27 07:56:32', 'Agung prayogi', '10000.00', 5, 1),
(26, '2021-02-27 07:56:32', '2021-02-27 07:56:32', 'mulyadi', '20000.00', 5, 2),
(27, '2021-02-27 07:56:32', '2021-02-27 07:56:32', 'Ilham romadhon', '20000.00', 5, 3),
(28, '2021-02-27 07:56:32', '2021-02-27 07:56:32', 'Retno yulianti', '10000.00', 5, 4),
(29, '2021-02-27 07:57:03', '2021-02-27 07:57:03', 'Agung prayogi', '10000.00', 3, 1),
(30, '2021-02-27 07:57:03', '2021-02-27 07:57:03', 'mulyadi', '20000.00', 3, 2),
(31, '2021-02-27 07:57:03', '2021-02-27 07:57:03', 'Ilham romadhon', '20000.00', 3, 3),
(32, '2021-02-27 07:57:03', '2021-02-27 07:57:03', 'Retno yulianti', '10000.00', 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jkel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `level`, `phone`, `status`, `jkel`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Agung Prayogi', 'Agungprayogi291@gmail.com', NULL, 'anggota', '+62895607601050', 'belum kawin', 'laki-laki', '$2y$10$0QW4KCS2o8webobXdBYhpezZYSOhIvWZ47zrFs5CAbC0RJzyH1cCO', 'XIvYwydx9H5b9Lwdk5dCVAXceZwAFJaeYVl6qqzlxWsntXaUV0ORVyfnTkCz', '2021-02-10 19:31:43', '2021-02-27 08:08:39'),
(2, 'mulyadi', 'mulyadi123@gmail.com', NULL, 'ketua', '+6285800060633', 'belum kawin', 'laki-laki', '$2y$10$8yGEjpR0vOsTtatEjVQd9u00I1lZt.BNJTsUJtz7hhQbIVNgUwR1y', '5tT8NkWzZQ7yg6amjrtePnv6PxZL37kfHg7ANM47eHcWNHEz2qzlOAz0MmOd', '2021-02-13 09:28:09', '2021-02-13 09:28:09'),
(3, 'Ilham romadhon', 'ilham08@gmail.com', NULL, 'anggota', '+6285786515616', 'belum kawin', 'laki-laki', '$2y$10$xawAZlL.Ap4xh4KF/B4LOuFOTELwRqTMziKWhOnoPiJO8u5P60QIO', '0UdJNdPIozvzbNN39OQNRVtNPQezyZUxPztffwL3r2KqUdcEnRMgfjQCvMom', '2021-02-27 07:31:31', '2021-02-27 07:31:31'),
(4, 'Retno yulianti', 'retnoyulianti123@gmail.com', NULL, 'anggota', '+6281225548010', 'belum kawin', 'laki-laki', '$2y$10$yJXWHVpOHk574J9rJVS/TOS.eDAKhubbfVRLkmv/jFTcULx59KN92', 'cWWUQcvAbXoyrq8V0GJk2btzeeXU2W2l7yz1pyL8Vw0cjImuJNoQLVj4V9JS', '2021-02-27 07:32:47', '2021-02-27 07:32:47'),
(5, 'ikapratiwi123', 'ikapratiwi123@gmail.com', NULL, 'sekertaris', '+6288221733932', 'belum kawin', 'perempuan', '$2y$10$5zdVNWHHUbtmkvn9FMs6ouyGB2DFyynhPIuy6jVy3jFCAG.kIIakO', 'kzJIStKD8bbdG4c8sDwGqhUaJJiw4hixIyFACBYWrjCif8WIFSmdQEAQoAjc', '2021-03-02 22:56:00', '2021-03-02 22:56:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activities_users_id_foreign` (`users_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tipe_kas`
--
ALTER TABLE `tipe_kas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tipe_kas_details`
--
ALTER TABLE `tipe_kas_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipe_kas_details_tipe_kas_id_foreign` (`tipe_kas_id`),
  ADD KEY `tipe_kas_details_users_id_foreign` (`users_id`);

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
-- AUTO_INCREMENT untuk tabel `activities`
--
ALTER TABLE `activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `tipe_kas`
--
ALTER TABLE `tipe_kas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tipe_kas_details`
--
ALTER TABLE `tipe_kas_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `tipe_kas_details`
--
ALTER TABLE `tipe_kas_details`
  ADD CONSTRAINT `tipe_kas_details_tipe_kas_id_foreign` FOREIGN KEY (`tipe_kas_id`) REFERENCES `tipe_kas` (`id`),
  ADD CONSTRAINT `tipe_kas_details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
