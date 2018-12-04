<html>
<body>
<form action="login.php" method="POST">
 <h1>ÜYE GİRİŞİ</h1>
 <tr>
<td>Kullanıcı Adı:</td>
<td><input name="k_adi" type="text" value=""/></td>
</tr>
<tr>
<td>Parola:</td>
<td><input name="sifre" type="password" value=""/></td>
</tr>
<tr>
<td><input name="login" type="submit" value="Giriş" /></td>
</tr>
<tr>
<td>
<a href="uye.php"><h3>Üye Olmak İçin...</h3></a>
</td>
</tr>
<meta http-equiv="Connect-Type"content="text/html;

<?php

$con=@mysqli_connect("localhost","root","","bitirmeprojesi");
$con->set_charset("utf8");
$yazdir= mysqli_query($con,"select * FROM kişi_bilgisi");

while($al=mysqli_fetch_assoc($yazdir))
{
	$Ad=$al['Ad'];
	$Soyad=$al['Soyad'];
	$Yaş=$al['Yaş'];
	$Meslek=$al['Meslek'];
$kullanıcı_adı=$al['kullanıcı_adı'];
	$parola=$al['parola'];
}
/*if($_POST["k_adi"]==$Ad and $_POST["sifre"]==$parola)
   echo "Giriş izni verildi. Hoşgeldiniz.";
   echo "<a href='gider.php'></a>";
else{
   echo "Kullanıcı adını yada şifreyi yanlış girdiniz. Tekrar deneyiniz!<br>";
   echo "<a href='login.php'>Geri</a>";
}*/
$SorguKayitKontrol = @mysqli_query("select * from kişi_bilgisi where Ad='Ad' order by id limit 1");
?>
</form>
</body>
</html>