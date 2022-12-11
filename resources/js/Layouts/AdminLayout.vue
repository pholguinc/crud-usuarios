<template>
  <!--sidebar wrapper -->
  <Sidebar></Sidebar>
  <!--end sidebar wrapper -->
  <!--start header -->
  <Header></Header>
  <!--end header -->
  <!--start page wrapper -->
  <div class="page-wrapper">
    <div class="page-content">
         <slot></slot>
    </div>
  </div>
  <!--end page wrapper -->
  <!--start overlay-->
  <div class="overlay toggle-icon"></div>
  <!--end overlay-->
  <!--Start Back To Top Button-->
  <a href="javaScript:;" class="back-to-top"
    ><i class="bx bxs-up-arrow-alt"></i
  ></a>
  <!--End Back To Top Button-->
  <Footer></Footer>
</template>

<script>
import Footer from "../Components/theme/Footer.vue";
import Header from "../Components/theme/Header.vue";
import Sidebar from "../Components/theme/Sidebar.vue";
export default {
  components: {
    Footer,
    Header,
    Sidebar,
  },
};

$(".mobile-toggle-menu").on("click", function() {
			$(".wrapper").addClass("toggled")
		}),

		$(".toggle-icon").click(function() {
			$(".wrapper").hasClass("toggled") ? ($(".wrapper").removeClass("toggled"),
            $(".sidebar-wrapper").unbind("hover")) : ($(".wrapper").addClass("toggled"),
             $(".sidebar-wrapper").hover(function() {
				$(".wrapper").addClass("sidebar-hovered")
			}, function() {
				$(".wrapper").removeClass("sidebar-hovered")
			}))
		}),
		$(document).ready(function() {
			$(window).on("scroll", function() {
				$(this).scrollTop() > 300 ? $(".back-to-top").fadeIn() : $(".back-to-top").fadeOut()
			}), $(".back-to-top").on("click", function() {
				return $("html, body").animate({
					scrollTop: 0
				}, 600), !1
			})
		}),
		$(function() {
			for (var e = window.location, o = $(".metismenu li a").filter(function() {
					return this.href == e
				}).addClass("").parent().addClass("mm-active"); o.is("li");) o = o.parent("").addClass("mm-show").parent("").addClass("mm-active")
		}),
		$(function() {
			$("#menu").metisMenu()
		})
</script>

<style>
</style>
