<?php
$conn = mysqli_connect("localhost", "root", "", "arkademy");


function tambah($data){
    global $conn;
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = intval(htmlspecialchars($data['harga']));
    $jumlah = intval(htmlspecialchars($data['jumlah']));

    $query = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah)
                VALUES 
                ('$nama_produk', '$keterangan', '$harga', '$jumlah')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function getAll() {
    global $conn;
    $query = "SELECT * 
    FROM produk
    ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id ");
    return mysqli_affected_rows($conn);
}

function getData($id){
    global $conn;
    $query = "SELECT * 
    FROM produk WHERE id_produk = $id
    ";
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function ubah($data){
    global $conn;
    $id = $data['id'];
    $nama_produk = htmlspecialchars($data['nama_produk']);
    $keterangan = htmlspecialchars($data['keterangan']);
    $harga = intval(htmlspecialchars($data['harga']));
    $jumlah = intval(htmlspecialchars($data['jumlah']));

    $query = "UPDATE produk SET 
                nama_produk = '$nama_produk',
                keterangan = '$keterangan',
                harga = '$harga',
                jumlah = '$jumlah'
            WHERE id_produk = $id
                ";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>