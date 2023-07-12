import {useStore} from "vuex";
import {computed, ref} from "vue";

const useBranch = () => {

    const store = useStore()

    const search = ref('')

    return {
        //Actions
        getBranches: () => store.dispatch('branches/getBranches'),
        deleteBranch: (idBranch) => store.dispatch('branches/deleteBranch', idBranch),
        //Getters
        branches: computed(()  => store.getters['branches/branches']),
        links: computed(() => store.getters['branches/links']),
        loader: computed(() => store.getters['branches/loader']),
        searchBranch: computed(()  => store.getters['branches/searchBranch'](search.value)),
        search,
        store
    }
}

export default useBranch
