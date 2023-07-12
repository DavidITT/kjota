import {helpers, maxLength, minLength, required} from "@vuelidate/validators/dist";

const rules = {
    name: {
        required: helpers.withMessage('El nombre es requerido.', required),
    },
    address: {
        required: helpers.withMessage('La dirección es requerida.', required),
    },
    phone: {
        required: helpers.withMessage('El numero telefonico es requerido.', required),
        minLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', minLength(10)),
        maxLength: helpers.withMessage('El numero telefonico tiene un formato incorrecto.', maxLength(10)),
    },
    img:{
        required: helpers.withMessage('Es requerido que suba una foto de la sucursal', required)
    }
}

export default rules
