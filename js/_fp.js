var BrowserDetect = { 
  init: function () { 
  this.browser = this.searchString(this.dataBrowser) || "An unknown browser"; 
  this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "an unknown version"; 
  this.OS = this.searchString(this.dataOS) || "an unknown OS"; 
  }, 
  searchString: function (data) { 
  for (var i=0;i<data.length;i++) { 
  var dataString = data[i].string; 
  var dataProp = data[i].prop; 
  this.versionSearchString = data[i].versionSearch || data[i].identity; 
  if (dataString) { 
  if (dataString.indexOf(data[i].subString) != -1) 
  return data[i].identity; 
  } 
  else if (dataProp) 
  return data[i].identity; 
  } 
  }, 
  searchVersion: function (dataString) { 
  var index = dataString.indexOf(this.versionSearchString); 
  if (index == -1) return; 
  return parseFloat(dataString.substring(index+this.versionSearchString.length+1)); 
  }, 
  dataBrowser: [ 
  { 
  string: navigator.userAgent, 
  subString: "Chrome", 
  identity: "Chrome" 
  }, 
  { string: navigator.userAgent, 
  subString: "OmniWeb", 
  versionSearch: "OmniWeb/", 
  identity: "OmniWeb" 
  }, 
  { 
  string: navigator.vendor, 
  subString: "Apple", 
  identity: "Safari", 
  versionSearch: "Version" 
  }, 
  { 
  prop: window.opera, 
  identity: "Opera", 
  versionSearch: "Version" 
  }, 
  { 
  string: navigator.vendor, 
  subString: "iCab", 
  identity: "iCab" 
  }, 
  { 
  string: navigator.vendor, 
  subString: "KDE", 
  identity: "Konqueror" 
  }, 
  { 
  string: navigator.userAgent, 
  subString: "Firefox", 
  identity: "Firefox" 
  }, 
  { 
  string: navigator.vendor, 
  subString: "Camino", 
  identity: "Camino" 
  }, 
  {  
  /* For Newer Netscapes (6+) */ 
  string: navigator.userAgent, 
  subString: "Netscape", 
  identity: "Netscape" 
  }, 
  { 
  string: navigator.userAgent, 
  subString: "MSIE", 
  identity: "Internet Explorer", 
  versionSearch: "MSIE" 
  }, 
  { 
  string: navigator.userAgent, 
  subString: "Gecko", 
  identity: "Mozilla", 
  versionSearch: "rv" 
  }, 
  {  
  /* For Older Netscapes (4-) */ 
  string: navigator.userAgent, 
  subString: "Mozilla", 
  identity: "Netscape", 
  versionSearch: "Mozilla" 
  } 
  ], 
  dataOS : [ 
  { 
  string: navigator.platform, 
  subString: "Win", 
  identity: "Windows" 
  }, 
  { 
  string: navigator.platform, 
  subString: "Mac", 
  identity: "Mac" 
  }, 
  { 
  string: navigator.userAgent, 
  subString: "iPhone", 
  identity: "iPhone/iPod" 
  }, 
  { 
  string: navigator.platform, 
  subString: "Linux", 
  identity: "Linux" 
  } 
  ] 

}; 
BrowserDetect.init(); 

// document.getElementById("name").innerHTML=BrowserDetect.browser; 
// document.getElementById("version").innerHTML=BrowserDetect.version; 
// document.getElementById("os").innerHTML=BrowserDetect.OS 

(function( $ ){
    $.fn.fp = function(data) {

        fp_speed = 550
        fp_delay = true
        fp = this
        fp_move = fp.find('.move')
        sections = fp.find('.section')
        resize()

        $('body').css({overflow: 'hidden'})

        if (window.location.hash && $(window.location.hash).length) {
            section_active = $(window.location.hash)
            sections.removeClass('active')
            section_active.addClass('active')
        } else if (fp.find('.section.active').length) {
            section_active = fp.find('.section.active')
            location.hash = section_active.attr('id')
        } else {
            section_active = sections.eq(0).addClass('active')
            location.hash = section_active.attr('id')
        }
        moveTo()

        
        $(window).resize(function(){
            resize()
            moveTo()
        })

        function resize () {
            var window_height = $(window).height()
            fp.height(window_height)
            sections.height(window_height)
        }

        function move_up () {
            if (section_active.prev().length && fp_delay) {
                next_section = section_active.prev()
                move()
            }
        }

        function move_down () {
            if (section_active.next().length && fp_delay) {
                next_section = section_active.next()
                move()
            }
        }

        function move () {
            section_active.removeClass('active')
            next_section.addClass('active')
            section_active = next_section
            next_section = false

            let temp = section_active.attr('id')
            // Прятать шапку сайта
            if (data.before.hidden) {
                if (temp in data.before.header.hidden) { $("header").css({top: "-75px"}) }
                else { $("header").css({top: 0}) }
            }
            // end
            // Изменение цветовой схемы правого меню
            if (data.before.myMenu) {
                if (temp in data.before.myMenu.darkClass) {
                    if (data.before.myMenu.darkClass[temp]) { $("#myMenu").addClass("dark") }
                    else { $("#myMenu").removeClass("dark") }
                }
            }
            // end
            // Прятать правое меню
            if (data.before.myMenu) {
                if (temp in data.before.myMenu.hidden) { $("#myMenu").removeClass("min") }
                else { $("#myMenu").addClass("min") }
            }
            // end
            // Выделяем активный пункт меню
            if (data.before.myMenu) {
                if (temp in data.before.myMenu.active) { $("#myMenu li").removeClass("active"); $("#myMenu li[data-section='" + data.before.myMenu.active[temp] + "']").addClass("active") }
                else { $("#myMenu li").removeClass("active") }
            }
            // end

            moveTo()
        }

        function moveTo () {
            if (fp_delay) {
                fp_delay = false
                let temp = section_active.attr('id')
                // Изменение цветовой схемы шапки сайта
                if (temp in data.before.header.darkClass) {
                    if (data.before.header.darkClass[temp]) { $("header").addClass("dark") }
                    else { $("header").removeClass("dark") }
                }
                // end
                // Добавлять в шапку класс dom_dommenu для дополнительной менюшки
                if (data.before.header.dopmenu && temp in data.before.header.dopmenu) {
                    $("header").addClass("dom_dommenu")
                    
                } else {
                    $("header").removeClass("dom_dommenu")
                }
                // end
                // Прятать шапку сайта
                if (data.before.header.hidden) {
                    if (temp in data.before.header.hidden) { $("header").css({top: "-75px"}) }
                    else { $("header").css({top: 0}) }
                }
                // end
                // Изменение цветовой схемы правого меню
                if (data.before.myMenu) {
                    if (temp in data.before.myMenu.darkClass) {
                        if (data.before.myMenu.darkClass[temp]) { $("#myMenu").addClass("dark") }
                        else { $("#myMenu").removeClass("dark") }
                    }
                }
                // end
                // Прятать правое меню
                if (data.before.myMenu) {
                    if (temp in data.before.myMenu.hidden) { $("#myMenu").removeClass("min") }
                    else { $("#myMenu").addClass("min") }
                }
                // end
                // Выделяем активный пункт меню
                if (data.before.myMenu) {
                    if (temp in data.before.myMenu.active) { $("#myMenu li").removeClass("active"); $("#myMenu li[data-section='" + data.before.myMenu.active[temp] + "']").addClass("active") }
                    else { $("#myMenu li").removeClass("active") }
                }
                // end
                let offset = section_active.position();
    
                // anime({
                //     targets: '#fp .move',
                //     translateY: -offset.top,
                //     easing: 'easeOutExpo'
                // })
    
                let fp_move_top2 = section_active.index()*$(window).height()
                // fp_move.transition({ y: -fp_move_top2 }, fp_speed, function () {
                //     location.hash = section_active.attr('id')
                //     $(document).scrollTop(fp_move_top2)
                //     fp_delay = true
                // });

                console.log(BrowserDetect.browser)

                fp_move.css({
                    '-webkit-transform': 'translate3d(0, ' + -fp_move_top2 + 'px, 0px)',
                    '-webkit-transition': '-webkit-transform .55s linear',
                });
                setTimeout(function(){
                    location.hash = section_active.attr('id')
                    $(document).scrollTop(fp_move_top2)
                    fp_delay = true
                }, 550);
    
                // fp_move.stop().animate({top: -offset.top}, fp_speed, function() {
                    // location.hash = section_active.attr('id')
                // })
                return false;
            }
        }

        $('#myMenu li a').on('click', function () {
            let temp = $(this).parent().attr('data-section')
            section_active = $('#'+temp)
            moveTo()
            return false
        })

        var indicator = new WheelIndicator({
            elem: document.querySelector('#fp'),
            callback: function(e){
                if (e.direction == 'up') {
                    move_up()
                } else if (e.direction == 'down') {
                    move_down()
                }
            }
        });

        fp.swipe( {
            swipeDown: function(event, direction, distance, duration, fingerCount, fingerData) {
                move_up()
            },
            swipeUp: function(event, direction, distance, duration, fingerCount, fingerData) {
                move_down()
            },
            threshold:25,
            preventDefaultEvents: false
        });
    }
})( jQuery );
