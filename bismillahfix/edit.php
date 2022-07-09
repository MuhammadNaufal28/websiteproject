<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<link rel="stylesheet" href="styleedit.css">
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
 
	<center><h2>Edit Data</h2></center>
	<h2>  </h2>
	<h1> </h1>
	<h2>  </h2>
	<h1> </h1>
	<h2>  </h2>
	<h1> </h1>

	
	<?php
	require 'functions.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"SELECT * FROM futsal_database  where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<center><form method="post" action="update.php">
			<table width="700" border="0" align="flex" cellpadding="20" cellspacing="20">
				<tr>			
					<td>Nama</td>
					<td>
						<input type="hidden" name="id" value="<?php echo $d['id'];  ?>">
						<input type="text" name="nama_Team" value="<?php echo $d['nama_Team']; ?>">
					</td>
				</tr>
				<tr>
					<td>Waktu Booking</td>
					<td><input type="text" name="waktubooking" value="<?php echo $d['waktubooking']; ?>"></td>
				</tr>
				<tr>
					<td>Pembayaran</td>
					<td><input type="text" name="pembayaran" value="<?php echo $d['pembayaran']; ?>"></td>
				</tr>
                <tr>
					<td>Status</td>
					<td><input type="text" name="status" value="<?php echo $d['status']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input style=" background-color: black  ; color: #FFEE4C;  background-position: top 25% right 0;  border-radius: 40px;
                  background-size: relative; font-size: 15px; font-family: 'Varela Round', sans-serif; padding: 9px 75px 9px 60px;  left: 252px;
top: 877px; cursor:default;" type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form></center>
		<?php 
	}
	?>
	 </section>
 
</body>
</html>