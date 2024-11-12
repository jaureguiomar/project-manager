<template>
   <div class="navbar bg-white breadcrumb-bar">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item">
               <a href="/">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
               Team
            </li>
         </ol>
      </nav>
      <div class="dropdown">
         <button class="btn btn-round" role="button" data-toggle="dropdown" aria-expanded="false">
            <i class="material-icons">settings</i>
         </button>
         <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#team-manage-modal">Edit Team</a>
            <a class="dropdown-item" href="#">Share</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item text-danger" href="#">Leave</a>
         </div>
      </div>
   </div>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-11 col-xl-10">
            <div class="page-header">
               <h1>{{ team.name }}</h1>
               <p class="lead">{{ team.description }}</p>
               <div class="d-flex align-items-center">
                  <div class="avatars">
                     <Avatar
                        v-for="user in users"
                        :name="user.username"
                        :image="user.image"
                     />
                  </div>
                  <button class="btn btn-round flex-shrink-0" data-toggle="modal" data-target="#user-invite-modal">
                     <i class="material-icons">add</i>
                  </button>
               </div>
            </div>
            <hr>
            <ul class="nav nav-tabs nav-fill" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#projects" role="tab" aria-controls="projects" aria-selected="true">Projects</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#members" role="tab" aria-controls="members" aria-selected="false">Members</a>
               </li>
            </ul>
            <div class="tab-content">
               <div class="tab-pane fade show active" id="projects" role="tabpanel" data-filter-list="content-list-body">
                  <div class="content-list">
                     <div class="row content-list-head">
                        <div class="col-auto">
                           <h3>Projects</h3>
                           <button class="btn btn-round" data-toggle="modal" data-target="#project-add-modal">
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
                              <input type="search" class="form-control filter-list-input" placeholder="Filter projects" aria-label="Filter Projects">
                           </div>
                        </form>
                     </div>
                     <div class="content-list-body row">
                        <div
                           v-if="projects.length > 0"
                           v-for="project in projects"
                           class="col-lg-6"
                        >
                           <ProjectCard
                              :id="project.id"
                              :name="project.name"
                              :progress="55"
                              progressColor="bg-info"
                              time="Due 4 days"
                              tasks="5/5"
                              :users="project.users"
                           />
                        </div>
                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="members" role="tabpanel" data-filter-list="content-list-body">
                  <div class="content-list">
                     <div class="row content-list-head">
                        <div class="col-auto">
                           <h3>Members</h3>
                           <button class="btn btn-round" data-toggle="modal" data-target="#user-invite-modal">
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
                              <input type="search" class="form-control filter-list-input" placeholder="Filter members" aria-label="Filter Members">
                           </div>
                        </form>
                     </div>
                     <div class="content-list-body row">
                        <div
                           v-for="user in users"
                           class="col-6"
                        >
                           <Member
                              :name="user.username"
                              :image="user.image"
                              :role="'Administrator'"
                           />
                        </div>
                     </div>
                  </div>
               </div>
            </div>

            <TeamInviteModal />
            <TeamManageModal />
            <TeamNewModal />
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import axios from "../utils/axios";
import { defineComponent, PropType, ref, reactive } from "vue";
import Member from "../components/Member.vue";
import Avatar from "../components/Avatar.vue";
import ProjectCard from "../components/ProjectCard.vue";
import TeamInviteModal from "../components/modals/TeamInviteModal.vue";
import TeamManageModal from "../components/modals/TeamManageModal.vue";
import TeamNewModal from "../components/modals/TeamNewModal.vue";
import { getParams } from "../mixins/get-params";
import { Param } from "../types/param";
import { Team } from "../types/team";
import { Project } from "../types/project";
import { User } from "../types/user";

export default defineComponent({
   name: "TeamView",
   props: {
      params: {
         type: Array as PropType<Param[]>,
         required: true
      }
   },
   components: {
      Member,
      Avatar,
      ProjectCard,
      TeamInviteModal,
      TeamManageModal,
      TeamNewModal
   },
   setup(props) {
      const params = getParams(props.params);
      const idTeam = ref(params.idTeam);
      const team = reactive<Team>({
         id: -1,
         is_active: -1,
         created: "",
         updated: "",
         name: "",
         description: ""
      });
      const projects = ref<Project[]>([]);
      const users = ref<User[]>([]);

      axios.get<Team>(`/v1/team/${ idTeam.value }`)
         .then((response) => {
            if(response.data) {
               const data = response.data;
               team.id = data.id;
               team.is_active = data.is_active;
               team.created = data.created;
               team.updated = data.updated;
               team.name = data.name;
               team.description = data.description;
            } else {
               console.log("No data to display");
            }
         })
         .catch((error) => {
            console.log("error", error);
         });
      axios.get<Project[]>(`/v1/project/${ idTeam.value }`)
         .then((response) => {
            if(response.data) {
               const data = response.data;
               projects.value = data;
            } else {
               console.log("No data to display");
            }
         })
         .catch((error) => {
            console.log("error", error);
         });
      // axios.get(`/v1/team/users/${ idTeam.value }`)
      //    .then((response) => {
      //       if(response.data) {
      //          const data = response.data;
      //          users.value = data;
      //       } else {
      //          console.log("No data to display");
      //       }
      //    })
      //    .catch((error) => {
      //       console.log("error", error);
      //    });

      return {
         team,
         projects,
         users
      };
   }
});
</script>
../types/param
../mixins/get-params
