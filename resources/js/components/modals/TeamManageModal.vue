<template>
   <form class="modal fade" id="team-manage-modal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog" role="document">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title">Manage Team</h5>
               <button type="button" class="close btn btn-round" data-dismiss="modal" aria-label="Close">
                  <i class="material-icons">close</i>
               </button>
            </div>
            <ul class="nav nav-tabs nav-fill" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="team-manage-details-tab" data-toggle="tab" href="#team-manage-details" role="tab" aria-controls="team-manage-details" aria-selected="true">Details</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="team-manage-members-tab" data-toggle="tab" href="#team-manage-members" role="tab" aria-controls="team-manage-members" aria-selected="false">Members</a>
               </li>
            </ul>
            <div class="modal-body">
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="team-manage-details" role="tabpanel">
                     <h6>Team Details</h6>
                     <div class="form-group row align-items-center">
                        <label class="col-3">Name</label>
                        <input class="form-control col" type="text" placeholder="Team name" name="team-name" value="Medium Rare" />
                     </div>
                     <div class="form-group row">
                        <label class="col-3">Description</label>
                        <textarea class="form-control col" rows="3" placeholder="Team description" name="team-description">A small web studio crafting lovely template products.</textarea>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="team-manage-members" role="tabpanel">
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

                           <!-- <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-1" checked>
                              <label class="custom-control-label" for="user-manage-1">
                                 <span class="d-flex align-items-center">
                                 <img alt="Claire Connors" src="assets/img/avatar-female-1.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Claire Connors</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-2" checked>
                              <label class="custom-control-label" for="user-manage-2">
                                 <span class="d-flex align-items-center">
                                 <img alt="Marcus Simmons" src="assets/img/avatar-male-1.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Marcus Simmons</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-3" checked>
                              <label class="custom-control-label" for="user-manage-3">
                                 <span class="d-flex align-items-center">
                                 <img alt="Peggy Brown" src="assets/img/avatar-female-2.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Peggy Brown</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-4" checked>
                              <label class="custom-control-label" for="user-manage-4">
                                 <span class="d-flex align-items-center">
                                 <img alt="Harry Xai" src="assets/img/avatar-male-2.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Harry Xai</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-5">
                              <label class="custom-control-label" for="user-manage-5">
                                 <span class="d-flex align-items-center">
                                 <img alt="Sally Harper" src="assets/img/avatar-female-3.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Sally Harper</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-6">
                              <label class="custom-control-label" for="user-manage-6">
                                 <span class="d-flex align-items-center">
                                 <img alt="Ravi Singh" src="assets/img/avatar-male-3.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Ravi Singh</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-7">
                              <label class="custom-control-label" for="user-manage-7">
                                 <span class="d-flex align-items-center">
                                 <img alt="Kristina Van Der Stroem" src="assets/img/avatar-female-4.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Kristina Van Der Stroem</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-8">
                              <label class="custom-control-label" for="user-manage-8">
                                 <span class="d-flex align-items-center">
                                 <img alt="David Whittaker" src="assets/img/avatar-male-4.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">David Whittaker</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-9">
                              <label class="custom-control-label" for="user-manage-9">
                                 <span class="d-flex align-items-center">
                                 <img alt="Kerri-Anne Banks" src="assets/img/avatar-female-5.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Kerri-Anne Banks</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-10">
                              <label class="custom-control-label" for="user-manage-10">
                                 <span class="d-flex align-items-center">
                                 <img alt="Masimba Sibanda" src="assets/img/avatar-male-5.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Masimba Sibanda</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-11">
                              <label class="custom-control-label" for="user-manage-11">
                                 <span class="d-flex align-items-center">
                                 <img alt="Krishna Bajaj" src="assets/img/avatar-female-6.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Krishna Bajaj</span>
                                 </span>
                              </label>
                           </div>

                           <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="user-manage-12">
                              <label class="custom-control-label" for="user-manage-12">
                                 <span class="d-flex align-items-center">
                                 <img alt="Kenny Tran" src="assets/img/avatar-male-6.jpg" class="avatar mr-2" />
                                 <span class="h6 mb-0" data-filter-by="text">Kenny Tran</span>
                                 </span>
                              </label>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
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
   name: "ProjectManagerModal",
   components: {
      Avatar,
      MemberCheck
   },
   setup() {
      return {};
   }
});
</script>
