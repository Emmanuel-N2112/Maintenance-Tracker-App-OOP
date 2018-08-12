<?php 
    
    function display_sign_up_form() {
        $message = " ";
        $feedback_msg = " ";

        if (isset($_POST['submit-signup'])) 
        {
            $userObject = new User;
            $error = " ";

            $loginName = $_POST['username'];
            $password = $_POST['userpassword'];
            $password2 = $_POST['confirmpassword'];
            $email = $_POST['email'];
            $location = $_POST['userlocation'];

            $userObject->validationRegister($loginName, $password, $password2, $email, $location, $error);

            $message = $userObject->echoMessage();
            
        }

        if (isset($_POST['submit-comment'])) {
            $emailSubject = 'Customer Has a Comment!';
            $mailto = 'emmanuel15okot@gmail.com';

            $nameField = $_POST['name-contact'];
            $emailField = $_POST['email-contact'];
            $commentsField = $_POST['comments'];

            $body = "<br>
                      Name: ".$nameField."<br>
                      Email: ".$emailField."<br>
                      Comment: ".$commentsField."<br>";

            $headers = "From: ".$emailField."\r\n"; // This takes the email and displays it as who this email is from.
            $headers .= "Content-type: text/html\r\n"; // This tells the server to turn the coding into the text.
            $success = mail($mailto, $emailSubject, $body, $headers); // This tells the server what to send.

            if ($success) {
                   // echo "Mail sent to ".$mailto." from ".$emailField."<p>"."Email Subject: ".$emailSubject."<p>"."Body: ".$body;
                header("location: index.php#contact");
            }

        }


echo '
        <div class="nested">
            <div class="form1">
                <h3 style="margin-top: 0px">Account Sign Up</h3>
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="error-message">'; echo "<p>".$message."</p>"; echo '</div>
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Enter name">
                    <label>Password</label>
                    <input type="password" name="userpassword" placeholder="Enter any password">
                    <label>Confirm Password</label>
                    <input type="password" name="confirmpassword" placeholder="Enter any password">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter email address">
                    <label>Location</label>
                    <input type="text" name="userlocation" placeholder="Enter City">
                    <label>I am </label>
                    <input type="radio" class="radiobox" name="gender-m">Male 
                    <input type="radio" class="radiobox" name="gender-f">Female<br>
                    <input type="checkbox" class="checkbox" name="checkbox">Keep me signed in?
                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                    <input type="submit" name="submit-signup" class="submit" value="Sign In">
                    <p>Already have an Account?<a href="login.php" style="color: blue"> Login</a></p>
                </form>
            </div>
            
            <div class="body-content">
                <h2>Maintenance Tracker App</h2>
                <p class="content text-justify">Hey there! Get the best known services everyday by joining Maintenance Tracker App</p>
                <p class="content text-justify">Maintenance Tracker App is an application that provides users with the ability to reach out to operations or repairs department regarding repair or maintenance requests and monitor the status of their requests</p>
            </div>
        </div>
        <div id="about" class="about">
            <h2 style="text-align: center;">About Us</h2>
            <h4>Very often you find that you own an electronic device, yet you either don\'t know how to maintain it, or who to fix when it\'s damaged or destroyed. Maintenance Tracker App solves the long ongoing pattern by letting you know of well trusted companies that can offer this assistance to you at your convenience.</h4><br>
            <p>We take the burden off you by ensuring companies watch over your devices and regularly offer assistance on how you can maintain them. Wouldn\'t you be glad that a device you bought gets to see your third and forth generation. I would give anything at least to ensure my earphones last for long. Maintenance Tracker App, guarantees maintenance, safety repairs and monitoring of your devices.</p>
            <p>Maintenance organisations agree to
                <li>Be honest in all dealings with you.</li>
                <li>Immediate notification of ability to handle a task</li>
                <li>Treat your and your property with honour and respect</li>
                </p>
            <br><button class="button">Get in Touch</button>
        </div>

        <div id="services" class="services">
            <div class="service-header">
                <h2>SERVICES</h2>
                <h4>What we offer</h4>
            </div>
            <div class="service">
                <div class="service1">
                    <img src="assets/icons/businessman.PNG"></img>
                    <h4>Happier Customers</h4>
                    <p>Speedy service, fewer errors</p>
                </div>
                <div class="service2">
                    <img src="assets/icons/get-money.PNG"></img>
                    <h4>Clarity</h4>
                    <p>No hidden costs</p>
                </div>
                <div class="service3">
                    <img src="assets/icons/chatting.PNG"></img>
                    <h4>Instant Feedback</h4>
                    <p>First response time</p>
                </div>
            </div>
        </div>

        <div id="pricing" class="pricing">
            <div class="price-header">
                <h2>Pricing</h2>
                <h4>Choose a payment plan that works for you</h4>
            </div>
            
            <div class="price">
                <div class="panel price-panel1">
                    <div class="panel-header">
                        <h1>Basic</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>20</strong> Devices</p>
                        <p><strong>15</strong> Requests</p>
                        <p><strong>5</strong> Technicians</p>
                        <p><strong>2</strong> Administrators</p>
                        <p><strong>Amateur</strong> User</p>
                        <p>Favours small businesses who desire to streamline work orders and keep track of their devices</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$19</h3>
                        <h4>per month</h4>
                        <button class="btn">Sign Up</button>
                    </div>
                </div>      
                <div class="panel price-panel2">
                    <div class="panel-header">
                        <h1>Pro</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>50</strong> Devices</p>
                        <p><strong>25</strong> Requests</p>
                        <p><strong>10</strong> Technicians</p>
                        <p><strong>5</strong> Administrators</p>
                        <p><strong>Professional</strong> User</p>
                        <p>Favours small and medium sized businesses by offering reporting services</p> 
                    </div>
                    <div class="panel-footer">
                        <h3>$29</h3>
                        <h4>per month</h4>
                        <button class="btn">Sign Up</button>
                    </div>
                </div>
                <div class="panel price-panel3">
                    <div class="panel-header">        
                        <h1>Premium</h1>
                    </div>
                    <div class="panel-body">
                        <p><strong>100</strong> Devices</p>
                        <p><strong>50</strong> Requests</p>
                        <p><strong>25</strong> Technicians</p>
                        <p><strong>10</strong> Administrators</p>
                        <p><strong>Enterprise</strong> User</p>
                        <p>Favours medium sized business by offering planning and scheduling services</p>
                    </div>
                    <div class="panel-footer">
                        <h3>$49</h3>
                        <h4>per month</h4>
                        <button class="btn btn-lg">Sign Up</button>
                    </div>
                </div>  
            </div>
        </div>

        <div id="contact" class="contact">
            <div class="contacts">
                <h2 class="text-center">CONTACT</h2>
                <p>Contact us and we\'ll get back to you within 24 hours.</p>
                <p><span class="icon-location"></span> Kampala, Uganda</p>
                <p><span class="icon-phone"></span> +256 759 611 614</p>
                <p><span class="icon-envelop"></span> inquire@map.com</p>
            </div>
            <div class="contact-form">
                <form action="" method="post" autocomplete="off">
                    <input name="name-contact" placeholder="Name" type="text" required><br>
                    <input name="email-contact" placeholder="Email" type="email" required><br>
                    <textarea name="comments" placeholder="Comment" ></textarea><br>
                    <input type="submit" name="submit-comment" value="Send">
                </form>
            </div>
        </div>
        ';
    
    }

    function display_log_in_form() {
        $message = " ";

        if (isset($_POST['submit-login'])) 
        {
            $userObject = new User;

            $error=" ";
            
            $loginName = $_POST['email_name'];
            $password = $_POST['userpassword'];

            $userObject->validationLogin($loginName, $password, $error);

            $message = $userObject->echoMessage();
        }

echo '
    <div class="nested">
        <div class="form1">
            <h3>Account Login</h3>
            <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                <div class="error-message">'; echo "<p>".$message."</p>"; echo '</div>
                <label>Email</label>
                <input type="text" name="email_name" placeholder="Enter your email address"><br>
                <label>Password</label>
                <input type="password" name="userpassword" placeholder="Enter any password"><br>
                <input type="checkbox" class="checkbox" name="checkbox">Keep me signed in?
                <input type="submit" name="submit-login" class="submit" value="Log In">
                <p>Do not have an Account?<a href="index.php" style="color: blue"> Sign Up</a></p>
            </form>
        </div>
        
        <div class="body-content">
            <h2>Maintenance Tracker App</h2>
            <p class="content text-justify">Hey there! Get the best known services everyday by joining Maintenance Tracker App</p>
            <p class="content text-justify">Maintenance Tracker App is an application that provides users with the ability to reach out to operations or repairs department regarding repair or maintenance requests and monitor the status of their requests</p>
        </div>
    </div>
    ';
    
    }

    function display_admin_log_in_form() {
        $message = " ";

        if (isset($_POST['admin-login'])) {
            session_start();

            $company = $_SESSION['companyName'];
            $position = $_SESSION['position'];
            $feedback = $_SESSION['feedback'];
            $password = $_POST['adminPassword'];
            $size = $_POST['compSize'];
            $devIndustry = $_POST['devIndustry'];

            $userObject = new User;

            $userObject->adminUpdate($password, $size, $devIndustry);

            if ($userObject->adminUpdate($password, $size, $devIndustry) == 1) {
                $userObject->statusUpdate($position);
                $userObject->companyUpdate($company);
                $userObject->feedbackUpdate($feedback);
                $message = $userObject->echoMessage();
                header("location: view/adminview.php");
            } else {
                $message = $userObject->echoMessage();
            }

        }

     //   include('includes/form_process.php');

echo '
    <div class="mid-container">
        <div></div>
        <div class="mid-cont">
            <div class="form1">
                <h3>Almost there!</h3>
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="error-message">'; echo "<p>".$message."</p>"; echo '</div>
                    <label>Company Password</label>
                    <input type="password" name="adminPassword">
                    <label>Company Size</label>
                    <select name="compSize">
                        <option value="1">Self-employed</option>
                        <option selected value="1-7">1-7</option>
                        <option value="8-15">8-15</option>
                        <option value="16-35">16-35</option>
                    </select>
                    <label>Device Industry</label>
                    <select name="devIndustry">
                        <option value="Home Appliances">Home Appliances</option>
                        <option value="Equipment">Office Equipment</option>
                        <option value="Mobile Phones">Mobile Phones</option>
                    </select>
                    <input type="submit" name="admin-login" class="submit" value="Update">
                </form>
            </div>
        </div>
        <div></div>
    </div>
    ';

    }

     function display_leaderboard_form() {
        $message = " ";

        if (isset($_POST['submit'])) {
            session_start();
            $position = $_POST['position'];
            $companyName = $_POST['companyName'];
            $feedback = $_POST['feedback'];

            $_SESSION['position'] = $position;
            $_SESSION['feedback'] = $feedback;
            $_SESSION['companyName'] = $companyName;
                

            if ($position == "Customer") {
                $userObject = new User;

                $userObject->statusUpdate($position);
                $userObject->companyUpdate($companyName);
                $userObject->feedbackUpdate($feedback);
                $message = $userObject->echoMessage();

            } elseif ($position == "Staff") {

                $userObject = new User;

                $userObject->companyValidate($companyName);
                if ($userObject->companyValidate($companyName) == 1) {
                //    $userObject->companyUpdate($companyName);
                //    $userObject->feedbackUpdate($feedback);
                //    header("location: sds.php");

                } else {
                    $message = $userObject->echoMessage();

                }

            } elseif ($position == "Administrator") {
                header("location: adminLogin.php");
            }
        }

     //   include('includes/form_process.php');

echo '
    <div class="mid-container">
        <div></div>
        <div class="mid-cont">
            <div class="form1">
                <h3>Change Status</h3>
                <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="error-message">'; echo "<p>".$message."</p>"; echo '</div>
                    <label>Position</label>
                    <select name="position">
                        <option value=" "> </option>
                        <option selected value="Customer">Customer</option>
                        <option value="Staff">Staff</option>
                        <option value="Administrator">Administrator</option>
                    </select>
                    <label>Company Name</label>
                    <input type="text" name="companyName" placeholder="Enter Company Name">
                    <label>How did you hear about Us?</label>
                    <select name="feedback">
                        <option value=" "> </option>
                        <option value="A friend told me">A friend</option>
                        <option value="Google Search">Google Search</option>
                        <option value="Company">Company Administrator</option>
                        <option value="Other">Other</option>
                    </select>
                    <input type="submit" name="submit" class="submit" value="Update">
                </form>
            </div>
        </div>
        <div></div>
    </div>
    ';

    }

    function display_thank_you()
    {
        echo "Thank you for your comment, we'll get back to you shortly";
    }

?>