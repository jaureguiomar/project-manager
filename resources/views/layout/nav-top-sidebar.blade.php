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
   <div class="layout layout-nav-top layout-sidebar">
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
                     <a href="/user" class="dropdown-item">Profile</a>
                     <a href="/settings" class="dropdown-item">Account Settings</a>
                     <a href="#" class="dropdown-item">Log Out</a>
                  </div>
               </div>
            </div>
         </div>
         <div class="collapse navbar-collapse justify-content-between" id="navbar-collapse">
            <ul class="navbar-nav">
               <li class="nav-item">
                  <a class="nav-link" href="{{ route('core:index') }}">Home</a>
               </li>
               <li class="nav-item">
                  <div class="dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-2">
                        Teams
                     </a>
                     <div class="dropdown-menu">
                        @foreach($layout["sidebar"]["teams"] as $team)
                           <a class="dropdown-item" href="/team?idTeam={{ $team->id }}">
                              {{ $team->name }}
                           </a>
                        @endforeach
                     </div>
                  </div>
               </li>
               <li class="nav-item">
                  <div class="dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-3">
                        Projects
                     </a>
                     <div class="dropdown-menu">
                        @foreach($layout["sidebar"]["projects"] as $project)
                           <a class="dropdown-item" href="/project?idTeam={{ $project->team_id }}&idProject={{ $project->id }}">
                              {{ $project->name }}
                           </a>
                        @endforeach
                     </div>
                  </div>
               </li>
               <li class="nav-item">
                  <div class="dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false" aria-haspopup="true" id="nav-dropdown-3">
                        Tasks
                     </a>
                     <div class="dropdown-menu">
                        @foreach($layout["sidebar"]["tasks"] as $task)
                           <a class="dropdown-item" href="/task?idTeam={{ $task->team_id }}&idProject={{ $task->project_id }}&idTask={{ $task->id }}">
                              {{ $task->name }}
                           </a>
                        @endforeach
                     </div>
                  </div>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="/settings">Settings</a>
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
                        <a href="/user" class="dropdown-item">Profile</a>
                        <a href="/settings" class="dropdown-item">Account Settings</a>
                        <a href="#" class="dropdown-item">Log Out</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-container">
         <div class="sidebar-container">
            <button class="btn btn-primary btn-round btn-floating btn-lg d-lg-none" type="button" data-toggle="collapse" data-target="#sidebar-collapse" aria-expanded="false">
               <i class="material-icons">more_horiz</i>
               <i class="material-icons">close</i>
            </button>
            <div class="sidebar collapse" id="sidebar-collapse">
               <div class="sidebar-content">
                  <div class="chat-module" data-filter-list="chat-module-body">
                     <div class="chat-module-top">
                        <form>
                        <div class="input-group input-group-round">
                           <div class="input-group-prepend">
                              <span class="input-group-text">
                              <i class="material-icons">search</i>
                              </span>
                           </div>
                           <input type="search" class="form-control filter-list-input" placeholder="Search chat" aria-label="Search Chat">
                        </div>
                        </form>
                        <div class="chat-module-body">
                           <div class="media chat-item">
                              <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">Claire</span>
                                 <span data-filter-by="text">4 days ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                 <p>Hey guys, just kicking things off here in the chat window. Hope you&#39;re all ready to tackle this great project. Let&#39;s smash some Brand Concept &amp; Design!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">Peggy</span>
                                 <span data-filter-by="text">4 days ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                 <p>Nice one <a href="#">@Claire</a>, we&#39;ve got some killer ideas kicking about already.
                                    <img src="https://media.giphy.com/media/aTeHNLRLrwwwM/giphy.gif" alt="alt text" title="Thinking">
                                 </p>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Marcus" src="assets/img/avatar-male-1.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">Marcus</span>
                                 <span data-filter-by="text">3 days ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                 <p>Roger that boss! <a href="">@Ravi</a> and I have already started gathering some stuff for the mood boards, excited to start! &#x1f525;</p>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Ravi" src="assets/img/avatar-male-3.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">Ravi</span>
                                 <span data-filter-by="text">3 days ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                 <h1>&#x1f609;</h1>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Claire" src="assets/img/avatar-female-1.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">Claire</span>
                                 <span data-filter-by="text">2 days ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                 <p>Can&#39;t wait! <a href="#">@David</a> how are we coming along with the <a href="#">Client Objective Meeting</a>?</p>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="David" src="assets/img/avatar-male-4.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                 <span class="chat-item-author" data-filter-by="text">David</span>
                                 <span data-filter-by="text">Yesterday</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                    <p>Coming along nicely, we&#39;ve got a draft for the client questionnaire completed, take a look! &#x1f913;</p>
                                 </div>

                                 <div class="media media-attachment">
                                    <div class="avatar bg-primary">
                                       <i class="material-icons">insert_drive_file</i>
                                    </div>
                                    <div class="media-body">
                                       <a href="#" data-filter-by="text">questionnaire-draft.doc</a>
                                       <span data-filter-by="text">24kb Document</span>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Sally" src="assets/img/avatar-female-3.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                    <span class="chat-item-author" data-filter-by="text">Sally</span>
                                    <span data-filter-by="text">2 hours ago</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                    <p>Great start guys, I&#39;ve added some notes to the task. We may need to make some adjustments to the last couple of items - but no biggie!</p>
                                 </div>
                              </div>
                           </div>
                           <div class="media chat-item">
                              <img alt="Peggy" src="assets/img/avatar-female-2.jpg" class="avatar" />
                              <div class="media-body">
                                 <div class="chat-item-title">
                                    <span class="chat-item-author" data-filter-by="text">Peggy</span>
                                    <span data-filter-by="text">Just now</span>
                                 </div>
                                 <div class="chat-item-body" data-filter-by="text">
                                    <p>Well done <a href="#">@all</a>. See you all at 2 for the kick-off meeting. &#x1f91C;</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="chat-module-bottom">
                        <form class="chat-form">
                           <textarea class="form-control" placeholder="Type message" rows="1"></textarea>
                           <div class="chat-form-buttons">
                              <button type="button" class="btn btn-link">
                                 <i class="material-icons">tag_faces</i>
                              </button>
                              <div class="custom-file custom-file-naked">
                                 <input type="file" class="custom-file-input" id="customFile">
                                 <label class="custom-file-label" for="customFile">
                                    <i class="material-icons">attach_file</i>
                                 </label>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="content-container">
            <div id="app">
               <App />
               @section("content")
               @endsection
            </div>
         </div>
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
