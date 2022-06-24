DROP DATABASE IF EXISTS rentalmotor;
CREATE DATABASE rentalmotor;



DROP TABLE IF EXISTS rentalmotor.tbl_user;
CREATE TABLE rentalmotor.tbl_user (
  id INT(11) COLLATE utf8mb4_unicode_ci NOT NULL AUTO_INCREMENT PRIMARY KEY,
  username varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  password varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO rentalmotor.tbl_user (id, username, password) VALUES
('0', 'admin', 'admin');
INSERT INTO rentalmotor.tbl_user (id, username, password) VALUES
('0', 'user', 'user');


DROP TABLE IF EXISTS rentalmotor.tbl_motor;
CREATE TABLE rentalmotor.tbl_motor (
  id_motor INT(255) COLLATE utf8mb4_unicode_ci NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  merek_motor varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  plat_no_motor varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  tahun_motor varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO rentalmotor.tbl_motor (id_motor, merek_motor, plat_no_motor, tahun_motor) VALUES
('0', 'kharisma', 'B 12534 EAH', '2004');
INSERT INTO rentalmotor.tbl_motor (id_motor, merek_motor, plat_no_motor, tahun_motor) VALUES
('0', 'HONDA', 'B 45763 FGR', '2000');
INSERT INTO rentalmotor.tbl_motor (id_motor, merek_motor, plat_no_motor, tahun_motor) VALUES
('0', 'NMax', 'C 09127 JKL', '2000');


DROP TABLE IF EXISTS rentalmotor.tbl_pinjam;
CREATE TABLE rentalmotor.tbl_pinjam ( 
  id_pinjam INT(255) COLLATE utf8mb4_unicode_ci NOT NULL AUTO_INCREMENT PRIMARY KEY,
  id_motor INT(255) COLLATE utf8mb4_unicode_ci, 
  merek_motor varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  plat_no_motor varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  status_motor varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'TIDAK DIPINJAM',
  tgl_peminjaman varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL, 
  tgl_pengembalian varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  id_user_peminjam varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'BELUM ADA'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS rentalmotor.tbl_kotaksaran;
CREATE TABLE rentalmotor.tbl_kotaksaran (
  id INT(11) COLLATE utf8mb4_unicode_ci NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nama varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  saran varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  tanggal varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO rentalmotor.tbl_kotaksaran (id, nama, saran, tanggal) VALUES
('0', 'shaman', 'motornya belum diisi bensin', '2019');
INSERT INTO rentalmotor.tbl_kotaksaran (id, nama, saran, tanggal) VALUES
('0', 'abled', 'Mantab motor antik', '2022');