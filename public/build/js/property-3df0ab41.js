$(function(){
    var gridster = $("#property_gallery ul").gridster({
        widget_margins: [5, 5],
        widget_base_dimensions: [110, 110]
    }).data('gridster');

    gridster.$el
        .on('mouseenter', '> li', function() {
        gridster.resize_widget($(this), $(this).data('resizex'), $(this).data('resizey'));
    })
        .on('mouseleave', '> li', function() {
        gridster.resize_widget($(this), 1, 1);
    });
});
