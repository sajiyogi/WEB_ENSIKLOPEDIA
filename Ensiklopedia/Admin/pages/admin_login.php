
<!--
Author: Developer tech
Author URL: https://developertechid.blogspot.co.id/
License: Creative Developer tech
License URL: https://developertechid.blogspot.co.id/
-->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="assets/style.css" rel='stylesheet' type='text/css' />
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
 
<body>
	<div class="main">
		<div class="user">
			<img src="images/user.png" alt="">
		</div>
		<!---start-main-->
		<div class="login">
			<div class="inset">
				<form action="admin_login.php" method="POST">
			        <div>
						<span><label>Username</label></span>
						<span><input type="text" name="admin_name" class="textbox" autofocus="autofocus"></span>
					</div>
					<div>
						<span><label>Password</label></span>
					    <span><input type="password" name="admin_pass" class="password"></span>
					</div>
					<div><span><label>Captcha</label></span>
				      <label style="color: white">Captcha</label>
				      <input name="kodeval" type="text" id="kodeval" size="6" maxlength="6" />
				      <img src="kodeacak.php" width="75" height="25" alt="Kode Acak" />
				    </div>
					<hr>
					<div class="sign">
						<div class="submit">
                            <input type="submit" value="LOGIN" name="admin_login">
						</div>
					
						
						<div class="clear"> </div>
					</div>
				</form>
			</div>
		</div>
		<!---//end-main-->
	</div>
</body>
</html>
<?php  
      
    include ("koneksi.php"); 
      
    if(isset($_POST['admin_login']))  
    {  

        $admin_name = $_POST['admin_name'];
        $admin_pass = $_POST['admin_pass'];
        $sql="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  
        $result = mysqli_query($koneksi, $sql); 
              
        if(mysqli_num_rows($result) > 0)  
        {  
        	session_start();
			if($_SESSION['kodecap']!=$_POST['kodeval']){
					  //awal session
			print "<script>
			alert(\"kode captcha salah\");
			location.href = \"admin_login.php\";
			</script>";
            }
            else{
            	while($row = mysqli_fetch_assoc($result)){
                $id = $row["id_admin"];
                $admin_name = $row["admin_name"];
                session_start();
                $_SESSION['id'] = $id;
                $_SESSION['admin_name'] = $admin_name;
                header("Location: lihatartikel.php");

            }

            }
        }  
        else  
        {  
          echo "<script>alert('Periksa kembali Username dan Password!'); location.href = \"admin_login.php\";</script>";  
        } 
         
    }  
?> 
