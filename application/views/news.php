<!-- #banner -->

<header class="section-header">
<h7><span><?echo strtoupper("NEWS");?></span></h7>
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
            <div id="charts-content" class="charts-content">
	     <ul id="chart-list" class="chart-list">
		<?php 
		if(isset($items)):
	   	    foreach($items as $item):
		?>

		    	<article class="post-1569 post type-post status-publish format-standard hentry category-articles category-interviews tag-amirtharaj-stephen tag-bhumika-popli tag-interview grid-4">

			    <figure class="entry-image inview">
			    	<a href="http://aksgar.com/2013/in-conversation-amirtharaj-stephen.html">
						<img width="600" height="400" alt="" class="attachment-medium-size wp-post-image" src="http://aksgar.com/wp-content/uploads/2013/12/Amirtharaj-Stephen-13-600x400.jpg">    	
				</a>
			    </figure>
		
			    <header class="entry-header">
				<div class="entry-meta">
				   <span class="entry-date">24 Dec ’13</span>
				</div>
				<h2 class="entry-title">
				    <a href="http://aksgar.com/2013/in-conversation-amirtharaj-stephen.html">In Conversation: Amirtharaj Stephen</a>
				</h2>
				    </header>
				    
				<div class="entry-summary">
				<p>Indian photographer Stephen Amirtharaj is interviewed by Bhumika Popli on his work and his project ‘Koodankulam: In My Backyard’ which was showcased at the Delhi Photo Festival 2013.</p>
			    </div>
        
		    </article>
		<?php endforeach;
			endif;
		?>
		</ul>
            </div>
            <!-- EOF: #bottom-content -->

</div>
