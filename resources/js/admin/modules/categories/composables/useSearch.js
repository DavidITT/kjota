import {useStore} from "vuex";
import {computed, ref} from "vue";

const useModal = () => {

    const store = useStore()
    const search = ref('')

    return {
        searchCategory: computed(()  => store.getters['categories/searchCategory'](search.value)),
        search
    }
}

export default useModal
