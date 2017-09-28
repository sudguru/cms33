@extends ('front.thoksaman.layouts.master')

@section('content')
	@include('front.thoksaman.partials.products.checkout')
	{{-- @include('front.thoksaman.partials.products.modal_direction_map')  --}}
	{{-- @include('front.thoksaman.partials.products.checkoutmap') --}}
@endsection

@section('footerscript')
	<script>
		$(document).ready(function() {
			$('input[name=shipping]').on('click', function(){
				if( $('input[name=shipping][value=1]').prop("checked"))
				{
					$('#mapwrapper').show();
				}
				else
				{
					$('#mapwrapper').hide();
				}
			});

			//$("#myModal").on('show.bs.modal', function () {
			  //google.maps.event.trigger(map, "resize");

			//});

		});
	</script>
	<style>
	#map
	{
		width: 100%;
		height: 350px;
	}
</style>

@endsection
