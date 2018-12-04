<html>
<head>
<meta charset='UTF-8'/>
<title>GİDER TABLOSU</title>
<style type="text/css">
body{margin=:0; padding:0;}
#kayit_formu{padding: 10px;width: 500px;margin:0px auto; background:#ddd;border-radius:5px;}
input{padding: 10px; border: 1px;solid #ccc; border-radius:3px;}
#gidergiris{background-color: #fa3636; cursor:pointer; color:#fff}
</style>
</head>
<body>
<div id="kayit_formu">
<form action="gider.php" method="POST">
 <table>
Elektrik:            <input name="elektrik" type="text" value=""/>
<br><br>
Su:                  <input name="su" type="text" value=""/>
<br><br>
Doğalgaz:            <input name="dogalgaz" type="text" value=""/>
<br><br>
Mutfak Masrafı:      <input name="mutfak_masrafi" type="text" value=""/>
<br><br>
Kredi Ödemesi:        <input name="kredi_odemesi" type="text" value=""/>
<br><br>
Kredi Kartı Borcu:    <input name="kredi_karti" type="text" value=""/>
<br><br>
Eğitim Masrafı:       <input name="egitim_masrafi" type="text" value=""/>
<br><br>
Çocuk Harçlığı:      <input name="cocuk_harcligi" type="text" value=""/>
<br><br>
Benzin Parası:        <input name="benzin_parasi" type="text" value=""/>
<br><br>
Aidat Ücreti:         <input name="aidat_ücreti" type="text" value=""/>
<br><br>
Telefon Ücreti:       <input name="telefon_ücreti" type="text" value=""/>
<br><br>
İnternet Ücreti:      <input name="internet_ücreti" type="text" value=""/>
<br><br>
Giyim Masrafı:        <input name="giyim_masrafi" type="text" value=""/>
<br><br>
Market Alışverişi:     <input name="market_alısverisi" type="text" value=""/>
<br><br>
<input id="gidergiris" type="submit" value="TAMAM " />
<br><br>
</table>
<?php
$con=mysqli_connect("localhost","root","","bitirmeprojesi");
$con->set_charset("utf8");
 if($_POST){
		  $elektrik=$_POST['elektrik'];
		  $su=$_POST['su'];
		  $dogalgaz=$_POST['dogalgaz'];
		  $mutfak_masrafı=$_POST['mutfak_masrafi'];
		  $kredi_ödemesi=$_POST['kredi_odemesi'];
		  $kredi_kartı=$_POST['kredi_karti'];
		  $egitim_masrafı=$_POST['egitim_masrafi'];
		  $cocuk_harcligi=$_POST['cocuk_harcligi'];
		  $benzin_parasi=$_POST['benzin_parasi'];
		  $aidat_ücreti=$_POST['aidat_ücreti'];
		  $telefon=$_POST['telefon_ücreti'];
		  $internet=$_POST['internet_ücreti'];
		  $giyim=$_POST['giyim_masrafi'];
		  $market=$_POST['market_alısverisi'];
		  
 }	  
$d1=mysqli_query($con,"INSERT INTO `giderler`(`elektrik`, `su`, `doğalgaz`, `mutfak_masrafı`, `kredi_ödemesi`, `kredi_kartı`, `egitim_masrafı`, `çocukların_harçlığı`, `benzin_gideri`, `aidat_parası`, `telefon_ücretleri`, `internet_faturası`, `giyim_masrafı`, `market_alışverişi`)
 VALUES ('$elektrik','$su','$dogalgaz','$mutfak_masrafı','$kredi_ödemesi','$kredi_kartı','$egitim_masrafı','$cocuk_harcligi','$benzin_parasi','$aidat_ücreti','$telefon','$internet','$giyim','$market');");
    $sorgu=mysqli_query($con,"SELECT * FROM giderler");

	 //echo ("<a href='login.php'></a><br/>");


?>

</form>
</div>
</body>
</html>