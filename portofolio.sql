-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2019 pada 05.37
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portofolio`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(10000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(13, 'First Article', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis arcu ligula, ut pretium lectus hendrerit placerat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam velit lacus, hendrerit quis orci id, volutpat tempus elit. Nam vulputate quam est, sed dictum augue euismod eget. Vestibulum massa mauris, blandit non finibus at, congue ut dolor. Duis sollicitudin posuere arcu eu bibendum. In volutpat est at purus vulputate vehicula. Ut vulputate magna eget massa porta aliquet.\r\n\r\nAliquam tincidunt, dolor nec convallis pellentesque, lacus odio luctus orci, quis viverra urna libero vitae magna. Suspendisse interdum tortor quis scelerisque vulputate. Nullam ut magna et libero dignissim eleifend. Cras et felis nec magna porttitor accumsan egestas vitae tortor. Nulla feugiat odio magna, in gravida leo aliquam ut. Donec tincidunt ligula mauris, ac consectetur libero pulvinar eget. Proin iaculis neque felis, a auctor libero lacinia id. Praesent finibus urna ornare lacus tempus tincidunt. Integer laoreet rutrum erat, in tincidunt lectus tristique eu. Sed in ultrices ex, sed ultrices dolor. Donec fringilla mi quis ipsum semper pharetra. Pellentesque suscipit mollis mattis. Cras sollicitudin nunc risus, vel porttitor sapien sollicitudin eget.\r\n\r\nPellentesque a urna ac eros auctor rhoncus. Vestibulum a interdum leo. Phasellus accumsan in dui at placerat. Nam maximus odio at blandit tempus. Sed commodo ut nisl eu finibus. Curabitur vel justo semper, maximus lorem eget, mollis massa. Quisque maximus ultrices rutrum. Fusce gravida tristique leo, at cursus augue dictum at. In hac habitasse platea dictumst. Aliquam ut aliquet arcu, a accumsan est. Ut euismod scelerisque nibh, non facilisis lectus porta at. Aliquam id nunc ultrices, commodo dui eget, vestibulum metus. Sed leo diam, egestas non augue vel, scelerisque tempor eros. Suspendisse vel varius neque. Cras cursus semper ullamcorper.\r\n\r\nNullam a turpis quis ipsum ultrices sagittis porta ut elit. Morbi eget orci et odio malesuada auctor. Integer urna diam, hendrerit eu massa vitae, sodales bibendum quam. Proin ut libero vitae nulla lacinia vehicula. Integer commodo odio at enim aliquet, imperdiet hendrerit velit blandit. Nulla vitae hendrerit lorem. Curabitur sed magna diam. Duis eu ultrices sapien, a elementum nisl. Etiam dictum lobortis ipsum, et condimentum turpis scelerisque nec. Nullam dapibus dapibus mi et viverra. Nullam tempor mauris id ex pharetra dignissim. Sed ultricies, nisl in dignissim pulvinar, diam eros fringilla sem, vitae interdum odio nunc eu lectus. Vivamus non gravida magna.', '2019-08-21 04:34:57', '2019-08-21 04:49:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `article_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `article_id`, `content`, `user`, `created_at`, `updated_at`) VALUES
(1, 13, 'Great Article!', 'Clowny', '2019-08-21 07:26:22', '2019-08-21 07:26:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_resets_table', 1),
(11, '2019_08_18_014421_create_comments_table', 1),
(12, '2019_08_18_015738_create_articles_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
