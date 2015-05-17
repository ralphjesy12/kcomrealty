$('#main-carousel').carousel();
$('#carousel-featured').owlCarousel({
    autoWidth : true,
    margin:20,
    center : true,
    loop: true,
    responsive : {
        0 : {
            items : 1
        },
        512 : {
            items : 2
        },
        768 : {
            items : 3
        },
        996 : {
            items : 4
        }
    }
});
$('#carousel-partners').owlCarousel({
    navText : ['<i class="fa fa-angle-left">','<i class="fa fa-angle-right">'],
    margin:20,
    center : true,
    autoWidth : true,
    loop: true,
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
var topoffset = $('#search').position().top;
$(window).scroll(function(){
    if($(this).scrollTop() > topoffset){
        if(!$('body').hasClass('bottom')){
            $('body').addClass('bottom');
        }
    }else{
        if($('body').hasClass('bottom')){
            $('body').removeClass('bottom');
        }
    }

});