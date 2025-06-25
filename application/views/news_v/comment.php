<?php $settings = get_settings(); ?>
<div class="ori-comment-list-wrap ul-li-block">
    <h3>Yorumlar</h3> <!-- Fixed closing tag for <h3> -->
    <ul>
        <?php if (!empty($comments)) { ?>
            <?php foreach ($comments as $comment) { ?> <!-- Loop through each comment -->
                <li>
                    <div class="ori-comment-item d-flex pera-content">
                        <div class="ori-comment-img">
                            <img src="<?php echo base_url('')?>assets/img/blog/bca1.png" alt="">
                        </div>
                        <div class="ori-comment-text">
                            <div class="author-name-date">
                                <?php echo htmlspecialchars($comment->name); ?> / 
                                <span>
                                    <?php
                                    error_reporting(0);
                                    setlocale(LC_ALL, 'tr_TR.UTF-8');
                                    echo strftime('%e %b %Y', strtotime($comment->createdAt));
                                    ?>
                                </span>
                            </div>
                            <p><?php echo htmlspecialchars($comment->message); ?></p>
                            <div class="ori-like-reply text-uppercase">
                                <!-- Like/Reply buttons or text can go here -->
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?> <!-- Close foreach loop -->
        <?php } else { ?>
            <li><p>No comments found.</p></li> <!-- Optional: Show message if no comments -->
        <?php } ?> <!-- Close if statement -->
    </ul>
</div>

				<div class="ori-single-comment-form pera-content">
				<h3>Yorum yap</h3>
				<p>Burdan Yorum yapabilirsiniz</p>
   <form id="commentForm"  action="<?php echo base_url("yorumla"); ?>" method="post">
					<div class="row">
						<div class="col-lg-6">
							<label>Name</label>
					   <input type="text" name="name" placeholder="İsim*" required="required">
						</div>
						<div class="col-lg-6">
							<label>Email</label>
				<input type="email" name="email" placeholder="E-Posta*" required="required">
						</div>
						<div class="col-lg-12">
							<label>Message</label>
						  <?php $this->load->view("news_v/textarea"); ?>
						</div>
						<div class="col-lg-12">
							<div class="ori-submit-btn text-center">
							  <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
            <input type="hidden" name="news_id" value="<?php echo $news->id; ?>">
            <button type="submit" class="tp-btn-theme w-100">
                <span>Yorum Gönder</span>
            </button>
							</div>
						</div>
					</div>
				</form>
			</div>
