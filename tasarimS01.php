<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>MEK ADRES DEFTERİ</title>
<link rel="Shortcut Icon"  href="uzayarkaplan01.jpg"  type="image/x-icon">
<style type="text/css">
body {
	background-image: url(uzayarkaplan01.jpg);
    background-repeat:no-repeat;
    background-size: cover;
}
body,td,th {
	width: 100%;
}
div{
	display: table;
    margin: 0 auto;
}
</style>

</head>

<font face="Verdana Black" size="6" color=#FF3300>
   <p align="center">M.E.K. </font> 
 <font face="Arial Black" size="4" color=#FFFFFF>
	 İTÜ PERSONEL ADRES DEFTERİ</p></font>
<body> 
<div id="adresdefteri" style="width: 400px;">
<form action="kaydet.php" method="post">
  <fieldset>
   <font face="Arial Black" size="3" color=#CCFFFF>
   <b>CİNSİYET:</b></font><br/>
   
     <input type="radio" name="cinsiyet" value="kadin" id="kadin">
     <font face="Arial" size="3" color=#FFFFFF>
      <b>Kadın</b></font><br/>
     
     <input type="radio" name="cinsiyet" value="erkek" id="erkek">
     <font face="Arial" size="3" color=#FFFFFF>
      <b>Erkek</b></font><br/>
	</fieldset><br/>
   
   <fieldset>
    <font face="Arial Black" size="3" color=#CCFFFF>
    <b>ÇALIŞMA TÜRÜ:</b></font><br/>
   
     <input type="radio" name="calismaturu" value="akademik" id="akademik">
     <font face="Arial" size="3" color=#FFFFFF>
     <b>Akademik Personel</b></font><br/>
     
     <input type="radio" name="calismaturu" value="idari" id="idari">
     <font face="Arial" size="3" color=#FFFFFF>
     <b>İdari Personel</b></font><br/>
     
     <input type="radio" name="calismaturu" value="diger" id="diger">
     <font face="Arial" size="3" color=#FFFFFF>
     <b>Diğer</b></font><br/>
    </fieldset><br/>
    
    <fieldset>
     <font face="Arial Black" size="3" color=#CCFFFF>
     <b>ADI:</b></font><br/>
     <input type="text" name="Ad" style="width: 350px;" placeholder="Buraya adını giriniz:" required><br/>
     
     <font face="Arial Black" size="3" color=#CCFFFF>
     <b>SOYADI:</b></font><br/>
     <input type="text" name="Soyad" style="width: 350px;" placeholder="Buraya soyadını giriniz:" required><br/>
     
     <font face="Arial Black" size="3" color=#CCFFFF>
     <b>ADRESİ:</b></font><br/>
     <textarea type="text" name="Adres" rows="8" cols="47" wrap="hard" placeholder="Buraya adresini giriniz:" required></textarea>
  </fieldset><br/>
  
	<input type="button" name="Kaydet" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="KAYDET">
	
	<input type="button" name="Sil" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="SİL">
	
	<input type="button" name="Listele" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="LİSTELE">
	
	<input type="button" name="Ara" style="background:#0000FF; width: 90px; height: 40px; font-family: Arial Black; font-size: 16px; color: aliceblue" value="ARA">
</form>
</div>
  <br>
</body>
</html>