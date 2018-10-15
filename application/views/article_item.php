<?php $this->load->view('basic/header'); ?>

<div id="encyclopedia">
	<?php $this->load->view('article_sidebar'); ?>
	<div class="article">
		<div class="data">
			<?php
				if(!empty($this->data['article'][0]->sArticleImg))
					echo '<img src="/images/article/'.$this->data['article'][0]->iArticleID.'/'.$this->data['article'][0]->sArticleImg.'" class="img-fluid">';
				echo '<h1>'.$this->data['article'][0]->sArticleTitle.'</h1>';
				echo $this->data['article'][0]->tArticleText;
			?>
		</div>
	</div>
	<div style="clear: both;"></div>
</div>

<?php $this->load->view('basic/footer'); ?>