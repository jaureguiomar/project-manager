<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>@yield("title")</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="A project management Bootstrap theme by Medium Rare">
   <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
   @section("css-begin")
   @endsection
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
   <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
   @section("css-end")
   @endsection
</head>
<body>
   <div class="layout layout-nav-top">
      <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
         <a class="navbar-brand" href="index.html">
            <img alt="Pipeline" src="assets/img/logo.svg" />
         </a>
         <div class="d-flex align-items-center">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-block d-lg-none ml-2">
               <div class="dropdown">
                  <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
                  </a>
                  <div class="dropdown-menu dropdown-menu-right">
                     <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                     <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                     <a href="#" class="dropdown-item">Log Out</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="index.html">Overview</a>
               </li>
               <li class="nav-item">
                  <div class="dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">Pages</a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="pages-app.html">App Pages</a>
                        <a class="dropdown-item" href="pages-utility.html">Utility Pages</a>
                        <a class="dropdown-item" href="pages-layouts.html">Layouts</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item">
                  <div class="dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-3">Components</a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="components-bootstrap.html">Bootstrap</a>
                        <a class="dropdown-item" href="components-pipeline.html">Pipeline</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="documentation/index.html">Documentation</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="documentation/changelog.html">Changelog</a>
               </li>
            </ul>
            <div class="d-lg-flex align-items-center">
               <form class="form-inline my-lg-0 my-2">
                  <div class="input-group input-group-dark input-group-round">
                     <div class="input-group-prepend">
                        <span class="input-group-text">
                           <i class="material-icons">search</i>
                        </span>
                     </div>
                     <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app">
                  </div>
               </form>
               <div class="dropdown mx-lg-2">
                  <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Add New
                  </button>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Team</a>
                     <a class="dropdown-item" href="#">Project</a>
                     <a class="dropdown-item" href="#">Task</a>
                  </div>
               </div>
               <div class="d-none d-lg-block">
                  <div class="dropdown">
                     <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
                     </a>
                     <div class="dropdown-menu dropdown-menu-right">
                        <a href="nav-side-user.html" class="dropdown-item">Profile</a>
                        <a href="utility-account-settings.html" class="dropdown-item">Account Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-container">
         <App />
         @section("content")
         @endsection
      </div>
   </div>

   @section("js-begin")
   @endsection
   <!-- Required vendor scripts (Do not remove) -->
   <script type="text/javascript" src="assets/js/jquery.min.js"></script>
   <script type="text/javascript" src="assets/js/popper.min.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.js"></script>
   <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->
   <!-- Autosize - resizes textarea inputs as user types -->
   <script type="text/javascript" src="assets/js/autosize.min.js"></script>
   <!-- Flatpickr (calendar/date/time picker UI) -->
   <script type="text/javascript" src="assets/js/flatpickr.min.js"></script>
   <!-- Prism - displays formatted code boxes -->
   <script type="text/javascript" src="assets/js/prism.js"></script>
   <!-- Shopify Draggable - drag, drop and sort items on page -->
   <script type="text/javascript" src="assets/js/draggable.bundle.legacy.js"></script>
   <script type="text/javascript" src="assets/js/swap-animation.js"></script>
   <!-- Dropzone - drag and drop files onto the page for uploading -->
   <script type="text/javascript" src="assets/js/dropzone.min.js"></script>
   <!-- List.js - filter list elements -->
   <script type="text/javascript" src="assets/js/list.min.js"></script>
   <!-- Required theme scripts (Do not remove) -->
   <script type="text/javascript" src="assets/js/theme.js"></script>
   @section("js-end")
   @endsection
   <script type="text/javascript" src="{{ mix('assets/js/app.js') }}"></script>
</body>
</html>
