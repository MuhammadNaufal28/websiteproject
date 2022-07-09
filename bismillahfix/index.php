
<?php
require  'functions.php' ;

$result = mysqli_query($conn, "SELECT * FROM futsal_database")

			

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUROZ FUTSAL</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="styleindex.css">
</head>
<body>
<section id="header">
        <a href="homapage.php"><img src="muroz.png" class= "logo" alt=""></a>
        <div>
            <ul id="navbar">
                <strong><b><li><a href="input.php">Tambah Team</a></li></b></strong>
                <strong><b><li><a href="homepage.php">Kembali</a></li></b></strong>
                

    

                </form></li>
            </ul>
        </div>

    </section>
    <section id="hero" >
    <center><h2> DAFTAR LIST TIM </h2></center>
<center><table border="1" cellpadding="20" cellspacing="0"></center>
<tr>
    <th>No</th>
    <th>Nama Team</th>
    <th>Waktu Booking</th>
    <th>Pembayaran</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</section>
<?php $no = 1; ?>
<?php while ($row = mysqli_fetch_assoc($result)) :?>

<section id="table">
    <div><tr id="link">
    <td><?= $no ?></td>
    <td><?= $row["nama_Team"]; ?></td>
    <td><?= $row["waktubooking"]; ?></td>
    <td><?= $row["pembayaran"]; ?></td>
    <td><?= $row["status"]; ?></td>
    <td>
        <a href="edit.php?id=<?= $row["id"]; ?>">edit</a> |
    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
    return confirm('yakin pesanan ini di hapus?');">hapus</a>
    </td>
</tr>
</div>
</section>
<?php $no++?>
<?php endwhile ;?>
</table> 
<br>
<br>

    
</body>
</html>