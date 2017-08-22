<template>
  <div>
    <ps-nav></ps-nav>
    <ps-login></ps-login>
    <ps-register></ps-register>
  </div>
</template>

<script>
import '@/assets/js/jquery.slider.min.js'
import '@/assets/js/global.js'

import psNav from '@/components/head/ps-nav'
import psLogin from '@/components/head/ps-login'
import psRegister from '@/components/head/ps-register'

export default {
  name: 'app',
  components: {
    psNav,
    psLogin,
    psRegister
  }
}

</script>

<style>
  @import './assets/css/bootstrap.min.css';
  @import './assets/css/jquery.slider.css';
  @import './assets/css/global.css';
</style>