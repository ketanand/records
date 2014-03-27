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
	 		<?php echo $footer; ?>
		</div>
	 </div>
   </body>
    
</html>
