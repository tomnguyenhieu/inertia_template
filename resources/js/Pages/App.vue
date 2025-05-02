<template>
	<div class="container mx-auto h-screen flex items-center justify-center">
		<h1 class="text-8xl font-bold">Hello {{ user.name }}!</h1>
	</div>
</template>

<script>
	export default {
		props: [
			'user'
		]
	}
</script>