import {useStore} from "vuex";
import {computed, ref} from "vue";

const useCategory = () => {

    const store = useStore()

    const search = ref('')

    return {
        //Actions
        getCategories: (type) => store.dispatch('categories/getCategories', type),
        //deleteBranch: (idBranch) => store.dispatch('branches/deleteBranch', idBranch),
        //Getters
        searchCategory: computed(()  => store.getters['categories/searchCategory'](search.value)),
        links: computed(() => store.getters['categories/links']),
        loader: computed(() => store.getters['categories/loader']),
        search,
        store
    }
}

export default useCategory
