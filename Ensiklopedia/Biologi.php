<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ensiklopedia</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Ensiklopedia</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Apa itu IPA?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Kimia.php">Kimia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#Biologi">Biologi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="Fisika.php">Fisika</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Tim</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php">Tentang Kami</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    

    <!-- Services -->
    <section id="Fisika">
      <div class="container">
      	<h2 class="section-heading text-uppercase">Ilmu Pengetahuan Alam</h2>
            <h3 class="section-subheading text-muted"> istilah yang digunakan yang merujuk pada rumpun ilmu di mana obyeknya adalah benda-benda alam dengan hukum-hukum yang pasti dan umum, berlaku kapan pun dan di mana pun.</h3>
        <div class="row">

          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
            
           <?php  
            include '../admin/pages/koneksi.php';
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 5;
            $offset = ($pageno-1) * $no_of_records_per_page;
            $total_pages_sql = "SELECT COUNT(*) FROM artikel";
            $result = mysqli_query($koneksi,$total_pages_sql);
            $total_rows = mysqli_fetch_array($result)[0];
            $total_pages = ceil($total_rows / $no_of_records_per_page);

            $sql = "SELECT * FROM artikel WHERE kategori ='Biologi' order by id_artikel  desc LIMIT $offset, $no_of_records_per_page ";
            $res_data = mysqli_query($koneksi,$sql);
            $no = 1;
            if($res_data === FALSE) { 
			die(mysqli_error()); 
			}
            while($row = mysqli_fetch_array($res_data)){
                $id_artikel =$row[0];
                $judul_artikel=$row[1];                           
                $deskripsi_artikel=$row[2];
                $img_artikel="images/".$row[3];
                $tanggal = $row[4];
                $kategori=$row[5];
                
          ?>
          <div class="card mb-4">
            <img height="400" src="<?php echo 'admin/pages/images/'.$row[3]; ?>" alt="Card image cap">
            <div class="card-body">
              <h2 class="card-title"><?php echo $row[1]; ?></h2>
              <p class="card-text"><?php echo substr($row[2], 0,200); ?></p>
              <a href="artikel.php?id=<?php echo $id_artikel ?>" class="btn btn-primary">Read More &rarr;</a>
            </div>
            <div class="card-footer text-muted">
              Posted on <?php echo $row[4]; ?> by Admin
            </div>
          </div>
          <?php } ?>
          <ul class="pagination justify-content-center mb-4">
            <li class="page-item">
              <a class="page-link" href="?pageno=1">&larr; First</a>
            </li>
            <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
              <a class="page-link" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
            </li>
            <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
              <a class="page-link" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
            </li>
            <li class="page-item">
              <a class="page-link" href="?pageno=<?php echo $total_pages; ?>">Last &rarr;</a>
            </li>
          </ul>
          </div>
           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
          <div class="card my-4">
            <h5 class="card-header">Search</h5>
            <form action="search.php" method="post">
            <div class="card-body">
                <div class="input-group">
                  <input type="text" class="form-control" name="cari" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-secondary" type="submit" name="submit">Search</button>
                  </span>
                </div>
            </div>
            </form>
          </div>
        </div>
        </div>

        </div>
      </div>
    </section>

    
    <!-- About -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
