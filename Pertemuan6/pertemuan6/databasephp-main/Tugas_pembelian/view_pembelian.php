<?php 
require_once '../dbkoneksi.php';
?>

<?php
    $_id = $_GET['id'];
    // select * from pembelian where id = $_id;
    //$sql = "SELECT a.*,b.nama as jenis FROM pembelian a
    //INNER JOIN jenis_pembelin b ON a.jenis_pembelian_id=b.id WHERE a.id=?";
    $sql = "SELECT * FROM pembelian WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute(array($_id));
    $row = $st->fetch();

    //echo 'NAMA PEMBELIAN ' . $row['nama'];
?>

<table class="table table-striped">
    <tbody>
        <tr>
            <td>Tanggal</td>
            <td><?=$row['tanggal']?></td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td><?=$row['nomor']?></td>
        </tr>
        <tr>
            <td>Produk_id</td>
            <td><?=$row['produk_id']?></td>
        </tr>
        <tr>
            <td>Jumlah</td>
            <td><?=$row['jumlah']?></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><?=$row['harga']?></td>
        </tr>
        <tr>
            <td>vendor_id</td>
            <td><?=$row['vendor_id']?></td>
        </tr>
       
</tbody>
</table>
        
        
        