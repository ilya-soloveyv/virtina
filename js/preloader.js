var images = document.images;
var images_total_count = document.images.length;
var images_loader_count = 0
var preloader = document.getElementById('preloader')
var perc_display = document.getElementById("full")
var loader = document.getElementById("loader")

if (preloader != null) {
	if (getCookie("preloader") != 1) {
		for (var i = 0; i < images_total_count; i++) {
			image_clone = new Image();
			image_clone.onload = image_loaded;
			image_clone.onerror = image_loaded;
			image_clone.src = images[i].src;
		}	
	}
	else {
		preloader.classList.add('done');
		document.body.classList.remove('hidden');
	}

	function getCookie(name) {
		var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : undefined;
		}

		function setCookie(name, value, options) {
		options = options || {};
		
		var expires = options.expires;
		
		if (typeof expires == "number" && expires) {
			var d = new Date();
			d.setTime(d.getTime() + expires * 1000);
			expires = options.expires = d;
		}
		if (expires && expires.toUTCString) {
			options.expires = expires.toUTCString();
		}
		
		value = encodeURIComponent(value);
		
		var updatedCookie = name + "=" + value;
		
		for (var propName in options) {
			updatedCookie += "; " + propName;
			var propValue = options[propName];
			if (propValue !== true) {
			updatedCookie += "=" + propValue;
			}
		}
		
		document.cookie = updatedCookie;
		}

	function image_loaded () {
		images_loader_count++;
		perc_display.style.width = ( ( ( 100 / images_total_count) * images_loader_count ) << 0 ) + '%';
		if ( images_loader_count >= images_total_count ) {
			setTimeout(function () {
				if (!preloader.classList.contains('done')) {
					$(loader).animate({height:2, "margin-top":-1},250, function(){
						$(loader).animate({width:100,"margin-left":-50},250,function(){
							$(loader).find('img').remove();
							$(loader).animate({  textIndent: 90 }, {
									step: function(now,fx) {
										$(this).css('-webkit-transform','rotate('+now+'deg)');
									},
									duration:'slow',
									done: function () {
										var wh = $(window).height();
										$(loader).animate({top: "50%", left: "50%", margin: 0,"margin-top": -1, "margin-left": "-"+(wh/2)+"px", width: wh, opacity: 0}, 250, function(){
											$("#preloader .l, #preloader .r").animate({width:0},250,function(){
												preloader.classList.add('done');
												document.body.classList.remove('hidden');
												// var d = new Date();
												document.cookie = "preloader=1";
											});
										});
									}
							},'linear');
						});
					});
				}
			},1000);
		}
		setInterval("preloader.classList.add('done');document.cookie = 'preloader=1';", 8000);
	}
}