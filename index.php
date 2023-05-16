<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS ADITYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="uts_css.css">
</head>
<body>
<!-- form -->

<form action="homeku.php" method="POST">
  <!-- get ditampilkan di url kalau post tidak ditambilkan di url  -->
    <div class="mb-3">
        <div class="login">
            <h1 align="center"><b>LOGIN</b></h1>
            <p style="color: black;" align="center">Masukan NIM & Password</p>
            <input type="user" class="form-control" id="exampleInputNIM" aria-describedby="emailHelp" placeholder="username">
            
        </div>
    </div>
    <div class="mb-3">
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="password">
    </div>
    <div align="center">
      <button type="submit" class="btn btn-primary">Masuk</a>
    </div>
    <p align="center">Lupa Password? <b>Klik disini!</b></p>
  </form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>