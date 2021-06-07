<?php 
// print_r($getInventory); 
?>



<a data-toggle="modal" data-target="#exampleModal" href="#" style="background-color: #5e5e5e;color: white;text-decoration: none;padding: 8px 13px;border-radius: 5px;align-self: center;align-content: center;">
<img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
Add Item
</a>

<!-- Modal Add Inventory -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        Add Item
        <a class="close" data-dismiss="modal" aria-label="Close" href="#" style="align-self: center;align-content: center;">
        <img src="/assets/delete-icon-black.svg" style="/* margin-top: -4; */height: 23px;">
        </a>
      </div>
      <div class="modal-body">
        
      <form action="/admin/inventory-add" method="post">
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Item code</label>
        <input type="text" class="form-control" name="brgCode" placeholder="KD00125555">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Product Name</label>
        <input type="text" class="form-control" name="brgName" placeholder="Chicken Wing 500gr">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Stock</label>
        <input type="text" class="form-control" name="brgStock" placeholder="0">
      </div>
      <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Price</label>
        <input type="text" class="form-control" name="brgPrice" placeholder="0">
      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add Item</button>
      </div>
      </form>

    </div>
  </div>
</div>

<div class="card" style="padding: 20px;margin-top: 20px;">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Code</th>
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
            <th scope="col"><?php print_r($Inventory->barang_kode) ?></th>
            <td><?php print_r($Inventory->barang_nama) ?></td>
            <td><?php print_r($Inventory->stok) ?></td>
            <td>Rp. <?php print_r($Inventory->harga) ?></td>
            <td style="text-align:right">
                <a href="#" 
                style="background-color: #03DA73;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
                <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">
                Edit
                </a>
                <a href="/admin/inventory-delete/<?php print_r($Inventory->barang_kode) ?>" 
                style="background-color: #da0348;color: white;text-decoration: none;padding: 4px 13px;margin: 2px;border-radius: 5px;align-self: center;align-content: center;">
                <img src="/assets/trash-icon.svg" style="margin-right: 9px;margin-top: -4;">
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


