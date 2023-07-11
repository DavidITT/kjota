import useAlerts from "../../../../composables/useAlerts";
import Swal from "sweetalert2";
import {commit} from "lodash/seq";

const {successMessage, errorMessage} = useAlerts()

export const getBranches = async ({commit, state}) => {
    try {
        if (state.url !== null) {
            await axios.get(state.url)
                .then((response) => {
                    commit('setBranches', response.data.data)
                    commit('setLinks', response.data.links)
                })
        } else {
            commit('setLoader', true)
            await axios.get('get_branches')
                .then((response) => {
                    commit('setBranches', response.data.data)
                    commit('setLinks', response.data.links)
                    commit('setUrl', response.data.links[1].url)
                })
            commit('setLoader', false)
        }
    } catch (error) {
        errorMessage('Ocurrio un error al intentar obtener los datos de las sucursales')
    }
}

//      Delete Branch (Individual)

export const deleteBranch = async ({state, dispatch}, id) => {
    try {
        Swal.fire({
            title: '¿Estas seguro de eliminar esta sucursal?',
            text: "Esta acción no puede revertirse",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#095CAA',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
        }).then(async (result) => {
            if (result.isConfirmed) {
                await axios.post('branch/delete/' + id)
                    .then(({data, status}) => {
                        successMessage(data.message)
                        dispatch('getBranches')
                    })
            }
        })
    } catch (error) {
        errorMessage('Ocurrio un error ial intentar eliminar')
    }
}

