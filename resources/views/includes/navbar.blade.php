<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- right navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
      <?php if(app()->getLocale() == 'ar' )
          {
          ?>
          <li class="nav-item">
            <a class="nav-link menu  btn btn-md  "  href="{{ LaravelLocalization::getLocalizedURL('en', null, [], true) }}">
            <?php if(app()->getLocale() == 'ar' ) echo  __('fields_web.Navbar.en')   ;?>
            <?php if(app()->getLocale() == 'en' ) echo __('fields_web.Navbar.ar') ;?></a>
          </li>
          <?php }else
          {    ?>
            <li class="nav-item">
            <a class="nav-link menu  btn btn-md  "  href="{{ LaravelLocalization::getLocalizedURL('ar', null, [], true) }}">
            <?php if(app()->getLocale() == 'ar' ) echo  __('fields_web.Navbar.en')   ;?>
            <?php if(app()->getLocale() == 'en' ) echo __('fields_web.Navbar.ar') ;?></a>
          </li>
          <?php  }
          ?>
    </ul>
    
     <!-- SEARCH FORM -->
     <form class="form-inline ml-3 d-none">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

<!-- Left navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown dropdown-notifications">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span data-count="0" class=" badge badge-danger navbar-badge" style='content: attr(data-count);'>0</span>
        </a>

        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style='height:auto'>
          <span class="dropdown-item dropdown-header"> Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <div class='row'>
                <div class='col-2'><i class="fas fa-reply "></i></div> 
                <div class='col-7' style='height:auto'><i style='height:auto'>ne wmessages</i></div>
                <div class='col-3'><i class="text-sm text-muted" style='height:auto'>3 mins</i></div>
              </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <div class='row'>
                <div class='col-2'><i class="fas fa-envelope "></i></div> 
                <div class='col-7' style='height:auto'><i style='height:auto'>new messages</i></div>
                <div class='col-3'><i class="text-sm text-muted" style='height:auto'>3 mins</i></div>
              </div>
          </a> 
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <div class='row'>
                <div class='col-2'><i class="fas fa-users "></i></div> 
                <div class='col-7' style='height:auto'><i style='height:auto'>new messages</i></div>
                <div class='col-3'><i class="text-sm text-muted" style='height:auto'>3 mins</i></div>
              </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
              <div class='row'>
                <div class='col-2'><i class="fas fa-building "></i></div> 
                <div class='col-7' style='height:auto'><i style='height:auto'>new messages</i></div>
                <div class='col-3'><i class="text-sm text-muted" style='height:auto'>3 mins</i></div>
              </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>

       </li>
       <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/3.1/pusher.min.js"></script>

    <script type="text/javascript">
      var notificationsWrapper   = $('.dropdown-notifications');
      var notificationsToggle    = notificationsWrapper.find('a[data-toggle]');
      var notificationsCountElem = notificationsToggle.find('span[data-count]');
      var notificationsCount     = parseInt(notificationsCountElem.data('count'));
      var notifications          = notificationsWrapper.find('div.dropdown-menu');

      if (notificationsCount <= 0) {
        notificationsCountElem.hide();
      }

      // Enable pusher logging - don't include this in production
       Pusher.logToConsole = true;

    var pusher = new Pusher('732c493a2daef83bcefa', {
               cluster: 'mt1',
            //  encrypted: true
      });


      var channel = pusher.subscribe('StatusLiked');
        channel.bind('App\\Events\\StatusLiked', function(data) {
        alert(JSON.stringify(data));
        });


        


      // Subscribe to the channel we specified in our Laravel Event
     /*  var channel = pusher.subscribe('status-liked');
             channel.bind("App\\Events\\StatusLiked", function (data) {
             alert(JSON.stringify(data.comment));
             console.log(JSON.stringify(data.comment));});
     */    

        // var avatar = Math.floor(Math.random() * (71 - 20 + 1)) + 20;
/*          var newNotificationHtml = `
          <li class="notification active">
              <div class="media">
                <div class="media-left">
                  <div class="media-object">
                    <!-- // <img src="https://api.adorable.io/avatars/71/`+avatar+`.png" class="img-circle" alt="50x50" style="width: 50px; height: 50px;"> -->
                  <h6>`+data.user_name+`</h6>
                    </div>
                </div>
                <div class="media-body">
                  <strong class="notification-title">`+data.comment+`</strong>
                  <!--p class="notification-desc">Extra description can go here</p-->
                  <div class="notification-meta">
                    <small class="timestamp">about a minute ago</small>
                  </div>
                </div>
              </div>
          </li>
        `; 

        notifications.html(newNotificationHtml + existingNotifications)
        notificationsCount += 1;
        notificationsCountElem.attr('data-count', notificationsCount);
        notificationsWrapper.find('.notif-count').text(notificationsCount);
        notificationsWrapper.show();
      });*/
    
  </script>
          <script src="{{url('assets/js/app.js')}}"></script>
