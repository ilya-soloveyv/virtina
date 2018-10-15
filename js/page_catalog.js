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

$('#fp').fp({
    before: {
        header: {
            darkClass: {
                catalog1: true,
                catalog2: true
            }
        }
    }
})