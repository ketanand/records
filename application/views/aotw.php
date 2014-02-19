<!-- #banner -->

<header class="section-header">
<h1><span><?echo strtoupper("ARTIST OF THE WEEK");?></span></h1>
<span class="sub-heading"><?php echo strtoupper("Upcoming talent from the underground music base");?></span>
   <div class="social-icons">
	<a href="#" class="social24 facebook"></a>
	<a href="#" class="social24 twitter"></a>
	<!--a href="#" class="social24 pinterest">Pinterest</a>
	<a href="#" class="social24 linkedin">LinkedIn</a>
	<a href="#" class="social24 stumble">Stumble</a>
	<a href="#" class="social24 dribbble">Dribbble</a>
	<a href="#" class="social24 digg">Digg</a-->
	<a href="#" class="social24 google"></a>
	<!--a href="#" class="social24 delicious">Delicious</a>
	<a href="#" class="social24 youtube">Youtube</a>
	<a href="#" class="social24 instagram">Instagram</a>
	<a href="#" class="social24 vimeo">Vimeo</a-->
    </div>
</header>
<div id="main-content-aotw">
            <div id="charts-content" class="charts-content">
	     <ul id="chart-list" class="chart-list">
		<?php 
		if(isset($items)):
	   	    foreach($items as $item):
		?>

		    	<li id="charts-item" class="chart-item">
			    <div id="charts-item-intro" class ="charts-item-intro">
			    	<img class="chart-item-img" id="chart-item-img" src="<?php echo $item['img'];?>" width="60%"/>	
			    	<span class="chart-place"><?php echo $item['pos'];?></span>
		     	    	<a href="#" class="chart-play"><?php echo "Play Now";?></a>
			    </div>		   
			    <div id="charts-item-desc" class ="charts-item-desc">
			    	<span class="chart-title">
				    <a title="<?php echo $item['artist'];?>" href="/charts/<?php echo $item['artist'];?>"> <?php echo $item['artist'];?></a>
			     	</span>
			
			    	<h1><?php echo $item['title'];?></h1>
			    	<span class="chart-title">	
			    	<a title="<?php echo $item['album'];?>" href="/artist/1490043/<?php echo $item['album'];?>"><?php echo $item['album'];?></a>
			    	</span>	
				</div>
		    	</li>
		<?php endforeach;
			endif;
		?>
		</ul>
            </div>
<div id="bottom-content">
	<h3>Featured Images</h3>
    	<div class="wrapper">
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
	</div>


                    <a href="#" class="colored" title="portofolio">View full portofolio</a> 
<script type="text/javascript">
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
			$(document).ready(function() {
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
			});
		</script>
            </div>	
<div id="bottom-content">
	<h3>Featured Videos</h3>
    	<div class="wrapper">
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
	</div>


                    <a href="#" class="colored" title="portofolio">View full portofolio</a> 
<script type="text/javascript">
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
			$(document).ready(function() {
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
			});
		</script>
            </div>
            <!-- EOF: #bottom-content -->

</div>
