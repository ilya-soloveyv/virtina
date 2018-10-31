(function( $ ){
    $.fn.fp = function(data) {

        fp_speed = 550
        fp = this
        fp_check = true
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
        })

        function resize () {
            var window_height = $(window).height()
            fp.height(window_height)
            sections.height(window_height)
        }


        function move_up () {
            if (fp_check && section_active.prev().length) {
                next_section = section_active.prev()
                move()
            }
        }

        function move_down () {
            if (fp_check && section_active.next().length) {
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
            if (fp_check) {
                fp_check = false

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

                
                let fp_move_top2 = section_active.index()*$(window).height()
                fp_move.css({
                    '-webkit-transform': 'translate3d(0, ' + -fp_move_top2 + 'px, 0px)',
                    '-webkit-transition': '-webkit-transform .5s',
                });
                setTimeout(function(){
                    location.hash = section_active.attr('id')
                    // $(document).scrollTop('#'+section_active.attr('id'))
                    fp_check = true
                }, fp_speed);

                // let offset = section_active.position()
                // fp_move.animate({top: -offset.top}, fp_speed, function() {
                //     location.hash = section_active.attr('id')
                //     fp_check = true
                // })

                // let offset = section_active.position()
                // fp_move.animate({top: -offset.top}, fp_speed, function() {
                //     location.hash = section_active.attr('id')
                //     fp_check = true
                // })
            }
            return false;
        }

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
// $('#fp').fp()
