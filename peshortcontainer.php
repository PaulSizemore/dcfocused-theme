
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
							   $cat = get_the_category();
							   $html .= '';
							   $html .= '<div class="peshortcats" >';  foreach ($cat as $categ) { $html .= '<!--<a href="' . get_category_link($categ->term_id) . '" >' . $categ->cat_name . ' </a>  -->';	}$html .= '</div>  <!-- // peshortcats -->'; //close 
							  print $html; // Categories 
							  the_title('<div class="peshorttitle">','</div> <!-- //peshorttitle -->');  print "\n";  // TITLE	
							  print "<div class=\"peauthordate\">".$postTime."</div> <!-- //peauthordate -->\n";      // DATE		
							  print "<div id=\"header-content\" class=\"peshortenderimage\" style=\"  background-image: url('".$imageURL."'); background-size:cover; width:100%; height:500px; '); \" ></div><!-- //peshortenderimage-->";
							  print "<div class=\"peshortendercaption\"  id=\"header\">";print the_field('ender_image_caption'); print "</div><!-- // peshortendercaption-->\n";  // Ender Caption 
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
			  print "<div class=\"peauthordivider\"> </div><!-- // peauthordivider --> ";
			 $html="";  $cat = get_the_category(); foreach ($cat as $categ) { $currentCat=$categ->category_description;  $html .=  '<div class="peauthortext" >' .$currentCat.'</div><!-- // peauthortext -->'; } print $html; // Categories descriptions print "</div><!-- //peleftcontainer -->"; 
 ?>
</div><!-- //perightcontainer -->	
</div><!-- //peshortcontainer -->	