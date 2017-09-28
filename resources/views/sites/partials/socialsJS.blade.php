<script>

	$(document).ready(function(){

		$('#socials-form').on( "submit", function(event) { 
			
			event.preventDefault();

			var form = new FormData(this);
			$.ajax({
				url: '/sites/socials/'+ $("#site_id").val(),
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				success:function(response) {
					if(response.trim() == "OK")
					{
						var name = $('#socials_name').val();
						var surl = $('#socials_url').val();
						$('#socials_tbody').append('<tr id="trsocials-'+name+'"><td>' + name + '</td><td>' + surl + '</td><td><a href="#" class="socialsdel" id="socials-'+name+'">Delete</a></td></tr>');
						$('#socials_name').val('');
						$('#socials_url').val('');
					}
				},
				error: function(data)
				{
					var errors = data.responseJSON;
                     
                }
            });
		});	

		$('body').on('click' , '#socials_tbody .socialsdel', function(){
           
            if(!confirm("Are you sure you want to remove this item?")) 
            {
                return;
            }
            var site_id = $("#site_id").val();
            var id = this.id.split('-');
            var that = $(this);
            var durl = "/sites/deletesocials/" + site_id + "/" + id[1];
            //alert(durl);
            $.ajax({
                url: durl,
                type : "GET"
            })
            .done (function(response) { 
                console.log(response)
                $('#trsocials-'+id[1]).fadeOut("normal", function() {
                    $(this).remove();
                });
            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
        });
	});
</script>
