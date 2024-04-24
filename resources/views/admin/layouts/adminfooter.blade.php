<script src="{{url('admin/js/jquery.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
<script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js')}}"></script>
<script src="{{url('https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js')}}"></script>
<script src="{{url('admin/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $('textarea').summernote();
    });
</script>

<script>
$(document).ready(function() {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    });

    $('.confirm-delete').click(function(e) {
        e.preventDefault();
        var aboutId = $(this).data('id');
        swalWithBootstrapButtons.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            reverseButtons: false
        }).then((result) => {
            if (result.isConfirmed) {

                $(this).closest('form').submit();
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                swalWithBootstrapButtons.fire({
                    title: "Cancelled",
                    text: "Your file is safe :)",
                    icon: "error"
                });
            }
        });
    });
});
</script>
<script>
$(document).ready(function() {

const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
});

$('.confirm-publish').click(function(e) {
  e.preventDefault();

  var aboutId = $(this).data('id');

  swalWithBootstrapButtons.fire({
    title: "Are you sure you want to publish?",
    icon: "success",
    showCancelButton: true,
    confirmButtonText: "Yes, publish",
    cancelButtonText: "No, cancel",
    reverseButtons: false
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: $(this).closest('form').attr('action'),
        type: 'POST',
        data: $(this).closest('form').serialize(),
        success: function(response) {
          swalWithBootstrapButtons.fire({
            title: "Published!",
            text: "Your file has been published.",
            icon: "success"
          }).then(() => {
            window.location.href = window.location.href;
          });
        },
        error: function(jqXHR, textStatus, errorThrown) {
          swalWithBootstrapButtons.fire({
            title: "Error!",
            text: "An error occurred while publishing the file.",
            icon: "error"
          });
        }
      });
    } else if (result.dismiss === Swal.DismissReason.cancel) {
      // Show cancellation message
      swalWithBootstrapButtons.fire({
        title: "Cancelled",
        text: "Publishing has been cancelled.",
        icon: "error" // Use error icon for consistency
      });
    }
  });
});
});

</script>


<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}

</body>

</html>

