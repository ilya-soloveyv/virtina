<?php $this->load->view('basic/header'); ?>

<div id="encyclopedia">
	<?php $this->load->view('article_sidebar'); ?>
	<div class="article">
		<?php
			foreach ($this->data['article'] as $k => $v) {
				echo '
					<div class="item"><a href="/blog/'.$v->sArticleAlias.'"><div style="background-image: url(\'/images/article/'.$v->iArticleID.'/'.$v->sArticleImg.'\');"></div><span>'.$v->sArticleTitle.'</span><span class="cat">'.$v->sArticleCatTitle.'</span></a></div>
				';
			}
		?>
	</div>
	<div style="clear: both;"></div>
</div>

<?php $this->load->view('basic/footer'); ?>