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
          <h2>Dashboard</h2>

          <a href="add-item.php" class="main__title-link">add item</a>
        </div>
      </div>
      <!-- end main title -->

      <!-- stats -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats">
          <span>Unique views this month</span>
          <p>5 678</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M21.92,11.6C19.9,6.91,16.1,4,12,4S4.1,6.91,2.08,11.6a1,1,0,0,0,0,.8C4.1,17.09,7.9,20,12,20s7.9-2.91,9.92-7.6A1,1,0,0,0,21.92,11.6ZM12,18c-3.17,0-6.17-2.29-7.9-6C5.83,8.29,8.83,6,12,6s6.17,2.29,7.9,6C18.17,15.71,15.17,18,12,18ZM12,8a4,4,0,1,0,4,4A4,4,0,0,0,12,8Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,12,14Z" />
          </svg>
        </div>
      </div>
      <!-- end stats -->

      <!-- stats -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats">
          <span>Items added this month</span>
          <p>172</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M10,13H4a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,19H5V15H9ZM20,3H14a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,20,3ZM19,9H15V5h4Zm1,7H18V14a1,1,0,0,0-2,0v2H14a1,1,0,0,0,0,2h2v2a1,1,0,0,0,2,0V18h2a1,1,0,0,0,0-2ZM10,3H4A1,1,0,0,0,3,4v6a1,1,0,0,0,1,1h6a1,1,0,0,0,1-1V4A1,1,0,0,0,10,3ZM9,9H5V5H9Z" />
          </svg>
        </div>
      </div>
      <!-- end stats -->

      <!-- stats -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats">
          <span>New comments</span>
          <p>2 573</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M8,11a1,1,0,1,0,1,1A1,1,0,0,0,8,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,12,11Zm4,0a1,1,0,1,0,1,1A1,1,0,0,0,16,11ZM12,2A10,10,0,0,0,2,12a9.89,9.89,0,0,0,2.26,6.33l-2,2a1,1,0,0,0-.21,1.09A1,1,0,0,0,3,22h9A10,10,0,0,0,12,2Zm0,18H5.41l.93-.93a1,1,0,0,0,.3-.71,1,1,0,0,0-.3-.7A8,8,0,1,1,12,20Z" />
          </svg>
        </div>
      </div>
      <!-- end stats -->

      <!-- stats -->
      <div class="col-12 col-sm-6 col-xl-3">
        <div class="stats">
          <span>New reviews</span>
          <p>1 021</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path d="M22,9.67A1,1,0,0,0,21.14,9l-5.69-.83L12.9,3a1,1,0,0,0-1.8,0L8.55,8.16,2.86,9a1,1,0,0,0-.81.68,1,1,0,0,0,.25,1l4.13,4-1,5.68A1,1,0,0,0,6.9,21.44L12,18.77l5.1,2.67a.93.93,0,0,0,.46.12,1,1,0,0,0,.59-.19,1,1,0,0,0,.4-1l-1-5.68,4.13-4A1,1,0,0,0,22,9.67Zm-6.15,4a1,1,0,0,0-.29.88l.72,4.2-3.76-2a1.06,1.06,0,0,0-.94,0l-3.76,2,.72-4.2a1,1,0,0,0-.29-.88l-3-3,4.21-.61a1,1,0,0,0,.76-.55L12,5.7l1.88,3.82a1,1,0,0,0,.76.55l4.21.61Z" />
          </svg>
        </div>
      </div>
      <!-- end stats -->

      <!-- dashbox -->
      <div class="col-12 col-xl-6">
        <?php
        // Include the database configuration
        include('../backend/config.php');

        // Fetch all items from the database
        $result = $conn->query("SELECT * FROM products ORDER BY id DESC LIMIT 5");

        if ($result->num_rows > 0) {
        ?>
          <div class="dashbox">
            <div class="dashbox__title">
              <h3>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                  <path d="M12,6a1,1,0,0,0-1,1V17a1,1,0,0,0,2,0V7A1,1,0,0,0,12,6ZM7,12a1,1,0,0,0-1,1v4a1,1,0,0,0,2,0V13A1,1,0,0,0,7,12Zm10-2a1,1,0,0,0-1,1v6a1,1,0,0,0,2,0V11A1,1,0,0,0,17,10Zm2-8H5A3,3,0,0,0,2,5V19a3,3,0,0,0,3,3H19a3,3,0,0,0,3-3V5A3,3,0,0,0,19,2Zm1,17a1,1,0,0,1-1,1H5a1,1,0,0,1-1-1V5A1,1,0,0,1,5,4H19a1,1,0,0,1,1,1Z" />
                </svg>
                Products
              </h3>

              <div class="dashbox__wrap">
                <a class="dashbox__refresh" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
                  </svg>
                </a>
                <a class="dashbox__more" href="catalog.php">View All</a>
              </div>
            </div>

            <div class="dashbox__table-wrap dashbox__table-wrap--1">
              <table class="main__table main__table--dash">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>TITLE</th>
                    <th>PRICE</th>
                    <th>DESCRIPTION</th>
                    <th>IMAGE</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                  // Output the table rows
                  while ($row = $result->fetch_assoc()) {
                  ?><tr>
                      <td>
                        <div class="main__table-text"><?= $row['id'] ?></div>
                      </td>
                      <td>
                        <div class="main__table-text"><?= $row['title'] ?></div>
                      </td>
                      <td>
                        <div class="main__table-text"><?= $row['price'] ?></div>
                      </td>
                      <td>
                        <div class="main__table-text"><?php
                                                      $description = $row['description'];

                                                      // Split the description into an array of words
                                                      $words = explode(' ', $description);

                                                      // Set the maximum number of words per line
                                                      $wordsPerLine = 5;

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
                        <div class="main__table-text">
                          <img src="<?= $row['image_path'] ?>" alt="Product Image" style="max-width: 50px; max-height: 50px;">
                        </div>
                      </td>
                    </tr>
                <?php
                  }

                  // Output the closing tags
                  echo '</tbody>
            </table>
          </div>
        </div>';
                } else {
                  echo "No items found.";
                }

                // Close the database connection
                $conn->close();
                ?>

            </div>
            <!-- end dashbox -->

            <!-- dashbox -->
            <div class="col-12 col-xl-6">
              <div class="dashbox">
                <div class="dashbox__title">
                  <h3>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                      <path d="M10,13H3a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,10,13ZM9,20H4V15H9ZM21,2H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,21,2ZM20,9H15V4h5Zm1,4H14a1,1,0,0,0-1,1v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V14A1,1,0,0,0,21,13Zm-1,7H15V15h5ZM10,2H3A1,1,0,0,0,2,3v7a1,1,0,0,0,1,1h7a1,1,0,0,0,1-1V3A1,1,0,0,0,10,2ZM9,9H4V4H9Z" />
                    </svg>
                    Latest items
                  </h3>

                  <div class="dashbox__wrap">
                    <a class="dashbox__refresh" href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M21,11a1,1,0,0,0-1,1,8.05,8.05,0,1,1-2.22-5.5h-2.4a1,1,0,0,0,0,2h4.53a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4.77A10,10,0,1,0,22,12,1,1,0,0,0,21,11Z" />
                      </svg>
                    </a>
                    <a class="dashbox__more" href="catalog.php">View All</a>
                  </div>
                </div>

                <div class="dashbox__table-wrap dashbox__table-wrap--2">
                  <table class="main__table main__table--dash">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>TITLE</th>
                        <th>CATEGORY</th>
                        <th>STATUS</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="main__table-text">26</div>
                        </td>
                        <td>
                          <div class="main__table-text">
                            <a href="#">I Dream in Another Language</a>
                          </div>
                        </td>
                        <td>
                          <div class="main__table-text">Movie</div>
                        </td>
                        <td>
                          <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="main__table-text">25</div>
                        </td>
                        <td>
                          <div class="main__table-text"><a href="#">Benched</a></div>
                        </td>
                        <td>
                          <div class="main__table-text">Movie</div>
                        </td>
                        <td>
                          <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="main__table-text">24</div>
                        </td>
                        <td>
                          <div class="main__table-text"><a href="#">Whitney</a></div>
                        </td>
                        <td>
                          <div class="main__table-text">TV Show</div>
                        </td>
                        <td>
                          <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="main__table-text">23</div>
                        </td>
                        <td>
                          <div class="main__table-text"><a href="#">Blindspotting 2</a></div>
                        </td>
                        <td>
                          <div class="main__table-text">TV Show</div>
                        </td>
                        <td>
                          <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="main__table-text">22</div>
                        </td>
                        <td>
                          <div class="main__table-text"><a href="#">Blindspotting</a></div>
                        </td>
                        <td>
                          <div class="main__table-text">TV Show</div>
                        </td>
                        <td>
                          <div class="main__table-text main__table-text--green">Visible</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <!-- end dashbox -->

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
</body>

<!-- Mirrored from flixtv.volkovdesign.com/admin/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Sep 2023 13:53:08 GMT -->

</html>