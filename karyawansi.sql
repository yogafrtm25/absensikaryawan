-- Table structure for table `tb_absen`
CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `tb_daftar`
CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session_token` VARCHAR(255) NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `tb_daftar` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'admin2', 'admin2');

-- Table structure for table `tb_jabatan`
CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `tb_karyawan`
CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tel` varchar(18) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
);

-- Table structure for table `tb_keterangan`
CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);

-- Table structure for table `user_sessions`
CREATE TABLE active_sessions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    session_id VARCHAR(255) NOT NULL,
    login_time DATETIME NOT NULL,
    last_active_time DATETIME NOT NULL,
    device_info TEXT,
    UNIQUE KEY (user_id)
);
