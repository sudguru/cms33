    <style>
    <style>
        .categorylink
        {
            cursor: pointer;
        }
        
        h3 span { color: #C00; }

    </style>
<script src="/js/mustache.min.js"></script>
<script>
	$(document).ready(function(){
        var addform = $('#field-add');
        var editform = $('#field-edit');

        addform.hide();
        editform.hide();

		$('.categorylink').on('click', function(){

			var id = this.id.split('-');
            var t = $(this).text();
            t = t.replace(new RegExp('-', 'g'), '');
            $('#category_header').html(t);
			showCustomFieldsInTable(id[1],addform);
		});

        $('body').on('click' , '#table-data .dynamicfield', function(){
            addform.hide();
            editform.show();
            var id = this.id.split('-');
            var fieldname = ($('#fieldname-'+id[1]).html());
            var required = ($('#required-'+id[1]).html());
            //console.log(required);
            var control = ($('#control-'+id[1]).html());
            var options = ($('#options-'+id[1]).html());
            var display_order = ($('#do-'+id[1]).html());

            $('#fieldname').val(fieldname);
            $('#requiredfield').val(required);
            $('#control').val(control);
            $('#options').val(options);
            $('#display_order').val(display_order);
            $('#category_field_id').val(id[1]);

        });

        

        $('body').on('click' , '#table-data .dynamicfielddelete', function(){

            if(!confirm("Are you sure you want to remove this custom field?")) 
            {
                return;
            }
            addform.hide();
            editform.show();
            var id = this.id.split('-');
            var that = $(this);
            $.ajax({
                url: "/deletecustomfield/"+id[1],
                type : "GET"
            })
            .done (function(response) { 
                //$('#tr-'+id[1]).remove();
                $('#tr-'+id[1]).fadeOut("normal", function() {
                    $(this).remove();
                });
               // var display_order = $('#display_order-add').val(display_order) - 1;
                //$('#display_order-add').val(display_order); 
                addform.show();
                editform.hide();

            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
        });

    });

    function getMax(arr, prop) {
        var max;
        for (var i=0 ; i<arr.length ; i++) {
            if (!max || parseInt(arr[i][prop]) > parseInt(max[prop]))
                max = arr[i];
        }
        return max;
    }
    function showCustomFieldsInTable(category_id)
    {
        //return category_id;
        $.ajax({
                url: "/getfields/"+category_id,
                type : "GET"
            })
            .done (function(response) { 
                console.log(response);
                //show table
                var tpl = $('#fieldstable').html();
                var output = Mustache.render(tpl, response);
                $('#table-data').html(output);
                //show empty form to add new field
                $('#field-add')[0].reset();
                $('#field-add').show();
                $('.category_id').val(category_id);  
                display_order = (response.length>0) ? getMax(response, "display_order").display_order : 0;
                console.log(display_order)
                //displayorder = display_order ? display_order : 0;
                display_order += 1;
                $('#display_order-add').val(display_order);  

            })
            .fail (function(jqXHR, textStatus)  { 
                document.write(jqXHR.responseText);   
            });
    }
</script>
<script type="mustache/x-tmpl" id="fieldstable">

    <table class="table table-hover">
    <thead>
        <tr>
            <th>Field Name</th>
            <th>Control</th>
            <th>Options</th>
            <th>Required</th>
            <th>Order</th>
            <th>&nbsp</th>
        </tr>
    </thead>
    <tbody>
       @{{ #. }}
        <tr id="tr-@{{ id }}">
            <td id="fieldname-@{{ id }}" >@{{ fieldname }}</td>
            <td id="control-@{{ id }}" >@{{ control }}</td>
            <td id="options-@{{ id }}" >@{{ options }}</td>
            <td id="required-@{{ id }}" >@{{ required }}</td>
            <td id="do-@{{ id }}" >@{{ display_order }}</td>
            <td><a href="javascript:void(0)" id="id-@{{ id }}" class="dynamicfield"><i class="material-icons">mode_edit</i></a>
            &nbsp; <a href="javascript:void(0)" id="delid-@{{ id }}" class="dynamicfielddelete"><i class="material-icons">delete_forever</i></td>
        </tr>
        @{{/.}}
    </tbody>
</table>  

</script>
<script>
    $(document).ready(function(){
        $('#field-add').on( "submit", function(event) { 
            event.preventDefault();
            var form = new FormData(this);
            $.ajax({
                url: '/savecustomfield',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    showCustomFieldsInTable(response);
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    display_erorrs(errors);
                }
            });
        });

        $('#field-edit').on( "submit", function(event) { 
            event.preventDefault();
            var form = new FormData(this);
            var that = this;
            $.ajax({
                url: '/updatecustomfield',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    showCustomFieldsInTable(response);
                    $(that).hide();
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    console.log(errors);
                    display_erorrs(errors);
                }
            });
        });

        
	});

    function display_erorrs(errors)
    {
        var tpl = $('#ajaxErrors').html();
        var output = Mustache.render(tpl, errors);
        $('#errors').html(output);
    }
</script>
<script type="mustache/x-tmpl" id="ajaxErrors">
    <div class="alert alert-danger">
        @{{ #display_order }}
        @{{.}}
        @{{ /display_order }}

    </div>

</script>
