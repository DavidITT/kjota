import Swal from "sweetalert2";

const useAlerts = () => {

    const successMessage = (message) => {
        Swal.fire({
            icon: "success",
            title: message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
    }

    const errorMessage = (message) => {
        Swal.fire({
            icon: "error",
            title: message,
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
        })
    }

    return {
        successMessage,
        errorMessage,
    }
}

export default useAlerts
