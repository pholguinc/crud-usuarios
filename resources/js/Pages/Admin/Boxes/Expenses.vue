<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="ml-3 fas fa-dollar-sign"></i> Gastos
          </h5>
        </div>
        <div class="mt-2">
          <hr />
          <div class="overflow-hidden table-responsive">
            <div class="row">
              <div class="col-sm-8">
                <div class="mb-3 search-bar">
                  <div class="position-relative">
                    <input
                      type="text"
                      class="form-control search-control"
                      placeholder="Escriba para buscar ..."
                    /><span
                      class=" position-absolute top-50 search-show translate-middle-y"
                      ><i class="bx bx-search"></i
                    ></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="mt-1 float-end">
                  <Link
                    class="px-5 btn btn-primary btn-sm radius-30"
                    :href="route('admin.boxes')"
                    ><i class="bx bx-arrow-back"></i> Regresar
                  </Link>
                </div>
              </div>
            </div>
            <div class="table-responsive" id="table-data">
              <table
                class="table table-bordered table-striped table-hover"
                style="width: 100%"
              >
                <thead class="table-dark">
                  <tr>
                    <th class="text-center">Monto</th>
                    <th class="text-center">Descripción</th>
                    <th class="text-center">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-center">sdsd</td>
                    <td class="text-center">sdfsd</td>
                    <td class="text-center">sdfsf</td>
                  </tr>
                </tbody>
              </table>
            </div>

            <div class="float-end"></div>
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
    Link
},
};
</script>

<style>
</style>