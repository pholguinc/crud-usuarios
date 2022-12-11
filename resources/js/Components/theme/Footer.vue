<template>
  <footer class="page-footer">
    <p class="mb-0">Copyright © {{  currentDate.getFullYear()  }}. Todos los derechos reservados
      -  Desarrollado por <strong><i>Soft Coding</i></strong>
    </p>
  </footer>
</template>

<script>
export default {

    data(){
        return{
            currentDate: new Date,
        }
    }

}
</script>

<style>

</style>
