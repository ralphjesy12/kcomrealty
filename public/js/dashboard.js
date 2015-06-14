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

    /* DEVELOPERS */
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
            $("#container_image_dev").addClass('active');
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
            bootbox.alert("Please complete form");
        }else{
            $('#add-dev-submit').prepend('<i class="fa fa-fw fa-spin fa-gear"></i>').addClass('disabled');
            var formData = new FormData(document.querySelector('#add-dev-form'));
            $.ajax({
                url: '/ajax/saveFormDeveloper',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response){
                    $('#add-dev-submit').removeClass('disabled').text('Property Added').find('i.fa').remove();
                    $('#modal-add-dev').modal('hide');
                    $('a[data-toggle="tab"][href="#developers"]').trigger('shown.bs.tab');
                    setTimeout(function(){
                        $('#add-dev-submit').text('Add Property');
                    },1000);
                }
            });
        }
    });
    $('#modal-add-dev').delegate('#update-dev-submit','click',function(){
        var formdata = $('#add-dev-form').serializeArray();
        var data = {};
        $.each(formdata,function(i,v){
            data[v.name] = v.value;
        });
        if((typeof data['dev-feature-name']=='undefined' || data['dev-feature-name']=='') ||
           (typeof data['dev-feature-profile']=='undefined' || data['dev-feature-profile']=='')){
            bootbox.alert("Please complete form");
        }else{
            $('#update-dev-submit').text('Updating Developer').prepend('<i class="fa fa-fw fa-spin fa-gear"></i>').addClass('disabled');
            var formData = new FormData(document.querySelector('#add-dev-form'));
            $.ajax({
                url: '/ajax/updateFormDeveloper',
                data: formData,
                processData: false,
                contentType: false,
                type: 'POST',
                success: function(response){
                    $('#update-dev-submit').removeClass('disabled').text('Developer Updated').find('i.fa').remove();
                    $('#modal-add-dev').modal('hide');
                    setTimeout(function(){
                        $('#modal-add-dev .modal-header h4').html('<i class="fa fa-fw fa-briefcase"></i>Add New Developer');
                        $('#modal-add-dev #add-dev-submit').show();
                        $('#modal-add-dev #update-dev-submit').remove();
                        $('a[data-toggle="tab"][href="#developers"]').trigger('shown.bs.tab');
                    },1000);
                }
            });
        }
    });
    $('#modal-add-dev').on('hidden.bs.modal',function(){
        $('#modal-add-dev .modal-header h4').html('<i class="fa fa-fw fa-briefcase"></i>Add New Developer');
        $('#modal-add-dev #add-dev-submit').show();
        $('#modal-add-dev #update-dev-submit').remove();
        $('#container_image_dev').PictureCut('clear');
        $("#add-dev-form").get(0).reset();
    });
    function updatepagination(elem,data){
        //        current_page: 1
        //        from: 1
        //        last_page: 1
        //        next_page_url: null
        //        per_page: 10
        //        prev_page_url: null
        //        to: 1
        //        total: 1
        var pagerstring ='<div class="btn-toolbar"><div class="btn-group">';
        pagerstring += '<button class="btn btn-default btn-xs '+(data.from!=data.current_page ? '' : 'disabled')+'" data-page="'+data.from+'">First</button>';
        pagerstring += '<button class="btn btn-default btn-xs '+(data.prev_page_url ? '' : 'disabled')+'" data-page="'+( data.prev_page_url ? data.current_page - 1 : null)+'">Prev</button>';
        pagerstring += '</div>';
        pagerstring += '<div class="btn-group">';
        var start = data.from;
        do{
            pagerstring += '<button class="btn btn-default btn-xs '+(start!=data.current_page ? '' : 'disabled')+'" data-page="'+start+'">'+start+'</button>';
        }while(start++ < data.to);
        pagerstring += '</div>';
        pagerstring += '<div class="btn-group">';
        pagerstring += '<button class="btn btn-default btn-xs '+(data.next_page_url ? '' : 'disabled')+'" data-page="'+( data.next_page_url ? data.current_page + 1 : null)+'">Next</button>';
        pagerstring += '<button class="btn btn-default btn-xs '+(data.to!=data.current_page ? '' : 'disabled')+'" data-page="'+data.to+'">Last</button>';
        pagerstring += '</div>';
        pagerstring += '</div>';
        elem.html(pagerstring);
    }
    $('a[data-toggle="tab"][href="#developers"]').on('shown.bs.tab', function (e) {
        $('#table-dev tbody').empty();
        $('#table-dev-pager').html('<button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>');
        $.ajax({
            url: '/ajax/getDevelopersTable',
            data: {},
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response){

                if(response.data.length>0){
                    $.each(response.data,function(i,v){

                        $('#table-dev tbody').append('<tr data-id="'+v.id+'"><td><a href="#" class="thumbnail"><img src="/images/developers/'+v.image+'" alt="..." width="100px" height="100px"></a></td><td>'+v.name+'</td><td>'+v.profile+'</td><td><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button><button class="btn btn-default btn-xs update-dev-open"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button></div></td></tr>');

                    });
                }else{
                    $('#table-dev tbody').html('<tr><td colspan="4" class="text-center">No developers yet.</td></tr>');
                }
                $('#table-dev tbody').append('<tr><td colspan="8" class="text-center"><small><a href="#" data-toggle="modal" data-target="#modal-add-dev" ><i class="fa fa-fw fa-plus"></i>Add New Developer</a></small></td></tr>');


                updatepagination($('#table-dev-pager'),response);
            }
        });
    });
    $('#table-dev tbody').delegate('button.update-dev-open','click',function(event){
        event.preventDefault();
        var id = $(this).parents('tr').data('id');

        $.post('/ajax/getDeveloperData',{ id : id},function(response){
            if(Object.keys(response).length>0){
                $('#add-dev-form').find('#container_image_dev > img').attr('src','/images/developers/'+response.image);
                $('#add-dev-form').find('#dev-feature-name').val(response.name);
                $('#add-dev-form').find('#dev-feature-profile').val(response.profile);
                $('#add-dev-form').find('#dev-feature-id').remove();
                $('#add-dev-form').append('<input type="hidden" name="dev-feature-id" value="'+response.id+'" id="dev-feature-id">');

                $('#modal-add-dev .modal-header h4').html('<i class="fa fa-fw fa-briefcase"></i>Edit Developer');
                $('#modal-add-dev #add-dev-submit').hide();
                $('#modal-add-dev #add-dev-submit').after('<button id="update-dev-submit" type="button" class="btn btn-success">Update Developer</button>');
                $('#modal-add-dev').modal('show');
            }else{
                bootbox.alert('Something went wront while getting data. Developer does not exist');
            }
        },'json');
    });

    /* PROJECTS */
    $('#add-proj-features').tokenfield();
    $('#add-proj-feature-list').delegate('span','click',function(event){
        $(this).parent().remove();
        $('#add-proj-features').tokenfield('createToken', $(this).text().trim());
        event.preventDefault();
    });
    $('#add-proj-features').on('tokenfield:removetoken',function(e){
        $('#add-proj-feature-list').append('<li><span>'+$(e.relatedTarget).find('span').text()+'</span></li>');
    });
    $('#modal-add-proj').on('show.bs.modal',function(){

        /* GET DEVELOPER OPTIONS */
        $('#prop-feature-developer').html('<option disabled>Getting Developer List...</option>').addClass('disabled');
        $.post('/ajax/getDevelopersList',{},function(response){
            console.log(response);
            $('#prop-feature-developer').empty();
            if(response.length>0){
                $.each(response,function(i,v){
                    $('#prop-feature-developer').append('<option value="'+v.id+'">'+v.name+'</option>');
                });
            }
            $('#prop-feature-developer').prepend('<option value="false">No Developer</option>');
        },'json');


    });
    $('#add-proj-amenities-list').delegate('.btn-delete-amenity ','click',function(event){
        event.preventDefault();
        $(this).parents('li')[0].remove();
    });
    $('#add-proj-amenities-add').click(function(event){
        event.preventDefault();
        var textamenities = $('#add-proj-amenities-input').val().trim();
        if(textamenities.length>0){
            $('#add-proj-amenities-list').append('<li><div class="input-group"><input type="text" class="form-control" placeholder="Type here to Add Amenities" name="proj-amenities[]" value="'+textamenities+'"><span class="input-group-btn"><button class="btn-delete-amenity btn btn-default" type="button"><i class="fa fa-fw fa-trash"></i></button></span></div></li>');
            $('#add-proj-amenities-input').val('');
        }
    });
    $('#add-proj-images-input').MultiFile({
        max: 10,
        max_size: 2048,
        accept: 'jpg|png|gif|bmp',
        STRING: {
            remove: '<i class="fa fa-fw fa-times"></i>Remove All Images'
        },
        onFileRemove: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileRemove - ' + value + '</li>')
        },
        afterFileRemove: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>afterFileRemove - ' + value + '</li>')
        },
        onFileAppend: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileAppend - ' + value + '</li>')
        },
        afterFileAppend: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>afterFileAppend - ' + value + '</li>')
        },
        onFileSelect: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileSelect - ' + value + '</li>')
        },
        afterFileSelect: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>afterFileSelect - ' + value + '</li>')
        },
        onFileInvalid: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileInvalid - ' + value + '</li>')
        },
        onFileDuplicate: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileDuplicate - ' + value + '</li>')
        },
        onFileTooMany: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileTooMany - ' + value + '</li>')
        },
        onFileTooBig: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileTooBig - ' + value + '</li>')
        },
        onFileTooMuch: function(element, value, master_element) {
            //            $('#F9-Log').append('<li>onFileTooMuch - ' + value + '</li>')
        }
    });
    $('#proj-feature-map').change(function(){
        var embedstring = $(this).val();
        if(embedstring.length){
            var regex = /<iframe.*?src="(.*?)"/;
            var src = regex.exec(embedstring)[1];
            $('#proj-feature-map-preview').attr('src',src);
            $('#proj-feature-map-source').val(src);
        }
    });
    $('#add-proj-submit').click(function(){
        $('#add-proj-form').submit();

    }); 
    $('#add-proj-form').on('submit',function(e){
        e.preventDefault();
        $('#add-proj-submit').prepend('<i class="fa fa-fw fa-spin fa-gear"></i>').addClass('disabled');
        var formData = new FormData(document.querySelector('#add-proj-form'));
        $.ajax({
            url: '/ajax/saveFormProject',
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response){
                console.log(response);
                if(response){
                    $('#add-proj-submit').removeClass('disabled').text('Project Added').find('i.fa').remove();
                    $('#modal-add-proj').modal('hide');
                    $('a[data-toggle="tab"][href="#projcts"]').trigger('shown.bs.tab');
                    setTimeout(function(){
                        $('#add-proj-submit').text('Add Project');
                    },1000);
                }else{
                    bootbox.alert('Please complete the required fields');
                }

            }
        });

    });
    
    $('a[data-toggle="tab"][href="#projects"]').on('shown.bs.tab', function (e) {
        $('#table-proj tbody').empty();
        $('#table-proj-pager').html('<button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>');
        $.ajax({
            url: '/ajax/getProjectsTable',
            data: {},
            processData: false,
            contentType: false,
            type: 'POST',
            success: function(response){
                if(response.data.length>0){
                    $.each(response.data,function(i,v){
                        $('#table-proj tbody').append('<tr data-id="'+v.id+'"><td>'+v.id+'</td><td>'+v.name+'</td><td>'+v.developer+'</td><td>For Sale</td><td>Residential</td><td>2,822</td><td>10,825 sqm</td><td><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs"><i class="fa fa-trash-o"></i></button></div></td></tr>');

                    });
                }else{
                    $('#table-proj tbody').html('<tr><td colspan="4" class="text-center">No Projects yet.</td></tr>');
                }
                $('#table-proj tbody').append('<tr><td colspan="8" class="text-center"><small><a href="#" data-toggle="modal" data-target="#modal-add-proj" ><i class="fa fa-fw fa-plus"></i>Add New Project</a></small></td></tr>');
                updatepagination($('#table-proj-pager'),response);
            }
        });
    });
});



