<script>

	$(document).ready(function(){

		$('#currencies-form').on( "submit", function(event) { 
			
			event.preventDefault();

			var form = new FormData(this);
			$.ajax({
				url: '/sites/currencies/'+ $("#site_id").val(),
				data: form,
				cache: false,
				contentType: false,
				processData: false,
				type: 'POST',
				success:function(response) {
					if(response.trim() == "OK")
					{
						var symbol = $('#currencies_symbol').val();
						var weight = $('#currencies_weight').val();
						$('#currencies_tbody').append('<tr id="trcurrencies-'+symbol+'"><td>' + symbol + '</td><td>' + weight + '</td><td><a href="#" class="currenciesdel" id="currencies-'+symbol+'">Delete</a></td></tr>');
						$('#currencies_symbol').val('');
						$('#currencies_weight').val('');
					}
				},
				error: function(data)
				{
					var errors = data.responseJSON;
                     
                }
            });
		});	

		$('body').on('click' , '#currencies_tbody .currenciesdel', function(){
           
            if(!confirm("Are you sure you want to remove this item?")) 
            {
                return;
            }
            var site_id = $("#site_id").val();
            var id = this.id.split('-');
            var that = $(this);
            var durl = "/sites/deletecurrencies/" + site_id + "/" + id[1];
            //alert(durl);
            $.ajax({
                url: durl,
                type : "GET"
            })
            .done (function(response) { 
                console.log(response)
                $('#trcurrencies-'+id[1]).fadeOut("normal", function() {
                    $(this).remove();
                });
            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
        });
	});
</script>
