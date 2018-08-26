<template>
  <div class="<?= $g['modelName'] ?>">
    <h1>This is an <?= $g['modelName'] ?> form page</h1>
  </div>
</template>

<script>
  import <?= $g['modelName'] ?> from './form.js'
  export default <?= $g['modelName'] ?>
</script>

<style lang="scss" scoped>
  @import './form.scss';
</style>