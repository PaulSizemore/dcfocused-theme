<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php
global $qode_options;
global $wp_query;
?>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false))
		echo('<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">');

	$responsiveness = "yes";
	if (isset($qode_options['responsiveness'])) $responsiveness = $qode_options['responsiveness'];
	if($responsiveness != "no"){
		?>
		<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<?php
	}else{
		?>
		<meta name="viewport" content="width=1200,user-scalable=no">
	<?php } ?>
	<title><?php wp_title(''); ?></title>

	<?php do_action('qode_header_meta'); ?>
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo $qode_options['favicon_image']; ?>" />
	<link rel="apple-touch-icon" href="<?php echo $qode_options['favicon_image']; ?>" />
	<!--[if gte IE 9]>
	<style type="text/css">
		.gradient {
			filter: none;
		}
	</style>
	<![endif]-->

	<?php wp_head(); ?>

<!-- Bootstrap Paul Sizemore November 2016 --> 
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>




<style type="text/css">


/*   ------   Added by Paul Sizemore - November 2016  ------------------------------------------- */ 

/*   ------   Master Elements - - - - - - - - - - - - - - - - - -  --   ------------------------------------------- */ 
		 /*   ------  [dcf_social_icons] shortcode   ------------------------------------------- */ 

		 /*   ------  Titled Blog Roll    ------------------------------------------- */ 
		 .recentPosts { /*width:270px;  */ /* */   width: 100vw;    margin: 0 auto;   height: 75vw; padding-top:30px;  }
		 .recentPostBox {  width:25vw; height: 25vw;  float:left;}
		 .recentPosts_Text {   width:25vw; height: 25vw; z-index: 20; display:none;  position:absolute;   background-color:#000000; opacity: 0.8;  filter: alpha(opacity=80); /* For IE8 and earlier */}
		 .recentPosts_image {  width:25vw; height: 25vw;  position: relative;    left: 0;   top:-30;   z-index: -20;}
		  .recentPosts_TextTitleBox {  padding-left:5%; padding-right:5%;padding-top:5%; float:left; font-size: 120%; font-weight:bold;  text-align:left;font-family:arial, helvetica, sans-serif; line-height:120%; } 
		  div.recentPosts_author {font-size: 120% ;  color:#ffffff; padding-top:10px; text-align:left;font-family:arial, helvetica, sans-serif;} 
		 div.recentPosts_entry {color:#ffffff; margin-top: 10%; padding-top:10px; font-size: 100% ;  text-align:left; background-color:#000000; }

/*   ------   Home page elements   ------------------------------------------- */ 
		.titleHead_container {   text-align: center; height: 45vw; }  /* The container with the image; the image is written inline */ 
		.titleHead_outer{ margin:auto;  display: block; width:960px;  position: relative;  }   /* The container for the title and the block behind the title  */ 
		
		.titleHead_inner{   	 display: block; position: absolute;width:960px; height: 15vw; top:30vw; 
		color:white;background-color:black; opacity: 0.3;  filter: alpha(opacity=30); vertical-align: baseline  !important;  }   /* The background of the title  */ 
		
		.titleHead_innerText { 
			position: absolute; 	top:30vw; 
		font-size:5vw !important; line-height:1.3;  font-style:bold; padding-top:1%; padding-left:3%; display:block;  	color:white; text-align: left; 
	  } 
		.intro_text_block {     color:white; font-style:normal;line-height:1.3; ;width:960px;  font-size:170% !important;  margin-left:auto;  margin-right:auto;    } 


.separator_container { margin-left:auto;  margin-right:auto;  width:960px; }
.separator_rule {   width: 33.333%;  float:left;    text-align: center;    border-bottom: 1px solid gray;    line-height: 0.1em;   margin: 14px 0 20px;  } 
.separator_content {    
	  font: normal normal bold 14px/1 Arial, Helvetica, sans-serif;  text-align: center; color: rgba(255,255,255,1); vertical-align: middle;  letter-spacing: 3px; 
	  float:left; height: 28px;   width: 33.333%; 
	  background-color:rgba(0,0,0,0);	   padding-top:5px; padding-bottom:5px;    border: 1px solid gray; 
	  }

		 
		 
/*   ------   Photo Essay  page elements   ------------------------------------------- */ 
.titleHeadCaption{   display:none; overflow:hidden; top:-25px; position:relative;  width:953px; margin:auto; margin-bottom:-25px; height:25px; font-size:12px;  padding-left:15px;  font-size:12px; color:#FFFFFF;   background-color: #525252; } 
.peLongFormText {  padding-top: 30px;  color:white;  font-weight:normal; font-size:110% ; line-height:2.15;    }
.peLongcats { color:orange;  font-size:20px;  text-transform: uppercase; font-weight:bold; padding-bottom: 15px; padding-left:5px;  } 
.carouselinnerCaption { background-color: black; opacity: 0.8 !important ;   filter: alpha(opacity=80);  text-align:left; padding-left:10px; }
a { color:#ffffff; }

.peshortcontainer  {  width:960px; height: 100%; margin:auto; margin-top:20px;  } 
.peleftcontainer  {  height:100%; width:80%; margin-right:20px;  margin-bottom: 50px; float:left;  } 
								.peshareicons    { padding-bottom: 30px;  padding-right:7px;}   
								.peshareicons img   {  padding-right:7px;}   
								.peshortcats    {  padding-bottom: 40px;   text-transform: uppercase; font-weight:bold; font-size:125%;  color:orange;  } 
								.peshorttitle    { padding-bottom: 25px;  font-weight:bold;color:#FFFFFF;letter-spacing:1pt;word-spacing:2pt;font-size:191%;text-align:left;
								font-family:arial, helvetica, sans-serif;line-height:1;} 
								.peauthordate { font-size:75%; color:white;  padding-bottom: 5px;  }
								.peshortenderimage    {  } 

								.peshortendercaption {       z-index: 50; background-color: #525252; padding-left:10px;  color:white; }
					  			  
.perightcontainer  {   width:125px; float:right;   } 
					   .peauthorimage    {     position: relative;  height: 125px;} 
					  .peauthorsocialicons  { padding-top:15px;   }   
					  .peauthorsocialicons img  { padding-right:7px;}   
					  .peauthorname    { padding-top: 30px;   font-weight:bold;color:#FFFFFF;letter-spacing:1pt;word-spacing:2pt;font-size:100%;text-align:left;font-family:arial, helvetica, sans-serif;line-height:1;} 
					  .peauthortext    { padding-top: 30px;  color:white;  font-weight:normal; font-size:70% ; line-height:1.25;  } 

					  .peauthordivider    {   float:left;  box-sizing: content-box;  width: 100%;   height: 20px;  margin-top: 21px;  overflow: hidden;  border-top: 2px solid gray; } 
						.peauthortext  { padding-top: 30px;  color:white;  font-weight:normal; font-size:70% ; line-height:1.25;    } 
							
	.peleftLowercontainer  {  height:100%; width:80%; margin-right:20px;  margin-bottom: 150px; float:left;:   } 						
	.perightLowercontainer  {   width:125px; float:right;    } 			
		
	 .longFormCat  {  padding-top:400px; font-size:16px; width:960px; margin:auto; text-align: left; font-weight:bold;    }
	 .longFormTitle {   margin:auto; background-color: #525252;  width:954px; color:#FFFFFF; font-size: 48px; padding-top:3px; padding-bottom:3px; padding-left:5px; font-weight:bold;  text-align:left;font-family:arial, helvetica, sans-serif; line-height:120%;  opacity: 0.8;  filter: alpha(opacity=80); } 

	 .longFormSideBarCats {  color:white;  padding-bottom:15px; font-weight:bold; }
	 .longFormSideBarCats2 {  margin-top:25px; color:white;  padding-bottom:5px; font-weight:bold; }
	 .longFormSideBarPostsContainer {  } 
	 .longFormSideBarPosts { color:#FFFFFF; font-size:10px;  padding-bottom:10px;  } 

	 .titleEnderCaption { display:none; overflow:hidden; top:-25px; position:relative;  width:953px; margin:auto; margin-bottom:-25px; height:25px; font-size:12px;  padding-left:15px;  font-size:12px; color:#FFFFFF;   background-color: #525252; } 

/*   ------   Author  ------------------------------------------- */ 
.authorName { font-size: 36px ; padding-bottom:15px; color:white; } 
.authorDescription { font-size: 14px ;  color:white; } 
.authorSocial { text-align: left; padding-top: 20px; }
.authorSocial a { padding-right:20px; }

/*   ------     ------------------------------------------- */ 
.latest_post_text.latest_post_title.a {  color:white !important; }

/*   ------  Tiles on the home page    // note: some of these styles don't work for some reason - they don't change the div ------------------------------------------- */ 
.tilePostsContainer { width:960px; margin-left:auto; margin-right:auto; margin-top:15px;margin-bottom:35px !important; }
.tilepostcontainerleft { width:450px !important; float:left !important; }
.tilepostcontainerright {  width:450px !important; float:right !important; }
.tilePostCat {  margin:auto; text-transform: uppercase !important; color:#D0722D; font-size:120% !important; font-weight: bold;  text-align: center; }
.tilePostImg {  }
.tilePostTitle { width:450px !important; font-size:140%; font-style:normal; margin-top:5px;  }

/*   ------   Adjustments for screen sizes   ---------------------------------------- */ 



@media only screen and (max-width: 320px)  {  		.recentPosts { height: 150vw; }  .recentPostBox {  width:100vw; height: 50vw; }	 .recentPosts_Text {   width:100vw; height: 50vw; }		 .recentPosts_image {  width:100vw; height: 50vw;  } /* The columns in the Tiled Blog Role */  }
@media only screen and (max-width: 768px)  {   		.recentPosts { height: 150vw; }  .recentPostBox {  width:50vw; height: 50vw; }	 .recentPosts_Text {   width:50vw; height: 50vw; }		 .recentPosts_image {  width:50vw; height: 50vw;  } /* The columns in the Tiled Blog Role */ }
@media only screen and (max-width: 1024px)  {   	.intro_text_block, .separator_container  {width:90vw; } 
.tilePostsContainer { width:90vw;  } 
.tilePostCat { font-size:300%; }
.tilepostcontainerleft { width:100% !important; clear:both !important; margin-bottom:40px; }
.tilepostcontainerright {  width:100% !important; clear:both !important; margin-bottom:5px; }
.tilePostTitle { width:100% !important; font-size:200%; font-style:normal; margin-top:5px;  text-align: center; }
.tilePostImg { margin:auto;  text-align: center; } 
																										.separator_rule {   width: 15%;  } .separator_content {    width: 70%; }
																										 div.recentPosts_entry {display:none; /* The descriptions in the Tiled Blog Role */}					
																										 
																										 
																										 



		        }
@media only screen and (max-width: 1900px) {      }

</style> 
</head>
<body <?php body_class(); ?>>


 
<?php
$loading_animation = true;
if (isset($qode_options['loading_animation'])){ if($qode_options['loading_animation'] == "off") { $loading_animation = false; }};

if (isset($qode_options['loading_image']) && $qode_options['loading_image'] != ""){ $loading_image = $qode_options['loading_image'];}else{ $loading_image =  ""; }
?>
<?php if($loading_animation){ ?>
	<div class="ajax_loader"><div class="ajax_loader_1"><?php if($loading_image != ""){ ?><div class="ajax_loader_2"><img src="<?php echo $loading_image; ?>" alt="" /></div><?php } else{ qode_loading_spinners(); } ?></div></div>
<?php } ?>
<?php
$enable_side_area = "yes";
if (isset($qode_options['enable_side_area'])){ if($qode_options['enable_side_area'] == "no") { $enable_side_area = "no"; }};

$enable_popup_menu = "no";
if (isset($qode_options['enable_popup_menu'])){ if($qode_options['enable_popup_menu'] == "yes" && has_nav_menu('popup-navigation')) { $enable_popup_menu = "yes"; }};


$enable_vertical_menu = false;
if(isset($qode_options['vertical_area']) && $qode_options['vertical_area'] =='yes'){
	$enable_vertical_menu = true;
}

$header_button_size = '';
if(isset($qode_options['header_buttons_size'])){
	$header_button_size = $qode_options['header_buttons_size'];
}

$search_type = "from_window_top";
if(isset($qode_options['search_type']) && $qode_options['search_type'] !=''){
	$search_type = $qode_options['search_type'];
}

$menu_dropdown_appearance_class='';
if(isset($qode_options['menu_dropdown_appearance']) && $qode_options['menu_dropdown_appearance'] != ""){
	$menu_dropdown_appearance_class = $qode_options['menu_dropdown_appearance'];
}

?>
<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no' && !$enable_vertical_menu) { ?>
	<section class="side_menu right">
		<?php if(isset($qode_options['side_area_title']) && $qode_options['side_area_title'] != "") { ?>
			<div class="side_menu_title">
				<h5><?php echo $qode_options['side_area_title'] ?></h5>
			</div>
		<?php } ?>
		<?php if(isset($qode_options['sidearea_close_icon_type']) && $qode_options['sidearea_close_icon_type'] == 'fold') {?>
			<a href="#" target="_self" class="close_side_menu_fold">
				<i class="line">&nbsp;</i>
			</a>
		<?php } else { ?>
			<a href="#" target="_self" class="close_side_menu"></a>
		<?php } ?>
		<?php dynamic_sidebar('sidearea'); ?>
	</section>
<?php } ?>
<div class="wrapper">
<div class="wrapper_inner">
<!-- Google Analytics start -->
<?php if (isset($qode_options['google_analytics_code'])){
	if($qode_options['google_analytics_code'] != "") {
		?>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', '<?php echo $qode_options['google_analytics_code']; ?>']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<?php }
}
?>
<!-- Google Analytics end -->

<?php
$header_in_grid = true;
if(isset($qode_options['header_in_grid'])){if ($qode_options['header_in_grid'] == "no") $header_in_grid = false;}

$menu_position = "";
if(isset($qode_options['menu_position'])){$menu_position = $qode_options['menu_position']; }

$centered_logo = false;
if (isset($qode_options['center_logo_image'])){ if($qode_options['center_logo_image'] == "yes") { $centered_logo = true; }};

$centered_logo_animate = false;
if (isset($qode_options['center_logo_image_animate'])){ if($qode_options['center_logo_image_animate'] == "yes") { $centered_logo_animate = true; }};

$enable_border_top_bottom_menu = false;
if (isset($qode_options['enable_border_top_bottom_menu'])){ if($qode_options['enable_border_top_bottom_menu'] == "yes") { $enable_border_top_bottom_menu = true; }};

if(isset($qode_options['header_bottom_appearance']) && $qode_options['header_bottom_appearance'] == "fixed_hiding"){
    $centered_logo = true;
    $centered_logo_animate = true;
}

$display_header_top = "yes";
if(isset($qode_options['header_top_area'])){
	$display_header_top = $qode_options['header_top_area'];
}
if (!empty($_SESSION['qode_stockholm_header_top'])){
	$display_header_top = $_SESSION['qode_stockholm_header_top'];
}
$header_top_area_scroll = "no";
if(isset($qode_options['header_top_area_scroll'])){
	$header_top_area_scroll = $qode_options['header_top_area_scroll'];
}

global $wp_query;
$id = $wp_query->get_queried_object_id();
$is_woocommerce=false;
if(function_exists("is_woocommerce")) {
	$is_woocommerce = is_woocommerce();
	if($is_woocommerce){
		$id = get_option('woocommerce_shop_page_id');
	}
}
$header_style = "";
if(get_post_meta($id, "qode_header-style", true) != ""){
	$header_style = get_post_meta($id, "qode_header-style", true);
}else if(isset($qode_options['header_style'])){
	$header_style = $qode_options['header_style'];
}

$header_color_transparency_per_page = "";
if($qode_options['header_background_transparency_initial'] != "") {
	$header_color_transparency_per_page = $qode_options['header_background_transparency_initial'];
}
if(get_post_meta($id, "qode_header_color_transparency_per_page", true) != ""){
	$header_color_transparency_per_page = get_post_meta($id, "qode_header_color_transparency_per_page", true);
}

$header_color_per_page = "style='";
if(get_post_meta($id, "qode_header_color_per_page", true) != ""){
	if($header_color_transparency_per_page != ""){
		$header_background_color = qode_hex2rgb(get_post_meta($id, "qode_header_color_per_page", true));
		$header_color_per_page .= " background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
	}else{
		$header_color_per_page .= " background-color:" . get_post_meta($id, "qode_header_color_per_page", true) . ";";
	}
} else if($header_color_transparency_per_page != "" && get_post_meta($id, "qode_header_color_per_page", true) == ""){
	$header_background_color = $qode_options['header_background_color'] ? qode_hex2rgb($qode_options['header_background_color']) : qode_hex2rgb("#ffffff");
	$header_color_per_page .= " background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
}

if(isset($qode_options['header_botom_border_in_grid']) && $qode_options['header_botom_border_in_grid'] != "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
	$header_color_per_page .= "border-bottom: 1px solid ".get_post_meta($id, "qode_header_bottom_border_color", true).";";
}

$header_top_color_per_page = "style='";
if(get_post_meta($id, "qode_header_color_per_page", true) != ""){
	if($header_color_transparency_per_page != ""){
		$header_background_color = qode_hex2rgb(get_post_meta($id, "qode_header_color_per_page", true));
		$header_top_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
	}else{
		$header_top_color_per_page .= "background-color:" . get_post_meta($id, "qode_header_color_per_page", true) . ";";
	}
} else if($header_color_transparency_per_page != "" && get_post_meta($id, "qode_header_color_per_page", true) == ""){
	$header_background_color = $qode_options['header_top_background_color'] ? qode_hex2rgb($qode_options['header_top_background_color']) : qode_hex2rgb("#ffffff");
	$header_top_color_per_page .= "background-color:rgba(" . $header_background_color[0] . ", " . $header_background_color[1] . ", " . $header_background_color[2] . ", " . $header_color_transparency_per_page . ");";
}

$header_separator = qode_hex2rgb("#c0c0c0");
if(isset($qode_options['header_separator_color']) && $qode_options['header_separator_color'] != ""){
	$header_separator = qode_hex2rgb($qode_options['header_separator_color']);
}

$header_color_per_page .="'";
$header_top_color_per_page .="'";

$header_bottom_border_style = '';
if(isset($qode_options['header_botom_border_in_grid']) && $qode_options['header_botom_border_in_grid'] == "yes" && get_post_meta($id, "qode_header_bottom_border_color", true) != ""){
	$header_bottom_border_style = 'style="border-bottom: 1px solid '.get_post_meta($id, "qode_header_bottom_border_color", true).';"';
}

//generate header classes based on qode options
$header_classes = '';

$header_bottom_appearance = 'fixed';
if(isset($qode_options['header_bottom_appearance'])){
	$header_bottom_appearance = $qode_options['header_bottom_appearance'];
}

$per_page_header_transparency = get_post_meta($id, 'qode_header_color_transparency_per_page', true);
$header_transparency = '';

if($per_page_header_transparency !== '') {
	$header_transparency = $per_page_header_transparency;
} else {
	$header_transparency = $qode_options['header_background_transparency_initial'];
}

$vertical_area_background_image = "";
if(isset($qode_options['vertical_area_background_image']) && $qode_options['vertical_area_background_image'] != "") {
	$vertical_area_background_image = $qode_options['vertical_area_background_image'];
}
if(get_post_meta($id, "qode_page_vertical_area_background_image", true) != ""){
	$vertical_area_background_image = get_post_meta($id, "qode_page_vertical_area_background_image", true);
}

?>
<?php if($enable_vertical_menu) { ?>
	<?php
	$vertical_menu_style = "toggle";

	$vertical_area_scroll = " with_scroll";

	$page_vertical_area_background = "";
	if(get_post_meta($id, "qode_page_vertical_area_background", true) != ""){
		$page_vertical_area_background = 'style="background-color:'.get_post_meta($id, "qode_page_vertical_area_background", true).';"';
	}

	$vertical_area_dropdown_event = "vm_hover_event";
	if(isset($qode_options['vertical_area_dropdown_event']) && $qode_options['vertical_area_dropdown_event'] == "click_event") {
		$vertical_area_dropdown_event = "vm_click_event";
	}
	?>
	<aside class="vertical_menu_area<?php echo $vertical_area_scroll; ?> <?php echo $header_style; ?>" <?php echo $page_vertical_area_background; ?>>

		<div class="vertical_area_background" <?php if($vertical_area_background_image != ""){ echo 'style="background-image:url('.$vertical_area_background_image.');"'; } ?>></div>

		<div class="vertical_logo_wrapper">
			<?php
			 $iconsDirectory = get_template_directory_uri()."/icons/";  
			if (isset($qode_options['logo_image']) && $qode_options['logo_image'] != ""){ $logo_image = $qode_options['logo_image'];}else{ $logo_image =  $iconsDirectory.'logo.png'; };
			if (isset($qode_options['logo_image_light']) && $qode_options['logo_image_light'] != ""){ $logo_image_light = $qode_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
			if (isset($qode_options['logo_image_dark']) && $qode_options['logo_image_dark'] != ""){ $logo_image_dark = $qode_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };

			?>
			<div class="q_logo_vertical">
				<a href="<?php echo home_url('/'); ?>">
					<img class="normal" src="<?php echo $iconsDirectory.'logo.png'; ?>" alt="Logo"/>
					<img class="light" src="<?php echo $logo_image_light; ?>" alt="Logo"/>
					<img class="dark" src="<?php echo $logo_image_dark; ?>" alt="Logo"/>
				</a>
			</div>

		</div>

		<nav class="vertical_menu dropdown_animation <?php echo $vertical_area_dropdown_event; ?> vertical_menu_<?php echo $vertical_menu_style; ?>">
			<?php

			wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
				'container'  => '',
				'container_class' => '',
				'menu_class' => '',
				'menu_id' => '',
				'fallback_cb' => 'top_navigation_fallback',
				'link_before' => '<span>',
				'link_after' => '</span>',
				'walker' => new qode_type1_walker_nav_menu()
			));
			?>
		</nav>
		<div class="vertical_menu_area_widget_holder">
			<?php dynamic_sidebar('vertical_menu_area'); ?>
		</div>
	</aside>

<?php } ?>
<?php
global $qode_toolbar;
?>
<?php if(!$enable_vertical_menu){ ?>
	<header class="<?php qode_header_classes(); ?>">
	<?php if(isset($qode_toolbar)) include("toolbar.php") ?>
	<div class="header_inner clearfix">

	<?php if(isset($qode_options['enable_search']) && $qode_options['enable_search'] == "yes" && $search_type == "from_window_top"){ ?>
		<form role="search" id="searchform" action="<?php echo home_url('/'); ?>" class="qode_search_form" method="get">
			<?php if($header_in_grid){ ?>
			<div class="container">
				<div class="container_inner clearfix">
					<?php } ?>

					<i class="fa fa-search"></i>
					<input type="text" placeholder="<?php _e('Search', 'qode'); ?>" name="s" class="qode_search_field" autocomplete="off" />
					<input type="submit" value="Search" />

					<div class="qode_search_close">
						<a href="#">
							<i class="fa fa-times"></i>
						</a>
					</div>
					<?php if($header_in_grid){ ?>
				</div>
			</div>
		<?php } ?>
		</form>
	<?php } ?>
	<div class="header_top_bottom_holder">
		<?php if($display_header_top == "yes"){ ?>
			<div class="header_top clearfix" <?php echo $header_top_color_per_page; ?> >
				<?php if($header_in_grid){ ?>
				<div class="container">
					<div class="container_inner clearfix" >
						<?php } ?>
						<div class="left">
							<div class="inner">
								<?php
								dynamic_sidebar('header_left');
								?>
							</div>
						</div>
						<div class="right">
							<div class="inner">
								<?php
								dynamic_sidebar('header_right');
								?>
							</div>
						</div>
						<?php if($header_in_grid){ ?>
					</div>
				</div>
			<?php } ?>
			</div>
		<?php } ?>
		<div class="header_bottom clearfix" <?php echo $header_color_per_page; ?> >
			<?php if($header_in_grid){ ?>
			<div class="container">
				<div class="container_inner clearfix" <?php echo $header_bottom_border_style; ?>>
					<?php } ?>
                    <?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
                        <nav class="main_menu drop_down left_side <?php echo esc_attr($menu_dropdown_appearance_class); ?>">
                            <?php
                            wp_nav_menu( array( 'theme_location' => 'left-top-navigation' ,
                                'container'  => '',
                                'container_class' => '',
                                'menu_class' => '',
                                'menu_id' => '',
                                'fallback_cb' => 'top_navigation_fallback',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                'walker' => new qode_type1_walker_nav_menu()
                            ));
                            ?>
                        </nav>
                    <?php } ?>
					<div class="header_inner_left">
                        <?php if($centered_logo && $header_bottom_appearance !== "stick menu_bottom") {
                            dynamic_sidebar( 'header_left_from_logo' );
                        } ?>
						<?php if(qode_is_main_menu_set()) { ?>
							<div class="mobile_menu_button"><span><i class="fa fa-bars"></i></span></div>
						<?php } ?>
						<div class="logo_wrapper">
							<?php
							if (isset($qode_options['logo_image']) && $qode_options['logo_image'] != ""){ $logo_image = $qode_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
							if (isset($qode_options['logo_image_light']) && $qode_options['logo_image_light'] != ""){ $logo_image_light = $qode_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
							if (isset($qode_options['logo_image_dark']) && $qode_options['logo_image_dark'] != ""){ $logo_image_dark = $qode_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
							if (isset($qode_options['logo_image_sticky']) && $qode_options['logo_image_sticky'] != ""){ $logo_image_sticky = $qode_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
							if (isset($qode_options['logo_image_popup']) && $qode_options['logo_image_popup'] != ""){ $logo_image_popup = $qode_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
                            if (isset($qode_options['logo_image_fixed_hidden']) && $qode_options['logo_image_fixed_hidden'] != ""){ $logo_image_fixed_hidden = $qode_options['logo_image_fixed_hidden'];}else{ $logo_image_fixed_hidden =  get_template_directory_uri().'/img/logo.png'; };
							?>
							<div class="q_logo">
							<a href="<?php echo home_url('/'); ?>"  >
							<img class="normal" src="../../wp-content/themes/Test-theme/icons/logo.png" alt="Logo"/>
							
							
							<!-- <img class="light" src="<?php echo $logo_image_light; ?>" alt="Logo"/>-->
							<!-- <img class="dark" src="<?php echo $logo_image_dark; ?>" alt="Logo"/>-->
							<!-- <img class="sticky" src="<?php echo $logo_image_sticky; ?>" alt="Logo"/>-->
							<?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo $logo_image_popup; ?>" alt="Logo"/><?php } ?></a></div>
                         <!--   <?php if($header_bottom_appearance == "fixed_hiding") { ?>
                                <div class="q_logo_hidden"><a href="<?php echo home_url('/'); ?>"><img alt="Logo" src="<?php echo $logo_image_fixed_hidden; ?>" style="height: 100%;"></a></div>
                            <?php } ?>-->
						</div>
						<?php if($header_bottom_appearance == "stick menu_bottom" && is_active_sidebar('header_fixed_right')){ ?>
							<div class="header_fixed_right_area">
								<?php dynamic_sidebar('header_fixed_right'); ?>
							</div>
						<?php } ?>
                        <?php if($centered_logo && $header_bottom_appearance !== "stick menu_bottom") {
                            dynamic_sidebar( 'header_right_from_logo' );
                        } ?>
					</div>
					<?php if($header_bottom_appearance == "stick_with_left_right_menu") { ?>
                        <nav class="main_menu drop_down right_side <?php echo esc_attr($menu_dropdown_appearance_class); ?>">
                            <?php
                            wp_nav_menu( array( 'theme_location' => 'right-top-navigation' ,
                                'container'  => '',
                                'container_class' => '',
                                'menu_class' => '',
                                'menu_id' => '',
                                'fallback_cb' => 'top_navigation_fallback',
                                'link_before' => '<span>',
                                'link_after' => '</span>',
                                'walker' => new qode_type1_walker_nav_menu()
                            ));
                            ?> 
<?php echo do_shortcode( ' [dcf_social_icons ] ' ); ?>
   </nav>
                    <?php } ?>
					<?php if($header_bottom_appearance != "stick menu_bottom" && $header_bottom_appearance != "stick_with_left_right_menu"){ ?>
                        <?php if($header_bottom_appearance == "fixed_hiding") { ?> <div class="holeder_for_hidden_menu"> <?php } //only for fixed with hiding menu ?>
                        <?php if(!$centered_logo) { ?>
							<div class="header_inner_right">
								<div class="side_menu_button_wrapper right">
									<?php if(is_active_sidebar('header_bottom_right')) { ?>
										<div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
									<?php } ?>
									<?php if(is_active_sidebar('woocommerce_dropdown')) {
										dynamic_sidebar('woocommerce_dropdown');
									} ?>
									<div class="side_menu_button">
										<?php if(isset($qode_options['enable_search']) && $qode_options['enable_search'] == "yes"){ ?>
											<a class="search_button <?php echo esc_attr($search_type); ?>" href="javascript:void(0)">
												<i class="fa fa-search"></i>
											</a>
										<?php } ?>
										<?php if($enable_popup_menu == "yes"){ ?>
											<a href="javascript:void(0)" class="popup_menu <?php echo $header_button_size; ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
										<?php } ?>
										<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
										<a class="side_menu_button_link <?php echo $header_button_size; ?>" href="javascript:void(0)">
												<i class="fa fa-bars"></i>
											</a><?php } ?>
									</div>
								</div>
							</div>
						<?php } ?>
						<?php if($centered_logo == true && $enable_border_top_bottom_menu == true) { ?> <div class="main_menu_and_widget_holder"> <?php } //only for logo is centered ?>
						<nav class="main_menu drop_down <?php echo esc_attr($menu_dropdown_appearance_class); ?> <?php if($menu_position == "" && $header_bottom_appearance != "stick menu_bottom"){ echo ' right';} ?>">
							<?php

							wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
								'container'  => '',
								'container_class' => '',
								'menu_class' => '',
								'menu_id' => '',
								'fallback_cb' => 'top_navigation_fallback',
								'link_before' => '<span>',
								'link_after' => '</span>',
								'walker' => new qode_type1_walker_nav_menu()
							));
							?>
						</nav>
						<?php if($centered_logo) { ?>
							<div class="header_inner_right">
								<div class="side_menu_button_wrapper right">
									<?php if(is_active_sidebar('header_bottom_right')) { ?>
										<div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
									<?php } ?>
									<?php if(is_active_sidebar('woocommerce_dropdown')) {
										dynamic_sidebar('woocommerce_dropdown');
									} ?>
									<div class="side_menu_button">
										<?php if(isset($qode_options['enable_search']) && $qode_options['enable_search'] == "yes"){ ?>
											<a class="search_button <?php echo esc_attr($search_type); ?>" href="javascript:void(0)">
												<i class="fa fa-search"></i>
											</a>
										<?php } ?>
										<?php if($enable_popup_menu == "yes"){ ?>
											<a href="javascript:void(0)" class="popup_menu <?php echo $header_button_size; ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
										<?php } ?>
										<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
											<a class="side_menu_button_link <?php echo $header_button_size; ?>" href="javascript:void(0)">
												<i class="fa fa-bars"></i>
											</a>
										<?php } ?>

									</div>
								</div>
							</div>
						<?php } ?>
						<?php if($centered_logo == true && $enable_border_top_bottom_menu == true) { ?> </div> <?php } //only for logo is centered ?>
                        <?php if($header_bottom_appearance == "fixed_hiding") { ?> </div> <?php } //only for fixed with hiding menu ?>
					<?php }else if($header_bottom_appearance == "stick menu_bottom"){ ?>
					<div class="header_menu_bottom">
						<div class="header_menu_bottom_inner">
							<?php if($centered_logo) { ?>
							<div class="main_menu_header_inner_right_holder with_center_logo">
								<?php } else { ?>
								<div class="main_menu_header_inner_right_holder">
									<?php } ?>
									<nav class="main_menu drop_down <?php echo esc_attr($menu_dropdown_appearance_class); ?>">
										<?php
										wp_nav_menu( array(
											'theme_location' => 'top-navigation' ,
											'container'  => '',
											'container_class' => '',
											'menu_class' => 'clearfix',
											'menu_id' => '',
											'fallback_cb' => 'top_navigation_fallback',
											'link_before' => '<span>',
											'link_after' => '</span>',
											'walker' => new qode_type1_walker_nav_menu()
										));
										?>
									</nav>
									<div class="header_inner_right">
										<div class="side_menu_button_wrapper right">
											<?php if(is_active_sidebar('header_bottom_right')) { ?>
												<div class="header_bottom_right_widget_holder"><?php dynamic_sidebar('header_bottom_right'); ?></div>
											<?php } ?>
											<?php if(is_active_sidebar('woocommerce_dropdown')) {
												dynamic_sidebar('woocommerce_dropdown');
											} ?>
											<div class="side_menu_button">
												<?php if(isset($qode_options['enable_search']) && $qode_options['enable_search'] == "yes"){ ?>
													<a class="search_button <?php echo esc_attr($search_type); ?>" href="javascript:void(0)">
														<i class="fa fa-search"></i>
													</a>
												<?php } ?>
												<?php if($enable_popup_menu == "yes"){ ?>
													<a href="javascript:void(0)" class="popup_menu <?php echo $header_button_size; ?>"><span class="popup_menu_inner"><i class="line">&nbsp;</i></span></a>
												<?php } ?>
												<?php if($enable_side_area == "yes" && $enable_popup_menu == 'no'){ ?>
													<a class="side_menu_button_link <?php echo $header_button_size; ?>" href="javascript:void(0)">
														<i class="fa fa-bars"></i>
													</a>
												<?php } ?>

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<?php } ?>
						<nav class="mobile_menu">
							<?php
                            if($header_bottom_appearance == "stick_with_left_right_menu") {
                                echo '<ul>';
                                wp_nav_menu( array( 'theme_location' => 'left-top-navigation' ,
                                    'container'  => '',
                                    'container_class' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'fallback_cb' => '',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'walker' => new qode_type4_walker_nav_menu(),
                                    'items_wrap'      => '%3$s'
                                ));
                                wp_nav_menu( array( 'theme_location' => 'right-top-navigation' ,
                                    'container'  => '',
                                    'container_class' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'fallback_cb' => '',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'walker' => new qode_type4_walker_nav_menu(),
                                    'items_wrap'      => '%3$s'
                                ));
                                echo '</ul>';
                            }else{
                                wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
                                    'container'  => '',
                                    'container_class' => '',
                                    'menu_class' => '',
                                    'menu_id' => '',
                                    'fallback_cb' => 'top_navigation_fallback',
                                    'link_before' => '<span>',
                                    'link_after' => '</span>',
                                    'walker' => new qode_type2_walker_nav_menu()
                                ));
                            }
							?>
						</nav>
						<?php if($header_in_grid){ ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>

	</header>
<?php } else{?>
	<header class="page_header <?php if($display_header_top == "yes"){ echo 'has_top'; }  if($header_top_area_scroll == "yes"){ echo ' scroll_top'; }?> <?php if($centered_logo){ echo " centered_logo"; } ?> <?php echo $header_bottom_appearance; ?>  <?php echo $header_style; ?> <?php if(is_active_sidebar('header_fixed_right')) { echo 'has_header_fixed_right'; } ?>">
		<?php if(isset($qode_toolbar)) include("toolbar.php") ?>
		<div class="header_inner clearfix">
			<div class="header_bottom clearfix" <?php echo $header_color_per_page; ?> >
				<?php if($header_in_grid){ ?>
				<div class="container">
					<div class="container_inner clearfix" <?php echo $header_bottom_border_style; ?>>
						<?php } ?>
						<div class="header_inner_left">
							<?php if(qode_is_main_menu_set()) { ?>
								<div class="mobile_menu_button"><span><i class="fa fa-bars"></i></span></div>
							<?php } ?>
							<div class="logo_wrapper">
								<?php
								if (isset($qode_options['logo_image']) && $qode_options['logo_image'] != ""){ $logo_image = $qode_options['logo_image'];}else{ $logo_image =  get_template_directory_uri().'/img/logo.png'; };
								if (isset($qode_options['logo_image_light']) && $qode_options['logo_image_light'] != ""){ $logo_image_light = $qode_options['logo_image_light'];}else{ $logo_image_light =  get_template_directory_uri().'/img/logo.png'; };
								if (isset($qode_options['logo_image_dark']) && $qode_options['logo_image_dark'] != ""){ $logo_image_dark = $qode_options['logo_image_dark'];}else{ $logo_image_dark =  get_template_directory_uri().'/img/logo_black.png'; };
								if (isset($qode_options['logo_image_sticky']) && $qode_options['logo_image_sticky'] != ""){ $logo_image_sticky = $qode_options['logo_image_sticky'];}else{ $logo_image_sticky =  get_template_directory_uri().'/img/logo_black.png'; };
								if (isset($qode_options['logo_image_popup']) && $qode_options['logo_image_popup'] != ""){ $logo_image_popup = $qode_options['logo_image_popup'];}else{ $logo_image_popup =  get_template_directory_uri().'/img/logo_white.png'; };
								?>
								<div class="q_logo"><a href="<?php echo home_url('/'); ?>">
								<img class="normal" src="<?php echo $logo_image; ?>" alt="Logo"/>
								<img class="light" src="<?php echo $logo_image_light; ?>" alt="Logo"/>
								<img class="dark" src="<?php echo $logo_image_dark; ?>" alt="Logo"/>
								<img class="sticky" src="<?php echo $logo_image_sticky; ?>" alt="Logo"/>
								<?php if($enable_popup_menu == 'yes'){ ?><img class="popup" src="<?php echo $logo_image_popup; ?>" alt="Logo"/><?php } ?></a></div>

							</div>
						</div>


						<?php if($header_in_grid){ ?>
					</div>
				</div>
			<?php } ?>
				<nav class="mobile_menu">
					<?php
					wp_nav_menu( array( 'theme_location' => 'top-navigation' ,
						'container'  => '',
						'container_class' => '',
						'menu_class' => '',
						'menu_id' => '',
						'fallback_cb' => 'top_navigation_fallback',
						'link_before' => '<span>',
						'link_after' => '</span>',
						'walker' => new qode_type2_walker_nav_menu()
					));
					?>
				</nav>
			</div>
		</div>
	</header>
<?php } ?>
<?php if($qode_options['show_back_button'] == "yes") { ?>
	<a id='back_to_top' href='#'>
			<span class="fa-stack">
				<span class="arrow_carrot-up"></span>
			</span>
	</a>
<?php } ?>
<?php if($enable_popup_menu == "yes"){ ?>
	<div class="popup_menu_holder_outer">
		<div class="popup_menu_holder">
			<div class="popup_menu_holder_inner">
				<nav class="popup_menu">
					<?php
					wp_nav_menu( array( 'theme_location' => 'popup-navigation' ,
						'container'  => '',
						'container_class' => '',
						'menu_class' => '',
						'menu_id' => '',
						'fallback_cb' => 'top_navigation_fallback',
						'link_before' => '<span>',
						'link_after' => '</span>',
						'walker' => new qode_type3_walker_nav_menu()
					));
					?>
				</nav>
			</div>
		</div>
	</div>
<?php } ?>


<?php if(isset($qode_options['enable_search']) && $qode_options['enable_search'] == "yes" && $search_type == "fullscreen_search"){ ?>
	<div class="fullscreen_search_holder">
		<div class="fullscreen_search_table">
			<div class="fullscreen_search_cell">
				<div class="fullscreen_search_inner">
					<form role="search" id="searchform" action="<?php echo home_url('/'); ?>" class="fullscreen_search_form" method="get">
						<div class="form_holder">
							<input type="text" placeholder="<?php _e("Type in what you're looking for", 'qode'); ?>" name="s" class="qode_search_field" autocomplete="off" />
							<input type="submit" class="search_submit" value="&#xf002;" />
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="qode_search_close">
			<a href="#" class="fullscreen_search_close">
				<i class="line">&nbsp;</i>
			</a>
		</div>
	</div>
<?php } ?>


<?php
$content_class = "";
$is_title_area_visible = true;
if(get_post_meta($id, "qode_show-page-title", true) == 'yes') {
	$is_title_area_visible = true;
} elseif(get_post_meta($id, "qode_show-page-title", true) == 'no') {
	$is_title_area_visible = false;
} elseif(get_post_meta($id, "qode_show-page-title", true) == '' && (isset($qode_options['show_page_title']) && $qode_options['show_page_title'] == 'yes')) {
	$is_title_area_visible = true;
} elseif(get_post_meta($id, "qode_show-page-title", true) == '' && (isset($qode_options['show_page_title']) && $qode_options['show_page_title'] == 'no')) {
	$is_title_area_visible = false;
} elseif(isset($qode_options['show_page_title']) && $qode_options['show_page_title'] == 'yes') {
	$is_title_area_visible = true;
}

$header_transparency_search = true;
if((is_search() || is_404()) && isset($qode_options['header_background_transparency_initial']) && $qode_options['header_background_transparency_initial'] !== "" && $qode_options['header_background_transparency_initial'] !== "1"){
	$header_transparency_search = false;
}

//this isn't used because contact page map isn't on top anymore.
$is_contact_page_with_solid_header_and_map = qode_is_contact_page_template() && $qode_options['enable_google_map'] === 'yes' && ($header_transparency === '' || $header_transparency == 1);


if(qode_is_content_below_header()){

	if($qode_options['header_bottom_appearance'] == "stick_with_left_right_menu" || $qode_options['header_bottom_appearance'] == "regular" || $qode_options['header_bottom_appearance'] == "stick" || $qode_options['header_bottom_appearance'] == "stick menu_bottom"){
		$content_class = "content_top_margin_none";
	} else{
		$content_class = "content_top_margin";
	}

} else {

	if((get_post_meta($id, "qode_revolution-slider", true) == "" && $is_title_area_visible && ($header_transparency === '' || $header_transparency == 1)) || ((is_search() || is_404()) && $is_title_area_visible && $header_transparency_search)){
		if($qode_options['header_bottom_appearance'] == "fixed" || $qode_options['header_bottom_appearance'] == "fixed_hiding"){
			$content_class = "content_top_margin";
		}else {
			$content_class = "content_top_margin_none";
		}
	}
}
?>

<?php
if(isset($qode_options['paspartu'])  && $qode_options['paspartu'] == 'yes') { ?>
	<div class="paspartu_top"></div>
	<div class="paspartu_bottom"></div>
	<div class="paspartu_left"></div>
	<div class="paspartu_right"></div>
<?php } ?>

<div class="content <?php echo $content_class; ?>">
	<?php
	$animation = get_post_meta($id, "qode_show-animation", true);
	if (!empty($_SESSION['qode_animation']) && $animation == "")
		$animation = $_SESSION['qode_animation'];

	?>
	<?php if($qode_options['page_transitions'] == "1" || $qode_options['page_transitions'] == "2" || $qode_options['page_transitions'] == "3" || $qode_options['page_transitions'] == "4" || ($animation == "updown") || ($animation == "fade") || ($animation == "updown_fade") || ($animation == "leftright")){ ?>
		<div class="meta">
			<?php do_action('qode_ajax_meta'); ?>
			<span id="qode_page_id"><?php echo $wp_query->get_queried_object_id(); ?></span>
			<div class="body_classes"><?php echo implode( ',', get_body_class()); ?></div>
		</div>
	<?php } ?>
	<div class="content_inner <?php echo $animation;?> ">
	<?php if($qode_options['page_transitions'] == "1" || $qode_options['page_transitions'] == "2" || $qode_options['page_transitions'] == "3" || $qode_options['page_transitions'] == "4" || ($animation == "updown") || ($animation == "fade") || ($animation == "updown_fade") || ($animation == "leftright")){ ?>
		<?php do_action('qode_visual_composer_custom_shortcodce_css');?>
	<?php } ?>
	

	
<?php if(is_page( '11452' )): ?>
<div class="titleHead_container" style="background-size: cover; background-image: url('http://www.dcfocused.com/wp-content/uploads/2016/07/unspecified-6-1100x734.jpg'); width:100%; " >
<div class="titleHead_outer">
			<div class="titleHead_inner"></div>
			<div class="titleHead_innerText">A New Bourbon<BR>From an Old Line</div>
</div>
</div>
<?php endif; ?>

<?php 
global $HeroImage; global $HeroCaption; global $PhotoEssayType;
global $essayType; global $longFormCat; global $longFormTitle; 

if($essayType == 'short_form'){
print "\n\n\n\n\n\n\n<div class=\"titleHead_container\" style=\"background-size: cover;  background-image: url('".$HeroImage."'); no-repeat center center fixed; width:100%; height:600px;\" onmouseout=\"document.getElementById('titleHeadCaption').style.display = 'none'\";  onmouseover=\"document.getElementById('titleHeadCaption').style.display = 'block'\"; ></div>\n\n\n\n\n\n\n";
print "\n\n\n\n\n\n\n<div class=\"titleHeadCaption\"   id=\"titleHeadCaption\"  >".$HeroCaption."</div>\n\n\n\n\n\n\n";
}
if($essayType == 'long_form'){
print "\n\n\n\n\n\n\n<div class=\"titleHead_container\" style=\"background-size: cover;  background-image: url('".$HeroImage."'); no-repeat center center fixed; width:100%; height:600px;\" onmouseout=\"document.getElementById('titleHeadCaption').style.display = 'none'\";  onmouseover=\"document.getElementById('titleHeadCaption').style.display = 'block'\"; >";
print $longFormCat; print $longFormTitle;
print "</div>\n\n\n\n\n\n\n";
print "\n\n\n\n\n\n\n<div class=\"titleHeadCaption\"   id=\"titleHeadCaption\"  >".$HeroCaption."</div>\n\n\n\n\n\n\n";
}



?> 