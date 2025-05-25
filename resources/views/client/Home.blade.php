<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Fixed Position Example</title>
  <style>
    .fixed-box {
      position: fixed;
      top: 20px;
      right: 20px;
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border-radius: 8px;
    }

    .content {
      height: 2000px; /* untuk uji scroll panjang */
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="fixed-box">
    Saya tetap di sini!
  </div>

  <div class="content">
    <p>Scroll halaman ini untuk melihat posisi elemen di kanan atas tetap.</p>
  </div>
</body>
</html>
