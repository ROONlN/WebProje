<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">

<!-- JS dosyasını ekleyin -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>


         body {
            overflow: hidden;
          }
    </style>
    <link rel="stylesheet" href="proje.css">
</head>
<body>

  <nav>
    <button id="menu" onclick="menuFunction()" class="menu">Hakkımda <i id="arrow" class="fa-solid fa-caret-down"></i></button>
    
    <div class="nav">
      <ul>
        <li> <a href="index.html">Hakkımda</a></li>
        <li><a href="ilgialanim.html">İlgi Alanlarım</a></li>
        <li><a href="ozgecmis.html">Özgeçmiş</a></li>
        <li><a href="sehrim.html">Şehrim</a></li>
        <li><a href="mirasimiz.html">Mirasımız</a></li>
        <li><a href="form.html">İletişim</a></li>

      </ul>
    </div>
    <div class="login"> <span style="color: green; margin-right: 10px;">Giriş yap</div>
  </nav>

  <div class="navbar" id="navbar">
    <ul>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li>İletişim</li>
      <li class="text-danger">Linkler henüz hazır değil.</li>
    </ul>
  </div>
  <div class="app-container  container-fluid ">
  <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['kullaniciAd'] == 'G231210046@sakarya.edu.tr' && $_POST['sifre'] == 'g231210046') {
      echo "<script>setTimeout(function() { Swal.fire({ icon: 'success', title: 'Hoş Geldin Hüseyin Aydın!', text: 'Hakkımda Sayfasına Yönlendiriliyorsunuz',confirmButtonText: 'Tamam, anladım!' }); }, 0); setTimeout(function() { window.location.href = 'index.html'; }, 2000);</script>";

    } else {
        echo "<script>setTimeout(function() { Swal.fire({ icon: 'error', title: 'Hata!', text: 'Bilgilerinizi Kontrol Edip Tekrar Giriş Yapın.',confirmButtonText: 'Tamam, anladım!' }); }, 0); setTimeout(function() { window.location.href = 'login.html'; }, 2000);</script>";
    }
}
?>
    </div>


  </div>

    
</body>
</html>



