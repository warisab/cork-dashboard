@extends('layout.app')
@section('category', 'Component')
@section('page_name', 'Subscription')
@section('content')
<div class="layout-px-spacing">
                
    <div class="row" id="cancel-row">

        <div class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Toggle</h4>
                        </div>           
                    </div>
                </div>
                <div class="widget-content widget-content-area">

                    <div class="container">
                        
                        <!-- Billing Cycle  -->
                        <div class="billing-cycle-radios mt-5">
                            <div class="radio billed-yearly-radio">
                                <div class="d-flex justify-content-center">
                                    <span class="txt-monthly">Monthly</span>
                                    <label class="switch s-icons s-outline  s-outline-primary">
                                        <input type="checkbox" id="radio-6">
                                        <span class="slider round"></span>
                                    </label>

                                    <span class="txt-yearly">Yearly <span class="badge badge-pill badge-success">20% Off</span></span>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing Plans Container -->
                        <div class="pricing-plans-container mt-5 d-md-flex d-block">
                            <!-- Plan -->
                            <div class="pricing-plan mb-5">
                                <h3>Cloud Hosting</h3>
                                <p class="margin-top-10">cPanel/WHM included. Intel Xeon E3 with guaranteed 2GB RAM.</p>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$25</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$290</strong>/ yearly</div>
                                <div class="pricing-plan-features mb-4">
                                    <strong>Cloud Hosting Features</strong>
                                    <ul>
                                        <li>Single Domain</li>
                                        <li>50 GB SSD</li>
                                        <li>1 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Buy Now</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan mb-5 mt-md-0 recommended">
                                <div class="recommended-badge">Most Popular</div>
                                <h3>VPS Hosting</h3>
                                <p class="margin-top-10">cPanel/WHM included. Intel Xeon E5 with guaranteed 4GB RAM.</p>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$70</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$670</strong>/ yearly</div>
                                <div class="pricing-plan-features mb-4">
                                    <strong>VPS Hosting Features</strong>
                                    <ul>
                                        <li>5 Domains</li>
                                        <li>100 GB SSD</li>
                                        <li>2 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-default btn-block margin-top-20">Buy Now</a>
                            </div>
                            <!-- Plan -->
                            <div class="pricing-plan mb-5">
                                <h3>Business Hosting</h3>
                                <p class="margin-top-10">cPanel/WHM included. Intel Xeon E5 with guaranteed 8GB RAM.</p>
                                <div class="pricing-plan-label billed-monthly-label"><strong>$115</strong>/ monthly</div>
                                <div class="pricing-plan-label billed-yearly-label"><strong>$1100</strong>/ yearly</div>
                                <div class="pricing-plan-features mb-4">
                                    <strong>Business Hosting Features</strong>
                                    <ul>
                                        <li>Unlimited Domains</li>
                                        <li>1 TB SSD</li>
                                        <li>5 TB Premium Bandwidth</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0);" class="button btn btn-dark btn-block margin-top-20">Buy Now</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection