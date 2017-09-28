<form action="/savecustomfield" method="POST" id="field-add">
	
	{{ csrf_field() }}
  	<h3>Add New Field</h3>
	<div class="form-group">
		<label for="fieldname-add">Field Name</label>
		<input type="text" class="form-control" id="fieldname-add" name="fieldname" required>
	</div>
	<div class="form-group">
		<label for="required-add">Required</label>
		<select name="required" id="required-add" class="form-control">
			<option value="0">No</option>
			<option value="1">Yes</option>
		</select>
	</div>
	<div class="form-group">
		<label for="control-add">Input Control Type</label>
		<select name="control" id="control-add" class="form-control">
			<option value="text">Text Field</option>
			<option value="textarea">Text Area</option>
			<option value="radio">Radio Buttons</option>
			<option value="select">Drop Down</option>
		</select>
	</div>

	<div class="form-group">
		<label for="options-add">Options</label>
		<input type="text" class="form-control" id="options-add" name="options" placeholder="Option1~Option2~Option3">
	</div>
	<div class="form-group">
		<label for="display_order-add">Order</label>
		<input type="text" class="form-control" id="display_order-add" name="display_order" value="0">
	</div>
	<input type="text" name="category_id" class="category_id" value="0" />
	<button class="btn btn-info" id="addButton">Add</button>
</form>



<form method="POST" action="updatecustomfield" id="field-edit">
{{ csrf_field() }}
  	<h3>Edit</h3>
	<div class="form-group">
		<label for="fieldname">Field Name</label>
		<input type="text" class="form-control" id="fieldname" name="fieldname"  required>
	</div>
	<div class="form-group">
		<label for="required">Required</label>
		<select name="requiredfield" id="requiredfield" class="form-control">
			<option value="0">No</option>
			<option value="1">Yes</option>
		</select>
	</div>
	<div class="form-group">
		<label for="control">Input Control Type</label>
		<select name="control" id="control" class="form-control">
			<option value="text">Text Field</option>
			<option value="textarea">Text Area</option>
			<option value="radio">Radio Buttons</option>
			<option value="select">Drop Down</option>
		</select>
	</div>

	<div class="form-group">
		<label for="options">Options</label>
		<input type="text" class="form-control" id="options" name="options" placeholder="Option1~Option2~Option3">
	</div>
	<div class="form-group">
		<label for="display_order">Order</label>
		<input type="text" class="form-control" id="display_order" name="display_order">
	</div>
	<input type="text" name="category_id" class="category_id" value="0" />
	<input type="text" name="category_field_id" id="category_field_id" value="0" />
	<button class="btn btn-info" id="addButton">Edit</button>
</form>
<div id="errors"></div>
<form style="display: none;" method="POST" action ="/deletecustomfield" id="field-delete">
	{{ csrf_field() }}
	<input type="text" name="customfield_id" id="customfield_id" value="0" />
</form>
