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
 <script src="/js/ckeditor/ckeditor.js"></script>
 <script src="/js/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    CKEDITOR.replace( 'description', {
        customConfig : 'configmin.js',
        toolbar : 'simple'
    })

    CKEDITOR.replace( 'specification', {
        customConfig : 'configmin.js',
        toolbar : 'simple'
    })

 //    $('.datepicker').datepicker({
	// 	weekStart:1
	// });
</script> 
