<template>
    <iframe class="leaflet-map mb-50 wow fadeIn" data-wow-delay="1s"
            :src="props.srcMap"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
</template>

<script>

export default {
    name: "Map",
    props:{
      srcMap:{
          type: String,
          required:true
      }
    },
    setup(props) {
        return {
            props
        }
    }
}
</script>

<style scoped>

</style>
