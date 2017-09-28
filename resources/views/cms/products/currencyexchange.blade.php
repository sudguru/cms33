@extends ('layouts.master')
@section('content')
<h4>Currency Exchange Conversion</h4>
<br/><br/>
<form action="currencyexchange" method="POST" id="currencyexchange">
    {{ csrf_field() }}
    <table class="table table-hover">
        <thead>
            <tr>
                @for($i = 0; $i < sizeof($currencies); $i++)
                <th>{{ $currencies[$i]['symbol'] }}</th>
                @if($i < sizeof($currencies) - 1) 
                <th>&nbsp;</th> 
                @endif
                @endfor

            </tr>
        </thead>
        <tbody>
            <tr>
                @for($i = 0; $i < sizeof($currencies); $i++)
                <td><input type="text" name="{{ $currencies[$i]['symbol'] }}" class="form-control" value="{{ $currencies[$i]['weight'] }}" /></td>
                @if($i < sizeof($currencies) - 1) 
                <td style="padding-top: 15px; font-size:200%; text-align: center"> <strong>=</strong> </td> 
                @endif
                @endfor
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Update" class="btn btn-success pull-right">
</form>
@endsection
@section('footerjs')
<script>
    $(document).ready(function() {
        $('#currencyexchange').on('submit', function(event){

            event.preventDefault();
            var form = new FormData(this);
            console.log(form);
            $.ajax({
                url: '/currencyexchange',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    console.log(response)
                    $.toaster({ priority : 'success', title : 'Currency Exchange', message : 'Data Saved' });
                },
                error: function(data)
                {
                    var errors = data.responseJSON;
                    var tpl = $('#ajaxErrors').html();
                    console.log(tpl);
                    console.log(data.responseText);
                    console.log(errors);
                    var output = Mustache.render(tpl, errors);
                    $('#upload_error').html(output);
                }
            });
        });
    });
</script>
@endsection
