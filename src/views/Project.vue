<template>
  <main class="project">
    <h1>{{this.project.title}}</h1>
  </main>
</template>

<script>
export default {
  props: ['id'],
  data () {
    return {
      project: {}
    }
  },
  computed: {
    projects() {
      return this.$store.getters.getPageByUID('projects')
    }
  },
  created () {
   const foundProject = this.$store.getters.getPageByUID('projects').children.filter(p => { return p.uid === this.$props.id });
   if (foundProject.length > 0) {
     this.project = foundProject[0];
   } else {
     this.$router.push("/404");
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
