<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="uts_css.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css”>
    <script src=”https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js”></script>
    <script src=”https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js” ></script>
</head>
<body>
    <!-- BAGIAN NAVBAR -->
<nav class="navbar bg fixed-top style-bg">
    <div class="container">
        <div class="navbar style-logo"><b>PBW</b></div>
        <div class="navbar user"><B>Selamat Datang, Aditya Kusumaputri</B></div>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Praktikum PBW A</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav left-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link style-home active" aria-current="page" href="tugas5.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Daftar Mahasiswa</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informasi Tugas</a>
              </li>
              <li>
              <div>
                <button class="btn btn-light" type="submit">Logout</button>
              </div>
              </li>
            </div>
        </div>
 </nav>
 
 <div class="JUDUL"></div>
  <h1 align="center">  DAFTAR MAHASISWA  <br>PRAKTIKUM PEMROGRAMAN BERBASIS WEB</br> </h1>
</div>
<br>

<div class="pencari">
    <td><a href="tambah.php" class="btn btn-success" style="background-color: rgb(92, 255, 47);">Tambah data</a></td>
    <td><a href="" class="btn btn-danger">Cetak Laporan <i class="fa fa-bars"></i></a> </td>

    <span>
        <button  style="float: right;" class="btn btn-primary" type="submit">O </button>
        <input type="text" style="width: 180px; height: 50px; float: right;" placeholder="Cari Berdasarkan NIM"><span class="glyphicon glyphicon-name" > </input> </span> 
        
    </span>
    
</div>
<br>


<table class="table">
    <thead>
      <tr class="table-primary" align="center">
        <th scope="col">No</th>
        <th scope="col">NIM</th>
        <th scope="col">NAMA</th>
        <th scope="col">Dosen</th>
        <th scope="col">Status</th>
        <th scope="col">Ket</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <!-- <tbody>
      <tr>
        <th align="center" scope="row">1</th>
        <td align="center">200441100052</td>
        <td align="center">Affan Maulana Zulkarnain</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Asprak</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr class="table-secondary">
        <th align="center" scope="row">2</th>
        <td align="center">200441100111</td>
        <td align="center">Muhammad Irham Alkarim</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Asprak</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr>
        <th align="center" scope="row">3</th>
        <td align="center">210441100106</td>
        <td align="center">Abdul Wahid</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Asprak</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr class="table-secondary">
        <th align="center" scope="row">4</th>
        <td align="center">210441100054</td>
        <td align="center">Fanky Abdil Qoyyim</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Asprak</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr>
        <th align="center" scope="row">5</th>
        <td align="center">220441100153</td>
        <td align="center">Rifqi Khairan Faathir</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Praktikan</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr class="table-secondary">
        <th align="center" scope="row">6</th>
        <td align="center">220441100077</td>
        <td align="center">Sukma Ayu Maharani</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Praktikan</td>
        <td align="center">Hadir</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr>
        <th align="center" scope="row">7</th>
        <td align="center">220441100117</td>
        <td align="center">Muhammad Rayhan R</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Praktikan</td>
        <td align="center">Alpha</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
      <tr class="table-secondary">
        <th  scope="row">8</th>
        <td align="center">220441100045</td>
        <td align="center">Fera Devi Susanti</td>
        <td align="center">Sri Herawati</td>
        <td align="center">Praktikan</td>
        <td align="center">Alpha</td>
        <td align="center"><a href="" class="btn btn-primary">Edit</a> <a href="" class="btn btn-danger">Hapus</a></td>
      </tr>
    </tbody> -->
  
  <?php 
                include 'conect.php';
                $no = 1;
                $data = mysqli_query($conect,"SELECT * FROM tbl_mhs2");
                while($d = mysqli_fetch_array($data)){
                  ?>
                  <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                            <td><?php echo $d['nama_mhs']; ?></td>
                            <td><?php echo $d['nama_dosen']; ?></td>
                            <td><?php echo $d['st']; ?></td>
                    <td><?php echo $d['ket']; ?></td>
                    <td>
                    <button type="button" class="btn btn-primary btn-sm " style="width: 80px;height: 30px;border-radius: 10px;"><a style="text-decoration: none; color:white;" href="mengubah.php?id=<?php echo $d['id_mahasiswa']; ?>">EDIT</a></button>
                    <button type="button" class="btn btn-danger btn-sm "style="width: 80px;height: 30px;border-radius: 10px;"> <a style="text-decoration: none; color:white;"href="deleted.php?id=<?php echo $d['id_mahasiswa']; ?>">HAPUS</a></button>
                    </td>
                  </tr>
                  <?php 
                }
                ?>
               
              </table>
            </div>
          </div>
        </div>
    </div>
</div>
    <script>
      feather.replace();
    </script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>