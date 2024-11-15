-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 08 Oca 2024, 22:05:22
-- Sunucu sürümü: 8.0.17
-- PHP Sürümü: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `kisiselscript`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `anasayfa`
--

CREATE TABLE `anasayfa` (
  `anasayfa_id` int(1) NOT NULL DEFAULT '0',
  `anasayfa_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `anasayfa_isim` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `anasayfa_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `anasayfa_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `anasayfa`
--

INSERT INTO `anasayfa` (`anasayfa_id`, `anasayfa_logo`, `anasayfa_isim`, `anasayfa_baslik`, `anasayfa_detay`) VALUES
(0, '../dimg/31374294592540029713logo.jpg', 'Lorem İpsum', 'Merhaba Ben ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book'),
(0, '../dimg/31374294592540029713logo.jpg', 'Lorem İpsum', 'Merhaba Ben ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL DEFAULT '0',
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_author` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_gsm` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_faks` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adress` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_recapctha` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_googlemap` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_analystic` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_facebook` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_x` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_youtube` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_google` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtphost` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpuser` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtppassword` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_smtpport` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_siteurl`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_author`, `ayar_tel`, `ayar_gsm`, `ayar_faks`, `ayar_mail`, `ayar_adress`, `ayar_ilce`, `ayar_il`, `ayar_recapctha`, `ayar_googlemap`, `ayar_analystic`, `ayar_facebook`, `ayar_x`, `ayar_youtube`, `ayar_google`, `ayar_smtphost`, `ayar_smtpuser`, `ayar_smtppassword`, `ayar_smtpport`) VALUES
(0, '', 'http://localhost/kisisel', 'Kisisel Script', 'Kisisel Script5', 'cv, egitim, servisler,', 'Bugry Software', '0507 000 00 11', '0507 000 11 00', '0507 111 00 00', 'bugrysoftware@gmail.com', 'Çonyakara caddesi 35111 sokak', 'Konyaaltı - Çukurova', 'Adana - Ankara - Antalya', '', '', '', 'https://www.facebook.com', 'https://www.x.com', 'https://www.youtube.com', 'https://www.linkedin.com', 'mail.siteadresi.com', 'mail@siteadresi.com', '12345', '25'),
(0, '', 'http://localhost/kisisel', 'Kisisel Script', 'Kisisel Script5', 'cv, egitim, servisler,', 'Bugry Software', '0507 000 00 11', '0507 000 11 00', '0507 111 00 00', 'bugrysoftware@gmail.com', 'Çonyakara caddesi 35111 sokak', 'Konyaaltı - Çukurova', 'Adana - Ankara - Antalya', '', '', '', 'https://www.facebook.com', 'https://www.x.com', 'https://www.youtube.com', 'https://www.linkedin.com', 'mail.siteadresi.com', 'mail@siteadresi.com', '12345', '25'),
(0, '', 'http://localhost/kisisel', 'Kisisel Script', 'Kisisel Script5', 'cv, egitim, servisler,', 'Bugry Software', '0507 000 00 11', '0507 000 11 00', '0507 111 00 00', 'bugrysoftware@gmail.com', 'Çonyakara caddesi 35111 sokak', 'Konyaaltı - Çukurova', 'Adana - Ankara - Antalya', '', '', '', 'https://www.facebook.com', 'https://www.x.com', 'https://www.youtube.com', 'https://www.linkedin.com', 'mail.siteadresi.com', 'mail@siteadresi.com', '12345', '25'),
(0, '', 'http://localhost/kisisel', 'Kisisel Script', 'Kisisel Script5', 'cv, egitim, servisler,', 'Bugry Software', '0507 000 00 11', '0507 000 11 00', '0507 111 00 00', 'bugrysoftware@gmail.com', 'Çonyakara caddesi 35111 sokak', 'Konyaaltı - Çukurova', 'Adana - Ankara - Antalya', '', '', '', 'https://www.facebook.com', 'https://www.x.com', 'https://www.youtube.com', 'https://www.linkedin.com', 'mail.siteadresi.com', 'mail@siteadresi.com', '12345', '25'),
(0, '', 'http://localhost/kisisel', 'Kisisel Script', 'Kisisel Script5', 'cv, egitim, servisler,', 'Bugry Software', '0507 000 00 11', '0507 000 11 00', '0507 111 00 00', 'bugrysoftware@gmail.com', 'Çonyakara caddesi 35111 sokak', 'Konyaaltı - Çukurova', 'Adana - Ankara - Antalya', '', '', '', 'https://www.facebook.com', 'https://www.x.com', 'https://www.youtube.com', 'https://www.linkedin.com', 'mail.siteadresi.com', 'mail@siteadresi.com', '12345', '25');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_kucukresim` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `blog_kimden` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `blog_date` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `blog_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `detay_resim` varchar(350) COLLATE utf8_turkish_ci NOT NULL,
  `blog_yazi` mediumtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `deneyim`
--

CREATE TABLE `deneyim` (
  `deneyim_id` int(11) NOT NULL,
  `deneyim_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `deneyim_tarih` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `deneyim_mekan` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `deneyim_detay` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `deneyim`
--

INSERT INTO `deneyim` (`deneyim_id`, `deneyim_baslik`, `deneyim_tarih`, `deneyim_mekan`, `deneyim_detay`) VALUES
(4, 'Programming', '2017-2019', 'Freelance', 'Freelance lorem ipsum');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `egitim`
--

CREATE TABLE `egitim` (
  `egitim_id` int(11) NOT NULL,
  `egitim_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `egitim_tarih` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `egitim_mekan` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `egitim_detay` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `egitim`
--

INSERT INTO `egitim` (`egitim_id`, `egitim_baslik`, `egitim_tarih`, `egitim_mekan`, `egitim_detay`) VALUES
(1, 'Eğitim başlık', 'Eğitim tarih', 'Eğitim okul', 'Eğitim detay'),
(5, '5', '5', '5', '5');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `geridonus`
--

CREATE TABLE `geridonus` (
  `geridonus_id` int(11) NOT NULL,
  `geridonus_metin` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `geridonus_logo` varchar(1000) COLLATE utf8_turkish_ci NOT NULL,
  `geridonus_firma` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `geridonus`
--

INSERT INTO `geridonus` (`geridonus_id`, `geridonus_metin`, `geridonus_logo`, `geridonus_firma`) VALUES
(5, 'metin firma', '../dimg/geridonusDosya/25748225342565827727RampageKasa.png', 'firma firma'),
(6, 'metin firma', '../dimg/geridonusDosya/30884247152412826104GSKILL 32GB (2x16GB) RipjawsV Siyah DDR4 3200MHz CL16 1.35V Dual Kit Ram.png', 'firma metin'),
(7, '213213', '../dimg/geridonusDosya/25136211402271831751ryzen5-5600x.jpg', '12312'),
(8, 'mm', '../dimg/geridonusDosya/30817226632719224628LastvoiceBM300.png', 'ff'),
(9, '0LOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM IPSUMLOREM ', '../dimg/geridonusDosya/27983233422325626511hakkimda.jpg', 'LOREM IPSUM');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimda`
--

CREATE TABLE `hakkimda` (
  `hakkimda_id` int(1) NOT NULL DEFAULT '0',
  `hakkimda_fotograf` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_meslek` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_aciklama` varchar(300) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_dt` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_diller` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `hakkimda_cvindir` varchar(350) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hakkimda`
--

INSERT INTO `hakkimda` (`hakkimda_id`, `hakkimda_fotograf`, `hakkimda_baslik`, `hakkimda_meslek`, `hakkimda_aciklama`, `hakkimda_dt`, `hakkimda_diller`, `hakkimda_cvindir`) VALUES
(0, '../dimg/hakkimdaDosya/23239246712695720725hakkimda.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Computer Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '17-07-1970', 'Ru, Cu,', '../dimg/hakkimdaDosya/26677312812526928674cvDownload.txt'),
(0, '../dimg/hakkimdaDosya/23239246712695720725hakkimda.jpg', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Computer Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '17-07-1970', 'Ru, Cu,', '../dimg/hakkimdaDosya/26677312812526928674cvDownload.txt');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_icon` varchar(10000) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_viewbox` varchar(100) CHARACTER SET utf8 COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_detay` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_icon`, `hizmet_viewbox`, `hizmet_baslik`, `hizmet_detay`) VALUES
(22, 'M500.3 7.3C507.7 13.3 512 22.4 512 32V176c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V71L352 90.2V208c0 26.5-28.7 48-64 48s-64-21.5-64-48s28.7-48 64-48V64c0-15.3 10.8-28.4 25.7-31.4l160-32c9.4-1.9 19.1 .6 26.6 6.6zM74.7 304l11.8-17.8c5.9-8.9 15.9-14.2 26.6-14.2h61.7c10.7 0 20.7 5.3 26.6 14.2L213.3 304H240c26.5 0 48 21.5 48 48V464c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V352c0-26.5 21.5-48 48-48H74.7zM192 408a48 48 0 1 0 -96 0 48 48 0 1 0 96 0zM478.7 278.3L440.3 368H496c6.7 0 12.6 4.1 15 10.4s.6 13.3-4.4 17.7l-128 112c-5.6 4.9-13.9 5.3-19.9 .9s-8.2-12.4-5.3-19.2L391.7 400H336c-6.7 0-12.6-4.1-15-10.4s-.6-13.3 4.4-17.7l128-112c5.6-4.9 13.9-5.3 19.9-.9s8.2 12.4 5.3 19.2zm-339-59.2c-6.5 6.5-17 6.5-23 0L19.9 119.2c-28-29-26.5-76.9 5-103.9c27-23.5 68.4-19 93.4 6.5l10 10.5 9.5-10.5c25-25.5 65.9-30 93.9-6.5c31 27 32.5 74.9 4.5 103.9l-96.4 99.9z', '0 0 512 512', 'Hizmet Başlık', 'Hizmet Detay'),
(23, 'M64 64C28.7 64 0 92.7 0 128V384c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H64zm64 320H64V320c35.3 0 64 28.7 64 64zM64 192V128h64c0 35.3-28.7 64-64 64zM448 384c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM288 160a96 96 0 1 1 0 192 96 96 0 1 1 0-192z', '0 0 576 512', 'money', 'fa money');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL DEFAULT '1',
  `kullanici_adi` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_sifre` varchar(300) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_sifre`) VALUES
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229'),
(1, 'admin', 'fe01ce2a7fbac8fafaed7c982a04e229');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `portfolyo`
--

CREATE TABLE `portfolyo` (
  `portfolyo_id` int(11) NOT NULL,
  `portfolyo_ad` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `portfolyo_aciklama` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `portfolyo_resimyol` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `portfolyo_sira` int(2) NOT NULL,
  `portfolyo_durum` varchar(1) COLLATE utf8_turkish_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `portfolyo`
--

INSERT INTO `portfolyo` (`portfolyo_id`, `portfolyo_ad`, `portfolyo_aciklama`, `portfolyo_resimyol`, `portfolyo_sira`, `portfolyo_durum`) VALUES
(32, 'Ryzen5 İsim', 'Açıklama', '../dimg/portfolyoDosya/28930219152486929608ryzen5-5600x.jpg', 0, '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetdetay`
--

CREATE TABLE `yetdetay` (
  `yetdetay_id` int(11) NOT NULL,
  `yetenek_isim` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_yuzde` varchar(150) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetdetay`
--

INSERT INTO `yetdetay` (`yetdetay_id`, `yetenek_isim`, `yetenek_yuzde`) VALUES
(4, '3', '3'),
(5, 'Yetenek İsim', '31');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yetenek`
--

CREATE TABLE `yetenek` (
  `yetenek_id` int(1) NOT NULL DEFAULT '0',
  `yetenek_baslik` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_detay1` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `yetenek_detay2` varchar(250) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `yetenek`
--

INSERT INTO `yetenek` (`yetenek_id`, `yetenek_baslik`, `yetenek_detay1`, `yetenek_detay2`) VALUES
(0, 'There are many variations of passages of Lorem Ipsum available', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'There are many variations of passages of Lorem Ipsum available,');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Tablo için indeksler `deneyim`
--
ALTER TABLE `deneyim`
  ADD PRIMARY KEY (`deneyim_id`);

--
-- Tablo için indeksler `egitim`
--
ALTER TABLE `egitim`
  ADD PRIMARY KEY (`egitim_id`);

--
-- Tablo için indeksler `geridonus`
--
ALTER TABLE `geridonus`
  ADD PRIMARY KEY (`geridonus_id`);

--
-- Tablo için indeksler `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Tablo için indeksler `portfolyo`
--
ALTER TABLE `portfolyo`
  ADD PRIMARY KEY (`portfolyo_id`);

--
-- Tablo için indeksler `yetdetay`
--
ALTER TABLE `yetdetay`
  ADD PRIMARY KEY (`yetdetay_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `deneyim`
--
ALTER TABLE `deneyim`
  MODIFY `deneyim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `egitim`
--
ALTER TABLE `egitim`
  MODIFY `egitim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `geridonus`
--
ALTER TABLE `geridonus`
  MODIFY `geridonus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Tablo için AUTO_INCREMENT değeri `portfolyo`
--
ALTER TABLE `portfolyo`
  MODIFY `portfolyo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Tablo için AUTO_INCREMENT değeri `yetdetay`
--
ALTER TABLE `yetdetay`
  MODIFY `yetdetay_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
