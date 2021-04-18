<?php include "header.php" ?>
<div class="main-wrapper">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-12 main-wrapper-content mrb-105">
				<main class="site-main style-two">
					<div class="author-archive-inner">
					    <div class="site-header-content author-header">
					            <img class="author-profile-image" src="../../assets/images/author.jpeg" alt="Johan Jahid" />
					        <div class="author-header-content">
					            <h2 class="mrb-10">Navjeet Singh</h2>
					            <ul class="author-meta-top d-flex justify-content-center mrb-30">
					            	    <li class="author-location">Gwalior</li>
					            	<li class="author-stats">
					            	    5 posts
					            	</li>
					            </ul>
					            <ul class="author-meta">
					                    <li class="author-social-link"><a href="../../index.html" target="_blank" rel="noopener"><i class="fas fa-link"></i></a></li>
					                    <li class="author-social-link"><a href="https://twitter.com/jahid_ghost" target="_blank" rel="noopener"><i class="fab fa-twitter"></i></a></li>
					                    <li class="author-social-link"><a href="https://www.facebook.com/jahid_ghost" target="_blank" rel="noopener"><i class="fab fa-facebook-f"></i></a></li>
					            </ul>
					                <p class="author-bio">Navjeet has a flexible organisational taxonomy called tags and the ability to create custom site structures using dynamic routes.</p>
					        </div>
					    </div>
					</div>

				<div class="main-wrapper mrt-45">
	<div class="container pd-0">
		
		<div class="row justify-content-between">
			<div class="col-lg-12 main-wrapper-content mrb-">
				<main class="site-main style-two">
					<div class="row" id="post-masonry">
							<?php
			   include "dbcon.php";
               $data="select *from blog_list order by id desc";
               $query=mysqli_query($con,$data);
               while ($result=mysqli_fetch_array($query)) {
               	
               
            ?>
							<div class="col-lg-4 col-md-6 col-sm-6">
					        <div class="card shadow mt-30">
					  	    <div class="card-body p-30">
	<article class="post tag-decoration tag-lifestyle post-grid-style">
		<div class="entry-thumb">
			<figure class="thumb-wrap">
				<a href="responsive-mobile-design/index.html">
				    <img class="post-card-image"  srcset="../../admin/<?php echo$result['image']?>" 
				style="width:338px;height:200px"
				    src="admin/<?php echo$result['image']?>"
				    loading="lazy"
				    alt="Responsive &amp; Mobile Design" />
				</a>
							</figure>
			<!--./ thumb-wrap -->
		</div>
		<!--./ entry-thumb -->
		<div class="content-entry-wrap">
			<h3 class="entry-title">
				<a href="blog_details.php?id=<?php echo$result['id']?>">
				<?php echo$result['title']?>
				</a>
			</h3>
			<!--./ entry-title -->

			<div class="entry-content">
				    <p><?php echo$result['description']?></p>
				    <a href="blog_details.php?id=<?php echo$result['id']?>">Read More</a>
			</div>
			<!--./ entry-content -->
		</div>
		<!--./ content-entry-wrap -->
		<div class="entry-user">
			<div class="thumb">
				<a href="author/jonathon-doe/index.html" class="static-avatar">
				    <img class="author-profile-image" src="../../assets/images/author.jpeg" alt="Jonathon Doe " />
				</a>
			</div>
			<div class="info">
				<div class="author-name">
					<span><a href="author/jonathon-doe/index.html"><?php echo$result['blog_by']?> </a></span>
				</div>
				<div class="entry-date"><time datetime="2021-02-03"><?php echo$result['date_time']?></time></div>

				
				<!--./ entry-time -->
			</div>
			</div>
		</div>
		</div>
	</article>

</div>
<?php
}
?>				</div>
				</main>
               </div>
		</div>

	</div>
</div>


  <?php include 'footer.php'; ?>