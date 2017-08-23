<template>
	<div>
			<ps-nav></ps-nav>
	    <ps-login></ps-login>
	    <ps-register></ps-register>
	</div>
</template>
<script>
	import psNav from '@/components/head/ps-nav'
	import psLogin from '@/components/head/ps-login'
	import psRegister from '@/components/head/ps-register'

	export default {
		name: 'ps-head',
	  components: {
	    psNav,
	    psLogin,
	    psRegister
	  }
	}
</script>