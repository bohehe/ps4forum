<template>
  <ps-head></ps-head>
</template>

<script>
import '@/assets/js/jquery.slider.min.js'
import '@/assets/js/global.js'

import psHead from '@/components/ps-head'

export default {
  name: 'app',
  components: {
    psHead
  }
}

</script>

<style>
  @import './assets/css/bootstrap.min.css';
  @import './assets/css/jquery.slider.css';
  @import './assets/css/global.css';
</style>