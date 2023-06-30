//Import Alerts
import useAlerts from "../../../../composables/useAlerts";
import Swal from "sweetalert2";

const {successMessage, errorMessage} = useAlerts()


export const getEmails = async ({commit, state}, {type = 'all', url = null}) => {
    try {
        if (state.url !== null) {
            await axios.get(state.url)
                .then((response) => {
                    commit('setEmails', response.data.emails.data)
                    commit('setLinks', response.data.emails.links)
                    commit('setUnreadEmails', response.data.unreadEmails)
                })
        } else {
            commit('setLoader', true)
            await axios.get('contact_emails/' + type)
                .then((response) => {
                    commit('setEmails', response.data.emails.data)
                    commit('setLinks', response.data.emails.links)
                    commit('setUnreadEmails', response.data.unreadEmails)
                    commit('setUrlPagination', response.data.emails.links[1].url)
                })
            commit('setLoader', false)
        }
    } catch (error) {
        errorMessage('Ocurrio un error al intentar obtener los datos')
    }
}

//                      [Individual methods]

export const markAsFavorite = async ({commit, state, dispatch}, idEmail) => {
    await axios.post('contact/mark_as_favorite/' + idEmail)
        .then(({data, status}) => {
            if (status === 200) {
                successMessage(data.message)
                dispatch('getEmails', {})
            }
        })
        .catch((error) => {
            errorMessage('Ocurrio un error intentelo mas tarde')
        })
}

export const markAsImportant = async ({commit, state, dispatch}, idEmail) => {
    await axios.post('contact/mark_as_important/' + idEmail)
        .then(({data, status}) => {
            if (status === 200) {
                successMessage(data.message)
                dispatch('getEmails', {})
            }
        })
        .catch((error) => {
            errorMessage('Ocurrio un error intentelo mas tarde')
        })
}

//                      [Mark All Methods]

//      Read

export const markAllAsRead = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/read', state.selectedEmails)
            .then(async ({data, status}) => {
                successMessage(data.message)
                await dispatch('getEmails', {})
                commit('markAllRead')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}

export const markAllAsUnread = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/unread', state.selectedEmails)
            .then(async ({data, status}) => {
                successMessage(data.message)
                await dispatch('getEmails', {})
                commit('markAllUnRead')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}

//      Favorite

export const markAllAsFavorite = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/favorite', state.selectedEmails)
            .then(async ({data, status}) => {
                successMessage(data.message)
                await dispatch('getEmails', {})
                commit('markAllAsFavorites')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}

export const removeFromFavorites = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/remove_favorite', state.selectedEmails)
            .then(async ({data, status}) => {
                successMessage(data.message)
                await dispatch('getEmails', {})
                commit('removeFromFavorites')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}

//      Important

export const markAllAsImportant = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/important', state.selectedEmails)
            .then(({data, status}) => {
                successMessage(data.message)
                dispatch('getEmails', {})
                commit('markAllAsImportant')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}

export const removeFromImportant = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        await axios.post('contact/mark_all/remove_important', state.selectedEmails)
            .then(async ({data, status}) => {
                successMessage(data.message)
                await dispatch('getEmails', {})
                commit('removeFromImportant')
            })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}


//      Delete Emails

export const deleteEmails = async ({state, dispatch, commit}) => {
    try {
        if (state.selectedEmails.length === 0) return
        let message = (state.selectedEmails.length > 1) ? '¿Estas seguro de eliminar estos correos?' : '¿Estas seguro de eliminar este correo?'

        Swal.fire({
            title: message,
            text: "Esta acción no puede revertirse",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#095CAA',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si, eliminar'
        }).then(async (result) => {
            if (result.isConfirmed) {
                await axios.post('contact/mark_all/delete', state.selectedEmails)
                    .then(({data, status}) => {
                        successMessage(data.message)
                        dispatch('getEmails', {})
                        commit('clearSelectedEmails')
                    })
            }
        })
    } catch (error) {
        errorMessage('Ocurrio un error intentelo mas tarde')
    }
}



