<?php include "header.php" ?>
     	<div class="frontpage-slider-posts style-one mrb-105">
		<div class="container">
				<?php
			   include "dbcon.php";
			 // $id = $_GET['id']; 
               $data="select * from blog_list  ";
               $query=mysqli_query($con,$data);
               $result=mysqli_fetch_array($query);
              
            ?>
			<div class="row">
				<div class="col-12">
					<div class="owl-carousel frontpage-slider-one style-three carousel-rectangle carousel-nav-center">
							<article class="post hentry post-slider-four">
								<div class="entry-thumb">
									<figure class="thumb-wrap">
										<a href="blog_details.php?id=<?php echo$result['id']?>">
											<div class="h-calculated-image">
											    <img class="post-card-image" src="admin/<?php echo$result['image'] ?>"
											    sizes="(max-width: 600px) 600px, (max-width: 1160px) 1000px, 1140px"
											    src="content/images/size/w1000/2021/02/featured-one.jpg"
											    loading="lazy"
											    alt="The latest on BREXIT and how  will affect travellers" />
											</div>
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
									<div class="entry-meta-content">
										<div class="entry-author">
											By - <a href="author/navjeet/index.php"><?php echo$result['blog_by']?></a>
										</div>
										<!--./ entry-date -->
										<div class="entry-date">
											<time datetime="2021-02-03"><?php echo$result['date_time']?></time>
										</div>
										<!--./ entry-date -->
									</div>
									<!--./ entry-meta-content -->
									<div class="entry-content">
										<div class="entry-summary">
											    <p><?php echo $result['description']?></p>
										</div>
										<div class="read-more-share">
											<div class="read-more-wrap">
												<a class="read-more" href="blog_details.php?id=<?php echo$result['id']?>">Read More</a>
											</div>
										</div>
									</div>
									<!--./ entry-content -->
								</div>
								<!--./ content-entry-wrap -->
							</article>
							<article class="post hentry post-slider-four">
								<?php
			   include "dbcon.php";
			 // $id = $_GET['id']; 
               $data="select * from blog_list where id=8 ";
               $query=mysqli_query($con,$data);
               $result=mysqli_fetch_array($query);
              
            ?>
								<div class="entry-thumb">
									<figure class="thumb-wrap">
										<a href="blog_details.php?id=<?php echo$result['id']?>">
											<div class="h-calculated-image">
											    <img class="post-card-image" srcset="admin/<?php echo $result['image']?>"
											    sizes="(max-width: 600px) 600px, (max-width: 1160px) 1000px, 1140px"
											    src="content/images/size/w1000/2021/02/featured-two.jpg"
											    loading="lazy"
											    alt="Olivier Costa restaurant	experience Lisbon" />
											</div>
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
									<div class="entry-meta-content">
										<div class="entry-author">
											By - <a href="author/jonathon-doe/index.html"><?php echo$result['blog_by']?></a>
										</div>
										<!--./ entry-date -->
										<div class="entry-date">
											<time datetime="2021-02-03"><?php echo$result['date_time']?></time>
										</div>
										<!--./ entry-date -->
									</div>
									<!--./ entry-meta-content -->
									<div class="entry-content">
										<div class="entry-summary">
											    <p><?php echo$result['description']?></p>
										</div>
										<div class="read-more-share">
											<div class="read-more-wrap">
												<a class="read-more" href="blog_details.php?id=<?php echo$result['id']?>">Read More</a>
											</div>
										</div>
									</div>
									<!--./ entry-content -->
								</div>
								<!--./ content-entry-wrap -->
							</article>
							<article class="post hentry post-slider-four">
								<?php
			   include "dbcon.php";
			 // $id = $_GET['id']; 
               $data="select * from blog_list where id=9 ";
               $query=mysqli_query($con,$data);
               $result=mysqli_fetch_array($query);
              
            ?>
								<div class="entry-thumb">
									<figure class="thumb-wrap">
										<a href="blog_details.php?id=<?php echo$result['id']?>">
											<div class="h-calculated-image">
											    <img class="post-card-image" srcset="admin/<?php echo$result['image']?>"
											    sizes="(max-width: 600px) 600px, (max-width: 1160px) 1000px, 1140px"
											    src="content/images/size/w1000/2021/02/featured-three.jpg"
											    loading="lazy"
											    alt="Studying Maximize Fun, Minimize Heartbreak" />
											</div>
										</a>
									</figure>
									<!--./ thumb-wrap -->
								</div>
								<!--./ entry-thumb -->
								<div class="content-entry-wrap">
									<h3 class="entry-title">
										<a href="themes/index.html">
											<?php echo$result['title']?>
										</a>
									</h3>

									<!--./ entry-title -->
									<div class="entry-meta-content">
										<div class="entry-author">
											By - <a href="author/jonathon-doe/index.html"><?php echo$result['blog_by']?> </a>
										</div>
										<!--./ entry-date -->
										<div class="entry-date">
											<time datetime="2021-02-03"><?php echo$result['date_time']?></time>
										</div>
										<!--./ entry-date -->
									</div>
									<!--./ entry-meta-content -->
									<div class="entry-content">
										<div class="entry-summary">
											    <p><?php echo$result['description']?></p>
										</div>
										<div class="read-more-share">
											<div class="read-more-wrap">
												<a class="read-more" href="blog_details.php?id=<?php echo$result['id']?>">Read More</a>
											</div>
										</div>
									</div>
									<!--./ entry-content -->
								</div>
								<!--./ content-entry-wrap -->
							</article>
					</div>
					<!--/#frontpage-slide -->
				</div>
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
				    <img class="post-card-image"  srcset="admin/<?php echo$result['image']?>" 
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
				    <img class="author-profile-image" src="assets/images/author.jpeg" alt="Jonathon Doe " />
				</a>
			</div>
			<div class="info">
				<div class="author-name">
					<span><a href="author/navjeet/index.php"><?php echo$result['blog_by']?> </a></span>
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

<!--~./ end main wrapper ~-->
<?php include "footer.php" ?>