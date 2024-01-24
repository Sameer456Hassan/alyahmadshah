<?php
include("./inc/header.php");
?>


<!-- main content -->
<main class="main">
  <div class="container-fluid">
    <div class="row">
      <!-- main title -->
      <div class="col-12">
        <div class="main__title">
          <h2>Add new item</h2>
        </div>
      </div>
      <!-- end main title -->

      <!-- form -->
      <div class="col-12">
        <form class="form" id="myForm">
          <div class="row">
            <div class="col-12 col-md-5 form__cover">
              <div class="row">
                <div class="col-12 col-sm-6 col-md-12">
                  <div class="form__img">
                    <label for="form__img-upload">Upload cover (190 x 270)</label>
                    <input id="form__img-upload" name="form__img-upload" type="file" accept=".png, .jpg, .jpeg" />
                    <img id="form__img" src="#" alt=" " />
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 col-md-7 form__content">
              <div class="row">
                <div class="col-12">
                  <div class="form__group">
                    <input type="text" name="title" class="form__input" placeholder="Title" />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form__group">
                    <input type="text" name="price" class="form__input" placeholder="Price" />
                  </div>
                </div>

                <div class="col-12">
                  <div class="form__group">
                    <textarea id="text" name="description" class="form__textarea" placeholder="Description"></textarea>
                  </div>
                </div>

                <div class="col-12">
                  <button type="button" class="form__btn">publish</button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- end form -->
    </div>
  </div>
</main>
<!-- end main content -->

<!-- JS -->
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/smooth-scrollbar.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/admin.js"></script>

<script>
  $(document).ready(function() {
    // Function to handle form submission
    function submitForm() {
      // Get form data
      var formData = new FormData($('#myForm')[0]);

      // Make Ajax request
      $.ajax({
        type: 'POST',
        url: '../backend/process_form.php', // Change to your PHP script location
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
          // Handle success response
          console.log(response);
          // Show success message with SweetAlert2
          if(response === 'Form submitted successfully!'){
            Swal.fire({
              icon: 'success',
              title: 'Success',
              text: response,
            });
          }else{
            Swal.fire({
              icon: 'warning',
              title: 'Error',
              text: response,
            });
          }
        },
        error: function(error) {
          // Handle error
          console.log(error);
          // Show error message with SweetAlert2
          Swal.fire({
            icon: 'error',
            title: 'Error',
            text: 'There was an error processing the form.',
          });
        }
      });
    }

    // Event listener for button click
    $('.form__btn').on('click', function() {
      submitForm();
    });
  });
</script>
</body>

<!-- Mirrored from flixtv.volkovdesign.com/admin/add-item.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 13:53:09 GMT -->

</html>