<template>
  <div>
    <ps-head></ps-head>
    <ps-body></ps-body>
  </div>
</template>

<script>
import '@/assets/js/jquery.slider.min.js'
import '@/assets/js/global.js'

import psHead from '@/components/ps-head'
import psBody from '@/components/ps-body'

export default {
  name: 'app',
  components: {
    psHead,
    psBody
  }
}

</script>

<style>
  @import './assets/css/bootstrap.min.css';
  @import './assets/css/jquery.slider.css';
  @import './assets/css/global.css';
</style>