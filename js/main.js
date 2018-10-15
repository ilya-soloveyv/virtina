// Клик по иконке поиска в хидере
// $.fn.extend({
//     animateCss: function(animationName, callback) {
//       var animationEnd = (function(el) {
//         var animations = {
//           animation: 'animationend',
//           OAnimation: 'oAnimationEnd',
//           MozAnimation: 'mozAnimationEnd',
//           WebkitAnimation: 'webkitAnimationEnd',
//         };
  
//         for (var t in animations) {
//           if (el.style[t] !== undefined) {
//             return animations[t];
//           }
//         }
//       })(document.createElement('div'));
  
//       this.addClass('animated faster ' + animationName).one(animationEnd, function() {
//         $(this).removeClass('animated faster ' + animationName);
  
//         if (typeof callback === 'function') callback();
//       });
  
//       return this;
//     },
// });  

// var virtina_search_bg = $('#search_bg');
// var virtina_search_bg_w = $('#search_bg .w');
// var virtina_search_bg_w_i = $('#search_bg .w input');
// var virtina_search_bg_r = $('#search_bg .r');

$("header .search .ico, #menu .modal-dialog .modal-content .search .button").click(function(){
    $('.modal:visible').modal('toggle');
    // $('.modal').modal('close')
    $("#search_bg").addClass('open')
    $("#search_bg input").focus()
});
$("#search_bg i").click(function(){
    $("#search_bg").removeClass('open');
});
// setTimeout('$("#search_bg").addClass("open");', 1000)


// $("#search_bg .w i").click(function(){
//     VirtinaSearchClose();
// })

// document.getElementById('search_bg_i').onkeyup = function(e) {
//     if (e.keyCode != 27) {
//         if (!virtina_search_bg_r.is(":visible") && virtina_search_bg_w_i.val().length > 0) {
//             virtina_search_bg_r.css({'display':'flex'}).animateCss('zoomInUp', function() {
    
//             });
//         }
//         else if(virtina_search_bg_w_i.val().length == 0) {
//             virtina_search_bg_r.animateCss('zoomOut', function() {
//                 virtina_search_bg_r.hide();
//             });
//         }
//     }
//     else {
//         VirtinaSearchClose()
//     }
// };

// document.onkeydown = function(e) {
//     e = e || window.event;
//     if (e.keyCode == 27) {
//         VirtinaSearchClose()
//     }
// };

// function VirtinaSearchOpen() {
//     virtina_search_bg.show().animateCss('zoomIn', function() {
//         virtina_search_bg_w.show().animateCss('zoomInUp',function() {
//             virtina_search_bg_w_i.focus();
//         });
//     });
// }

// function VirtinaSearchClose() {
//     if (virtina_search_bg.is(":visible")) {
//         virtina_search_bg.animateCss('zoomOut', function() {
//             virtina_search_bg.hide();
//             virtina_search_bg_w.hide();
//             virtina_search_bg_w_i.val(null);
//         });
//         if (virtina_search_bg_r.is(":visible")) {
//             virtina_search_bg_r.animateCss('zoomOut', function() {
//                 virtina_search_bg_r.hide();
//             });
//         }
//     }
// }



function handle(e) {
  
    var text = e.type +
      ' keyCode=' + e.keyCode +
      ' which=' + e.which +
      ' charCode=' + e.charCode +
      ' char=' + String.fromCharCode(e.keyCode || e.charCode) +
      (e.shiftKey ? ' +shift' : '') +
      (e.ctrlKey ? ' +ctrl' : '') +
      (e.altKey ? ' +alt' : '') +
      (e.metaKey ? ' +meta' : '') + "\n";
  
    if (area.value && Date.now() - lastTime > 250) {
      area.value += new Array(81).join('-') + '\n';
    }
    lastTime = Date.now();
  
    area.value += text;
  
    area.scrollTop = area.scrollHeight;
  
    if (form.elements[e.type + 'Stop'].checked) {
      e.preventDefault();
    }
  }

// Модал меню
var search_input = $("#menu .modal-dialog .modal-content .search input");
$(document).ready(function(){
    $('#menu').on('show.bs.modal', function (e) {
        search_input.stop().css({"right":"-100%"});
        $("header").addClass("open_menu");
    }).on('hide.bs.modal', function (e) {
        $("header").removeClass("open_menu");
    });
});


// Колхоз для включение fullpage при закрытии модальника
$('.modal').on('hidden.bs.modal', function (e) {
    // $.fn.fullpage.setAllowScrolling(true);            
})

// Скрипт скрытия/открытия хидера
class VirtinaHeader {
    hideHeader (status) {
        if (status === true) { $("header").animate({"top": "-75px"},500); }
        else { $("header").animate({"top": 0},500); }
    }
}

/* Правое меню */
$(document).ready(function(){
    var h = $(window).height();
    if(h <= 770)
    {
        $("ul#myMenu").addClass('min');
    }
});
$(document).on("mouseover", "ul#myMenu.min", function(){
    $(this).removeClass("min").addClass("open_with_min");
}).on("mouseleave", "ul#myMenu.open_with_min", function(){
    $(this).addClass("min").removeClass("open_with_min");
});


// Открытие модалок преимущества
$(document).on("click", ".open_modal_preim", function(){
    var p = {};
        p.iPreimID = $(this).attr("data-iPreimID");
    $.ajax({
        url: "/welcome/get_preim",
        type: "POST",
        data: p
    }).done(function(data) {
        $("#modal_preim").html(data).modal();
    });
});







// Свой умный скролл... Пока не особо умный
// $('.mys').each(function(){
    // checkMys(this);
// });
function checkMys (el) {
    var el_height = $(el).height();
    var scroll_top = $(el).scrollTop();
    // console.log(el_height);
    var mys_bg_height = $(el).find('.mys_bg').height();
    // console.log("---" + mys_bg_height);
    // var mys_bg_scroll_top = $(this).find('.mys_bg').scrollTop();
    // console.log(mys_bg_scroll_top);
    
    // return false;
    if (scroll_top == 0) {
        setTimeout(() => {
            $(el).removeClass('mys_stop_up');
        }, 250);
    }
    else {
        $(el).addClass('mys_stop_up');
    }

    if(el_height + scroll_top >= el.scrollHeight ) {
        setTimeout(() => {
            $(el).removeClass('mys_stop_down');
        }, 250);
    }
    else {
        $(el).addClass('mys_stop_down');
    }

    // $(el).addClass('mys_stop');
}
// $('.mys').on('scroll', function(e){
    // checkMys(this);
// });


// $('.mys').on('touchstart', function(){
    // console.log('touchstart')
    // console.clear()
    // console.log('swipedown')
    // $.fn.fullpage.setAllowScrolling(false);
    // var mys_stop_up = $(this).hasClass('mys_stop_up');
    // var mys_stop_down = $(this).hasClass('mys_stop_down');
    // console.log(mys_stop_up)
    // console.log(mys_stop_down)

    // if (mys_stop_up && !mys_stop_down) {
        // $.fn.fullpage.moveSectionDown();
        // $('.mys_bg').hide();
        // $.fn.fullpage.setAllowScrolling(true, 'down');
    // }
//     if (mys_stop_up && mys_stop_down) {
//         console.log(1);
//         $.fn.fullpage.setAllowScrolling(false, 'up, down');
//     }
//     else if (mys_stop_up && !mys_stop_down) {
//         console.log(2);
//         $.fn.fullpage.setAllowScrolling(false, 'down');
//     }
//     else if (!mys_stop_up && mys_stop_down) {
//         console.log(3);
//         $.fn.fullpage.setAllowScrolling(false, 'down');
//     }
//     else {
//         console.log(4);
//         $.fn.fullpage.setAllowScrolling(true, 'all');
//     }
//     // setTimeout(function(){
//     //     console.log(5);
//     //     $.fn.fullpage.setAllowScrolling(true, 'all');
//     // }, 250);
// }).on('touchmove', function(event){
    // console.log('touchmove')
    // console.log(e);
    // var mys_stop_up = $(this).hasClass('mys_stop_up');
    // var mys_stop_down = $(this).hasClass('mys_stop_down');
    // if (mys_stop_up && !mys_stop_down) {
        // $.fn.fullpage.moveSectionDown();
    // }
// }).on('touchend', function(){
    // console.log('touchend')
    // $.fn.fullpage.setAllowScrolling(true);
// });

// $('.mys').on("mousewheel", function(e){
//     var mys_stop_up = $(this).hasClass('mys_stop_up');
//     var mys_stop_down = $(this).hasClass('mys_stop_down');
//     if (mys_stop_up && mys_stop_down) {
//         console.log(1);
//         $.fn.fullpage.setAllowScrolling(false, 'up, down');
//     }
//     else if (mys_stop_up && !mys_stop_down) {
//         console.log(2);
//         $.fn.fullpage.setAllowScrolling(false, 'up');
//     }
//     else if (!mys_stop_up && mys_stop_down) {
//         console.log(3);
//         $.fn.fullpage.setAllowScrolling(false, 'down');
//     }
//     else {
//         console.log(4);
//         $.fn.fullpage.setAllowScrolling(true, 'all');
//     }
//     setTimeout(() => {
//         console.log(5);
//         $.fn.fullpage.setAllowScrolling(true, 'all');
//     }, 250);
// })








// Message
$('#message').on('show.bs.modal', function (e) {
    cleanFormMessage();
});

function cleanFormMessage()
{
    $("#message .form").show();
    $("#message .success").hide();
    $(".line").removeClass("error").removeClass("focus");

    $("#message_name").val(null);
    $("#message_phone").val(null);
    $("#message_email").val(null);
    $("#message_text").val(null);
}

$(document).ready(function(){
    $('#message_phone').mask("+7 (999) 999-99-99");
}).on("focus", "#message input, #message textarea", function(){
    $(this).parents(".line").addClass("focus");
}).on("focusout", "#message input, #message textarea", function(){
    $(this).parents(".line").removeClass("focus");
}).on("keypress", "#message input, #message textarea", function(){
    $(this).parents(".line").removeClass("error");
}).on("submit", "#zay", function(){
    var error = false;
    var p = {};
        p.name = $("#message_name").val();
        p.phone = $("#message_phone").val();
        p.email = $("#message_email").val();
        p.text = $("#message_text").val();
        p.subject = "Отправлен запрос с сайта virtina.ru";
    if(p.name.length == 0)
    {
        $("#message_name").parents('.line').addClass("error");
        if(error == false){error = true;}                
    }
    if(p.phone.length == 0)
    {
        $("#message_phone").parents('.line').addClass("error");
        if(error == false){error = true;}
    }

    if(!error)
    {
        cleanFormMessage();

        $("#message .form").hide();
        $("#message .success").show();

        setTimeout('$("#message").modal("hide")', 3000);

        $.ajax({
            url: "/welcome/zay",
            type: "POST",
            data: p
        }).done(function() {

        });
    }

    return false;
});

// Perezvon
$('#perezvon').on('show.bs.modal', function (e) {
    cleanFormPerezvon();
});

function cleanFormPerezvon()
{
    $("#perezvon .form").show();
    $("#perezvon .success").hide();
    $(".line").removeClass("error").removeClass("focus");

    $("#perezvon_name").val(null);
    $("#perezvon_phone").val(null);
}

$(document).ready(function(){
    $('#perezvon_phone').mask("+7 (999) 999-99-99");
}).on("focus", "#perezvon input, #perezvon textarea", function(){
    $(this).parents(".line").addClass("focus");
}).on("focusout", "#perezvon input, #perezvon textarea", function(){
    $(this).parents(".line").removeClass("focus");
}).on("keypress", "#perezvon input, #perezvon textarea", function(){
    $(this).parents(".line").removeClass("error");
}).on("submit", "#zay_perezvon", function(){
    var error = false;
    var p = {};
        p.name = $("#perezvon_name").val();
        p.phone = $("#perezvon_phone").val();
        p.call_from = $("#call_from").val();
        p.call_to = $("#call_to").val();
        p.subject = "Заказ звонка с сайта virtina.ru";
    if(p.name.length == 0)
    {
        $("#perezvon_name").parents('.line').addClass("error");
        if(error == false){error = true;}                
    }
    if(p.phone.length == 0)
    {
        $("#perezvon_phone").parents('.line').addClass("error");
        if(error == false){error = true;}
    }

    if(!error)
    {
        cleanFormPerezvon();

        $("#perezvon .form").hide();
        $("#perezvon .success").show();

        setTimeout('$("#perezvon").modal("hide")', 3000);

        $.ajax({
            url: "/welcome/zay",
            type: "POST",
            data: p
        }).done(function() {

        });
    }

    return false;
});


$(document).ready(function(){
    $('#perezvon .form .line input#call_from, #perezvon .form .line input#call_to').mask('99:99')
})

















var modalMoreText = new tingle.modal({
    // footer: false,
    // stickyFooter: true,
    // closeMethods: ['overlay', 'button', 'escape'],
    // closeLabel: "Close",
    cssClass: ['tingle-moreText'],
    beforeOpen: function () {
        $('.section2, .section6, header, .dom2').css({filter: 'blur(5px)'})
    },
    beforeClose: function() {
        $('.section2, .section6, header, .dom2').css({filter: 'none'})
        return true;
    }
});
$(document).on("click", ".moreText a", function () {
    let text = $(this).parents('.moreTextContainer').find('.text_for_more').html();
    modalMoreText.setContent(text)
    modalMoreText.open()
    return false;    
})







