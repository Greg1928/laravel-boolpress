<template>
  <div class="container">
    <h2>Page not found</h2>
    <p>
        <router-link :to="{name: 'home'}">Return to Home Page</router-link>
    </p>
  </div>
</template>

<script>
export default {
    name: 'Page404'
}
</script>

<style>
</style>