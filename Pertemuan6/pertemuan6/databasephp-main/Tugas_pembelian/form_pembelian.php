<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM pembelian";
   $cards = $dbh->query($sql);
?>

<a class="btn btn-success" href="create_pembelian.php" role="button">Create pembelian</a>
<table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
    <thead>
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nomor</th>
            <th>Produk_id</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Vendor_id</th>
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
        <?php 
                $nomor  =1 ;
                foreach($cards as $card) {
                ?>
        <tr>
            <td><?=$nomor?></td>
            <td><?=$card['tanggal']?></td>
            <td><?=$card['nomor']?></td>
            <td><?=$card['produk_id']?></td>
            <td><?=$card['jumlah']?></td>
            <td><?=$card['harga']?></td>
            <td><?=$card['vendor_id']?></td>
            <td>
                <a class="btn btn-primary" href="view_pembelian.php?id=<?=$card['id']?>">View</a>
                <a class="btn btn-primary" href="edit_pembelian.php?id=<?=$card['id']?>">Edit</a>
                <a class="btn btn-primary" href="delete_pembelian.php?iddel=<?=$card['id']?>"
                    onclick="if(!confirm('Anda Yakin Hapus Data pembelian ?')) {return false}">Delete</a>
            </td>
        </tr>
        <?php 
                $nomor++;   
                } 
                ?>
    </tbody>
</table>