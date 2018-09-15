<template>
    <div>
        <navbar></navbar>

        <div class="container">
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
import Navbar from './components/Navbar.vue';

export default {
    name: 'App',
    components: {
        Navbar,
    }
}
</script>
