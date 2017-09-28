@extends ('layouts.master')
@section('content')


<div class="row">
    <div class="col-md-3">
        <ul class="list-group">
            <li class="list-group-item">
                <a class="leftlinks" id="brands" href="javascript:void(0)">Brands</a>
            </li>
            <li class="list-group-item">
                <a class="leftlinks" id="materialtypes" href="javascript:void(0)">Material Types</a>
            </li>

            <li class="list-group-item">
                <a class="leftlinks" id="sizes" href="javascript:void(0)">Product Sizes</a>
            </li>

            <li class="list-group-item">
                <a class="leftlinks" id="colors" href="javascript:void(0)">Product Colors</a>
            </li>
            
        </ul>
    </div>
    <div class="col-md-8 col-md-offset-1">
        @include ('partials.errors')
        <div id="right">@include('cms.products.settings.brands')</div>
    </div>
</div>

    
@endsection
@section('footerjs')
<script> 
    $(function(){

        $('body').on('click', 'ul .leftlinks', function() {
            $("#right").html('');
            $("#right").load('/productsettings/'+this.id);
        });
    });
 </script>
 @include("cms.products.settings.js")
@endsection
