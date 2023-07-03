
//Get emails
export const emails = (state)  => {
    return state.emails
}

export const filterEmails = (state) => (query)  => {
    if(query.length === 0) return state.emails
    return (state.emails.filter(email =>
            email.name.toLowerCase().includes(query.toLocaleLowerCase()) ||
            email.created_at.toLowerCase().includes(query.toLocaleLowerCase())
        ))
}

//Get the links of pagination
export const links = (state) => {
    return state.links
}

//Get all unread emails (count)
export const unreadEmails = (state) => {
    return state.unreadEmails
}

//Get the loader status
export const loader = (state) => {
    return state.loader
}

//Get the current url from pagination
export const getUrl = (state) => {
    return state.url
}

//Get the emails selected
export const selectedEmails = (state) => {
    return state.selectedEmails
}


//Get the state of the modal to create email
export const createModal = (state) => {
    return state.createModal
}

//Get the state of the modal to reply email
export const replyEmail = (state) => {
    return state.replyEmail
}









