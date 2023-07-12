import {useStore} from "vuex";
import {computed} from "vue";

const useModal = () => {

    const store = useStore()

    return {
        showBranch: computed(() => store.getters['branches/showBranch']),
        editBranch: computed(() => store.getters['branches/editBranch']),
        handleModal: ({modal, status, branch }) => store.commit('branches/handleModal', {modal:modal,status:status, branch:branch}),
    }
}

export default useModal
