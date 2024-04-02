<template>
   <div class="container">
      <div class="row justify-content-center">
         <div class="col-12">
            <h1>Home</h1>
         </div>
         <div class="col-12">
            <button class="mr-2" @click="onLayoutToggle(1)">Nav side</button>
            <button class="mr-2" @click="onLayoutToggle(2)">Nav top</button>
            <button @click="onLayoutToggle(3)">Nav top sidebar</button>
         </div>
      </div>
   </div>
</template>

<script lang="ts">
import { defineComponent, PropType } from "vue";
import { Route } from "../types/route";

export default defineComponent({
   name: "HomView",
   props: {
      params: {
         type: Array as PropType<Route[]>,
         required: true
      }
   },
   setup() {
      const onLayoutToggle = (layout:number) => {
         setCookie("layout", layout.toString(), 60);
      };
      const setCookie = (name:string,value:string,days:number) => {
         var expires = "";
         if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days*24*60*60*1000));
            expires = "; expires=" + date.toUTCString();
         }
         document.cookie = name + "=" + (value || "")  + expires + "; path=/";
      }
      // function getCookie(name:string) {
      //    var nameEQ = name + "=";
      //    var ca = document.cookie.split(';');
      //    for(var i=0;i < ca.length;i++) {
      //       var c = ca[i];
      //       while (c.charAt(0)==' ') c = c.substring(1,c.length);
      //       if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
      //    }
      //    return null;
      // }
      // function eraseCookie(name:string) {
      //    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
      // }

      return {
         onLayoutToggle
      };
   }
});
</script>
