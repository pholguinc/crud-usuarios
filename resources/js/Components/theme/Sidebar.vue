<template>
  <div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
      <div>
        <img
          :src="'/storage/img/business/logo.png'"
          class="logo-icon"
          alt="logo icon" width="50"
        />
      </div>
      <div>
        <h4 class="logo-text">WPVENTAS</h4>
      </div>
      <div class="toggle-icon ms-auto"><i class="bx bx-arrow-to-left"></i></div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
      <li>
        <Link :href="route('admin.users.index')">
          <div class="parent-icon"><i class="bx bx-users"></i></div>
          <div class="menu-title">Usuarios</div>
        </Link>
      </li>

    </ul>
    <!--end navigation-->
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3';

export default { components: { Link } };

</script>

<style>
</style>
