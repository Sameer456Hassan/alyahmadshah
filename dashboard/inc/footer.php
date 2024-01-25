<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smooth-scrollbar.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>
<script>
    let table = new DataTable('#prod_table');
</script>

<!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>
    function submitForm() {
        var email = $("#email").val();
        var password = $("#password").val();

        // Perform form validation here if needed

        // AJAX request
        $.ajax({
            type: "POST",
            url: "../backend/login.php",
            data: {
                email: email,
                password: password
            },
            success: function(response) {
                // Handle the response from the server
                if (response === "success") {
                    // Redirect to a new page or perform any other action
                    Swal.fire({
                        icon: 'success',
                        title: 'Login Successful',
                        showConfirmButton: false,
                        timer: 1000
                    }).then(function(e) {
                        window.location.href = "./dashboard.php"
                    });
                } else {
                    // Display an error message
                    Swal.fire({
                        icon: 'error',
                        title: 'Login Failed',
                        text: 'Invalid email or password',
                    });
                }
            },
            error: function() {
                // Display an error message
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                });
            }
        });
    }
</script>
<script>
    $(document).ready(function() {

        $(".delete_btn").on("click", function() {
            // Get the data-id attribute of the clicked button
            var id = $(this).data("id");

            // Ask for confirmation before proceeding
            Swal.fire({
                title: 'Are you sure?',
                text: 'You won\'t be able to revert this!',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If the user confirms, make an AJAX request
                    $.ajax({
                        type: "POST",
                        url: "../backend/delete.php",
                        data: {
                            id: id
                        },
                        success: function(response) {
                            // Handle the response from the server
                            if (response === "success") {
                                // If deletion is successful, show a success message
                                Swal.fire({
                                    icon: 'success',
                                    title: 'Deleted!',
                                    text: 'The row has been deleted successfully.'
                                }).then(function() {
                                    // You can perform additional actions after the user clicks OK
                                    // For example, you can reload the page or update the UI
                                    location.reload();
                                });
                            } else {
                                // If deletion is not successful, show an error message
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error!',
                                    text: response
                                });
                            }
                        },
                        error: function() {
                            // Handle AJAX errors
                            Swal.fire({
                                icon: 'error',
                                title: 'Error!',
                                text: 'An error occurred while processing your request. Please try again later.'
                            });
                        }
                    });
                }
            });
        });
    })
</script>
</body>


</html>