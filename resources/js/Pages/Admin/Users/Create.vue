<template>
  <AdminLayout>
    dddd
  </AdminLayout>
</template>

<script>

$(".mobile-search-icon").on("click", function() {
			$(".search-bar").addClass("full-search-bar")
		}),

		$(".search-close").on("click", function() {
			$(".search-bar").removeClass("full-search-bar")
		}),

		$(".mobile-toggle-menu").on("click", function() {
			$(".wrapper").addClass("toggled")
		})

import AdminLayout from '../../../Layouts/AdminLayout.vue';
export default {
  components: { AdminLayout },

}


</script>

<style>

</style>
