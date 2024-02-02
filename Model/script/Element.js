
// toastr.options = {
//     "closeButton": true,
//     "debug": false,
//     "newestOnTop": false,
//     "progressBar": true,
//     "positionClass": "toast-bottom-right",
//     "preventDuplicates": false,
//     "onclick": null,
//     "showDuration": "300",
//     "hideDuration": "1000",
//     "timeOut": "5000",
//     "extendedTimeOut": "1000",
//     "showEasing": "swing",
//     "hideEasing": "linear",
//     "showMethod": "fadeIn",
//     "hideMethod": "fadeOut"
// }

var Toast = Swal.mixin({
    toast: true,
    position: 'top-start',
    showConfirmButton: false,
    showCloseButton: true,
    cancelButtonAriaLabel: 'Thumbs down',
    timer: 5000
});




/******************************database connection function*******************************/




var showMessage = function (text) {
    $.confirm({
        title: 'Message',
        content: text,
        type: 'red',
        typeAnimated: true,
        theme: 'modern', // 'material', 
        buttons: {
            close: {
                text: "OK",
                function() {

                }
            }
        }
    });
}

var showWarning = function (text) {
    $(document).Toasts('create', {
        class: 'bg-warning',
        title: 'Warning',
//      subtitle: 'Arrêt du processus',
        body: text
    })
}

var showWarningWal = function (text) {
    Toast.fire({
        icon: 'warning',
        title: text
    })
}

var showSuccedWal = function (text) {
    Toast.fire({
        icon: 'success',
        title: text
    })
}

var showInfosWal = function (text) {
    Toast.fire({
        icon: 'info',
        title: text
    })
}

var showErrorWal = function (text) {
    Toast.fire({
        icon: 'error',
        title: text
    })
}

