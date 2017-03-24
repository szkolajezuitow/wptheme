		<?php
		/**
		 *  The template for displaying Footer.
		 *
		 *  @package lawyeria-lite
		 */
		?>
		<footer id="footer">
			<div class="wrapper cf">
				<div class="footer-margin-left cf" style="margin-left: 10px;">
					<div style="line-height: 130%; float: left; ">
						<b>Zespół Szkół Jezuitów <br> im. św. Stanisława Kostki w Gdyni</b><br>
						ul. Tatrzańska 35 <br>
						81-313 Gdynia <br><br>
						<b>NIP:</b> 586-22-87-077 <br>
						<b>REGON:</b> 221998243   <br><br>

                        <div style="text-wrap: normal; font-size: small;">

                            Konto Zespołu Szkół Jezuitów <br>
                            88 1440 1084 0000 0000 1667 4575

                        </div>

					</div>

					<div  style="line-height: 130%; float: left; margin-left: 30px;">

                        Szkoła Podstawowa:  <a class="big" href="mailto:podstawowa@jezuici.edu.pl">podstawowa@jezuici.edu.pl</a><br>
                        Sekretariat: <a class="big" href="mailto: sekretariat@jezuici.edu.pl">sekretariat@jezuici.edu.pl</a><br>
                        Księgowość:  <a class="big" href="mailto: ksiegowosc@jezuici.edu.pl">ksiegowosc@jezuici.edu.pl</a><br>
                        Biuro PR  <a class="big" href="mailto: pr@jezuici.edu.pl">pr@jezuici.edu.pl</a><br>
                        Biuro projektów:  <a class="big" href="mailto: ksiegowosc@jezuici.edu.pl">projekty@jezuici.edu.pl</a><br>

                    <br><br> Tel: +48 58 661 61 80
                    <br>     Fax: +48 58 621 02 66

					</div>
                    <div style="float: left;">
                        <div id="map" style="left: 20px;">

                        </div>

                    </div>
				</div><!--/div .footer-margin-left .cf-->
			</div><!--/div .wrapper .cf-->
		</footer><!--/footer #footer-->

		<?php wp_footer(); ?>


        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 860501151;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/860501151/?guid=ON&amp;script=0"/>
            </div>
        </noscript>

	</body>



		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tipped.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/transit.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) { $('.tipped').each(function(){ Tipped.create(this); }); });
		</script>
        <script>
            function initMap() {
                var uluru = {lat: 54.515777, lng: 18.525386};
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 14,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map
                });
            }
        </script>
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBS9Ng2l4qL4ioSHr08WKdQ6fluyNw0THg&callback=initMap">
        </script>

  </html>
