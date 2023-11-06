-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 Kas 2023, 22:32:46
-- Sunucu sürümü: 10.4.25-MariaDB
-- PHP Sürümü: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `test`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `faturalar`
--

CREATE TABLE `faturalar` (
  `id` int(11) NOT NULL,
  `musteriid` int(11) NOT NULL,
  `fatura_no` varchar(255) NOT NULL,
  `tutar` varchar(255) NOT NULL,
  `aciklama` text DEFAULT NULL,
  `tip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `faturalar`
--

INSERT INTO `faturalar` (`id`, `musteriid`, `fatura_no`, `tutar`, `aciklama`, `tip`) VALUES
(2, 3, '5001', '1500', 'Alındı', 0),
(3, 3, '5002', '1000', 'Dumbel Alındı', 1),
(4, 3, '5003', '3000', 'Geri ödeme', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kasa`
--

CREATE TABLE `kasa` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kasa`
--

INSERT INTO `kasa` (`id`, `ad`) VALUES
(1, 'X Kasası'),
(2, 'Y Kasası');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `ad`) VALUES
(1, 'Yemek - İçme'),
(2, 'Spor Malzemeleri'),
(3, 'Avcılık Malzemeleri'),
(4, 'Bilgisayar Malzemeleri');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `soyad` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefon` varchar(255) DEFAULT NULL,
  `adres` varchar(255) NOT NULL,
  `tc` varchar(11) DEFAULT NULL,
  `notu` text DEFAULT NULL,
  `sirket` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `ad`, `soyad`, `email`, `telefon`, `adres`, `tc`, `notu`, `sirket`, `date`) VALUES
(1, 'Mert', 'Buldur', '', '', '', '', '', 'HizmetIn', '2018-01-09'),
(2, 'Ahmet', 'Mehmet', '', '', '', '', '', 'Mehmet Inc.', '2018-01-09'),
(3, 'Veli', 'Kara', '', '', '', '', '', 'Veli Inc.', '2018-01-09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `siparis`
--

CREATE TABLE `siparis` (
  `id` int(11) NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `firma_adi` varchar(255) NOT NULL,
  `tarih` date NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `urunler` text NOT NULL,
  `fiyat` double NOT NULL,
  `no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `stok`
--

CREATE TABLE `stok` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `islem_tipi` int(11) NOT NULL,
  `adet` int(11) NOT NULL,
  `fiyat` double NOT NULL,
  `date` date NOT NULL,
  `musteri_id` int(11) NOT NULL,
  `kasa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `stok`
--

INSERT INTO `stok` (`id`, `urun_id`, `islem_tipi`, `adet`, `fiyat`, `date`, `musteri_id`, `kasa_id`) VALUES
(1, 1, 1, 300, 10, '2018-01-09', 2, 0),
(2, 1, 1, 300, 15, '2018-01-02', 3, 0),
(3, 2, 1, 1000, 2, '2018-01-09', 1, 0),
(4, 2, 1, 500, 3, '2018-01-09', 2, 2),
(5, 2, 1, 500, 4, '2018-01-09', 3, 0),
(6, 3, 1, 100, 5, '2018-01-09', 1, 2),
(7, 25, 0, 500, 100, '2018-02-21', 2, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `ad` varchar(255) NOT NULL,
  `kategoriId` int(11) NOT NULL,
  `ozellikler` text DEFAULT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `ad`, `kategoriId`, `ozellikler`, `date`) VALUES
(21, 'Dumbel', 2, '[{\"name\":\"kg\",\"value\":\"50\"}]', '2018-01-09'),
(22, 'Fasulye', 1, '[{\"name\":\"T\\u00fcr\\u00fc\",\"value\":\"Taze Fasulye\"}]', '2018-01-09'),
(23, 'Balık', 1, '[{\"name\":\"Tipi\",\"value\":\"Alabal\\u0131k\"}]', '2018-01-09'),
(24, 'Silah', 3, '[{\"name\":\"renk\",\"value\":\"Siyah\"}]', '2018-01-09'),
(25, 'Anakart', 4, '[{\"name\":\"marka\",\"value\":\"asus\"},{\"name\":\"bellek\",\"value\":\"2gb\"}]', '2043-10-09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `permission` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`id`, `name`, `email`, `password`, `permission`) VALUES
(1, 'Medeni BARLAS', 'admin@admin.com', '21232f297a57a5a743894a0e4a801fc3', '0,1,2,3,4,5,6,7');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `faturalar`
--
ALTER TABLE `faturalar`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kasa`
--
ALTER TABLE `kasa`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `stok`
--
ALTER TABLE `stok`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `faturalar`
--
ALTER TABLE `faturalar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `kasa`
--
ALTER TABLE `kasa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Tablo için AUTO_INCREMENT değeri `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `siparis`
--
ALTER TABLE `siparis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `stok`
--
ALTER TABLE `stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
