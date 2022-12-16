<template>
  <div
    v-if="message && showAlert"
    class="py-2 border-1 alert border-start border-5 border-success alert-dismissible fade show"
  >
    <div class="d-flex align-items-center">
      <div class="font-35 text-success">
        <i class="bx bxs-check-circle"></i>
      </div>
      <div class="ms-3">
        <h6 class="mb-0 text-success">¡Éxito!</h6>
        <div>{{ message }}</div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { defineProps, ref, onMounted } from "vue";

const props = defineProps({
  message: String,
});

const showAlert = ref(false);

onMounted(() => {
  showAlert.value = true;
  setTimeout(() => (showAlert.value = false), 2000);
});
</script>

<style>
</style>
