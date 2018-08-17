<template>
  <div id="content-container">

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        <Sidebar />
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <ContentContainer />
        <!-- END CONTENT -->
        <!-- START RIGHT SIDEBAR NAV-->
        <RighSidebar />
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
  </div>
</template>

<script>
  import LeftSidebar from './LeftSidebar.vue'
  import RightSidebar from './RightSidebar.vue'
  import Content from './Content.vue'

  export default {
    name: 'content-container',
    components: {
    	RightSidebar,
    	LeftSidebar,
    	Content
    }
  }
</script>

