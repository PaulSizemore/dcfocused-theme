<div class="peshortcontainer">
				 <div class="peleftcontainer">
									<div class="peshareicons">
								  <img src='../../wp-content/themes/Test-theme/icons/share.png' height='20' width='20'>
								  <img src='../../wp-content/themes/Test-theme/icons/facebook.png' height='20' width='20'>
								  <img src='../../wp-content/themes/Test-theme/icons/facebook.png' height='20' width='20'>
								  <img src='../../wp-content/themes/Test-theme/icons/reddit.png' height='20' width='20'>
								  <img src='../../wp-content/themes/Test-theme/icons/pinterest.png' height='20' width='20'>
								  </div>
							   <?php			
							$imageArray = get_field('ender_image'); // Ender Image URL
							   $imageURL = esc_attr($imageArray['url']); 
							   $postTime=get_the_time( 'F jS, Y' );
							  print "<div class=\"peauthordate\">".$postTime."</div> <!-- //peauthordate -->\n";      // DATE	
	
print "<div class=\"peLongFormText\">";print get_post_meta($post->ID, 'primary_text', true); print "</div>\n"; //  Caption
			   print "</div><!-- //peleftcontainer -->"; 
// Start Author Content    --------------------------------------
// $curauth = get_userdatabylogin($authorDisplayName);
// if(isset($_GET['author_name'])) :
// NOTE: 2.0 bug requires: get_userdatabylogin(get_the_author_login());
//  $curauth = get_userdatabylogin($author_name);  else :    $curauth = get_userdata(intval($author));  endif;
// $author_name=get_the_author_meta('display_name');
// $authorDisplayName=get_the_author_meta('display_name');
// $id_or_email = $curauth->ID;
// $size = "125";
// $default = "Profile Photo for ". $curauth->display_name;
// $alt = "";
// $args = "";

$AuthorEmail=nl2br(get_the_author_meta('email'));
$size = "125";
$AltImage = "";
$alt = "";
$args = "";
$AuthorImage=get_avatar( $AuthorEmail, $size, $AltImage, $alt, $args ); 
$AuthorName=nl2br(get_the_author_meta('nicename'));
$AuthorDesc=nl2br(get_the_author_meta('description'));

print "<div class=\"perightcontainer\">"; 
			  print "<div class=\"peauthorimage\">";  
			 print  $AuthorImage; print "</div><!-- //peauthorimage -->"; 

			  print "<div class=\"peauthorsocialicons\">";
			   if(get_the_author_meta('facebook')) {  echo "<A href='". nl2br(get_the_author_meta('facebook'))."'><img src='../../wp-content/themes/Test-theme/icons/facebook.png' height='20' width='20'></A> ";}
			   if(get_the_author_meta('instagram')) {  echo "<A href='". nl2br(get_the_author_meta('instagram'))."'><img src='../../wp-content/themes/Test-theme/icons/instagram.png' height='20' width='20'></A> ";} 
			  if(get_the_author_meta('twitter')) {  echo "<A href='". nl2br(get_the_author_meta('twitter'))."'><img src='../../wp-content/themes/Test-theme/icons/reddit.png' height='20' width='20'></A> ";}  
			  if(get_the_author_meta('Pinterest')) {  echo "<A href='". nl2br(get_the_author_meta('Pinterest'))."'><img src='../../wp-content/themes/Test-theme/icons/pinterest.png' height='20' width='20'></A> ";}  
			  print " </div><!-- // peauthorsocialicons -->"; 
			  PRINT "<div class=\"peauthorname\">".$AuthorName ."</div> <!-- //peauthorname -->"; 
			  PRINT "<div class=\"peauthortext\">".$AuthorDesc."</div> <!-- //peauthortext -->"; 
			//  print "<div class=\"peauthordivider\"> </div><!-- // peauthordivider --> ";
			// $html="";  $cat = get_the_category(); foreach ($cat as $categ) { $currentCat=$categ->category_description;  $html .=  '<div class="peLongtext" >' .$currentCat.'</div><!-- // peLongtext -->'; } print $html; // Categories descriptions print "</div><!-- //peleftcontainer -->"; 
 ?>
</div><!-- //perightcontainer -->	
</div><!-- //peshortcontainer -->	
<div style="clear:both;"></div>



<div class="peshortcontainer">	
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
<?php 	$value =get_field('content_photo_1'); 	print  "<img style=\"padding-bottom:30px; width:100%;\" src=\"".$value['url']."\">"; ?>
      <div class="carousel-caption"><p class="carouselinnerCaption"><?php 	$value =get_field('content_caption_1'); print $value; ?></p></div>    </div>

    <div class="item">
<?php 	$value =get_field('content_photo_2'); 	print  "<img style=\"padding-bottom:30px; width:100%;\" src=\"".$value['url']."\">"; ?>
      <div class="carousel-caption"><p class="carouselinnerCaption"><?php 	$value =get_field('content_caption_2'); print $value; ?></p></div>    </div>

    <div class="item">
<?php 	$value =get_field('content_photo_3'); 	print  "<img style=\"padding-bottom:30px; width:100%;\" src=\"".$value['url']."\">"; ?>
      <div class="carousel-caption"><p class="carouselinnerCaption"><?php 	$value =get_field('content_caption_3'); print $value; ?></p></div>
    </div>

    
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
























	</div><!-- IMAGEs  -->

<div class="peshortcontainer">
				   <div class="peleftLowercontainer">
										   <?php 
										   print "<div class=\"peshorttitle\">";   print the_field('secondary_headline'); print "</div> <!-- //peshorttitle -->";  print "\n";  // TITLE	
										   print "<div class=\"peLongFormText\">";   print the_field('secondary_text'); print "</div> <!-- //peLongtext -->";  print "\n";  // TITLE	
										   ?>
					</div> 



<div class="perightLowercontainer">
<div style="  border: 1px solid rgba(0,124,14,1);  border-bottom-width: 2px; margin-bottom:5px;"></div>
		<?php 	 
		$cat = get_the_category();
		$html = '';  $html .= '<div class="longFormSideBarCats " style="text-transform: uppercase;" >More ';  foreach ($cat as $categ) { $html .= $categ->cat_name." ";	}$html .= '</div><!-- // longFormSideBarCats -->'; //close 
		 print $html; // Categories 
		 $searchCat ="'"; 
		 foreach ($cat as $categ) { $searchCat .= $categ->cat_name.",";	}
		?> 
		
		  <div class="longFormSideBarPostsContainer">
		  <?php  
		  $args = array( 'numberposts' => '3', 'post_status' => 'publish,draft', 'category' =>array($searchCat), 'post_type' => array('post','page','photo_essay') );  
		  $recent_posts = wp_get_recent_posts( $args );
		  foreach( $recent_posts as $recent ){  
		  echo '<a class="longFormSideBarPosts" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>  ';  }  wp_reset_query(); 
		   ?>
		 </div> <!-- // longFormSideBarPostsContainer List --> 
		 <div style="   margin-bottom:65px;"></div>
		 		 <div style="  border: 1px solid rgba(0,124,14,1);  border-bottom-width: 2px; margin-bottom:5px;"></div>
		 <div class="longFormSideBarCats"  style=" text-transform: uppercase;">More Photo Essays</div> 
			  <div class="longFormSideBarPostsContainer">
		  <?php  
		  $args = array( 'numberposts' => '3', 'post_status' => 'publish,draft', 'post_type' => 'photo_essay'  );  
		  $recent_posts = wp_get_recent_posts( $args );
		  foreach( $recent_posts as $recent ){  
		  echo '<a class="longFormSideBarPosts" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>  ';  }  wp_reset_query(); 
		   ?>
		 </div> <!-- // longFormSideBarPostsContainer List --> 	 
		 
		 
</div> <!-- //perightLowercontainer -->
</div> <!-- // peshortcontainer--> 

