<template>
   <div class="card card-project">
      <div class="progress">
         <div
            class="progress-bar"
            :class="progressColor"
            role="progressbar"
            :style="{ width: progress + '%' }"
            :aria-valuenow="progress"
            aria-valuemin="0"
            aria-valuemax="100"
         >
         </div>
      </div>
      <div class="card-body">
         <div class="dropdown card-options">
            <button
               :id="'project-dropdown-button-' + id"
               class="btn-options"
               type="button"
               data-toggle="dropdown"
               aria-haspopup="true"
               aria-expanded="false"
            >
               <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item" href="#">Edit</a>
               <a class="dropdown-item" href="#">Share</a>
            </div>
         </div>
         <div class="card-title">
            <a href="/project">
               <h5 data-filter-by="text">{{ name }}</h5>
            </a>
         </div>
         <ul class="avatars">
            <li v-for="user in users">
               <a href="/user" data-toggle="tooltip" :title="user.username">
                  <img :alt="user.username" class="avatar" :src="user.image" data-filter-by="alt" />
               </a>
            </li>
         </ul>
         <div class="card-meta d-flex justify-content-between">
            <div class="d-flex align-items-center">
               <i class="material-icons mr-1">playlist_add_check</i>
               <span class="text-small">{{ tasks }}</span>
            </div>
            <span class="text-small" data-filter-by="text">{{ time }}</span>
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { User } from "../types/user";

export default defineComponent({
   name: "ProjectCard",
   props: {
      id: {
         type: Number,
         required: true
      },
      name: {
         type: String,
         required: true
      },
      progress: {
         type: Number,
         required: true
      },
      progressColor: {
         type: String,
         required: true
      },
      time: {
         type: String,
         required: true
      },
      tasks: {
         type: String,
         required: true
      },
      users: {
         type: Array as PropType<User[]>,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>
