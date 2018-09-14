<template>
    <div>
        <contador avisar="5"></contador>
        <contador avisar="2"></contador>

        <ul>
            <li v-for="item in lista" :key="item">{{item}}</li>
        </ul>
    </div>
</template>

<script>
import Contador from './../components/Contador.vue';

export default {
    name: 'App',
    components: {
        Contador
    },
    data() {
        return {
            lista: [2, 4, 5, 3, 6]
        };
    },
}
</script>
