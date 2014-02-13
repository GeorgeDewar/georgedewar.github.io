<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery.tools.min.js"></script>
<script type="text/javascript">
$(document).ready(
	function(){
		$("#flashVideo").flashembed({
			src: "/yp-flash.swf",
			height: "285px",
			width: "400px",
			onFail: function(){
				$("#flashVideo").replaceWith('<img id="flashVideoReplace" src="images/flash-replace.jpg" width="365" height="304" alt="Flash Video Replace" />');
			}
		});
	}
);
</script>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="pageContainer">
  <div id="top">
    <div id="leftContainer">
      <div id="logo"><a href="/"><img src="images/logo.gif" alt="Elliott Engineering Limited" title="Elliott Engineering Limited" width="331" height="93" border="0" /></a></div>
      <div id="address">
        <p>298c Paekakariki Hill Road</p>
        <p>Wellington</p>
        <p>New Zealand</p>
        <p>&nbsp;</p>
        <p>04 237 5331</p>
        <p><a href="mailto:kevin@elliottengineering.co.nz">kevin@elliottengineering.co.nz</a> </p>
      </div>
    </div>
    <?php if(isset($flash)) {?><div id="flashVideo"> <img src="<?php echo $image; ?>" width="365" height="304" alt="Flash Replace" /> </div><?php } else { ?>
	<img src="<?php echo $image; ?>" width="365" height="304" alt="Flash Replace" /><?php } ?>
  </div>
  <div id="content">
    <div id="menuImage">
      <div id="menu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="#">About Us</a></li>
		  <li><a href="#">Structural steel</a></li>
          <li><a href="#">Stairs</a></li>
          <li><a href="#">Balustrades</a></li>
		  <li><a href="#">Gates</a></li>
		  <li><a href="#">Handrails</a></li>
		  <li><a href="#">Architectural metalwork</a></li>
          <li><a href="#">Enquiries</a></li>
        </ul>
      </div>