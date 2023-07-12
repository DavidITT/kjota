<template>
    <!-- Modal -->

    <div class="modal fade" :class="{show:showBranch}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalles de sucursal</h5>
                    <button type="button" class="btn-close" @click="handleModal({modal:'show', status:false})"
                            aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mtb-30">
                        <div class="col-12 col-lg-6 align-self-center">
                            <div class="detail-gallery">
                                <div class="product-image-slider">
                                    <figure class="border-radius-10">
                                        <img :src="`/${branch.image.url}`" alt="product image">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="detail-info">
                                <h3 class="title-detail mb-30">Sucursal {{ branch.name }}</h3>
                                <div class="product-detail-rating mb-20">
                                    <div class="pro-details-brand">
                                        <span> Dirección: {{ branch.address }}</span>
                                    </div>
                                </div>
                                <div class="product-detail-rating mb-20">
                                    <div class="pro-details-brand">
                                        <span> Telefono: {{ branch.phone }}</span>
                                    </div>
                                </div>
                                <ul class="font-xs color-grey mb-20">
                                    <li class="mb-5">Estado:
                                        <span class="badge rounded-pill" :class="branch.status === 1 ? 'alert-success' : 'alert-warning'">{{ branch.status === 1 ? 'Habilitado' : 'Deshabilitado' }}</span>
                                    </li>
                                </ul>

                                <a :href="`https://maps.google.com/?q=${branch.address}`"
                                   target="_blank" class="btn-sm btn-outline-primary mb-20">
                                    Ver mapa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

import UseModal from "../composables/useModal";
import useBranch from "../composables/useBranch";

export default {
    name: "ShowBranch",
    setup() {
        const {store, getBranches} = useBranch()
        const {showBranch, handleModal} = UseModal()
        const branch = store.getters['branches/branch']
        return {
            showBranch,
            handleModal,
            branch
        }
    }
}
</script>

<style scoped>
.show {
    display: list-item;
    opacity: 1;
    background: rgba(32, 38, 38, 0.3);
}
</style>
