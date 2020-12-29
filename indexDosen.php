<html>
<head>
    <title>Data Dosen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <div class="alert alert-info"> Data Dosen</div>
    <table class="table table-bordered">
        <thead>
            <th>NIP</th>
            <th>Nama_Dosen</th>
            <th>Alamat</th>
            <th>Jenis_Kelamin</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php
            require '../koneksi.php';
            $query = "SELECT * FROM  dosen";
            $result = mysqli_query ($link, $query) ;
             while  ($isi = mysqli_fetch_object($result)) {
                 #code...
                 ?>
                <tr>
                    <td><?php echo $isi->NIP; ?></td>
                    <td><?php echo $isi->Nama_Dosen;?></td>
                    <td><?php echo $isi->Alamat; ?></td>
                    <td><?php echo $isi->Jenis_Kelamin; ?></td>
                    <td> <a href=""class= " btn btn-danger"> Delete</a>
                     <a href=""class= " btn btn-Warning"> Edit</a></td>
                    
                </tr> 
             <?php } ?>
        </tbody>
    </table>
    </div>
    
</body>
</html> 