<?php 
    include('layout/header.php');
	require('../lib/tin_service.php');
	require('../lib/control.php');
	require_once('../lib/db.php');
       
       if(isset($_GET["page"])){
       	$page = $_GET["page"];
       }else{
       	$page = 1;
       }
    $conn = db_connect();
	$banghi = get_sorecord($conn);
	$sobanghi = mysqli_num_rows($banghi);
	$sobanghitrang = 3;
	$form = ($page - 1) * $sobanghitrang;
	$result = get_recordpage($conn, $form, $sobanghitrang);
	printTableTin($result,["idTin"=>"idTin", "TieuDe"=>"Tieu De", "urlHinh"=>"URL Hinh", "Ngay"=>"Ngay","Hoten"=>"Ho ten","Ten"=>"Loai tin", "SoLanXem"=>" So lan xem", "TinNoiBat"=>"Tin noi bat", "AnHien"=>"An hien", "TrangThai"=>"Trang thai"], "tin");
	 $sotrang = ceil($sobanghi / $sobanghitrang);
	 echo("<a href='add_Tin.php'>Add</a>"."<br>");
	for($i = 1; $i <= $sotrang; $i++){
		echo("<a href='Tin.php?page=$i'> $i </a>");
	}
	db_close($conn);
    
    include('layout/footer.php');
 ?>