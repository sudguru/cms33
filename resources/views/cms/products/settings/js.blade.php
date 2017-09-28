<script>
	$(function(){
		$('body').on('submit', '#add-brand', function(event){
			event.preventDefault();
			var brandname= $('#brandname').val();
			var description= $('#descriptionb').val();
			if(brandname == "" || description == "")
			{
				alert("You must type Brand name and Description.");
				return
			}
			$.ajax({
                method: "POST",
                url: "/productsettings/brands",
                data: { "_token": "{{ csrf_token() }}", "brandname": brandname, "description": description }
            }).done(function( response ) {
                $.toaster('Brandname Added', 'Product Settings', 'success');
                $("#tbodybrand").append('<tr id="trbrand-'+response.trim()+'"><td>'+brandname+'</td><td id="brandlogo-'+response+'"><a href="javascript:void(0)" id="brandpic-'+response+'" class="addbrandlogo">Add Brand Logo</td><td>'+description+'</td><td><a href="javascript:void(0)" class="deletebrand" id="bid-'+response+'">Delete</a></td></tr>');
                $('#brandname').val('');
                $('#descriptionb').val('');

            }).error(function(response){
                console.log(response)
            });
		});

		$('body').on('click', '#tbodybrand .deletebrand', function() {
			if(!confirm("Are you sure you want to delete this item?")) return;

			var id = this.id.split("-");
			var brandid = id[1].trim();
			$.ajax({
                method: "GET",
                url: "/productsettings/brandsdelete/"+brandid,
                data: { "_token": "{{ csrf_token() }}"}
            }).done(function( response ) {
            	console.log(response);
                $.toaster('Brand Deleted', 'Product Detail', 'success');
                $("body #tbodybrand #trbrand-"+brandid).fadeOut('slow');

            }).error(function(response){
                console.log(response)
            });
		});

                $('body').on('click', '#tbodybrand .addbrandlogo', function(){
            var id = this.id.split("-")[1];
            $('#modalbrandid').val(id);
            $('#myModal').modal('toggle');
        });

        $('#body').on( "submit", '#brand-image-form', function(event) { 
            $('#imageHolder').html('<img src="/img/loading.gif"/>');
            event.preventDefault();
            var image = $('#image')[0].files[0];
            var form = new FormData(this);
            $('#upload_error').html('');
            $.ajax({
                url: '/savebrandimage',
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
                    console.log(errors);
     
                }
            });
        });

		$('body').on('submit', '#add-mt', function(event){
			event.preventDefault();
			var materialtype = $('#materialtype').val();
			var description = $('#description').val();
			if(materialtype == "" || description == "")
			{
				alert("You must type Materialtype and Description.");
				return
			}
			$.ajax({
                method: "POST",
                url: "/productsettings/materialtypes",
                data: { "_token": "{{ csrf_token() }}", "materialtype": materialtype, "description": description }
            }).done(function( response ) {
            	console.log(response.trim());
                $.toaster('Materialtype Added', 'Product Settings', 'success');
                $("#tbodymt").append('<tr id="trmt-'+response.trim()+'"><td>'+materialtype+'</td><td>'+description+'</td><td><a href="javascript:void(0)" class="deletemt" id="mtid-'+response+'">Delete</a></td></tr>');

                $('#materialtype').val('');
                $('#description').val('');

            }).error(function(response){
                console.log(response)
            });
		});

		$('body').on('click', '#tbodymt .deletemt', function() {
			if(!confirm("Are you sure you want to delete this item?")) return;

			var id = this.id.split("-");
			var mtid = id[1].trim();
			$.ajax({
                method: "GET",
                url: "/productsettings/materialtypesdelete/"+mtid,
                data: { "_token": "{{ csrf_token() }}"}
            }).done(function( response ) {
            	console.log(mtid);
                $.toaster('Material Type Deleted', 'Product Detail', 'success');
                $("body #tbodymt #trmt-"+mtid).fadeOut('slow');

            }).error(function(response){
                console.log(response)
            });
		});



        $('body').on('submit', '#add-size', function(event){
            event.preventDefault();
            var size = $('#size').val();
            if(size == "")
            {
                alert("You must type Size");
                return
            }
            $.ajax({
                method: "POST",
                url: "/productsettings/sizes",
                data: { "_token": "{{ csrf_token() }}", "size": size }
            }).done(function( response ) {
                console.log(response.trim());
                $.toaster('Size Added', 'Product Settings', 'success');
                $("#tbodysize").append('<tr id="trsize-'+response.trim()+'"><td>'+size+'</td><td><a href="javascript:void(0)" class="deletesize" id="sizeid-'+response+'">Delete</a></td></tr>');

                $('#size').val('');

            }).error(function(response){
                console.log(response)
            });
        });

        $('body').on('click', '#tbodysize .deletesize', function() {
            if(!confirm("Are you sure you want to delete this item?")) return;

            var id = this.id.split("-");
            var sizeid = id[1].trim();
            $.ajax({
                method: "GET",
                url: "/productsettings/sizesdelete/"+sizeid,
                data: { "_token": "{{ csrf_token() }}"}
            }).done(function( response ) {
                console.log(sizeid);
                $.toaster('Size Deleted', 'Product Detail', 'success');
                $("body #tbodysize #trsize-"+sizeid).fadeOut('slow');

            }).error(function(response){
                console.log(response)
            });
        });

        $('body').on('submit', '#add-color', function(event){
            event.preventDefault();
            var color = $('#color').val();
            if(color == "")
            {
                alert("You must type Size");
                return
            }
            $.ajax({
                method: "POST",
                url: "/productsettings/colors",
                data: { "_token": "{{ csrf_token() }}", "color": color }
            }).done(function( response ) {
                console.log(response.trim());
                $.toaster('Color Added', 'Product Settings', 'success');
                $("#tbodycolor").append('<tr id="trcolor-'+response.trim()+'"><td>'+color+'</td><td><a href="javascript:void(0)" class="deletecolor" id="colorid-'+response+'">Delete</a></td></tr>');

                $('#color').val('');

            }).error(function(response){
                console.log(response)
            });
        });

        $('body').on('click', '#tbodycolor .deletecolor', function() {
            if(!confirm("Are you sure you want to delete this item?")) return;

            var id = this.id.split("-");
            var colorid = id[1].trim();
            $.ajax({
                method: "GET",
                url: "/productsettings/colorsdelete/"+colorid,
                data: { "_token": "{{ csrf_token() }}"}
            }).done(function( response ) {
                console.log(colorid);
                $.toaster('Color Deleted', 'Product Detail', 'success');
                $("body #tbodycolor #trcolor-"+colorid).fadeOut('slow');

            }).error(function(response){
                console.log(response)
            });
        });
	});
</script>