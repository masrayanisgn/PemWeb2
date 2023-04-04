<?php 
    require_once 'dbkoneksi.php';
?>
<?php 
   $sql = "SELECT * FROM kartu";
   $rs = $dbh->query($sql);
?>

      <a class="btn btn-success" href="form_kartu.php" role="button">Create kartu</a>
        <table class="table" width="100%" border="1" cellspacing="2" cellpadding="2">
            <thead>
                <tr>
                <th>No</th>
                    <th>Kode</th>
                    <th>Nama</th>
                    <th>Diskon</th>
                    <th>iuran</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nomor  =1 ;
                foreach($cards as $card){
                ?>
                    <tr>
                    <td><?=$nomor?></td>
                        <td><?=$card['kode']?></td>
                        <td><?=$card['nama']?></td>
                        <td><?=$card['diskon']?></td>
                        <td><?=$card['iuran']?></td>
                        <td>
<a class="btn btn-primary" href="view_.php?id=<?=$row['id']?>">View</a>
<a class="btn btn-primary" href="form_.php?id=<?=$row['id']?>">Edit</a>
<a class="btn btn-primary" href="delete_.php?id=<?=$row['id']?>"
onclick="if(!confirm('Anda Yakin Hapus Data kartu <?=$row['nama']?>?')) {return false}"
>Delete</a>
</td>
                    </tr>
                <?php 
                $nomor++;   
                } 
                ?>
            </tbody>
        </table>  
