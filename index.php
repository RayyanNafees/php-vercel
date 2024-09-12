<!DOCTYPE html>
<html>
<head>
  <title>Product List</title>
    <style>
        .product {
        	      border: 1px solid #ccc;
        	            padding: 15px;
        	                  margin-bottom: 10px;
        	                        float: left;
        	                              width: 30%;
        	                                  }

        	                                      .product img {
        	                                      	      max-width: 100%;
        	                                      	            height: auto;
        	                                      	                }
        	                                      	                  </style>
        	                                      	                  </head>
        	                                      	                  <body>

        	                                      	                    <h1>Our Products</h1>

        	                                      	                      <?php
        	                                      	                          // 1. Include your product data
        	                                      	                              include 'products.php';

        	                                      	                                  // 2. Loop through the $products array
        	                                      	                                      foreach ($products as $product) {
        	                                      	                                      	  ?>
        	                                      	                                      	        <div class="product">
        	                                      	                                      	                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        	                                      	                                      	                        <h2><?php echo $product['name']; ?></h2>
        	                                      	                                      	                                <p>$<?php echo $product['price']; ?></p>
        	                                      	                                      	                                      </div>
        	                                      	                                      	                                        <?php
        	                                      	                                      	                                            } // End of the foreach loop
        	                                      	                                      	                                              ?>

        	                                      	                                      	                                              </body>
        	                                      	                                      	                                              </html>
  
