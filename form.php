<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="proje.css">
</head>

  PHP EKRANINA HOŞGELDİNİZ!!! <br>
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "Adınız: " . $_POST['ad'] . "<br>";
    echo "Soyadınız: " . $_POST['soyad'] . "<br>";
    echo "Email: " . $_POST['email'] . "<br>";
    echo "Kullanıcı Adınız: " . $_POST['kullaniciadi'] . "<br>";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $dogumTarihi = $_POST['date'];
      echo "Girilen doğum tarihi: " . $dogumTarihi. "<br>";
  }
    if (isset($_POST['cinsiyet'])) {
      $cinsiyet = $_POST['cinsiyet'];
      echo "Cinsiyetiniz: " . $cinsiyet . "<br>";
    } else {
      echo "Cinsiyet seçimi yapılmamıştır.<br>";
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['lang'])) {
        $selectedLanguages = $_POST['lang'];
        echo "Bilinen programlama dilleri: " . implode(", ", $selectedLanguages)."<br>";
      }
    }  
    if (isset($_POST['ulke'])) {
      echo "Ülkeniz: " . $_POST['ulke'] . "<br>";
    }
    echo "Mesajınız: " . $_POST['mesaj'] . "<br>";

  }
  ?>
  <p> <a href='index.html'>&lt;Hakkımda&gt;</a>
  <p> <a href='form.html'>&lt; Form Ekranına geri dön&gt;</a></p>
</body>

</html>