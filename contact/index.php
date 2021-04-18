<?php include "header.php"; ?>
<div class="main-wrapper mrt-90 mrb-105">
	<div class="container pd-0">
		<div class="row justify-content-center">
			<div class="col-lg-12">
				<div class="main-wrapper-content style-one">
					<main class="site-main">
						<article class="post style-four post-full post no-image page no-image">
							<div class="entry-header text-center">
								<h2 class="mrb-20 w-700">Contact<div class="small-border"></div></h2>
							</div>



							<div class="entry-content">
								<div class="entry-summary">
									<div class="row justify-content-center">
										<div class="col-lg-8">
											<div class="contact-form">
											    <form class="row" action="contact_insert.php" method="post">
											        <div class="col-lg-12">
											            <div class="form-group">
											                <div class="input-wrapper">
											                	<label>Your Name</label>
											                    <input  type="text" name="user" class="form-control" required>
											                </div>
											            </div>
											        </div>
											        <div class="col-lg-12">
											            <div class="form-group">
											                <div class="input-wrapper">
											                	<label>Email Address</label>
											                    <input type="email" name="email" class="form-control" required>
											                </div>
											            </div>
											        </div>
											        <div class="col-lg-12">
											            <div class="form-group">
											                <div class="input-wrapper">
											                	<label>Subject</label>
											                    <input name="subject" type="text" class="form-control" required>
											                </div>
											            </div>
											        </div>
											        <div class="col-lg-12">
											            <div class="form-group">
											                <div class="input-text-form">
											                	<label>Message</label>
											                    <textarea class="form-control" name="message" cols="10" rows="10" equired></textarea>
											                </div>
											            </div>
											        </div>
											        <div class="col-lg-12">
											            <div class="signin-btn mb-30 text-center">
											                <button type="submit" class="btn btn-primary btn-cus-siz mt-20">Send Message</button>
											            </div>
											        </div>
											    </form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</article>
					</main>
				</div>
			</div>
		</div>
	</div>
</div>



<?php include 'footer.php'; ?>