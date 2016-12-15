<?php
global $qode_options;
global $more;
$more = 0;

$blog_hide_comments = "";
if (isset($qode_options['blog_hide_comments'])) {
  $blog_hide_comments = $qode_options['blog_hide_comments'];
}

$blog_hide_author = "";
if (isset($qode_options['blog_hide_author'])) {
  $blog_hide_author = $qode_options['blog_hide_author'];
}

$qode_like = "on";
if (isset($qode_options['qode_like'])) {
  $qode_like = $qode_options['qode_like'];
}

$qode_social_share = "";
if (isset($qode_options['enable_social_share'])) {
  $qode_social_share = $qode_options['enable_social_share'];
}

$wp_read_more = "off";
if (isset($qode_options['wp_read_more'])) {
  $wp_read_more = $qode_options['wp_read_more'];
}
$_post_format = get_post_format();

$post_class = '';
$post_thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
$post_bg_color = get_post_meta(get_the_ID(), "qode_blog_chequered_color", true);

if($post_bg_color != '') {
  $holder_style = 'background-color: ' . $post_bg_color;
  $post_class .= 'qodef-with-bg-color';
}
else {
  $holder_style = 'background-image: url("' . $post_thumbnail . '")';
  $post_class .= 'qodef-with-bg-image';
}
?>
<?php
switch ($_post_format) {
case "video":
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <div class="qodef-post-content" style="<?php echo esc_attr($holder_style); ?>">
  <span class="qodef-post-content-overlay"></span>
  <div class="qodef-post-content-inner">
  <div class="qodef-post-text">
  <div class="qodef-post-text-inner">
  <h3 class="qodef-post-title">
  <span class="time">
  <span><?php the_time(get_option('date_format')); ?></span>
  </span>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </h3>
  <?php if($blog_hide_author == "no") { ?>
  <div class="post_info">
  <span class="post_author">
  <span><?php _e('By', 'qode'); ?></span>
  <a class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
  <span><?php the_author_meta('display_name'); ?></span>
  </a>
  </span>
  </div>
  <?php } ?>
  <?php
  qode_excerpt();
  ?>
  </div>
  </div>
  </div>
  </div>
</article>
<?php
break;
case "audio":
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <div class="qodef-post-content" style="<?php echo esc_attr($holder_style); ?>">
  <span class="qodef-post-content-overlay"></span>
  <div class="qodef-post-content-inner">
  <div class="qodef-post-text">
  <div class="qodef-post-text-inner">
  <h3 class="qodef-post-title">
  <span class="time">
  <span><?php the_time(get_option('date_format')); ?></span>
  </span>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </h3>
  <?php if($blog_hide_author == "no") { ?>
  <div class="post_info">
  <span class="post_author">
  <span><?php _e('By', 'qode'); ?></span>
  <a class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
  <span><?php the_author_meta('display_name'); ?></span>
  </a>
  </span>
  </div>
  <?php } ?>
  <?php
  qode_excerpt();
  ?>
  </div>
  </div>
  </div>
  </div>
</article>
<?php
break;
case "gallery":
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <div class="qodef-post-content" style="<?php echo esc_attr($holder_style); ?>">
  <span class="qodef-post-content-overlay"></span>
  <div class="qodef-post-content-inner">
  <div class="qodef-post-text">
  <div class="qodef-post-text-inner">
  <h3 class="qodef-post-title">
  
  <span class="time"><span><?php the_time(get_option('date_format')); ?></span> </span>
  
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  
  </h3>
  <?php if($blog_hide_author == "no") { ?>
																						<div class="post_info">
																						<span class="post_author">
																						<span><?php _e('By', 'qode'); ?></span>
																						<a class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
																						<span><?php the_author_meta('display_name'); ?></span>
																						</a>
																						</span>
  																</div>
  <?php } ?>
  <?php
  qode_excerpt();
  ?>
  </div>
  </div>
  </div>
  </div>
</article>
<?php
break;
case "link":
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <div class="qodef-post-content" style="<?php echo esc_attr($holder_style); ?>">
  <span class="qodef-post-content-overlay"></span>
  <div class="qodef-post-content-inner">
  <div class="qodef-post-text">
  <div class="qodef-post-text-inner">
  <h3 class="qodef-post-title">
  <span class="time">
  <span><?php the_time(get_option('date_format')); ?></span>
  </span>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
  </h3>
  </div>
  </div>
  </div>
  </div>
</article>
<?php
break;
case "quote":
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?>>
  <div class="qodef-post-content" style="<?php echo esc_attr($holder_style); ?>">
  <span class="qodef-post-content-overlay"></span>
  <div class="qodef-post-content-inner">
  <div class="qodef-post-text">
  <div class="qodef-post-text-inner">
  <h3 class="qodef-post-title">
  <span class="time">
  <span><?php the_time(get_option('date_format')); ?></span>
  </span>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php echo get_post_meta(get_the_ID(), "quote_format", true); ?></a>
  </h3>
  <span class="quote_author">&ndash; <?php the_title(); ?></span>
  </div>
  </div>
  </div>
  </div>
</article>
<?php
break;
default:
?>

<!--  Default Blog Post -->
<!-- edited by paul sizemore, Nov 2016 ----------------------------------------------------------------- -->
<!-- edited by paul sizemore, Nov 2016 ----------------------------------------------------------------- -->
<!-- edited by paul sizemore, Nov 2016 ----------------------------------------------------------------- -->
<style type="text/css">
article { width:100% !important;  height: 100% !important;  border: 0px solid black; /**/  }
.post-image { background-size: cover;   height: 600px; position:relative;     }   /*  Hero  Image Container*/ 
.post-content-title{   position: absolute;   bottom: 0; display: table; margin: auto;  padding:1%;height: 5%; width:65%;  left:16%; vertical-align: bottom;  border: 0px solid black; background-color:black; opacity: 0.8 ; filter: alpha(opacity=80);/**/ }
.post-content-title div  a { color:white; font-size: 250%; line-height: 125%;  } 
.post_hover {   display:none;  width:100%;  height: 30%; /*  When adjusting this, also adjust bottom: */  bottom:-70%; position: relative;  /*z-index: 30; opacity: 0.9  ;  */
filter: alpha(opacity=90); background-color:#353535 ;}
.post-text-box { padding-left:18%; padding-right:19%; }
.post-meta { padding-bottom:10px; font-size:10px;  } 
.post_excerpt { font-size:10px; line-height: 105% !important;   overflow:hidden; padding-top:2%;} 
.post_excerpt p { font-size:10px !important; line-height: 105% !important; padding-top:10px; } 
 </style>





<article id="post-<?php the_ID(); ?>" <?php post_class($post_class); ?> >
 <!-- Hero  Image --><?php if (has_post_thumbnail($post->ID)) : ?>
										<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
										<div class="post-image" style="background: url('<?php echo $image[0]; ?>') no-repeat center center ; background-size: cover; "
										onmouseover="document.getElementById('post_hover_<?php the_id() ?>').style.display = 'block';" 	 
										 onmouseout="document.getElementById('post_hover_<?php the_id() ?>').style.display = 'none';" > <?php endif; ?>
					 
									  <!-- Title Box Container--><div class="post-content-title"  style="">
																						  <div><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?>  </a> </div>
									  														</div><!-- / Title Box Container-->
	  														
									<!-- Hover Post content --> <div class="post_hover" id="post_hover_<?php the_id() ?>"
								  onmouseover="document.getElementById('post_hover_<?php the_id() ?>').style.display = 'block';" 	 
								   onmouseout="document.getElementById('post_hover_<?php the_id() ?>').style.display = 'none';">

							   <!-- Inner Text Box with padding   -->
							   <div class="post-text-box" style="padding-top:2%; "  >
																							<div class="post-social" style="margin-bottom:2%;" >
																							<?php $iconsDirectory = get_template_directory_uri()."/icons/";  ?>
																							<img src="<?php echo $iconsDirectory ?>share.png" height="20" width="20"  style="margin-right: 20px;">
																							<img src="<?php echo $iconsDirectory ?>facebook.png" height="20" width="20"  style="margin-right: 10px;">
																							<img src="<?php echo $iconsDirectory ?>reddit.png" height="20" width="20"  style="margin-right: 10px;">
																							<img src="<?php echo $iconsDirectory ?>pinterest.png" height="20" width="20" style="margin-right: 10px;">
																							<img src="<?php echo $iconsDirectory ?>google.png" height="20" width="20" style="margin-right: 10px;"></div>
																							
																							   <div class="post-meta">
																																 <span class="post-time" > <span><font style="font-weight: bold; color:white;text-transform: uppercase;" ><?php the_time(get_option('date_format')); ?> /</font>  <?php  $category_detail=get_the_category($post->ID); foreach($category_detail as $cd){ echo "<a  style='font-weight:bold; text-transform: uppercase; color:#FFFFFF' href='http://www.dcfocused.com/".$cd->slug."/'>".$cd->cat_name."</a> <font style='font-weight:bold; color:white'>/</font> "; }?></span></span>  
																																  <span class="post_author">    <!--	<span><?php _e('By', 'qode'); ?></span> 
																																  <a class="post_author_link" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">  <span><?php the_author_meta('display_name'); ?></span></a>-->
																																   <a   style="color:#FFFFFF; text-transform: uppercase; font-weight:bold;"  href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>?theme=Test-theme">By <?php if ( the_author() ) {  } ?></a>
																																   </span>
																																   
																																   <!-- Remove the Captions / shortcodes from the excerpts --> 
																																<?php  
																																		 $input_lines= qode_excerpt();
																																		$input_lines=$input_lines." Copyright 1999 [caption]";
																																		$input_lines=preg_replace("\[.*?\]", "-", $input_lines, -1, $count);
																																		$input_lines = preg_replace("([0-9]+)", "2000", $input_lines,-1, $counter);
																																		print "<div class=\"post_excerpt\"	>".$input_lines."</div>";
																																		//<BR>".$counter."<BR>".$count;
																																?>
																																
																							   </div>
								</div><!-- /  Hover Post content -->
	</div> <!-- Post-image-->
								  

</article>
<?php } ?>