<?php
$id = get_the_ID();
$chosen_sidebar = get_post_meta(get_the_ID(), "qode_show-sidebar", true);
$default_array = array('default', '');
if(!in_array($chosen_sidebar, $default_array)){
	$sidebar = get_post_meta(get_the_ID(), "qode_show-sidebar", true); }else{	$sidebar = $qode_options['blog_single_sidebar']; }

$blog_single_hide_comments = "";
if (isset($qode_options['blog_single_hide_comments']))	$blog_single_hide_comments = $qode_options['blog_single_hide_comments'];

if(get_post_meta($id, "qode_page_background_color", true) != ""){
	$background_color = get_post_meta($id, "qode_page_background_color", true); }else{	$background_color = ""; }

$content_style = "";
if(get_post_meta($id, "qode_content-top-padding", true) != ""){
	if(get_post_meta($id, "qode_content-top-padding-mobile", true) == "yes"){
		$content_style = "style='padding-top:".get_post_meta($id, "qode_content-top-padding", true)."px !important'";	}else{		$content_style = "style='padding-top:".get_post_meta($id, "qode_content-top-padding", true)."px'";	}   }


// $PhotoEssayType='1';
$HeroImage=get_the_post_thumbnail_url( $id, 'full' ); 
$HeroCaption=get_field('featured_image_caption'); 
$longFormTitle="<div class=\"longFormTitle\">".get_the_title()."</div>";

  $cat = get_the_category();
$html .= '';
$html .= '<div class="peLongcats" >';  foreach ($cat as $categ) { $html .= '' . $categ->cat_name . '  ';	}$html .= '</div>  <!-- // peshortcats -->'; //close 
		
$longFormCat="<div class=\"longFormCat\">".$html."</div>"; 
$essayType=get_field('essay_type'); 


get_header(); ?>



<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
				<?php if(get_post_meta($id, "qode_page_scroll_amount_for_sticky", true)) { ?>
					<script>
					var page_scroll_amount_for_sticky = <?php echo get_post_meta($id, "qode_page_scroll_amount_for_sticky", true); ?>;
					</script>
				<?php } ?>
					<?php get_template_part( 'title' ); ?>
				<?php	$revslider = get_post_meta($id, "qode_revolution-slider", true);
				if (!empty($revslider)){ ?>
					<div class="q_slider"><div class="q_slider_inner">
					<?php echo do_shortcode($revslider); ?>
					</div></div>
				<?php	}	?>
				<div class="container"<?php if($background_color != "") { echo " style='background-color:". $background_color ."'";} ?>>
					<div class="container_inner default_template_holder" <?php if($content_style != "") { echo $content_style; } ?>>
				
					<?php if(($sidebar == "default")||($sidebar == "")) : ?>
						<div class="blog_holder blog_single">
			
	<!---    Get the single photo essay post   ------------------------------------------------- --> 
<!---    Get the author from the essay post    ------------------------------------------------- --> 
<!---       ------------------------------------------------- --> 
<!---       ------------------------------------------------- --> 

						<!--  MAIN Content ----------------------------------------   -->
						<!--  MAIN Content ----------------------------------------   -->
						
						
						
						
<?php if($essayType == 'short_form'){   include 'peshortcontainer.php';} ?> 
<?php if($essayType == 'long_form'){   include 'pelongcontainer.php';} ?> 



						

						
						
						
						
						
						
						
						
						<?php 	// get_template_part('templates/blog/blog_single', 'loop');	?>
						<!--  MAIN Content ----------------------------------------   -->
						<!--  MAIN Content ----------------------------------------   -->


						<?php elseif($sidebar == "1" || $sidebar == "2"): ?>
						<?php if($sidebar == "1") : ?>	
							<div class="two_columns_66_33 background_color_sidebar grid2 clearfix">
							<div class="column1">
						<?php elseif($sidebar == "2") : ?>	
							<div class="two_columns_75_25 background_color_sidebar grid2 clearfix">
								<div class="column1">
						<?php endif; ?>
									<div class="column_inner">
										<div class="blog_holder blog_single">	
											<?php 		get_template_part('templates/blog/blog_single', 'loop');	?>
										</div>
										
										<?php		if($blog_single_hide_comments != "yes"){		comments_template('', true); 			}else{		echo "<br/><br/>";	}	?> 
									</div>
								</div>	
								<div class="column2"> 		<?php get_sidebar(); ?>	</div>
								</div>
						<?php elseif($sidebar == "3" || $sidebar == "4"): ?>
							<?php if($sidebar == "3") : ?>	
								<div class="two_columns_33_66 background_color_sidebar grid2 clearfix">
								<div class="column1"> 	<?php get_sidebar(); ?>	</div>
								<div class="column2">
							<?php elseif($sidebar == "4") : ?>	
								<div class="two_columns_25_75 background_color_sidebar grid2 clearfix">
									<div class="column1"> <?php get_sidebar(); ?></div>
									<div class="column2">
							<?php endif; ?>
										<div class="column_inner">
											<div class="blog_holder blog_single">	
												<?php 		get_template_part('templates/blog/blog_single', 'loop');	?>
											</div>
											<?php		if($blog_single_hide_comments != "yes"){					comments_template('', true); 						}else{			echo "<br/><br/>";			}		?> 
										</div>
									</div>	
								</div>
						<?php endif; ?>
					</div>
				</div>
			</div>						
<?php endwhile; ?>
<?php endif; ?>	


<?php
$value =get_field('ender_image'); 
$peLongFormImage=$value['url'];
//$peLongFormImage=get_the_post_thumbnail_url( $id, 'full' ); 
$peLongFormCaption=get_field('featured_image_caption'); 

 get_footer(); ?>	