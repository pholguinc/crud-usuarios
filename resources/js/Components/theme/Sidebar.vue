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
        <Link :href="route('dashboard.index')">
          <div class="parent-icon"><i class="bx bx-tachometer"></i></div>
          <div class="menu-title">Dashboard</div>
        </Link>
      </li>
      <li>
        <Link :href="route('admin.index')">
          <div class="parent-icon"><i class="bx bx-cog"></i></div>
          <div class="menu-title">Administración</div>
        </Link>
      </li>
      <li class="menu-label">UI Elements</li>
      <li>
        <Link :href="route('admin.boxes')">
          <div class="parent-icon"><i class="bx bx-detail"></i></div>
          <div class="menu-title">Cajas</div>
        </Link>
      </li>
      <li>
        <Link :href="route('admin.maintenance')">
          <div class="parent-icon"><i class="bx bx-archive"></i></div>
          <div class="menu-title">Mantenimiento</div>
        </Link>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-user"></i></div>
          <div class="menu-title">Clientes</div>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-cart"></i></div>
          <div class="menu-title">Proveedores</div>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon">
            <i class="bx bx-credit-card"></i>
          </div>
          <div class="menu-title">Compras</div>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-shopping-bag"></i></div>
          <div class="menu-title">Ventas</div>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-donate-blood"></i></div>
          <div class="menu-title">Créditos</div>
        </a>
      </li>
      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-file"></i></div>
          <div class="menu-title">Inventario & Kardex</div>
        </a>
      </li>

      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-server"></i></div>
          <div class="menu-title">Base de Datos</div>
        </a>
      </li>

      <li>
        <a href="javascript:;">
          <div class="parent-icon"><i class="bx bx-exit"></i></div>
          <div class="menu-title">Cerrar Sesión</div>
        </a>
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
