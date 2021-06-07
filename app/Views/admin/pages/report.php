<?php 
// print_r($getTransaksi); 
?>

<div class="card" style="padding: 20px;margin-top: 20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Date</th>
      <th scope="col">Operator</th>
      <th scope="col">Total</th>
      <th scope="col">Transaction Code</th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($getTransaksi as $Transaksi){?>
    <tr>
      <th scope="row"><?php print_r($no); $no++; ?></th>
      <td><?php print_r($Transaksi->tanggal_transaksi) ?></td>
      <td><?php print_r($Transaksi->operator_transaksi) ?></td>
      <td><?php print_r($Transaksi->total_transaksi) ?></td>
      <td>
        <div><?php print_r($Transaksi->transaksi_kode) ?></div>
        <div>
          <a 
          href="/admin/report/<?php print_r($Transaksi->transaksi_kode) ?>" 
          style="
              text-decoration: none;
              font-size: 13;
          "
          >See Detail</a>
        </div>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>


