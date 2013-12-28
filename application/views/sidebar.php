<div class="related-content">
<?php if($page['charts_highlights']) :?>
	    <h3> Related News/Articles </h3>
	    <ul id="related-content-summary" class="related-content-summary">	 	
	    <?php foreach($page['charts_highlights'] as $related) :?>
	    	<li id="related-content-summary-item" class="related-content-summary-item">
		<img class="related-item-img" id="chart-item-img" src="http://www.billboard.com/files/media/skate-and-surf-escape-the-fate-650-430.jpg" width="85px"/>
		<a class="related-article-title" title="Sex on the Beach>" href="/sex-on-the-beach">Sex On The Beach</a>
		</li>
  	    <?php endforeach;?>
	    </ul>	
<?php endif; ?>

</div>
<div class ="charts-highlights">	
	    <?php if($page['charts_highlights']) :?>
	    <h3> Charts Highlights </h3> 	
	    <?php foreach($page['charts_highlights'] as $highlight) :?>		
            <div class="chart-highlights">
		<div id="chart-ajax">
			<section class="portion_chart_summary" style="display: block;">
			
			<div class="chart-highlight-left">
			<span class="chart-place-<?php echo $highlight['track_behaviour'];?>"><?php echo $highlight['chart_position'];?></span>
			</div>
			<div class="chart-highlight-right">
			<span class="chart-title">
				<a style="color: #F33747;" title="<?php echo $highlight['chart'];?>" 
					href="/charts/<?php echo $highlight['chart_link'];?>"> <?php echo $highlight['chart'];?></a>
			</span>
			
			<b><?php echo $highlight['track_title'];?></b>
			<a title="<?php echo $highlight['track_artist'];?>" href="/artist/1490043/<?php echo $highlight['track_artist'];?>"><?php echo $highlight['track_artist'];?></a>
			</div>
			
			</section>
</div>
<?php endforeach;?>	
	    <?php endif; ?>
</div>	
