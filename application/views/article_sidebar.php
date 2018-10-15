<div class="sidebar">
	<ul class="menu">
		<li class="all"><a href="/blog">Все статьи</a></li>
		<li class="pop"><a href="/blog/popular">Популярное</a></li>
	</ul>
	<ul class="menu2">
		<?php
			foreach ($this->data['article_cat'] as $k => $v) {
				echo '<li><a href="/blog/'.$v->sArticleCatAlias.'">'.$v->sArticleCatTitle.'</a></li>';
			}
		?>
	</ul>
	<ul class="last">
		<div class="title">Последние статьи</div>
		<?php
			foreach ($this->data['article_last'] as $k => $v) {
				echo '<li><a href="/blog/'.$v->sArticleAlias.'"><div style="background-image: url(\'/images/article/'.$v->iArticleID.'/'.$v->sArticleImg.'\');"></div><span>'.$v->sArticleTitle.'</span></a></li>';
			}
		?>
	</ul>
</div>