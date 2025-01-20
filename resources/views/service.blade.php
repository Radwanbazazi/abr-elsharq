 @extends('master')
 @section('content')

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Services</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="Home">Home</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Service</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Our Services</h5>
                    <h1 class="mb-5">Explore Our Services</h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-utensils text-primary mb-4"></i>
                                <h5>Quality Food</h5>
                                <p>Our restaurants contain a wide variety of food from Western and Eastern cuisine, shawarma, grilled chicken on charcoal and on the grill, oriental salads, soups and pasta that enjoy the quality and interest. Of course, your experience will not be forgotten when you order from our restaurants.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                                
                                <h5>Consultation</h5>
                                <p>We provide extensive technical and practical advice on how to open restaurants and how work proceeds from choosing the location to operating and delivering orders to customers.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-cart-plus text-primary mb-4"></i>
                                <h5>Equipment</h5>
                                <p>We provide the service of supplying and purchasing American-made frying machines, chicken grills, and restaurant equipment of all kinds, such as Henny Penny and Fry Master.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="service-item rounded pt-3">
                            <div class="p-4">
                                <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                                <h5>New Service</h5>
                                <p>Our upcoming services will be about supplying frozen foods inside and outside the Arab Republic of Egypt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
</html>

@endsection