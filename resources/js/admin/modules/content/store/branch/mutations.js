//Mutation to set the branches obtained from Laravel
export const setBranches = (state, branches) => {
    state.branches = branches
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

//Mutation to handle status of modals in branches module
export const handleModal = (state, {modal, status}) => {
    switch (modal) {
        case 'show':
            state.showBranch = status
            break
        case 'edit':
            state.editBranch = status
            break
    }
}


