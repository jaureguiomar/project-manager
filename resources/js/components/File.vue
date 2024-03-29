<template>
   <li class="list-group-item">
      <div class="media align-items-center">
         <ul class="avatars">
            <li>
               <div class="avatar bg-primary">
               <i class="material-icons">folder</i>
               </div>
            </li>
            <li>
               <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar" data-title="Harry Xai" data-toggle="tooltip" data-filter-by="data-title" />
            </li>
         </ul>
         <div class="media-body d-flex justify-content-between align-items-center">
            <div>
               <a href="#" data-filter-by="text">moodboard_images</a>
               <br>
               <span class="text-small" data-filter-by="text">748kb ZIP</span>
            </div>
            <div class="dropdown">
               <button class="btn-options" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">more_vert</i>
               </button>
                  <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Download</a>
                  <a class="dropdown-item" href="#">Share</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item text-danger" href="#">Delete</a>
               </div>
            </div>
         </div>
      </div>
   </li>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "File",
   setup() {
      return {};
   }
});
</script>
