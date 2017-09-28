<script>

	function slug_it(cat)
	{
		var $slug = '';
		var trimmed = $.trim(cat);
		$slug = trimmed.replace(/[^a-z0-9-]/gi, '-').
		replace(/-+/g, '-').
		replace(/^-|-$/g, '');
		//return $slug.toLowerCase();
		//document.getElementById("title").value = $slug.toLowerCase();
		document.getElementById("slug").value = $slug.toLowerCase();
	}

</script>