<div class="row consumption-view">
	<div class="artist-info">
		<div class="info-head clearafter">
			<div class="small-6 medium-4 large-4 ">Artist Info</div>
		</div>
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text">
			<b>
			Name</b>
			</div>
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text">
			<?php echo $artist['name']; ?>
			</div>
			</div>
		</div>
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text">
			<b>
			Date Of Inception </b>
			</div>		
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text">
			<?php echo date("d M, Y", strtotime($artist['dob'])); ?>
			</div>
			</div>
		</div>	
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text">
			<b>
			Genre</b>
			</div>
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text">
			<?php echo $artist['genre']; ?>
			</div>
			</div>
		</div>
		<div class="info-row clearafter">	
			<div class="info-row-head columns">
			<div class="info-row-head-text"><b>
			Biography</b>
			</div>
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text">	
			<?php echo $artist['long_desc']; ?>
			</div>
			</div>					
		</div>
	</div>
</div>
<div class="row consumption-view">
	<div class="artist-tracks">
		<div class="info-head clearafter">
			<div class="small-6 medium-4 large-4 ">Latest Tracks</div>
		</div>
		<script>
			var songs = new Array();
		</script>
		<?php foreach($tracks as $t): ?>	
		<div class="info-row clearafter">
			<div class="tracks-row-number columns">
			<div class="tracks-row-number-text aotw-row-text">
			<?php echo $t['id']; ?>
			</div>
			</div>
			<div class="tracks-row-head columns">
			<div class="tracks-row-head-text aotw-row-text">
			<b>
			<?php echo $t['title']; ?></b>
			</div>
			</div>
			<div class="tracks-row-album columns">
			<div class="tracks-row-album-text aotw-row-text">
			<?php echo $albums[0]->getData('title'); ?>
			</div>
			</div>
			<div class="tracks-row-play columns">
			<div class="tracks-row-play-text aotw-row-text">
			<a href="#" onClick="playSong(<?php echo $t['id']; ?>); return false;" >Play</a>
			</div>
			</div>
			<div class="tracks-row-add columns">
			<div class="tracks-row-add-text aotw-row-text">
			<a href="#" onClick="addToPlaylist(<?php echo $t['id']; ?>); return false;" >+</a>
			</div>
			</div>
			<script>
				var song = new Object();
				song.title = '<?php echo $t["title"]; ?>';
				song.artist = '<?php echo $t["artist_title"]; ?>';
				song.mp3 = '<?php echo $t["mp3"]; ?>';
				songs[<?php echo $t['id']; ?>] = song;
			</script>
		</div>
		<?php endforeach; ?>	
	</div>
</div>
<div class="row consumption-view">
	<div class="artist-info">
		<div class="info-head clearafter">
			<div id="upcominggigs" class="small-6 medium-4 large-4 ">Upcoming gigs</div>
		</div>
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text gig-date">
			<b>
			21 Mar</b>
			</div>
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text gig-venue">
			The Pink Room , Hauz Khas Village
			</div>
			</div>
		</div>
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text gig-date">
			<b>
			1st Apr</b>
			</div>		
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text gig-venue">
			Hard Rock Cafe, Saket
			</div>
			</div>
		</div>	
		<div class="info-row clearafter">
			<div class="info-row-head columns">
			<div class="info-row-head-text gig-date">
			<b>
			07 July</b>
			</div>
			</div>
			<div class="info-row-content columns">
			<div class="info-row-content-text gig-venue">
			Strikers Pub, Vasant Kunj
			</div>
			</div>
		</div>
		<div class="info-gig clearafter">
			<div class="info-gig-head">
			<a id="showgigrequest" href="#bottom-content-1">
				<div class="info-gig-request-text gig-request">	
				REQUEST A GIG
				</div>
			</a>
			</div>
		</div>	
	</div>
</div>
<div class="row">
	<h3>Featured Images</h3>
	<div class="carousel" data-mixed="">
		<a class="prev" data-prev="" ></a>
		<ul class="featured-video-ul">
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][0]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][0]['id'] ;?>/0.jpg">
				</figure>
				</a>
				
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][1]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][1]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][2]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][2]['id'] ;?>/0.jpg" >
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][3]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][3]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][4]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][4]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][5]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][5]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][6]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][6]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		</ul>
		<a class="next" data-next="" style="display: inline;"></a>
		<a class="badge"></a>	
	</div>
	<a href="#" class="colored" title="portofolio">View full portofolio</a>
</div>
<div class="row">
	<h3>Featured Videos</h3>
	<div class="carousel" data-mixed="">
		<a class="prev" data-prev="" ></a>
		<ul class="featured-video-ul">
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][0]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][0]['id'] ;?>/0.jpg">
				</figure>
				</a>
				
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][1]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][1]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][2]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][2]['id'] ;?>/0.jpg" >
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][3]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][3]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][4]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][4]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][5]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][5]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		<li>
			<div class="wrap">
				<a class="various fancybox.iframe" href="http://www.youtube.com/embed/<?php print $page['featured_videos'][6]['id'] ;?>?autoplay=1">
				<figure>
					<img src="http://img.youtube.com/vi/<?php print $page['featured_videos'][6]['id'] ;?>/0.jpg">
				</figure>
				</a>
			</div>
		</li>
		</ul>
		<a class="next" data-next="" style="display: inline;"></a>
		<a class="badge"></a>	
	</div>
	<a href="#" class="colored" title="portofolio">View full portofolio</a>
</div>
<div class="row consumption-view">
	<div class="artist-info info-gig clearafter">
		<div id="wrap">
			<form id="#contactForm" onsubmit="return validateForm();" method="post" action="">
				<input type="hidden" value="gig_request" name="gig_request_command">
				<input type="hidden" value="2924020" name="account_id">

				<div class="input-controls">
					<input type="text" id="contact_name" name="element_1" class="text required" placeholder="Name">
					<span></span>

				</div>
			
				<div class="input-controls">
					<input type="email" id="contact_email" name="element_2" class="text required" placeholder="Email Address">
					<span></span>

				</div>
			
				<div class="input-controls">
					<select name="element_3" id="category" class="select" required="">
					<option value="NotSelected"> Select Category
					</option>
					<option value="PrivateGig"> Private (Small Scale Live Session)
					</option>
					<option value="Concert"> Concert
					</option>
					<option value="Recordings"> Recordings
					</option>
					<option value="Others"> Others !</option>
					</select>
					<span></span>

				</div>
			
			
				<div class="input-controls">
					<textarea name="element_4" id="message" class="textarea  required" required="" placeholder="Custom Message"></textarea>
					<span></span>

				</div>
			
				<div class="input-controls">
					<input type="text" id="contact_mobile" name="element_5" class="text required" placeholder="Mobile Number" >
					<span></span>

				</div>
			
				<div class="input-controls">
					<input type="hidden" value="Submit" name="label_element_6">
					<button class="submit-button" type="submit">Submit</button>
					<span></span>

				</div>
			
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
			
			$(document).ready(function() {
				$('.carousel[data-mixed] ul').anoSlide(
				{
					items: 5,
					speed: 500,
					prev: 'a.prev[data-prev]',
					next: 'a.next[data-next]',
					lazy: true,
					delay: 100
				});
				$('.featured-video-ul').css("height","207px");
				$(".various").fancybox({
					maxWidth	: 800,
					maxHeight	: 600,
					fitToView	: false,
					width		: '100%',
					height		: '100%',
					autoSize	: false,
					closeClick	: false,
					openEffect	: 'none',
					closeEffect	: 'none'
				});
				$("#showgigrequest").click(function(){
				    $("#wrap").slideToggle("slow");
				});
			});
</script>
