<div class="card-group">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title" style=" font-size: 20px; color: black; ">
				Income
				<small class="text-muted" style=" font-size: 12px; ">
				/Month
				</small>
			</h5>
			<p class="card-text" style=" color: #46db00; font-size: 30px; font-weight: bold; ">Rp. <?php echo $getIncome; ?></p>
			<p class="card-text">
				<small class="text-muted">
				<a href="/admin/report"> Show Detail</a>
				</small>
			</p>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title" style=" font-size: 20px; color: black; ">
				Product
				
			</h5>
			<p class="card-text" style=" color: #46db00; font-size: 30px; font-weight: bold; "><?php echo $getProductTotal; ?></p>
			<p class="card-text">
			<small class="text-muted">
				<a href="/admin/inventory"> Show Detail</a>
				</small>
			</p>
		</div>
	</div>
	<div class="card">
		<div class="card-body">
			<h5 class="card-title" style=" font-size: 20px; color: black; ">Operator</h5>
			<p class="card-text" style=" color: #46db00; font-size: 30px; font-weight: bold; "><?php echo $getOperatorTotal; ?></p>
			<p class="card-text">
				<small class="text-muted"></small>
			</p>
		</div>
	</div>
</div>

<div class="card-group">
<?php if($getProductHabis) { ?>
<div class="card" style="width: 18rem;max-width: 300px;height: fit-content;margin-right: 20px;border-radius: .25rem;">
  <div class="card-header" style=" margin: 0; ">
  Out of Stock
  </div>
  <ul class="list-group list-group-flush">
  	<?php $no=1; foreach($getProductHabis as $item){?>
    <li class="list-group-item"><?php echo $item->barang_nama; ?></li>
	<?php } ?>
  </ul>
</div>
<?php } ?>

<div class="card" style=" border-radius: .25rem; ">
		<div class="card-body">
			<h5 class="card-title" style=" font-size: 20px; color: black; ">Graph</h5>
			<p class="card-text" style=" color: #46db00; font-size: 30px; font-weight: bold; "><?php echo $getOperatorTotal; ?></p>
			<p class="card-text">
				<small class="text-muted"></small>
			</p>
		</div>
	</div>
</div>

<style>
a {
    text-decoration: none;
    color: #6c757d!important;
}
a:hover {
    color: #2c82ff !important;
}
</style>