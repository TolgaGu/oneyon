<template>
  <div class="home">
    <Dashboard/>
  </div>
</template>

<script>
// @ is an alias to /src
import Dashboard from '@/components/Dashboard.vue'
import SideBar from "@/components/SideBar";

export default {
  name: 'Home',
  components: {
    SideBar,
    Dashboard
  }
}
</script>
