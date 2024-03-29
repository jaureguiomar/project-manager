<template>
   <li class="list-group-item">
      <div class="media align-items-center">
         <ul class="avatars">
            <li>
               <div class="avatar bg-primary">
                  <i class="material-icons">{{ icon }}</i>
               </div>
            </li>
            <li>
               <img alt="Claire" :src="image" class="avatar" data-filter-by="alt" />
            </li>
         </ul>
         <div class="media-body">
            <div>
               <span class="h6" data-filter-by="text">{{ username }}</span>
               <span data-filter-by="text">{{ description }}</span>
               <!-- ############# -->
               <!-- ## Pending ## -->
               <!-- <a href="#" data-filter-by="text">Set up client chat channel</a> -->
               <!-- ############# -->
            </div>
            <span class="text-small" data-filter-by="text">{{ time }}</span>
         </div>
      </div>
   </li>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Activity",
   props: {
      icon: {
         type: String,
         required: true
      },
      image: {
         type: String,
         required: true
      },
      username: {
         type: String,
         required: true
      },
      description: {
         type: String,
         required: true
      },
      time: {
         type: String,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>
