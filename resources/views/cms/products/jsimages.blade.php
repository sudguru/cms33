<script src="/js/mustache.min.js"></script>
<script>
    function replaceAll(str, find, replace) {
        return str.replace(new RegExp(find, 'g'), replace);
    }
    function basename(path) {
        return path.split('/').reverse()[0];
    }
</script>
<script>
	$(document).ready(function(){


		 $('#product-image-form').on( "submit", function(event) { 
		 		console.log("uploadstart")
                event.preventDefault();
                var image = $('#image')[0].files[0];
                var form = new FormData(this);
                $.ajax({
                    url: '/productpartial/images/{{$product->id}}',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success:function(response) {
                        //alert('hello');
                        console.log(response);
                        var obj = JSON.parse(response);
                        $('#pimages').prepend(`
                            <div class="productimages">
                                <img src="${obj.path}" width="120px" id="img-${obj.imageid}" />
                            </div>`); 
                        var featured = $("input[name='featured']:checked").val();
                        if(featured == 1)
                        	$('#featured_pic_holder').html('<img src="'+obj.path+'" class="img-responsive" />');
                        $('#imageforsize').val('');
                        $('#imageforcolor').val('');
    
                    },
                    error: function(data)
                    {
                        var errors = data.responseJSON;
                        var tpl = $('#ajaxErrors').html();
                        var output = Mustache.render(tpl, errors);
                        $('#upload_error').html(output);
                    }
                });
            });

         $('body').on('click','.productimages img', function(){
            var pd = this.id.split("-");
            var code = $(this).data('original-title');
            var src = $(this).attr('src');
            src = replaceAll(src, '/thumb_240/', '/original/');
            $('#productimagecode').html(code);
            $('#lightboximage').html('<img src="'+src+'" class="img-responsive" />');
            $('#idsizeindex').val(pd[1]);
            $('#idcisindex').val(pd[2]);
            $('#idimgindex').val(pd[3]);
            $('#lightboxModal').modal('toggle');
        });

         $('#form-delete-product-image').on('submit', function(event){
            event.preventDefault();
            if(!confirm('Are you sure you want to delete this image?')) return;
            var form = new FormData(this);
            $.ajax({
                    url: '/productimagedelete/{{$product->id}}',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success:function(response) {

                        $('#'+response).parent().fadeOut('slow');
                    },
                    error: function(data)
                    {
                        var errors = data.responseJSON;
                        console.log(errors);
                    }
                });
            $('#lightboxModal').modal('toggle');
        });

	});
</script>
<script type="mustache/x-tmpl" id="ajaxErrors">
    <div class="alert alert-danger">

        @{{ #photo }}
        @{{.}}
        @{{ /photo }}

    </div>

</script>
<style>
	.productimages
	{
		float: left;
		height: 120px;
		width: 120px;
		overflow: hidden;
		margin: 6px;
        position: relative;
	}
    .productimages .productdelete
    {
        display: block;
        position: absolute;
        bottom: 0;
        right: 5px;
    }
    .productimages .productdelete a
    {
        color: #C00;
    }

    .productimages .productdefaultpic
    {
        display: block;
        position: absolute;
        bottom: 0;
        left: 5px;
    }

    .productimages .productdefaultpic a
    {
        color: #CCC;
    }

    .productimages .productdefaultpic a.active
    {
        color: #5eb244;
    }
</style>