<!DOCTYPE html>

<html>
<head>
<meta charset='UTF-8'/>
<title>ÜYE KAYIT SİSTEMİ</title>
<style type="text/css">
body{margin=:0; padding:0;}
#kayit_formu{padding: 10px;width: 500px;margin:0px auto; background:#ddd;border-radius:5px;}
input{padding: 10px; border: 1px;solid #ccc; border-radius:300px;}
#uye{background-color: #fa3636; cursor:pointer; color:#fff}
</style>
</head>

<body>
<div id="kayit_formu">
<form action="uye.php" method="POST">
 <table>
 <tr>
<td>Adınız:</td> 
 <td> <input name="uye_adi" type="text" value=""/></td>
 </tr>

<tr>
<td>Soyadınız:</td>
<td><input name="uye_soyadi" type="text" value=""/></td>
</tr>

<tr>
<td>Yaşınız:</td>
<td><input name="uye_yasi" type="text" value=""/></td>
</tr>

<tr>
<td>Mesleğiniz:</td>   
<td><input name="uye_meslek" type="text" value=""/></td>
</tr>

<tr>
<td>Kullanıcı Adı:</td>
<td><input name="uye_kullanici" type="text" value=""/></td>
</tr>

<tr>
<td>Parola:</td>
<td><input name="uye_parola" type="password" value=""/></td>
</tr>

<tr>
<td>Tekrar Parola:</td>
<td><input name="uye_parola" type="password" value=""/></td>
</tr>

<tr>
<td><input id="uye" type="submit" value="KAYIT OL " /></td>
</tr>

</table>
</form>
<?php
$con=@mysqli_connect("localhost","root","","bitirmeprojesi");
$con->set_charset("utf8");
 if($_POST){
		  $adınız=$_POST['uye_adi'];
		  $soyadınız=$_POST['uye_soyadi'];
		  $yasiniz=$_POST['uye_yasi'];
		  $meslek=$_POST['uye_meslek'];
		  $kullanıcı_adı=$_POST['uye_kullanici'];
		  $parola=$_POST['uye_parola'];
		  $parola2=$_POST['uye_parola'];
 }	  
 
$d1=@mysqli_query($con,"INSERT INTO `kişi_bilgisi`(`kisi_id`, `Ad`, `Soyad`, `Yaş`, `Meslek`, `kullanıcı_adı`, `parola`, `tekrar parola`) VALUES (NULL,'$adınız','$soyadınız','$yasiniz','$meslek','$kullanıcı_adı','$parola','$parola2');");
    $sorgu=mysqli_query($con,"SELECT * FROM kişi_bilgisi");

	 echo ("<a href='login.php'>Giriş Yapmak İçin Tıklayın</a><br/>");


?>


</div>
</body>
</html>