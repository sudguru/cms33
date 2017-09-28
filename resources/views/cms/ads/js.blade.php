<script src="/js/html.sortable.min.js"></script>
<script>
    $(document).ready(function() {

        sortable('.sortableaccordian', {
            forcePlaceholderSize: true,
            items: ':not(.newform)',
            handle: '.panel-heading'
        });

        sortable('.sortableaccordian')[0].addEventListener('sortupdate', function(e) {

            var neworder = e.detail.index + 1;
            var oldorder =  e.detail.oldElementIndex + 1;
            var pos = $('#pos').val();
            $.ajax({
                method: "POST",
                url: "/ads/reorder",
                data: { "_token": "{{ csrf_token() }}", "pos": pos, "neworder": neworder, "oldorder" : oldorder }
            }).done(function( msg ) {
                $.toaster(msg, 'Reorder', 'success');
            }).error(function(response){
                console.log(response)
            });
        });

        $('.panel input').on('keyup', function(){
            var originalVal = this.getAttribute('value');
            var currentVal = $(this).val();
            console.log(originalVal);
            console.log(currentVal);
            if(originalVal != currentVal) $(this).addClass('dirty');
            if(originalVal == currentVal) $(this).removeClass('dirty');
        });

        $('.delad').on('click', function(event) {
            event.preventDefault();
            if(!confirm('Are you sure you want to delete this item ?')) {
                return;
            }
            var id = this.id.split('-');
            var pos = $('#pos').val();
            //pass id to server delete there get ok response
            $.ajax({
                method: "POST",
                url: "/ads/delete",
                data: { "_token": "{{ csrf_token() }}", "id": id[1], "pos": pos }
            }).done(function( msg ) {
                $('#panel-'+id[1]).fadeOut('slow');
                sortable('.sortableaccordian');
                $('#no-'+pos).html($('#no-'+pos).html() - 1);
                $.toaster(msg, 'Delete', 'success');

            }).error(function(response){
                console.log(response)
            });
        });

        $('.edit').on('click', function(event) {
            event.preventDefault();
            var aid = this.id.split('-');
            var id = aid[1];
            var wh = aid[2];
            var val = $('#'+wh+'-id-'+id).val();
            $.ajax({
                method: "POST",
                url: "/ads/edit",
                data: { "_token": "{{ csrf_token() }}", "id": id, "wh": wh, "val" : val }
            }).done(function( msg ) {
                var m = msg.split('~');
                if(m[1] > 0) $('#title-'+m[1]).html($('#adname-id-'+m[1]).val());
                $('#'+wh+'-id-'+id).removeClass('dirty');
                $.toaster(m[0], 'Edit', 'success');
            }).error(function(response){
                console.log(response)
            });
        });

    })

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#myimage').attr('src', e.target.result);
                $('#myimage').attr('width', '250px');
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#image").change(function(){
        readURL(this);
    });
    
</script>
<script src="/js/mustache.min.js"></script>
<script type="mustache/x-tmpl" id="ajaxErrors">
    <div class="alert alert-danger">

        @{{ #photo }}
        @{{.}}
        @{{ /photo }}

    </div>

</script>

<style>
    .sortableaccordian .panel
    {
        margin-bottom: 20px;
    }
    .panel .btn
    {
        margin: 0;
    }

    .form-group
    {
        margin: 0;
        padding:0;
    }

    .panel .form-group
    {
        margin: 15px;
        padding:0;
    }

    .activeleft
    {
        font-weight: bold;
        font-size: 110%;
    }

    .dirty
    {
        color: red;
    }

</style>