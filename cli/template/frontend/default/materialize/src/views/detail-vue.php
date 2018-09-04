<template>
  <div class="<?= $g['modelName'] ?>">
    <h1>This is an <?= $g['moduleName'] ?> detail page</h1>
  </div>
</template>

<script>
  import <?= $g['modelName'] ?> from './detail'
  export default <?= $g['modelName'] ?>
</script>

<style lang="scss" scoped>
  @import './detail';
</style>
