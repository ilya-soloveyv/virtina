function getNewActive()
{
    $("#news .l .owl-carousel").owlCarousel("destroy");
    var imgs = $("#news .r ul li.active").attr("data-imgs");
    if(typeof imgs != "undefined")
    {
        var arr = imgs.split(',');
        $("#news .l .owl-carousel").html(null);
        for (var i = 0; i < arr.length; i++)
        {
            $("#news .l .owl-carousel").append("<div class='item' style='background-image: url(/images/news/"+arr[i]+");'></div>");
        }
        $("#news .l .owl-carousel").owlCarousel({
            items: 1,
            loop: true,
            autoplay: false,
            nav: true,
            dots: true
        });
    }
    // console.log(arr);
}
$("header, #myMenu").addClass("dark");
getNewActive();
$(document).on("mouseenter", "#news .r ul li", function(){
    $("#news .r ul li").removeClass("active");
    $(this).addClass("active");
    getNewActive();
});
