# YouTubeViewer
[![Badges](http://img.shields.io/:Version-1.1-fe7d37.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)


# INSTALLATION

1. Copy the "core/modules/YouTubeViewer"-folder into your "core/modules"-folder of your va

2. Copy the "core/templates/YouTubeViewer"-folder into your "core/templates"-folder of your va

3. To show the modulein the navigation:&lt;li&gt;&lt;a href="&lt;?php echo url('/YouTubeViewer'); ?&gt;"&gt;YouTubeViewer&lt;/a&gt;&lt;/li&gt;

(Tested on PHPVMS Version 5.5.2)

# OPTIMIZATION

* Change width and height of youtube video frame (core/modules/YouTubeViewer/YouTubeViewer.php:27-28)

```PHP
//Video size in PIXELS
$width = '560';
$height = '315';
```

* Change how many "last videos" should be shown (core/modules/YouTubeViewer/YouTubeViewer.php:31)

```PHP
//How many last videos should show
$videos = '3';
```

# UPCOMING FEATURES

[![Badges](http://img.shields.io/:YouTube_Playlist-Add_playlist_to_show_it's_videos-1859d2.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)

[![Badges](http://img.shields.io/:Username-Use_YouTube_username_instead_of_channel_id-1859d2.svg)](https://github.com/Karamellwuerfel/YouTubeViewer)