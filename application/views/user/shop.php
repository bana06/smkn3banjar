			<div class="col-sm-9 padding-right">
				<div class="features_items"><!--features_items-->
					<h2 class="title text-center">Produk</h2>
					<?php
						foreach($produks as $produk) :
					?>
				<div class="col-sm-4">
					<div class="product-image-wrapper">
						<div class="single-products">
								<div class="productinfo text-center">
									<img class="img" src="<?= site_url('assets/user/images/produk/') . $produk->dp_gambar ?>" width="200px" height="300px" />
									<h2>Rp <?= $produk->harga ?></h2>
									<p><?= $produk->dp_nama ?></p>
									<a class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</div>
								<div class="product-overlay">
									<div class="overlay-content">
										<h2>Rp <?= $produk->harga ?></h2>
										<p><?= $produk->dp_nama ?></p>
										<a href="<?= site_url('User/Home/insertCart/') . $produk->id_produk ?>" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
								</div>
						</div>
						<div class="choose">
							<ul class="nav nav-pills nav-justified">
								<li><a href="#" style="color: #FE980F;">PROMO</a></li>
								<li><a href="#"><i class="fa fa-info-circle"></i>DETAIL</a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
					
					<ul class="pagination">
						<li class="active"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">&raquo;</a></li>
					</ul>
				</div><!--features_items-->
			</div>
		</div>
	</div>
</section>