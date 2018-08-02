<div class="BigContent">
<div class="RightContent">
<h1 class="Judul">Produk terbaru</h1>
<?php
	$sql = mysql_query("SELECT * FROM product ORDER BY id DESC") or die ("Query gagal dengan error: ".mysql_error());
	while($data=mysql_fetch_array($sql)){ ?>
<div class="produk">
	<a href="?v=produk&id=<?php echo $data['id']; ?>">
		<img title="<?php echo $data['product_name']; ?>" class="FotoProduk" src="foto/<?php echo $data['image']; ?>" height="110px" />
	</a>
	<br class="clearfloat" />
	<div class="KotakKet">
	<a class="pesanprod" href="input.php?input=add&id=<?php echo $data['id']; ?>">Pesan</a>
	<a class="detprod" href="product.php?id=<?php echo $data['id']; ?>">Detail</a>
	</div>
</div>
<?php } ?>