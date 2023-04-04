<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

<?php 
    require_once '../dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM vendor";
   $cards = $dbh->query($sql);
?>

      <a class="btn btn-success" href="create_vendor.php" role="button">Create Vendor</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>kota</th>
                    <th>Kontak</th>
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
                        <td><?=$card['nama']?></td>
                        <td><?=$card['kota']?></td>
                        <td><?=$card['kontak']?></td>
                        <td>
                            
<a class="btn btn-primary" href="view_vendor.php?id=<?=$card['id']?>">View</a>
<a class="btn btn-primary" href="edit_vendor.php?id=<?=$card['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_vendor.php?iddel=<?=$card['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data Produk <?=$card['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
