<template>
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
                  <Avatar name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
                  <Avatar name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
                  <Avatar name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
                  <Avatar name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
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
               <MemberCheck name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
               <MemberCheck name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
               <MemberCheck name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
               <MemberCheck name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
               <MemberCheck name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
               <MemberCheck name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
               <MemberCheck name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
               <MemberCheck name="Marcus Simmons" image="assets/img/avatar-male-1.jpg" />
               <MemberCheck name="Claire Connors" image="assets/img/avatar-female-1.jpg" />
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
</template>

<script lang="ts">
import { defineComponent } from "vue";
import Avatar from "../Avatar.vue";
import MemberCheck from "../MemberCheck.vue";

export default defineComponent({
   name: "TaskUserManageModal",
   components: {
      Avatar,
      MemberCheck
   },
   setup() {
      return {};
   }
});
</script>
