@extends ('layouts.master')

@section ('content')
    <div class="mywell row">
        <div class="col-md-4">
            <div class="well well-lg">
              <h3>Set Welcome Post</h3>
              <p>Choose from Dropdown the post you want as the Welcome Post in your home page. </p>
              <p class="text-warning">You may not need to set this if there is no Welcome Post in your home page</p>
              <p>
                  <form method="POST" action="/setwelcome">
                     {{ csrf_field() }}
                     <select name="welcomepost" class="form-control">
                         <option value="0">Select Welcome post from the list</option>
                         @foreach($posts as $post)
                            <option value="{{ $post->id }}" {{ ($post->id == $siteinfo[0]->welcome) ? 'selected': '' }} >{{ $post->title }}</option>
                         @endforeach
                     </select>
                    <button class="btn btn-info">Save</button>
                  </form>
              </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well well-lg">
              <h3>Set Messages Post</h3>
              <p>Choose from Dropdown the post you want as the Message Post in your home page.<br>(Eg. Message from the Chairpeerson / Principal) </p>
              <p class="text-warning">You may not need to set this if there is no Message Post in your home page</p>
              <p>
                  <form method="POST" action="/setmessage">
                     {{ csrf_field() }}
                     <select name="message1" class="form-control">
                         <option value="0">Select Welcome post from the list</option>
                         @foreach($posts as $post)
                            <option value="{{ $post->id }}" {{ ($post->id == $siteinfo[0]->message1) ? 'selected': '' }} >{{ $post->title }}</option>
                         @endforeach
                     </select>
                     <select name="message2" class="form-control">
                         <option value="0">Select Welcome post from the list</option>
                         @foreach($posts as $post)
                            <option value="{{ $post->id }}" {{ ($post->id == $siteinfo[0]->message2) ? 'selected': '' }}>{{ $post->title }}</option>
                         @endforeach
                     </select>
                    <button class="btn btn-info">Save</button>
                  </form>
              </p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="well well-lg">
              <h3>Set Notification Category</h3>
              <p>Choose from Dropdown the Category you want for Notification Category. </p>
              <p>Notifications are Alerts / Pop Ups the visitors of your website sees when they visit your site.</p>
              <p class="text-warning">You may not need to set this if you don't want to show notifications in your home page</p>
              <p>
                  <form method="POST" action="/setnotificationcategory">
                     {{ csrf_field() }}
                     <select name="notificationcategory" class="form-control">
                         <option value="0">Select Category from the list</option>
                         @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ ($category->id == $siteinfo[0]->notificationcategory) ? 'selected': '' }} >{{ $category->name }}</option>
                         @endforeach
                     </select>
                    <button class="btn btn-info">Save</button>
                  </form>
              </p>
            </div>
        </div>
    </div>
    
    

    
    
    
	<div class="jumbotron">
      <h2>Publish Your Changes</h2>
      <p>To make your website load faster, and to make your content avaialable in the CDNs we use through out the world, you can publish your dynamic contents into JSON files.</p>
      <p>So after you make changes to your data, please don't forget to hit the button below.</p>
      <p>
          <form method="POST" action="/publish">
             {{ csrf_field() }}
          <button class="btn btn-primary btn-lg">Publish Your Content</button>
          </form>
      </p>
    </div>

	
@endsection

@section('footerjs')

    <style>
        .well {
            min-height: 440px;
            padding:20px;
        }
        .well h3
        {
            margin: 0;
            padding: 0;
            margin-bottom: 20px;
        }
    </style>

@endsection