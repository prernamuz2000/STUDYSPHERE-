<?php
include("header/header.php");
?>


<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Sign Up</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control"
                                    placeholder="First name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="ticket-form-name" id="ticket-form-name" class="form-control"
                                    placeholder="Last name" required>
                            </div>
                        </div>
                        <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email address" required>

                        <input type="tel" class="form-control" name="ticket-form-phone" placeholder="Ph 085-456-7890"
                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required="">

                        <input type="password" class="form-control" name="password" placeholder="Password" id="password"
                            required>
                        <input type="repassword" class="form-control" name="repassword" placeholder="Retype Password"
                            id="repassword" required>

                        <h6>Choose your course </h6>
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">

                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select</option>
                                    <option value="1">DSA</option>
                                    <option value="2">AI</option>
                                    <option value="3">Machine Language</option>
                                    <option value="4">Computer Programming</option>
                                    <option value="5">Networking</option>
                                    <option value="6">UI/UX</option>
                                    <option value="7">Web Development</option>
                                    <option value="8">Cyber Security</option>
                                    <option value="9">Data Analytics</option>
                                    <option value="10">Cloud Computing</option>
                                </select>

                            </div>
                            <br>
                            <div class="col-lg-4 col-md-10 col-8 mx-auto my-4">
                                <button type="submit" class="form-control">Signup</button>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12" >
                                <h7> Already a member? </h7><a href="login.php">Login </a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
</section>
</main>


<?php
include("footer/footer.php");
?>