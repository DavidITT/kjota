
//Mutation to set the categories obtained from Laravel
export const setCategories = (state, categories) => {
    state.categories = categories
}

//Mutation to set the loader status
export const setLoader = (state, status) => {
    state.loader = status
}

//  Mutation to set the pagination links obtained from Laravel
export const setLinks = (state, links) => {
    state.links = links
}

// Mutation to set only the url
export const setUrl = (state, url) => {
    state.url = url
}
