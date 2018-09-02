<template>
  <div>
    <h1>Users Page</h1>

    <user v-for="user in users" :data="user" :key="user.id"></user>
  </div>
</template>

<script>
import axios from 'axios';
import User from '../components/User.vue';

export default {
  name: 'Users',
  components: {
    User,
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/users')
      .then(response => {
        this.users.push(...response.data);
      });
  },
  data() {
      return {
          users: [],
      };
  },
}
</script>
