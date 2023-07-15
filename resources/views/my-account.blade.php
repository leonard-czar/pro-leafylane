@extends('components.myapp')

@section('title',' Account |')

@section('content')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>My Account</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">My Account</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start My Account  -->
    <div class="my-account-box-main">
        <div class="container">
            <div class="my-account-page">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="account-box">
                            <div class="service-box">
                                <div class="service-icon">
                                    <a href="#"> <i class="fa fa-gift"></i> </a>
                                </div>
                                <div class="service-desc">
                                    <h4>Your Orders</h4>
                                    <p>Track, return, or buy things again</p>
                                </div>
                                <div class="col-sm-12 mb-sm-5 mt-sm-2 table-responsive">

                                    <table class="table table-hover table-striped">
                                        <thead class="table-dark ">
                                            <tr>
                                                <th>S/N</th>
                                                <th></th>
                                                <th>Quantity</th>
                                                <th>Unit Price</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><img src="images/apple-touch-icon.png" alt="" width="45"
                                                        class="img-fluid"> </td>
                                                <td> 50 </td>
                                                <td>50k</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-box">
                </div>
            </div>
        </div>
    </div>
    <!-- End My Account -->
@endsection