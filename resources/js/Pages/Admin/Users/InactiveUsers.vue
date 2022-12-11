<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div
          class="mt-2 tab-pane fade show active"
          id="nav-usuarios"
          role="tabpanel"
        >
          <h5 class="text-center card-title fw-bold">
            <i class="fas fa-user"></i> Listado de Usuarios Inactivos
          </h5>
          <hr />
          <div class="overflow-hidden table-responsive">
            <div class="row">
              <div class="col-sm-8">
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
              </div>
              <div class="col-sm-4">
                <div class="mt-1 float-end">
                  <Link
                    :href="route('admin.users.index')"
                    class="px-5 btn btn-primary btn-sm radius-30"
                  >
                    <i class="bx bx-arrow-back"></i>
                    Regresar
                  </Link>
                </div>
              </div>
            </div>
            <table
              id="example"
              class="table mt-2 table-bordered table-striped table-hover nowrap"
              style="width: 100%"
            >
              <thead class="table-dark">
                <tr>
                  <th>Nombres</th>
                  <th>Email</th>
                  <th>DNI</th>
                  <th>Teléfono</th>
                  <th class="text-center">Estado</th>
                  <th class="text-center">Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="user in users.data" :key="user.id">
                  <td>{{ user.name + " " + user.lastname }}</td>
                  <td>{{ user.email }}</td>
                  <td>{{ user.dni }}</td>
                  <td>{{ user.phone }}</td>
                  <td>
                    <span
                      class="mt-2 text-white shadow-sm badge bg-gradient-burning w-100"
                      >{{ user.status }}</span
                    >
                  </td>
                  <td>
                    <div class="text-center">
                      <a
                        href=""
                        class="text-white btn-sm btn btn-info"
                        style="margin-right: 10px"
                      >
                        <i
                          class="bx bx-door-open"
                          style="margin-right: 0px !important"
                        ></i>
                      </a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>

            <div class="float-end"></div>
          </div>
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
  data() {
    return {
      term: "",
    };
  },
  props: {
    users: {
      type: Object,
    },
  },

  methods: {
    search() {
      this.$inertia.replace(
        this.route("admin.users.inactive", { term: this.term })
      );
    },
  },
};

$(".mobile-toggle-menu").on("click", function () {
  $(".wrapper").addClass("toggled");
}),
  $(".toggle-icon").click(function () {
    $(".wrapper").hasClass("toggled")
      ? ($(".wrapper").removeClass("toggled"),
        $(".sidebar-wrapper").unbind("hover"))
      : ($(".wrapper").addClass("toggled"),
        $(".sidebar-wrapper").hover(
          function () {
            $(".wrapper").addClass("sidebar-hovered");
          },
          function () {
            $(".wrapper").removeClass("sidebar-hovered");
          }
        ));
  }),
  $(document).ready(function () {
    $(window).on("scroll", function () {
      $(this).scrollTop() > 300
        ? $(".back-to-top").fadeIn()
        : $(".back-to-top").fadeOut();
    }),
      $(".back-to-top").on("click", function () {
        return (
          $("html, body").animate(
            {
              scrollTop: 0,
            },
            600
          ),
          !1
        );
      });
  }),
  $(function () {
    for (
      var e = window.location,
        o = $(".metismenu li a")
          .filter(function () {
            return this.href == e;
          })
          .addClass("")
          .parent()
          .addClass("mm-active");
      o.is("li");

    )
      o = o.parent("").addClass("mm-show").parent("").addClass("mm-active");
  }),
  $(function () {
    $("#menu").metisMenu();
  });
</script>

<style>
#action {
  margin: 10px !important;
}
</style>
