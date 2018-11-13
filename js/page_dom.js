// Новый прелоадер
var imgs = document.getElementsByTagName("img");
var preloader_item = document.getElementsByClassName("preloader2_item");
var countImg = imgs.length;
var count = 0;
for (var i = 0; i < imgs.length; i++) {
    image_clone = new Image();
    image_clone.onload = preloader2_image_loaded;
    image_clone.onerror = preloader2_image_loaded;
    image_clone.src = imgs[i].src;
}
function preloader2_image_loaded () {
    var proc = Math.floor((100/countImg*count)/10);
    for (i2 = 0; i2 <= proc; i2++) {
        if (!preloader_item[i2].classList.contains('active')) {
            preloader_item[i2].classList.add('active')
        }        
    }
    count++
    if (count == countImg) {
        setTimeout('document.getElementById("preloader2").classList.add("theend")', 500)
        setTimeout('document.getElementById("preloader2").remove()', 1000)
    }
}






var fp = new fullpage('#fp', {
    licenseKey: 'OPEN-SOURCE-GPLV3-LICENSE',
    verticalCentered: false,
    scrollingSpeed: 550,
    anchors: ['dom1', 'dom2', 'dom3', 'dom4', 'dom5', 'dom6', 'dom7', 'dom8'],
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








window.addEventListener('hashchange', function(e) {
    if (location.hash == '#dom2') {

    } else if (location.hash == '#dom7') {
        $("#fp .dom7 .data .slider .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .point").css({
            display: "none",
            left: 0,
            top: 0
        })
        position_point()
    }
})




$(document).on("mouseover", "ul#myMenu.min", function(){
    $(this).removeClass("min").addClass("open_with_min");
}).on("mouseleave", "ul#myMenu.open_with_min", function(){
    $(this).addClass("min").removeClass("open_with_min");
});

function resizeNight()
{
    var dw = $("#fp .dom1 .day").width();
    var dh = $("#fp .dom1 .day").height();
    $("#fp .dom1 .night_bg .night").width(dw).height(dh);
}


function initNigth () {
    $("#fp .dom1 .night_bg").show().animate({width: "50%"}, 500, function(){
        window.addEventListener('mousemove', function(e) {
            $(".night_bg").css({width:e.pageX+"px"});
        }, false);
    });
}

$(document).ready(function(){
    resizeNight();
    setTimeout('initNigth()', 500);
    // $('.dom1').mouseenter(function(){
        // console.log('Вы поместили курсор в зону элемента foo.');
    // });
}).on("click", ".section.dom1", function(e){
    // var offset = $(this).offset();
    // var relativeX = (e.pageX - offset.left);
    // var relativeY = (e.pageY - offset.top);
    // $(".night_bg").stop().animate({width:relativeX+"px"},150);
    // alert("X: " + relativeX + "  Y: " + relativeY);
});
$(window).resize(function(){
    resizeNight();
});

var ww = $(window).width();

$("#fp .dom1 .night_bg").resizable({
    containment: "#fp .dom1",
    minWidth: 30,
    maxWidth: ww-30,
    handles: { 'e, w': '.st' },
    resize: function(event, ui) {
        ui.size.height = ui.originalSize.height;
    },
    stop: function(event, ui) {
        var w = ui.size.width;
        hideMyMenu(w);
        $("#fp .dom1 .night_bg .st").animate({opacity: 0}, 500);
    }
});

function hideMyMenu(w = false) {
    var ww = $(window).width();
    var wr = ww-w;
    if(ww > 757)
    {
        if(wr < 300) { $("#myMenu").hide(); }
        else { $("#myMenu").show(); }
    }
    else
    {
        if(wr < 50) { $("#myMenu").hide(); }
        else { $("#myMenu").show(); }
    }
}






$("#fp .dom3 .data .owl-carousel").owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    autoplay: false,
    nav: true,
    onInitialized: function(){
        var iDomID = $("#fp .dom3 .data .owl-carousel").attr("data-iDomID");
        var sColorStyle = "color" + $("#fp .dom3 .data .owl-carousel").attr("data-sColorStyle");
        var dom_section_3 = JSON.parse($("#fp .dom3 .data .owl-carousel").attr("data-dom_section_3"));
        $("#fp .dom3 .data .owl-carousel .owl-dots .owl-dot").each(function(i,v){
            var _this = this;
            $.each(dom_section_3[i]['color'], function( k2, v2 ) {
                $(_this).append("<img src='/images/dom/"+iDomID+"/dom3/color"+k2+"/"+v2+"' class='color"+k2+"'>");
            });
        });
        $("#fp .dom3 .data .owl-carousel img").hide();
        $("#fp .dom3 .data .owl-carousel img."+sColorStyle).show();
    }
});

$(document).on("click", "#fp .dom3 .data ul.color li", function(){
    sColorStyle = $(this).attr('data-color');
    $("#fp .dom3 .data ul.color li").removeClass("active");
    $(this).addClass("active");
    $("#fp .dom3 .data").removeClass("color1").removeClass("color2").removeClass("color3").addClass(sColorStyle);

    $("#fp .dom3 .data .owl-carousel img").hide();
    $("#fp .dom3 .data .owl-carousel img."+sColorStyle).show();
});


$("#fp .dom4 .data .owl-carousel").owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    autoplay: false,
    nav: false,
    onInitialized: function(){
        var iDomID = $("#fp .dom4 .data .owl-carousel").attr("data-iDomID");
        var sColorStyle = "color" + $("#fp .dom4 .data .owl-carousel").attr("data-sColorStyle");
        var dom_section_4 = JSON.parse($("#fp .dom4 .data .owl-carousel").attr("data-dom_section_4"));
        $("#fp .dom4 .data .owl-carousel .owl-dots .owl-dot").each(function(i,v){
            var _this = this;
            $.each(dom_section_4[i]['color'], function( k2, v2 ) {
                $(_this).append("<img src='/images/dom/"+iDomID+"/dom4/color"+k2+"/"+v2+"' class='color"+k2+"'>");
            });
        });
        $("#fp .dom4 .data .owl-carousel img").hide();
        $("#fp .dom4 .data .owl-carousel img."+sColorStyle).show();
    }
});

$(document).on("click", "#fp .dom4 .data ul.color li", function(){
    sColorStyle = $(this).attr('data-color');
    $("#fp .dom4 .data ul.color li").removeClass("active");
    $(this).addClass("active");
    $("#fp .dom4 .data").removeClass("color1").removeClass("color2").removeClass("color3").addClass(sColorStyle);

    $("#fp .dom4 .data .owl-carousel img").hide();
    $("#fp .dom4 .data .owl-carousel img."+sColorStyle).show();
});





function init_dom5 () {
    if($(window).width() <= 1100 || $(window).height() <= 610)
    {
        // $("#fp .dom5 .data .item").each(function(){
            // $("#fp .dom5 .data .owl-carousel").append(this);
        // });
        $("#fp .dom5 .data .owl-carousel").show().owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            autoplay: false,
            nav: false,
            responsive : {
                0 : {
                    items: 1
                },
                768 : {
                    items: 2
                }
            }
        });
        $("#fp .dom5 .data .setka").hide()
        
    }
    else {
        $("#fp .dom5 .data .owl-carousel").hide()
        $("#fp .dom5 .data .setka").show()
    }
}
init_dom5()
$(window).resize(function(){
    init_dom5()
})











$(document).on("click", "#fp .dom6 .data .slider .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .img .zoom", function(){
    var i = $(this).parent().find("ul li:visible").index();
    $("#room_zoom .carousel-inner").html(null);
    $(this).parent().find("ul li").each(function(i2,v2){
        var src = $(this).find("img").attr("src");
        var active = (i2 == i) ? " active" : "";
        $("#room_zoom .carousel-inner").append('<div class="carousel-item'+active+'"><img class="d-block w-100" src="'+src+'"></div>');
    });
    // var img = $(this).parent().find("ul li:visible img").clone();
    // console.log(img);
    $("#room_zoom").modal();
    // $("#room_zoom").modal().find('.modal-dialog').html(img);
    return false;
});

var owl_dom6 = $("#fp .dom6 .owl-carousel");
owl_dom6.owlCarousel({
    items: 1,
    dots: true,
    loop: true,
    autoplay: false,
    nav: false,
    onInitialized: function () {
        // $("#fp .dom6 .desc").jScrollPane({
        //     contentWidth: '0px'
        // });
    }
});
owl_dom6.on('changed.owl.carousel', function(event) {
    $("#fp .dom6 .data .menu ul li").removeClass("active");
    $("#fp .dom6 .data .menu ul li").eq(event.page.index).addClass("active");
})
$(document).ready(function(){

}).on("click", "#fp .dom6 .data .slider .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .img ul li img", function(){
    $(this).parents(".img").find('.next').click();
}).on("click", "#fp .dom6 .data .slider .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .img .next", function(){
    if($(this).parent().find('ul li:visible').next().length)
    {
        $(this).parent().find('ul li:visible').hide().next().show();
    }
    else
    {
        $(this).parent().find('ul li:visible').hide();
        $(this).parent().find('ul li:first').show();
    }
    
}).on("click", "#fp .dom6 .data .slider .owl-carousel .owl-stage-outer .owl-stage .owl-item .item .img .prev", function(){
    if($(this).parent().find('ul li:visible').prev().length)
    {
        $(this).parent().find('ul li:visible').hide().prev().show();
    }
    else
    {
        $(this).parent().find('ul li:visible').hide();
        $(this).parent().find('ul li:last').show();
    }
    
}).on("click", "#fp .dom6 .data .menu ul li", function(){
    $("#fp .dom6 .data .menu ul li").removeClass("active");
    $(this).addClass("active");
    owl_dom6.trigger('to.owl.carousel', $(this).index());
    console.log($(this).index());
}).on("click", ".open_modal_dom6", function(){
    $("*").tooltip('hide');
    $("#modal_dom6").remove();
    var p = {};
        p.iRoomID = $(this).attr("data-iRoomID");
    $.ajax({
        url: "/catalog/dom_section_6",
        type: "POST",
        data: p
    }).done(function(data) {
        $('body').append(data)
        var modal_dom6_owl = $("#modal_dom6 .owl-carousel");
        modal_dom6_owl.owlCarousel({
            items: 1,
            dots: true,
            loop: true,
            autoplay: false,
            nav: true,
            onInitialized: function() {
                $("#modal_dom6").modal();
                $("#modal_dom6 .l .owl-carousel .owl-nav .owl-prev").addClass('slide_prev');
                $("#modal_dom6 .l .owl-carousel .owl-nav .owl-next").addClass('slide_next');
                $("#modal_dom6 .l .owl-carousel .owl-stage-outer .owl-stage .owl-item img").click(function(){
                    modal_dom6_owl.trigger('next.owl.carousel');
                });
                $("#modal_dom6 .zoom").click(function(){                                        
                    var temp = $(this).parent().find(".l .owl-carousel .owl-stage-outer .owl-stage .owl-item:not('.cloned')").clone();
                    var i = 0;

                    $("#room_zoom .carousel-inner").html(null);

                    $(temp).each(function(i2,v2){
                        var active = "";
                        if($(v2).hasClass("active")) { active = " active"; }
                        var src = $(this).find("img").attr("src");
                        $("#room_zoom .carousel-inner").append('<div class="carousel-item'+active+'"><img class="d-block w-100" src="'+src+'"></div>');
                    })
                    $("#room_zoom").modal();

                    // // var img = $(this).parent().find("ul li:visible img").clone();
                    // // console.log(img);
                    // $("#room_zoom").modal();
                    // 
                    return false;
                });
            }
        });
    });
    return false;
});








$(document).ready(function(){
    // $(".point[data-iroomid='35']").click();
    if ($(window).width() > 757) {
        $('*[data-toggle="tooltip"]').tooltip();
    }    
})
var owl = $("#fp .dom7 .owl-carousel");
owl.owlCarousel({
    items: 1,
    dots: true,
    loop: false,
    autoplay: false,
    nav: false
});
owl.on('changed.owl.carousel', function(event) {
    $("#fp .dom7 .data .menu ul li").removeClass("active");
    $("#fp .dom7 .data .menu ul li").eq(event.page.index).addClass("active");
});
owl.on('resized.owl.carousel', function(event) {
    position_point()
});

$(document).on("click", "#fp .dom7 .data .menu ul li", function(){
    $("#fp .dom7 .data .menu ul li").removeClass("active");
    $(this).addClass("active");
    owl.trigger('to.owl.carousel', $(this).index());
});


function position_point()
{
    // console.log('ready');
    $("img.image-dom7").each(function(){
        // console.log('- for img');
        var image = this;
        var src = $(image).attr('src');
        // console.log("- image src="+src);
        var img = new Image();
        img.onload = function () {
            var image_pos = $(image).position();
            // console.log("image_pos_left="+image_pos.left);
            var w = $(image).width();
            var h = $(image).height();
            // console.log("img w="+w+" h="+h);
            $(image).parent().find('.point').each(function(){
                var top = $(this).attr("data-top");
                var left = $(this).attr("data-left");
                var point_top = (h/100*top);
                var point_left = ((w/100*left)+(image_pos.left));
                // console.log("point top="+point_top+" left="+point_left);
                $(this).css({left:point_left+"px", top:point_top+"px"}).fadeIn(250);
            });
        }
        img.src = src;
    });
}
