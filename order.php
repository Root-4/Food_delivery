<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <link rel="stylesheet" href="order.css" />

    <title>Complete your order!!!</title>
  </head>

  <body class="">
    <div class="navbar">
      <div class="heading">
        <img class="logo" src="assets\logo.png" alt="img">
        <p>MyDabba</p>
      </div>
      <nav>
        <ul class="nav_links">
          <li>
            <a href="index.html">Home</a>
          </li>
          <li>
            <a href="#footer">About Us</a>
          </li>
          <li>
            <a href="#footer">Contact us</a>
          </li>
        </ul>
      </nav>
    </div>

    <div class="header">
      <img
        class="vec"
        src="assets\pay.jpg"
        href="https://www.freepik.com/vectors/money"
      />
      <div class="container-header">
        <div class="py-5">
          <h2 style="color: rgb(0, 0, 0)">Checkout Form</h2>
          <p class="lead" style="color: rgb(0, 0, 0)">
            To complete your order, fill the form given below:
          </p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="container-form col-md-8">
        <h4 class="mb-4">
          <i class="fas fa-info-circle"></i> Billing Details:
        </h4>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <div class="row g-3">
            <div class="col-sm-4">
              <label for="firstName" class="form-label"
                ><i class="fa fa-user"></i> First Name *</label
              >
              <input
                type="text"
                name ="fname"
                class="form-control"
                placeholder="first name"
                required
              />
              <div class="invalid-feedback">
                Valid First Name is required...
              </div>
            </div>

            <div class="col-sm-4">
              <label for="middleName" class="form-label"
                ><i class="fa fa-user"></i> Middle Name</label
              >
              <input
                type="text"
                name="mname"
                class="form-control"
                placeholder="middle name"
              />
            </div>

            <div class="col-sm-4">
              <label for="lastName" class="form-label"
                ><i class="fa fa-user"></i> Last Name *</label
              >
              <input
                type="text"
                class="form-control"
                name="lname"
                placeholder="last name"
                required
              />
              <div class="invalid-feedback">Valid Last Name is required...</div>
            </div>

            <div class="col-sm-12">
              <label for="email" class="form-label"
                ><i class="fa fa-envelope"></i> Email *</label
              >
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email Address"
                required
              />
              <div class="invalid-feedback">Valid Email ID is required...</div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label"
                ><i class="fa fa-address-card-o"></i> Address *</label
              >
              <input
                name="address"
                type="text"
                class="form-control"
                placeholder="Your Address"
                required
              />
              <div class="invalid-feedback">Address is required...</div>
            </div>

            <!-- <div class="col-md-5">
              <label for="country" class="form-label">Country *</label>
              <select name="country" class="form-control">
                <option value="">Choose from below...</option>
                <option value="India">India</option>
              </select>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">State *</label>
              <select name="state" class="form-control">
                <option value="">Choose from below...</option>
                <option value="Uttar Pradesh">Uttar Pradesh</option>
                <option value="Maharashtra">Maharashtra</option>
                <option value="Gujarat">Gujarat</option>
                <option value="Punjab">Punjab</option>
              </select>
            </div> -->

            <div class="col-md-3">
              <label for="pincode" class="form-label">Pin Code *</label>
              <input
                name="pincode"
                type="number"
                class="form-control"
                placeholder="Pincode"
                required
              />
              <div class="invalid-feedback">Valid Pincode is required...</div>
            </div>

            <hr class="my-5" />

            <h4 class="mb-3">
              <i class="fas fa-money-check-alt"></i> Payment Options: *
            </h4>

            <div class="form-check">
              <input
                type="radio"
                name="paymentMethod"
                value="pod"
                class="form-check-input"
                checked
                required
              />
              <label for="pod">Pay on Delivery</label>
            </div>

            <div class="form-check">
              <input
                type="radio"
                name="paymentMethod"
                class="form-check-input"
                value="debit card"
              />
              <label for="debitCard">Debit Card</label>
            </div>

            <div class="form-check">
              <input
                type="radio"
                name="paymentMethod"
                class="form-check-input"
                value="credit card"
              />
              <label for="creditCard">Credit Card</label>
            </div>

            <div class="col-sm-6">
              <label for="nameCard" class="form-label">Name On Card</label>
              <input
                name="nameOnCard"
                type="text"
                class="form-control"
                placeholder="Name"
              />
              <div class="invalid-feedback">Valid Entry is required...</div>
            </div>

            <div class="col-sm-6">
              <label for="cc-num" class="form-label">Credit Card Number</label>
              <input
                name="cc_num"
                type="number"
                class="form-control"
                placeholder="CreditCard Number"
              />
            </div>

            <div class="col-sm-6">
              <label for="expDate" class="form-label">Expiration Date</label>
              <input
                name="expDate"
                type="date"
                class="form-control"
                placeholder="Date"
              />
            </div>

            <div class="col-sm-6">
              <label for="cvv" class="form-label">CVV</label>
              <input
                name="cvv"
                type="number"
                class="form-control"
                placeholder="cvv"
              />
            </div>

            <div class="col-sm-6">
              <input type="submit" value="Confirm Order!" name="submit" class="btn btn-primary">
            </div>

          </div>
        </form>
      </div>

<!--       <div class="container-food col-md-4">
        <h4 class="mb-4"><i class="fas fa-shopping-cart"></i> My Food Cart:</h4>
        <ul>
          <li>Item 1:</li>
          <li>Item 2:</li>
          <li>Item 3:</li>
          <li>Item 4:</li>
        </ul>
      </div>
    </div> -->

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
        if(isset($_POST['submit']))
        {
            $fname = $_POST['fname'];
            $mname = $_POST['mname'];
            $lname = $_POST['lname'];
            $email = $_POST['email'];
            $address = $_POST['address'];
            // $state = $_POST['state'];
            // $country = $_POST['country'];
            $pincode = $_POST['pincode'];
            $paymentMethod = $_POST['paymentMethod'];
            $nameOnCard = $_POST['nameOnCard'];
            $cc_num = $_POST['cc_num'];
            $expDate = $_POST['expDate'];
            $cvv = $_POST['cvv'];

            // echo $fname."<br>";
            // echo $mname."<br>";
            // echo $lname."<br>";
            // echo $email."<br>";
            // echo $address."<br>";
            // echo $pincode."<br>";
            // echo $paymentMethod."<br>";
            // echo $nameOnCard."<br>";
            // echo $cc_num."<br>";
            // echo $expDate."<br>";
            // echo $cvv."<br>";

            $conn = mysqli_connect("localhost","root","","login");
            $q = "insert into form values('$fname','$mname','$lname','$email','$address','$pincode','$paymentMethod','$nameOnCard','$cc_num','$expDate','$cvv')";

            $result = mysqli_query($conn,$q);

            if($result)
            {
                echo "<br>Data inserted successfully!!!";
            }
            else
            {
                echo "<br>Data not inserted :(";
            }
        }

    ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

  </body>
</html>
