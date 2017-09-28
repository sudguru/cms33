    <style>
        .categorylink
        {
            cursor: pointer;
        }
        #imageHolder
        {
            padding: 15px;
            background-color: #efefef;
            text-align: center;
        }

        #imageHolder img
        {
            display:block;
            margin: 0 auto;
        }
        
        h3 span { color: #C00; }

    </style>

<script>
	$(document).ready(function(){
        var banner = $('#banner');
        var description = $('#description');
        var gist = $('#gist');
        var banner = $('#banner');
        var imageHolder = $('#imageHolder');
        var currentCategory = $('#currentCategory');
        var categoryidforimage = $('#categoryidforimage');
        var categoryidfordescription = $('#categoryidfordescription');

        banner.hide();
		$('.categorylink').on('click', function(){
            banner.show();

			var id = this.id.split('-');
			$.ajax({
			    url: "/getcategory/"+id[1],
			    type : "GET"
			})
			.done (function(response) { 
			    console.log(response);
                description.val(response.description);
                gist.val(response.gist)
                currentCategory.html(response.name);
                categoryidfordescription.val(response.id);
                categoryidforimage.val(response.id);
                if(response.banner){

                imageHolder.html('<img src="/storage/{{ auth()->user()->site->siteUrl }}/images/thumb_1200/'+response.banner+'" class="img-responsive">');
                }
                else
                {
                    imageHolder.html('<img src="/img/image_placeholder.jpg" class="img-responsive" />');
                    
                }
			    //_toastr("Category Saved.","top-center","success",false);
			})
			.fail (function(jqXHR, textStatus)  { 
			    document.write(jqXHR.responseText);   
			});
		});

        $('#banner-form').on( "submit", function(event) { 
            $('#imageHolder').html('<img src="/img/loading.gif"/>');
            event.preventDefault();
            var image = $('#image')[0].files[0];
            var form = new FormData(this);
            $('#upload_error').html('');
            $.ajax({
                url: '/savecategorybanner',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    //alert('hello');
                    var obj = JSON.parse(response);
                    $('#imageHolder').html('<img src="' + obj.path + '" class="img-responsive"/>');
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    //var errors = data.responseText;
                    $('#imageHolder').html('<img src="/img/image_placeholder.jpg" class="img-responsive" />');
                    var tpl = $('#ajaxErrors').html();
                    console.log(tpl);
                    console.log(data.responseText);
                    console.log(errors);
                    var output = Mustache.render(tpl, errors);
                    $('#upload_error').html(output);
                }
            });
        });

        $('#banner-description-form').on( "submit", function(event) { 
  
            event.preventDefault();
            var form = new FormData(this);

            $.ajax({
                url: '/savecategorydescription',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    //alert('hello');
                   console.log(response)
                   $.toaster({ priority : 'success', title : 'Success', message : 'Data Saved' });
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    var tpl = $('#ajaxErrors').html();
                    console.log(tpl);
                    console.log(data.responseText);
                    console.log(errors);
                    var output = Mustache.render(tpl, errors);
                    $('#upload_error').html(output);
                }
            });
        });
	});
</script>
<script src="/js/mustache.min.js"></script>
<script type="mustache/x-tmpl" id="ajaxErrors">
    <div class="alert alert-danger">

        @{{ #photo }}
        @{{.}}
        @{{ /photo }}

    </div>

</script>