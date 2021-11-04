SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

CREATE TABLE `Mahasiswa` (
`Id` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
`Nim` int(11) NOT NULL,
`Nama` varchar(150) NOT NULL,
`Jenis_kelamin` varchar(20) NOT NULL,
`Prodi` text (30) NOT NULL,
`Angkatan` int(4) NOT NULL,
`Alamat` text
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `Mahasiswa` (`Id`,`Nim`, `Nama`,`Jenis_kelamin`, `Prodi`, `Angkatan`,`Alamat`) VALUES
(1,119140165, 'Muhammad Naseruddin Rasyid','Laki-laki','Teknik Informatika',2019,'Jalan Griya Dharmala No.17'),
(2,119140163, 'Lucky Febrian','Laki-laki','Teknik Informatika',2019,'Way Kandis, Jalan Situpinggir No.18'),
(3,119210025, 'Daffa Nibrasta','Laki-laki','Teknik Sipil',2019,'Jalan Griya Dharmala No.17'),
(4,119210045, 'Jibrilian Fritzgerald','Laki-laki','Teknik Sipil',2019,'Jalan Griya Dharmala No.17'),
(5,119130122, 'Alan Darma Syahputra','Laki-laki','Teknik Geofisika',2019,'Jalan Griya Dharmala No.17'),
(6,119130083, 'Mochammad Nurman Fadil','Laki-laki','Teknik Geofisika',2019,'Jalan Griya Dharmala No.17'),
(7,119160005, 'Iqbal Alfarisy','Laki-laki','Teknik Pertambangan',2019,'Jalan Griya Dharmala No.17');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;