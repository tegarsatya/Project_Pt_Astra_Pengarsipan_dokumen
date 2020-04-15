/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100138
 Source Host           : localhost:3306
 Source Schema         : data

 Target Server Type    : MySQL
 Target Server Version : 100138
 File Encoding         : 65001

 Date: 26/11/2019 19:56:30
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for dokumen_filling
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_filling`;
CREATE TABLE `dokumen_filling`  (
  `id_dok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_dok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_dok`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dokumen_filling
-- ----------------------------
INSERT INTO `dokumen_filling` VALUES ('21', 'dokumen', 'rahasia', '', '2019-11-26');
INSERT INTO `dokumen_filling` VALUES ('3', 'tegar', 'One Sheet One Engine', '18-Article Text-80-1-10-20121106.pdf', '2019-11-26');

-- ----------------------------
-- Table structure for dokumen_keluar
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_keluar`;
CREATE TABLE `dokumen_keluar`  (
  `id_dok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dok` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_dok` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_dok` date NOT NULL,
  `isi_ringkas` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_dok`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dokumen_keluar
-- ----------------------------
INSERT INTO `dokumen_keluar` VALUES ('08989hn', 'tegar', 'No Urgent', '2019-11-16', 'jkb', 'computer-coding-500565_result.jpg');

-- ----------------------------
-- Table structure for dokumen_masuk
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_masuk`;
CREATE TABLE `dokumen_masuk`  (
  `id_dok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dok` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_dok` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_dok` date NOT NULL,
  `isi_ringkas` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `file` varchar(250) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_dok`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dokumen_masuk
-- ----------------------------
INSERT INTO `dokumen_masuk` VALUES ('klJHJSB', 'NMASMNAMN', 'No Urgent', '2019-11-16', '     Nsmn', 'download (5).jpg');

-- ----------------------------
-- Table structure for dokumen_penyusutan
-- ----------------------------
DROP TABLE IF EXISTS `dokumen_penyusutan`;
CREATE TABLE `dokumen_penyusutan`  (
  `id_penyusutan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dokumen_penyusutan` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_penyusutan` date NOT NULL,
  PRIMARY KEY (`tanggal_penyusutan`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of dokumen_penyusutan
-- ----------------------------
INSERT INTO `dokumen_penyusutan` VALUES ('fdgdr', 'dfsdf', '2019-11-24');

-- ----------------------------
-- Table structure for index_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `index_dokumen`;
CREATE TABLE `index_dokumen`  (
  `id_dok` bigint(255) NOT NULL AUTO_INCREMENT,
  `nama_dok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_dok` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `posisi_rak` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_dok`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 903 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of index_dokumen
-- ----------------------------
INSERT INTO `index_dokumen` VALUES (34, 'dokumen_rahasia', 'One Sheet One Engine', '2019-11-24', 'KIRI');
INSERT INTO `index_dokumen` VALUES (902, 'dokumen_pdf', 'Teriyo', '2019-11-24', 'kanan');

-- ----------------------------
-- Table structure for jenis_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `jenis_dokumen`;
CREATE TABLE `jenis_dokumen`  (
  `id_dok` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_dok` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_dok`, `jenis_dok`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of jenis_dokumen
-- ----------------------------
INSERT INTO `jenis_dokumen` VALUES ('3', 'rahasia');
INSERT INTO `jenis_dokumen` VALUES ('ss', 'penting');

-- ----------------------------
-- Table structure for master_form
-- ----------------------------
DROP TABLE IF EXISTS `master_form`;
CREATE TABLE `master_form`  (
  `id_form` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_form` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `uppload_form` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_form`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of master_form
-- ----------------------------
INSERT INTO `master_form` VALUES ('edewd', 'form penjulaan', 'download_result.jpg');

-- ----------------------------
-- Table structure for peminjaman_dokumen
-- ----------------------------
DROP TABLE IF EXISTS `peminjaman_dokumen`;
CREATE TABLE `peminjaman_dokumen`  (
  `id` bigint(10) NOT NULL AUTO_INCREMENT,
  `nama_peminjam` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_dokumen` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `id_peminjaman` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 31 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of peminjaman_dokumen
-- ----------------------------
INSERT INTO `peminjaman_dokumen` VALUES (26, 'trhtrg', 'tegar', '2019-11-26', '2019-11-27', 'dk0119');
INSERT INTO `peminjaman_dokumen` VALUES (27, 'vbgh', 'dokumen_masuk', '2019-11-24', '2019-11-26', '123');
INSERT INTO `peminjaman_dokumen` VALUES (28, 'ede', 'sxczsx', '2019-11-26', '2019-11-26', 'erfre');
INSERT INTO `peminjaman_dokumen` VALUES (29, 'fghgfh', 'dokumen', '2019-11-26', '2019-11-26', '123fg');
INSERT INTO `peminjaman_dokumen` VALUES (30, 'ght', 'tegar', '2019-11-26', '2019-11-26', 'rgtry56');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fullname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `level` enum('admin','user') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `foto` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (5, 'satya', '1cbff3d2bdcc7486cc38d9edd9c024df', 'satya negara', 'user', 'Laki Laki', 'coding-concept-on-black-eps-vectors_csp48164632_result.jpg');
INSERT INTO `user` VALUES (6, 'tegar', '1d31802d64bae29d88923d795fc73734', 'tegar satya negara', 'admin', 'Laki Laki', '130919042008_01-HIJAU.jpg');

SET FOREIGN_KEY_CHECKS = 1;
