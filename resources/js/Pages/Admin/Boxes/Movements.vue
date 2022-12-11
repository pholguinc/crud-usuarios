<template>
  <AdminLayout>
    <div class="col-sm-12">
      <div class="card radius-10">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <div>
              <h6 class="mb-0">
                <i class="fas fa-cart-plus"></i>
                Movimientos
              </h6>
            </div>
            <div class="dropdown ms-auto">
              <a
                class="dropdown-toggle dropdown-toggle-nocaret"
                href="#"
                data-bs-toggle="dropdown"
                ><i
                  class="bx bx-dots-horizontal-rounded font-22 text-option"
                ></i>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item">
                    <i class="ml-2 fas fa-file-pdf text-danger"></i>
                    <span> Reporte</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="mb-3 chart-container-1">
            <div id="chart8"></div>
          </div>
        </div>
        <div class="mt-5">
          <ul class="list-group list-group-flush">
            <li
              class="bg-transparent list-group-item d-flex justify-content-between align-items-center"
            ></li>
            <li
              class="bg-transparent list-group-item d-flex justify-content-between align-items-center"
            >
              <div>
                <i class="fas fa-circle-check"></i>
                Monto Inicial
              </div>
              <span class="badge bg-secondary rounded-pill">10</span>
            </li>
            <li
              class="bg-transparent list-group-item d-flex justify-content-between align-items-center"
            >
              <div>
                <i class="fas fa-circle-check"></i>
                Gastos
              </div>
              <span class="badge bg-primary rounded-pill">65</span>
            </li>
            <li
              class="bg-transparent list-group-item d-flex justify-content-between align-items-center"
            >
              <div>
                <i class="fas fa-circle-check"></i>
                Egresos
              </div>
              <span class="badge bg-warning text-dark rounded-pill">14</span>
            </li>
            <li
              class="bg-transparent list-group-item d-flex justify-content-between align-items-center"
            >
              <div>
                <i class="fas fa-circle-check"></i>
                Saldo
              </div>
              <span class="text-white badge bg-danger rounded-pill">14</span>
            </li>
          </ul>
          <hr style="margin-top:-2px;">
          <div class="m-3 mt-1 mr-4 float-end">
                  <Link
                    :href="route('admin.boxes')"
                    class="px-5 btn btn-primary btn-sm radius-30"
                  >
                    <i class="bx bx-arrow-back"></i>
                    Regresar
                  </Link>
                </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
export default {
  components: {
    AdminLayout,
    Link,
  },
};

$(function () {
  "use strict";

  // chart 8
  var options = {
    series: [44, 55, 13, 43, 22],
    chart: {
      foreColor: "#9ba7b2",
      height: 330,
      type: "pie",
    },
    colors: ["#0d6efd", "#6c757d", "#17a00e", "#f41127", "#ffc107"],
    labels: ["Team A", "Team B", "Team C", "Team D", "Team E"],
    responsive: [
      {
        breakpoint: 480,
        options: {
          chart: {
            height: 360,
          },
          legend: {
            position: "bottom",
          },
        },
      },
    ],
  };
  var chart = new ApexCharts(document.querySelector("#chart8"), options);
  chart.render();
});
</script>
<style>
</style>