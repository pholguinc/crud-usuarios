<template>
<div class="modal fade" id="BoxOpen" tabindex="-1" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Abrir Caja</h5>
                <button class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <label class="mb-2 -mt-2">
                    <strong>
                        Monto Inicial
                    </strong>
                </label>
                <div class="mb-3 input-group">
                    <span class="input-group-text">
                        <i class="fas fa-dollar-sign"></i>
                    </span>
                    <input class="form-control" type="text" placeholder="Monto Inicial">
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary" type="button" >Abrir</button>
                </div>
            </div>
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
