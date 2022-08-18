<?php
           include 'try.php';
           ?>
             <link rel="stylesheet" href="menu.css">
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
    <title>MyDabba.com | Menu</title>
  </head>
  <body>
    <div class="navbar">
      <div class="heading">
        <img class="logo" src="assets\logo.png" alt="img" />
        <p>MyDabba</p>
      </div>
      <nav>
        <ul class="nav_links">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <div class="vanishlink"><a href="#footer">About Us</a></div>
          </li>
          <li>
            <div class="vanishlink"><a href="#footer">Contact us</a></div>
          </li>
        </ul>
      </nav>
    </div>
                <!-- <h2>Menu</h2> -->
           <?php
           $sql="SELECT * FROM food";
            // OR description LIKE %'$search'%
           $res=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($res);
           ?>
          
           <form action="food-search.php" method="POST">
                        <div class="rightsearch">
                            <form action="food-search.php" method="POST">
                                 <input type="text" name="search" id="search" placeholder="Search">
                                <button type="button" id="searchbtn">Search</button>
                          </form>
                        </div>
                    </form>
           <?php
           if($count>0)
           {  
               ?>
                   <!-- <section class="food-menu"> -->
        <div class="container">
            <h2 class="text-center">FOOD MENU</h2>
            <div class="body">
            <div class="cards">
               <?php
               while($row=mysqli_fetch_assoc($res)){
                  $id=$row['food_id'];
                  $title=$row['title'];
                  $price=$row['price'];
                  $description=$row['description'];
                  $image_name='assets/'.$row['image_name'];
                  $order='order.php?food_id='.$id;
                  ?>

<!-- write below this -->



                    
          
                <div class="meal_card">
                    <div class="part1">
                        <div class="part1_left">
                            <div class="part1_left_img">
                              <img src="<?php echo $image_name;?>" class="card-img-top" alt="">
                            </div>
                        </div>
                        <div class="part1_right">
                            <!-- <p id="pp"><?php echo $title ?></p> -->
                            <div class="nonveg"></div>
                        </div>
                    </div>
                    <br><br><br><br>
                    <div class="part2">
                        <p><?php echo $title ?></p>
                        <button id="order">
                            <a href="<?php echo $order ?>">Order</a>
                        </button>
                        <div id="price"><?php echo $price ?>$</div>
                    </div>
                </div>
               

<!-- htmlllllllll -->


                  <?php
               }
               ?>
               </div>
            </div>
                <div id="footer">
            <div class="aboutus">
              <div class="aboutpara">
                <p>We allow home cooks to become solopreneurs of the future by giving them a platform to express their cooking expertise and create a brand for themselves.
                </p>
                <p>
                  Order fresh tiffin and meals to your office and workplaces.
                </p>
              </div>
              <div class="abouthead">About Us</div>
            </div>
            <div class="contactus">
              <div class="contact_top">
                <div class="text">
                  <p>Contact Us</p>
                </div>
                <div class="socialmed">
                  <a href="https://www.instagram.com/"
                    ><img src="assets/download__8_-removebg-preview.png" alt=""
                  /></a>
                  <a href="https://www.facebook.com/"
                    ><img src="assets/download__7_-removebg-preview.png" alt=""
                  /></a>
                  <a href="https://twitter.com/?lang=en"
                    ><img src="assets/download__6_-removebg-preview.png" alt=""
                  /></a>
                  <a href="https://gmail.com/"
                    ><img src="assets/download-removebg-preview (1).png" alt=""
                  /></a>
                </div>
              </div>
      
              <hr class="footer_line" />
      
              <div class="contact_bottom">
                <div class="copyright">@2021 MyDabba.com All rights reserved</div>
                <div class="userpol">
                  <div class="terms"><a href="#">Terms of use</a></div>
                  <div class="privacy"><a href="#">Privacy policy</a></div>
                </div>
              </div>
            </div>
          </div>
            </body>
               <?php
           }else{
               echo "<div class='error'>Food not found </div>";
           }
        ?>