<h4>Stock In</h4>
<form action="/productpartial/stockin/{{$product->id}}" method="POST">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">Color</label>
				<select name="color_id" id="imagecolor_id" class="form-control">
					@foreach($colors as $color)
					<option value="{{$color->id}}">{{$color->color}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">Size</label>
				<select name="size_id" id="imagesize_id" class="form-control">
					@foreach($product->productsizes as $size)
					<option value="{{$size->id}}">{{$size->size}}</option>
					@endforeach
				</select>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">Date</label>
				<input class="datepicker form-control" type="text" name="txtdate" value="{{date('m/d/Y')}}"/>
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">Quantity</label>
				<input class="form-control" type="text" name="quantity" value=""/>
			</div>
		</div>
		<div class="col-md-4">
			<input type="submit" value="Save Stock In" class="btn btn-success pull-right">
		</div>
	</div>
</form>
<hr />
<h4>Past Entries</h4>
<div class="table-responsive">
                <table class="table table-striped" id="datatables">
                <thead>
                    <tr class="text-primary">
                        <th class="text-center">#</th>
                        <th>Date</th>
                        <th>Color</th>
                        <th>Size</th>                        
                        <th>Quantity</th>

                    </tr> 
                </thead> 
                <tbody>
                	<?php 
                		$x = 1;
                		$total = 0;
                    ?>
                	@foreach($product->stockins as $stockin)
                    <tr>
               			<td style="text-align: center;">{{ $x }}</td>
               			<td>{{$stockin->date}}</td>
                        <td>{{ $stockin->color ? $stockin->color->color : ''}}</td>
                        <td>{{ $stockin->size ? $stockin->size->size : ''}}</td>    
                        <td>{{$stockin->quantity}}</td>
                        <td class="td-actions text-right">
                            <form action="/productpartial/deletestock/{{ $product->id }}/{{$stockin->id}}" method="POST" style="display: inline; margin: 0; padding: 0">
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



