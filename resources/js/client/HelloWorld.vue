<template>
    <h1>Hola {{title}}</h1>
</template>
<script>
import {useStore} from "vuex";
import {computed} from "vue";

export default {
    setup(){
        const store = useStore()
        return {
            title: computed(() => store.state.module),
        }
    }

}
</script>
