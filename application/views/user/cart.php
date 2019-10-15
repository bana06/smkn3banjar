<section id="cart_items">
	<div class="container">
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Shopping Cart</li>
			</ol>
		</div>
		<div class="table-responsive cart_info">
			<table class="table table-condensed">
				<thead>
					<tr class="cart_menu">
						<td class="image">Items</td>
						<td class="description"></td>
						<td class="price">Harga</td>
						<td class="quantity">Jumlah</td>
						<td class="total">Total</td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach($carts as $cart): ?>
					<tr>
						<td class="cart_product">
							<a href=""><img class="img" src="<?= site_url('assets/user/images/produk/') . $cart->dp_gambar ?>" width="150px" height="150" /></a>
						</td>
						<td class="cart_description">
							<h4><a href=""><b><label for=""><?= $cart->dp_nama ?></label></b></a></h4>
							<p>Size: <?= $cart->dp_size ?></p>
						</td>
						<td class="cart_price">
							<p>Rp <?= $cart->harga ?></p>
						</td>
						<td class="cart_quantity">
							<div class="cart_quantity_button">
								<!-- <a class="cart_quantity_up"> + </a> -->
								<input class="cart_quantity_input" type="text" name="jumlah" value="<?= $cart->jumlah ?>" autocomplete="off" size="2">
								<!-- <a class="cart_quantity_down"> - </a> -->
							</div>
						</td>
						<td class="cart_total">
							<p class="cart_total_price">
								<?php 
									if ($cart->total) {
										echo "Rp " . $cart->total;
									} else {
										echo 'Rp -';
									}
								?>
							</p>
						</td>
						<td class="cart_delete">
							<a class="cart_quantity_delete" href="<?= site_url('User/Cart/deleteCart/') . $cart->id_cart ?>"><i class="fa fa-times"></i></a>
						</td>
					</tr>
					<?php endforeach; ?>
					
				</tbody>
			</table>
		</div>
	</div>
</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>Apa yang kamu lakukan selanjutnya</h3>
			<!-- <p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p> -->
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="total_area">
					<ul>
						<li>Cart Sub Total <span>
							<?php //if ?>
						</span></li>
						<li>Ongkos Kirim <span>Free</span></li>
						<li>Total <span>$61</span></li>
					</ul>
						<a class="btn btn-default update" href="">Update</a>
						<a class="btn btn-default check_out" href="">Check Out</a>
				</div>
			</div>
		</div>
	</div>
</section><!--/#do_action-->