<?php 
// print_r($getInventory); 
?>



<a href="#" style="background-color: #03DA73;color: white;text-decoration: none;padding: 8px 13px;border-radius: 5px;align-self: center;align-content: center;">
<img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
Add Item
</a>

<div class="card" style="padding: 20px;margin-top: 20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Product</th>
      <th scope="col">Stock</th>
      <th scope="col">Price</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php $no=1; foreach($getInventory as $Inventory){?>
        <tr>
            <th scope="row"><?php print_r($no); $no++; ?></th>
            <td><?php print_r($Inventory->barang_nama) ?></td>
            <td><?php print_r($Inventory->stok) ?></td>
            <td>Rp. <?php print_r($Inventory->harga) ?></td>
            <td style="text-align:right">
                <a href="#" 
                style="background-color: #03DA73;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
                <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
                Edit
                </a>
                <a href="#" 
                style="background-color: #da0348;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
                <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
                Delete
                </a>
            </td>
        </tr>
    <?php } ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Nugget A</td>
      <td>10</td>
      <td>Rp. 20.000</td>
      <td style="text-align:right">
        <a href="#" style="background-color: #03DA73;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Edit
        </a>
        <a href="#" style="background-color: #da0348;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
        <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
        Delete
        </a>
      </td>
    </tr> -->
  </tbody>
</table>
</div>