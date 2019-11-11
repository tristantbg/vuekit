<template>
  <main class="projects">
    <router-link :to="{ name: 'project', params: { id: project.uid } }" ref="project" v-for="project in projects.children" :key="project.uid">
      <img v-lazy="featured(project).url" :data-srcset="featured(project).srcSet" />
    </router-link>
  </main>
</template>

<script>
export default {
  computed: {
    projects() {
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
