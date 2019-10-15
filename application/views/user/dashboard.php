
		
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
								<li><a href="<?= site_url('User/DetailProduk/index/') . $produk->dp_id ?>"><i class="fa fa-info-circle"></i>DETAIL</a></li>
							</ul>
						</div>
					</div>
				</div>
				<?php endforeach; ?>
				
			</div><!--features_items-->
			
			<div class="recommended_items"><!--recommended_items-->
				<h2 class="title text-center">recommended items</h2>
				
				<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner">
						<div class="item active">	
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
						<div class="item">	
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend1.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend2.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
							<div class="col-sm-4">
								<div class="product-image-wrapper">
									<div class="single-products">
										<div class="productinfo text-center">
											<img src="<?= site_url('') ?>assets/user/images/home/recommend3.jpg" alt="" />
											<h2>$56</h2>
											<p>Easy Polo Black Edition</p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					  </a>
					  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					  </a>			
				</div>
			</div><!--/recommended_items-->
			
		</div>
	</div>
</div>
</section>
