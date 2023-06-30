
//Mutation to set the emails obtained from Laravel
export const setEmails = (state, emails) => {
    state.emails = emails
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

//Mutation to establish the url of the pagination and clean the selected emails if the page is changed
export const setUrlPagination = (state, url) => {
    state.url = url
    state.selectedEmails = []
}

//Mutation to assign the number of unread emails
export const setUnreadEmails = (state, unreadEmails) => {
    state.unreadEmails = unreadEmails
}

//Mutation to select or unselect all emails
export const selectAllEmails = (state, select) => {
    if (select) {
        state.selectedEmails = state.emails.map((email) => ({
            id: email.id,
            read: email.read,
            favorite: email.favorite,
            important: email.important
        }))
    } else {
        state.selectedEmails = []
    }
}

//Mutation to add or remove email from array of emails selected when user click in checkbox
export const checkUncheckEmail = (state, email) => {

    if (state.selectedEmails.some(item => item['id'] === email.id)) {
        let index = state.selectedEmails.findIndex((obj) => obj.id === email.id);
        state.selectedEmails.splice(index, 1);
    } else {
        state.selectedEmails.push({
            id: email.id,
            read: email.read,
            favorite: email.favorite,
            important: email.important
        })
    }
}

//Mutation to clear array of emails selected
export const clearSelectedEmails = (state) => {
    state.selectedEmails = []
}

//Mutation when select one or all emails and mark as read
export const markAllRead = (state) => {
    state.selectedEmails.map(item => {
        item.read = 1
    })
}

//Mutation when select one or all emails and mark as unread
export const markAllUnRead = (state) => {
    state.selectedEmails.map(item => {
        item.read = 0
    })
}

//Mutation when select one or all emails and mark as favorite
export const markAllAsFavorites = (state) => {
    state.selectedEmails.map(item => {
        item.favorite = 1
    })
}

//Mutation when select one or all emails and dismark from favorites
export const removeFromFavorites = (state) => {
    state.selectedEmails.map(item => {
        item.favorite = 0
    })
}

//Mutation when select one or all emails and mark as important
export const markAllAsImportant = (state) => {
    state.selectedEmails.map(item => {
        item.important = 1
    })
}

//Mutation when select one or all emails and dismark from importants
export const removeFromImportant = (state) => {
    state.selectedEmails.map(item => {
        item.important = 0
    })
}

//Mutation to handle status of modals in contact module
export const handleModal = (state, {modal, modalStatus}) => {
    switch (modal) {
        case 'create':
            state.createModal = modalStatus
            break
        case 'reply':
            state.replyEmail = modalStatus
            break
    }
}



