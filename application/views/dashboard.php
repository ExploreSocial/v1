<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ESocial Admin</title>
    
        <!-- Vendor CSS -->
        <link href="vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="vendors/bower_components/sweetalert/dist/sweetalert-override.min.css" rel="stylesheet">
        <link href="vendors/bower_components/material-design-iconic-font/css/material-design-iconic-font.min.css" rel="stylesheet">
        <link href="vendors/socicon/socicon.min.css" rel="stylesheet">
            
        <!-- CSS -->
        <link href="css/app.min.1.css" rel="stylesheet">
        <link href="css/app.min.2.css" rel="stylesheet">
    </head>
    
    <body>
        <header id="header">
            <ul class="header-inner">
                <li id="menu-trigger" data-trigger="#sidebar"> 
                    <div class="line-wrap">
                        <div class="line top"></div>
                        <div class="line center"></div>
                        <div class="line bottom"></div>
                    </div>
                </li>
            
                <li class="logo hidden-xs">
                    <a href="index.html">ESocial Admin</a>
                </li>
                
                <li class="pull-right">
                <ul class="top-menu">
                    <li id="toggle-width">
                        <div class="toggle-switch">
                            <input id="tw-switch" type="checkbox" hidden="hidden">
                            <label for="tw-switch" class="ts-helper"></label>
                        </div>
                    </li>
                    <li id="top-search">
                        <a class="tm-search" href=""></a>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-message" href=""><i class="tmn-counts">6</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview">
                                <div class="lv-header">
                                    Messages
                                </div>
                                <div class="lv-body c-overflow">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-notification" href=""><i class="tmn-counts">9</i></a>
                        <div class="dropdown-menu dropdown-menu-lg pull-right">
                            <div class="listview" id="notifications">
                                <div class="lv-header">
                                    Notification
                    
                                    <ul class="actions">
                                        <li class="dropdown">
                                            <a href="" data-clear="notification">
                                                <i class="md md-done-all"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="lv-body c-overflow">
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">David Belle</div>
                                                <small class="lv-small">Cum sociis natoque penatibus et magnis dis parturient montes</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Jonathan Morris</div>
                                                <small class="lv-small">Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Fredric Mitchell Jr.</div>
                                                <small class="lv-small">Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Glenn Jecobs</div>
                                                <small class="lv-small">Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="lv-item" href="">
                                        <div class="media">
                                            <div class="pull-left">
                                                <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                            </div>
                                            <div class="media-body">
                                                <div class="lv-title">Bill Phillips</div>
                                                <small class="lv-small">Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                    
                                <a class="lv-footer" href="">View Previous</a>
                            </div>
                    
                        </div>
                    </li>
                    <li class="dropdown hidden-xs">
                        <a data-toggle="dropdown" class="tm-task" href=""><i class="tmn-counts">2</i></a>
                        <div class="dropdown-menu pull-right dropdown-menu-lg">
                            <div class="listview">
                                <div class="lv-header">
                                    Tasks
                                </div>
                                <div class="lv-body">
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">HTML5 Validation Report</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
                                                <span class="sr-only">95% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Google Chrome Extension</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (success)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Social Intranet Projects</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                                <span class="sr-only">20% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Bootstrap Admin Template</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                                <span class="sr-only">60% Complete (warning)</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="lv-item">
                                        <div class="lv-title m-b-5">Youtube Client App</div>
                    
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                                <span class="sr-only">80% Complete (danger)</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    
                                <a class="lv-footer" href="">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="tm-settings" href=""></a>
                        <ul class="dropdown-menu dm-icon pull-right">
                            <li>
                                <a data-action="fullscreen" href=""><i class="md md-fullscreen"></i> Toggle Fullscreen</a>
                            </li>
                            <li>
                                <a data-action="clear-localstorage" href=""><i class="md md-delete"></i> Clear Local Storage</a>
                            </li>
                            <li>
                                <a href=""><i class="md md-person"></i> Privacy Settings</a>
                            </li>
                            <li>
                                <a href=""><i class="md md-settings"></i> Other Settings</a>
                            </li>
                        </ul>
                    </li>
                    <li class="hidden-xs" id="chat-trigger" data-trigger="#chat">
                        <a class="tm-chat" href=""></a>
                    </li>
                    </ul>
                </li>
            </ul>
            
            <!-- Top Search Content -->
            <div id="top-search-wrap">
                <input type="text">
                <i id="top-search-close">&times;</i>
            </div>
        </header>
        
        <section id="main">
            <aside id="sidebar">
                <div class="sidebar-inner">
                    <div class="si-inner">
                        <div class="profile-menu">
                            <a href="">
                                <div class="profile-pic">
                                    <img src="img/profile-pics/1.jpg" alt="">
                                </div>
                
                                <div class="profile-info">
                                    Malinda Hollaway
                
                                    <i class="md md-arrow-drop-down"></i>
                                </div>
                            </a>
                
                            <ul class="main-menu">
                                <li>
                                    <a href="profile-about.html"><i class="md md-person"></i> View Profile</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-settings-input-antenna"></i> Privacy Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-settings"></i> Settings</a>
                                </li>
                                <li>
                                    <a href=""><i class="md md-history"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                
                        <ul class="main-menu">
                            <li><a href="dashboard"><i class="md md-home"></i> Dashboard</a></li>
                            <li class="sub-menu active toggled">
                                <a href=""><i class="md md-now-widgets"></i> Events</a>

                                <ul >
                                    <li><a href="create/events">Create</a></li>
                                    <li><a href="widgets.html">Manage</a></li>
                                </ul>
                            </li>
                            <!-- <li class="active"><a href="typography.html"><i class="md md-format-underline"></i> Typography</a></li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-now-widgets"></i> Widgets</a>

                                <ul>
                                    <li><a href="widget-templates.html">Templates</a></li>
                                    <li><a class="active" href="widgets.html">Widgets</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-view-list"></i> Tables</a>
                
                                <ul>
                                    <li><a href="tables.html">Normal Tables</a></li>
                                    <li><a href="data-tables.html">Data Tables</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-my-library-books"></i> Forms</a>
                
                                <ul>
                                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                                    <li><a href="form-components.html">Form Components</a></li>
                                    <li><a href="form-examples.html">Form Examples</a></li>
                                    <li><a href="form-validations.html">Form Validation</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-swap-calls"></i>User Interface</a>
                                <ul>
                                    <li><a href="colors.html">Colors</a></li>
                                    <li><a href="animations.html">Animations</a></li>
                                    <li><a href="box-shadow.html">Box Shadow</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="icons.html">Icons</a></li>
                                    <li><a href="alerts.html">Alerts</a></li>
                                    <li><a href="notification-dialog.html">Notifications & Dialogs</a></li>
                                    <li><a href="media.html">Media</a></li>
                                    <li><a href="components.html">Components</a></li>
                                    <li><a href="other-components.html">Others</a></li>
                                </ul>
                            </li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-trending-up"></i>Charts</a>
                                <ul>
                                    <li><a href="flot-charts.html">Flot Charts</a></li>
                                    <li><a href="other-charts.html">Other Charts</a></li>
                                </ul>
                            </li>
                            <li><a href="calendar.html"><i class="md md-today"></i> Calendar</a></li>
                            <li><a href="generic-classes.html"><i class="md md-layers"></i> Generic Classes</a></li>
                            <li class="sub-menu">
                                <a href=""><i class="md md-content-copy"></i> Sample Pages</a>
                                <ul>
                                    <li><a href="profile-about.html">Profile</a></li>
                                    <li><a href="list-view.html">List View</a></li>
                                    <li><a href="messages.html">Messages</a></li>
                                    <li><a href="login.html">Login and Sign Up</a></li>
                                    <li><a href="404.html">Error 404</a></li>
                                </ul>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </aside>
            
            <aside id="chat">
                <ul class="tab-nav tn-justified" role="tablist">
                    <li role="presentation" class="active"><a href="#friends" aria-controls="friends" role="tab" data-toggle="tab">Friends</a></li>
                    <li role="presentation"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online Now</a></li>
                </ul>
            
                <div class="chat-search">
                    <div class="fg-line">
                        <input type="text" class="form-control" placeholder="Search People">
                    </div>
                </div>
            
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="friends">
                        <div class="listview">
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/1.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">David Belle</div>
                                        <small class="lv-small">Last seen 3 hours ago</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/5.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Bill Phillips</div>
                                        <small class="lv-small">Last seen 3 days ago</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left">
                                        <img class="lv-img-sm" src="img/profile-pics/6.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Wendy Mitchell</div>
                                        <small class="lv-small">Last seen 2 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="online">
                        <div class="listview">
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/2.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Jonathan Morris</div>
                                        <small class="lv-small">Available</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/3.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Fredric Mitchell Jr.</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/4.jpg" alt="">
                                        <i class="chat-status-online"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Glenn Jecobs</div>
                                        <small class="lv-small">Availble</small>
                                    </div>
                                </div>
                            </a>
            
                            <a class="lv-item" href="">
                                <div class="media">
                                    <div class="pull-left p-relative">
                                        <img class="lv-img-sm" src="img/profile-pics/7.jpg" alt="">
                                        <i class="chat-status-busy"></i>
                                    </div>
                                    <div class="media-body">
                                        <div class="lv-title">Teena Bell Ann</div>
                                        <small class="lv-small">Busy</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </aside>
        
        
            <section id="content">
                <div class="container">
                    <div class="block-header">
                        <h2>Typography</h2>
                    
                        <ul class="actions">
                            <li>
                                <a href="">
                                    <i class="md md-trending-up"></i>
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <i class="md md-done-all"></i>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="" data-toggle="dropdown">
                                    <i class="md md-more-vert"></i>
                                </a>
                    
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li>
                                        <a href="">Refresh</a>
                                    </li>
                                    <li>
                                        <a href="">Manage Widgets</a>
                                    </li>
                                    <li>
                                        <a href="">Widgets Settings</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <h2>Body Copy</h2>
                    
                            <ul class="actions">
                                <li class="dropdown action-show">
                                    <a href="" data-toggle="dropdown">
                                        <i class="md md-more-vert"></i>
                                    </a>
                    
                                    <div class="dropdown-menu pull-right">
                                        <p class="p-20">
                                            You can put anything here
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="card-body card-padding">
                            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
                            <p>Pellentesque lacinia sagittis libero et feugiat. Etiam volutpat adipiscing tortor non luctus. Vivamus venenatis vitae metus et aliquet. Praesent vitae justo purus. In hendrerit lorem nisl, ac lacinia urna aliquet non. Quisque nisi tellus, rhoncus quis est sit amet, lacinia euismod nunc. Aenean nec nibh velit. Fusce quis ante in nisl molestie fringilla. Nunc vitae ante id magna feugiat condimentum. Maecenas sit amet urna massa.</p>
                            <p>Integer eu lectus sollicitudin, hendrerit est ac, sollicitudin nisl. Quisque viverra sodales lectus nec ultrices. Fusce elit dolor, dignissim a nunc id, varius suscipit turpis. Cras porttitor turpis vitae leo accumsan molestie. Morbi vitae luctus leo. Sed nec scelerisque magna, et adipiscing est. Proin lobortis lectus eu sem ullamcorper, commodo malesuada quam fringilla. Curabitur ac nunc dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sagittis enim eu est lacinia, ut egestas ligula imperdiet.</p>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <h2>Headings</h2>
                    
                            <ul class="actions">
                                <li class="dropdown action-show">
                                    <a href="" data-toggle="dropdown">
                                        <i class="md md-more-vert"></i>
                                    </a>
                    
                                    <div class="dropdown-menu pull-right">
                                        <p class="p-20">
                                            You can put anything here
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="card-body card-padding">
                            <h1>This is a Heading 1</h1>
                            <p>Suspendisse vel quam malesuada, aliquet sem sit amet, fringilla elit. Morbi tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien nec, varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros hendrerit est consequat posuere et at velit.</p>
                    
                            <div class="clearfix"></div>
                    
                            <h2>This is a Heading 2</h2>
                            <p>In nec rhoncus eros. Vestibulum eu mattis nisl. Quisque viverra viverra magna nec pulvinar. Maecenas pellentesque porta augue, consectetur facilisis diam porttitor sed. Suspendisse tempor est sodales augue rutrum tincidunt. Quisque a malesuada purus.</p>
                    
                            <div class="clearfix"></div>
                    
                            <h3>This is a Heading 3</h3>
                            <p>Vestibulum auctor tincidunt semper. Phasellus ut vulputate lacus. Suspendisse ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in tellus.</p>
                    
                            <div class="clearfix"></div>
                    
                            <h4>This is a Heading 4</h4>
                            <p>Nulla et mattis nunc. Curabitur scelerisque commodo condimentum. Mauris blandit, velit a consectetur egestas, diam arcu fermentum justo, eget ultrices arcu eros vel erat.</p>
                    
                            <div class="clearfix"></div>
                    
                            <h5>This is a Heading 5</h5>
                            <p>Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio. Vivamus pretium nec odio cursus elementum. Suspendisse molestie ullamcorper ornare.</p>
                    
                            <div class="clearfix"></div>
                    
                            <h6>This is a Heading 6</h6>
                            <p>Donec ultricies, lacus id tempor condimentum, orci leo faucibus sem, a molestie libero lectus ac justo. ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in tellus.</p>
                        </div>
                    </div>
                
                    <div class="card">
                        <div class="card-header">
                            <h2>Inline text elements</h2>
                    
                            <ul class="actions">
                                <li class="dropdown action-show">
                                    <a href="" data-toggle="dropdown">
                                        <i class="md md-more-vert"></i>
                                    </a>
                    
                                    <div class="dropdown-menu pull-right">
                                        <p class="p-20">
                                            You can put anything here
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Marked text</p>
                                    <p>For highlighting a run of text due to its relevance in another context, use the 'mark' tag.</p>
                                    <mark>This is marked text</mark>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Deleted Text</p>
                                    <p>For indicating blocks of text that have been deleted use the 'del' tag.</p>
                                    <del>This is Deleted Text</del>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Strikethrough text</p>
                                    <p>For indicating blocks of text that are no longer relevant use the 's' tag.</p>
                                    <s>This is Deleted Text</s>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Inserted Text</p>
                                    <p>For indicating additions to the document use the 'ins' tag.</p>
                                    <ins>This is Inserted Text</ins>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Underlined Text</p>
                                    <p>To underline text use the 'u' tag.</p>
                                    <u>This is Underlined Text</u>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Small Text</p>
                                    <p>For de-emphasizing inline or blocks of text, use the 'small' tag.</p>
                                    <small>This is Small Text</small>
                                </div>
                    
                                <div class="col-sm-4">
                                    <p class="c-black">Bold Text</p>
                                    <p>For emphasizing a snippet of text with a heavier font-weight.</p>
                                    <strong>This is Bold Text</strong>
                                </div>
                    
                                <div class="col-sm-4">
                                    <p class="c-black">Underline Text</p>
                                    <p>For emphasizing a snippet of text with italics.</p>
                                    <em>This is Underline Text</em>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h2>Helper Classes</h2>
                    
                                    <ul class="actions">
                                        <li class="dropdown action-show">
                                            <a href="" data-toggle="dropdown">
                                                <i class="md md-more-vert"></i>
                                            </a>
                    
                                            <div class="dropdown-menu pull-right">
                                                <p class="p-20">
                                                    You can put anything here
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="card-body card-padding">
                                    <p class="c-black">Alignment Classes</p>
                                    <p>Easily realign text to components with text alignment classes.</p>
                    
                                    <p class="text-left">Left aligned text.</p>
                                    <p class="text-center">Center aligned text.</p>
                                    <p class="text-right">Right aligned text.</p>
                                    <p class="text-justify">Justified text.</p>
                                    <p class="text-nowrap">No wrap text.</p>
                    
                                    <p class="c-black m-t-25">Transformation classes</p>
                                    <p>Transform text in components with text capitalization classes.</p>
                    
                                    <p class="text-lowercase">Lowercased text.</p>
                                    <p class="text-uppercase">Uppercased text.</p>
                                    <p class="text-capitalize">Capitalized text.</p>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-sm-6">
                            <div class="card" style="min-height: 427px">
                                <div class="card-header">
                                    <h2>Abbreviations</h2>
                    
                                    <ul class="actions">
                                        <li class="dropdown action-show">
                                            <a href="" data-toggle="dropdown">
                                                <i class="md md-more-vert"></i>
                                            </a>
                    
                                            <div class="dropdown-menu pull-right">
                                                <p class="p-20">
                                                    You can put anything here
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                    
                                <div class="card-body card-padding">
                                    <p>Stylized implementation of HTML's 'abbr' element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a 'title' attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover and to users of assistive technologies.</p>
                    
                                    <p class="c-black m-t-20">Basic abbreviation</p>
                                    <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
                    
                                    <p class="c-black m-t-20">Initialism</p>
                                    <p>Add <abbr title="Initialism" class="initialism">Initialism</abbr> to an abbreviation for a slightly smaller font-size.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2>Blockquotes</h2>
                    
                            <ul class="actions">
                                <li class="dropdown action-show">
                                    <a href="" data-toggle="dropdown">
                                        <i class="md md-more-vert"></i>
                                    </a>
                    
                                    <div class="dropdown-menu pull-right">
                                        <p class="p-20">
                                            You can put anything here
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="card-body card-padding">
                            <p class="m-b-25">For quoting blocks of content from another source within your document.</p>
                    
                            <blockquote class="m-b-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                            </blockquote>
                    
                            <blockquote class="m-b-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                    
                            <blockquote class="blockquote-reverse m-b-25">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="card-header">
                            <h2>List</h2>
                    
                            <ul class="actions">
                                <li class="dropdown action-show">
                                    <a href="" data-toggle="dropdown">
                                        <i class="md md-more-vert"></i>
                                    </a>
                    
                                    <div class="dropdown-menu pull-right">
                                        <p class="p-20">
                                            You can put anything here
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    
                        <div class="card-body card-padding">
                            <div class="row">
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Unordered</p>
                    
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Ordered</p>
                    
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Spretium nisl aliquet lorem ipsum</li>
                                        <li>Linking best ttoth bellorem</li>
                                    </ol>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Ordered - Roman</p>
                    
                                    <ol type="i">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ol>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Custom - 1</p>
                    
                                    <ul class="clist clist-angle">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Custom - 2</p>
                    
                                    <ul class="clist clist-check">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                    
                                <div class="col-sm-4 m-b-25">
                                    <p class="c-black">Custom - 3</p>
                    
                                    <ul class="clist clist-star">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit</li>
                                        <li>Phasellus iaculis neque</li>
                                        <li>Purus sodales ultricies</li>
                                        <li>Vestibulum laoreet porttitor sem</li>
                                        <li>Ac tristique libero volutpat at</li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">IE SUCKS!</h1>
                <p>You are using an outdated version of Internet Explorer, upgrade to any of the following web browser <br/>in order to access the maximum functionality of this website. </p>
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="img/browsers/chrome.png" alt="">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="img/browsers/firefox.png" alt="">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="img/browsers/safari.png" alt="">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                            <div>IE (New)</div>
                        </a>
                    </li>
                </ul>
                <p>Upgrade your browser for a Safer and Faster web experience. <br/>Thank you for your patience...</p>
            </div>   
        <![endif]-->
    
    
        <!-- Javascript Libraries -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        
        <script src="vendors/bower_components/jquery.nicescroll/jquery.nicescroll.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bootstrap-growl/bootstrap-growl.min.js"></script>
        <script src="vendors/bower_components/sweetalert/dist/sweetalert.min.js"></script>
        
        <script src="js/functions.js"></script>
        <script src="js/demo.js"></script>
    
    
    </body>
</html>