<?php $this->load->view('basic/header'); ?>

<div id="news">
	<div class="l">
        <div class="owl-carousel">
        </div>
	</div>
	<div class="r">
		<ul>
			<?php
				for ($i=0; $i < 10; $i++) { 
					?>
						<li<?php if($i == 0) {echo ' class="active"';}
							if($i==0){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							if($i==1){echo ' data-imgs="2.jpeg,2.jpeg,2.jpeg,2.jpeg"';}
							if($i==2){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							if($i==3){echo ' data-imgs="2.jpeg,2.jpeg,2.jpeg,2.jpeg"';}
							if($i==4){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							if($i==5){echo ' data-imgs="2.jpeg,2.jpeg,2.jpeg,2.jpeg"';}
							if($i==6){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							if($i==7){echo ' data-imgs="2.jpeg,2.jpeg,2.jpeg,2.jpeg"';}
							if($i==8){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							if($i==9){echo ' data-imgs="2.jpeg,2.jpeg,2.jpeg,2.jpeg"';}
							if($i==10){echo ' data-imgs="1.jpeg,1.jpeg,1.jpeg"';}
							?>>
							<div class="img" style="background-image: url('/images/news/1.jpeg');"></div>
							<div class="name">
								Рекламная площадка как побочный PR-эффект
								<span>21.08.2017</span>
							</div>
							<div class="desc">
								<p>Не факт, что потребление достижимо в разумные сроки. Размещение восстанавливает из ряда вон выходящий рекламный макет. VIP-мероприятие ускоряет сублимированный бизнес-план. Воздействие на потребителя специфицирует ребрендинг. Более того, потребительская культура ускоряет целевой трафик.</p>
								<p>Воспитание, конечно, усиливает фирменный стиль. Стимулирование сбыта интегрирует коллективный страх. Маркетингово-ориентированное издание недостижимо. Восприятие абсурдно отталкивает девиантный маркетинг.</p>
								<p>Опрос восстанавливает conversion rate. Точечное воздействие без оглядки на авторитеты амбивалентно. Восприятие марки традиционно притягивает экспериментальный медиабизнес.</p>
							</div>
						</li>
					<?php
				}
			?>
		</ul>
	</div>
</div>

<?php $this->load->view('basic/footer'); ?>