$(function(){
    $('ul.toggle-tags > li > span').click(function(){
        $(this).toggleClass('selected');
    });

    $('#dashboard-menu > a').click(function(event){
        event.preventDefault();
        if(!$(this).hasClass('active')){
            $(this).addClass('active').siblings('.active').removeClass('active');
            return true;
        }

        return false;
    });


    $("#container_image_dev").PictureCut({
        InputOfImageDirectory       : "image",
        PluginFolderOnServer        : "/plugins/jquery.picture.cut/",
        FolderOnServer              : "/uploads/",
        EnableCrop                  : true,
        CropWindowStyle             : "Bootstrap",
        CropOrientation             : false,
        MinimumWidthToResize        : 500,
        MinimumHeightToResize       : 500,
        CropOrientation        : false,
        CropModes        : {
            widescreen: false,
            letterbox: false,
            free   : true
        },
        ImageButtonCSS        :  {
            border:"1px #CCC solid",
            'width' :'200px',
            'height' :'200px',
        },
        UploadedCallback            : function(response){
            console.log(response);
        }
    });

    $('#add-dev-submit').click(function(){
        var formdata = $('#add-dev-form').serializeArray();
        var data = {};
        $.each(formdata,function(i,v){
            data[v.name] = v.value;
        });
        if((typeof data['image']=='undefined' || data['image']=='') ||
           (typeof data['dev-feature-name']=='undefined' || data['dev-feature-name']=='') ||
           (typeof data['dev-feature-profile']=='undefined' || data['dev-feature-profile']=='')){
            alert('Please complete form');
        }else{
            console.log(data);
        }

    });

});
