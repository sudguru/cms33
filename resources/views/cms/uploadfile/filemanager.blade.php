<div class="modal fade" id="myModalFile" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Links & File Manager</h4>
    </div>
    <div class="modal-body">
        <div class="card card-nav-tabs card-plain" id="myTabsFile">
            <div class="header header-success">
                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                        <ul class="nav nav-tabs" data-tabs="tabs">
                            <li class="active"><a href="#simplefile" data-toggle="tab">Simple Link</a></li>
                            <li><a href="#newfile" data-toggle="tab">Upload New File</a></li>
                            <li><a href="#browsefile" data-toggle="tab">Browse Files</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="tab-content">
                    <div class="tab-pane active" id="simplefile">
                        @include('cms.uploadfile.simplelink')
                    </div>
                    <div class="tab-pane" id="newfile">
                        @include('cms.uploadfile.fileupload')
                    </div>
                    <div class="tab-pane" id="browsefile">
                        @include('cms.uploadfile.filebrowse')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>