<template>
    <section class="pt-50 pb-50">
        <div class="container">

            <Map :branch="branch" :srcMap="srcMap" id="branch-map"/>

            <div class="d-flex flex-wrap flex-column flex-md-row">
                <div class="col-md-4 mb-4">
                    <h4 class="mb-15 text-brand">Sucursal Tollocan</h4>
                    P.º Tollocan 319-A, Alvaro Obregon <br>
                    52100 San Mateo Atenco, Méx. <br>
                    <abbr title="Phone">Telefono:</abbr> 01 728 690 1794<br>
                    <abbr title="Phone">Telefono:</abbr> 01 728 690 9499<br>
                    <button @click="onViewMap('Tollocan')" type="button"
                            class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </button>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-15 text-brand">Sucursal Naucalpan</h4>
                    Calz. Transmisiones Militares 23 Col, Lomas de Sotelo<br>
                    53390 Naucalpan de Juárez, Méx.<br>
                    <abbr title="Phone">Telefono:</abbr> 5576 5423<br>
                    <button @click="onViewMap('Naucalpan')"
                            class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </button>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-15 text-brand">Sucural Villa Guerrero</h4>
                    Carretera Federal Toluca-Ixtapan de la Sal<br>
                    San Francisco, Villa Guerrero, EDOMEX<br>
                    <abbr title="Phone">Telefono:</abbr> 714 146 1904<br>
                    <button @click="onViewMap('Villa')"
                            class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </button>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-15 text-brand">Sucursal La Viga</h4>
                    Calz. de la Viga 1183, Militar Marte<br>
                    Iztacalco, 08840 Ciudad de México, CDMX<br>
                    <abbr title="Phone">Telefono:</abbr> 5634 1830<br>
                    <button @click="onViewMap('La Viga')"
                            class="btn-sm btn-brand-outline font-weight-bold text-brand bg-white text-hover-white mt-20 border-radius-5 btn-shadow-brand hover-up">
                        <i class="fi-rs-marker mr-10"></i>Ver mapa
                    </button>
                </div>
                <div class="col-md-4 mb-4">
                    <h4 class="mb-15 text-brand">Sucursal El Olivo</h4>
                    Lomas de San Fernando 206, El Olivo<br>
                    52789 Naucalpan de Juárez, Méx<br>
                    <abbr title="Telefono">Phone:</abbr>55 9137 8674<br>
                    <button @click="onViewMap('El Olivo')"
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
    setup() {
        const branch = ref('Naucalpan')
        const srcMap = ref('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.886328304762!2d-99.21830818280395!3d19.45645540744735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202413ac1e673%3A0x666397235f1e69b2!2sKjota!5e0!3m2!1ses-419!2smx!4v1685650319965!5m2!1ses-419!2smx')

        watch(branch, (newBranch, oldBranch) => {

            switch (branch.value) {
                case 'Naucalpan':
                    srcMap.value = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2236.886328304762!2d-99.21830818280395!3d19.45645540744735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d202413ac1e673%3A0x666397235f1e69b2!2sKjota!5e0!3m2!1ses-419!2smx!4v1685650319965!5m2!1ses-419!2smx'
                    break;
                case 'Tollocan':
                    srcMap.value = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d941.4809750159382!2d-99.55852456551999!3d19.28567530452051!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8ac5bca70285%3A0x320293f493621bf3!2sKjota!5e0!3m2!1ses-419!2smx!4v1685659689870!5m2!1ses-419!2smx'
                    break;
                case 'La Viga':
                    srcMap.value = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.9404548505975!2d-99.1235828058053!3d19.379463194765535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1fe675dbd3ee5%3A0xd88398ac865bbe9d!2sCalz.%20de%20la%20Viga%201183%2C%20Militar%20Marte%2C%20Iztacalco%2C%2008840%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1685659930258!5m2!1ses-419!2smx'
                    break;
                case 'El Olivo':
                    srcMap.value = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.519126024821!2d-99.27963652397281!3d19.389963642039568!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2012d686f5671%3A0x3cebec99e0633b24!2sLomas%20de%20San%20Fernando%20206%2C%20El%20Olivo%2C%2052789%20Naucalpan%20de%20Ju%C3%A1rez%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1685659994641!5m2!1ses-419!2smx'
                    break;
                case 'Villa':
                    srcMap.value = 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d943.3916464347712!2d-99.646324!3d18.950569!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd97d67e9e8e63%3A0x1a12670b1ad72ae9!2sEmpaques%20De%20Cart%C3%B3n%20K%20J!5e0!3m2!1ses-419!2smx!4v1685727781138!5m2!1ses-419!2smx'
                    break;
            }
        })

        return {
            branch,
            srcMap,
            onViewMap: (val) => branch.value = val

        }
    }
}
</script>

<style scoped>

</style>
