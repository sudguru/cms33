@extends ('layouts.master')
@section('content')
    <h3>Edit Product: {{$product->productname}}
        <a href="/products" class="btn btn-simple">Back to Product List</a>
    </h3>
    <!-- Display List of all Sites -->
    @php


    if(!empty(session('flashmessage'))) {
        $flash = session('flashmessage');
    }
    else
    {
        $flash = "";
    }

        echo $flash;
        if($flash == "Stock Added!" or $flash == "Stock Deleted!")
        {
            $unitsizecoloractive = "";
            $basicactive = "";
            $stockinactive = "active";
            $imageactive = "";
            $pricesactive = "";
        }
        elseif($flash == "Image Set as Default!" or $flash == "Image Deleted!" or $flash == "Images Refreshed!")
        {
            $unitsizecoloractive = "";
            $basicactive = "";
            $stockinactive = "";
            $imageactive = "active";
            $pricesactive = "";
        }
        elseif ($flash == "Product Saved!") {
            $unitsizecoloractive = "active";
            $basicactive = "";
            $stockinactive = "";
            $imageactive = "";
            $pricesactive = "";
        }
        elseif ($flash == "Size & Colors Saved!") {
            $unitsizecoloractive = "";
            $basicactive = "";
            $stockinactive = "";
            $imageactive = "";
            $pricesactive = "active";
        }
        else
        {
            $unitsizecoloractive = "";
            $basicactive = "active";
            $stockinactive = "";
            $imageactive = "";
            $pricesactive = "";
        }



    @endphp
            
                <div class="card card-nav-tabs card-plain">
                    <div class="header header-info">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="{{$basicactive}}"><a href="#basic" data-toggle="tab">Basic</a></li>
                                    <li class="{{$unitsizecoloractive}}"><a href="#unitsizecolor" data-toggle="tab">Sizes & Colors</a></li>
                                    <li class="{{$pricesactive}}"><a href="#productprices" data-toggle="tab">Prices</a></li>                 
                                    <li class="{{$imageactive}}"><a href="#productimages" data-toggle="tab">Images</a></li>                 
                                    <li class="{{$stockinactive}}"><a href="#productstockin" data-toggle="tab">Stock In</a></li>                 
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        @include ('partials.errors')
                        <div class="tab-content">
                            <div class="tab-pane {{$basicactive}}" id="basic">
                                <form method="POST" action="/products/{{ $product->id }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH')}}
                                <div class="row">
                                    <div class="col-md-9">@include('cms.products.partials.basic')</div>
                                    <div class="col-md-3">@include('cms.products.partials.categories')</div>
                                </div>
                                <button type="submit" class="btn btn-success private-save-btn">Update</button>
                                </form>
                            </div>
                            <div class="tab-pane {{$unitsizecoloractive}}" id="unitsizecolor">
                                @include('cms.products.partials.unitsizecolor')
                            </div>
                            <div class="tab-pane {{$pricesactive}}" id="productprices">
                                @include('cms.products.partials.productprices')
                            </div>
                            <div class="tab-pane {{$imageactive}}" id="productimages">
                                @include('cms.products.partials.productimages')
                            </div>
                            <div class="tab-pane {{$stockinactive}}" id="productstockin">
                                @include('cms.products.partials.productstockin')
                            </div>

                        </div>
                        
                    </div>
                </div>


@endsection
@section('footerjs')
    <style>
        .private-save-btn {
            margin: 0;
        }
    </style>
    @include("cms.products.js")
    @include("cms.products.jsprice")
    @include("cms.products.jsimages")

 
@endsection
