<?php $this->load->view('basic/header'); ?>

<div id="contact">
	<ul class="line">
	    <li></li>
	    <li></li>
	    <li></li>
	    <li></li>
	</ul>
	<div class="data">
		<div class="text">
			<ul>
				<li>
					<a href="#" class="zay" data-toggle="modal" data-target="#message">Отправить запрос</a>
				</li>
				<li>
					<div class="title">Адрес</div>
					<div class="desc">Москва, Спартаковская пл. д.14 стр. 1</div>
				</li>
				<li>
					<div class="title">Телефон</div>
					<div class="desc">+7 (499) 391-91-97
						<div class="messenger">
							<a href="https://api.whatsapp.com/send?phone=79253919197&text=%D0%97%D0%B4%D1%80%D0%B0%D0%B2%D1%81%D1%82%D0%B2%D1%83%D0%B9%D1%82%D0%B5" target="_blank"><img src="/images/whatsapp.svg" alt="whatsapp"></a>
							<a href="viber://add?number=79253919197"><img src="/images/viber.svg" alt="viber"></a>
							<a href="http://t.me/virtina"><img src="/images/Telegram_logo.svg" alt="telegram"></a>						
						</div>
					</div>
				</li>
				<li>
					<div class="title">Email</div>
					<div class="desc">hello@virtina.ru</div>
				</li>
			</ul>
		</div>
		<div id="map" class="map"></div>
	</div>
</div>

<?php $this->load->view('basic/footer'); ?>