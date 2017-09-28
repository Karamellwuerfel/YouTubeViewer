<?php $copyright = file_get_contents("https://www.dropbox.com/s/6oxwm3m13sbrdra/InstantWeather_copyr.txt?dl=1");  ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">

<!--///////////////////////////////////////////////////////////////
/////YouTubeViewer Module v1.6 for phpvms by Philipp Dalheimer////
//////////////////////www.philippdalheimer.de//////////////////////
///+ DO NOT EDIT + FOR FREE USE + PHPVMS FORUM: MrDonutButter +////

///////////////////////////////////////////////////////////////-->

<div id="data" style="padding: 30px;">

	<div class="container">
				
		<h3 class="h3" style="font-weight: 300;">Howdy! Below you find some cool stuff.</h3>
		<br />
		
		<?php MainController::Run('YouTubeViewer', 'videos', ''); ?>
		
		<br>
		<small style="color:#a3a3a3;">Updated <?php echo date("Y-m-d H:i:s") ;?>  |  YouTubeViewer Module v1.0 <?php echo $copyright; ?> <?php MainController::Run('YouTubeViewer', 'chk_update', ''); ?>
		</small>

		
		
	</div>
<div>

<style>
	
	.h3{
	  font-family: 'Roboto', sans-serif;
	  background: none;
	  padding-left: 0px;
	  padding-bottom: 0px;
	  margin-top: 10px;
	  color: #565656;
	}
	
	.container{
	  font-family: 'Roboto', sans-serif;
	  font-size: 14px;
	}
	
	.row {
	  position: relative;
	  width: 100%;
	}

	.row [class^="col"] {
	  float: left;
	  margin: 0.5rem 2%;
	  min-height: 0.125rem;
	}
	
	.col-6 {
	  width: 46%;
	}
	
</style>




























