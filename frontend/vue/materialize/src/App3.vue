<template>
  <!-- <app-container></app-container> -->
  <div class="center"> 
    <h4>project</h4>
    <div>
      <span class="btn" @click="back()"> back </span>
      <span class="btn"> {{ page }} </span>
      <span class="btn" @click="next()"> next </span>
    </div>
    <ul v-for="project in data" :key = "project.id">
      <li>{{ project.id }} - {{ project.name }}<span class="btn" @click="deleteItem(project.id)"> X</span></li>
    </ul> 
    <div>
      <span class="btn" @click="back()"> back </span>
      <span class="btn"> {{ page }} </span>
      <span class="btn" @click="next()"> next </span>
    </div>
  </div>
</template>

<script>

  import AppContainer from './components/layout/Container.vue'
  // import MdForm from './views/Test/Form'


  export default {
    components: {
      AppContainer,
      // MdForm,
    },
    data () {
      return {        
        data: [],
        page: 2,
      }
    },
    methods : {
      deleteItem(key) {
        this.$http.delete('/projects/' + key)
        .then( (res) => { console.log('success');this.getData(); } )
        .catch( (err) => { console.log(err) } )
      },

      next() {
        this.page++
      },
      back() {
        this.page--
      },
      getData()  {
        this.$http.get('/users/kidzen/projects?page=' + this.page)
        .then( (res) => { this.data = res.data } )
        .catch( (err) => { console.log(err) } )
      }
    },
    updated() {
      this.getData();      
    },
    mounted() {
      var x = document.getElementsByTagName("BODY")[0];
      setTimeout(function(){ x.classList.add("loaded"); }, 1000);  
      this.getData();      
    },
    created() {
      // console.log(this.$http ? 'Axios works!' : 'Axios fail to load');
      // console.log(this.$moment ? 'Moment works!' : 'Moment fail to load');
      // console.log($ ? '$ Jquery works!' : '$ Jquery fail to load');
      // console.log(jQuery ? 'jQuery works!' : 'jQuery fail to load');
    }

  }
</script>

<style lang="scss">
/* label underline focus color */
.row .multsel input:focus {
  border-bottom: none !important;
  box-shadow: none !important
}

.row .multsel input {
  height: 1px !important;
}

.multiselect__tags{
  border: none !important;
  border-bottom: 1px solid #9f9f9f !important;
  border-radius: 0px !important;
}
</style>
