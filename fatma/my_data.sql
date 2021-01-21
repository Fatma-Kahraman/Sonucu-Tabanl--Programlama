-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Oca 2021, 16:28:32
-- Sunucu sürümü: 10.4.11-MariaDB
-- PHP Sürümü: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `my_data`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `abouts`
--

CREATE TABLE `abouts` (
  `abouts_id` int(11) NOT NULL,
  `abouts_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `abouts_slug` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `abouts_content` text COLLATE utf8_turkish_ci NOT NULL,
  `abouts_must` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `abouts`
--

INSERT INTO `abouts` (`abouts_id`, `abouts_title`, `abouts_slug`, `abouts_content`, `abouts_must`) VALUES
(1, 'Vizyon', 'vizyon', '<p><strong>Marvel Comics</strong>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&nbsp;merkezli&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%87izgi_roman\">&ccedil;izgi roman</a>&nbsp;yayımcısı şirkettir. Yayımlamış olduğu &ccedil;izgi romanlar arasında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Fantastik_D%C3%B6rtl%C3%BC\">Fantastik D&ouml;rtl&uuml;</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%96r%C3%BCmcek_Adam\">&Ouml;r&uuml;mcek Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Hulk\">Hulk</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Demir_Adam\">Demir Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Thor_(Marvel_Comics)\">Thor</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Daredevil\">Daredevil</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Kaptan_America\">Kaptan America</a>&nbsp;adında serileri vardır.</p>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/1960%27lar\">1960&#39;lı</a>&nbsp;yıllardan bu yana&nbsp;<a href=\"https://tr.wikipedia.org/wiki/DC_Comics\">DC Comics</a>&#39;in yanında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&#39;nin en b&uuml;y&uuml;k iki &ccedil;izgi roman şirketinden biri olma &ouml;zelliğini s&uuml;rd&uuml;rm&uuml;şt&uuml;r.</p>\r\n\r\n<p>31 Ağustos 2009 tarihinde&nbsp;<a href=\"https://tr.wikipedia.org/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a>&nbsp;tarafından $4.000.000.000&#39;a satın alındığı duyurulmuştur.<a href=\"https://tr.wikipedia.org/wiki/Marvel_Comics#cite_note-satis-1\">[1]</a></p>\r\n', 2),
(2, 'Misyon', 'misyon', '<p><strong>Marvel Comics</strong>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&nbsp;merkezli&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%87izgi_roman\">&ccedil;izgi roman</a>&nbsp;yayımcısı şirkettir. Yayımlamış olduğu &ccedil;izgi romanlar arasında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Fantastik_D%C3%B6rtl%C3%BC\">Fantastik D&ouml;rtl&uuml;</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%96r%C3%BCmcek_Adam\">&Ouml;r&uuml;mcek Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Hulk\">Hulk</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Demir_Adam\">Demir Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Thor_(Marvel_Comics)\">Thor</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Daredevil\">Daredevil</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Kaptan_America\">Kaptan America</a>&nbsp;adında serileri vardır.</p>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/1960%27lar\">1960&#39;lı</a>&nbsp;yıllardan bu yana&nbsp;<a href=\"https://tr.wikipedia.org/wiki/DC_Comics\">DC Comics</a>&#39;in yanında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&#39;nin en b&uuml;y&uuml;k iki &ccedil;izgi roman şirketinden biri olma &ouml;zelliğini s&uuml;rd&uuml;rm&uuml;şt&uuml;r.</p>\r\n\r\n<p>31 Ağustos 2009 tarihinde&nbsp;<a href=\"https://tr.wikipedia.org/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a>&nbsp;tarafından $4.000.000.000&#39;a satın alındığı duyurulmuştur.<a href=\"https://tr.wikipedia.org/wiki/Marvel_Comics#cite_note-satis-1\">[1]</a></p>\r\n', 1),
(3, 'Hakkımızda', 'hakkimizda', '<p>Marvel Comics,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&nbsp;merkezli&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%87izgi_roman\">&ccedil;izgi roman</a>&nbsp;yayımcısı şirkettir. Yayımlamış olduğu &ccedil;izgi romanlar arasında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Fantastik_D%C3%B6rtl%C3%BC\">Fantastik D&ouml;rtl&uuml;</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/%C3%96r%C3%BCmcek_Adam\">&Ouml;r&uuml;mcek Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Hulk\">Hulk</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Demir_Adam\">Demir Adam</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Thor_(Marvel_Comics)\">Thor</a>,&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Daredevil\">Daredevil</a>&nbsp;ve&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Kaptan_America\">Kaptan America</a>&nbsp;adında serileri vardır.</p>\r\n\r\n<p><a href=\"https://tr.wikipedia.org/wiki/1960%27lar\">1960&#39;lı</a>&nbsp;yıllardan bu yana&nbsp;<a href=\"https://tr.wikipedia.org/wiki/DC_Comics\">DC Comics</a>&#39;in yanında&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">ABD</a>&#39;nin en b&uuml;y&uuml;k iki &ccedil;izgi roman şirketinden biri olma &ouml;zelliğini s&uuml;rd&uuml;rm&uuml;şt&uuml;r.</p>\r\n\r\n<p>31 Ağustos 2009 tarihinde&nbsp;<a href=\"https://tr.wikipedia.org/wiki/The_Walt_Disney_Company\">The Walt Disney Company</a>&nbsp;tarafından $4.000.000.000&#39;a satın alındığı duyurulmuştur.</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admins`
--

CREATE TABLE `admins` (
  `admins_id` int(11) NOT NULL,
  `admins_namesurname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admins_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admins_username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admins_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `admins_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `admins_must` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `admins`
--

INSERT INTO `admins` (`admins_id`, `admins_namesurname`, `admins_file`, `admins_username`, `admins_pass`, `admins_status`, `admins_must`) VALUES
(1, 'Fatma Kahraman', '6006fad21e952.jpg', 'admin', '827ccb0eea8a706c4c34a16891f84e7b', '1', 1),
(19, 'Eda Kahraman', '6005d56473874.jpg', 'Eda_Kahraman', '09f68b5183c6534c437fb3b0e02fb6c4', '1', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `characters`
--

CREATE TABLE `characters` (
  `characters_id` int(11) NOT NULL,
  `characters_time` datetime NOT NULL DEFAULT current_timestamp(),
  `characters_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `characters_file` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `characters_content` text COLLATE utf8_turkish_ci NOT NULL,
  `characters_must` int(3) NOT NULL DEFAULT 0,
  `characters_slug` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `characters`
--

INSERT INTO `characters` (`characters_id`, `characters_time`, `characters_title`, `characters_file`, `characters_content`, `characters_must`, `characters_slug`) VALUES
(6, '2021-01-19 14:56:38', 'Iron Man - Demir Adam', '6005c94f5eca5.jpg', '<p>İron Man, Marvel&rsquo;ın Mart 1903 yılında &ccedil;ıkardığı bir s&uuml;per kahramandır. Marvel&rsquo;ın en &ccedil;ok sevilen karakterlerinden biri olan İron Man&rsquo;in ger&ccedil;ek adı Tony Stark&rsquo;tır. Yenilmezlerin bir &uuml;yesi olan Tony Stark, zengin, ukala tavırlı, egoist bir yapıya sahiptir. Stark End&uuml;stirileri adlı bir şirkete sahip olan Tony, son teknoloji silahlar &uuml;retmektedir. Ge&ccedil;irdiği bir kaza sonucunda kalbine yakın bir g&ouml;lgeye şarapnel par&ccedil;ası saplanan Tony Stark&rsquo;ın hayatı g&ouml;r&uuml;nd&uuml;ğ&uuml;nden &ccedil;ok daha zordur. Tony Strak, hayatına devam edebilmek i&ccedil;in g&ouml;ğs&uuml;ne manyetik alan jenerat&ouml;r&uuml; yerleştirmek zorunda kalır. Hayatı boyunca bu par&ccedil;a ile yaşamak zorunda kalan Tony Stark, sahip olduğu teknoloji ile İron Man zırhını tasarlamaya karar verir ve bunu başarır.&nbsp;</p>\r\n', 0, 'ironmen-demir-adam'),
(7, '2021-01-19 14:57:12', 'Hulk  - Yeşil Dev', '600703feca02f.jpg', '<p>En g&uuml;&ccedil;l&uuml; marvel karakterlerinden bir tanesi de Hulk&#39;tur. Yenilmezlerin orantısız g&uuml;ce sahip olan yeşil devi Hulk, &ccedil;ocukluğunda psikolojik a&ccedil;ıdan zayıf ve sorunlu bir babaya sahiptir. Babasının annesini &ouml;ld&uuml;rmesi sonucunda kırılgan bir yapıya b&uuml;r&uuml;nen Bruce Banner, Amerika&rsquo;nın en zeki insanları arasında kendisine yer edinir. ABD ordusuyla birlikte &ccedil;alışan zeki bilim adamı Bruce Banner, kendisinin &uuml;rettiği gama bombasının etkisinde kalarak ikincil bir kişiliğe sahip olur. Bu ikincil kişilik Hulk&rsquo;tır. Sadece &ouml;fkelendiğinde ve stres altında kaldığında Hulk&rsquo;a d&ouml;n&uuml;şen Bruce Banner&rsquo;ı zor ve heyecan dolu bir hayat beklemektedir.&nbsp;</p>\r\n', 2, 'hulk-yesil-dev'),
(8, '2019-10-20 18:08:25', 'Kaptan Marvel', '6005cf404b36f.jpg', '<p>Vatansever bir Amerikan vatandaşı olan Carol Danvers, NASA&rsquo;nın G&uuml;venlik Direkt&ouml;r&uuml; g&ouml;revinde bulunmaktadır. Gelişmiş teknolojiye sahip Kree uzaylı ırkından gelen Captain Mar-Vell kod adlı s&uuml;per kahraman d&uuml;nyaya indiğinde Carol ile tanışır. Captain ve Kree&rsquo;nin bulunduğu u&ccedil;ak uzaylılar tarafından saldırıya uğrar ve d&uuml;şer. Ger&ccedil;ekleşen savaş sırasında Psyche Magnetron isimli kozmik enerji depolayan cihaz patlar ve b&uuml;t&uuml;n g&uuml;&ccedil; Carol Danvers&rsquo;in v&uuml;cuduna yayılır. Enerjinin yayılması sonucu Carol, Kaptan Marvel&rsquo;a d&ouml;n&uuml;ş&uuml;r. Aradan ge&ccedil;en uzun yıllar sonrasında başı b&uuml;y&uuml;k belaya giren s&uuml;per kahramanlara destek olmak amacıyla Avengers ekibine katılır.</p>\r\n', 3, 'kaptan-marvel'),
(12, '2021-01-05 16:45:16', 'Thor', '6005ce1009108.jpg', '<p>En g&uuml;&ccedil;l&uuml; marvel karakterleri ve &ouml;zelliklerine kaldığımız yerden devam ediyoruz. Asgard&rsquo;ın efendisi Odin&rsquo;in oğlu Thor, şimşek tanrısıdır. Avengers filminin vazge&ccedil;ilmezlerinden olan Thor, sahip olduğu g&uuml;&ccedil; ve kudret ile Yenilmezler gurubunun en g&uuml;&ccedil;l&uuml;lerindendir. Babasından sonra Asgard&rsquo;ın efendisi olan Thor, sıra dışı ve olağan&uuml;st&uuml; &ouml;zelliklere sahip bir &ccedil;ekici bulunmaktadır. &Ccedil;eki&ccedil;ten Thor ş&ouml;yle bahseder, &ldquo;Bu &ccedil;ekici sadece onu hak edenler kullanabilir.&rdquo;</p>\r\n', 1, 'thor'),
(13, '2021-01-17 19:05:57', 'Captain America - Kaptan Amerika', '6005cd3d0c098.jpg', '<p>Yenilmezlerin olmazsa olmazlarından bir tanesi olan Kaptan Amerika, gerek fiziksel gerek zihinsel a&ccedil;ıdan acınası bir haldedir. Deneysel serum sonucu &uuml;st d&uuml;zey bir insana d&ouml;n&uuml;şen Steve Rogers, Amerika i&ccedil;in savaşmaya karar verir. Amerika&rsquo;nın 2. D&uuml;nya Savaşı&rsquo;nı kazanması i&ccedil;in yarattığı Kaptan Amerika, &ouml;zel bileşenlerden oluşan kurşun ge&ccedil;irmez bir kalkana sahiptir. Marvel&rsquo;in &ouml;nde gelen karakterleri arasında yer alan Kaptan Amerika&rsquo;yı heyecan dolu bir ser&uuml;ven beklemektedir.</p>\r\n', 0, 'kaptan-amerika'),
(14, '2021-01-18 21:13:57', 'Black Widow - Kara Dul', '6005cfe566162.jpg', '<p>Marvel kadın karakterleri arasında yer alan Black Widow, en g&uuml;&ccedil;l&uuml; avengers karakterleri arasında yer almaktadır. D&uuml;nyanın &ouml;nde gelen casuslarından biri olan Natasha Romanova, kılık değiştirme konusunda son derece başarılıdır. İlk başta İron Man&rsquo;a karşı savaşan Rus ajanı Natasha, daha sonradan Amerika&rsquo;ya taşınıp Yenilmezler grubunun bir &uuml;yesi olmuştur. G&uuml;zel ve bir o kadar da &ccedil;ekici olan Natasha, Marvel&rsquo;in en &ccedil;ok sevilen karakterlerindendir.</p>\r\n', 0, 'black-widow-kara-dul'),
(15, '2021-01-18 21:17:29', 'Scarlet Witch - Kızıl Cadı', '6005d0b994be5.jpg', '<p>Asıl adı Wanda Maximoff olan Scarlet Witch&rsquo;i ilk olarak X-Men de g&ouml;rm&uuml;şt&uuml;k. Enerji manip&uuml;lasyonu&nbsp;konusunda &uuml;st&uuml;n yeteneklere sahip olan Scarlet Witch, doğumu esnasında kaos b&uuml;y&uuml;s&uuml;&nbsp;ile donatılmıştır. Kaos b&uuml;y&uuml;s&uuml; d&uuml;nyanın en tehlikeli ve en g&uuml;&ccedil;l&uuml; b&uuml;y&uuml;lerinden bir tanesidir. Quicksilver adından bir ikize sahip olan Scarlet Witch, Yenilmezlere katılarak grubun g&uuml;c&uuml;ne g&uuml;&ccedil; katmıştır.</p>\r\n', 0, 'scarlet-witch-kizil-cadi'),
(17, '2021-01-19 19:02:30', 'Hawkeye - ŞahinGöz', '6007034ff38b7.jpg', '<p><strong>Hawkeye</strong>&nbsp;(Şahing&ouml;z), yıllar &ouml;nce&nbsp;<a href=\"https://tr.wikipedia.org/wiki/T%C3%BCrkiye\">T&uuml;rkiye</a>&#39;de Marvel &ccedil;izgi roman yayınları tarafından yayınlanan&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Kaptan_Amerika\">Kaptan Amerika</a>&nbsp;adlı &ccedil;izgi romanda Kaptan Amerika&#39;nın en yakın yardımcısı ve &ouml;ğrencisi olarak yer almıştır. Kaptan Amerika T&uuml;rkiye&#39;de belli bir s&uuml;re yayınlandıktan sonra bitirildi.</p>\r\n\r\n<p>Orijinali&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Amerika_Birle%C5%9Fik_Devletleri\">Amerika Birleşik Devletlerinde</a>&nbsp;halen yayınlanmaktadır. &Uuml;nl&uuml;&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Marvel_Comics\">Marvel Comics</a>&nbsp;firmasının yine &uuml;nl&uuml; kurucusu&nbsp;<a href=\"https://tr.wikipedia.org/wiki/Stan_Lee\">Stan Lee</a>&nbsp;ve Don Heck tarafından tasarlanan Kaptan Amerika okuyucular tarafından &ccedil;ok beğenilmiştir. Şahing&ouml;z ayrı bir &ccedil;izgi roman olarak Amerika Birleşik Devletlerinde yayınlanmaktadır.</p>\r\n', 0, 'hawkeye-sahingoz');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `settings`
--

CREATE TABLE `settings` (
  `settings_id` int(11) NOT NULL,
  `settings_description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `settings_key` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_value` text COLLATE utf8_turkish_ci NOT NULL,
  `settings_type` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `settings_must` int(3) NOT NULL DEFAULT 0,
  `settings_delete` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `settings_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `settings`
--

INSERT INTO `settings` (`settings_id`, `settings_description`, `settings_key`, `settings_value`, `settings_type`, `settings_must`, `settings_delete`, `settings_status`) VALUES
(1, 'Site Başlığı', 'title', 'MARVEL KARAKTERLERİ', 'text', 10, '0', '1'),
(2, 'Site Açıklama', 'description', 'MARVEL KARAKTERLERİ', 'text', 9, '0', '1'),
(3, 'Site Logo', 'logo', '5ff46ebea7310.png', 'file', 11, '0', '1'),
(4, 'Fav Icon', 'icon', '5da89a22f02d6.png', 'file', 9, '0', '1'),
(5, 'Anahtar Kelimeler', 'keywords', 'kahramanyazilim,admin,panel,site', 'text', 0, '0', '1'),
(6, 'Telefon Numarası', 'phone', '0 541 810 67 51', 'text', 1, '0', '1'),
(7, 'Mail Adresi', 'email', 'fkahraman96@gmail.com', 'text', 8, '0', '1'),
(8, 'İlçe', 'ilce', 'Merkez', 'text', 7, '0', '1'),
(9, 'İl', 'il', 'VAN', 'text', 6, '0', '1'),
(10, 'Adres', 'adres', '<p>EDREMİT TOKİ</p>\r\n', 'ckeditor', 5, '0', '1'),
(11, 'Facebook', 'facebook', 'www.facebook.com/fatmakahraman1', 'text', 7, '0', '1'),
(12, 'Çalışma Saatleri', 'work_hours', 'Hafta içi 09:00 - 17:00', 'text', 6, '0', '1'),
(13, 'Site Sahibi', 'author', 'Fatma Kahraman', 'text', 8, '0', '1'),
(14, 'Copyright', 'copyright', 'Copyright © KAHRMAN YAZILIM 2021', 'text', 2, '0', '1'),
(15, 'Slogan', 'slogan', 'KAHRAMAN yazılım ile özgür yazılım', 'text', 3, '0', '1'),
(16, 'Slogan Link', 'slogan_url', 'http://www.google.com', 'text', 4, '0', '1'),
(17, 'Site Logo Metin', 'logo_text', 'MARVEL KARAKTERLERİ', 'text', 11, '0', '1'),
(18, 'Anasayfa İçerik', 'home_01_content', '<p>Marvel Karakterleri</p>\r\n', 'ckeditor', 5, '0', '1'),
(19, 'Anasayfa Fotoğraf', 'home_01_file', '5db5a641dcc25.jpg', 'file', 11, '0', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `sliders`
--

CREATE TABLE `sliders` (
  `sliders_id` int(11) NOT NULL,
  `sliders_title` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sliders_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `sliders_must` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `sliders`
--

INSERT INTO `sliders` (`sliders_id`, `sliders_title`, `sliders_file`, `sliders_must`) VALUES
(13, 'AVENGERS', '6005d21a81868.jpg', 0),
(14, 'MARVEL', '6005d36b99ff1.jpg', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_namesurname` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_file` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_mail` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_pass` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `users_status` enum('0','1') COLLATE utf8_turkish_ci NOT NULL,
  `users_must` int(3) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`users_id`, `users_namesurname`, `users_file`, `users_mail`, `users_pass`, `users_status`, `users_must`) VALUES
(9, 'fatma Kahraman', '6007051fdc1d2.jpg', 'fatma', '38ab93488e52710515c3095a83a92bcf', '1', 0);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`abouts_id`);

--
-- Tablo için indeksler `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admins_id`);

--
-- Tablo için indeksler `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`characters_id`);

--
-- Tablo için indeksler `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`settings_id`);

--
-- Tablo için indeksler `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`sliders_id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `abouts`
--
ALTER TABLE `abouts`
  MODIFY `abouts_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `admins`
--
ALTER TABLE `admins`
  MODIFY `admins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `characters`
--
ALTER TABLE `characters`
  MODIFY `characters_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `settings`
--
ALTER TABLE `settings`
  MODIFY `settings_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Tablo için AUTO_INCREMENT değeri `sliders`
--
ALTER TABLE `sliders`
  MODIFY `sliders_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
