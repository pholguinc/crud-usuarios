<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="ml-3 fas fa-circle-dollar-to-slot"></i> Listado de Monedas
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
                <Link :href="route('admin.users.create')" class="dropdown-item">
                  <i class="fas fa-sack-dollar text-danger"></i>
                  <span id="action">Nueva Moneda</span>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        <hr />
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
        <div class="table-responsive" id="table-data">
          <table
            class="table mt-2 mb-0 table-bordered table-striped table-hover"
            style="width: 100%"
          >
            <thead class="table-dark">
              <tr>
                <th class="text-center">Nombre</th>
                <th class="text-center">Prefijo</th>
                <th class="text-center">Fecha</th>
                <th class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="coin in coins.data" :key="coin.id">
                <td class="text-center">
                  <div class="justify-center">
                    <div class="mt-1 ms-2">
                      <h6 class="mb-0 text-center font-14">{{  coin.name  }}</h6>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="justify-center">
                    <div class="mt-1 ms-2">
                      <h6 class="mb-0 text-center font-14">{{  coin.prefix  }}</h6>
                    </div>
                  </div>
                </td>
                <td class="text-center">
                  <div class="justify-center">
                    <div class="mt-1 ms-2">
                        {{ moment(coin.created_at).format("DD-MM-YYYY") }}
                    </div>
                  </div>
                </td>
                <td>
                  <div class="text-center">
                    <a
                      href=""
                      class="text-white btn-sm btn btn-info button-action"
                      style="margin-right: 10px"
                    >
                      <i
                        class="bx bx-edit"
                        style="margin-right: 0px !important"
                      ></i>
                    </a>
                    <a href="" class="btn-sm btn btn-danger button-action">
                      <i
                        class="bx bx-trash"
                        style="margin-right: 0px !important"
                      ></i>
                    </a>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
          <div class="mt-3">
                <div class="m-2 float-start">
                  <Link
                    :href="route('admin.maintenance')"
                    class="px-5 m-1 btn btn-primary btn-sm radius-30"
                  >
                    <i class="bx bx-arrow-back"></i>
                    Regresar
                  </Link>
                </div>

            <div class="mt-2 float-end">
                <Pagination :pagination="coins"></Pagination>
            </div>
            </div>
        </div>
      </div>
    </div>
    <ModalCreate></ModalCreate>
  </AdminLayout>

</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import ModalCreate from "../Coin/Create.vue";
import Pagination from "../../../Components/theme/Pagination.vue";
import moment from "moment";
export default {
  components: {
    AdminLayout,
    Link,
    ModalCreate,
    Pagination
  },
  props: {
    coins: {
      type: Object,
    },
  },
  data() {
    return {
      term: "",
      moment: moment,
    };
  },
};
</script>

<style>
#table-data table {
  min-width: 300px;
  width: 100%;
  height: fit-content;
  overflow-y: scroll;
  border-collapse: collapse;
  border: 1px solid #000;
}

#table-data table tr td {
  border: 1px solid #000;
  padding: 10px;
}
#table-data table .bold {
  border-right: none;
  border-left: none;
  background: #ddd;
  border-bottom: 1px solid #c2c2c2;
  border: none;
}
#table-data table .bold td {
  border: none;
  background: #000;
  color: #fff;
  border: none;
  font-size: 18px;
  font-weight: bold;
}
#table-data .with-header tr:first-of-type td {
  border: none;
}
@media (max-width: 480px) {
  #table-data .with-header tr:first-of-type {
    display: none;
  }
  #table-data .with-header tr {
    border: 1px solid #000;
  }
  #table-data .with-header tr td {
    display: block;
    border: none;
  }
  #table-data .with-header tr td:first-child {
    padding-top: 0.5em;
  }
  #table-data .with-header tr td:last-child {
    padding-bottom: 0.5em;
  }
  #table-data .with-header tr td:before {
    content: attr(data-th) ": ";
    font-weight: bold;
    display: inline-block;
  }
}
@media (max-width: 480px) and (min-width: 480px) {
  #table-data .with-header tr td:before {
    display: none;
  }
}

#buttons-duple {
  display: flex !important;
  margin-inline-end: auto;
  justify-content: center !important;
}
</style>
