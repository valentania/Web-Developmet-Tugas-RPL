<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!-- Bootsrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js" ></script>

    <!-- Font Awesome -->
     <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <title>rpl_tugas</title>
</head>
<body>
    <nav class="navbar bg-body-tertiary mb-4">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="proses.php">
            <div class="mb-3 row">
                <label for="Kode" class="col-sm-2 col-form-label">
                    Kode
                </label>    
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Kode" placeholder="Ex: 001 ">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Nama Barang" class="col-sm-2 col-form-label">
                    Nama barang
                </label>    
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nama Barang" placeholder="Ex: Mouse Wireless">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Deskripsi" class="col-sm-2 col-form-label">
                    Deskripsi
                </label>    
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Deskripsi" placeholder="Tuliskan Deskripsi Barang">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Harga" class="col-sm-2 col-form-label">
                    Harga
                </label>    
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Harga" placeholder="Ex: Rp150.000,00">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Jumlah" class="col-sm-2 col-form-label">
                    Jumlah
                </label>    
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Jumlah" placeholder="Ex: 10">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="Foto" class="col-sm-2 col-form-label">
                    Foto
                </label>    
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="Foto">
                </div>
            </div>
            <div class="mb-3 row mt-4">
                <div class="col">
                    <?php
                        if(isset($_GET['ubah'])){
                    ?>
                        <button type="submit" name="aksi" value="edit" class="btn btn-primary">
                            Simpan Perubahan
                        </button>
                    <?php
                        } else {
                    ?>
                        <button type="submit" name="aksi" value="eadddit" class="btn btn-primary">
                            Tambahkan
                        </button>
                    <?php
                        }
                    ?>
                    <a href="index.php" type="button" class="btn btn-danger">
                        Batal
                    </a>
                </div>
        </form>
    </div>
</body>
</html>