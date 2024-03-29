<template>
   <form class="modal fade" id="user-invite-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Invite Users</h5>
               <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
               <i class="material-icons">close</i>
               </button>
            </div>
            <div class="modal-body">
               <p>Send an invite link via email to add members to this team</p>
               <div>
               <div class="input-group">
                  <div class="input-group-prepend">
                     <span class="input-group-text">
                     <i class="material-icons">email</i>
                     </span>
                  </div>
                  <input type="email" class="form-control" placeholder="Recipient email address" aria-label="Recipient email address">
               </div>
               <div class="text-right text-small mt-2">
                  <a href="#" role="button">Add another recipient</a>
               </div>
               </div>
            </div>
            <div class="modal-footer">
               <button role="button" class="btn btn-primary" type="submit">
               Invite users
               </button>
            </div>
         </div>
      </div>
   </form>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "ProjectInviteModal",
   setup() {
      return {};
   }
});
</script>
