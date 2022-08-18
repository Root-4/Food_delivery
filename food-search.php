        <?php
        session_start();
           include 'try.php';
           ?>
            <link rel="stylesheet" href="menu.css">
             <link
      rel="stylesheet"
      type="text/css"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
    />
           <div class="navbar">
        <div class="heading">
            <img class="logo" src="assets\logo.png" alt="img">
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
    <?php
           $search=$_POST['search'];
           $sql="SELECT * FROM food WHERE title = '$search' OR description= '$search'";
            // OR description LIKE %'$search'%
           $res=mysqli_query($conn,$sql);
           $count=mysqli_num_rows($res);
           ?>
             <section class="food-search text-center">
                  <div class="con">
            <h2>Meals for your search <?php echo $search ?></h2>
                 </div>
             </section>
    <?php
           if($count>0)
           {  ?>
                   <div class="container">
            <div class="body">
            <div class="cards">
                <?php
               while($row=mysqli_fetch_assoc($res)){
                  $id=$row['food_id'];
                  $title=$row['title'];
                  $price=$row['price'];
                  $description=$row['description'];
                  $image_name='assets/'.$row['image_name'];
                  $cart='order.php?food_id='.$id;
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
                            <a href="<?php echo $cart?>">Order</a>
                        </button>
                        <div id="price"><?php echo $price ?>$</div>
                    </div>
                </div>
<!-- htmlllllllll -->


                  <?php
               }
               ?>
            <div id="footer">
        <div class="aboutus">
            <div class="aboutpara">
                <p> ipsum dolor sit ai nostrum quisquam tempora or situr consequatur inventore atque doloribus repudiandae ab porro expedita? Consectetur?
            </p>
        </div>
            <div class="abouthead">
                About Us
            </div>
        </div>
        <div class="contactus">
            <div class="contact_top">
                <div class="text">
                    <p>Contact Us</p>
                </div>
                <div class="socialmed">
                    <a href="https://www.instagram.com/"><img src="download__8_-removebg-preview.png" alt=""></a>
                    <a href="https://www.facebook.com/"><img src="download__7_-removebg-preview.png" alt=""></a>
                    <a href="https://twitter.com/?lang=en"><img src="download__6_-removebg-preview.png" alt=""></a>
                    <a href="https://gmail.com/"><img src="download-removebg-preview (1).png" alt=""></a>
                </div>
            </div>

            <hr class="footer_line">

            <div class="contact_bottom">
                <div class="copyright">@2021 MyDabba.com All rights reserved</div>
                <div class="userpol">
                    <div class="terms"><a href="#">Terms of use</a></div>
                    <div class="privacy"><a href="#">Privacy policy</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

               <?php
           }else{
               echo "<div class='error'>Food not found </div>";
           }
        ?>
