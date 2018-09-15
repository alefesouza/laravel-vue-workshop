<template>
    <div>
        Users Page

        <div v-if="users.length > 0">
            <user v-for="item in users" :key="item.id" :data="item"></user>
        </div>
        <div v-else>
            Carregando...
        </div>
    </div>
</template>

<script>
import axios from 'axios';
import User from './../components/User.vue';

export default {
    name: 'Users',
    components: {
        User
    },
    data() {
        return {
            users: [],
        }
    },
    mounted() {
        axios.get('http://localhost:8000/api/users')
            .then(response => {
                this.users = response.data;
            });
    }
}
</script>

<style>
div {
    background: #ff0000
}
</style>
