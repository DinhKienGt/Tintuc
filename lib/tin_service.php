<?php 
	require('db.php');

	function get_sorecord($conn){
		return db_query($conn, "SELECT idTin FROM `tin` WHERE 1"); 
	}

	function get_recordpage($conn, $form, $sorecord){
		return db_query($conn, "SELECT idTin, TieuDe, urlHinh, Ngay, users.Hoten AS Hoten, loaitin.Ten AS Ten, SoLanXem,TinNoiBat, tin.AnHien, TrangThai FROM tin JOIN users on tin.idUser=users.idUser JOIN loaitin ON tin.idLT=loaitin.idLT LIMIT $form, $sorecord");
	}
 ?>