<template>
    <section class="pt-50 pb-50">
        <div class="container">

            <Map :branch="branch" :srcMap="srcMap" id="branch-map"/>

            <div class="d-flex flex-wrap flex-column flex-md-row">
                <div class="col-md-4 mb-4 p-20" v-for="branch in branchs" :key="branch.id">
                    <h4 class="mb-15 text-brand">Sucursal {{ branch.name }}</h4>
                    <p>{{ branch.address }}</p>
                    <abbr title="Phone">Telefono:</abbr> {{ branch.phone }}<br>
                    <button @click="onViewMap(branch.address)" type="button"
                            class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </button>
                </div>
            </div>
        </div>
    </section>
</template>

<script>

import Map from "./components/Map";
import {ref, watch} from "vue";

export default {
    name: "MapSection",
    components: {Map},
    props: {
        branchs: {
            type: Array
        }
    },
    setup(props) {
        const branch = ref('Naucalpan')
        const srcMap = ref('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.886328304762!2d-99.21830818280395!3d19.45645540744735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202413ac1e673%3A0x666397235f1e69b2!2sKjota!5e0!3m2!1ses-419!2smx!4v1685650319965!5m2!1ses-419!2smx')
        const branchs = props.branchs

        watch(branch, () => {
            srcMap.value = `https://maps.google.com/maps?&q="+${branch.value}"&output=embed`
        })


        return {
            branch,
            branchs,
            srcMap,
            onViewMap: (val) => branch.value = val

        }
    }
}
</script>

<style scoped>

</style>
