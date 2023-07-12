
//Search Branch
export const searchBranch = (state) => (query)  => {
    if(query.length === 0) return state.branches
    return (state.branches.filter(branch =>
        branch.name.toLowerCase().includes(query.toLocaleLowerCase())
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

//Edit branch
export const editBranch = (state) => {
    return state.editBranch
}

//Modal to show details of branch
export const showBranch = (state) => {
    return state.showBranch
}

//Get the info of branch in specific
export const branch = (state) => {
    return state.branch
}



