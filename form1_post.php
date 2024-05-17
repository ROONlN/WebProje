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
<body>

  <nav>
    <button id="menu" onclick="menuFunction()" class="menu">Hakkımda <i id="arrow" class="fa-solid fa-caret-down"></i></button>
    
    <div class="nav">
      <ul>
        <li><a href="index.html">Hakkımda</a></li>
        <li><a href="ilgialanim.html">İlgi Alanlarım</a></li>
        <li><a href="ozgecmis.html">Özgeçmiş</a></li>
        <li><a href="sehrim.html">Şehrim</a></li>
        <li><a href="mirasimiz.html">Mirasımız</a></li>
        <li style="color: green;">İletişim Formu</li>
        <li>İletişim</li>
      </ul>
    </div>
    <a href="login.html"><div class="login"> <span style="color: green; margin-right: 10px;">Giriş yap</span> / Kayıt ol</div></a>
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

  <div class="main">
    <main class="left">
    <table>
            <tr>
            <td>ADI SOYADI</td><td>:</td>
            <td><b>
            <?php
            echo $_POST['adi']."&nbsp;".$_POST['soyadi'];
            ?>
            <b></td>
            </tr>
</table>
        
    </main>
    
  </div>

   

    <script src="js/md.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>