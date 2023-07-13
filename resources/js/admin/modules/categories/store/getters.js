
//Search In Table (Categories or SubCategories)

export const searchCategory = (state) => (query)  => {
    if(query.length === 0) return state.categories
    return (state.categories.filter(category =>
        category.name.toLowerCase().includes(query.toLocaleLowerCase())
    ))
}

//Get the loader status
export const loader = (state) => {
    return state.loader
}

//Get the links of pagination
export const links = (state) => {
    return state.links
}

//Get the info of branch in specific
export const category = (state) => {
    return state.category
}

