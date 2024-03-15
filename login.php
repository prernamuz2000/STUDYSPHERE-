<?php
include("header/header.php");
?>


<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                    <h2 class="text-center mb-4">Login</h2>

                    <div class="ticket-form-body">
                        
                        </div>
                        <input type="email" name="ticket-form-email" id="ticket-form-email" pattern="[^ @]*@[^ @]*"
                            class="form-control" placeholder="Email address" required>

                        <input type="password" class="form-control" name="password" placeholder="Password" id="password"
                            required>
                        
                            <br>
                            <div class="col-lg-4 col-md-10 col-8 mx-auto ">
                                <button type="submit" class="form-control">Login</button>
                            </div>
                </form>
            </div>
        </div>
</section>
</main>


<?php
include("footer/footer.php");
?>