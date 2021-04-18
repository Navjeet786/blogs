<?php include 'header.php'; ?>


<div class="main-wrapper">
	<div class="blog-single-page mrt-60">
		<article class="single-post single-post-two post tag-decoration tag-lifestyle ">
			<div class="container">
                	<?php
			   include "dbcon.php";
			   $id = $_GET['id'];
               $data="select *from blog_list where id='$id'";
               $query=mysqli_query($con,$data);
               $result=mysqli_fetch_array($query);
               	
               
            ?>
				<div class="entry-header">
					
					<h1 class="entry-title"><?php echo$result['title']?></h1>

					<div class="entry-meta-content">
						<div class="entry-author">
							By - <a href="../author/navjeet/index.php"><?php echo$result['blog_by']?> </a>
						</div>
						<div class="entry-date">
							<span><time class="byline-meta-date" datetime="Feb-03-2021">Feb 03 2021</time></span>
						</div>
						<div class="byline-meta-content">
						    <span class="byline-reading-time">3 min read</span>
						</div>
					</div>
				</div>
			</div>
			<div class="post-thumbnail-area single-post-thumbnail">
				<!-- <figure class="post-thumb" style="background-image: url(admin/<?php //echo$result['image']?>)"> -->
				    <img src="admin/<?php echo$result['image']?>" alt="Responsive &amp; Mobile Design" />
				<!-- </figure> -->
			</div>

			<div class="container">
				<div class="post-details">
					<div class="social-network">
    <ul class="social-share">
        <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=https://artixighost.the9t9.com/responsive-mobile-design/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
        <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://twitter.com/share?text=Responsive%20%26%20Mobile%20Design&amp;url=https://artixighost.the9t9.com/responsive-mobile-design/" target="_blank"><i class="fab fa-twitter"></i></a></li>
        <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://pinterest.com/pin/create/button/?url=Responsive%20%26%20Mobile%20Design&amp;url=https://artixighost.the9t9.com/responsive-mobile-design/"><i class="fab fa-pinterest-p"></i></a></li>
        <li><a onclick="window.open(this.href, 'pop-up', 'left=20,top=20,width=500,height=500,toolbar=1,resizable=0'); return false;" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=Responsive%20%26%20Mobile%20Design&amp;url=https://artixighost.the9t9.com/responsive-mobile-design/"><i class="fab fa-linkedin-in"></i></a></li>
    </ul><!-- /.social-share -->
</div>
					
					<div class="entry-content">
						<div class="all-contents">
							<p><?php echo$result['description']?></p><p>Ego quoque, inquit, didicerim libentius si quid attuleris, quam te reprehenderim. Iam insipientes alios ita esse, ut nullo modo ad sapientiam possent pervenire, alios, qui possent, si id egissent, sapientiam consequi. Id quaeris, inquam, in quo, utrum respondero, verses te huc atque illuc necesse est. Calatino quae plurimas amico disputari.</p>
						</div>
					</div>
				</div>
				<div class="entry-footer"></div>
			</div>
		</article>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-5">
					<div class="author-info">
						<div id="author-img">
							<figure class="at-img">
								<a href="../author/jonathon-doe/index.html">
						            <img class="post-author-image" src="assets/images/author.jpeg" alt="Jonathon Doe ">
						        </a>
							</figure>
						</div><!-- / author-img -->

						<div id="author-details">
							<h3 class="author-name">
								<a href="../author/navjeet/index.php"><?php echo$result['blog_by']?></a>
								
							</h3>
							            	
							<div class="authors-bio">
								<p>Navjeet has a flexible organisational taxonomy called tags and the ability to create custom site structures using dynamic routes.</p>
							</div>

							<ul class="author-meta">
							        <li class="author-social-link"><a href="https://ghost.org/" target="_blank" rel="noopener"><i class="fas fa-link"></i></a></li>
							        <li class="author-social-link"><a href="https://twitter.com/ghost" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
							        <li class="author-social-link"><a href="https://www.facebook.com/ghost" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
							</ul>
						</div><!-- /author-details -->
					</div>
				</div>
			</div>

				</div>
			</div>


			<div id="comments" class="comments-area mrb-105">
					<div class="post-comment-box mrl-15 mrr-15">
						<script>
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = '../../easyartghost-the9t9-com.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
						</script>
						<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
						<div id="disqus_thread" class="disqus_comment_box" ></div>
					</div>

			</div>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>