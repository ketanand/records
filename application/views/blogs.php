<!-- #banner -->

<header class="section-header">
<h1><span><?echo strtoupper("BLOGS");?></span></h1>
<span class="sub-heading"><?php echo strtoupper("Music is what we preach, what we eat and what we read.");?></span>
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
<div id="main-content">
            <div id="articles-content classic-layout entries" class="articles-content classic-layout entries">
	     	<?php 
		if(isset($blogs)):
	   	    foreach($blogs as $item):
		?>

		    	<article class="post-1569 post type-post status-publish format-standard hentry category-articles category-interviews tag-amirtharaj-stephen tag-bhumika-popli tag-interview grid-4">

			    <figure class="entry-image inview">
			    	<a href="<?php echo $_SERVER['REQUEST_URI'].'/view/'.$item['id'] ;?>">
						<img width="600" height="400" alt="" class="attachment-medium-size wp-post-image" src="<?echo 'http://'.$_SERVER['HTTP_HOST'].$item['main_image']; ?>">    	
				</a>
			    </figure>
		
			    <header class="entry-header">
				<div class="entry-tag">
				   <span class="entry-date">24 Dec,13</span>
				</div>
				<h8 class="entry-title">
				    <a href="<?php echo $_SERVER['REQUEST_URI'].'/view/'.$item['id'] ;?>"><?php echo $item['title'] ;?></a>
				</h8>
			    </header>
				    
				<div class="entry-summary">
				<p><?php echo $item['short_description'] ;?></p>
			        </div>
        
		    </article>
		<?php endforeach;
			endif;
		?>
            </div>
            <!-- EOF: #bottom-content -->

</div>
