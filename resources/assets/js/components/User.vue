<template>
  <div class="card mt-2">
    <div class="card-body">
      <h5 class="card-title">{{ data.name + ' ' + data.last_name }}</h5>
      <p class="card-subtitle">{{ data.email }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: ['data'],
}
</script>
