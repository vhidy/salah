<div class="BigContent">
	<div class="RightContent">
		<h1 class="Judul">Shopping Cart</h1>
		<div class="KetProd">
			<table class="TableCart" width="100%" cellspacing="0" cellpadding="0" border="0" style="border-top: 1px dotted #0; border-bottom: 1px dotted #0;">
				<tr><th>No</th>
					<th>Foto Produk</th>
					<th>Nama Produk</th>
					<th>Jumlah</th>
					<th>Harga</th>
					<th>Delete</th>
				</th>
			<?php
				$sid = session_id();
				$no = 1;
				$sql = mysql_query("SELECT * FROM keranjang, product WHERE id_session='$sid' AND keranjang.id_product=product.id");
				$hitung = mysql_num_rows($sql);
				if ($hitung < 1){
					echo"<script>window.alert('Cart is Empty....');
							window.location=('index.php')</script>";
					}
				else {
					while($tian=mysql_fetch_array($sql)){
						echo"<tr><td>$no</td>
							<td><img width=50 src=foto/$tian[image]></td>
							<td>$tian[product_name]</td>
							<td>$tian[qty]</td>
							<td>$tian[price]</td>
							<td><a href=input.php?input=delete&id=$tian[id_keranjang]>Hapus</a></td></tr>";
				$no++;
					}
				}
			?>
			</table>
			<a class="tombol" href="?v=order">Selesai</a>
			<a class="tombol" href="index.php">Belanja Lagi..</a>
		</div>