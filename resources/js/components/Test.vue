<template>
    <h1>{{ userId }}</h1>
</template>
<script>
  export default {
    props: ['userId'],
    mounted () {
      // Do something useful with the data in the template
      console.log(this.userId)
    }
  }
</script>
