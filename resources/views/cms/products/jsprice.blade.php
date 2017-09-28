<script>
	$(document).ready(function(){
		$('.inputbox').on('change', function(event){
			//alert("ddd");
			event.preventDefault();
			var x = this.id.split("-");
			var what = x[0];
			var id = x[1];
			var val = this.value;
			if(val == 0 || val == "")
			{
				alert("You must supply Value.");
				return;
			}
			$.ajax({
                method: "POST",
                url: "/productpartial/addprice/"+id,
                data: { "_token": "{{ csrf_token() }}", "what": what, "val": val }
            }).done(function( response ) {
            	console.log(response);
                $.toaster('Price Updated', 'Product Price', 'success');

            }).error(function(response){
                console.log(response)
            });
		});


		// $('body').on('click', '#price .deleteprice', function() {
		// 	if(!confirm("Are you sure you want to delete this item?")) return;

		// 	var id = this.id.split("-");
		// 	var index = id[1];
		// 	var priceindex = id[2];
		// 	$.ajax({
  //               method: "POST",
  //               url: "/products/deleteprice/{{ $product->id }}/"+index+"/"+priceindex,
  //               data: { "_token": "{{ csrf_token() }}"}
  //           }).done(function( response ) {
  //           	console.log(response);
  //               $.toaster('CIS Record Deleted', 'Product Detail', 'success');
  //               $("body #tbodyprice #trprice-"+priceindex).fadeOut('slow');

  //           }).error(function(response){
  //               console.log(response)
  //           });
		// });
	});
</script>
<style>
	.productimages
	{
		float: left;
		height: 40px;
		width: 40px;
		overflow: hidden;
		margin-right: 10px;
		border: 1px solid #333;
	}

	.productimagesadd
	{
		float: left;
		height: 40px;
		width: 40px;
		overflow: hidden;
		margin-right: 10px;
		border-radius: 5px;
		border: 1px dotted #333;
		font-size: 200%;
		line-height: 40px;
		text-align: center;
		cursor: pointer;
	}
	.form-group
	{
		paddding: 0;
		margin: 0;
	}
</style>