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
            <li class="breadcrumb-item active" aria-current="page">
               Project
            </li>
         </ol>
      </nav>
      <div class="dropdown">
         <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="material-icons">settings</i>
         </button>
         <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#project-edit-modal">Edit Project</a>
            <a class="dropdown-item" href="#">Share</a>
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
               <h1>{{ project.name }}</h1>
               <p class="lead">{{ project.description }}</p>
               <div class="d-flex align-items-center">
                  <ul class="avatars">
                     <Avatar
                        v-for="user in project.users"
                        :name="user.username"
                        :image="user.image"
                        :link="true"
                     />
                  </ul>
                  <button class="btn btn-round flex-shrink-0" data-toggle="modal" data-target="#user-manage-modal">
                     <i class="material-icons">add</i>
                  </button>
               </div>
               <div>
                  <div class="progress">
                     <div class="progress-bar bg-success" style="width:25%;"></div>
                  </div>
                  <div class="d-flex justify-content-between text-small">
                     <div class="d-flex align-items-center">
                        <i class="material-icons">playlist_add_check</i>
                        <span>3/12</span>
                     </div>
                     <span>Due 9 days</span>
                  </div>
               </div>
            </div>
            <ul class="nav nav-tabs nav-fill" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#tasks" role="tab" aria-controls="tasks" aria-selected="true">Tasks</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#files" role="tab" aria-controls="files" aria-selected="false">Files</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#activity" role="tab" aria-controls="activity" aria-selected="false">Activity</a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade show active" id="tasks" role="tabpanel" data-filter-list="card-list-body">
                  <div class="row content-list-head">
                     <div class="col-auto">
                        <h3>Tasks</h3>
                        <button class="btn btn-round" data-toggle="modal" data-target="#task-add-modal">
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
                           <input type="search" class="form-control filter-list-input" placeholder="Filter tasks" aria-label="Filter Tasks">
                        </div>
                     </form>
                  </div>
                  <div class="content-list-body">
                     <TaskSection
                        v-for="section in project.tasks"
                        :name="section.name"
                        :tasks="section.tasks"
                     />
                  </div>
               </div>
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
                     <div class="content-list-body row">
                        <div class="col">
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
                           </ul>
                        </div>
                     </div>
                  </div>
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
                     <div class="content-list-body">
                        <ol class="list-group list-group-activity">
                           <Activity
                              v-for="activity in project.activities"
                              icon="playlist_add_check"
                              image="assets/img/default-avatar.png"
                              username="jaureguiomar"
                              description="Testing description"
                              time="Just now"
                           />
                        </ol>
                     </div>
                  </div>
               </div>
            </div>

            <ProjectUserManageModal />
            <ProjectEditModal />
            <ProjectTaskAddModal />
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import axios from "../utils/axios";
import { defineComponent, ref, reactive } from "vue";
import Avatar from "../components/Avatar.vue";
import TaskSection from "../components/TaskSection.vue";
import Activity from "../components/Activity.vue";
import File from "../components/File.vue";
import ProjectUserManageModal from "../components/modals/ProjectUserManageModal.vue";
import ProjectEditModal from "../components/modals/ProjectEditModal.vue";
import ProjectTaskAddModal from "../components/modals/ProjectTaskAddModal.vue";
import { ProjectAll } from "../types/project";

export default defineComponent({
   name: "ProjectView",
   components: {
      Avatar,
      TaskSection,
      Activity,
      File,
      ProjectUserManageModal,
      ProjectEditModal,
      ProjectTaskAddModal
   },
   setup() {
      const idTeam = ref(1);
      const project = reactive<ProjectAll>({
         id: -1,
         is_active: -1,
         created: "",
         updated: "",
         name: "",
         description: "",
         tasks: [],
         files: [],
         activities: [],
         users: []
      });

      axios.get<ProjectAll>(`/v1/project/all/${ idTeam.value }`)
         .then((response) => {
            if(response.data) {
               const data = response.data;
               project.id = data.id;
               project.is_active = data.is_active;
               project.created = data.created;
               project.updated = data.updated;
               project.name = data.name;
               project.description = data.description;
               project.tasks = data.tasks;
               project.files = data.files;
               project.activities = data.activities;
               project.users = data.users;
            } else {
               console.log("No data to display");
            }
         })
         .catch((error) => {
            console.log("error", error);
         });

      return {
         project
      };
   }
});
</script>
