<?php

    if(isset($_POST['tambah'])){
        include_once 'Connection.php';
        $id             = $_POST['id'];
        $nama           = $_POST['nama'];
        $jenis_kelamin  = $_POST['jenis_kelamin'];
        $alamat         = $_POST['alamat'];

        $input          = mysqli_query($connection, "insert into all_user values ('$id', '$nama', '$jenis_kelamin', '$alamat')");

        if($input)
        {
            echo "<h3>Data Berhasil Ditambahkan</h3>";
            echo "<script>window.location= 'CRUD.php'</script>";
        }
        else
        {
            echo "Gagal menambahkan data";
            echo "<a href = 'Tambah.php'></a>";
        }
    }
    
    else
    {
        echo "<script>window.history.back()</script>";
    }

?>