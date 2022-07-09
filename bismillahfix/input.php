<?php
require  'functions.php' ;

if( isset($_POST["submit"]) ){
    //ambil data dari tiap elemen dalam form
    $namateam = htmlspecialchars($_POST["nama_Team"]);
    $waktubooking = htmlspecialchars($_POST["waktubooking"]);
    $pembayaran = htmlspecialchars($_POST["pembayaran"]);
    $status = htmlspecialchars($_POST["status"]);
//query insert data
$query = "INSERT INTO futsal_database
          VALUES
          ('','$namateam', '$waktubooking', '$pembayaran', '$status')
          ";
    mysqli_query($conn, $query);

    //cek data berhasil atau tidak di tambahkan
    if ($query < "0") {
        echo "<script>
        alert('data gagal di tambahkan');
        document.location.href = 'index.php';
        </script>";
      } else {
        echo "<script>
        alert('data berhasil di tambahkan');
        document.location.href = 'index.php';
        </script>";
      }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <link rel="stylesheet" href="styleinput.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>
<body>
<section id="header">
        <a href="homapage.php"><img src="muroz.png" class= "logo" alt=""></a>
        <div>
            <ul id="navbar">
                <strong><b><li><a href="index.php">Kembali</a></li></b></strong>
            </ul>
        </div>

    </section>
    <section id="hero">
    <center><h2>Tambah Team</h2></center>
   <center><form action="" method="POST">
   <div style="border:0; padding:10px; width:760px; height: 20px;;">
	<form action="input-aksi.php" method="post">		
	<table width="900" border="0" align="flex" cellpadding="15" cellspacing="15">
		<tr id="table" height="46">
				<td>Nama Team</td>
				<td><input type="text" name="nama_Team" id="nama_Team" required></td>					
			</tr>	
			<tr height="46">
				<td>Waktu Booking</td>
				<td><input type="text" name="waktubooking" id="waktubooking" required ></td>					
			</tr>	
			<tr height="46">
				<td>Pembayaran</td>
				<td><input type="text" name="pembayaran" id="pembayaran" required ></td>					
			</tr>	
            <tr height = "46">
                <td>Status</td>
                <td><input type="text" name="status" id="status" required ></td>
            </tr>
            <tr>
                <td>        </td>
            </tr>
            <tr>   
				<td><center><button style=" background-color: black ; color: #FFEE4C;  background-position: top 25% right 0;  border-radius: 40px;
                  background-size: relative; font-size: 15px; font-family: 'Varela Round', sans-serif; padding: 9px 75px 9px 60px;  left: 252px;
top: 877px; cursor:default;"
                 type="submit" name="submit">Tambah Team</button></center></button></td>				
			</tr> <br>				
		</table>
	</form>
    </tr>
    </div>
    </table>
    </section>
   </form>
   </center>
    
</body>
</html>