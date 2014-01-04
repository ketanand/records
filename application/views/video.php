<!-- #banner -->

<header class="section-header">
<h1><span><?echo strtoupper("VIDEO");?></span></h1>
<span class="sub-heading"><?php echo strtoupper("Most unique and lastest video collection from upcoming tracks, albums");?></span>
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
            <!-- EOF: #bottom-content -->

</div>
