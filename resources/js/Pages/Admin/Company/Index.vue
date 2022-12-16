<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="fab fa-slack-hash"></i> Datos de la empresa
          </h5>
        </div>
        <hr />
        <form class="p-0" autocomplete="off">
          <div class="row">
            <div class="mt-2 mb-2 col-lg-6 col-sm-6">
              <label class="mb-2">
                <strong> Nombre de la empresa </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-list"></i>
                </span>
                <input type="text" :value="companies.name" class="form-control" placeholder="Nombres" />

              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-6 col-sm-6">
              <label class="mt-0 mb-2">
                <strong>Seleccione la sucursal</strong>
              </label>
              <div class="input-group">
                <label class="input-group-text">
                  <i class="fas fa-id-card"></i>
                </label>
                <select class="form-select">
                    <option value="">
                        Seleccione una opción
                    </option>
                  <option value="" v-for="branch in branches"  :key="'branch-'+branch.id">
                        {{  branch.name  }}
                  </option>
                </select>
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> Correo de la empresa </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-envelope"></i>
                </span>
                <input
                    :value="companies.email"
                  type="email"
                  class="form-control"
                  placeholder="Correo de la empŕesa"
                />
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> RUC de la empresa </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-building"></i>
                </span>
                <input type="text" :value="companies.ruc" class="form-control" placeholder="RUC" />
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> Teléfono</strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-phone"></i>
                </span>
                <input
                :value="companies.phone"
                  type="text"
                  class="form-control"
                  placeholder="Teléfono"
                />
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-6 col-sm-6">
              <label class="mb-2">
                <strong> IGV</strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-percent"></i>
                </span>
                <input type="text" :value="companies.igv" class="form-control" placeholder="Nombres" />
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-6 col-sm-6">
              <label class="mb-2">
                <strong> Dirección </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-home"></i>
                </span>
                <input
                  type="text"
                  :value="companies.address"
                  class="form-control"
                  placeholder="Dirección"
                />
              </div>
            </div>
            <div class="mt-2 mb-2 col-lg-6 col-sm-6">
              <div class="form-group">
                <label for="foto" class="mb-2">
                    <strong>Logo (PNG)</strong>
                </label>
                <input id="foto" class="form-control" type="file" name="foto" />
              </div>
              <div class="container mt-4">
                <img
                  class="img-thumbnail" id="center"
                  :src="'/storage/img/business/logo.png'"
                  alt="LOGO_PNG"
                  width="200"
                />
              </div>
            </div>
          </div>
          <div class="mt-4 text-end"></div>
        </form>
        <div class="mt-0 text-end">
          <Link
            class="btn btn-primary"
            style="margin-left: 8px !important"
          >
            <i class="fas fa-save"></i>
            Registrar
          </Link>
          <Link
            :href="route('admin.index')"
            class="btn btn-secondary"
            style="margin-left: 8px !important"
          >
            <i class="fas fa-angles-left"></i>
            Regresar
          </Link>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script>
import AdminLayout from "../../../Layouts/AdminLayout.vue";
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: {
    AdminLayout,
    Link,
  },
  props: {
    companies:{
        type: Array,
        required: true,
    },
    branches:{
        type:Object
    }
  },
};
</script>

<style>
#center {
    margin:auto;
	display:block;
}
</style>
