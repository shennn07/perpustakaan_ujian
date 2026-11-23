CREATE DATABASE perpustakaan_ujian;

USE perpustakaan_ujian;

CREATE TABLE tb_user(
    id int AUTO_INCREMENT PRIMARY KEY,
    email varchar(50) NOT NULL,
    pass varchar(50),
    role ENUM('admin', 'anggota') NOT NULL,
    nama varchar(30) NOT NULL,
    kelas varchar(30)
    );

CREATE TABLE tb_buku(
    id int AUTO_INCREMENT PRIMARY KEY,
    judul varchar(50) NOT NULL,
    penerbit varchar(50) NOT NULL,
    tahun_terbit int NOT NULL,
    stok int NOT NULL,
    deskripsi varchar(200)
    );

CREATE TABLE tb_pinjam(
    id int AUTO_INCREMENT PRIMARY KEY,
    id_user int,
    id_buku int,
    tanggal_pinjam TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    tanggal_kembali DATE,
    jumlah int
    );

INSERT INTO `tb_user`
(`email`, `pass`, `role`, `nama`, `kelas`) 
VALUES 
('admin1@gmail.com','admin123','admin','admin','-'),
('user1@gmail.com','user123','anggota','user1','pplg1');

INSERT INTO `tb_buku`
(`judul`, `penerbit`, `tahun_terbit`, `stok`, `deskripsi`) 
VALUES 
('doraemon','fujiko_fujio','1998','5','komik doraemon'),
('naruto','masashi kishimoto','1998','10','manga naruto'),
('one piece','Oda','1998','10','manga one piece');