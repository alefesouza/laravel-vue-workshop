<template>
    <div class="card mt-3">
        <div class="card-body">
            <div class="card-title">{{ data.name }} {{ data.last_name }}</div>
            <div class="card-text">{{ data.email }}</div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'User',
    props: ['data'],
}
</script>

<style scoped>
div {
    background: #0000ff
}
</style>
