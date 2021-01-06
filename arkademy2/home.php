<?php 
include('functions.php');

$data = getAll();

include('layouts/header.php'); 

// var_dump($_POST);
?>

<div class="container" style="margin-top: 30px;">

  <a href="tambah.php">
    <button type="button" class="btn btn-primary">
        Tambah Produk Baru
    </button>
  </a>

    <div class="row mt-3">

      
      <?php foreach($data as $produk) : ?>
        <div class="col-sm mb-3">
              <div class="card bg-dark text-white" style="width: 18rem;" >
                  <div class="card-body">
                      <h5 class="card-title"> <?= $produk['nama_produk']?></h5>
                      <p class="card-text"> 
                        Keterangan : <?= $produk['keterangan']; ?> <br>
                        Jumlah : <?= $produk['jumlah']; ?>
                      </p>
                      <p class="card-text">
                        Harga : <?= $produk['harga']; ?>
                      </p>
                      <a href="hapus.php?id=<?= $produk['id_produk']; ?>" onclick="return confirm('yakin?');">
                        <button type="button" class="btn btn-danger btn-sm">
                            Hapus
                        </button>
                      </a>
                      <a href="ubah.php?id=<?= $produk['id_produk']; ?>">
                        <button type="button" class="btn btn-warning btn-sm">
                            Edit
                        </button>
                      </a>
                  </div>
              </div>
        </div>
      <?php endforeach; ?>
        

    </div>

</div>





<?php include('layouts/footer.php'); ?>
