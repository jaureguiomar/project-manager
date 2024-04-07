<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <title>@yield("title")</title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="A project management Bootstrap theme by Medium Rare">
   <link href="assets/img/favicon.ico" rel="icon" type="image/x-icon">
   @section("css-begin")
   @show
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Gothic+A1" rel="stylesheet">
   <link href="assets/css/theme.css" rel="stylesheet" type="text/css" media="all" />
   @section("css-end")
   @show
</head>
<body>
   <div class="layout layout-nav-side">
      <div class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
         <a class="navbar-brand" href="{{ route('core:index') }}">
            <img alt="Pipeline" src="assets/img/logo.svg" />
         </a>
         @include("components.navbar-responsive")

         <div class="collapse navbar-collapse flex-column" id="navbar-collapse">
            <ul class="navbar-nav d-lg-block">
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('core:index') }}">Home</a>
               </li>
               <li class="nav-item">
                  <a
                     class="nav-link"
                     href="#"
                     data-toggle="collapse"
                     aria-expanded="false"
                     data-target="#submenu-2"
                     aria-controls="submenu-2"
                  >
                     Teams
                  </a>
                  <div id="submenu-2" class="collapse">
                     <ul class="nav nav-small flex-column">
                        @foreach($layout["sidebar"]["teams"] as $team)
                           <li class="nav-item">
                              <a class="nav-link" href="{{ route('team:index', [ 'idTeam' => $team->id ]) }}">
                                 {{ $team->name }}
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3">
                     Projects
                  </a>
                  <div id="submenu-3" class="collapse">
                     <ul class="nav nav-small flex-column">
                        @foreach($layout["sidebar"]["projects"] as $project)
                           <li class="nav-item">
                              <a class="nav-link" href="/project?idTeam={{ $project->team_id }}&idProject={{ $project->id }}">
                                 {{ $project->name }}
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4">
                     Tasks
                  </a>
                  <div id="submenu-4" class="collapse">
                     <ul class="nav nav-small flex-column">
                        @foreach($layout["sidebar"]["tasks"] as $task)
                           <li class="nav-item">
                              <a class="nav-link" href="/task?idTeam={{ $task->team_id }}&idProject={{ $task->project_id }}&idTask={{ $task->id }}">
                                 {{ $task->name }}
                              </a>
                           </li>
                        @endforeach
                     </ul>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/settings">Settings</a>
               </li>
            </ul>
            <hr>
            <div class="d-none d-lg-block w-100">
               <span class="text-small text-muted">Quick Links</span>
               <ul class="nav nav-small flex-column mt-2">
                  <li class="nav-item">
                     <a href="/" class="nav-link">Team Overview</a>
                  </li>
                  <li class="nav-item">
                     <a href="/" class="nav-link">Project</a>
                  </li>
                  <li class="nav-item">
                     <a href="/" class="nav-link">Single Task</a>
                  </li>
                  <li class="nav-item">
                     <a href="/" class="nav-link">Kanban Board</a>
                  </li>
               </ul>
               <hr>
            </div>
            <div>
               <form>
                  <div class="input-group input-group-dark input-group-round">
                     <div class="input-group-prepend">
                     <span class="input-group-text">
                        <i class="material-icons">search</i>
                     </span>
                     </div>
                     <input type="search" class="form-control form-control-dark" placeholder="Search" aria-label="Search app">
                  </div>
               </form>
               <div class="dropdown mt-2">
                  <button class="btn btn-primary btn-block dropdown-toggle" type="button" id="newContentButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Add New
                  </button>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Team</a>
                     <a class="dropdown-item" href="#">Project</a>
                     <a class="dropdown-item" href="#">Task</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="d-none d-lg-block">
            <div class="dropup">
               <a href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img alt="Image" src="assets/img/avatar-male-4.jpg" class="avatar" />
               </a>
               <div class="dropdown-menu">
                  <a href="/user" class="dropdown-item">Profile</a>
                  <a href="/settings" class="dropdown-item">Account Settings</a>
                  <a href="#" class="dropdown-item">Log Out</a>
               </div>
            </div>
         </div>
      </div>
      <div class="main-container">
         @section("content")
         @show

         @include("components.chat-bubble")
         <div class="collapse sidebar-floating" id="floating-chat">
            @include("components.chat")
         </div>
      </div>
   </div>

   @section("js-begin")
   @show
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
   @show
   <script type="text/javascript" src="{{ mix('assets/js/app.js') }}"></script>
</body>
</html>
