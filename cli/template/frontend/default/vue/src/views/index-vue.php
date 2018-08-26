<template>
  <div class="<?= $g['modelName'] ?>">
    <h1>This is an <?= $g['modelName'] ?> index page</h1>
  </div>
</template>

<script>
  import <?= $g['modelName'] ?> from './index.js'
  export default <?= $g['modelName'] ?>
</script>

<style lang="scss" scoped>
  @import './index.scss';
</style>