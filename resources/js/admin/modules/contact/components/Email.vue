<template>
    <tr :class="readClass">
        <td class="action">
            <input type="checkbox" :checked="selectAll" role="button" v-model="selectedEmail"
                   @change="checkUncheckEmail(email)"/>
        </td>
        <td class="action">
            <i class="icon material-icons" :class="favoriteClass" role="button" @click="markAsFavorite(email.id)"></i>
        </td>
        <td class="action">
            <i class="icon material-icons" :class="importantClass" role="button" @click="markAsImportant(email.id)"></i>
        </td>
        <td class="name">{{ email.name }}</td>
        <td class="subject" role="button" @click="openReplyEmailModal">{{ shortMessage(email.message) }}</td>
        <td class="time">{{ email.created_at }}</td>
        <td>
            <i class="icon material-icons md-reply" role="button"
               @click="openReplyEmailModal" ></i>
        </td>
    </tr>
</template>

<script>
import {computed} from "vue";
import useEmails from "../composables/useEmails";
import useSelect from "../composables/useSelect";
import useModal from "../composables/useModal";

export default {
    name: "Email",
    props: {
        email: Object,
        selectAll: Boolean
    },
    setup(props, context) {

        const {markAsFavorite, markAsImportant} = useEmails({})
        const {selectedEmail, checkUncheckEmail} = useSelect()
        const {replyEmail, handleModal} = useModal()

        const openReplyEmailModal = () => {
            handleModal({modal:'reply',statusModal:true})
            context.emit('sendEmail', props.email)
        }

        return {
            //props
            email: computed(() => props.email),

            //useEmails
            markAsFavorite,
            markAsImportant,

            //useSelect
            selectedEmail,
            checkUncheckEmail,

            //Short message
            shortMessage: (text) => (text.length > 20) ? text.substring(0, 20) + '...' : text,

            //computed (Styles)
            readClass: computed(() => {
                return (props.email.read === 1) ? 'read' : ''
            }),
            favoriteClass: computed(() => {
                return (props.email.favorite === 1) ? 'md-star text-warning' : 'md-star_border'
            }),
            importantClass: computed(() => {
                return (props.email.important === 1) ? 'md-bookmark text-brand' : 'md-bookmark_border'
            }),

            //useModal
            replyEmail,
            handleModal,

            //ReplyEmailModal
            openReplyEmailModal

        }
    }
}
</script>

<style scoped>

</style>
