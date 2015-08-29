var slug = function(str) {
	str = str.replace(/^\s+|\s+$/g, ''); // trim
	str = str.toLowerCase();

	// remove accents, swap ñ for n, etc
	var from = "ãàáäâẽèéëêìíïîõòóöôùúüûñç·/_,:;";
	var to   = "aaaaaeeeeeiiiiooooouuuunc------";
	for (var i=0, l=from.length ; i<l ; i++) {
		str = str.replace(new RegExp(from.charAt(i), 'g'), to.charAt(i));
	}

	str = str.replace(/[^a-z0-9 -]/g, '') // remove invalid chars
		.replace(/\s+/g, '-') // collapse whitespace and replace by -
		.replace(/-+/g, '-'); // collapse dashes

	return str;
};

$(function(){
	Dropzone.autoDiscover = false;

	$("#addUnitImageDropzone").dropzone({
		paramName: "unit-image", // The name that will be used to transfer the file
		maxFilesize: 5, // MB
		uploadMultiple : true,
		addRemoveLinks : true,
		url : '/ajax/addUnitImage',
		parallelUploads : 5,
		init: function() {
			this.on("removedfile", function(file) { 
				var id = $('#add-unit-images #addUnitImageDropzone').find('[name="id"]').first().val();
				var name = $(file.previewElement).data('name');
				$.post('/ajax/removeUnitImage',{ id : id , file : name },function(){
					bootbox.alert("File Successfully Removed");
				});

			});
			this.on("sending", function(file, xhr, formData) {
				// Will send the filesize along with the file as POST data.
				var id = $('#add-unit-images #addUnitImageDropzone').find('[name="id"]').first().val();
				formData.append("id", id);
			});
			this.on("complete", function(file) { 
				if(file.xhr){
					$.each($.parseJSON(file.xhr.responseText),function(i,v){
						$('#add-unit-images #addUnitImageDropzone').find('img[alt="' + v.name +  '"]').parents('.dz-preview').attr('data-name',v.save);
					});
				}else{
					$.each($('#add-unit-images #addUnitImageDropzone').find('img[alt="' + file.name +  '"]'),function(i,v){
						$(this).parents('.dz-preview').attr('data-name',file.name);
					})
				}
			});
			this.on("sending", function(file, xhr, formData) {
				// Will send the filesize along with the file as POST data.
			});
		}

	});

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
						$('#add-dev-submit').text('Add Developer');
					},1000);
				},
				error : function(jqXHR,textStatus,errorThrown){
					bootbox.alert('Saving Developer Failed : '+errorThrown,function(){
						$('#add-dev-submit').removeClass('disabled').text('Add Developer').find('i.fa').remove();
					});
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
		pagerstring += '<button class="btn btn-default btn-xs '+(data.current_page!=1 ? '' : 'disabled')+'" data-page="1">First</button>';
		pagerstring += '<button class="btn btn-default btn-xs '+(data.prev_page_url ? '' : 'disabled')+'" data-page="'+( data.prev_page_url ? data.current_page - 1 : null)+'">Prev</button>';
		pagerstring += '</div>';
		pagerstring += '<div class="btn-group">';
		var start = 1;
		do{
			pagerstring += '<button class="btn btn-default btn-xs '+(start!=data.current_page ? '' : 'disabled')+'" data-page="'+start+'">'+start+'</button>';
		}while(start++ < data.last_page);
		pagerstring += '</div>';
		pagerstring += '<div class="btn-group">';
		pagerstring += '<button class="btn btn-default btn-xs '+(data.next_page_url ? '' : 'disabled')+'" data-page="'+( data.next_page_url ? data.current_page + 1 : null)+'">Next</button>';
		pagerstring += '<button class="btn btn-default btn-xs '+(data.last_page!=data.current_page ? '' : 'disabled')+'" data-page="'+data.last_page+'">Last</button>';
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

						$('#table-dev tbody').append('<tr data-id="'+v.id+'"><td><a href="#" class="thumbnail"><img src="/images/developers/'+v.image+'" alt="..." width="100px" height="100px"></a></td><td>'+v.name+'</td><td>'+v.profile+'</td><td><div class="btn-group"><a class="btn btn-default btn-xs" href="/developer/'+v.id+'/'+slug(v.name)+'" target="_blank"><i class="fa fa-folder-open"></i></a><button class="btn btn-default btn-xs update-dev-open"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-xs btn-delete-dev"><i class="fa fa-trash-o"></i></button></div></td></tr>');

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
	});
	$('#proj-feature-map').change(function(){
		var embedstring = $(this).val();
		if(embedstring.length){
			var regex = /<iframe.*?src="(.*?)"/;
			var regex = /\?pb=([a-z0-9\-!.%+]+)\&?/i;
			var src = regex.exec(embedstring)[1];
			$('#proj-feature-map-preview').attr('src','https://www.google.com/maps/embed?pb='+src);
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
				if(response){
					$('#add-proj-submit').removeClass('disabled').text('Project Added').find('i.fa').remove();
					$('#modal-add-proj').modal('hide');
					$('a[data-toggle="tab"][href="#projects"]').trigger('shown.bs.tab');
					setTimeout(function(){
						$('#add-proj-submit').text('Add Project');
					},1000);
				}else{
					bootbox.alert('Please complete the required fields',function(){
						$('#add-proj-submit').removeClass('disabled').text('Add Project').find('i.fa').remove();
					});
				}

			},
			error : function(jqXHR,textStatus,errorThrown){
				bootbox.alert('Saving Project Failed : '+errorThrown,function(){
					$('#add-proj-submit').removeClass('disabled').text('Add Project').find('i.fa').remove();
				});
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
						$('#table-proj tbody').append('<tr data-id="'+v.id+'"><td>'+v.id+'</td><td>'+v.name+'</td><td>'+v.developer+'</td><td>'+v.type+'</td><td>'+v.category+'</td><td>'+parseFloat(v.unit).format(0,3)+'</td><td>'+parseFloat(v.area).format(0,3)+' sqm</td><td><div class="btn-group"><a class="btn btn-default btn-xs" href="/project/'+v.id+'/'+slug(v.name)+'" target="_blank"><i class="fa fa-folder-open"></i></a><button class="btn btn-default btn-xs"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-delete-proj btn-xs"><i class="fa fa-trash-o"></i></button></div></td></tr>');

					});
				}else{
					$('#table-proj tbody').html('<tr><td colspan="8" class="text-center">No Projects yet.</td></tr>');
				}
				$('#table-proj tbody').append('<tr><td colspan="8" class="text-center"><small><a href="#" data-toggle="modal" data-target="#modal-add-proj" ><i class="fa fa-fw fa-plus"></i>Add New Project</a></small></td></tr>');
				updatepagination($('#table-proj-pager'),response);
			},
			error : function(jqXHR,textStatus,errorThrown){
				bootbox.alert('Fetching Projects Failed : '+errorThrown,function(){
					$('#table-proj tbody').html('<tr><td colspan="8" class="text-center">No Projects yet.</td></tr>');
				});
			}
		});
	});
	$('#table-dev').delegate('.btn-delete-dev','click',function(){
		var id = $(this).parents('tr').data('id');
		if(typeof id != "undefined"){
			bootbox.confirm("Are you sure you want to delete this developer?",function(response){
				if(response){
					$.post('/ajax/dashboard/deleteDeveloper',{ id : id },function(response){
						if(response){
							bootbox.alert('Developer deleted successfully',function(){
								$('a[data-toggle="tab"][href="#developers"]').trigger('shown.bs.tab');
							});
						}else{
							bootbox.alert('An error occured while deleting developer.');
						}
					},'json');
				}
			})
		}
	});
	$('#table-proj').delegate('.btn-delete-proj','click',function(){
		var id = $(this).parents('tr').data('id');
		if(typeof id != "undefined"){
			bootbox.confirm("Are you sure you want to delete this project?",function(response){
				if(response){
					$.post('/ajax/dashboard/deleteProject',{ id : id },function(response){
						if(response){
							bootbox.alert('Project deleted successfully',function(){
								$('a[data-toggle="tab"][href="#projects"]').trigger('shown.bs.tab');
							});
						}else{
							bootbox.alert('An error occured while deleting project.');
						}
					},'json');
				}
			})
		}
	});

	/* UNITS */
	$('#add-unit-images-input').MultiFile({
		max: 10,
		max_size: 2048,
		accept: 'jpg|png|gif|bmp',
		STRING: {
			remove: '<i class="fa fa-fw fa-times"></i>Remove All Images'
		},
	});
	$('#modal-add-unit').on('show.bs.modal',function(){
		if($('#add-unit-images #addUnitImageDropzone').find('[name="id"]').length>0){
			$('[href="#add-unit-images"]').parent().removeClass('disabled').css('pointer-events','auto');
			var addUnitImageDropzone = Dropzone.forElement("#addUnitImageDropzone");
			addUnitImageDropzone.enable();
		}else{
			$('[href="#add-unit-images"]').parent().addClass('disabled').css('pointer-events','none');
		}
		$('a[href="#add-unit-overview"]').tab('show');
	});
	$('#modal-add-unit').on('hide.bs.modal',function(){

		var addUnitImageDropzone = Dropzone.forElement("#addUnitImageDropzone");
		addUnitImageDropzone.disable();
		$('#addUnitImageDropzone').empty();
		$('#add-unit-overview form').find('[name="id"]').remove();
	});
	$('#add-unit-submit').click(function(){
		$('#add-unit-form form').submit();

	}); 
	$('#add-unit-form form').on('submit',function(e){
		e.preventDefault();
		$('#add-unit-submit').prepend('<i class="fa fa-fw fa-spin fa-gear"></i>').addClass('disabled');
		var formData = new FormData(document.querySelector('#add-unit-form form'));
		$.ajax({
			url: '/ajax/saveFormUnit',
			data: formData,
			processData: false,
			contentType: false,
			type: 'POST',
			success: function(response){
				if(response){
					$('#add-unit-submit').removeClass('disabled').text('Unit Added').find('i.fa').remove();
					$('#modal-add-unit').modal('hide');
					$('a[data-toggle="tab"][href="#units"]').trigger('shown.bs.tab');
					setTimeout(function(){
						$('#add-unit-submit').text('Add Unit');
					},1000);
				}else{
					bootbox.alert('Please complete the required fields',function(){
						$('#add-unit-submit').removeClass('disabled').text('Add Unit').find('i.fa').remove();
					});
				}

			},
			error : function(jqXHR,textStatus,errorThrown){
				bootbox.alert('Saving Unit Failed : '+errorThrown,function(){
					$('#add-unit-submit').removeClass('disabled').text('Add Unit').find('i.fa').remove();
				});
			}
		});

	});
	$('a[data-toggle="tab"][href="#units"]').on('shown.bs.tab', function (e) {

		/* GET DEVELOPER OPTIONS */
		$('#unit-feature-project').html('<option disabled>Getting Project List...</option>').addClass('disabled');
		$.post('/ajax/getProjectsList',{},function(response){
			$('#unit-feature-project').empty();
			if(response.length>0){
				$.each(response,function(i,v){
					$('#unit-feature-project').append('<option value="'+v.id+'">'+v.name+'</option>');
				});
			}
			$('#unit-feature-project').prepend('<option value="false">No Project</option>');
		},'json');


		$('#table-unit tbody').empty();
		$('#table-unit-pager').html('<button class="btn btn-default btn-xs disabled">Loading Table . Please wait...</button>');
		$.ajax({
			url: '/ajax/getUnitsTable',
			data: {},
			processData: false,
			contentType: false,
			type: 'POST',
			success: function(response){
				if(response.data.length>0){
					$.each(response.data,function(i,v){
						$('#table-unit tbody').append('<tr data-id="'+v.id+'"><td>'+v.id+'</td><td>'+v.description+'</td><td>'+v.project+'</td><td>'+v.type+'</td><td>'+parseInt(v.bedrooms).format(0,3)+'</td><td>'+parseInt(v.bathroom).format(0,3)+'</td><td>'+parseFloat(v.area).format(0,3)+' sqm</td><td><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button><button class="btn btn-default btn-xs btn-edit-unit"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-delete-unit btn-xs"><i class="fa fa-trash-o"></i></button></div></td></tr>');

					});
				}else{
					$('#table-unit tbody').html('<tr><td colspan="8" class="text-center">No Units yet.</td></tr>');
				}
				$('#table-unit tbody').append('<tr><td colspan="8" class="text-center"><small><a href="#" data-toggle="modal" data-target="#modal-add-unit" ><i class="fa fa-fw fa-plus"></i>Add New Unit</a></small></td></tr>');
				updatepagination($('#table-unit-pager'),response);
			}
		});
	});
	$('#table-unit').delegate('.btn-delete-unit','click',function(){
		var id = $(this).parents('tr').data('id');
		if(typeof id != "undefined"){
			bootbox.confirm("Are you sure you want to delete this unit?",function(response){
				if(response){
					$.post('/ajax/dashboard/deleteUnit',{ id : id },function(response){
						if(response){
							bootbox.alert('Unit deleted successfully',function(){
								$('a[data-toggle="tab"][href="#units"]').trigger('shown.bs.tab');
							});
						}else{
							bootbox.alert('An error occured while deleting unit.');
						}
					},'json');
				}
			})
		}
	});

	$('#table-unit').delegate('#table-unit-pager button','click',function(){
		var page = $(this).data('page') ? $(this).data('page') : 1 ;
		$('#table-unit tbody').empty();
		$.ajax({
			url: '/ajax/getUnitsTable',
			data: { page : page },
			type: 'POST',
			success: function(response){
				if(response.data.length>0){
					$.each(response.data,function(i,v){
						$('#table-unit tbody').append('<tr data-id="'+v.id+'"><td>'+v.id+'</td><td>'+v.description+'</td><td>'+v.project+'</td><td>'+v.type+'</td><td>'+parseInt(v.bedrooms).format(0,3)+'</td><td>'+parseInt(v.bathroom).format(0,3)+'</td><td>'+parseFloat(v.area).format(0,3)+' sqm</td><td><div class="btn-group"><button class="btn btn-default btn-xs"><i class="fa fa-folder-open"></i></button><button class="btn btn-default btn-xs btn-edit-unit"><i class="fa fa-pencil"></i></button><button class="btn btn-default btn-delete-unit btn-xs"><i class="fa fa-trash-o"></i></button></div></td></tr>');

					});
				}else{
					$('#table-unit tbody').html('<tr><td colspan="8" class="text-center">No Units yet.</td></tr>');
				}
				$('#table-unit tbody').append('<tr><td colspan="8" class="text-center"><small><a href="#" data-toggle="modal" data-target="#modal-add-unit" ><i class="fa fa-fw fa-plus"></i>Add New Unit</a></small></td></tr>');
				updatepagination($('#table-unit-pager'),response);
			}
		});
	});

	$('#table-unit').delegate('.btn-edit-unit','click',function(){
		var id = $(this).parents('tr').data('id');
		$.ajax({
			url: '/ajax/getUnitData',
			data: { id : id },
			type: 'POST',
			success: function(response){

				$('#unit-feature-project').val(response.project);
				$('#unit-feature-description').val(response.description);
				$('#unit-feature-studio').prop('checked',response.studio == 1);
				$('#unit-feature-bathroom').val(response.bathroom);
				$('#unit-feature-bedrooms').val(response.bedrooms);
				$('#unit-feature-price').val(response.price);
				$('#unit-feature-area').val(response.area);
				$('#add-unit-images #addUnitImageDropzone,#add-unit-overview form').append('<input type="hidden" name="id" value="' + response.id + '">');

				$('#modal-add-unit').modal('show');
				if(response.images.length){
					var existingFiles = $.parseJSON(response.images);
					var addUnitImageDropzone = Dropzone.forElement("#addUnitImageDropzone");
					for (i = 0; i < existingFiles.length; i++) {
						newfile = { name : existingFiles[i] , size: 1024  };
						addUnitImageDropzone.emit("addedfile",newfile );
						addUnitImageDropzone.emit("thumbnail", newfile, "/images/units/" + existingFiles[i]);
						addUnitImageDropzone.emit("complete", newfile);           
						addUnitImageDropzone.files.push( newfile );
					}
				}


			}
		});
	});

});





