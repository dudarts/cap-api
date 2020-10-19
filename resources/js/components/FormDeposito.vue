<template>
    <form action="/deposito" method="post">
        <h4>DEPÓSITO</h4>
        <input type="hidden" name="_token" :value="csrf">
        <input type="hidden" name="_method" :value="PUT">
        <div class="form-group">
            <label for="valorId">Digite o valor a ser depositado</label>
            <input required type="number" class="form-control" id="valorId" name="valor" step="0.01">
        </div>
        <button type="submit" class="btn btn-primary">Depositar</button>
        <a href="/home" class="btn btn-secondary">Voltar</a>

    </form>
</template>
<script>
    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }),
    }
</script>
