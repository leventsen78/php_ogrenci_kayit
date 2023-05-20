<?php 

$fullname = $_POST["fullname"];
$email = $_POST["eposta"];
$gender = $_POST["cinsiyet"];

$baglanti = new PDO("mysql:host=localhost;dbname=students", "root", "");

$sorgu = $baglanti->prepare("INSERT INTO students(full_name, email, gender) VALUES(?, ?, ?)");
$sorgu->bindParam(1, $fullname, PDO::PARAM_STR);
$sorgu->bindParam(2, $email, PDO::PARAM_STR);
$sorgu->bindParam(3, $gender, PDO::PARAM_STR);

$sorgu->execute();

echo "<p>Bilgiler başarılı bir şekilde kaydedildi.</p>";

?>