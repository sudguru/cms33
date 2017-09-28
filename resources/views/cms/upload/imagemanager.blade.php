<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="myModalLabel">Image Manager</h4>
          </div>
          <div class="modal-body">
                <div class="card card-nav-tabs card-plain" id="myTabs">
                    <div class="header header-danger">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" data-tabs="tabs">
                                    <li class="active"><a href="#new" data-toggle="tab">Upload New Image</a></li>
                                    <li><a href="#browse" data-toggle="tab">Browse Images</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="content">
                        <div class="tab-content">
                            <div class="tab-pane active" id="new">
                                @include('cms.upload.imageupload')
                            </div>
                            <div class="tab-pane" id="browse">
                                @include('cms.upload.imagebrowse')
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
      </div>
    </div>