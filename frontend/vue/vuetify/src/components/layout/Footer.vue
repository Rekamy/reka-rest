<template>
  <v-footer is-fixed>
    <span>&copy; {{ year }}</span>
    <span>
      <a :href="companyPage">{{ company }}</a>
    </span>
    <span>
      Design By <a :href="developerPage">{{ developer }}</a>
    </span>
  </v-footer>
</template>

<script>
  export default {
    name: 'Footer',
    props: {
      isFixed: Boolean,
      year: Number,
      company: String,
      companyPage: String,
      developer: String,
      developerPage: String,
    },
  }
</script>