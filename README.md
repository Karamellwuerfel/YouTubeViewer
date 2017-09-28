# InstantWeather
[![Badges](http://img.shields.io/:Version-1.0-fe7d37.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)

http://forum.phpvms.net/topic/24355-simple-instantweather-module/

Hey guys! I've made a Weather module that shows you real time and 

instant weather informations of the current airport where the logged in pilot is.

DEMO VIDEO: [(www.youtube.com/watch?v=Cx0HCaW-a5I)]

# INSTALLATION

1. Copy the "core/modules/YouTubeViewer"-folder into your "core/modules"-folder of your va

2. Copy the "core/templates/YouTubeViewer"-folder into your "core/templates"-folder of your va

3. To show the modulein the navigation:&lt;li&gt;&lt;a href="&lt;?php echo url('/YouTubeViewer'); ?&gt;"&gt;YouTubeViewer&lt;/a&gt;&lt;/li&gt;


(Tested on PHPVMS Version 5.5.2)

# OPTIMIZATION

* Change width and height of youtube video frame

```PHP
//Video size in PIXELS
$width = '560';
$height = '315';
```

* Change how many "last videos" should be shown

```PHP
//How many last videos should show
$videos = '3';
```

# UPCOMING FEATURES

[![Badges](http://img.shields.io/:YouTube_Playlist-Add_playlist_to_show_it's_videos-1859d2.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)
[![Badges](http://img.shields.io/:Username-Use_YouTube_username_instead_of_channel_id-1859d2.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)