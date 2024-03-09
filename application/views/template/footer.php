<link rel="stylesheet" href="<?= base_url('application/assets/css/bootstrap.css') ?>">



<script src="<?= base_url('application/assets/js/jquery.js') ?>"></script>
<script src="<?= base_url('application/assets/js/popper.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.js') ?>"></script>
<script src="<?= base_url('application/assets/js/bootstrap.min.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('.confirm-delete').click(function(e) {
            e.preventDefault();
            confirmDialog = confirm("Are you sure you want to delete this data?");
            if (confirmDialog) {
                var id = $(this).val();
                // Ajax request
                $.ajax({
                    type: "DELETE",
                    url: "/users/confirmdelete/" + id,
                    success: function(response) {
                        alert("Data Deleted Successfully");
                        window.location.reload();
                    }

                });
            }
        });
    });
</script>
<script>
    // Your JavaScript code here
    document.addEventListener('DOMContentLoaded', function() {
        var flashdata = document.querySelector('.flashdata');
        if (flashdata) {
            // Fade out after 3 seconds
            setTimeout(function() {
                flashdata.style.opacity = 0;
            }, 3000);
            // Remove from DOM after transition
            flashdata.addEventListener('transitionend', function() {
                flashdata.remove();
            });
        }
    });
</script>