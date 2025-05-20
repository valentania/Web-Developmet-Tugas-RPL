<!DOCTYPE html>
<html">
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
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                CRUD - BS5
            </a>
        </div>
    </nav>

    <!-- Judul -->
    <div class="container-fluid">
        <h1 class="mt-4">Data Barang</h1>
        <figure>
            <blockquote class="blockquote">
                <p>Data yang telah disimpan di database.</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                CRUD <cite title="Source Title">Create Read Update Delete</cite>
            </figcaption>
        </figure>
        <a href="kelola.php" type="button" class="btn btn-primary mb-3">
            <i class="fa fa-plus"></i>
            Tambah barang 
        </a>
        <div class="table-responsive">
            <table class="table align-middle table-bordered table-hover">
                <thead>
                    <tr>
                        <th><center>Kode</center></th>
                        <th>Nama Barang</th>
                        <th>Deskripsi</th>
                        <th>harga</th>
                        <th>Jumlah</th>
                        <th>Foto</th>>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><center>001</center></td>
                        <td>Mouse Wireless</td>
                        <td>Mouse nirkabel dengan DPI 1200</td>
                        <td>Rp150.000,00</td>
                        <td>10</td>
                        <td>
                            <img src="img/Mouse.jpg" style="width: 80px">
                        </td>
                        <td>
                             <a href="kelola.php?ubah=1" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                             </a>  
                            <a href="kelola.php" type="button" class="btn btn-danger btn-sm">
                                <i class=" fa fa-trash"></i>
                            </a>   
                        </td>
                    </tr>
                        <tr>
                        <td><center>002</center></td>
                        <td>Keyboard Mechanical</td>
                        <td>Keyboard gaming mechanical dengan RGB</td>
                        <td>Rp450.000,00</td>
                        <td>10</td>
                        <td>
                            <img src="img/keyboard.jpg" style="width: 80px">
                        </td>
                        <td>
                            <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>  
                            <a type="button" class="btn btn-danger btn-sm">
                                <i class=" fa fa-trash"></i>
                            </a>   
                        </td>
                    </tr>
                        <tr>
                        <td><center>003</center></td>
                        <td>Monitor 24 Inch</td>
                        <td>Monitor LED full HD dengan ukuran 24 Inch</td>
                        <td>Rp1.200.000,00</td>
                        <td>10</td>
                        <td>
                            <img src="img/monitor.jpg" style="width: 80px">
                        </td>
                        <td>
                            <a href="kelola.php?ubah=2" type="button" class="btn btn-success btn-sm">
                                <i class="fa fa-pencil"></i>
                            </a>  
                            <a type="button" class="btn btn-danger btn-sm">
                                <i class=" fa fa-trash"></i>
                            </a>   
                        </td>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>