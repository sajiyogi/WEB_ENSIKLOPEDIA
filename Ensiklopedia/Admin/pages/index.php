<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?> 
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="node_modules/mdi/css/materialdesignicons.min.css">
	<script type="text/javascript" src="../tinymce2/tinymce.min.js"></script>
			<script type="text/javascript">
		tinyMCE.init({
			selector:"#mytextarea"

		});
	</script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="brand-logo" > 
                	<img src="../images/logo2.png" alt="logo">
                </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        <li><a href="Setting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="admin_logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-home fa-fw"></i> Homepage <span class="fa arrow"></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="index.php">Buat artikel</a>
                                </li>
                                <li>
                                    <a href="lihatartikel.php">Lihat artikel</a>
                                </li>
                            </ul>
                        </li>
                        
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Membuat artikel baru</h1>
                    <form action="index.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<input type="text" name="judul_artikel" class="form-control" placeholder="Judul" required />
			</div>
			<div class="form-group">
				<label>Kategori:</label>
            <label><input type="radio" name="kategori" value="Kimia" checked /> Kimia</label>
            <label><input type="radio" name="kategori" value="Biologi" /> Biologi</label>
        	<label><input type="radio" name="kategori" value="Fisika" /> Fisika</label>
        	</div>
			<div class="form-group">
				<textarea name="deskripsi_artikel" id="mytextarea" rows="5" cols="50" placeholder="Deskripsi" ></textarea>
			</div>

			<p><b>Gambar :</b><br><input type="file" name="img_artikel"></p>
			
			
			<p><input type="submit" name="go" value="Kirim" /> <input type="reset" name="del" value="Hapus" /></p>
				</form>

		

                    
                </div>
                <!-- /.col-lg-12 -->
            	</div>
            <!-- /.row -->
            <!-- /.row -->
            <!-- /.panel-body -->
                </div>
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                   
                    <!-- /.panel -->
                    
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

<?php
	include ("koneksi.php");
        $set = true;
       //tentukan variabel file yg diupload dan tipe file
       if (isset($_FILES['img_artikel'])) {
           $tipe_file  = $_FILES['img_artikel']['type'];
            $lokasi_file = $_FILES['img_artikel']['tmp_name'];
            $nama_file  = $_FILES['img_artikel']['name'];
            $save_file =move_uploaded_file($lokasi_file,"images/".$nama_file);
        }
        
	        if(empty($lokasi_file)){
	            $set=false;
        	}
	        else{
	        //tentukan tipe file harus img_artikel 
	        if ($tipe_file != "image/gif" and
	            $tipe_file != "image/jpeg" and
	            $tipe_file != "image/jpg" and
	            $tipe_file != "image/jpeg" and
	            $tipe_file != "image/png")
	        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }
        else
        {
          isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
            chmod("images/$nama_file", 0777);
        }
        else
        {
            echo "<script>alert('Upload img_artikel gagal !')</script>";
            $set =  false;
        }
    }

		if (isset($_POST['go']) && $set) {
        $judul_artikel = $_POST['judul_artikel'];
        $kategori = $_POST['kategori'];
        $deskripsi_artikel = $_POST['deskripsi_artikel'];
        // $tanggal = date('Y-m-d H:i:s');
		// $targetDir = "../img/";
		// $fileName = basename($_FILES["image"]["name"]);
		// $targetFilePath = $targetDir . $fileName;
		// $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		// $allowTypes = array('jpg','png','jpeg','gif');
		// in_array($fileType,$allowTypes);
		// move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath);
		if ($nama_file == '') {
           echo "<script>alert('Masukan Gambar')</script>";
        }
        if ($judul_artikel == '') {
          echo "<script>alert('masukan judul artikel')</script>";
          exit();
        }
        if ($kategori == '') {
          echo "<script>alert('masukan kategori')</script>";
          exit();
        }
        if ($deskripsi_artikel == '') {
          echo "<script>alert('masukan deskripsi artikel')</script>";
          exit();
        }
		$sql = "insert into artikel (judul_artikel,kategori,deskripsi_artikel,img_artikel,tanggal) values ('$judul_artikel','$kategori','$deskripsi_artikel','$nama_file',CURRENT_TIMESTAMP)";
		$hasil = mysqli_query($koneksi, $sql);
		if ($hasil){
            echo '<script language="javascript">alert("Terima kasih, data Anda berhasil disimpan"); document.location="lihatartikel.php";</script>';
		}else{
			echo "error".$sql;
		}
		}
		?>

