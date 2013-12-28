<!-- #banner -->
            <div id="charts-content" class="charts-content">
	     <h3><?echo strtoupper("ToP 20");?></h3>
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
