<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Elliott Engineering</title>
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
        <p>kevin@elliottengineering.co.nz </p>
      </div>
    </div>
    <div id="flashVideo"> <img src="images/flash-replace.jpg" width="365" height="285" alt="Flash Replace" /> </div>
  </div>
  <div id="content">
    <div id="menuImage">
      <div id="menu">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Staircases</a></li>
          <li><a href="#">Handrails</a></li>
          <li><a href="#">Balustrades</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div id="mainContent">
        <h1>Welcome to Elliot Engineering!</h1>
        <p><img src="images/hr.gif" height="8" class="hr" alt="Horizontal Rule" /></p>
        <div class="largeImage"><img src="images/homeImage.jpg" alt="Home Photo" width="175" height="141" /></div>
        <div class="largeImageContent">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vitae   pulvinar ipsum. Mauris nec pharetra diam. Morbi vel purus at ligula   facilisis dapibus. Duis quis tortor quam, venenatis vulputate sem. Etiam   purus massa, accumsan non auctor a, porta a quam. Curabitur feugiat,   dolor viverra mattis porttitor, ante diam posuere mi, porttitor cursus   ante tortor id augue. Etiam massa felis, vestibulum vitae scelerisque   at, pretium ac est.</div>
        <div class="clear" style="height:40px;"></div>
        <h2>Our Services</h2>
        <p><img src="images/hr.gif" height="8" class="hr" alt="Horizontal Rule" /></p>
        <div class="smallPhoto"><img src="images/pic01.jpg" width="96" height="73" alt="Gates Pic" /><br />
			<span>Gates</span>
        </div>
        <div class="smallPhotoContent">The quick brown fox jumped over the lazy dog.</div>
        <div class="smallPhoto"><img src="images/pic02.jpg" width="94" height="73" alt="Staircases Pic" /><br />
			<span>Staircases</span>
        </div>
        <div class="smallPhotoContent">How much wood would a woodchuck chuck if a woodchuck could chuck wood?</div>
		<p><img src="images/hr.gif" height="8" class="hr" alt="Horizontal Rule" /></p>
		<div class="smallPhoto"><img src="images/pic02.jpg" width="94" height="73" alt="Staircases Pic" /><br />
			<span>Staircases</span>
        </div>
        <div class="smallPhotoContent">How much wood would a woodchuck chuck if a woodchuck could chuck wood?</div>
		<div class="smallPhoto"><img src="images/pic02.jpg" width="94" height="73" alt="Staircases Pic" /><br />
			<span>Staircases</span>
        </div>
        <div class="smallPhotoContent">How much wood would a woodchuck chuck if a woodchuck could chuck wood?</div>
        <p class="clear" style="padding-top:10px; text-align:right;"><a href="#">View Details</a></p>
      </div>
      <div class="clear" style="height:30px;"></div>
    </div>
  </div>
  <div id="footer">&copy; Copyright <?php echo date("Y"); ?>, Elliot Engineering Ltd. Structural and Sheetmetal Engineers</div>
</div>
</body>
</html>