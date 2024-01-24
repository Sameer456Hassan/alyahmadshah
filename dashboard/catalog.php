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
					<h2>All Products</h2>


				</div>
			</div>
			<!-- end main title -->

			<!-- users -->
			<div class="col-12">
				<div class="main__table-wrap">
					<?php
					// Assuming $conn is your database connection and it's already established
					include("../backend/config.php");

					// Fetch data from the products table
					$sql = "SELECT id, title, price, image_path FROM products";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					?>
						<table class="main__table" id="prod_table">
							<thead>
								<tr>
									<th>ID</th>
									<th>TITLE</th>
									<th>PRICE</th>
									<th>IMAGE</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row = $result->fetch_assoc()) { ?>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $row['id']; ?></div>
										</td>
										<td>
											<div class="main__table-text"><a href="#"><?php echo $row['title']; ?></a></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $row['price']; ?></div>
										</td>
										<td>
											<div class="main__table-text">
												<img src="<?php echo $row['image_path']; ?>" alt="Product Image" style="max-width: 50px; max-height: 50px;">
											</div>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					<?php
					} else {
						echo "No products found";
					}

					// Close the database connection
					$conn->close();
					?>

				</div>
			</div>
			<!-- end users -->

		</div>
	</div>
</main>
<!-- end main content -->

<!-- modal status -->
<div id="modal-status" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Status change</h6>

	<p class="modal__text">Are you sure about immediately change status?</p>

	<div class="modal__btns">
		<button class="modal__btn modal__btn--apply" type="button">Apply</button>
		<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
	</div>
</div>
<!-- end modal status -->

<!-- modal delete -->
<div id="modal-delete" class="zoom-anim-dialog mfp-hide modal">
	<h6 class="modal__title">Item delete</h6>

	<p class="modal__text">Are you sure to permanently delete this item?</p>

	<div class="modal__btns">
		<button class="modal__btn modal__btn--apply" type="button">Delete</button>
		<button class="modal__btn modal__btn--dismiss" type="button">Dismiss</button>
	</div>
</div>
<!-- end modal delete -->

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
</body>

<!-- Mirrored from flixtv.volkovdesign.com/admin/catalog.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 13:53:09 GMT -->

</html>