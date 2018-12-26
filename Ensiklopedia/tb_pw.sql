-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 05:25 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_pw`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `admin_name` varchar(150) NOT NULL,
  `admin_pass` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(120) NOT NULL,
  `judul_artikel` varchar(255) NOT NULL,
  `deskripsi_artikel` text NOT NULL,
  `img_artikel` varchar(255) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `deskripsi_artikel`, `img_artikel`, `tanggal`, `kategori`) VALUES
(58, 'Fungi / Jamur', '<p><strong>&nbsp;Ciri-Ciri Umum Jamur</strong><br /><br />Kita telah mengenal jamur dalam kehidupan sehari-hari meskipun tidak sebaik tumbuhan lainnya. Hal itu disebabkan karena jamur hanya tumbuh pada waktu tertentu, pada kondisi tertentu yang mendukung, dan lama hidupnya terbatas. Sebagai contoh, jamur banyak muncul pada musim hujan di kayu-kayu lapuk, serasah, maupun tumpukan jerami. namun, jamur ini segera mati setelah musim kemarau tiba. Seiring dengan perkembangan ilmu pengetahuan dan teknologi, manusia telah mampu membudidayakan jamur dalam medium buatan, misalnya jamur merang, jamur tiram, dan jamur kuping.<br /><strong>CIRI-CIRI UMUM JAMUR</strong><br />Jamur merupakan kelompok organisme eukariotik yang membentuk dunia jamur atau regnum fungi. Jamur pada umumnya multiseluler (bersel banyak). Ciri-ciri jamur berbeda dengan organisme lainnya dalam hal cara makan, struktur tubuh, pertumbuhan, dan reproduksinya.<br /><strong>1. Struktur Tubuh</strong><br />Struktur tubuh jamur tergantung pada jenisnya. Ada jamur yang satu sel, misalnyo khamir, ada pula jamur yang multiseluler membentuk tubuh buah besar yang ukurannya mencapai satu meter, contohnyojamur kayu. Tubuh jamur tersusun dari komponen dasar yang disebut hifa. Hifa membentuk jaringan yang disebut miselium. Miselium menyusun jalinan-jalinan semu menjadi tubuh buah.<br />&nbsp;&nbsp;&nbsp; <br />Hifa adalah struktur menyerupai benang yang tersusun dari dinding berbentuk pipa. Dinding ini menyelubungi membran plasma dan sitoplasma hifa. Sitoplasmanya mengandung organel eukariotik.<br />Kebanyakan hifa dibatasi oleh dinding melintang atau septa. Septa mempunyai pori besar yang cukup untuk dilewati ribosom, mitokondria, dan kadangkala inti sel yang mengalir dari sel ke sel. Akan tetapi, adapula hifa yang tidak bersepta atau hifa senositik.<br />Struktur hifa senositik dihasilkan oleh pembelahan inti sel berkali-kali yang tidak diikuti dengan pembelahan sitoplasma.<br />Hifa pada jamur yang bersifat parasit biasanya mengalami modifikasi menjadi haustoria yang merupakan organ penyerap makanan dari substrat; haustoria dapat menembus jaringan substrat.</p>', 'jamur.jpg', '2018-12-25 21:01:32', 'Biologi'),
(59, 'Teori Atom', '<p><strong>Teori Atom Dalton</strong><br /><br />Teori atom Dalton menyatakan bahwa:<br /><br />&nbsp;&nbsp;&nbsp; Setiap unsur tersusun dari partikel yang sangat teramat kecil yang disebut atom.<br />&nbsp;&nbsp;&nbsp; Semua atom dari satu unsur yang sama adalah identik, namun atom unsur satu berbeda dengan atom unsur-unsur lainnya.<br />&nbsp;&nbsp;&nbsp; Atom dari satu unsur tidak dapat diubah menjadi atom dari unsur lain melalui reaksi kimia; atom tidak dapat diciptakan ataupun dimusnahkan dalam reaksi kimia.<br />&nbsp;&nbsp;&nbsp; Senyawa terbentuk dari kombinasi atom-atom dari unsur-unsur yang berbeda dengan rasio atom yang spesifik.<br /><br />Teori atom Dalton ini memberikan gambaran model atom seperti model bola pejal atau model bola billiard.<br />Teori Atom J.J. Thomson<br /><br />Pada tahun 1897, J.J. Thomson melakukan eksperimen dengan sinar katoda. Eksperimen tersebut menunjukkan bahwa sinar katoda terdefleksi (terbelokkan) oleh medan magnet maupun medan listrik. Hal ini menunjukkan bahwa sinar katoda merupakan radiasi partikel yang bermuatan listrik. Pada eksperimen dengan medan listrik, sinar katoda terbelokkan menuju ke arah kutub bermuatan positif. Hal ini menunjukkan bahwa sinar katoda merupakan radiasi partikel bermuatan negatif. Selanjutnya, partikel sinar katoda ini disebut sebagai elektron. Penemuan elektron ini kemudian mengacu pada kesimpulan bahwa di dalam atom terdapat elektron yang bermuatan negatif. Menurut model atom Thomson, elektron bermuatan negatif tersebar dalam bola bermuatan positif seperti model roti kismis, di mana kismis-kismis adalah elektron-elektron, dan roti adalah bola bermuatan positif.<br /><strong>Teori Atom Rutherford</strong><br /><br />Pada tahun 1911, Ernest Rutherford melakukan eksperimen menembakkan partikel &alpha; &mdash; partikel bermuatan positif &mdash; pada lempeng emas tipis. Ia menemukan bahwa sebagian besar partikel-partikel &alpha; tersebut menembus melewati lempeng emas, namun ada sebagian yang mengalami pembelokan bahkan terpantulkan. Hal ini mengacu pada kesimpulan model atom Rutherford: model inti, di mana dalam atom yang sebagian besar merupakan ruang kosong terdapat inti yang padat pejal dan masif bermuatan positif yang disebut sebagai inti atom; dan elektron-elektron bermuatan negatif yang mengitari inti atom.<br /><strong>Teori Atom Bohr</strong><br /><br />Pada tahun 1913, Niels Bohr mengajukan model atom untuk menjelaskan fenomena penampakan sinar dari unsur-unsur ketika dikenakan pada nyala api ataupun tegangan listrik tinggi. Model atom yang ia ajukan secara khusus merupakan model atom hidrogen untuk menjelaskan fenomena spektrum garis atom hidrogen. Bohr menyatakan bahwa elektron-elektron bermuatan negatif bergerak mengelilingi inti atom bermuatan positif pada jarak tertentu yang berbeda-beda seperti orbit planet-planet mengitari matahari. Oleh karena itu, model atom Bohr disebut juga model tata surya. Setiap lintasan orbit elektron berada tingkat energi yang berbeda; semakin jauh lintasan orbit dari inti, semakin tinggi tingkat energi. Lintasan orbit elektron ini disebut juga kulit elektron. Ketika elektron jatuh dari orbit yang lebih luar ke orbit yang lebih dalam, sinar yang diradiasikan bergantung pada tingkat energi dari kedua lintasan orbit tersebut.<br /><strong>Teori Atom Mekanika Kuantum</strong><br /><br />Pada tahun 1924, Louis de Broglie menyatakan hipotesis dualisme partikel-gelombang &mdash; semua materi dapat memiliki sifat seperti gelombang. Elektron memiliki sifat seperti partikel dan juga sifat seperti gelombang. Pada tahun 1926, Erwin Schr&ouml;dinger merumuskan persamaan matematis yang kini disebut persamaan gelombang Schr&ouml;dinger, yang memperhitungkan sifat seperti partikel dan seperti gelombang dari elektron. Pada tahun 1927, Werner Heisenberg mengajukan asas ketidakpastian Heisenberg yang menyatakan bahwa posisi elektron tidak dapat ditentukan secara pasti, namun hanya dapat ditentukan peluang posisinya. Teori-teori &mdash; dualisme partikel gelombang, asas ketidakpastian Heisenberg, dan persamaan Schr&ouml;dinger&mdash;ini kemudian menjadi dasar dari teori atom mekanika kuantum. Penyelesaian persamaan Schr&ouml;dinger menghasilkan fungsi gelombang yang disebut orbital. Orbital biasanya digambarkan seperti awan elektron, di mana kerapatan awan tersebut menunjukkan peluang posisi elektron. Semakin rapat awan elektron maka semakin tinggi peluang elektron, begitu pula sebaliknya. Oleh karena itu, model atom mekanika kuantum disebut juga model awan elektron.<br /><br />Sebelumnya, pada tahun 1919, Rutherford berhasil menemukan partikel bermuatan positif, yang disebut proton, dari eksperimen penembakkan partikel &alpha; pada atom nitrogen di udara. Lalu, pada tahun 1932, James Chadwick menemukan partikel netral, yang disebut neutron, dari eksperimen bombardir partikel &alpha; pada berbagai unsur. Dengan demikian, dapat disimpulkan bahwa dalam model awan elektron, awan elektron terdiri dari elektron-elektron bermuatan negatif yang bergerak sangat cepat mengelilingi inti atom yang tersusun dariproton yang bermuatan positif dan neutron yang tak bermuatan.<br /><br />Referensi<br />&ndash; Brown, Theodore L. et al. 2015. Chemistry: The Central Science (13th edition). New Jersey: Pearson Education, Inc.<br />&ndash; Jenkins, et al. 2003. Nelson Chemistry 12. Toronto: Thomson Nelson.<br />&ndash; Petrucci, Ralph H. et al. 2011. General Chemistry: Principles and Modern Applications (10th edition). Toronto: Pearson Canada Inc.<br />&ndash; Purba, Michael. 2006. Kimia 1A untuk SMA Kelas X. Jakarta: Erlangga.<br />&ndash; Silberberg, Martin S. 2009. Chemistry: The Molecular Nature of Matter and Change (5th edition). New York: McGraw Hill<br />&ndash; Stacy, Angelica M. 2015. Living by Chemistry (2nd edition). New York: W.H. Freeman and Company<br />&ndash; Tro, Nivaldo J. 2011. Introductory Chemistry (4th edition). Illinois: Pearson Prentice Hall.<br />Mau diskon 40% paket RuangGuru? WA: 0813 7693 4946<br /><br />Judul Artikel: Teori Atom<br />Kontributor: Nirwan Susianto, S.Si.<br />Alumni Kimia UI<br /><br />Materi StudioBelajar.com lainnya:<br /><br />&nbsp;&nbsp;&nbsp; Koloid<br />&nbsp;&nbsp;&nbsp; Minyak Bumi<br />&nbsp;&nbsp;&nbsp; Contoh Reaksi Redoks<br /><br />Teori Atom Bohr<br /><br />Pada tahun 1913, Niels Bohr mengajukan model atom untuk menjelaskan fenomena penampakan sinar dari unsur-unsur ketika dikenakan pada nyala api ataupun tegangan listrik tinggi. Model atom yang ia ajukan secara khusus merupakan model atom hidrogen untuk menjelaskan fenomena spektrum garis atom hidrogen. Bohr menyatakan bahwa elektron-elektron bermuatan negatif bergerak mengelilingi inti atom bermuatan positif pada jarak tertentu yang berbeda-beda seperti orbit planet-planet mengitari matahari. Oleh karena itu, model atom Bohr disebut juga model tata surya. Setiap lintasan orbit elektron berada tingkat energi yang berbeda; semakin jauh lintasan orbit dari inti, semakin tinggi tingkat energi. Lintasan orbit elektron ini disebut juga kulit elektron. Ketika elektron jatuh dari orbit yang lebih luar ke orbit yang lebih dalam, sinar yang diradiasikan bergantung pada tingkat energi dari kedua lintasan orbit tersebut.<br />Teori Atom Mekanika Kuantum<br /><br />Pada tahun 1924, Louis de Broglie menyatakan hipotesis dualisme partikel-gelombang &mdash; semua materi dapat memiliki sifat seperti gelombang. Elektron memiliki sifat seperti partikel dan juga sifat seperti gelombang. Pada tahun 1926, Erwin Schr&ouml;dinger merumuskan persamaan matematis yang kini disebut persamaan gelombang Schr&ouml;dinger, yang memperhitungkan sifat seperti partikel dan seperti gelombang dari elektron. Pada tahun 1927, Werner Heisenberg mengajukan asas ketidakpastian Heisenberg yang menyatakan bahwa posisi elektron tidak dapat ditentukan secara pasti, namun hanya dapat ditentukan peluang posisinya. Teori-teori &mdash; dualisme partikel gelombang, asas ketidakpastian Heisenberg, dan persamaan Schr&ouml;dinger&mdash;ini kemudian menjadi dasar dari teori atom mekanika kuantum. Penyelesaian persamaan Schr&ouml;dinger menghasilkan fungsi gelombang yang disebut orbital. Orbital biasanya digambarkan seperti awan elektron, di mana kerapatan awan tersebut menunjukkan peluang posisi elektron. Semakin rapat awan elektron maka semakin tinggi peluang elektron, begitu pula sebaliknya. Oleh karena itu, model atom mekanika kuantum disebut juga model awan elektron.<br /><br />Sebelumnya, pada tahun 1919, Rutherford berhasil menemukan partikel bermuatan positif, yang disebut proton, dari eksperimen penembakkan partikel &alpha; pada atom nitrogen di udara. Lalu, pada tahun 1932, James Chadwick menemukan partikel netral, yang disebut neutron, dari eksperimen bombardir partikel &alpha; pada berbagai unsur. Dengan demikian, dapat disimpulkan bahwa dalam model awan elektron, awan elektron terdiri dari elektron-elektron bermuatan negatif yang bergerak sangat cepat mengelilingi inti atom yang tersusun dariproton yang bermuatan positif dan neutron yang tak bermuatan.</p>', 'Teori Atom.png', '2018-12-25 21:01:16', 'Kimia'),
(60, 'KECEPATAN DAN KELAJUAN', '<p><strong>Pengertian Kecepatan</strong><br />Kecepatan adalah ukuran tingkat di mana sebuah benda berubah posisinya terhadap waktu. Meskipun sering bingung dengan kelajuan, arah di mana benda tersebut bergerak diperlukan untuk pengukuran kecepatan. Ada berbagai jenis pengukuran kecepatan, termasuk rata-rata, sesaat, percepatan, radial, dan sudut. Ini adalah konsep fundamental dalam fisika, dan memiliki banyak aplikasi dalam kehidupan sehari-hari.<br /><strong>Perbedaan Kecepatan dan kelajuan</strong><br /><br />Istilah kecepatan dan kelajuan sering bingung, dan dalam beberapa situasi mereka digunakan secara bergantian. Hal ini secara teknis tidak benar, namun, karena kecepatan menghitung perpindahan benda &ndash; yaitu, jarak antara titik awal dan titik akhir &ndash; dan kecepatan tidak. Jika hanya jarak tempuh dan waktu yang disertakan, apa yang sedang diukur adalah kelajuan.<br /><br />Kelajuan adalah besaran skalar, berarti itu adalah jumlah sederhana dari sesuatu; itu hanya mencakup seberapa cepat sesuatu bergerak. Dalam istilah ilmiah, kelajuan sering diukur dalam meter per detik, meskipun kedua satuan dan waktu bervariasi dalam aplikasi lain; mobil yang bepergian pada 60 mil per jam (mph) atau 96,5 kilometer per jam (kpj), misalnya, bergerak dengan kecepatan tertentu. Hanya tingkat gerakan diperlukan &ndash; seberapa jauh benda bergerak selama waktu tertentu. Ini adalah rumus untuk kelajuan:<br /><br />Kecepatan adalah besaran vektor, sehingga tidak hanya mencakup jumlah, tetapi juga bagaimana arah bergerak dalam ruang. Arah ditentukan oleh perpindahan, yang merupakan jarak antara dimana benda dimulai dan di mana ia berhenti.<br /><br />Hal ini belum tentu sama dengan jarak yang ditempuh; jika titik A dan titik B terpisah sejauh 2 km, tetapi seseorang berjalan menempuh jalan 3,5 km untuk menyelesaikan dari A ke B, perpindahan masih tetap 2 km. Arah dari titik A ke B harus disertakan saat menjelaskan pengukuran ini, seperti &ldquo;1,4 meter per detik, ke utara.&rdquo; Ini adalah rumus untuk kecepatan:<br /><br />Karena kecepatan tidak mengambil jarak tempuh ke dalam perhitungan, kecepatan rata-rata benda dan kelajuan rata-rata bisa sangat berbeda. Jika seseorang berjalan 3,5 km jalan dari titik A ke titik B selama 45 menit, dia memiliki kelajuan rata-rata 4,66 km per jam. Jika perpindahan antara A dan B hanya 2 km ke utara, namun, kecepatan rata-rata nya 2.66 kph, ke utara.<br />Kecepatan Sesaat dan Konstan<br /><br />Ada dua cara dasar untuk memberikan kecepatan benda. Kecepatan sesaat adalah kecepatan dan arah benda bergerak pada saat tertentu, sedangkan kecepatan konstan (atau rata-rata) adalah ketika sesuatu bergerak pada kecepatan dan arah yang sama dari waktu ke waktu. Sebagai contoh, seorang wanita mungkin memiliki kecepatan sesaat dari 1,4 m / s ke timur pada setiap titik waktu tertentu ketika dia berjalan ke arah itu. Untuk menjadi kecepatan konstan, dia harus terus berjalan ke arah ini dengan kecepatan ini untuk beberapa jumlah waktu. Jika dia berubah arah atau jalan-jalan di jalan melingkar yang mengambil rute kembali ke titik awal, dia tidak memiliki kecepatan konstan karena dia tidak bergerak ke arah yang sama dengan kecepatan yang sama.<br /><strong>Akselerasi (percepatan)</strong><br /><br />Istilah &ldquo;percepatan&rdquo; digunakan untuk menjelaskan bagaimana suatu benda mengalami perubahan kecepatan dari waktu ke waktu. Secara sederhana, benda tersebut mempercepat atau memperlambat, tapi karena ini adalah besaran vektor, arah harus disertakan juga. Sebuah benda yang berubah arah, bahkan pada kecepatan konstan, berubah percepatannya juga. Karena kecepatan diukur dalam jarak per waktu, seperti m / s, percepatan diukur dalam jarak per waktu per waktu, atau m / s2.<br /><br />Dalam fisika, positif (+) dan negatif (-) biasanya menunjukkan arah, bukan kecepatan; Oleh karena itu, ketika sesuatu memiliki percepatan negatif, itu belum tentu melambat, itu bergerak dalam arah tertentu. Positif biasanya kanan atau ke atas, sementara negatif kiri atau ke bawah.<br /><strong>Kecepatan sudut</strong><br /><br />Ketika sebuah benda bergerak menuju atau menjauh dari titik asalnya, dikatakan memiliki radial atau kecepatan linier. Kecepatan sudut adalah ketika sebuah benda berputar di sekitar titik pusat dalam gerakan melingkar. Seperti jenis lain, diukur dengan seberapa jauh benda telah melakukan perjalanan dari waktu ke waktu. Karena benda tersebut bergerak dalam lintasan melingkar, jarak sudut dapat diukur dalam radian, derajat, atau revolusi. Meskipun benda bergerak dalam lingkaran dapat kembali ke titik awal, itu memang memiliki arah &ndash; searah jarum jam (negatif) atau berlawanan (positif).</p>', 'KECEPATAN.png', '2018-12-25 21:02:49', 'Fisika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
