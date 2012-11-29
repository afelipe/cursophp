<?='<?xml version="1.0"?>'?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="en" />
	<meta name="robots" content="noindex,nofollow" />
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/reset.css" /> <!-- RESET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/main.css" /> <!-- MAIN STYLE SHEET -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/2col.css" title="2col" /> <!-- DEFAULT: 2 COLUMNS -->
	<link rel="alternate stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/1col.css" title="1col" /> <!-- ALTERNATE: 1 COLUMN -->
	<!--[if lte IE 6]><link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/main-ie6.css" /><![endif]--> <!-- MSIE6 -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/style.css" /> <!-- GRAPHIC THEME -->
	<link rel="stylesheet" media="screen,projection" type="text/css" href="/assets/css/layout2/mystyle.css" /> <!-- WRITE YOUR CSS CODE HERE -->
	<script type="text/javascript" src="/assets/js/layout2/jquery.js"></script>
	<script type="text/javascript" src="/assets/js/layout2/switcher.js"></script>
	<script type="text/javascript" src="/assets/js/layout2/toggle.js"></script>
	<script type="text/javascript" src="/assets/js/layout2/ui.core.js"></script>
	<script type="text/javascript" src="/assets/js/layout2/ui.tabs.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$(".tabs > ul").tabs();
	});
	</script>
	<title>Adminizio Lite</title>
</head>

<body>
<!-- Begin Main -->
	<div id="main">
	
		<!-- Begin Tray -->
		<div id="tray" class="box">
			<?php include("../application/layouts/partials/tray.php");?>
		</div>
		<!-- End Tray -->
		
		<hr class="noscreen" />
	
		<!-- Begin Menu -->
		<div id="menu" class="box">
			<?php include("../application/layouts/partials/menu.php");?>
		</div>
		<!-- End Menu -->
		
		<hr class="noscreen" />
	
		<!-- Begin Columns -->
		<div id="cols" class="box">
	
			<!-- Begin Aside (Left Column) -->
			<div id="aside" class="box">
				<?php include ("../application/layouts/partials/aside.php");?>
			</div>
			<!-- End Aside -->
	
			<hr class="noscreen" />
	
			<!-- Begin Content (Right Column)-->
			<div id="content" class="box">
				<?=$content;?>
				<?php //include ("../application/layouts/partials/content.php");?>
			</div> 
			<!-- End Content -->
	
		</div> 
		<!-- End Columns -->
	
		<hr class="noscreen" />
	
		<!-- Begin Footer -->
		<div id="footer" class="box">
			<?php include ("../application/layouts/partials/footer.php");?>
		</div> 
		<!-- End Footer -->
	
	</div> 
<!-- End Main -->

</body>
</html>