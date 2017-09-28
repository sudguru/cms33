<script>

	$(document).ready(function(){

		$('#ads-form').on( "submit", function(event) { 
			
			event.preventDefault();

			var form = new FormData(this);
			$.ajax({
				url: '/sites/ads/'+ $("#site_id").val(),
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				success:function(response) {
					console.log("OK");
					console.log(response);
					if(response == "OK")
					{
						var pos = $('#ads_pos').val();
						var name = $('#ads_name').val();
						var height = $('#ads_height').val();
						var width = $('#ads_width').val();
						var nos = $('#ads_nos').val();
						$('#ads_tbody').append('<tr id="trads-'+pos+'"><td>' + pos + '</td><td>' + name + '</td><td>' + width + '</td><td>' + height + '</td><td>' + nos + '</td><td><a href="#" class="adsdel" id="ads-'+pos+'">Delete</a></td></tr>');
						$('#ads_pos').val('');
						$('#ads_name').val('');
						$('#ads_height').val('');
						$('#ads_width').val('');
						$('#ads_nos').val('');
					}
				},
				error: function(data)
				{
					var errors = data.responseJSON;
                     
                }
            });
		});	

		$('body').on('click' , '#ads_tbody .adsdel', function(){
           
            if(!confirm("Are you sure you want to remove this item?")) 
            {
                return;
            }
            var site_id = $("#site_id").val();

            var id = this.id.split('-');
            var that = $(this);
            var durl = "/sites/deleteads/" + site_id + "/" + id[1];

            $.ajax({
                url: durl,
                type : "GET"
            })
            .done (function(response) { 
                console.log(response)
                $('#trads-'+id[1]).fadeOut("normal", function() {
                    $(this).remove();
                });
            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
        });
	});
</script>
