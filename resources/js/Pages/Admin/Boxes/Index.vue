<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="ml-3 fas fa-box"></i> Cajas
          </h5>
          <div class="dropdown ms-auto">
            <a
              class="dropdown-toggle dropdown-toggle-nocaret"
              href="#"
              data-bs-toggle="dropdown"
              ><i class="bx bx-dots-horizontal-rounded font-22 text-option"></i>
            </a>
            <ul class="dropdown-menu">
                <li>
                <Link
                  class="dropdown-item"
                  data-bs-toggle="modal"
                   data-bs-target="#BoxOpen"
                >
                  <i
                    class="fas fa-edit text-dark"
                    style="font-size: 15px; margin-right: 8px;"
                  ></i>
                  <span id="icon-color">Abrir Caja</span>
                </Link>
              </li>
              <li>
                <Link
                  :href="route('admin.users.inactive')"
                  class="dropdown-item"
                >
                  <i
                    class="fas fa-window-close text-dark"
                    style="font-size: 15px; margin-right: 8px;"
                  ></i>
                  <span id="action">Cerrar Caja</span>
                </Link>
              </li>
              <li>
                <Link
                  :href="route('admin.boxes.expenses')"
                  class="dropdown-item"
                >
                  <i
                    class="fas fa-dollar text-dark"
                    style="font-size: 15px; margin-right: 8px;"
                  ></i>
                  <span id="action">Gastos</span>
                </Link>
              </li>
              <li>
                <Link
                  :href="route('admin.boxes.movements')"
                  class="dropdown-item"
                >
                  <i
                    class="fas fa-file-invoice-dollar text-dark"
                    style="font-size: 15px; margin-right: 8px;"
                  ></i>
                  <span id="action">Movimientos</span>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        <div class="mt-2">
          <hr />
          <div class="overflow-hidden table-responsive">
            <div class="col-sm-12">
                <div class="mb-3 search-bar">
                  <div class="position-relative">
                    <input
                      type="text"
                      class="form-control search-control"
                      placeholder="Escriba para buscar ..."
                    />
                    <span
                      class=" position-absolute top-50 search-show translate-middle-y"
                      ><i class="bx bx-search"></i
                    ></span>
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
                  <th class="text-center">Monto Inicial</th>
                  <th class="text-center">Fecha de Apertura</th>
                  <th class="text-center">Fecha de Cierre</th>
                  <th class="text-center">Monto final</th>
                  <th class="text-center">Total de Ventas</th>
                  <th class="text-center">Usuario</th>
                  <th class="text-center">Reporte</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center">sdsd</td>
                  <td class="text-center">sdfsd</td>
                  <td class="text-center">sdfsf</td>
                  <td class="text-center">sdfsd</td>
                  <td class="text-center">
                    span
                  </td>
                  <td class="text-center">
                    user
                  </td>
                  <td class="text-center">
                        <a href="" class="btn btn-danger btn-sm">
                            <i class="fas fa-file-pdf" style="margin-right: 0px!important;"></i>
                        </a>
                    </td>
                </tr>
              </tbody>
            </table>
            </div>

            <div class="float-end">

            </div>
          </div>
        </div>
      </div>
    </div>
    <Modal></Modal>
  </AdminLayout>
</template>

<script>
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import Modal from "../Boxes/BoxOpen.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    AdminLayout,
    Link,
    Modal

  },
};
</script>

<style>
</style>
