<template lang="html">
  <nav>
    <router-link :to="{ name: 'home' }">Home</router-link>
    <router-link :to="{ name: 'projects' }">Projects</router-link>
    <router-link :to="{ name: 'about' }">About</router-link>
  </nav>
</template>

<script>
export default {
}
</script>

<style lang="scss" scoped>
nav {
  a {
    padding-left:1rem;
  }
}
</style>
