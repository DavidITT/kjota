import {computed, ref, watch} from "vue";
import {useStore} from "vuex";
import {selectAllEmails} from "../store/contact/mutations";

const useSelect = () => {

    const store = useStore()
    const selectAll = ref(false)

    let selectedEmails = computed(() => store.getters['contact/selectedEmails'])

    const markAllAsRead = () => {
        let res = selectedEmails.value.every((element) => element.read === 1)
        if(res){
            return store.dispatch('contact/markAllAsUnread')
        }else{
            return store.dispatch('contact/markAllAsRead')
        }
    }
    const markAllAsFavorite = () => {
        let res = selectedEmails.value.every((element) => element.favorite === 1)
        if(res){
            return store.dispatch('contact/removeFromFavorites')
        }else{
            return store.dispatch('contact/markAllAsFavorite')
        }
    }
    const markAllAsImportant = () => {
        let res = selectedEmails.value.every((element) => element.important === 1)
        if(res){
            return store.dispatch('contact/removeFromImportant')
        }else{
            return store.dispatch('contact/markAllAsImportant')
        }
    }

    watch(selectedEmails, () => {
        if(selectAll.value === true && selectedEmails.value.length === 0){
            selectAll.value = false
        }
    });

    return {
        //Actions
        markAllAsRead,
        markAllAsFavorite,
        markAllAsImportant,
        deleteEmails: () => store.dispatch('contact/deleteEmails'),
        //Mutations
        selectAllEmails: (select) => store.commit('contact/selectAllEmails', select),
        checkUncheckEmail: (selectedEmail) => store.commit('contact/checkUncheckEmail', selectedEmail),
        //Getters
        selectedEmails,
        selectAll,
    }
}

export default useSelect
