<script setup>
import { Link } from '@inertiajs/vue3'
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'
import Nav from "./Nav.vue"
import Sidebar from "./Sidbar.vue"
import Footer from "./Footer.vue"


onMounted(() => {
    initFlowbite();
});



</script>
<template>
    <div class="antialiased bg-gray-50 dark:bg-gray-900">
   
       <!-- navbar here  -->
       <Nav />
       <!-- Sidebar -->
       <Sidebar />
   

    <main class="md:ml-64 h-auto pt-[60px]">
      <slot/>
    </main>

    
  </div>
  <Footer/>
</template>

