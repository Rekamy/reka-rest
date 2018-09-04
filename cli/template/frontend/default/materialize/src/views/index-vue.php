<template>
  <div class="<?= $g['modelName'] ?>">
    <router-view/>
  </div>
</template>

<script>
  import <?= $g['modelName'] ?> from './index.js'
  export default <?= $g['modelName'] ?>
</script>

<style lang="scss" scoped>
  @import './index.scss';
</style>
