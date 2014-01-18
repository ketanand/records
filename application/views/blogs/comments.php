<div class="container-in">
	<ul class="comment-list ">
	  	<?php if($blogs['number_of_comments'] == 0){ ?>
			<div class="list-empty"><span>No comments yet. Be the first!</span></div>
		<?php }else{
			foreach($blogs['comments'] as $item):		
		?>
		<li class="comment-item">
			<div id="comment-<?php echo $item['id'];?>" class="container-in indent-0 ">
			  <article data-comment-id="<?php echo $item['id'];?>" data-thread-key="fastcoexist:3021967" data-depth="0" data-is-hidden="" class="comment clearfix">
			    <header>
			      <span class="author name" data-author-provider="facebook" data-author-name="<?php echo $item['comment_author'];?>" data-author-screen-name="<?php echo $item['comment_author_screen_name'];?>"><?php echo $item['comment_author'];?>
			      </span>
			      <span class="parent-author">
				<?php echo $item['comment_parent_author'];?>
			      </span>
			      <time class="datess" data-created-at="<?php echo $item['created_at'];?>" datetime="<?php echo $item['created_at'];?>" title="<?php echo $item['created_at'];?>"><a href="#comment-<?php echo $item['id'];?>">2 days ago</a>
			      </time>
			    </header>
			    <span class="text node-article">
				<p><?php echo $item['text'];?></p>
		            </span>
			 </article>   
			</div>
		</li>
		<?php endforeach; }?>	
	</ul>
</div>
