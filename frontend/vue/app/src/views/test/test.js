// @ is an alias to /src
import Card from '@/components/widget/Card.vue'

export default {
  name: 'home',
  components: {
    Card
  },
  methods :{
    
  },
  created() {
      console.log(this.$route.meta);
  }
}
