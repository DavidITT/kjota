import {useStore} from "vuex";
import {computed, ref} from "vue";

const useModal = () => {

    const store = useStore()
    const search = ref('')

    return {
        searchBranch: computed(()  => store.getters['branches/searchBranch'](search.value)),
        search
    }
}

export default useModal
