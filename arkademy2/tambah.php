<?php 
include('functions.php');


if(isset($_POST["nama_produk"]) ) {
    // var_dump($_POST); 
    if( tambah($_POST) > 0 ) {
      echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href = 'home.php';
        </script>
      ";
    }else{ 
        echo "
          <script>
              alert('data gagal ditambah');
              document.location.href = 'home.php';
          </script>
        ";
    }

}

include('layouts/header.php'); 
?>
<div class="container mt-4">
    <div class="form" style="width: 700px; height: 700px m-auto">
        <form method="post" action="">
            <div class="form-group">
                <label for="judul">Nama Produk</label>
                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan nama produk" name="nama_produk" required>
                </div>
            <div class="form-group">
                <label for="judul">Keterangan</label>
                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan Keterangan" name="keterangan" required>
                </div>
            <div class="form-group">
                <label for="judul">Jumlah</label>
                <input type="text" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan Judul" name="jumlah" required>
                </div>
        
            <div class="form-group">
                <label for="jmlHalaman">harga</label>
                <input required type="text" class="form-control" id="jmlHalaman" name="harga" placeholder="Jumlah Harga">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>


<?php 
include('layouts/footer.php');
?>