<template>
   <div class="card-list">
      <div class="card-list-head">
         <h6>{{ name }}</h6>
         <div class="dropdown">
            <button class="btn-options" type="button" id="cardlist-dropdown-button-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="material-icons">more_vert</i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item" href="#">Rename</a>
               <a class="dropdown-item text-danger" href="#">Archive</a>
            </div>
         </div>
      </div>
      <div class="card-list-body">
         <TaskComponent
            v-for="task in tasks"
            :id="task.id"
            :name="task.name"
            :progress="20"
            :time="'Just now'"
            :checks="'1/5'"
            :users="task.users"
         />

         <nav>
            <ul class="pagination justify-content-end">
               <li class="page-item disabled">
                  <a class="page-link" href="#" tabindex="-1">
                     &lt;
                  </a>
               </li>
               <li class="page-item">
                  <a class="page-link" href="#">1</a>
               </li>
               <li class="page-item">
                  <a class="page-link" href="#">2</a>
               </li>
               <li class="page-item">
                  <a class="page-link" href="#">
                     &gt;
                  </a>
               </li>
            </ul>
         </nav>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import TaskComponent from "./Task.vue";
import { TaskUser } from "../types/task";

export default defineComponent({
   name: "TaskSection",
   components: {
      TaskComponent
   },
   props: {
      name: {
         type: String,
         required: true
      },
      tasks: {
         type: Array as PropType<TaskUser[]>,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>
