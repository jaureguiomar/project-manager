<template>
   <div class="card card-task">
      <div class="progress">
         <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
      <div class="card-body">
         <div class="card-title">
            <a href="#"><h6 data-filter-by="text">Client objective meeting</h6></a>
            <span class="text-small">Today</span>
         </div>
         <div class="card-meta">
            <ul class="avatars">
               <li>
                  <a href="#" data-toggle="tooltip" title="Kenny">
                     <img alt="Kenny Tran" class="avatar" src="assets/img/avatar-male-6.jpg" />
                  </a>
               </li>
            </ul>
            <div class="d-flex align-items-center">
               <i class="material-icons">playlist_add_check</i>
               <span>3/4</span>
            </div>
            <div class="dropdown card-options">
               <button class="btn-options" type="button" id="task-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
import { defineComponent } from "vue";
export default defineComponent({
   name: "Task",
   setup() {
      return {};
   }
});
</script>
