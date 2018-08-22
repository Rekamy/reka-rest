<template>
  <div class="home">
  	<widget-card></widget-card>
  	<widget-form></widget-form>
  </div>
</template>

<script>
// @ is an alias to /src
import Card from '@/components/widget/Card.vue'
import Form from '@/components/widget/Form.vue'

export default {
  name: 'home',
  components: {
    'widget-card': Card,
    'widget-form': Form,
  }
}
</script>
