<template>
  <nav class="navbar navbar-expand navbar-light bg-light">
    <a class="navbar-brand" href="#">LV</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item" :class="{ active: $route.path == '/' }">
          <router-link class="nav-link" to="/">Home</router-link>
        </li>
        <li class="nav-item" :class="{ active: $route.path == '/users' }">
          <router-link class="nav-link" to="/users">Users</router-link>
        </li>
      </ul>
    </div>
  </nav>
</template>

<script>
export default {
    name: 'Navbar',
}
</script>
