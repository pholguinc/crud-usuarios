<template>
  <AdminLayout>
    <div class="rounded-lg border-3 card bg-gradient-bloody">
        <div class="card-body">
            <div class="mt-2 text-center">
                <h5 class="text-center text-white card-title fw-bold">
                    <i class="fas fa-wrench"></i> Mantenimiento
                </h5>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md-3 row-cols-xl-3" id="icons">
        <div class="col">
            <div class="card card-module radius-10">
                <div class="card-body">
                    <Link :href="route('admin.categories')" class="text-center">
                        <div class="mx-auto text-primary">
                            <i class="bx bx-purchase-tag" style="font-size:80px"></i>
                        </div>
                        <p class="mb-0">
                            <strong>Categorías</strong>
                        </p>
                    </Link>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-module radius-10">
                <div class="card-body">
                    <Link :href="route('admin.products')" class="text-center">
                        <div class="mx-auto text-primary">
                            <i class="bx bx-basket" style="font-size:80px"></i>
                        </div>
                        <p class="mb-0">
                            <strong>Productos</strong>
                        </p>
                    </Link>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card card-module radius-10">
                <div class="card-body">
                    <Link :href="route('admin.coins')" class="text-center">
                        <div class="mx-auto text-primary">
                            <i class="bx bx-coin-stack" style="font-size:80px"></i>
                        </div>
                        <p class="mb-0">
                            <strong>
                                Moneda
                            </strong>
                        </p>
                    </Link>
                </div>
            </div>
        </div>
        <div class="mx-auto mt-5 d-flex justify-content-center">
            <img  :src="'/storage/img/admin/admin.png'" width="550" />
        </div>
    </div>
</AdminLayout>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";
import AdminLayout from '../../../Layouts/AdminLayout.vue'
export default {
  components: {
    AdminLayout,
    Link
 },

}
</script>

<style>
.card-module{
    transition: box-shadow 0.2s ease-in-out, transform 0.35s ease-in-out;
}
.card-module:hover {
  box-shadow: 0 11px 11px 0 rgba(0, 0, 0,.16);
  transform: translateY(-5px);
  cursor: pointer;
}
#icons {
    margin-top: 30px;
}
</style>

