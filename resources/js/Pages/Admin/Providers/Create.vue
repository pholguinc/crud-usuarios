<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div v-if="$page.props.flash.message" class="">
          <Alert :message="$page.props.flash.message" />
        </div>
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="fas fa-truck"></i> Crear Nuevo Proveedor
          </h5>
        </div>
        <hr />
        <form class="p-0" autocomplete="off">
          <div class="row">
            <div class="mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> Nombres </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-list"></i>
                </span>
                <input
                  type="text"
                  v-model="provider.name"
                  class="form-control"
                  placeholder="Nombres"
                />
              </div>
              <div v-if="errors.name" id="error">
                <label class="mt-2 validation-error-label">
                  <strong>
                    {{ errors.name }}
                  </strong>
                </label>
              </div>
            </div>
            <div class="mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> Correo </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text"
                  ><i class="fas fa-envelope"></i>
                </span>
                <input
                  type="email"
                  v-model="provider.email"
                  class="form-control"
                  placeholder="Correo Electrónico"
                />
              </div>
              <div v-if="errors.email" id="error">
                <label class="mt-2 validation-error-label">
                  <strong>
                    {{ errors.email }}
                  </strong>
                </label>
              </div>
            </div>
            <div class="mb-2 col-lg-4 col-sm-6">
              <label class="mb-2">
                <strong> RUC </strong>
              </label>
              <div class="input-group">
                <span class="input-group-text"
                  ><i class="fas fa-id-card"></i>
                </span>
                <input
                  type="text"
                  v-model="provider.ruc"
                  class="form-control"
                  placeholder="Correo Electrónico"
                />
              </div>
              <div v-if="errors.ruc" id="error">
                <label class="mt-2 validation-error-label">
                  <strong>
                    {{ errors.ruc }}
                  </strong>
                </label>
              </div>
            </div>
            <div class="mb-2 col-lg-4 col-sm-6">
              <label class="mt-2 mb-2">
                <strong>Teléfono</strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-phone"></i>
                </span>
                <input
                  type="text"
                  v-model="provider.phone"
                  class="form-control"
                  placeholder="Teléfono"
                />
              </div>
              <div v-if="errors.phone" id="error">
                <label class="mt-2 validation-error-label">
                  <strong>
                    {{ errors.phone }}
                  </strong>
                </label>
              </div>
            </div>
            <div class="mb-2 col-lg-8 col-sm-6">
              <label class="mt-2 mb-2">
                <strong>Dirección</strong>
              </label>
              <div class="input-group">
                <span class="input-group-text">
                  <i class="fas fa-home"></i>
                </span>
                <input
                  type="text"
                  v-model="provider.address"
                  id="direccion"
                  name="direccion"
                  class="form-control"
                  placeholder="Dirección"
                />
              </div>
              <div v-if="errors.address" id="error">
                <label class="mt-2 validation-error-label">
                  <strong>
                    {{ errors.address }}
                  </strong>
                </label>
              </div>
            </div>
          </div>
          <div class="mt-4 text-end"></div>
        </form>
        <div class="mt-0 text-end">
          <Link
            class="btn btn-primary"
            style="margin-left: 8px !important"
            @click="store"
          >
            <i class="fas fa-save"></i>
            Registrar
          </Link>
          <Link
          :href="route('admin.providers.index')"
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
    DisableAutocomplete,
  },
  data() {
    return {
      form: this.provider,
    };
  },
  props: {
    provider: Object,
    errors: {
      type: Object,
    },
  },
  methods: {
    update() {
      this.$inertia.put(this.route("admin.users.update", this.user), this.form);
    },
    destroy(){
        this.$inertia.delete(this.route('admin.users.destroy', this.user));
    }
  },
};

</script>

<style>
.validation-error-label,
.validation-valid-label {
  margin-top: 7px;
  margin-bottom: 7px;
  display: block;
  color: #f44336;
  position: relative;
  padding-left: 26px;
}
.validation-error-label:before,
.validation-valid-label:before {
  font-family: "Font Awesome 5 Free";
  content: "\f057";
  font-weight: 900;
  position: absolute;
  top: 2px;
  left: 0;
  display: inline-block;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 16px;
}

#error {
  margin-left: 15px;
}
</style>
