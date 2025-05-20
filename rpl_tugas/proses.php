<?php
    if(isset($_POST['aksi'])){
        if($_POST['aksi'] == "add"){
            echo "Tambah Barang <a href='index.php'>[Home}</a>";
        } else if($_POST['aksi'] == "edit"){
            echo "Edit Barang <a href='index.php'>[Home}</a>";
        }
    }
?>