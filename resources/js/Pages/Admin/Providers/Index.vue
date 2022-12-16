<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div v-if="$page.props.flash.message" class="">
          <Alert :message="$page.props.flash.message" />
        </div>
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="ml-3 fas fa-truck-fast"></i> Listado de Proveedores
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
                  :href="route('admin.providers.create')"
                  class="dropdown-item"
                >
                  <i class="fas fa-truck text-danger"></i>
                  <span id="action">Nuevo Provvedor</span>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        <div class="mt-2">
          <hr />
          <div class="table-responsive" id="table-data">
            <div class="mb-3 search-bar">
              <div class="position-relative">
                <input
                  v-model="term"
                  @keyup="search"
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
            <table class="table mb-0 table-striped table-bordered table-hover">
              <thead class="table-dark">
                <tr>
                  <th scope="col">Nombres</th>
                  <th scope="col">Correo</th>
                  <th scope="col">Teléfono</th>
                  <th scope="col" class="text-center">RUC</th>
                  <th scope="col" class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="provider in providers.data" :key="provider.id">
                  <td>{{ provider.name }}</td>
                  <td>{{ provider.email }}</td>
                  <td>{{ provider.phone }}</td>
                  <td class="text-center">{{ provider.ruc }}</td>
                  <td>
                    <div class="text-center">
                      <Link
                        :href="route('admin.providers.edit', provider)"
                        class="text-white btn-sm btn btn-info button-action"
                        style="margin-right: 10px"
                      >
                        <i
                          class="bx bx-edit"
                          style="margin-right: 0px !important"
                        ></i>
                      </Link>
                      <Link
                        @click="destroy(provider.id)"
                        class="text-white btn-sm btn btn-danger button-action"
                        style="margin-right: 10px"
                      >
                        <i
                          class="bx bx-trash"
                          style="margin-right: 0px !important"
                        ></i>
                      </Link>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="mt-3">
              <div class="mt-2 float-end">
                <Pagination :pagination="providers"></Pagination>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script>
import Alert from "../../../Components/theme/Alert.vue";
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import Pagination from "../../../Components/theme/Pagination.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    AdminLayout,
    Link,
    Pagination,
    Alert
  },
  data() {
    return {
      term: "",
    };
  },
  props: {
    providers: {
      type: Object,
    },
  },
  methods: {
    search() {
      this.$inertia.replace(
        this.route(
          "admin.providers.index",
          { term: this.term },
          { replace: true, preserveState: true }
        )
      );
    },

    destroy(id) {
      if (confirm("Are you sure to delete?")) {
        this.$inertia.delete(`/admin/proveedores/${id}`);
      }
    },
  },
};
</script>

<style>
#action {
  margin: 10px !important;
}

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

.button-action {
  transition: box-shadow 0.2s ease-in-out, transform 0.35s ease-in-out;
}
.button-action:hover {
  box-shadow: 0 11px 11px 0 rgba(0, 0, 0, 0.16);
  transform: translateY(-5px);
  cursor: pointer;
}
</style>

