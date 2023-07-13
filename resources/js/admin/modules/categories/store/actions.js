import useAlerts from "../../../composables/useAlerts";
import Swal from "sweetalert2";
const {successMessage, errorMessage} = useAlerts()

export const getCategories = async ({commit, state}, type='categories') => {
    try {
        if (state.url !== null) {
            await axios.get(state.url)
                .then((response) => {
                    commit('setCategories', response.data.data)
                    commit('setLinks', response.data.links)
                })
        } else {
            commit('setLoader', true)
            await axios.get('category/get_categories/'+ type)
                .then((response) => {
                    commit('setCategories', response.data.data)
                    commit('setLinks', response.data.links)
                    commit('setUrl', response.data.links[1].url)
                })
            commit('setLoader', false)
        }
    } catch (error) {
        errorMessage('Ocurrio un error al intentar obtener los datos de las categorias')
    }
}
