<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
</head>

<body>
<?php
	$mysql_baglantisi = mysql_connect("localhost","root","") or die ("Üzgünüm, MySQL'e bağlanılamadı. Tekrar deneyiniz.");
	
	$veritabani_baglantisi = mysql_select_db("mekadresdefteriS01",$mysql_baglantisi) or die ("Üzgünüm, mekadresdefteriS01 adlı veritabanına bağlanılamadı. Tekrar deneyiniz.");
	
	mysql_query("SET CHARSET utf8");
	mysql_query("SET CHARSET SET utf8");
	mysql_query("SET CHARSET 'utf8_general_ci'");
?>
</body>
</html>