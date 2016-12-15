<?php get_header(); ?>

	<div class="container">
		<div class="container_inner default_template_holder clearfix">



<?php if(isset($_GET['author_name'])) :
    // NOTE: 2.0 bug requires: get_userdatabylogin(get_the_author_login());
    $curauth = get_userdatabylogin($author_name);  else :    $curauth = get_userdata(intval($author));  endif;  ?>


<div style="padding-bottom:200px; padding-top:15px; ; ">
<div style="float:left; width:60%;"> <div class="authorName"> <?php echo $curauth->display_name;  ?><!--<?php echo $curauth->user_nicename;  ?>--></div>
 <div class="authorDescription">  <?php echo nl2br(get_the_author_meta('description')); ?></div></div>

<div style="float:right; width:20%;">
  <?php 
$id_or_email = $curauth->ID;
$size = "125";
$default = "Profile Photo for ". $curauth->display_name;
$alt = "";
$args = "";
echo get_avatar( $id_or_email, $size, $default, $alt, $args ); ?>

<div class="authorSocial">
<?php if(get_the_author_meta('facebook')) {  echo "<A href='". nl2br(get_the_author_meta('facebook'))."'><img src='../../wp-content/themes/Test-theme/icons/facebook.png' height='20' width='20'></A> ";}  ?>
<?php if(get_the_author_meta('instagram')) {  echo "<A href='". nl2br(get_the_author_meta('instagram'))."'><img src='../../wp-content/themes/Test-theme/icons/instagram.png' height='20' width='20'></A> ";}  ?>
<?php if(get_the_author_meta('twitter')) {  echo "<A href='". nl2br(get_the_author_meta('twitter'))."'><img src='../../wp-content/themes/Test-theme/icons/reddit.png' height='20' width='20'></A> ";}  ?>
<?php if(get_the_author_meta('Pinterest')) {  echo "<A href='". nl2br(get_the_author_meta('Pinterest'))."'><img src='../../wp-content/themes/Test-theme/icons/pinterest.png' height='20' width='20'></A> ";}  ?>
 </div>

</div>


</div>

		</div>
	</div>
	
	
	
	
	

	
	
	
<style type="text/css">
.recent-author-Posts { /*width:270px;  */ /* */   width: 100%;    margin: 0 auto;   height: 1000px; }


.recentPostBox {  width:25% ;  height: 250px;  }
.recentPosts_Text {  width: 25%; height:250px;   z-index: 20; display:none;  position:absolute;  background-color:#000000; opacity: 0.8;  filter: alpha(opacity=80); /* For IE8 and earlier */}
.recentPosts_image { width: 100%;  height:250px;  position: relative;    left: 0;   top:-30;   z-index: -20;}

 .recent_author_Posts_TextTitleBox {  float:left; font-size: 125%; font-weight:bold;  text-align:left;font-family:arial, helvetica, sans-serif; line-height:120%; padding:10%; } 
 div.recentPosts_author {font-size: 100% ;  color:#ffffff; padding-top:10px; text-align:left;font-family:arial, helvetica, sans-serif;; } 
div.recentPosts_entry {  font-size: 70% ;  text-align:left; background-color:#000000; opacity: 0.8;  filter: alpha(opacity=80); /* For IE8 and earlier */}


@media screen and (max-width: 1000px) {
div.recentPosts_entry {    display:none;     } 

.recent-author-Posts { height: 1800px;  }
.recentPostBox  { width:50%; height:160px ;   } 
.recentPosts_Text  { width:48%; height:160px ;  font-size: 150% ;  } 
.recentPosts_image {height:200px ; font-size: 125% ;   } 

}


</style> 

<div class="recent-author-Posts" >
 <?php 
 // WP_Query arguments
$args = array (
	'post_status'            => array( 'publish' ),
	'author_name'            =>  $curauth->user_nicename,
	'orderby'                => 'modified',
	posts_per_page => '16',
);
// The Query
$query = new WP_Query( $args ); ?>
 <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

<div class="recentPostBox" onmouseover="document.getElementById('textBlock_<?php the_id() ?>').style.display = 'block';" 	 
 onmouseout="document.getElementById('textBlock_<?php the_id()  ?>').style.display = 'none';">

						  <!-- Text Block --> 
						  <div class="recentPosts_Text"  id="textBlock_<?php the_id()  ?>" >
						  <div class="recent_author_Posts_TextTitleBox"> 
						  <font style="color:orange;"><?php the_time( 'F jS, Y' ); ?></font> 
						  <font style="color:#FFFFFF;" ><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"  style="color:#FFFFFF;" ><?php the_title(); ?></a></font>
						  
						  <div  class="recentPosts_author"><a   style="color:#FFFFFF;"  href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>?theme=Test-theme">By <?php if ( the_author() ) {  } ?></a></div>
			<!-- set in functions.php - the total words returned --> 			  
 <div class="recentPosts_entry"><?php
$my_excerpt = get_the_excerpt();
if ( '' != $my_excerpt ) {
//$my_excerpt= str_trim($my_excerpt, CHARS, 43, '...'); 
	// Some string manipulation performed
}
echo $my_excerpt; // Outputs the processed value to the page
?></div>
 </div></div>
						  
						  <!-- Image Block --> 
						  <div class="recentPosts_image"    onmouseover="document.getElementById('textBlock_<?php the_id() ?>').style.display = 'block';"   
						  onmouseout="document.getElementById('textBlock_<?php the_id()  ?>').style.display = 'none';"   
						  style= "background: url('<?php $thumb_id = get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); echo $thumb_url[0]; ?>'); background-size: cover;">
						    </div>
</div>
 <?php endwhile;  wp_reset_postdata(); else : ?><?php  _e(' This photographer has no posts.' ); ?> <?php endif; ?>
 </div> 
<?php get_footer(); ?>