<template>
  <div class="modal fade" id="BoxOpen" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <slot name="title">
                </slot>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <slot name="content">
                </slot>
            </div>
            <slot name="footer">
               
            </slot>

        </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>
