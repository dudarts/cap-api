<template>
    <form action="/saldo" method="post">
        <input type="hidden" name="_token" :value="csrf">
        <div class="form-group">
            <label for="inputPassword1">Digite sua senha para visualizar o saldo</label>
            <input required type="password" class="form-control" id="inputPassword1" name="password" placeholder="Senha">
        </div>
        <button type="submit" class="btn btn-primary">Visualizar Saldo</button>
        <a  href="/home" class="btn btn-secondary">Voltar</a>
    </form>
</template>
<script>
    export default {
        data: () => ({
            csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
          }),
    }
</script>
