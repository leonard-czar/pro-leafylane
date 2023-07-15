@extends('components.myapp')

@section('title',' Contact us |')

@section('content')

    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-12">
                    <div class="contact-form-right ">
                        <h2>OUR LOCATION</h2>
                        <div><iframe class="img-fluid"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.344568408356!2d3.3224502733953054!3d6.499861491093266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8ebcf1bdec27%3A0x81c7a8d542513587!2sLawanson%2C%20Lagos!5e0!3m2!1sen!2sng!4v1675435184353!5m2!1sen!2sng"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>We value your feedback and are here to answer any questions you may have. Whether you're
                            looking for more information on our products or services, or simply want to share your
                            thoughts, we're here to listen. Please don't hesitate to reach out to us by phone, email, or our
                            contact address. We look forward to hearing from you!. </p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: lawanson Surulere,<br> Lagos
                                    state </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: +2348182281634</p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a
                                        href="https://mail.google.com/mail/u/1/#inbox?compose=new"
                                        target="_blank">lebechiuchey@gmail.com</a></p>
                            </li>
                        </ul>>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->

    @endsection