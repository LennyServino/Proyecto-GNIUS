document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems,{
        indicators: false,
        height: 500,
        interval: 2000
    });

    var elems = document.querySelectorAll('.materialboxed');
    var instances = M.Materialbox.init(elems);

    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems);
});