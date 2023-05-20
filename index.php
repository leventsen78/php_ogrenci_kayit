<!DOCTYPE html>
<html>
<body>

<h1>Öğrenci Ekleme Formu</h1>

<form action="addstudent.php" method="post">
  <label>Ad Soyad</label><br>
  <input type="text" id="fullname" name="fullname"><br><br>
  <label>E-Posta</label><br>
  <input type="email" id="eposta" name="eposta"><br><br>
  <label>Cinsiyet</label><br>
  <input type="radio" id="erkek" name="cinsiyet" value="Male">
  <label for="html">Erkek</label><br>
  <input type="radio" id="kiz" name="cinsiyet" value="Female">
  <label for="css">Kız</label><br><br>
  <input type="submit" value="Ekle">
</form> 

</body>
</html>
