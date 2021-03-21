<?php
$KONEKSI = mysqli_connect("localhost","root","","db_blog");
if ( isset($_GET['id'])){
  $id = abs($_GET['id']);
}else{
  $id = 1;
}
$data_array = mysqli_fetch_array(mysqli_query($KONEKSI,"SELECT * FROM tb_artikel WHERE id='$id'"));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>artikel saya</title>
</head>
<body>
<!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="index.php">ANDIKA</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
              <a class="nav-link text-white" href="index.php">HOME</a>
              
              <li class="nav-item">
                <a class="nav-link active "text-white aria-current="page" href="#">NEWS</a>
              </li>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success bg-success text-white" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
<!-- navbar -->

<div class="container">
<?php
                $query_all = mysqli_query($KONEKSI,"SELECT * FROM tb_artikel LIMIT 6");
                while($array_all=mysqli_fetch_array($query_all)){

                
                ?>
  <div class="row">
    <div class="col-4">
    <img src="<?php echo $array_all['gambar']; ?>" class="img-responsive img-thumbnail" alt="...">
      </div>
        <div class="col-6"><h1><?php echo $array_all['judul']; ?></h1>
        <br><?php echo substr($array_all['isi'],0,70)."...."; ?>
      </div>
  </div>
  <?php } ?>
 
  
  




    <!-- Footer -->
<footer class=" p-3" style="background-color: rgba(0, 0, 0, 0.2);">
  <h1 style="font-size:20pt;">About Me</h1>
  <a href="https://www.instagram.com/andikabima_21/" class="text-left ms-3" style="font-size:29pt"><i class="fab fa-instagram"></i></a>
  <a href="https://api.whatsapp.com/send/?phone=6285828898404&text=Halo,saya ingin bertanya" class="text-left ms-3" style="font-size: 29pt;"><i class="fab fa-whatsapp"></i></a>
  <p class="text-center">
    © 2021 Copyright
  </p>

</footer>
<!-- Footer -->



<script src="https://kit.fontawesome.com/a1f2d56d3a.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/popper.min.js"></script>
</body>
</html>