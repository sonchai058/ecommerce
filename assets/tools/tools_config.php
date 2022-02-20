<link rel="stylesheet" href="<?php echo base_url('assets/plugin/foundation/css/foundation.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/jquery-ui.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/reset.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/fontsset.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css'.'?v='.strtotime(date("Y-m-d"))); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/admin/css/hover.css'); ?>">


<?php
	if ($content_view === 'content/main' || (uri_seg(1) === 'product' && $content_view === 'front-end/detail')) { ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/plugin/bxslider/jquery.bxslider.css'); ?>"> <?php
	}
	if ($content_view === 'front-end/product' ||
		(uri_seg(1) === 'product' 	&& $content_view === 'front-end/detail') ||
		(uri_seg(1) === 'member' 	&& $content_view === 'front-end/wishlist')) { ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/product.css'.'?v='.strtotime(date("Y-m-d"))); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/plugin/fancybox/source/jquery.fancybox.css'); ?>"> <?php
	}
	if ($content_view === 'front-end/account') { ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/image-preview.css'); ?>"> <?php
	}
	if ($content_view === 'front-end/transfer' || $content_view === 'front-end/transfercustom') { ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/plugin/timepicker/dist/jquery-ui-timepicker-addon.min.css'); ?>"> <?php
	}
	if ($content_view !== 'content/main' || $content_view !== 'front-end/product') { ?>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/style-1.css'.'?v='.strtotime(date("Y-m-d"))); ?>"> <?php
	}
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;400&display=swap&display=swap" rel="stylesheet">

<style type="text/css">
	p , a , span, h1,h2,h3,h4,h5,h6 {
		font-weight: 200;
		font-family: 'Kanit', sans-serif !important;
	}
	h1,h2,h3,h4,h5,h6 {
		font-weight: 400;
	}
</style>