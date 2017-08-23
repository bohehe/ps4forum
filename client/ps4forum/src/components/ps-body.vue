<template>
	<div>
		<keep-alive>
			<router-view></router-view>
		</keep-alive>
	</div>
</template>
<script>
	export default {
		name: 'ps-body'
	}
</script>