<template>
    <div>
        <p>Contador: {{ counter }}</p>

        <div v-if="counter > avisar">O número é maior que {{avisar}}</div>

        <button @click="decrement()">-</button>
        <button @click="increment()">+</button>
    </div>
</template>

<script>
export default {
    name: 'Counter',
    props: ['avisar'],
    data() {
        return {
            counter: 0,
        };
    },
    methods: {
        decrement() {
            this.counter--;
        },
        increment() {
            this.counter++;
        }
    }
}
</script>
