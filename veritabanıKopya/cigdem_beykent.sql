-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Haz 2020, 03:50:07
-- Sunucu sürümü: 5.7.14
-- PHP Sürümü: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cigdem_beykent`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `baslik` text NOT NULL,
  `metin` text NOT NULL,
  `resim` text NOT NULL,
  `createDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `blog`
--

INSERT INTO `blog` (`id`, `baslik`, `metin`, `resim`, `createDate`) VALUES
(14, 'What is Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo fermentum, sagittis odio ut, pretium ligula. Nulla ornare ac lacus in blandit. Fusce bibendum, nulla quis pharetra finibus, mauris diam hendrerit est, pharetra varius arcu odio ut ipsum. Sed ultricies ante id porta semper. Vestibulum mollis ornare sapien a sodales. Integer in convallis dolor, non aliquet felis. Duis mattis tellus sit amet nulla tincidunt, consequat tempor enim imperdiet. Nulla facilisi. Morbi id accumsan odio. Donec quis cursus turpis, at facilisis ante. Nam a convallis urna, non laoreet neque. Phasellus mattis massa at risus viverra sodales. Cras in consequat orci. Nunc vulputate facilisis ullamcorper. Vestibulum consectetur felis gravida, tincidunt nulla vel, sodales ex.\r\n\r\nCurabitur eget magna vitae lectus placerat pretium eget ut purus. Quisque facilisis ex a ante venenatis, ut convallis elit fringilla. In imperdiet libero sed pretium mollis. Ut nec orci sit amet metus gravida tincidunt at et urna. Cras aliquet id nulla ac commodo. Sed ultrices laoreet lacus ut hendrerit. Sed eu faucibus enim.\r\n\r\nFusce justo dolor, mattis et ultrices in, rhoncus venenatis enim. Sed nulla dolor, ornare pellentesque elit id, auctor varius leo. Vivamus tincidunt massa risus, ut scelerisque tellus hendrerit sit amet. Curabitur ut odio nec sem viverra scelerisque. Mauris sed rhoncus justo, a posuere leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur erat tempor ex semper, vitae ullamcorper magna auctor.\r\n\r\nSuspendisse id auctor nisi. Aliquam erat volutpat. Quisque non lacus felis. Sed auctor commodo risus, ut efficitur dolor dictum et. Sed et augue eu neque sagittis volutpat. Vestibulum eget magna ante. Pellentesque id metus sit amet arcu eleifend tempor ac non urna. Praesent vel finibus lacus, id euismod quam. Cras magna ex, elementum ac nisl sed, interdum mattis metus. Duis aliquam felis sem, eu tempus enim sodales vel. Nam eu orci et diam viverra faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et nisl lectus.\r\n\r\nIn eget lacus enim. Nunc mollis malesuada vestibulum. Fusce efficitur, ante at sagittis mattis, leo sapien venenatis orci, quis interdum turpis sem vel urna. Suspendisse velit ligula, faucibus quis nulla at, tempus ultrices tortor. Ut lacinia tincidunt tellus quis lacinia. Etiam consequat dolor commodo vulputate auctor. Nam et velit eget arcu egestas consectetur vitae vel est. Aliquam lacinia et dolor vel pellentesque. Etiam scelerisque, diam quis vestibulum aliquet, mauris orci egestas quam, vitae mollis diam felis in quam. Ut elementum nibh orci, volutpat egestas justo porta sit amet. Pellentesque ac lectus rutrum nisi ullamcorper ultrices vel at est. Aliquam neque ipsum, euismod ut dui ut, euismod euismod tellus. Nam vulputate nisi vitae fringilla tempor. Ut et sem nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'MTVlZDYyN2U2YTNlMjY.jpg', '2020-06-02 13:10:53'),
(15, 'Lorem Ipsum?', 'Suspendisse id auctor nisi. Aliquam erat volutpat. Quisque non lacus felis. Sed auctor commodo risus, ut efficitur dolor dictum et. Sed et augue eu neque sagittis volutpat. Vestibulum eget magna ante. Pellentesque id metus sit amet arcu eleifend tempor ac non urna. Praesent vel finibus lacus, id euismod quam. Cras magna ex, elementum ac nisl sed, interdum mattis metus. Duis aliquam felis sem, eu tempus enim sodales vel. Nam eu orci et diam viverra faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et nisl lectus.\r\n\r\nIn eget lacus enim. Nunc mollis malesuada vestibulum. Fusce efficitur, ante at sagittis mattis, leo sapien venenatis orci, quis interdum turpis sem vel urna. Suspendisse velit ligula, faucibus quis nulla at, tempus ultrices tortor. Ut lacinia tincidunt tellus quis lacinia. Etiam consequat dolor commodo vulputate auctor. Nam et velit eget arcu egestas consectetur vitae vel est. Aliquam lacinia et dolor vel pellentesque. Etiam scelerisque, diam quis vestibulum aliquet, mauris orci egestas quam, vitae mollis diam felis in quam. Ut elementum nibh orci, volutpat egestas justo porta sit amet. Pellentesque ac lectus rutrum nisi ullamcorper ultrices vel at est. Aliquam neque ipsum, euismod ut dui ut, euismod euismod tellus. Nam vulputate nisi vitae fringilla tempor. Ut et sem nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'MTVlZDYyNzJkZTc4ZDE.jpg', '2020-06-02 13:17:21'),
(17, 'Nereden Bulabilirim?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi pulvinar feugiat commodo. Nunc ut varius sem, eget consectetur turpis. Nulla quis massa magna. Etiam imperdiet, mi vel lobortis posuere, eros velit imperdiet purus, non suscipit dolor lectus ac sem. Vestibulum ac eros eget elit gravida lacinia vulputate in nisi. Nunc ac consectetur elit. Mauris finibus lorem ut eros vehicula ullamcorper. Nunc convallis a elit eget laoreet.\r\n\r\nMorbi nec purus tempus, egestas eros quis, sagittis massa. Donec vestibulum pharetra justo, ac ullamcorper augue. Fusce tempor, tellus vel viverra fringilla, sem justo iaculis erat, nec aliquet nunc est ac massa. Etiam nulla est, interdum nec dolor a, rhoncus molestie ex. Integer tincidunt commodo enim at ullamcorper. Cras dictum ac diam vitae malesuada. Cras finibus, augue ac egestas bibendum, libero enim fermentum orci, nec commodo dui mi vel odio.\r\n\r\nMauris quis ex ac justo commodo sodales. Aliquam cursus tortor sed diam hendrerit ornare. Praesent sem nisl, rutrum eu massa sed, ornare posuere ligula. Etiam dignissim semper nunc sed lobortis. Etiam et eros at nisl posuere congue id eget odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur condimentum semper mauris, ac porta nibh posuere eu. Nulla facilisi. Etiam tristique eros quis justo tempor, quis finibus lectus accumsan. Nulla nec turpis non mauris luctus cursus sit amet non nisl. Fusce sed urna sagittis, tristique enim eget, condimentum lacus. Aenean placerat vulputate tristique. Integer cursus lacus eu mi ultricies feugiat.\r\n\r\nDuis dignissim laoreet velit a consectetur. Nam vehicula velit in nisl semper facilisis. Aenean sodales posuere libero, a pretium dui facilisis sit amet. Mauris leo quam, viverra non odio eget, viverra interdum ante. Vivamus dictum magna sit amet purus bibendum tincidunt. Sed ac molestie odio, sed laoreet elit. Morbi ullamcorper lectus ante, in facilisis tortor dictum at. Phasellus lacinia porta fermentum. Suspendisse euismod, tellus in sodales congue, ligula enim ultrices ex, sed malesuada arcu velit vel tellus. Curabitur lacinia libero at risus egestas faucibus. Aenean porta, lectus id tincidunt auctor, augue dolor fermentum magna, a commodo quam erat hendrerit velit. Nulla finibus diam quam, vel convallis arcu ullamcorper ac.', 'MTVlZDYyODQxMTQwZTY.jpg', '2020-06-02 13:21:56'),
(16, 'What is Lorem Ipsum?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo fermentum, sagittis odio ut, pretium ligula. Nulla ornare ac lacus in blandit. Fusce bibendum, nulla quis pharetra finibus, mauris diam hendrerit est, pharetra varius arcu odio ut ipsum. Sed ultricies ante id porta semper. Vestibulum mollis ornare sapien a sodales. Integer in convallis dolor, non aliquet felis. Duis mattis tellus sit amet nulla tincidunt, consequat tempor enim imperdiet. Nulla facilisi. Morbi id accumsan odio. Donec quis cursus turpis, at facilisis ante. Nam a convallis urna, non laoreet neque. Phasellus mattis massa at risus viverra sodales. Cras in consequat orci. Nunc vulputate facilisis ullamcorper. Vestibulum consectetur felis gravida, tincidunt nulla vel, sodales ex.\r\n\r\nCurabitur eget magna vitae lectus placerat pretium eget ut purus. Quisque facilisis ex a ante venenatis, ut convallis elit fringilla. In imperdiet libero sed pretium mollis. Ut nec orci sit amet metus gravida tincidunt at et urna. Cras aliquet id nulla ac commodo. Sed ultrices laoreet lacus ut hendrerit. Sed eu faucibus enim.\r\n\r\nFusce justo dolor, mattis et ultrices in, rhoncus venenatis enim. Sed nulla dolor, ornare pellentesque elit id, auctor varius leo. Vivamus tincidunt massa risus, ut scelerisque tellus hendrerit sit amet. Curabitur ut odio nec sem viverra scelerisque. Mauris sed rhoncus justo, a posuere leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vestibulum consectetur erat tempor ex semper, vitae ullamcorper magna auctor.', 'MTVlZDYyNzY5NTRlNjQ.jpg', '2020-06-02 13:18:22'),
(18, 'Nereden Gelir?', 'Suspendisse id auctor nisi. Aliquam erat volutpat. Quisque non lacus felis. Sed auctor commodo risus, ut efficitur dolor dictum et. Sed et augue eu neque sagittis volutpat. Vestibulum eget magna ante. Pellentesque id metus sit amet arcu eleifend tempor ac non urna. Praesent vel finibus lacus, id euismod quam. Cras magna ex, elementum ac nisl sed, interdum mattis metus. Duis aliquam felis sem, eu tempus enim sodales vel. Nam eu orci et diam viverra faucibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque et nisl lectus.\r\n\r\nIn eget lacus enim. Nunc mollis malesuada vestibulum. Fusce efficitur, ante at sagittis mattis, leo sapien venenatis orci, quis interdum turpis sem vel urna. Suspendisse velit ligula, faucibus quis nulla at, tempus ultrices tortor. Ut lacinia tincidunt tellus quis lacinia. Etiam consequat dolor commodo vulputate auctor. Nam et velit eget arcu egestas consectetur vitae vel est. Aliquam lacinia et dolor vel pellentesque. Etiam scelerisque, diam quis vestibulum aliquet, mauris orci egestas quam, vitae mollis diam felis in quam. Ut elementum nibh orci, volutpat egestas justo porta sit amet. Pellentesque ac lectus rutrum nisi ullamcorper ultrices vel at est. Aliquam neque ipsum, euismod ut dui ut, euismod euismod tellus. Nam vulputate nisi vitae fringilla tempor. Ut et sem nibh. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', 'MTVlZDY0MzdiMzQ0NzU.jpg', '2020-06-02 13:25:22');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `resimAd` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `galeri`
--

INSERT INTO `galeri` (`id`, `resimAd`) VALUES
(3, 'MTVlZDQxOWVlNzg4MjA.jpg'),
(4, 'MTVlZDQxYTMzMDEwMDE.jpg'),
(5, 'MTVlZDQxYTNlNDg5Yjg.jpg'),
(6, 'MTVlZDQxYTQ5ZTFmZjk.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `hakkimizda`
--

CREATE TABLE `hakkimizda` (
  `id` int(11) NOT NULL,
  `baslik` text NOT NULL,
  `yazi` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `hakkimizda`
--

INSERT INTO `hakkimizda` (`id`, `baslik`, `yazi`) VALUES
(1, 'Çiğdem Pastanesi', 'Bizler on yılı aşkın bir süreden beri siz değerli müşterilerimizin,beklentilerini en üst seviyede karşılamak için çalışmaktayız.\r\n\r\nÜrünlerimizi gıda güvenliğine,lezzete ve estetiğe bağlı kalarak üretmek ilkemiz,müşteri memnuniyeti ise temel amacımızdır.\r\n\r\nMisafirlerinizi bizimle ağırladığınız,özel günlerinizi,bizimle paylaştığınız,Geleneksel ve dini günlerde,bayramlarda sofralarınızı bizimle donattığınız,her yeni yıla,her yeni yaşa ve tüm mutluluklara titiz pastacılık ürünlerimiz ile adım attığınız için teşekkür ederiz.');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE `iletisim` (
  `id` int(11) NOT NULL,
  `adres` text NOT NULL,
  `maps` text NOT NULL,
  `telefon` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adres`, `maps`, `telefon`) VALUES
(1, 'Örnek Mah. Ahmet Arif Cad. No:2 Esenyurt, İstanbul - Avrupa', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d376.1554538521586!2d28.676119999999997!3d41.041801!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd3594c4a7c75eb26!2zw4dpxJ9kZW0gUGFzdGFuZXNp!5e0!3m2!1str!2sus!4v1483052793878', '+90 212 596 21 04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `mesaj`
--

CREATE TABLE `mesaj` (
  `id` int(11) NOT NULL,
  `adSoyad` text NOT NULL,
  `telefon` text NOT NULL,
  `eposta` text NOT NULL,
  `sehir` text NOT NULL,
  `ilce` text NOT NULL,
  `mesaj` text NOT NULL,
  `durum` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `mesaj`
--

INSERT INTO `mesaj` (`id`, `adSoyad`, `telefon`, `eposta`, `sehir`, `ilce`, `mesaj`, `durum`) VALUES
(6, 'bekir çelik', '5894218621', 'celik@gmail.com', 'istanbul', 'beylikdüzü', 'en kısa zamanda dönüşünüzü bekliyorum, iyi günler', 0),
(5, 'ahmet demir', '5431231146', 'demir@cigdem.com', 'istanbul', 'hadımköy', 'Geri dönüşünüzü bekliyorum', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `resimAd` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`id`, `resimAd`) VALUES
(7, 'MTVlZDVmY2ZkNDM3OTQ.jpg'),
(8, 'MTVlZDVmZDE0NjA3ZTU.jpg');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yonetici`
--

CREATE TABLE `yonetici` (
  `id` int(11) NOT NULL,
  `isim` text NOT NULL,
  `kullaniciAdi` text NOT NULL,
  `sifre` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `yonetici`
--

INSERT INTO `yonetici` (`id`, `isim`, `kullaniciAdi`, `sifre`) VALUES
(1, 'yönetici', 'admin', '123');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `hakkimizda`
--
ALTER TABLE `hakkimizda`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `mesaj`
--
ALTER TABLE `mesaj`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `yonetici`
--
ALTER TABLE `yonetici`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Tablo için AUTO_INCREMENT değeri `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `hakkimizda`
--
ALTER TABLE `hakkimizda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Tablo için AUTO_INCREMENT değeri `mesaj`
--
ALTER TABLE `mesaj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Tablo için AUTO_INCREMENT değeri `yonetici`
--
ALTER TABLE `yonetici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
