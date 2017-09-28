<link href="/plugins/nestable/style.css" rel="stylesheet">
<script type="text/javascript" src="/plugins/nestable/jquery.nestable.js"></script>
<script type="text/javascript" src="/plugins/nestable/jquery.nestableplus.js"></script>

<script>

	function slug_it(cat)
	{
		var $slug = '';
		var trimmed = $.trim(cat);
		$slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
		replace(/-+/g, '-').
		replace(/^-|-$/g, '');
		//return $slug.toLowerCase();
		document.getElementById("addInputSlug").value = $slug.toLowerCase();
		document.getElementById("editInputSlug").value = $slug.toLowerCase();
	}
	
	$(document).ready(function(){
		$('#changespending').hide();
	})
	
</script>
<style>
	.mydangeralert
	{
		border: 1px dotted red;
		border-radius: 10px;
		padding: 7px 20px;
		color: red;
		max-width: 300px;
	}
</style>
