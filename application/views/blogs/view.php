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
            <div id="articles-content classic-layout entries" class="articles-content classic-layout">
		<header>
			<div class="summary row collapse">
			      <h3 class="title" itemprop="title headline"><?php echo $blog['title']; ?></h3>
      		        	<span class="deck pull-three" itemprop="deck description"><p><?php echo $blog['short_description']; ?></p></span>
       			</div>
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
	  <article class="post-1569 post type-post status-publish format-standard hentry category-articles category-interviews tag-amirtharaj-stephen tag-bhumika-popli tag-interview grid-4">
		<div class="row collapse">
    <div class="node-article articles-content classic-layout" itemprop="articleBody">
      <?php echo $blog['content']; ?>
    </div>

      <?php if(isset($blog['image_courtesy']) && ($blog['image_courtesy']!= '')):?>
      <div class="twelve columns poster-credit" itemprop="caption contributor">
        <span><p>[<?php echo $blog['image_courtesy'];?>]</p></span>
      </div>
      <?php endif;?>	
  </div>
          <div class="after-body clearfix">
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
    <aside id="author" class="clearfix rt-author">
      <div class="author-wrap clearfix">

        <div class="line">

         
            <div class="one-fourth portions mobile-one">
              <figure class="poster">
                <a class="author-knowmore" href="http://www.recordstree.com/user/<?php echo $author['author_url'];?>">
                  <img class="author-pic" src="<?php echo $author['author_img'];?>">
                </a>
              </figure>
            </div>
            <div class="shortdesc three-fourth portions mobile-three">
          


          
              <h4 class="author-name"><a href="http://www.recordstree.com/user/<?php echo $author['author_url'];?>" class="navigate"><?php echo $author['author_name'];?></a></h4>
              

                <div class="author-shortdesc">
                  <p><?php echo $author['author_desc'];?><a class="continue navigate" href="http://www.recordstree.com/user/<?php echo $author['author_url'];?>">Continued</a></p>
                </div>

              

              
                <ul class="author-social">
                  
                    <li><a href="<?php echo $author['author_google'];?>" target="_new">Google+</a></li>
                  
                    <li><a href="<?php echo $author['author_twitter'];?>" target="_new">Twitter</a></li>
                  
                </ul>
              
            </div>

          </div>

      </div>
    </aside>

    <aside class="pager clearfix">
      <div class="pager-wrap clearfix">

        <div class="row">

          <div class="twelve columns">

            <div class="three columns mobile-two pager-page previous">
              
            </div>

            <div class="six columns hide-for-small time date">
              <time itemprop="datePublished" datetime="2014-01-06">January 6, 2014 | 8:12 AM</time>
            </div>

            <div class="three columns mobile-two pager-page next end">
              
            </div>
          </div>
        </div>
      </div>
    </aside>
     	    
    <aside id="related">
		
    </aside>
       	
	<section id="comments-publish">
	    <div id="comments-form">
		<div id="comment-reply" class="comment-reply">
		    <div class="comment-form-header clearfix">
		      	<h3>Add New Comment</h3>
			<?php if(!$this->session->userdata('logged_in')): /**check if already logged in**/ ?>
			<button class="account-login" onClick="reveal()" name="login">Log In</button>
			<script type="text/javascript" >
				function reveal()
				{
					jQuery('#login-modal').addClass('open');
					jQuery('#login-modal').css('display','block');
					jQuery('#login-modal').css('visibility','visible');
					jQuery('#login-modal').css('top','8145px');
					jQuery('.reveal-modal-bg').css('display','block');
					
				}
				function unreveal()
				{
					jQuery('#login-modal').removeClass('open');
					jQuery('#login-modal').css('display','none');
					jQuery('#login-modal').css('visibility','hidden');
					jQuery('#login-modal').css('top','4131px');
					jQuery('.reveal-modal-bg').css('display','none');
					
				}
				function login(){
					FB.login(function(response){
						if (response.authResponse) {
							var accessToken = response.accessToken;
							var userId = response.userID;
							FB.api('/me', {fields: ['name', 'first_name', 'last_name', 'gender', 'email', 'link'],
								      access_token :  accessToken  			
							}, function(response) {
								jQuery.ajax({
									type:"POST",
									data: response,
									dataType : 'json',
									url: "http://" + window.location.host + "/records/login",
									success: function(response){
									    if(response.success){

									    }else{
						
									    }
									},
									error: function(){
						
									}
								    });	
							});

					        } else {
							// The person cancelled the login dialog
						}
					}, {scope: 'email'});
				}
			</script>
			<?php else:?>
				<ul class="account-dd">
				  <li class="has-dropdown login">
				    <i class="icon icon-user" title="Login"></i> <i class="icon icon-angle-down"></i>
				    <div class="comments-dropdown">
				      <ul class="actions">
					<li><a href="#" class="logout" rel="logout" data-event-category="topbar" data-event-action="click" data-event-label="Topbar: Logout">Log&nbsp;Out</a></li>
				      </ul>
				    </div>
				  </li>
				</ul>				
			<?php endif;?>
		    </div>
		    <form id="comment-form" class="comment-reply-form clearfix">
		    	    <textarea id="comment-text required-entry" name="comment" onClick="openSubmit()" maxlength="1000" rows="7" cols="80" placeholder="Type your comment here."></textarea>
			    <button name="comment_reply_submit" onClick="submitComment()" class="submit">Submit</button>
			    <script type="text/javascript">
				function openSubmit(){
					jQuery('#comment-reply').addClass('focused');
				}
				<?php if ( $this->session->userdata('logged_in')): ?>
				var loggedIn = true;
				<?php else: ?>
				var loggedIn = false;
				<?php endif; ?>
				function submitComment(){
					if (!loggedIn){
						login();
					}else {
						var commentForm = new VarienForm('comment-form');
						if (!commentForm.validator.validate()){
							return;
						}
						var data = Form.serialize(commentForm)+'&id='+blogId;
						jQuery.ajax({
								type:"POST",
								dataType : 'json',
								url: "http://" + window.location.host + "/blogs/comment",
								success: function(response){
								    if(response.success){

								    }else{
						
								    }
								},
								error: function(){
						
								}
							    });						
					}
				}
			    </script>
		    </form>
	    </div>
	</div>

	<div id="comments-content" data-set-newest="" data-set-oldest="" data-total="0" data-is-closed="">
	    
	</div>

	<script type="text/javascript" >
		var blogId = 1; //TODO: echo blog id here
		jQuery(window).load(function(){

			//get Comments
			jQuery.ajax({
				type:"GET",
				dataType : 'json',
				url: "http://" + window.location.host + "/blogs_news/getcomment/" + blogId,
				success: function(response){
				    if(response.success){
					var html = '';
					html += "<div class='comment-list-header'><div class='container-in'><h3 class='comment-count'>	    <span class='comment-num'>" + response.data.count + "</span><span class='comment-num-text'>Comments</span></h3>    </div>";
					html += "<div id='id-comments' class='comment-list'><div class='container-in'><ul class='comment-list' >";
					if (response.data.count){
						for(var i = 0; i < response.data.count; i++){
							html += "<li class='comment-item'><div id='comment-" + response.data[i].id + "' class='container-in indent-0' ><article data-comment-id='" + response.data[i].id + "' data-thread-key='fastcoexist:3021967' data-depth='0' data-is-hidden='' class='comment clearfix'><header><span class='author name' data-author-provider='facebook' data-author-name='" + response.data[i].comment_author + "' data-author-screen-name='" + response.data[i].comment_author_screen_name + "'>" + response.data[i].comment_author + "</span><span class='parent-author'>" + response.data[i].comment_parent_author + "</span><time class='datess' data-created-at='" + response.data[i].created_at + "' datetime='" + response.data[i].created_at + "' title='" + response.data[i].created_at + "' ><a href='#comment-" + response.data[i].id + "'>2 days ago</a></time></header><span class='text node-article'><p>" + response.data[i].comment + "</p></span></article></div></li>";
						}
					}else {
						html += "<div class='list-empty'><span>No comments yet. Be the first!</span></div>";
					}
				        html += "</ul></div></div>";
					jQuery('#comments-content').html(html);
				    }else{
				        
				    }
				},
				error: function(){
				        
				}
			    });
			//get Related Content
			jQuery.ajax({
				type:"GET",
				dataType : 'json',
				url: "http://" + window.location.host + "/blogs_news/getrelated/" + blogId,
				success: function(response){
				    if(response.success){
					var html = '';
					html += "<div class='line'></div><div class='related-wrap one-full portions'><div class='OUTBRAIN' data-widget-id='AR_1' data-ob-template='coexist' data-src='http://www.fastcoexist.com/3024333/this-artist-has-added-the-missing-truth-to-gorgeous-ads-for-luxury-products' data-ob-mark='true' data-dynload='' id='outbrain_widget_0'><div class='ob_strip_container AR_1'><span class='ob_org_header'><h5>YOU MIGHT ALSO LIKE</h5></span><div class='ob_container'><div class='ob_container_recs'>";
					
					if (response.data.count){
						for(var i = 0; i < response.data.count; i++){
							html += "<a class='item-link-container ob-odd' href='" + response.data[i].id + "' target='_self' rel=''><div class='item-container ob-recIdx-0   item-container-obpd'><div class='ob-rec-link-img ob-tcolor'><img class='strip-img' style='' width='138' height='138' src='" + response.data[i].img_src + "' ></div><div class='obpd ob-bgtcolor' onclick='outbrain.callWhatIs('NA','',-1,-1,true,null);return false'>FROM THE WEB</div><div class='ob-text-content'><div class='strip-rec-link-title ob-tcolor'>" + response.data[i].title + "</div><div class='strip-rec-link-source ob-lcolor'><span class='ob_source'>" + response.data[i].src + "</span></div></div></div></a>";
						}
					}else {
						html += "<div class='list-empty'><span>No Related Stuff!</span></div>";
					}
				        html += "</div></div></div></div></div>";
					jQuery('#related').html(html);
					jQuery('#related').css('height', '380px');
				    }else{
				        
				    }
				},
				error: function(){
				        
				}
			    });
		});
	</script>

        <div class="comment-list-footer">
	
	</div>
        
	</section>				
   </div>	
	        
	</article>
	
	</div>
            <!-- EOF: #bottom-content -->

</div>
