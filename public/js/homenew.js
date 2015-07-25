$(document).ready(function() {
    $("#main-banner").height($(window).height() - $("header").height());
    //    $("#main-banner").owlCarousel({
    //        navigation : true,
    //        items: 1
    //        
    //    });
    $('#mason-gallery > ul > li:first-child').height($('#mason-gallery > ul > li:first-child').width());
    $('#mason-gallery > ul > li:not(:first-child)').height($('#mason-gallery > ul > li:first-child').width()/2);

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


    var topoffset = $('#front-search').position().top;
    $(window).scroll(function(){
        if($(this).scrollTop() > topoffset){
            if(!$('body').hasClass('lowerbg')){
                $('body').addClass('lowerbg');
            }
        }else{
            if($('body').hasClass('lowerbg')){
                $('body').removeClass('lowerbg');
            }
        }

    });
    
    $('body').append('<div id="toTop" class="btn btn-green"><span class="glyphicon glyphicon-chevron-up"></span></div>');
    $(window).scroll(function () {
        if ($(this).scrollTop() != 0) {
            $('#toTop').fadeIn();
        } else {
            $('#toTop').fadeOut();
        }
    }); 
    $('#toTop').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});