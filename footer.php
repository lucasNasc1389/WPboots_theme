<div class="footer">
	<div class="container">
		<div class="row">
			
			<div class="col-md-4 col-lg-4">
				<?php 
					$args = array('post_type'=>'page', 'pagename'=>'sobre');
					$my_sobre = get_posts( $args );
					if($my_sobre) : foreach($my_sobre as $post) : setup_postdata( $post );
		 		?>

		 			<?php the_excerpt();?>

		 		<?php
		    		endforeach;
		    		endif;
	     		?>
			</div>

			<?php if ( !function_exists('dynamic_sidebar')
		    	|| !dynamic_sidebar('Sidebar footer')): ?>
			<?php endif; ?>

			<div class="col-md-4 col-lg-4">
				<?php echo FrmFormsController::get_form_shortcode(array('id' => 2, 'key' => '', 'title' => false, 'description' => false, 'readonly' => false, 'entry_id' => false)); ?>
				<ul class="networks">
					<li class="facebook">
						<a href="#"><i class="fa fa-2x fa-facebook-official"></i></a>
					</li>
					<li class="twitter">
					<a href=""><i class="fa fa-2x fa-twitter-square"></i></a>
					</li>
					<li class="instagram"><a href=""><i class="fa fa-2x fa-instagram"></i></a></li>
					<li class="youtube"><a href=""><i class="fa fa-2x fa-youtube-play"></i></a></li>
					<li class="googlePlus"><a href=""><i class="fa fa-2x fa-google-plus-square"></i></a></li>
				</ul>

			</div>

		</div>
	</div>
</div>

<?php wp_footer(); ?>
</body>
</html>