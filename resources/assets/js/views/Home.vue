<template>
    <div>
        Hello World

        <counter avisar="5"></counter>
        <counter avisar="10"></counter>

        <input type="text" v-model="valor">
        <br>
        {{ valor }}
        <ul>
            <li v-for="item in numeros" :key="item">{{ item }}</li>
        </ul>
    </div>
</template>

<script>
import Counter from './../components/Counter.vue';

export default {
    name: 'Home',
    components: {
        Counter,
    },
    data() {
        return {
            counter: 0,
            valor: '',
            numeros: [3, 4, 6, 2, 7],
        };
    },
    mounted() {
        setInterval(() => {
            this.counter++;
        }, 1000);
    }
}
</script>
