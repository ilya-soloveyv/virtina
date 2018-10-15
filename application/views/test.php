<?php $this->load->view('basic/header'); ?>

<div id="iphone"></div>

<style>
    #iphone {
        position: fixed;
        width: 1280px;
        height: 720px;
        top: 50%;
        left: 50%;
        margin: -360px 0 0 -640px;
    }
</style>

<script>

    $(document).ready(function(){
        $("header").removeClass('dark');
    });

    var path = "/images/web/";
    var name = "dom1_0010001 copy.jpg";
    var type = ".png";
    var frames = 119;
    var active_frame = 0;
    var frame_array = [];

    for(var i = 1; i <= frames; i++)
    {
        if(i < 10)
        {
            var temp = path+"dom1_001000"+i+"%20copy.jpg";
        }
        else if(i < 100)
        {
            var temp = path+"dom1_00100"+i+"%20copy.jpg";
        }
        else
        {
            var temp = path+"dom1_0010"+i+"%20copy.jpg";   
        }
        frame_array.push(temp);
        $("<img />").attr("src", temp);
    }
    

    $(document).ready(function(){
        $("header, #myMenu").addClass("dark");
        $("#iphone").html("<img src='"+frame_array[active_frame]+"'>");
    });

    function setFrame(i)
    {
        if(i > 0) {
            active_frame = active_frame-1;
            if(active_frame < 0) {
                console.log(frames)
                active_frame = frames-1;
            }
        }
        else {
            active_frame = active_frame+1;
            if(active_frame >= frames) {
                active_frame = 0;
            }
        }
        console.log(active_frame);
        $("#iphone img").attr("src",frame_array[active_frame]);
    }

    var elem = document.getElementById('iphone');

    if (elem.addEventListener) {
        if ('onwheel' in document) {
            // IE9+, FF17+
            elem.addEventListener("wheel", onWheel);
        } else if ('onmousewheel' in document) {
            // устаревший вариант события
            elem.addEventListener("mousewheel", onWheel);
        } else {
            // Firefox < 17
            elem.addEventListener("MozMousePixelScroll", onWheel);
        }
    } else { // IE8-
        elem.attachEvent("onmousewheel", onWheel);
    }

    // Это решение предусматривает поддержку IE8-
    function onWheel(e) {
        e = e || window.event;
        // deltaY, detail содержат пиксели
        // wheelDelta не дает возможность узнать количество пикселей
        // onwheel || MozMousePixelScroll || onmousewheel
        var delta = e.deltaY || e.detail || e.wheelDelta;

        setFrame(e.deltaY);

        // var info = document.getElementById('delta');

        // info.innerHTML = +info.innerHTML + delta;

        e.preventDefault ? e.preventDefault() : (e.returnValue = false);
    }
</script>

<?php $this->load->view('basic/footer'); ?>