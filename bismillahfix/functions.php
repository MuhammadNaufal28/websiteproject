<?php
// untuk koneksi
$servername = "localhost";
$database = "bismillahjadi";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

function kueri($kueri) {
    global $conn;
    $result = mysqli_query($conn, $kueri);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
        
    }
    return $row;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM futsal_database WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM futsal_database
              WHERE
              nama_Team LIKE '%keyword%' OR
              waktubooking LIKE '%keyword%' OR
              pembayaran LIKE '%keyword%' OR
              status LIKE '%keyword%'
              
              
              
              ";
}




?>
