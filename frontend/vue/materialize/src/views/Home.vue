<template>
  <div class="home">
    <Dashboard />
  </div>
</template>

<script>
// @ is an alias to /src
// import Vuetable from "@/components/widget/Vuetable";
// import Datatable from '@/components/widget/Datatable'
import Dashboard from '@/views/Test/Dashboard'

export default {
  name: "home",
  components: {
    Dashboard,
  },
  data() {
    return {
      checked : false,

    }
  },
};
</script>

