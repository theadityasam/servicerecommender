@extends('layouts.main')

@section('content')

    <div class="loader" style="color: black">
        <img src="images/loader1.gif">
        <!-- <h4>Loading...</h4> -->
    </div>

    <body>
    <div style="width: 100%; margin-top: -1.5rem;" id="animate-area">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%,  rgba(0, 0, 0, 1) 100%), url('https://images.unsplash.com/photo-1528901166007-3784c7dd3653?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1050&q=80')">
                    <div class="carousel-caption d-none d-md-block">
                        <p style="font-size: 18px; color: #f2af00">DELL EMC IT SUPPORT SERVICES POWERED BY ARTIFICIAL INTELLIGENCE (AI)</p>
                        <p style="font-size: 44px; font-weight: 200" class="animated pulse slower">Support Services driven by AI and deep learning maximize productivity and optimize your technology environment.</p>
                        <br>
                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%,  rgba(0, 0, 0, 1) 100%), url('https://images.unsplash.com/photo-1540397106260-e24a507a08ea?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1061&q=80')">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="lead" style="font-size: 44px; font-weight: 200">Maximize Productivity And Uptime With Our Expert Support Service And Insights</p>
                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image:linear-gradient(to bottom, rgba(255, 255, 255, 0) 0%,  rgba(0, 0, 0, 1) 100%), url('https://blog.dell.com/uploads/2018/04/WTCafeteria_BlogHeaderImage.jpg')">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="lead" style="font-size: 44px; font-weight: 200">Improve Performance And Stability With Our Proactive Services</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container text-center">
        <div style="padding: 3rem; color: #86898f !important; font-size: 16px; line-height: 24px; font-weight: 100 !important">
            <p>
                Dell EMC Support Services are built on a foundation of artificial intelligence (AI), machine learning and data analytics. Our Support Services are changing the way you look at saving time and increasing availability.</p>
            <p>
                Maximize productivity and uptime with the support expertise, insights and technologies we’re known for across the globe.  Our ProSupport Suite doesn’t just extend your IT team, it enables you to address issues before they impact your business. We are taking the “break” out of “break-fix."
            </p>
        </div>
    </div>

    <div class="container-fluid pt-3 pb-3 pr-1 pl-1 text-center" style="background-color: #e6e8eb">
        <p style="font-size: 42px; font-weight: lighter !important">Support Services</p>
        <br>
        <div class="row">
            <div class="col-12">
                <div class="card mt-3 tab-card animated fadeIn slower">
                    <div class="card-header tab-card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link dell-nav active" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">Featured Services</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link dell-nav" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">IT Infrastructure Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dell-nav" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Business Client Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dell-nav" id="three-tab" data-toggle="tab" href="#four" role="tab" aria-controls="Three" aria-selected="false">Support Services For Home PCS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dell-nav" id="three-tab" data-toggle="tab" href="#five" role="tab" aria-controls="Three" aria-selected="false">Warranty Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link dell-nav" id="three-tab" data-toggle="tab" href="#six" role="tab" aria-controls="Three" aria-selected="false">Support Technologies</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-prosupport-enterprise-suite-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PROSUPPORT ENTERPRISE SUITE</p>
                                            <h2 class="card-title">Improve technology performance and increase productivity</h2>
                                            <p class="card-text">
                                                Built on a foundation of experts, tools, technologies and customer ease, ProSupport Enterprise Suite has the enterprise-class support your organization needs.  Our services align with the criticality of your systems, complexity of your environment and how you allocate your IT resources.
                                            <ul>
                                                <li>24x7x365 access to hardware and software experts </li>
                                                <li>Automatic issue detection and predictive analytics for issue prevention</li>
                                                <li>Flexibility to choose support based on criticality of specific systems</li>
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/prosupport-enterprise-suite.htm#accordion0">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-prosupport-client-suite-750x280.jpg" class="card-img-top" alt="...">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PROSUPPORT SUITE FOR PCS</p>
                                            <h2 class="card-title">Get complete support for your PCs and your evolving business</h2>
                                            <p class="card-text">
                                                Benefit from proactive, predictive support for PCs. Our approach uses AI and deep learning to catch issues automatically — before they can become problems.
                                            <ul>
                                                <li>24x7x365 priority access to ProSupport engineers with hardware and software expertise </li>
                                                <li>Automatic issue detection and notification and predictive analysis for issue prevention</li>
                                                <li>System repair after a drop, spill or surge</li>
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/prosupport-client-suite.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-prosupport-enterprise-suite-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PROSUPPORT ENTERPRISE SUITE</p>
                                            <h2 class="card-title">Improve technology performance and increase productivity</h2>
                                            <p class="card-text">
                                                Built on a foundation of experts, tools, technologies and customer ease, ProSupport Enterprise Suite has the enterprise-class support your organization needs.  Our services align with the criticality of your systems, complexity of your environment and how you allocate your IT resources.
                                            <ul>
                                                <li>24x7x365 access to hardware and software experts </li>
                                                <li>Automatic issue detection and predictive analytics for issue prevention</li>
                                                <li>Flexibility to choose support based on criticality of specific systems</li>
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/prosupport-enterprise-suite.htm#accordion0">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-optimize-for-storage-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container animated fadeIn slower">
                                            <p style="color: #3490dc">OPTIMIZE FOR STORAGE</p>
                                            <h2 class="card-title">Storage optimization services are like a personal coach for your storage system</h2>
                                            <p class="card-text">
                                                You’ll get in-depth analysis and strategic guidance to keep your Dell EMC storage systems optimized and configured for year-round peak performance.
                                            <ul>
                                                <li>Maximize storage performance and operational efficiencies </li>
                                                <li>Reduce risk of data loss, downtime or business delays</li>
                                                <li>Save time and resources</li>
                                            </ul>
                                            </p>
                                            <div class="clearfix" style="margin-bottom: 7.3rem"></div>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/optimize-for-storage.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-personalized-support-services-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PERSONALIZED SUPPORT SERVICES</p>
                                            <h2 class="card-title">Trusted guidance and technical expertise enhance your Dell EMC environment.</h2>
                                            <p class="card-text">
                                                Account specialists that know your business and ensure your IT infrastructure is always available and operating at optimal performance.
                                            <ul>
                                                <li>Support your organization at the product, solution or enterprise level </li>
                                                <li>Reduce risk of data loss, downtime or business delays</li>
                                                <li>Tailor your Dell EMC support experience to meet your unique needs beyond ProSupport Enterprise Suite</li>
                                            </ul>
                                            </p>
                                            <br><br>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/personalized-support-services.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-prosupport-client-suite-750x280.jpg" class="card-img-top" alt="...">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PROSUPPORT SUITE FOR PCS</p>
                                            <h2 class="card-title">Get complete support for your PCs and your evolving business</h2>
                                            <p class="card-text">
                                                Benefit from proactive, predictive support for PCs. Our approach uses AI and deep learning to catch issues automatically — before they can become problems.
                                            <ul>
                                                <li>24x7x365 priority access to ProSupport engineers with hardware and software expertise </li>
                                                <li>Automatic issue detection and notification and predictive analysis for issue prevention</li>
                                                <li>System repair after a drop, spill or surge</li>
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/prosupport-client-suite.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-accidental-damage-service-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">ACCIDENTAL DAMAGE SERVICE</p>
                                            <h2 class="card-title">Be ready for the unexpected with Accidental Damage Service.</h2>
                                            <p class="card-text">
                                                Recover quickly from unexpected surges, drops or spills with Accidental Damage Service.
                                            <ul>
                                                <li>Fast repair or replacement for liquid spilled on or in unit </li>
                                                <li>Protection for everyday challenges like drops, falls and other collisions</li>
                                            </ul>
                                            </p>
                                            <div class="clearfix" style="margin-bottom: 4rem"></div>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/accidental-damage.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/promo-support-services-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PC AS A SERVICE (PCAAS)</p>
                                            <h2 class="card-title">Reduce the daily burden and cost of IT management.</h2>
                                            <p class="card-text">
                                                PC as a Service (PCaaS) simplifies PC lifecycle management by combining hardware, software, lifecycle services and financing into one all-encompassing solution.
                                            <ul>
                                                <li>Predictable budget planningPredictable budget planning </li>
                                                <li>Reduced IT effort to manage computing needs</li>
                                                <li>Flexibility throughout the offer designed to fit your business needs</li>
                                            </ul>
                                            </p>

                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/pc-as-a-service.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="four" role="tabpanel" aria-labelledby="three-tab">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-premium-support-plus-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">PREMIUM SUPPORT PLUS</p>
                                            <h2 class="card-title">The ultimate support for your PC</h2>
                                            <p class="card-text">
                                                Premium Support Plus offers the most features in one plan for your Dell PCs. Support when you need it, and step-by-step help when you want it.
                                            <ul>
                                                <li>24x7 access to expert hardware and software support </li>
                                                <li>Personalized help with software for complex issues</li>
                                                <li>Help with setting data backup, parental controls and more</li>
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dell.com/en-us/shop/premium-support-plus/ab/premium-support-plus">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-accidental-damage-service-750x280.jpg" class="card-img-top" alt="...">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">ACCIDENTAL DAMAGE SERVICE</p>
                                            <h2 class="card-title">Mishaps happen. Be prepared for when they do.</h2>
                                            <p class="card-text">
                                                Recover quickly from unexpected surges, drops or spills with Accidental Damage Service.
                                            <ul>
                                                <li>Fast repair or replacement for liquid spilled on or in unit </li>
                                                <li>Protection for everyday challenges like drops, falls and other collisions</li>
                                            </ul>
                                            </p>
                                            <br>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dell.com/en-us/shop/accidental-damage-service-for-pcs-tablets-at-home/ab/accidental-damage-service-for-pcs-tablets-at-home">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="five" role="tabpanel" aria-labelledby="three-tab">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-fix-your-pc-or-tablet-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">FIX YOUR PC OR TABLET</p>
                                            <h2 class="card-title">No warranty? No problem.</h2>
                                            <p class="card-text">
                                                Let our experts get your Dell PC running smoothly. Whether your computer is broken or slowing down, don’t worry – we’re here to help.
                                            <ul>
                                                <li>Repair of nearly any type of hardware issue </li>
                                                <li>Personalized help with software for complex issuesHelp with software issues, updates or virus removal
                                            </ul>
                                            </p>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-services/fix-your-pc.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-warranty-extension-750x280.jpg" class="card-img-top" alt="...">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">WARRANTY EXTENSION</p>
                                            <h2 class="card-title">Extend or upgrade your existing warranty.</h2>
                                            <p class="card-text">
                                                Get peace of mind knowing your Dell and Dell EMC systems will be safer, for longer. Take this opportunity to extend or upgrade your support service.
                                            <ul>
                                                <li>Extend your hardware warranty or service contract </li>
                                                <li>Upgrade to experience ProSupport or ProSupport Plus</li>
                                            </ul>
                                            </p>
                                            <br>
                                            <a class="ml-4 button button-2 p-2" href="https://renewals.dell.com/">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade p-3" id="six" role="tabpanel" aria-labelledby="three-tab">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-my-service360-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">MYSERVICE360</p>
                                            <h2 class="card-title">Data visualizations and actionable insights that save you time and effort.</h2>
                                            <p class="card-text">
                                                Manage IT support and improve your global environment’s health using a personalized, cloud-based dashboard.
                                            <ul>
                                                <li>Data visualizations with actionable insights  </li>
                                                <li>Optimization with historical trends and analytics</li>
                                            </ul>
                                            </p>
                                            <div class="clearfix" style="margin-bottom: 10.2rem"></div>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-deployment-technologies/my-service-360.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/promo-tech-direct-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">TECHDIRECT</p>
                                            <h2 class="card-title">Give your IT staff the tools they need to efficiently manage Dell EMC products.</h2>
                                            <p class="card-text">
                                                The TechDirect portal is available 24x7, where you can request support for in-warranty systems and manage staff training.
                                            <ul>
                                                <li>Online self-service empowers your IT experts  </li>
                                                <li>Support and staff training activities are streamlined</li>
                                            </ul>
                                            </p>
                                            <div class="clearfix" style="margin-bottom: 8.6rem"></div>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-deployment-technologies/tech-direct.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card mb-3 services">
                                        <img src="https://www.dellemc.com/content/dam/uwaem/production-design-assets/en/services/Support-services/prom-support-assist-750x280.jpg" class="card-img-top">
                                        <br>
                                        <div class="container">
                                            <p style="color: #3490dc">SUPPORTASSIST</p>
                                            <h2 class="card-title">Connect to Dell for automated proactive and predictive support.</h2>
                                            <p class="card-text">
                                                SupportAssist technology provides remote monitoring, automated system state information collection, proactive notification and automatic case creation on Dell and Dell EMC devices — from enterprise environments to your home PC.
                                            <ul>
                                                <li>Proactive and predictive issue detection </li>
                                                <li>Automated support replaces manual routines </li>
                                                <li>Gain insight and more control with monthly reporting for enterprise devices</li>
                                            </ul>
                                            </p>
                                            <br><br>
                                            <a class="ml-4 button button-2 p-2" href="https://www.dellemc.com/en-us/services/support-deployment-technologies/support-assist.htm">Explore</a>
                                            <br><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container text-center mt-3">
        <p style="font-size: 42px; font-weight: lighter !important">Contact Us <hr style="border-top: 5px double #8c8b8b; width: 20%; margin-top: -1.5rem"></p>
        <br>
        <div class="row">
            <div class="col-4">
                <img src="https://img.icons8.com/ios-filled/40/000000/google-mobile.png"><br><br>
                Call: 1-866-438-3622
            </div>
            <div class="col-4">
                <img src="https://img.icons8.com/ios-filled/40/000000/send-mass-email.png"><br><br>
                Email Sales
            </div>
            <div class="col-4">
                <img src="https://img.icons8.com/material-sharp/40/000000/chat.png"><br><br>
                Live Chat
            </div>
        </div>
    </div>
    </body>

    <div class="clearfix mb-5"></div>
    <footer class="text-center">
        <div class="footer-area">
            <div class="container">
                <div class="clearfix mb-3"></div>
                <img src="{{asset('images/logo.png')}}" width="150px" >
            </div>
        </div>
        <br>
        <p>
            <span><img src="https://img.icons8.com/android/24/000000/facebook-new.png"></span>
            <span><img src="https://img.icons8.com/android/24/000000/twitter.png"></span>
            <span><img src="https://img.icons8.com/metro/24/000000/pinterest.png"></span>
            <span><img src="https://img.icons8.com/material-sharp/24/000000/google-logo.png"></span>
        </p>

        <br>
        <div class="footer-area-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="copyright text-center">
                            <p>
                                &copy; Copyright <strong>DELL</strong>. All Rights Reserved
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection


