<script>

	$(document).ready(function(){

		$('#lang-form').on( "submit", function(event) { 
			
			event.preventDefault();

			var form = new FormData(this);
			$.ajax({
				url: '/sites/languages/'+ $("#site_id").val(),
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				success:function(response) {
					if(response.trim() == "OK")
					{
						var name = $('#lang_name').val();
						var caption = $('#lang_caption').val();
						var Ldefault = $('#lang_default').val();
						$('#lang_tbody').append('<tr id="trlang-'+name+'"><td>' + name + '</td><td>' + caption + '</td><td>' + Ldefault + '</td><td><a href="#" class="langdel" id="lang-'+name+'">Delete</a></td></tr>');
						$('#lang_name').val('');
						$('#lang_caption').val('');
						$('#lang_default').val('');
					}
				},
				error: function(data)
				{
					var errors = data.responseJSON;
                     
                }
            });
		});	

		$('body').on('click' , '#lang_tbody .langdel', function(){
           
            if(!confirm("Are you sure you want to remove this item?")) 
            {
                return;
            }
            var site_id = $("#site_id").val();
            var id = this.id.split('-');
            var that = $(this);
            var durl = "/sites/deletelanguages/" + site_id + "/" + id[1];
            //alert(durl);
            $.ajax({
                url: durl,
                type : "GET"
            })
            .done (function(response) { 
                console.log(response)
                $('#trlang-'+id[1]).fadeOut("normal", function() {
                    $(this).remove();
                });
            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
        });
	});
</script>
