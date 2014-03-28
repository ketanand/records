<!DOCTYPE html>
<html lang="en" dir="ltr" version="HTML+RDFa 1.1"
  xmlns:content="http://purl.org/rss/1.0/modules/content/"
  xmlns:dc="http://purl.org/dc/terms/"
  xmlns:foaf="http://xmlns.com/foaf/0.1/"
  xmlns:og="http://ogp.me/ns#"
  xmlns:rdfs="http://www.w3.org/2000/01/rdf-schema#"
  xmlns:sioc="http://rdfs.org/sioc/ns#"
  xmlns:sioct="http://rdfs.org/sioc/types#"
  xmlns:skos="http://www.w3.org/2004/02/skos/core#"
  xmlns:xsd="http://www.w3.org/2001/XMLSchema#">
    <head profile="http://www.w3.org/1999/xhtml/vocab">
	<title><?php print 'Records Tree'; ?></title>
	<?php 
	      echo $css;
	      echo $scripts;
	      echo $head; 
	?>
	<link href="/public/css/jplayer.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="/public/media/js/jquery.jplayer.min.js"></script>
	<script type="text/javascript" src="/public/media/js/jplayer.playlist.min.js"></script>
    </head>

    <body class="front">
	 <!-- fb sdk -->
	<div id="fb-root"></div>
	<script>/* (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));*/
	window.fbAsyncInit = function() {
		  FB.init({
		    appId      : '715245691841768',
		    status     : true, // check login status
		    cookie     : true, // enable cookies to allow the server to access the session
		    xfbml      : true  // parse XFBML
		  });

  	};

	  (function(d){
	   var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
	   if (d.getElementById(id)) {return;}
	   js = d.createElement('script'); js.id = id; js.async = true;
	   js.src = "//connect.facebook.net/en_US/all.js";
	   ref.parentNode.insertBefore(js, ref);
	  }(document));
	</script>

         <div id="page-wrapper">
         	<!-- #page -->
         	<div id="page">
	 		<?php echo $header; ?>
			<?php if(isset($banner)) echo $banner; ?>
			<div id="content" class="container clearfix fullwidth">
				
			 	<?php echo $content; ?>
				
				<div id="sidebar">
			 		<?php echo $sidebar; ?>
				</div>
			</div>
			<!-- JPlayer html starts -->
			<div id="jquery_jplayer_1" class="jp-jplayer"></div>

		<div id="jp_container_1" class="jp-audio">
			<div class="jp-type-playlist">
				<div class="jp-gui jp-interface">
					<ul class="jp-controls">
						<li><a href="javascript:;" class="jp-previous" tabindex="1">previous</a></li>
						<li><a href="javascript:;" class="jp-play" tabindex="1">play</a></li>
						<li><a href="javascript:;" class="jp-pause" tabindex="1">pause</a></li>
						<li><a href="javascript:;" class="jp-next" tabindex="1">next</a></li>
						<li><a href="javascript:;" class="jp-stop" tabindex="1">stop</a></li>
						<li><a href="javascript:;" class="jp-mute" tabindex="1" title="mute">mute</a></li>
						<li><a href="javascript:;" class="jp-unmute" tabindex="1" title="unmute">unmute</a></li>
						<li><a href="javascript:;" class="jp-volume-max" tabindex="1" title="max volume">max volume</a></li>
					</ul>
					<div class="jp-progress">
						<div class="jp-seek-bar">
							<div class="jp-play-bar"></div>
						</div>
					</div>
					<div class="jp-volume-bar">
						<div class="jp-volume-bar-value"></div>
					</div>
					<div class="jp-time-holder">
						<div class="jp-current-time"></div>
						<div class="jp-duration"></div>
					</div>
					<ul class="jp-toggles">
						<li><a href="javascript:;" class="jp-shuffle" tabindex="1" title="shuffle">shuffle</a></li>
						<li><a href="javascript:;" class="jp-shuffle-off" tabindex="1" title="shuffle off">shuffle off</a></li>
						<li><a href="javascript:;" class="jp-repeat" tabindex="1" title="repeat">repeat</a></li>
						<li><a href="javascript:;" class="jp-repeat-off" tabindex="1" title="repeat off">repeat off</a></li>
					</ul>
					<div class="jp-show-playlist">
						<a href="javascript:;" title="show playlist" onClick="jQuery('.jp-playlist').toggle()" >Show Playlist</a>
					</div>
				</div>
				<div class="jp-playlist">
					<ul>
						<li></li>
					</ul>
				</div>
				<div class="jp-no-solution">
					<span>Update Required</span>
					To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
				</div>
			</div>
		</div>

			<!-- JPlayer html ends -->
			<script>
				$(document).ready(function(){
	window.playlist = {};
	window.playlist.len = -1;

	window.mPlaylist = new jPlayerPlaylist({
		jPlayer: "#jquery_jplayer_1",
		cssSelectorAncestor: "#jp_container_1"
	}, [
		
	], {
		playlistOptions: {
			enableRemoveControls: false
		},
		swfPath: "/public/media/js",
		supplied: "mp3",
		wmode: "window",
		smoothPlayBar: true,
		keyEnabled: true
	});
});
			function playSong(id){
				if (!(id in window.playlist)){
					addToPlaylist(id);
					setTimeout(function(){window.mPlaylist.play(window.playlist[id]);}, 1000);
				}else {
					window.mPlaylist.play(window.playlist[id]);
				}				
			}

			function addToPlaylist(id){
				if (!(id in window.playlist)){
					window.mPlaylist.add(songs[id]);
					window.playlist.len++;
					window.playlist[id] = window.playlist.len;
				}
				jQuery('.jp-playlist').show();
			}
			</script>
	 		<?php echo $footer; ?>
		</div>
	 </div>
   </body>
    
</html>
