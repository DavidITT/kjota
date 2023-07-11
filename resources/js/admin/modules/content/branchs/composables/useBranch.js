import {useStore} from "vuex";
import {computed, ref} from "vue";

const useBranch = () => {

    const store = useStore()

    return {
        //Actions
        getBranches: () => store.dispatch('branches/getBranches'),
        deleteBranch: (idBranch) => store.dispatch('branches/deleteBranch', idBranch),
        //Getters
        branches: computed(()  => store.getters['branches/branches']),
        links: computed(() => store.getters['branches/links']),
        loader: computed(() => store.getters['branches/loader']),
        store
    }
}

export default useBranch
