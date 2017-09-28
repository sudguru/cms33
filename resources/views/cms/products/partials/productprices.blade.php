
        <h4>Products Prices</h4>


    <!-- Display List of all Sites -->

            <div class="table-responsive">
                <table class="table table-striped" id="datatables">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center">#</th>
                        <th>Color</th>
                        <th>Size</th>
                        <th>From</th>
                        <th>To</th>
                        <th>Regular</th>
                        <th>Discounted</th>
                        <th class="text-right">Actions</th> 
                    </tr> 
                </thead> 
                <tbody>
                	<?php $x = 1; 
                    ?>
                	@foreach($product->productprices as $productprice)
                    <tr>
               			<td style="text-align: center;">{{ $x }}</td>
                        <td>{{ $productprice->color ? $productprice->color->color : ''}}</td>
                        <td>{{ $productprice->size ? $productprice->size->size : ''}}</td>
                        <td>{{$productprice->rangefrom}}</td>
                        <td>{{$productprice->rangeto}}</td>
                        <td><input class="inputbox" type="text"  id="regular-{{$productprice->id}}" style="text-align: right" value="{{$productprice->regular}}" /></td>
                        <td><input class="inputbox" type="text" id="discounted-{{$productprice->id}}" style="text-align: right" value="{{$productprice->discounted}}" /></td>

                        <td class="td-actions text-right">
                            <form action="/products/{{ $product->id }}" method="POST" style="display: inline; margin: 0; padding: 0">
                                {{ csrf_field() }}
                                {{ method_field("DELETE") }}
                                <button    class="btn btn-danger btn-simple btn-xs" onclick="if ( confirm('You are about to delete this item ?\n \'Cancel\' to stop, \'OK\' to delete.') ) { return true;}return false;"><i class="fa fa-times"></i></button>
                            </form>
                        </td>
                    </tr>
            		<?php $x++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>