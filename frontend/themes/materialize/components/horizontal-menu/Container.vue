<template>
  <div id="app">

    <Header/>
    <Content/>
    <Footer/>
  </div>
</template>

<script>
  import Content from './components/Content.vue'
  import Header from './components/Header.vue'
  import Footer from './components/Footer.vue'

  export default {
    name: 'app',
    components: {
      Content,
      Footer,
      Header
    }
  }
</script>

