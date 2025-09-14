<?php
// Set page-specific variables
//$pageTitle = "Ceyminds - Consultation";
?>

<?php include 'views/layouts/header.php'; ?>

    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Plans</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Plans</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Plans & Pricing Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title text-center">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Plans & Pricing</h4>
                <h1 class="display-4">Choose Your Package</h1>
            </div>
            <div class="row">
                <!-- Standard Plan -->
                <div class="col-lg-6 mb-5 d-flex">
                    <div class="p-4 border rounded shadow-sm w-100 d-flex flex-column">
                        <h2 class="mb-4 text-center">Standard Plan</h2>
                        <ul class="list-unstyled flex-grow-1">
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Business Strategy Session</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Market Research Report</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Financial Planning Basics</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Process Optimization Tips</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Email Support (Mon-Fri)</li>
                        </ul>
                        <div class="text-center mt-auto">
                            <h3 class="text-primary">$299 <small class="text-muted">/month</small></h3>
                            <a href="#" class="btn btn-primary mt-3 px-4">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Premium Plan -->
                <div class="col-lg-6 mb-5 d-flex">
                    <div class="p-4 border rounded shadow-sm w-100 d-flex flex-column bg-light">
                        <h2 class="mb-4 text-center">Premium Plan</h2>
                        <ul class="list-unstyled flex-grow-1">
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Everything in Standard</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> In-depth Market Analysis</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Advanced Financial Forecasting</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Digital Transformation Guidance</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> Dedicated Consultant Support</li>
                            <li class="mb-3"><i class="fa fa-check text-primary mr-2"></i> 24/7 Priority Assistance</li>
                        </ul>
                        <div class="text-center mt-auto">
                            <h3 class="text-primary">$599 <small class="text-muted">/month</small></h3>
                            <a href="#" class="btn btn-primary mt-3 px-4">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Plans & Pricing End -->



<?php include 'views/layouts/footer.php'; ?>