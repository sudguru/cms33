
    <style>
        .files
        {
            cursor: pointer;
        }
        #imageHolderFile
        {
            padding: 15px;
            background-color: #efefef;
            text-align: center;
        }

       

        .fixedbox
        {
           max-height: 150px;
           min-height: 150px;
           overflow: hidden;
           background-color: #efefef;
       }
        #imageHolderFile img,
        .fixedbox img
        {
            display:block;
            margin: 0 auto;
        }
   </style>

<script>
        //Image Upload & Insert
        $( document ).ready(function() {
            //hide initially
            $('#btnInsertFile').hide();

            $('#btnCancelFile').on('click', function(){
                $('#myModalFile').modal('hide');
            });

            $('#btnSimpleCancel').on('click', function(){
                $('#myModalFile').modal('hide');
            });

            $('#caption_form_file').on( "submit", function(event) { 
                //insert button click
                //alert("hither");
                event.preventDefault();
                if($('#file_id').val() == 0) return;
                if($('#captionfile').val() == "") 
                {
                    alert("Please type image caption. Later this will help you search for this images.")
                    return;
                }
                var form = new FormData(this);
                $.ajax({
                    url: '/savecaptionfile',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(response) {
                        console.log(response);

                         var element = CKEDITOR.dom.element.createFromHtml( response );
                         CKEDITOR.instances.content.insertElement( element );
                        //Close
                        $('#myModalFile').modal('hide');
                    },
                    error: function(a,b,err) {
                        document.write(a.responseText);
                    }
                });           
                
            });

            $('#btnSimpleLink').on( "click", function(event) { 
                //insert button click
                //alert("hither");
                event.preventDefault();
                if($('#linktitle').val() == "" || $('#linklink').val() == "" ) 
                {
                    alert("Please type link title & full link.")
                    return;
                }
                let link = '<a href="'+ $('#linklink').val() +'" target="'+$('#linktarget').val()+'" data-caption="'+$('#linktitle').val()+'" data-id="fileid-0">'+$('#linktitle').val()+'</a>';
                var element = CKEDITOR.dom.element.createFromHtml( link );
                CKEDITOR.instances.content.insertElement( element );
                $('#myModalFile').modal('hide');
            });



            $('#upload_form_file').on( "submit", function(event) { 
                $('#imageHolder').html('<img src="/img/loading.gif"/>');

                event.preventDefault();
                var file = $('#file')[0].files[0];
                var form = new FormData(this);
                 $('#upload_error_file').html('');

                $.ajax({
                    url: '/uploadfile',
                    data: form,
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success:function(response) {
                        //alert('hello');
                        var obj = JSON.parse(response);

                        $('#imageHolderFile').html('<img src="/img/filetypes/' + obj.fileicon + '" class="img-responsive"/>');
                        $('#file_id').val(obj.file_id); //for caption save
                        $('#file_name').val(basename(obj.path));
                        $('#btnInsertFile').show();
                    },
                    error: function(data)
                    {
                        var errors = data.responseJSON;
                        //var errors = data.responseText;
                        $('#imageHolder').html('<img src="/img/filetypes/na.png" class="img-responsive" />');
                        var tpl = $('#ajaxErrorsFile').html();
                        console.log('test');
                        console.log(tpl);
                        console.log(data.responseText);
                        console.log(errors);
                        var output = Mustache.render(tpl, errors);
                        $('#upload_error_file').html(output);
                    }
                });
            });
        });

    </script>

    <script>
    //Image Browse
    $(document).ready(function(){
        $('#file_browse').on('click', 'img.files' , function(){
            $this = $('#');
            //alert("hello");
            var file = (this.id).split('-');
            var file_id = file[1];
            var src = this.src;
            //src = src.replace("_240/", "_400/");
            console.log(src);
            $('#myTabsFile a[href="#newfile"]').tab('show');
            var captionfile = $(this).data("caption");
            console.log(caption);


            $('#imageHolderFile').html('<img src="' + src + '" class="img-responsive" />');
            $('#file_id').val(file_id); //for caption save
            $('#file_name').val(basename(src));
            $('#captionfile').val(captionfile);
            $('#btnInsertFile').show();
        });





        $('#search_form_file').on( "submit", function(event) { 
            event.preventDefault();
            var form = new FormData(this);

            $.ajax({
                url: '/searchfile',
                data: form,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                success:function(response) {
                    console.log(response);
                    var tpl = $('#ajaxFiles').html();
                    //console.log(tpl);
                    var output = Mustache.render(tpl, response);
                    console.log(output);
                    var fullpath = '/img/filetypes/';
                    output = replaceAll(output, 'src="', 'src="'+fullpath);
                    $('#file_browse').html(output);
                    
                },
                error: function(a,b,err) {
                    document.write(a.responseText);
                }
            });
        });
    });
</script>

<script type="mustache/x-tmpl" id="ajaxErrorsFile">
    <div class="alert alert-danger">

        @{{ #filename }}
        @{{.}}
        @{{ /filename }}

    </div>

</script>

<script type="mustache/x-tmpl" id="ajaxFiles">

    @{{ #. }}

    <div class="col-sm-6 col-md-3">
        <div class="thumbnail">
            <div class="fixedbox">
                <img src="@{{ fileicon }}" class="img-responsive files" id="file-@{{ id }}"  data-caption="@{{captions}}" />
            </div>
            <div class="caption">

                @{{ captions }}
            </div>
        </div>
    </div>

    @{{/.}}
</script>