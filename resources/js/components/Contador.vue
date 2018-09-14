<template>
    <div>
        Contador: {{ contador }}

        <p v-if="contador > avisar">O número é maior que {{ avisar }}</p>
    </div>
</template>

<script>
export default {
    name: 'Contador',
    props: ['avisar'],
    data() {
        return {
            contador: 0,
        };
    },
    mounted() {
        setInterval(() => {
            this.contador++;
        }, 1000);
    }
}
</script>
