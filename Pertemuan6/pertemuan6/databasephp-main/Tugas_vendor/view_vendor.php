<?php 
require_once '../dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    // select * from vendor where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM vendor a
    //INNER JOIN jenis_produk b ON a.jenis_produk_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM vendor WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute(array($_id));
    $row= $st->fetch();
    //echo 'NAMA VENDOR ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
       
        <tr>
            <td>Nama</td>
            <td><?=$row['nama']?></td>
        </tr>
        <tr>
            <td>kota</td>
            <td><?=$row['kota']?></td>
        </tr>
        <tr>
            <td>Kontak</td>
            <td><?=$row['kontak']?></td>
        </tr>
        
</tbody>
</table>
        
        
        