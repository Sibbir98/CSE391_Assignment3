<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
    <title>Appointment Webpage</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">Appointment Webpage</a>
            </div>
            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="admin/login.php">Admin</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    
    <!-- Navbar Section Ends Here -->

    <!-- Appointment Form Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Fill the form to book an Appointment.</h2>

            <form action="#" class="order">                
                <fieldset>
                    <legend>Booking Details</legend>
                    <div class="order-label">Name</div>
                    <input type="text" name="full-name" placeholder="Full-name" class="input-responsive" required>
                    
                    <div class="order-label">Address</div>
                    <textarea name="address" rows="5" placeholder="Address" class="input-responsive" required></textarea>

                    <div class="order-label">Mobile Number</div>
                    <input type="tel" name="contact" placeholder="Phone Number" class="input-responsive" required>

                    <div class="order-label">License Number</div>
                    <input type="text" name="full-name" placeholder="Car License Number" class="input-responsive" required>
                    
                    <div class="order-label">Engine Number</div>
                    <input type="text" name="full-name" placeholder="Car Engine Number" class="input-responsive" required>
                    
                    <div class="order-label">Date</div>
                    <input type="date" name="qty" class="input-responsive" required>
                    <div class="order-label">
                        <label for="mechanics">Choose a Mechanic:</label>
                        <select id="mechanics" name="mechanic">
                          <option value="volvo">Hyundai</option>
                          <option value="saab">Audi</option>
                          <option value="fiat">Mitsubishi</option>
                          <option value="audi">Ford</option>
                          <option value="audi">Toyota</option>
                        </select>
                    </div>    
                    <input type="submit" name="submit" value="Select a slot" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- Appointment Form Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->

</body>
</html>