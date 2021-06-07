<?php 
// print_r($getTransaksi_bycode); 
?>

<div id="info" style=" display: flex; ">
<div style=" flex: auto; ">
<span class="badge bg-primary"><?php echo "Transaction: ", $segment; ?></span>
</div>
<div>
<span class="badge bg-light text-dark"><?php print_r(@$getTransaksi_bycode->tanggal_transaksi); ?></span>
<span class="badge bg-light text-dark">
<?php print_r(@$getTransaksi_bycode->operator_transaksi); ?>
</span>
</div>
</div>

<style>
#info div {
    margin: 0;
}
</style>


<div class="card" style="padding: 20px;margin-top: 20px;">

<div>
    
<div>
<div>
    
<div>

<table class="table">
  <thead>
    <tr>
    <th scope="col">No</th>
      <th scope="col">Produk</th>
      <th scope="col">Qty</th>
      <th scope="col">Price</th>
      <th scope="col">Sub Total</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($getTransaksi_item as $Transaksi){?>
    <tr>
      <th scope="row"><?php print_r($no); $no++; ?></th>
      <td><?php print_r($Transaksi->barang_nama) ?></td>
      <td><?php print_r($Transaksi->barang_jumlah) ?></td>
      <td><?php print_r($Transaksi->barang_harga) ?></td>
      <td><?php print_r($Transaksi->barang_jumlah * $Transaksi->barang_harga) ?></td>
    </tr>
    <?php } ?>
    <tr>
    <td></td>
    <td></td>
    <td></td>
        <th>Total: </th>
        <td>
        <div>
            <?php print_r(@$getTransaksi_bycode->total_transaksi); ?>
        <div>
        </td>
    </tr>
  </tbody>
</table>



</div>


