toastr.options =
  {
    closeButton: false,
    debug: false,
    newestOnTop: false,
    progressBar: true,
    positionClass: "toast-top-right",
    preventDuplicates: false,
    onclick: null,
    showDuration: "300",
    hideDuration: "1000",
    timeOut: "5000",
    extendedTimeOut: "1000",
    showEasing: "swing",
    hideEasing: "linear",
    showMethod: "fadeIn",
    hideMethod: "fadeOut",
  } 
  // Inicialización del select2
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Initialize Select2 Elements
    $(".select2bs4").select2({
      theme: "bootstrap4",
    });
  });
