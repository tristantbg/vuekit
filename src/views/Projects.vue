<template>
  <main class="projects">
    <li ref="project" v-for="project in projects.children" :key="project.uid">
      <img v-lazy="featured(project).url" :data-srcset="featured(project).srcSet" />
    </li>
  </main>
</template>

<script>
export default {
  computed: {
    projects() {
      console.log(this.$store.getters.getPageByUID('projects'))
      return this.$store.getters.getPageByUID('projects')
    }
  },
  methods: {
    featured(project) {
      return project.files.filter(img => img.id === project.content.featured[0].id)[0]
    }
  }
}
</script>

<style lang="scss">
.projects {
  background: red;
}
</style>
