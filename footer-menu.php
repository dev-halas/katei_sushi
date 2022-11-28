</body>
<footer>
	<div class="footerContent">
		<div class="container">
			<div class="row">
				<div class="col-3">
					<img src="<?php echo THEME_URL ?>_dev/img/logo-katei.png" alt="" class="footerLogo">
				</div>
				<div class="col-5">
					<h3 class="footerContent__title">Dane kontatowe</h3>
					<p>
						<br/>
						62-040 Puszczykowo, ul. Rynek 11<br/>
						<br/>
						tel. 61 670 61 74<br/>
						kom. 602 718 170<br/>
						<br/>
						e-mail: info@katei.pl
					</p>
				</div>
				<div class="col-4 footerMenu">
					<h3 class="footerContent__title">Menu</h3>
					<ul>
						<?php wp_nav_menu(array(
							'theme_location' => 'footer'
							));
						?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footerCopyright">
		© 2012–2020 SUSHI KATEI - Wszelkie prawa zastrzeżone
	</div>
</footer>

    
<!-- Javascript-->
<script defer src="https://unpkg.com/swiper/swiper-bundle.min.js "></script>
<script defer src="<?php echo THEME_URL ?>_dev/js/menu.js"></script>
<script defer src="<?php echo THEME_URL ?>public/bundle.js"></script>


