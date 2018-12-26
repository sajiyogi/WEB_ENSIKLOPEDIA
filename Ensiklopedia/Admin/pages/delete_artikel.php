<?php  
    session_start();  
      
    if(!$_SESSION['admin_name'])  
    {  
      
        header("Location: admin_login.php");
    }  
      
?>    <?php  
    include("koneksi.php");  
    $delete_id=$_GET['del'];  
    $delete_query="delete  from artikel WHERE id_artikel='$delete_id'"; 
    $result=mysqli_query($koneksi,$delete_query);  
    if($result)  
       
    {   echo '<script language="javascript">alert("Terima kasih, Data Anda berhasil dihapus");document.location="lihatartikel.php?deleted=berita has been deleted";</script>';

    }  
      
    ?>  
