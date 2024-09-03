<?php

if(isset($slug) && $slug=="product"){
	$mobile_slug 	= $slug2;
	$mobile_id 		= get_info("mobile_specs","mobile_id","WHERE mobile_slug='$mobile_slug'");
	$mobile_name 	= get_info("mobile_specs","mobile_name","WHERE mobile_slug='$mobile_slug'");
	$title 			= "$mobile_name price in Bangladesh";
	$description	= "$mobile_name price in Bangladesh 2023";
	$keywords 		= "$mobile_name, $mobile_name price in bd, $mobile_name price in Bangladesh";

}elseif(isset($slug) && $slug=="brand"){
	$brand_slug 	= $slug2;
	$brand_id 		= get_info("mobile_brands","brand_id","WHERE brand_slug='$brand_slug'");
	$brand_name 	= get_info("mobile_brands","brand_name","WHERE brand_slug='$brand_slug'");
	$title 			= "$brand_name mobile price in Bangladesh";
	$description	= "$brand_name mobile price in Bangladesh 2023";
	$keywords 		= "$brand_name, $brand_name price in bd, $brand_name price in Bangladesh";

}elseif(isset($slug) && $slug=="news"){
	$news_slug 		= $slug2;
	$news_id 		= get_info("mobile_news","news_slug","WHERE news_slug='$news_slug'");
	$news_title 	= get_info("mobile_news","news_title","WHERE news_slug='$news_slug'");
	$title 			= "$news_title in Bangladesh";
	$description	= "$news_title in Bangladesh 2023";
	$keywords 		= "$news_title, $news_title in bd, $news_title in Bangladesh";

}elseif(isset($slug) && $slug=="price-range"){
    $price 			= explode("-", $slug2);
    $price_min 		= $price[0];
    $price_max 		= $price[1];

	$title 			= "Mobile price in Bangladesh Between Tk $price_min to Tk $price_max";
	$description	="Mobile price in Bangladesh Between Tk $price_min to Tk $price_max";
	$keywords 		= "Mobile price in Bangladesh Between Tk $price_min to Tk $price_max";

}elseif(isset($slug) && $slug=="compare-mobile"){
    $compare 			= explode("-vs-", $slug2);

    $mobile_slug1 		= $compare[0];
    $mobile_id1 		= get_info("mobile_specs","mobile_id","WHERE mobile_slug='$mobile_slug1'");
    $mobile_name1 		= get_info("mobile_specs","mobile_name","WHERE mobile_id='$mobile_id1'");

    $mobile_slug2		= $compare[1];
    $mobile_id2 		= get_info("mobile_specs","mobile_id","WHERE mobile_slug='$mobile_slug2'");
    $mobile_name2 		= get_info("mobile_specs","mobile_name","WHERE mobile_id='$mobile_id2'");

	$title 			= "$mobile_name1 vs $mobile_name2";
	$description	= $title;
	$keywords 		= $title;
}
else{
	$title 			= "MobileLagbe.com";
	$description	="Mobilelagbe.com is a mobile portal to display updated mobile price, specs, news, tips etc.";
	$keywords		="Mobilelagbe, mobile price, mobile full feature";
}
?>

	<title><?php echo $title; ?></title>
    <!-- Meta -->
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>" />
	<meta name="keywords" content="<?php echo $keywords; ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="Googlebot" content="all" />
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="robots" content="index, follow" />
	<meta name="copyright" content="Copyright &copy; MobileLagbe.com" />
	<meta name="owner" content="MobileLagbe.com" />
	<meta name="author" content="MobileLagbe.com" />
	<meta name="revisit-after" content="1 days" />
	<meta name="Rating" content="General" />
	<meta name="distribution" content="Global" />


	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>