<?php
	$this->load->view('main/header');
	
?>
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<center><h3>Biodata</h3></center>
								<figure class="figure-img">
									<img class="img-responsive" src="<?php echo base_url()?>aset/img/alvin.jpg" alt="" width="360px" height="200px">
									<figcaption>It's Me</figcaption>
								</figure>
								<p> Nama : Muhammad Renaldy Alvianto<br>
									Tempat, Tgl lahir : Jakarta, 07 - Desember - 1998<br>
									Alamat : Jl. melur IV blok f/no.1 , rawabadak utara, jakarta utara, DKI Jakarta<br>
									No. HP : 081213083963<br>
									Hobi : Touring, ngegym, makan<br>
									Agama : Islam<br>
									Email : m.renaldy.alvianto@gmail.com<br>
									Instagram : @renaldyalvin<br><br><br>
									Riwayat sekolah : <br>
									SD : SDN 05 Pagi Jakarta Timur (1-4)<br>
									&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp	 SDN 02 Pagi Jakarta Utara (5-6)<br>
									SMP : SMPN 95 Jakarta<br>
									SMA : SMAN 13 Jakarta<br><br><br>
									  </p>
								<center><h3>Togean</h3></center>
								<figure class="figure-img">
									<img class="img-responsive" src="<?php echo base_url()?>aset/img/togean.jpg" alt="">
									<figcaption>Togean</figcaption>
								</figure>
								<p>Tempat yang paling senang saat saya kunjungi, saat saya berlibur ke palu lima bulan yang lalu. Di sana saya mengunjungi sebuah pantai yang sangat indah, dan sangat bersih yang berada di pulau Togean. Di togean air lautnya sangatlah jernih, ditambah pasir putihnya halus dan bersih. Tidak terlalu banyak orang, hanya beberapa pengunjung saja yang berasal dari luar negri dan dalam negeri. orang-orang yang melayani saya saat berada di pantai togean sangatlah baik dan membuat kita merasa nyaman saat berada di pulau togean. Selain merasakan indahnya permandangan di pulau togean, dan jernihnya air laut, aku juga mengunjungi pulau-pulau yang ada disekitaran pulau togean, dan yang paling indah lagi, kita bisa melihat sunset yang begitu indah.</p>
							</div>
							<div class="post-shares sticky-shares">
								<a href="https://www.instagram.com/renaldyalvin/" class="share-instagram"><i class="fa fa-instagram"></i></a>
								<a href="https://twitter.com/mrenaldyalvin" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="https://www.google.co.id/search?safe=strict&ei=pEhNXKKiEYfmvgTRxbOgCA&q=togean&oq=togean&gs_l=psy-ab.1.0.35i39j0l7j0i203l2.1711.4857..6630...0.0..0.748.1512.1j3j1j6-1......0....1..gws-wiz.......0i71j0i67j0i131.17FVQ9v0cKc" class="share-google"><i class="fa fa-google"></i></a>
							</div>
						</div>

						<!-- comments -->
						<div class="section-row">
							<div class="section-title">
								<h2>Comments</h2>
							</div>
								<form class="col-md-12" action="<?php echo base_url()?>index.php/con_tugas/komen" method="POST">
									<div class="col-md-12">
										<div class="form-group">
											<input class="input" name="komen" placeholder="Comments">
										</div>
										
								</form>
										<div class="section-row">
											<div class="section-title">
												<h2>View Comments</h2>
												<h4>"<?php if(isset($komentar)) echo $komentar;?>"</h4>
											
							</div>
							</div>
							<input class="primary-button" type="submit" name="submit">
									</div>
								</div>
							</form>
						</div>
								</div>
							</form>
						</div>
						<!-- /reply -->
					</div>

					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->
		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
