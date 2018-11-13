var fp = new fullpage('#fp', {
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    verticalCentered: false,
    scrollingSpeed: 550,
    anchors: ['catalog1', 'catalog2'],
    fixedElements: '.modal, .tingle-modal',
    onLeave: function(index, nextIndex, direction) {

        var section = $("."+nextIndex.anchor)

        var headerDark = Number(section.attr('data-headerDark'))
        var hiddenHeader = Number(section.attr('data-hiddenHeader'))
        var menuDark = Number(section.attr('data-menuDark'))
        var hiddenMenu = Number(section.attr('data-hiddenMenu'))
        var menuActive = Number(section.attr('data-menuActive'))

        if (headerDark) {
            $("header").addClass("dark")
        } else {
            $("header").removeClass("dark")
        }

        if (hiddenHeader) {
            $("header").css({top: "-75px"})
        } else {
            $("header").css({top: 0})
        }

        if (menuDark) {
            $("#myMenu").addClass("dark")
        } else {
            $("#myMenu").removeClass("dark")
        }

        if (hiddenMenu) {
            $("#myMenu").addClass("min")
        } else {
            $("#myMenu").removeClass("min")
        }

    }
});

var fp_scroll_check = true;
var indicator = new WheelIndicator({
    elem: document.querySelector('#fp'),
    callback: function(e){
        if (fp_scroll_check) {
            if (e.direction == 'up') {
                fp_scroll_check = false;
                setTimeout("fp_scroll_check = true", 750);
                fp.moveSectionUp();
                return false;
            } else if (e.direction == 'down') {
                fp_scroll_check = false;
                setTimeout("fp_scroll_check = true", 750);
                fp.moveSectionDown();
                return false;
            }    
        }
    }
});

var fp_swipe_check = true;
$('#fp').swipe( {
    swipe: function(event, direction, distance, duration, fingerCount, fingerData) {
        console.log(fp_swipe_check);
        if (fp_swipe_check) {
            if (direction == 'down') {
                fp_swipe_check = false;
                setTimeout("fp_swipe_check = true", 750);
                fp.moveSectionUp();
            } else if (direction == 'up') {
                fp_swipe_check = false;
                setTimeout("fp_swipe_check = true", 750);
                fp.moveSectionDown();
            }
        }
    },
    threshold:0,
    preventDefaultEvents: false
});





var owl = $('.catalog2 .r .owl-carousel');
owl.owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    nav: false
});
owl.on('changed.owl.carousel', function(event) {
    $("#fp .catalog2 .l ul li a").removeClass("active");
    $("#fp .catalog2 .l ul li a").eq(event.page.index).addClass("active");
});
$(document).on("click", "#fp .catalog2 .l ul li a", function(){
    var t = $(this).parent().index();
    owl.trigger('to.owl.carousel', t);
    return false;
});

$("header").addClass("dark");
new VirtinaHeader().hideHeader(false);
$("#myMenu").addClass("dark");