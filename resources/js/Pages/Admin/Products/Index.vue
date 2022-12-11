<template>
  <AdminLayout>
    <div class="row">
      <div class="col-12">
        <div class="cursor-pointer card">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <div class="mt-2">
                  <a
                    class="px-5 btn btn-primary btn-sm radius-30 d-block"
                    href="http://127.0.0.1:8000/admin/usuarios"
                    ><i class="bx bxs-plus-square"></i> Agregar Producto
                  </a>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="search-bar">
                  <div class="mt-1 position-relative">
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

              <div class="col-sm-3">
                <div class="mt-1 form-group">
                  <select
                    class="form-select"
                    aria-label="Default select example"
                  >
                    <option selected="">Seleccione una categoría</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-3">
                <div class="mt-2">
                  <Link
                    class="px-5 btn btn-primary btn-sm radius-30 d-block"
                    :href="route('admin.maintenance')"
                    ><i class="bx bx-arrow-back"></i> Regresar
                  </Link>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div
      class=" row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid"
    >
      <div class="col">
        <a class="cursor-pointer card">
          <img
            :src="'/storage/img/products/01.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/02.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <a class="card">
          <img
            :src="'/storage/img/products/03.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </a>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/04.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/05.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/06.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/07.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/08.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/09.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="cursor-pointer card">
          <img
            :src="'/storage/img/products/10.png'"
            class="card-img-top"
            alt="..."
          />

          <div class="card-body">
            <h6 class="cursor-pointer card-title">Producto</h6>
            <div class="clearfix">
              <p class="mb-0 float-start"><strong>Categoría 01</strong></p>
              <p class="mb-0 float-end fw-bold">
                <span class="me-2 text-secondary"
                  >$240</span>
              </p>
            </div>
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
</script>

<style>
</style>
