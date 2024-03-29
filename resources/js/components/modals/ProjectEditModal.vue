<template>
   <form class="modal fade" id="project-edit-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Edit Project</h5>
               <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons">close</i>
               </button>
            </div>
            <ul class="nav nav-tabs nav-fill" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="project-edit-details-tab" data-toggle="tab" href="#project-edit-details" role="tab" aria-controls="project-edit-details" aria-selected="true">Details</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="project-edit-members-tab" data-toggle="tab" href="#project-edit-members" role="tab" aria-controls="project-edit-members" aria-selected="false">Members</a>
               </li>
            </ul>
            <div class="modal-body">
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="project-edit-details" role="tabpanel">
                     <h6>General Details</h6>
                     <div class="form-group row align-items-center">
                        <label class="col-3">Name</label>
                        <input class="form-control col" type="text" value="Brand Concept and Design" name="project-name" />
                     </div>
                     <div class="form-group row">
                        <label class="col-3">Description</label>
                        <textarea class="form-control col" rows="3" placeholder="Project description" name="project-description">Research, ideate and present brand concepts for client consideration</textarea>
                     </div>
                     <hr>
                     <h6>Timeline</h6>
                     <div class="form-group row align-items-center">
                        <label class="col-3">Start Date</label>
                        <input class="form-control col" type="text" name="project-start" placeholder="Select a date" data-flatpickr data-default-date="2021-04-21" data-alt-input="true" />
                     </div>
                     <div class="form-group row align-items-center">
                        <label class="col-3">Due Date</label>
                        <input class="form-control col" type="text" name="project-due" placeholder="Select a date" data-flatpickr data-default-date="2021-09-15" data-alt-input="true" />
                     </div>
                     <div class="alert alert-warning text-small" role="alert">
                        <span>You can change due dates at any time.</span>
                     </div>
                     <hr>
                     <h6>Visibility</h6>
                     <div class="row">
                        <div class="col">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="visibility-everyone" name="visibility" class="custom-control-input" checked>
                              <label class="custom-control-label" for="visibility-everyone">Everyone</label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="visibility-members" name="visibility" class="custom-control-input">
                              <label class="custom-control-label" for="visibility-members">Members</label>
                           </div>
                        </div>
                        <div class="col">
                           <div class="custom-control custom-radio">
                              <input type="radio" id="visibility-me" name="visibility" class="custom-control-input">
                              <label class="custom-control-label" for="visibility-me">Just me</label>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="project-edit-members" role="tabpanel">
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
               </div>
            </div>
            <div class="modal-footer">
               <button role="button" class="btn btn-primary" type="submit">
                  Save
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
   name: "ProjectModals",
   components: {
      Avatar,
      MemberCheck
   },
   setup() {
      return {};
   }
});
</script>
