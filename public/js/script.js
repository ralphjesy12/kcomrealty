$(function(){
    $('#main-carousel').carousel();
    $('#carousel-featured').owlCarousel();
    $('#carousel-partners').owlCarousel({
        navText : ['<i class="fa fa-angle-left">','<i class="fa fa-angle-right">'],
        responsive : {
            0 : {
                items : 2
            },
            512 : {
                items : 3
            },
            768 : {
                nav : true,
                items : 4
            },
            996 : {
                nav : true,
                items : 5
            }
        }
    });
});
