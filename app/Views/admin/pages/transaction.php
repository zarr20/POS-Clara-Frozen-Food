<div class="card" style=" margin-bottom: 20px; ">
	<div class="card-header">Add Item</div>
	<div class="card-body">
		<div class="row g-3 align-items-center">
			<div class="col-auto">
				<label for="inputPassword6" class="col-form-label">Item Code</label>
			</div>
			<div class="col-auto">
				<input type="text" id="inputItem" class="form-control"></div>
			<div class="col-auto">
				<label for="inputPassword6" class="col-form-label">Qty</label>
			</div>
			<div class="col-auto">
				<input type="number" id="inputQty" class="form-control"></div>
			<div class="col-auto">
				<a href="#" onclick="myFunction()" style="background-color: #03DA73;color: white;text-decoration: none;padding: 8px 13px;border-radius: 5px;align-self: center;align-content: center;"><img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;">Add</a>
			</div>
			<script>
      const check_barang = (query) => {
        $.ajax({
        url:"<?php echo base_url('admin/check_product'); ?>",
        method:"POST",
        data:{query:query},
        dataType: "json",
        success:function(data){
          nmBrg = data[0].barang_nama;
          hrgBrg = data[0].harga;
          if(data.length !== 10){
          let obj = checkout.find(o => o.code === document.getElementById("inputItem").value);
          if(obj == undefined ) {
              checkout.push(
                { 
                code:document.getElementById("inputItem").value, 
                namabrg:nmBrg,
                hargabrg:hrgBrg,
                qty:document.getElementById("inputQty").value
                },
              );
          }   
          let obj_index = checkout.findIndex(o => o.code === document.getElementById("inputItem").value);
          checkout[obj_index].qty = parseInt(document.getElementById("inputQty").value); 
          tabel_cetak();
          }
        }
        });
      }
      var checkout = [];
      function tabel_cetak(){
        //buat array lagi buat nanti proses transaksi
        var total = 0;
          var cetak = "";
          var i = 0;
          while (i < checkout.length) {
            total = total + (checkout[i].hargabrg * checkout[i].qty);
            cetak = cetak + (
            "<tr>" +
            "<td style='width: 10.66%'><a onclick='deleteItem("+i+")' style='align-self: center;align-content: center;'><img style='/* margin-top: -4; */height: 23px;' src='/assets/delete-icon.svg' ></a></td>" +
            "<td>" +  checkout[i].namabrg  + "</td>"+
            "<td><input type='number' class='form-control' value='" + checkout[i].qty  + "' style=' width: 100px; '></td>"+
            "<td>Rp. " +  checkout[i].hargabrg  + "</td>"+
            "<td>Rp. " +  (checkout[i].hargabrg * checkout[i].qty) + "</td>"+
            "</tr>"
            );
            i++;
          }
          cetak = cetak + (
            "<tr>"+
            "<td></td>"+
            "<td></td>"+
            "<td></td>"+
            "<th>Total</th>"+
            "<td>Rp. " +  total + "</td>"+
            "</tr>"
          )
          document.getElementById("result").innerHTML = cetak;
          document.getElementById("test").value = JSON.stringify(checkout);
      }
      function deleteItem(index){
        checkout.splice(index, 1);
        tabel_cetak();
      }
      function myFunction() {
        if(!document.getElementById("inputItem").value == "" && document.getElementById("inputQty").value > 0){
          check_barang(parseInt(document.getElementById("inputItem").value));
        }else{
            alert("INPUT_ERROR: Please enter value(s)")
          }
      }
			</script>
		</div>
	</div>
</div>

<div class="card" style=" margin-bottom: 20px; ">
	<div class="card-header">Checkout</div>
	<div class="card-body">
		<table class="table">
		<thead>
		<tr>
			<th scope="col" style="width: 10.66%"></th>
			<th scope="col">Product</th>
			<th scope="col" style="width: 10.66%">Qty</th>
			<th scope="col" style="width: 10.66%">Price</th>
			<th scope="col" style="width: 10.66%">Sub Total</th>
		</tr>
		</thead>
		<tbody id="result">
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<th>Total</th>
			<td>Rp. 0</td>
		</tr>
		</tbody>
		</table>
	</div>
</div>

<form action="/admin/transaction/process" method="post">
  <div>
      <input type="text" name="test2" id="test2" value="<?php echo $nama_pengguna_; ?> as <?php echo $akses_pengguna_; ?>">
      <input type="text" name="test" id="test">
      <button type="submit" style="
        background-color: #03DA73;
        color: white;
        text-decoration: none;
        padding: 8px 13px;
        border-radius: 5px;
        align-self: center;
        align-content: center;
        border: none;
        ">
      <!-- <img src="/assets/plus-icon.svg" style="margin-right: 9px;margin-top: -4;"> -->
      Process Payment
    </button>
  </div>
</form>

<style>
  .wrapper .main_content .info div {
      margin-bottom: 0px;
  }
  tr {
      vertical-align: middle;
  }
</style>