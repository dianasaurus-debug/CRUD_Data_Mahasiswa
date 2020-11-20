CREATE TABLE `mahasiswa` (
 `NIM` int(10) NOT NULL,
 `nama` varchar(50) NOT NULL,
 `tanggal_lahir` date NOT NULL,
 `alamat` text NOT NULL,
 `kode_jurusan` varchar(5) NOT NULL,
 `nomor_hp` varchar(12) NOT NULL,
 PRIMARY KEY (`NIM`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1