<?php get_header(); ?>



<style type="text/css">
.recentPosts { /*width:270px;  */ /* */   width: 100%;    margin: 0 auto;   height: 600px; padding-top:30px;  }
.recentPostBox {  width:25% ;  height: 125px;  }
.recentPosts_Text {  width: 23.1%; height:100px ;  z-index: 20; display:none;  position:absolute;  padding:1%;  background-color:#000000; opacity: 0.8;  filter: alpha(opacity=80); /* For IE8 and earlier */}
.recentPosts_image { width: 100%;  height:125px;  position: relative;    left: 0;   top:-30;   z-index: -20;}
 .recentPosts_TextTitleBox {  float:left; font-size: 100%; font-weight:bold;  text-align:left;font-family:arial, helvetica, sans-serif; line-height:120%; } 
 div.recentPosts_author {font-size: 100% ;  color:#ffffff; padding-top:10px; text-align:left;font-family:arial, helvetica, sans-serif;; } 
div.recentPosts_entry { padding-top:10px; font-size: 70% ;  text-align:left; background-color:#000000; opacity: 0.8;  filter: alpha(opacity=80); /* For IE8 and earlier */}
@media screen and (max-width: 1000px) {
div.recentPosts_entry {    display:none;     } 
.recentPosts { height: 1800px;  }
.recentPostBox  { width:50%; height:160px ;   } 
.recentPosts_Text  { width:48%; height:160px ;  font-size: 150% ;  } 
.recentPosts_image {height:200px ; font-size: 125% ;   } 
}</style> 

 
 <!-- Blog Roll Grid Script -------------------------------------------- ----------------------------------------- -->
 <!-- Blog Roll Grid Script  -------------------------------------------- ----------------------------------------- -->
 <!-- Blog Roll Grid Script  -------------------------------------------- ----------------------------------------- -->
 <!-- Blog Roll Grid Script  -------------------------------------------- ----------------------------------------- -->
<?php  
$rell=""; 
$rell=$rell."<div class=\"recentPosts\" >";
$args = array (	'post_status'            => array( 'publish' ),	'orderby'                => 'modified',	posts_per_page => '12',);
$query = new WP_Query( $args );
while($query->have_posts()) : $query->the_post();
// Setting Vars 
$postID=get_the_id(); $postTime=get_the_time( 'F jS, Y' );$postTitle=get_the_title();  $postAtt=get_the_title(); $postPerma=get_permalink(); $postAutLink=get_author_posts_url(); 
$my_excerpt = get_the_excerpt(); 	$thumb_id= get_post_thumbnail_id(); $thumb_url = wp_get_attachment_image_src($thumb_id,'thumbnail-size', true); $postThumbURL= $thumb_url[0]; 
// Content 
$rell=$rell."<div class=\"recentPostBox\" onmouseover=\"document.getElementById('textBlock_".$postID."').style.display = 'block';\"  onmouseout=\"document.getElementById('textBlock_".$postID."').style.display = 'none';\">\n";
					$rell=$rell." \n	<div class=\"recentPosts_Text\"  id=\"textBlock_".$postID."\" >";
											$rell=$rell."<div class=\"recentPosts_TextTitleBox\">";
																$rell=$rell."	<font style=\"color:orange;\">".$postTime."</font>";
																$rell=$rell."	<font style=\"color:#FFFFFF;\" ><a href=\"".$postPerma."\" rel=\"bookmark\" title=\"Permanent Link to ".$postAtt."\"  style=\"color:#FFFFFF;\" >".$postTitle."</a></font>\n";
																$rell=$rell."<div  class=\"recentPosts_author\"><a   style=\"color:#FFFFFF;\"  href=\"?theme=Test-theme\">By ".$postAutLink."</a></div>";
																$rell=$rell." <div class=\"recentPosts_entry\">".$my_excerpt."</div>\n\n";
											$rell=$rell. "</div> <!-- recentPosts_TextTitleBox -->";	
					$rell=$rell. "</div> <!-- recentPosts_Text -->";	
					$rell=$rell."<div class=\"recentPosts_image\"    onmouseover=\"document.getElementById('textBlock_".$postID."').style.display = 'block';\" onmouseout=\"document.getElementById('textBlock_".$postID."').style.display = 'none';\"    style= \"background: url('".$postThumbURL."'); background-size: cover;\"></div>";
$rell=$rell. "</div> <!-- recentPostBox -->";
	endwhile;  
	$rell=$rell."</div><!-- recentPosts -->";
	print $rell;
	wp_reset_postdata();
 ?>
  <!-- Blog Roll Grid Script  -------------------------------------------- ----------------------------------------- -->

<?php get_footer(); ?>