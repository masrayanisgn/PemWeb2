<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM Vendor WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>
            
<form method="POST" action="proses_vendor.php">
  <div class="form-group row mt-2">
    <label for="kode" class="col-4 col-form-label">Nama</label> 
    <div class="col-8">
      <div class="input-group">
       
        </div> 
        <input id="nama" name="nama" type="text" class="form-control"
        value="<?= $card['nama']?>">
      </div>
    </div>
  </div>
  <div class="form-group row mt-2">
    <label for="nama" class="col-4 col-form-label">kota</label> 
    <div class="col-8"> 
      <div class="input-group">
      
        </div> 
        <input id="kota" name="kota" type="text" class="form-control" 
        value="<?= $card['kota']?>">
      </div>
    </div>
  </div>
  
  <div class="form-group row mt-2">
    <label for="stok" class="col-4 col-form-label">Kontak</label> 
    <div class="col-8">
      <div class="input-group">
        
        </div> 
        <input id="kontak" name="kontak" value="<?= $card['kontak']?>"
        type="text" class="form-control">
      </div>
    </div>
  </div>

   
 
  <input type="hidden" value="<?= $card['id']?>" name="id" >

 
  <div class="form-group row mt-2">
    <div class="offset-4 col-8">
      <input type="submit" name="proses_vendor" type="submit" 
      class="btn btn-primary" value="Update"/>
    </div>
  </div>
</form>
