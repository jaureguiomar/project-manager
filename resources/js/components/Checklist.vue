<template>
   <div class="row">
      <div class="form-group col">
         <span class="checklist-reorder">
            <i class="material-icons">reorder</i>
         </span>
         <div class="custom-control custom-checkbox col">
            <input type="checkbox" class="custom-control-input" id="checklist-item-2" :checked="checked">
            <label class="custom-control-label" for="checklist-item-2"></label>
            <div>
               <input type="text" placeholder="Checklist item" value="Invite team to boards" data-filter-by="value" />
               <div class="checklist-strikethrough"></div>
            </div>
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent } from "vue";
export default defineComponent({
   name: "Checklist",
   props: {
      checked: {
         type: Boolean,
         required: true
      }
   },
   setup() {
      return {};
   }
});
</script>
