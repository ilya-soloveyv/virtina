var fp = new fullpage('#fp', {
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    verticalCentered: false,
    scrollingSpeed: 550,
    anchors: ['section1', 'section2', 'section3', 'section4', 'section5', 'section6', 'section7', 'section8', 'section9', 'section10'],
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

        $("#myMenu li").not(':eq('+ menuActive+')').removeClass('active')
        $("#myMenu li").eq(menuActive).addClass('active')

    }
});

var indicator = new WheelIndicator({
    elem: document.querySelector('#fp'),
    callback: function(e){
        if (e.direction == 'up') {
            fp.moveSectionUp();
            return false;
        } else if (e.direction == 'down') {
            fp.moveSectionDown();
            return false;
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




/* Слоган на главной страницу */
$(document).ready(function(){
    var h1_pt = $('h1').position();
    $('h1').animate({"opacity":1, "padding-top": "125px"},2000);
});


// section1
$("#fp .section1 .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    nav: false
});


// section 4
var section4_owl_1 = $(".section4 .l .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    nav: false,
    onTranslated: function (event) {
        var iDom = $('#fp .section4 .l .owl-item.active .item').attr('data-iDom');
        // console.log(iDom)
        $("#fp .section4 .r img").each(function(i,v){
            var f = $(v).attr('data-f')
            $(v).attr('src', '/images/index/section4/' + iDom + '/' + f)
        })
        section4_owl_2.trigger('to.owl.carousel',0);
    }
});
var section4_owl_2 = $(".section4 .r .owl-carousel").owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    nav: false
});
$("#fp .section4 .l .owl-carousel .owl-stage-outer .owl-stage .owl-item .item").click(function(){
    section4_owl_1.trigger('next.owl.carousel');
});
$("#fp .section4 .r .owl-carousel .owl-stage-outer .owl-stage .owl-item .item").click(function(){
    section4_owl_2.trigger('next.owl.carousel');
});


// section 5

$("#fp .section5 .steps .steps_progress .items .item").eq(0).find(".full").animate({width: "100%"}, 5000);

var owl = $('.section5 .owl-carousel');
owl.owlCarousel({
    loop: true,
    items: 1,
    nav: false,
    autoplay: true,
    animateOut: 'fadeOut',
    autoplayTimeout: 5000
});

$(document).on('click', '#fp .section5 .steps .nums .item', function() {
    owl.trigger('to.owl.carousel', $(this).index());
})

owl.on('changed.owl.carousel', function(event) {
    var page = event.page.index;
    var desc = $("#fp .section5 .steps .nums .item").eq(page).find(".desc").html();
    $("#fp .section5 .steps .step_desc").html(desc);

    $("#fp .section5 .steps .nums .item").removeClass('active').removeClass('activeDesc');
    for (var i = 0; i <= page; i++)
    {
        $("#fp .section5 .steps .nums .item").eq(i).addClass('active');
    }
    $("#fp .section5 .steps .nums .item").eq(page).addClass('activeDesc');

    $("#fp .section5 .steps .steps_progress .items .item").removeClass('active');
    $("#fp .section5 .steps .steps_progress .items .item .line .full").stop().css({width: 0});
    for (var i = 0; i <= page-1; i++)
    {
        $("#fp .section5 .steps .steps_progress .items .item").eq(i).addClass('active');
    }
    $("#fp .section5 .steps .steps_progress .items .item").eq(i).find(".full").stop().animate({width: "100%"}, 5000);
});

// section 6
var owl_welcome_sec6_l = $(".section6 .l .owl-carousel");
var owl_welcome_sec6_r = $(".section6 .r .owl-carousel");

owl_welcome_sec6_r.owlCarousel({
    items: 1,
    loop: true,
    autoplay: false,
    nav: false,
    onChange: function () {
        // console.log('change');
    }
});

owl_welcome_sec6_l.owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    autoplay: false,
    nav: false,
    onInitialized: function () {
        // $("#fp .section6 .data .l .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .desc").jScrollPane({
        //     contentWidth: '0px'
        // });
    },
    onChange: function (i) {
        // 
        // console.log(i);
        // console.log(i.item.index);
        // owl_welcome_sec6_r.trigger('to.owl.carousel', this.index);
    }
});
$(".section6 .l .owl-carousel .owl-dots .owl-dot").each(function(i,v){
    $(this).html(i+1);
});
// owl_dom6.on('changed.owl.carousel', function(event) {
//     $("#fp .dom6 .data .menu ul li").removeClass("active");
//     $("#fp .dom6 .data .menu ul li").eq(event.page.index).addClass("active");
// })


// $("#fp .section6 .data .l .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .desc").niceScroll({
//     // autohidemode: false,
//     cursorborderradius: 0,
//     emulatetouch: true,
//     touchbehavior: true,
//     cursordragontouch: true,
//     preventmultitouchscrolling: false,
//     scrollStart: function (params) {
//         console.log(params)
//     },
//     scrollEnd: function (params) {
//         console.log(params)
//     }
// });                

// var sly = new Sly("#fp .section6 .l .item .desc .scroll_pane");
// sly.init();

// $('#fp .section6 .l .item .desc .scroll_pane').jScrollPane({
//     contentWidth: '0px'
// });


// $('.section6 .bg').jScrollPane({
//     contentWidth: '0px'
// });


// section 7
$(".section7 .owl-carousel").owlCarousel({
    loop: true,
    navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    responsive : {
        0 : {
            items:1,
            nav: false,
            dots: true
        },
        757 : {
            items:2,
            nav: true,
            dots: false
        },
        1281 : {
            items:3,
            nav: true,
            dots: false
        }
    }
});


// section 8
$(".section8 .owl-carousel").owlCarousel({
    loop: false,
    navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    responsive : {
        0 : {
            nav: false,
            items:1,
            dots: true
        },
        757 : {
            nav: true,
            items:2,
            dots: false
        },
        1000 : {
            nav: true,
            items:3,
            dots: false
        },
        1400 : {
            nav: true,
            items:4,
            dots: false
        }
    }
});
$("#fp .section8 .item").click(function(){
    var p = {};
        p.iStaffID = $(this).attr("data-iStaffID");
    $.ajax({
        url: "/staff/get",
        type: "POST",
        data: p
    }).done(function(data) {
        $("#modal_staff").html(data).modal();
    });
});

// section 9
$(".section9 .articles .owl-carousel").owlCarousel({
    navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    responsive : {
        0 : {
            nav: false,
            items: 1
        },
        758 : {
            nav: true,
            items: 2
        },
        1000 : {
            nav: true,
            items: 3
        },
        1400 : {
            nav: true,
            items: 4
        }
    }
});
$(".section9 .news .owl-carousel").owlCarousel({
    navText: ['<i class="material-icons">keyboard_arrow_left</i>', '<i class="material-icons">keyboard_arrow_right</i>'],
    responsive : {
        0 : {
            nav: false,
            items: 1
        },
        758 : {
            nav: true,
            items: 1
        },
        1000 : {
            nav: true,
            items: 2
        },
        1400 : {
            nav: true,
            items: 3
        }
    }
});

