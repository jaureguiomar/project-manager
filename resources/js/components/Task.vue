<template>
   <div class="card card-task">
      <div class="progress">
         <div
            :style="'width:' + progress +  '%'"
            class="progress-bar bg-danger"
            role="progressbar"
            aria-valuenow="25"
            aria-valuemin="0"
            aria-valuemax="100"
         >
         </div>
      </div>
      <div class="card-body">
         <div class="card-title">
            <a href="#">
               <h6 data-filter-by="text">{{ name }}</h6>
            </a>
            <span class="text-small">{{ time }}</span>
         </div>
         <div class="card-meta">
            <ul class="avatars">
               <Avatar
                  v-for="user in users"
                  :name="user.username"
                  :image="user.image"
                  :link="true"
               />
            </ul>
            <div class="d-flex align-items-center">
               <i class="material-icons">playlist_add_check</i>
               <span>{{ checks }}</span>
            </div>
            <div class="dropdown card-options">
               <button
                  :id="'task-dropdown-button-' + id"
                  class="btn-options"
                  type="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
               >
                  <i class="material-icons">more_vert</i>
               </button>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Mark as done</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="#">Archive</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import Avatar from "./Avatar.vue";
import { User } from "../types/user";

export default defineComponent({
   name: "Task",
   components: {
      Avatar
   },
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
      time: {
         type: String,
         required: true
      },
      checks: {
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
