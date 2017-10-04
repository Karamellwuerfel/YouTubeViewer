<?php

	class YouTubeViewer extends CodonModule
	{
		
		
		
		public function chk_update(){
			
			$ver = 1.1; 
			$ver_actual = floatval(file_get_contents("https://www.dropbox.com/s/9y42dms9kuxkck5/YouTubeViewer_ver.txt?dl=1"));
			
			if($ver_actual > $ver){
				echo ' | <a href="https://github.com/Karamellwuerfel/YouTubeViewer" target="_blank"><font color="red">new version '.$ver_actual.' available!</a></font>';
			}else{
				//nothing
			}
				
		}
		
		public function videos(){
			
			//Channel ID
			$channel_id = 'UCpHgMe1DFKnoreGfyA0R1GA';

			//Video size in PIXELS
			$width = '560';
			$height = '315';

			//How many last videos should show
			$videos = '3';
			
			//Do not change anything below!

			$id = NULL; 

			$xml = simplexml_load_file(sprintf('https://www.youtube.com/feeds/videos.xml?channel_id=%s', $channel_id));

			for($i = 0; $i < $videos; $i++){
				
				if (!empty($xml->entry[$i]->children('yt', true)->videoId[0])){

					$id = $xml->entry[$i]->children('yt', true)->videoId[0];
					echo '<iframe width="'.$width.'" height="'.$height.'" src="https://www.youtube.com/embed/'.$id.'?rel=0" frameborder="0" allowfullscreen></iframe> <br><br>';
				
				}else{
					
				}

			}
				
		}
			
		
		public function index(){
			
			$this->show('/youtubeviewer/youtubeviewer.php');
			
		}
		
	}
?>