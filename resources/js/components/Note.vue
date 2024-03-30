<template>
   <div class="card card-note">
      <div class="card-header">
         <div class="media align-items-center">
            <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar" data-toggle="tooltip" data-title="Peggy Brown" data-filter-by="alt" />
            <div class="media-body">
               <h6 class="mb-0" data-filter-by="text">First meeting notes</h6>
            </div>
         </div>
         <div class="d-flex align-items-center">
            <span data-filter-by="text">Just now</span>
            <div class="ml-1 dropdown card-options">
               <button class="btn-options" type="button" id="note-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">more_vert</i>
               </button>
               <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Edit</a>
                  <a class="dropdown-item text-danger" href="#">Delete</a>
               </div>
            </div>
         </div>
      </div>
      <div class="card-body" data-filter-by="text">
         <p>Here&#39;s a quick rundown of companies the client expressed interest in on our call this morning:</p>
         <ul>
            <li>
               <a href="#">Commonwealth Bank of Australia</a> for the bright, positive color scheme</li>
            <li>
               <a href="#">Bupa Health Insurance</a> for the adaptability of their logo around the site&#39;s layout</li>
            <li>
               <a href="#">OPSM</a> again for the color scheme, this time for the softer pallette</li>
         </ul>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Note",
   setup() {
      return {};
   }
});
</script>
