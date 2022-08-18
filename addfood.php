 <?php  ?>
<div>
    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <script
      src="https://kit.fontawesome.com/9080c2f896.js"
      crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="addfood.css" />
    <div class="navbar">
      <div class="heading">
        <img class="logo" src="assets\logo.png" alt="img" />
        <p>MyDabba</p>
      </div>
      <nav>
        <ul class="nav_links">
          <li>
            <a href="index.html">Home</a>
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
    <div class="top-container"><h2>ADD FOOD PAGE</h2></div>
    
    <div class="container">
        <form action="" method="POST">
            <div class="row mb-3">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" id="title" class="form-control" placeholder="Title"><br>
                </div>
            </div>
            <div class="row mb-3">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea name="description" class="form-control" id="description" cols="30" rows="5" placeholder="Enter the details of the food..."></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="price" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" name="price" id="price" class="form-control" placeholder="Enter the price..."><br>
                </div>
            </div>

            <div class="row mb-3">
                <label for="image_name" class="col-sm-2 col-form-label">Select image</label>
                <div class="col-sm-10">
                    <input type="file" name="image_name" id="image_name"><br>
                </div>
            </div>
            <br>
            <br>
            <button id="submit" type="submit" class="btn btn-outline-primary">Submit</button>
        </form>
    </div>

    <div id="footer">
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

    
    
<?php
$servername="localhost";
$username="root";
$password="";
$database="login";
$port=3307;
$conn=mysqli_connect($servername,$username,$password,$database,$port);
// include 'try.php';
if(isset($_POST['submit'])){
    $title=$_POST['title'];
    $price=$_POST['price'];
    $description=$_POST['description'];
    $image_name=$_POST['image_name'];
   //     $image_name = explode(".", $_FILES['image_name']['name']); //split by '.'
    // array_pop($image_name); //remove the last segment
    // $image_name = implode(".", $image_name); //concat it by '.'

$sql="INSERT INTO food SET
title='$title',
description='$description',
price=$price,
image_name='$image_name'
";
$res=mysqli_query($conn,$sql);
// setTimeout(window.location.replace("index.php"), 3000);}
header("Location:http://localhost/Project_DSW-main/index.php");}
// $src=$_FILES['image_name']['tmp_name'];
// $dst="assets/".$image_name;
// $upload=move_uploaded_file($src,$dst);
// ?>
</div>

