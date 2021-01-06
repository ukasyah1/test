<?php 
include('functions.php');
$data = getData($_GET['id']);

if(isset($_POST["nama_produk"]) ) {
    // var_dump($_POST); 
    if( ubah($_POST) > 0 ) {
      echo "
        <script>
            alert('data berhasil diubah');
            document.location.href = 'home.php';
        </script>
      ";
    }else{ 
        echo "
          <script>
              alert('data gagal diubah');
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
            <input type="hidden" value="<?= $data[0]['id_produk']?>" name="id">
            <div class="form-group">
                <label for="judul">Nama Produk</label>
                <input type="text" value="<?= $data[0]['nama_produk'] ?>" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan nama produk" name="nama_produk" required>
                </div>
            <div class="form-group">
                <label for="judul">Keterangan</label>
                <input type="text" value="<?= $data[0]['keterangan'] ?>" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan Keterangan" name="keterangan" required>
                </div>
            <div class="form-group">
                <label for="judul">Jumlah</label>
                <input type="text" value="<?= $data[0]['jumlah'] ?>" class="form-control" id="judul" aria-describedby="emailHelp" placeholder="Masukan Judul" name="jumlah" required>
                </div>
        
            <div class="form-group">
                <label for="jmlHalaman">harga</label>
                <input required type="text" value="<?= $data[0]['harga'] ?>" class="form-control" id="jmlHalaman" name="harga" placeholder="Jumlah Harga">
            </div>
            <button type="submit" class="btn btn-primary">Ubah</button>
        </form>
    </div>
</div>


<?php 
include('layouts/footer.php');
?>