<?php 
require_once '../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT * FROM pembelian WHERE id = ?";

$st = $dbh->prepare($sql);
$st->execute([$_id]);

$card = $st->fetch();
?>

<form method="POST" action="proses_pembelian.php">
    <div class="form-group row mt-2">
        <label for="tanggal" class="col-4 col-form-label">Tanggal</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="tanggal" name="tanggal" type="date" class="form-control" value="<?= $card['tanggal']?>">
        </div>
    </div>
    </div>
    <div class="form-group row mt-2">
        <label for="nomor" class="col-4 col-form-label">Nomor</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="nomor" name="nomor" type="text" class="form-control" value="<?= $card['nomor']?>">
        </div>
    </div>
    </div>

    <div class="form-group row mt-2">
        <label for="produk_id" class="col-4 col-form-label">Produk_id</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="produk_id" name="produk_id" value="<?= $card['produk_id']?>" type="number" class="form-control">
        </div>
    </div>
    </div>




    <div class="form-group row mt-2">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="jumlah" name="jumlah" value="<?= $card['jumlah']?>" type="number" class="form-control">
        </div>
    </div>
    </div>


    <div class="form-group row mt-2">
        <label for="harga" class="col-4 col-form-label">Harga</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="harga" name="harga" value="<?= $card['harga']?>" type="number" class="form-control">
        </div>
    </div>
    </div>

    <div class="form-group row mt-2">
        <label for="vendor_id" class="col-4 col-form-label">Vendor_id</label>
        <div class="col-8">
            <div class="input-group">

            </div>
            <input id="vendor_id" name="vendor_id" value="<?= $card['vendor_id']?>" type="number" class="form-control">
        </div>
    </div>
    </div>

    <input type="hidden" value="<?= $card['id']?>" name="id">


    <div class="form-group row mt-2">
        <div class="offset-4 col-8">
            <input type="submit" name="proses" type="submit" class="btn btn-primary" value="Update" />
        </div>
    </div>
</form>