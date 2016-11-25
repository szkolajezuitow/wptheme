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
						<b>Szkoła Jezuitów</b><br>
						ul. Tatrzańska 35 <br>
						81-313 Gdynia <br><br>
						<b>NIP:</b> 586-22-87-077 <br>
						<b>REGON:</b> 221998243   <br>

					</div>

					<div  style="float: left;">

					</div>
				</div><!--/div .footer-margin-left .cf-->
			</div><!--/div .wrapper .cf-->
		</footer><!--/footer #footer-->
		<?php wp_footer(); ?>
	</body>

		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/tipped.js"></script>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/transit.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) { $('.tipped').each(function(){ Tipped.create(this); }); });
		</script>
</html>
