<template>
    <AdminLayout>
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <h5 class="text-center card-title fw-bold">
              <i class="fas fa-user-plus"></i> Crear Nuevo Usuario
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
                    v-model="form.name"
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
                  <strong>Apellidos</strong>
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-list-alt"></i>
                  </span>
                  <input
                    type="text"
                    v-model="form.lastname"
                    class="form-control"
                    placeholder="Apellidos"
                  />
                </div>
                <div v-if="errors.lastname" id="error">
                  <label class="mt-2 validation-error-label">
                    <strong>
                      {{ errors.lastname }}
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
                    v-model="form.email"
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
                  <strong> DNI </strong>
                </label>
                <div class="input-group">
                  <span class="input-group-text"
                    ><i class="fas fa-envelope"></i>
                  </span>
                  <input
                    type="text"
                    v-model="form.dni"
                    class="form-control"
                    placeholder="Correo Electrónico"
                  />
                </div>
                <div v-if="errors.dni" id="error">
                  <label class="mt-2 validation-error-label">
                    <strong>
                      {{ errors.dni }}
                    </strong>
                  </label>
                </div>
              </div>
              <div class="mb-2 col-lg-4 col-sm-6">
                <label class="mt-0 mb-2">
                  <strong>Teléfono</strong>
                </label>
                <div class="input-group">
                  <span class="input-group-text">
                    <i class="fas fa-phone"></i>
                  </span>
                  <input
                    type="text"
                    v-model="form.phone"
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
            </div>
            <div class="mt-4 text-end"></div>
          </form>
          <div class="mt-0 text-end">
            <Link
              class="btn btn-primary"
              style="margin-left: 8px !important"
              @click="update"
            >
              <i class="fas fa-save"></i>
              Actualizar
            </Link>
            <Link
              :href="route('admin.clients.index')"
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
import AdminLayout from '../../../Layouts/AdminLayout.vue'
import { Link } from '@inertiajs/inertia-vue3';
export default {
  components: {
    AdminLayout,
    Link
 },

  data() {
    return {
      form: this.client,
    };
  },
  props: {
    client: Object,
    errors: {
      type: Object,
    },
  },
  methods: {
    update() {
      this.$inertia.put(this.route("admin.clients.update", this.client), this.form);
    },
  },
}
</script>

<style>

</style>
