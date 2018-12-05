-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost:3306
-- Üretim Zamanı: 03 Ara 2018, 23:12:58
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `vasdejco_veri`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `id` int(150) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `sifre` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `kadi`, `sifre`, `key1`, `key_secret`) VALUES
(1, 'admin', '123456', 'CjulERsDeqhhjSme66ECg', 'IQWdVyqFxghAtURHGeGiWAsmCAGmdW3WmbEx6Hck');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `begeni`
--

CREATE TABLE `begeni` (
  `id` int(11) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `islem` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `giden` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `dm`
--

CREATE TABLE `dm` (
  `id` int(200) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `giden` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `d_cursor` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hesap`
--

CREATE TABLE `hesap` (
  `id` int(200) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `resim` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ilk_takipci` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `son_takipci` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `user_id` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `durum` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hesap`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `takip`
--

CREATE TABLE `takip` (
  `id` int(150) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `hesap` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `islem` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `takip` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `t_cursor` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `takip`
--


-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tweet`
--

CREATE TABLE `tweet` (
  `id` int(150) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `hesap` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `tweet_cursor` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `atilan` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `tweet`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `unfollow`
--

CREATE TABLE `unfollow` (
  `id` int(200) NOT NULL,
  `kadi` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `islem` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `unfollow` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `u_cursor` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key1` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `key_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `token_secret` varchar(200) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `begeni`
--
ALTER TABLE `begeni`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `dm`
--
ALTER TABLE `dm`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hesap`
--
ALTER TABLE `hesap`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `takip`
--
ALTER TABLE `takip`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `unfollow`
--
ALTER TABLE `unfollow`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `begeni`
--
ALTER TABLE `begeni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Tablo için AUTO_INCREMENT değeri `dm`
--
ALTER TABLE `dm`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Tablo için AUTO_INCREMENT değeri `hesap`
--
ALTER TABLE `hesap`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Tablo için AUTO_INCREMENT değeri `takip`
--
ALTER TABLE `takip`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=139;

--
-- Tablo için AUTO_INCREMENT değeri `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- Tablo için AUTO_INCREMENT değeri `unfollow`
--
ALTER TABLE `unfollow`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
