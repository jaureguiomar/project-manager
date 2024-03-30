<template>
   <div class="navbar bg-white breadcrumb-bar">
         <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
               <li class="breadcrumb-item">
                  <a href="/">Overview</a>
               </li>
               <li class="breadcrumb-item">
                  <a href="/team">Team</a>
               </li>
               <li class="breadcrumb-item">
                  <a href="/project">Project</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">
                  Task
               </li>
            </ol>
         </nav>

          <div class="dropdown">
            <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
              <i class="material-icons">settings</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">

              <a class="dropdown-item" href="#" data-toggle="modal" data-target="#task-edit-modal">Edit</a>
              <a class="dropdown-item" href="#">Mark as Complete</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item text-danger" href="#">Archive</a>

            </div>
          </div>

        </div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10">
              <div class="page-header">
                <h1>Create brand mood boards</h1>
                <p class="lead">Assemble three distinct mood boards for client consideration</p>
                <div class="d-flex align-items-center">
                  <ul class="avatars">
                     <Avatar
                        name="Claire Connors"
                        image="assets/img/avatar-female-1.jpg"
                        :link=true
                     />
                     <Avatar
                        name="Marcus Simmons"
                        image="assets/img/avatar-male-1.jpg"
                        :link=true
                     />
                     <Avatar
                        name="Marcus Simmons"
                        image="assets/img/avatar-male-1.jpg"
                        :link=true
                     />
                     <Avatar
                        name="Marcus Simmons"
                        image="assets/img/avatar-male-1.jpg"
                        :link=true
                     />
                  </ul>
                  <button class="btn btn-round flex-shrink-0" data-toggle="modal" data-target="#user-manage-modal">
                    <i class="material-icons">add</i>
                  </button>
                </div>
                <div>
                  <div class="progress">
                    <div class="progress-bar bg-success" style="width:42%;"></div>
                  </div>
                  <div class="d-flex justify-content-between text-small">
                    <div class="d-flex align-items-center">
                      <i class="material-icons">playlist_add_check</i>
                      <span>3/7</span>
                    </div>
                    <span>Due 14 days</span>
                  </div>
                </div>
              </div>
              <ul class="nav nav-tabs nav-fill" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#task" role="tab" aria-controls="task" aria-selected="true">Task</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#files" role="tab" aria-controls="files" aria-selected="false">Files</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Activity</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane fade show active" id="task" role="tabpanel">
                  <div class="content-list" data-filter-list="checklist">
                    <div class="row content-list-head">
                      <div class="col-auto">
                        <h3>Checklist</h3>
                        <button class="btn btn-round" data-toggle="tooltip" data-title="New item">
                          <i class="material-icons">add</i>
                        </button>
                      </div>
                      <form class="col-md-auto">
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filter checklist" aria-label="Filter checklist">
                        </div>
                      </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body">
                      <form class="checklist">
                        <Checklist :checked="true" />
                        <Checklist :checked="false" />
                        <Checklist :checked="true" />
                        <Checklist :checked="false" />
                        <Checklist :checked="true" />
                        <Checklist :checked="false" />
                        <Checklist :checked="true" />
                      </form>
                      <div class="drop-to-delete">
                        <div class="drag-to-delete-title">
                          <i class="material-icons">delete</i>
                        </div>
                      </div>
                    </div>
                    <!--end of content list body-->
                  </div>
                  <!--end of content list-->
                  <div class="content-list" data-filter-list="content-list-body">
                    <div class="row content-list-head">
                      <div class="col-auto">
                        <h3>Notes</h3>
                        <button class="btn btn-round" data-toggle="modal" data-target="#note-add-modal">
                          <i class="material-icons">add</i>
                        </button>
                      </div>
                      <form class="col-md-auto">
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filter notes" aria-label="Filter notes">
                        </div>
                      </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body">
                     <Note />
                     <Note />
                     <Note />
                     <Note />
                    </div>
                  </div>
                </div>
                <!--end of tab-->
                <div class="tab-pane fade" id="files" role="tabpanel" data-filter-list="dropzone-previews">
                  <div class="content-list">
                    <div class="row content-list-head">
                      <div class="col-auto">
                        <h3>Files</h3>
                      </div>
                      <form class="col-md-auto">
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filter files" aria-label="Filter Tasks">
                        </div>
                      </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body">
                      <ul class="d-none dz-template">
                        <li class="list-group-item dz-preview dz-file-preview">
                          <div class="media align-items-center dz-details">
                            <ul class="avatars">
                              <li>
                                <div class="avatar bg-primary dz-file-representation">
                                  <i class="material-icons">attach_file</i>
                                </div>
                              </li>
                              <li>
                                <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar" data-title="David Whittaker" data-toggle="tooltip" />
                              </li>
                            </ul>
                            <div class="media-body d-flex justify-content-between align-items-center">
                              <div class="dz-file-details">
                                <a href="#" class="dz-filename">
                                  <span data-dz-name></span>
                                </a>
                                <br>
                                <span class="text-small dz-size" data-dz-size></span>
                              </div>
                              <img alt="Loader" src="assets/img/loader.svg" class="dz-loading" />
                              <div class="dropdown">
                                <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="material-icons">more_vert</i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                  <a class="dropdown-item" href="#">Download</a>
                                  <a class="dropdown-item" href="#">Share</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item text-danger" href="#" data-dz-remove>Delete</a>
                                </div>
                              </div>
                              <button class="btn btn-danger btn-sm dz-remove" data-dz-remove>
                                Cancel
                              </button>
                            </div>
                          </div>
                          <div class="progress dz-progress">
                            <div class="progress-bar dz-upload" data-dz-uploadprogress></div>
                          </div>
                        </li>
                      </ul>
                      <form class="dropzone" action="https://mediumra.re/dropzone/upload.php">
                        <span class="dz-message">Drop files here or click here to upload</span>
                      </form>

                      <ul class="list-group list-group-activity dropzone-previews flex-column-reverse">
                        <File />
                        <File />
                        <File />
                        <File />
                        <File />
                        <File />
                      </ul>
                    </div>
                  </div>
                  <!--end of content list-->
                </div>
                <div class="tab-pane fade" id="activity" role="tabpanel" data-filter-list="list-group-activity">
                  <div class="content-list">
                    <div class="row content-list-head">
                      <div class="col-auto">
                        <h3>Activity</h3>
                      </div>
                      <form class="col-md-auto">
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filter activity" aria-label="Filter activity">
                        </div>
                      </form>
                    </div>
                    <!--end of content list head-->
                    <div class="content-list-body">
                      <ol class="list-group list-group-activity">
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                        <Activity
                           icon="playlist_add_check"
                           image="assets/img/default-avatar.png"
                           username="jaureguiomar"
                           description="Testing description"
                           time="Just now"
                        />
                      </ol>
                    </div>
                  </div>
                  <!--end of content list-->
                </div>
              </div>
              <form class="modal fade" id="user-manage-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Manage Users</h5>
                      <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <!--end of modal head-->
                    <div class="modal-body">
                      <div class="users-manage" data-filter-list="form-group-users">
                        <div class="mb-3">
                          <ul class="avatars text-center">

                            <li>
                              <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-toggle="tooltip" data-title="Claire Connors" />
                            </li>

                            <li>
                              <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar" data-toggle="tooltip" data-title="Marcus Simmons" />
                            </li>

                            <li>
                              <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown" />
                            </li>

                            <li>
                              <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-toggle="tooltip" data-title="Harry Xai" />
                            </li>

                          </ul>
                        </div>
                        <div class="input-group input-group-round">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">filter_list</i>
                            </span>
                          </div>
                          <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                        </div>
                        <div class="form-group-users">

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-1" checked>
                            <label class="custom-control-label" for="user-manage-1">
                              <span class="d-flex align-items-center">
                                <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Claire Connors</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-2" checked>
                            <label class="custom-control-label" for="user-manage-2">
                              <span class="d-flex align-items-center">
                                <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Marcus Simmons</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-3" checked>
                            <label class="custom-control-label" for="user-manage-3">
                              <span class="d-flex align-items-center">
                                <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Peggy Brown</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-4" checked>
                            <label class="custom-control-label" for="user-manage-4">
                              <span class="d-flex align-items-center">
                                <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Harry Xai</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-5">
                            <label class="custom-control-label" for="user-manage-5">
                              <span class="d-flex align-items-center">
                                <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Sally Harper</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-6">
                            <label class="custom-control-label" for="user-manage-6">
                              <span class="d-flex align-items-center">
                                <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Ravi Singh</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-7">
                            <label class="custom-control-label" for="user-manage-7">
                              <span class="d-flex align-items-center">
                                <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Kristina Van Der Stroem</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-8">
                            <label class="custom-control-label" for="user-manage-8">
                              <span class="d-flex align-items-center">
                                <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">David Whittaker</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-9">
                            <label class="custom-control-label" for="user-manage-9">
                              <span class="d-flex align-items-center">
                                <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Kerri-Anne Banks</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-10">
                            <label class="custom-control-label" for="user-manage-10">
                              <span class="d-flex align-items-center">
                                <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Masimba Sibanda</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-11">
                            <label class="custom-control-label" for="user-manage-11">
                              <span class="d-flex align-items-center">
                                <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Krishna Bajaj</span>
                              </span>
                            </label>
                          </div>

                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="user-manage-12">
                            <label class="custom-control-label" for="user-manage-12">
                              <span class="d-flex align-items-center">
                                <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2" />
                                <span class="h6 mb-0" data-filter-by="text">Kenny Tran</span>
                              </span>
                            </label>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                      <button role="button" class="btn btn-primary" type="submit">
                        Done
                      </button>
                    </div>
                  </div>
                </div>
              </form>
              <form class="modal fade" id="task-edit-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">Edit Task</h5>
                      <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <!--end of modal head-->
                    <ul class="nav nav-tabs nav-fill" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="task-edit-details-tab" data-toggle="tab" href="#task-edit-details" role="tab" aria-controls="task-edit-details" aria-selected="true">Details</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="task-edit-members-tab" data-toggle="tab" href="#task-edit-members" role="tab" aria-controls="task-edit-members" aria-selected="false">Members</a>
                      </li>
                    </ul>
                    <div class="modal-body">
                      <div class="tab-content">
                        <div class="tab-pane fade show active" id="task-edit-details" role="tabpanel">
                          <h6>General Details</h6>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Name</label>
                            <input class="form-control col" type="text" placeholder="Task name" value="Create brand mood boards" name="task-name" />
                          </div>
                          <div class="form-group row">
                            <label class="col-3">Description</label>
                            <textarea class="form-control col" rows="3" placeholder="Task description" name="task-description">Assemble three distinct mood boards for client consideration</textarea>
                          </div>
                          <hr>
                          <h6>Timeline</h6>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Start Date</label>
                            <input class="form-control col" type="text" name="task-start" placeholder="Select a date" data-flatpickr data-default-date="2021-04-21" data-alt-input="true" />
                          </div>
                          <div class="form-group row align-items-center">
                            <label class="col-3">Due Date</label>
                            <input class="form-control col" type="text" name="task-due" placeholder="Select a date" data-flatpickr data-default-date="2021-09-15" data-alt-input="true" />
                          </div>
                          <div class="alert alert-warning text-small" role="alert">
                            <span>You can change due dates at any time.</span>
                          </div>
                        </div>
                        <div class="tab-pane fade" id="task-edit-members" role="tabpanel">
                          <div class="users-manage" data-filter-list="form-group-users">
                            <div class="mb-3">
                              <ul class="avatars text-center">

                                <li>
                                  <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar" data-toggle="tooltip" data-title="Claire Connors" />
                                </li>

                                <li>
                                  <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar" data-toggle="tooltip" data-title="Marcus Simmons" />
                                </li>

                                <li>
                                  <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown" />
                                </li>

                                <li>
                                  <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-toggle="tooltip" data-title="Harry Xai" />
                                </li>

                              </ul>
                            </div>
                            <div class="input-group input-group-round">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">filter_list</i>
                                </span>
                              </div>
                              <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                            </div>
                            <div class="form-group-users">

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-1" checked>
                                <label class="custom-control-label" for="task-user-1">
                                  <span class="d-flex align-items-center">
                                    <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Claire Connors</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-2" checked>
                                <label class="custom-control-label" for="task-user-2">
                                  <span class="d-flex align-items-center">
                                    <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Marcus Simmons</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-3" checked>
                                <label class="custom-control-label" for="task-user-3">
                                  <span class="d-flex align-items-center">
                                    <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Peggy Brown</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-4" checked>
                                <label class="custom-control-label" for="task-user-4">
                                  <span class="d-flex align-items-center">
                                    <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Harry Xai</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-5">
                                <label class="custom-control-label" for="task-user-5">
                                  <span class="d-flex align-items-center">
                                    <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Sally Harper</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-6">
                                <label class="custom-control-label" for="task-user-6">
                                  <span class="d-flex align-items-center">
                                    <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Ravi Singh</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-7">
                                <label class="custom-control-label" for="task-user-7">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kristina Van Der Stroem</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-8">
                                <label class="custom-control-label" for="task-user-8">
                                  <span class="d-flex align-items-center">
                                    <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">David Whittaker</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-9">
                                <label class="custom-control-label" for="task-user-9">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kerri-Anne Banks</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-10">
                                <label class="custom-control-label" for="task-user-10">
                                  <span class="d-flex align-items-center">
                                    <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Masimba Sibanda</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-11">
                                <label class="custom-control-label" for="task-user-11">
                                  <span class="d-flex align-items-center">
                                    <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Krishna Bajaj</span>
                                  </span>
                                </label>
                              </div>

                              <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="task-user-12">
                                <label class="custom-control-label" for="task-user-12">
                                  <span class="d-flex align-items-center">
                                    <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2" />
                                    <span class="h6 mb-0" data-filter-by="text">Kenny Tran</span>
                                  </span>
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                      <button role="button" class="btn btn-primary" type="submit">
                        Save
                      </button>
                    </div>
                  </div>
                </div>
              </form>

              <form class="modal fade" id="note-add-modal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title">New Note</h5>
                      <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                        <i class="material-icons">close</i>
                      </button>
                    </div>
                    <!--end of modal head-->
                    <div class="modal-body">
                      <div class="form-group row align-items-center">
                        <label class="col-3">Title</label>
                        <input class="form-control col" type="text" placeholder="Note title" name="note-name" />
                      </div>
                      <div class="form-group row">
                        <label class="col-3">Text</label>
                        <textarea class="form-control col" rows="6" placeholder="Body text for note" name="note-description"></textarea>
                      </div>
                    </div>
                    <!--end of modal body-->
                    <div class="modal-footer">
                      <button role="button" class="btn btn-primary" type="submit">
                        Create Note
                      </button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Avatar from "../components/Avatar.vue";
import Checklist from "../components/Checklist.vue";
import Note from "../components/Note.vue";
import File from "../components/File.vue";
import Activity from "../components/Activity.vue";

export default defineComponent({
   name: "TaskView",
   components: {
      Avatar,
      Checklist,
      Note,
      File,
      Activity
   },
   setup() {
      return {};
   }
});
</script>
