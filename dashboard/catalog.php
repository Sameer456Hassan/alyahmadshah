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
					$sql = "SELECT * FROM products";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
					?>
						<table class="main__table" id="prod_table">
							<thead>
								<tr>
									<th>ID</th>
									<th>IMAGE</th>
									<th>TITLE</th>
									<th>DESCRIPTION</th>
									<th>PRICE</th>
									<th>ACTION</th>
								</tr>
							</thead>
							<tbody>
								<?php while ($row = $result->fetch_assoc()) { ?>
									<tr>
										<td>
											<div class="main__table-text"><?php echo $row['id']; ?></div>
										</td>
										<td>
											<div class="main__table-text">
												<img src="<?php echo $row['image_path']; ?>" alt="Product Image" style="max-width: 150px; max-height: 150px;">
											</div>
										</td>
										<td>
											<div class="main__table-text"><a href="#"><?php echo $row['title']; ?></a></div>
										</td>
										<td>
											<div class="main__table-text"><?php
																			$description = $row['description'];

																			// Split the description into an array of words
																			$words = explode(' ', $description);

																			// Set the maximum number of words per line
																			$wordsPerLine = 10;

																			// Count the number of words
																			$wordCount = count($words);

																			// Output the words with line breaks
																			for ($i = 0; $i < $wordCount; $i++) {
																				echo $words[$i] . ' ';

																				// Add a line break after every $wordsPerLine words
																				if (($i + 1) % $wordsPerLine === 0 && $i !== $wordCount - 1) {
																					echo '<br>';
																				}
																			}
																			?></div>
										</td>
										<td>
											<div class="main__table-text"><?php echo $row['price']; ?></div>
										</td>
										<td>
											<div class="main__table-text">
												<button class="btn btn-danger mx-2 delete_btn" data-id="<?= $row['id'] ?>"><i class="fa-sharp fa-solid fa-trash"></i></button>
												<!-- <button class="btn btn-secondary mx-2"><i class="fa-sharp fa-solid fa-edit"></i></button> -->

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
<?php
require('./inc/footer.php');
?>