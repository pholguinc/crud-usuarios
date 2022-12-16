<template>
  <AdminLayout>
    <div class="card">
      <div class="card-body">
        <div v-if="$page.props.flash.message" class="">
          <Alert :message="$page.props.flash.message" />
        </div>
        <div class="d-flex align-items-center">
          <h5 class="text-center card-title fw-bold">
            <i class="ml-3 fas fa-user"></i> Listado de Documentos
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
                >
                  <i
                    class="fas fa-trash text-danger"
                  ></i>
                  <span id="action"> Inactivos</span>
                </Link>
              </li>
              <li>
                <Link
                  class="dropdown-item"
                >
                  <i
                    class="fas fa-user-plus text-danger"
                  ></i>
                  <span id="action">Nuevo Usuario</span>
                </Link>
              </li>
            </ul>
          </div>
        </div>
        <div class="mt-2">
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
                class="table table-bordered table-striped table-hover"
                style="width: 100%"
              >
                <thead class="table-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>Prefijo</th>
                    <th class="text-center">Fecha</th>
                    <th class="text-center">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="document in documents.data" :key="document.id">
                    <td>{{ document.name }}</td>
                    <td>{{ document.prefix  }}</td>
                    <td class="text-center">{{ moment(document.created_at).format("DD-MM-YYYY") }} </td>
                    <td>
                      <div class="text-center">
                        <Link
                          class="text-white btn-sm btn btn-info button-action"
                          style="margin-right: 10px"
                        >
                          <i
                            class="bx bx-edit"
                            style="margin-right: 0px !important"
                          ></i>
                        </Link>
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
                    :href="route('admin.index')"
                    class="px-5 m-1 btn btn-primary btn-sm radius-30"
                  >
                    <i class="bx bx-arrow-back"></i>
                    Regresar
                  </Link>
                </div>

            <div class="mt-2 float-end">
                <Pagination :pagination="documents"></Pagination>
            </div>
            </div>
            </div>
        </div>
      </div>
    </div>
  </AdminLayout>
</template>

<script>
import AdminLayout from '../../../Layouts/AdminLayout.vue'
import Alert from "../../../Components/theme/Alert.vue";
import Pagination from "../../../Components/theme/Pagination.vue";
import { Link } from "@inertiajs/inertia-vue3";
import moment from "moment";
export default {
  components: {
    Alert,
    AdminLayout,
    Link,
    Pagination
  },
  data() {
    return {
      term: "",
      moment: moment
    };
  },
  props: {
    documents: {
      type: Object,
    },
  },

  methods: {
    search() {
      this.$inertia.replace(
        this.route("admin.document.index", { term: this.term })
      );
    },
  },
};
$(function () {
  "use strict";

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
    });
});
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
