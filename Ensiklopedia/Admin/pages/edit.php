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
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        
                        
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
                    <h1 class="page-header">Mengedit Artikel</h1>
                    <?php
				        include('koneksi.php');
				        $sql = "select * from artikel where id_artikel = $_GET[id]";
				        $hasil = mysqli_query($koneksi, $sql);
				        while($row = mysqli_fetch_array($hasil))
					{
						   $id_artikel =$row[0];
                           $judul_artikel=$row[1];  
                           $deskripsi_artikel=$row[2];
                           $img_artikel="images/".$row[3];
                           $tanggal = $row[4];
                           $kategori=$row[5];
 
					}
					?> 
            
			<form  method="post" action=""  enctype="multipart/form-data">
             <div class="form-group">
             	<input type="hidden" name="id_artikel" value="<?php echo $id_artikel;?>">
         	 </div>
			<div class="form-group">
				<input type="text" name="judul_artikel" value= "<?php echo $judul_artikel;?>">
			</div>
			<div class="form-group">
				<label>Kategori:</label>
            <label><input type="radio" name="kategori" value="Kimia" checked /> Kimia</label>
            <label><input type="radio" name="kategori" value="Biologi" /> Biologi</label>
        	<label><input type="radio" name="kategori" value="Fisika" /> Fisika</label>
        	</div>
			<div class="form-group">
			<textarea   name="deskripsi_artikel" id="mytextarea"  class="form-control" rows="5" placeholder="Deskripsi Artikel" ><?php echo $deskripsi_artikel; ?></textarea>
			<div class="form-group">
			<p><b>Gambar :</b><img src=" <?php echo $img_artikel; ?>" width='50'><br><br><input type="file" name="img_artikel" size="20"></p>
			</div>
			<input type="submit" name="simpan" value="update">
			<input type="reset"  name="del" value= "Hapus" > </p>
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
	include('koneksi.php');
        $set = true;
        if (isset($_FILES['img_artikel'])) {
            $tipe_file  = $_FILES['img_artikel']['type'];
        $lokasi_file = $_FILES['img_artikel']['tmp_name'];
        $nama_file  = $_FILES['img_artikel']['name'];
        $save_file =move_uploaded_file($lokasi_file,"images/$nama_file");
        }
        
        if(empty($lokasi_file)){
            isset($set);
        }else{
        //tentukan tipe file harus image 
        if ($tipe_file != "image/gif" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/jpg" and
        $tipe_file != "image/jpeg" and
        $tipe_file != "image/png")
        {
            $set=false;
            echo "<script>alert('Upload gagal, tipe file harus image')</script>";
        }else{
            $unlink=mysqli_query($conn, "select * from artikel where id_artikel='$_POST[id_artikel]'");
            $CekLink=mysqli_fetch_array($unlink); 
            if(!empty($CekLink[img_artikel])){
                unlink("../img/$CekLink[img_artikel]");
            }
        isset($save_file);
        }
        //replace di server 
        if($save_file)
        {
        chmod("images/$nama_file", 0777);
        }
        else
        {
        echo "<script>alert('Upload image gagal !')</script>";
        $set =  false;
        }
        }
    if (isset($_POST['simpan']) && $set) {
        $id_artikel = $_POST['id_artikel'];
        $judul_artikel = $_POST['judul_artikel'];
        $kategori = $_POST['kategori'];
        $deskripsi_artikel = $_POST['deskripsi_artikel'];
        $tanggal = date('Y-m-d H:i:s');
        if (empty($lokasi_file)) {
            mysqli_query($koneksi, "UPDATE artikel SET judul_artikel = '$judul_artikel',kategori='$kategori',deskripsi_artikel = '$deskripsi_artikel',tanggal = '$tanggal' WHERE id_artikel = '$id_artikel'");
        }else{
            mysqli_query($koneksi, "UPDATE artikel SET judul_artikel = '$judul_artikel',kategori='$kategori',deskripsi_artikel = '$deskripsi_artikel',img_artikel = '$nama_file',tanggal = '$tanggal' WHERE id_artikel = '$id_artikel'");
        }


        // if ($hasil) {
        if($hasil){
						echo '<script language="javascript">alert("Terima kasih, data Anda berhasil diupdate"); document.location="lihatartikel.php";</script>';
            //header('Location : lihatartikel.php');
            //print "<meta http-equiv=\"refresh\"content=\"1;URL=lihatartikel.php\">";
        // }else{
        //     echo "error ".$sql;
        // }
	}
	}
?>