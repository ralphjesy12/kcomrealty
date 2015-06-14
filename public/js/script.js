$(function(){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            _token: $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('[data-toggle="tooltip"]').tooltip({
        container : 'body'
    });
});
