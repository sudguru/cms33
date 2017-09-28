<script>
	var l = window.location.href
	var lastSegment = l.match(/([^\/]*)\/*$/)[1];
	//alert(lastSegment);
</script>
<link href="/plugins/nestable/style.css" rel="stylesheet">
<script type="text/javascript" src="/plugins/nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="/plugins/nestable/jquery.nestableplusMenu.js"></script>

<script>
	$(document).ready(function(){

		$('#changespending').hide();
		
		$('.categorylink').on('click', function(e){
			e.preventDefault();
			var mapper = this.id.split("~");
			var id = mapper[1];
			var slug = mapper[2];
			$("#collapseThree").collapse("hide");
			$("#menu-editor").hide();
			$("#menu-add").fadeIn();
			$("#addInputName").val($(this).text());
			$("#addInputLink").val('/post-category/'+slug+'/'+id);
			$("#menu-add").submit();
		})

		$('.postlink').on('click', function(e){
			e.preventDefault();
			var mapper = this.id.split("~");
			var id = mapper[1];
			var slug = mapper[2];
			$("#collapseThree").collapse("hide");
			$("#menu-editor").hide();
			$("#menu-add").fadeIn();
			$("#addInputName").val($(this).text());
			$("#addInputLink").val('/blog-post/'+slug+'/'+id);
			$("#menu-add").submit();
		})

	});


</script>


