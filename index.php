<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <title>MyBillBook</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Pricing</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>


                </ul>
                <a href="#Book-demo" class="right">Book free Demo</a>
                <a href="#start-billing" class="right1 "> Start Free Billing</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid con1 ">
        <div class="row">

            <div class="col-md-6 leftbox">
                <div class="box123">
                    <h3 class="subheading">India's Best Invoicing Software</h3>
                </div>
                <div class="box123">
                    <h1 class="heroOneBox">myBillbook boosts profit margins by up to 36%</h1>
                </div>
                <div class="box123">
                    <button class="btn1 ">Start free Billing</button>
                    <button class="btn2">Book Free Demo</button>
                </div>
                <div class="box123">
                    <p class="plans">Plans starting from ₹399/year</p>
                </div>

            </div>
            <div class="col-md-6 rightbox">
                <div class="headline">
                    <h2>Book FREE Consultation</h2>
                </div>

                <form action="register.php" method="POST">
                    <label for="Yourname">Yourname:</label>
                    <input type="text" id="Yourname" name="Yourname" placeholder="Enter your name" required>
                    <br>
                    <label for="number">Enter your mobile number*</label>
                    <input type="number" name="mobilenumber" id="mobilenumber" placeholder="Enter your mobile number"
                        required>
                    <br>
                    <label for="Business Name">Business Name:</label>
                    <input type="text" id="Business Name*" name="Business Name*" placeholder="Enter your Business Name"
                        required>
                    <br>
                    <label for="Nature of your Enquiry">Nature of your Enquiry*</label>
                    <select name="" id="" required style="width:100%;  height: 35px;">
                        <option value=""></option>
                        <option value="Demo of myBillbook">Demo of myBillbook</option>
                        <option value="pricing plans and offers">pricing plans and offers</option>
                        <option value="General enquiry">General enquiry</option>

                    </select>
                    <br>


                    <label for="Select your billing requirement?*">Select your billing requirement?*</label>
                    <select name="" id="" required style="width:100%; height: 35px; ">
                        <option value=""></option>
                        <option value="Basic billing | android app, single user">Basic billing | android app, single
                            user</option>
                        <option value="Advanced billing| android/ios app + online & offline(laptop), upto 3 users">
                            Advanced billing| android/ios app + online & offline(laptop), upto 3 users</option>
                        <option
                            value="Enterprise billing | android/ios app + online & offline(laptop,4 or more users e-way+e-invoicing+POS) ">
                            Enterprise billing | android/ios app + online & offline(laptop,4 or more users
                            e-way+e-invoicing+POS)</option>

                    </select>

                    <br>
                    <br>
                    <button class="button2" type="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
    <section class="sec">
        <div class="container">
            <div class="row ">
                <div class="col-md-4">
                    <div class="Newimg">
                        <img src="img/love-icon-two.png" alt="">
                    </div>
                    <div class="text2">
                        <h4> ~5 lacs saving</h4>
                        <p>from billing errors</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Newimg">
                        <img src="img/currency-icon-two.png" alt="">
                    </div>
                    <div class="text2">
                        <h4> 3x reduction</h4>
                        <p> in overdue payments</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Newimg">
                        <img src="img/building-icon-two.png" alt="">
                    </div>
                    <div class="text2">
                        <h4> 65% faster</h4>
                        <p> order processing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="sectionNew">
        <div class="container">
            <h2 class="text-center">
                "Generate GST invoices in"
                <span class="simple">3 simple steps </span>
            </h2>
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="left">
                        <iframe class="youtube" src="https://www.youtube.com/embed/w5L4JHU7Z1Y"
                            title="myBillBook Product Tour in English | Generate Invoices Online" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe></iframe>

                    </div>

                </div>
                <div class="col-md-6">
                    <div class="rightInner">
                        <img class="thirdNumber" src="./img/one.png" alt="">
                        <div class="thirdText">
                            <h5>
                                <img src="./img/man-icon.png" alt="">
                                "Select Customer "
                            </h5>
                            <p>Select contact from your phone or create a new Customer or upload Customer list with
                                details like
                                GST, PAN, address etc</p>
                        </div>
                    </div>
                    <div class="rightInner">
                        <img class="thirdNumber" src="./img/two.png" alt="">
                        <div class="thirdText">
                            <h5>
                                <img src="./img/box-plus-icon.png" alt="">
                                "Add Iterms"
                            </h5>
                            <p>Create and add a new Item or upload Item list with details like sales price, discount,
                                category
                                etc
                            </p>
                        </div>

                    </div>
                    <div class="rightInner">

                        <img class="thirdNumber" src="./img/three.png" alt="">
                        <div class="thirdText">
                            <h5>
                                <img src="./img/phone-chat-icon.png" alt="">
                                " Share Invoice"
                            </h5>
                            <p>Print, download and share the invoices to your customers in PDF format over WhatsApp/SMS
                            </p>
                        </div>
                    </div>
                    <div>
                        <img class="awardlogo" src="img/capterra-award.png" alt="" style="margin-right=15px">
                        <img class="awardlogo" src="img/software-suggest-award.png" alt="">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fifthsectionNew">
        <div class="container">
            <div class="fifthOutertextBox">
                <h2>Reduce overdue payments by 3x</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="fifthBoxNew">
                        <img src="./img/1.png" alt="">
                        <p>Share error-free Bills quickly on Whatsapp, Email, SMS or Print</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fifthBoxNew">
                        <img src="./img/2.png" alt="">
                        <p>Send payment reminders (automatic or manual)</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="fifthBoxNew">
                        <img src="./img/3.png" alt="">
                        <p>Track party-wise due payments with accurate reports</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="sixsection">
            <div class="container">
                <button class="btn3 ">Start free Billing</button>
                <button class="btn4">Book Free Demo</button>
            </div>
        </div>
        <p class="Text1">
            "Plans starting from"
            <b>₹34/month</b>
        </p>

    </div>
    <!-- <div class="fourthHerosection justCta">
            <div class="heroOneInner justCta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heroOneBox">
                                <div class="thirdHeroOneBox">
                                    <div class="firstHeroBtn">
                                        <a href="<a href="https://mybillbook.in/app/create-account">
                                            <div class="ctafirstBtnLeft">Start Free Billing</div></a>
                                        <a href="https://freetrial.mybillbook.in/book-demo-v1.html">
                                            <div class="ctafirstBtnLeft">Book Free Demo</div></a>   
                                    </div>
                                    <a href="#Pricing" class="link">
                                    <p class="ctapriceStartText">"Plans starting from" 
                                    <b>₹34/month</b></p></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div> -->
    </div>

    <div class="fourthSectionNew" id="Features">
        <div class="container">
            <h2 class="text-center">
                <span>Get real-time view of your Inventory</span>
            </h2>
            <div class="row align-items-center">
                <div class="col-md-3">
                    <div class="fourthNewInner ">
                        <img src="./img/sale-summary.png" alt="">

                        <h5>Batching &amp; Serialisation</h5>
                        <p>Add unique IMEI, Serial Numbers, Batch Numbers and Expiry Dates</p>
                    </div>
                    <div class="fourthNewInner">
                        <img src="./img/profit.png" alt="">
                        <h5>Barcode printing &amp; scanning</h5>
                        <p>Generate unique barcode or use Scanner Gun to add existing</p>
                    </div>
                    <div class="fourthNewInner">
                        <img src="./img/stock.png" alt="">

                        <h5>Low stock alert</h5>
                        <p>Set stock limits to notify you when stock runs low</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./img/fourth-image.png" class="img-fluid" alt="">
                </div>
                <div class="col-md-3">
                    <div class="fourthNewInner">
                        <img src="./img/batch-report.png" alt="">

                        <h5>Manage Godowns</h5>
                        <p>Add Godowns to specify stock location</p>
                    </div>
                    <div class="fourthNewInner">
                        <img src="./img/outstanding.png" alt="">

                        <h5>Add custom Item fields</h5>
                        <p>Customise Invoices as required with additional columns</p>
                    </div>
                    <div class="fourthNewInner">
                        <img src="./img/gstr-report.png" alt="">

                        <h5>+43 unique features</h5>
                        <p>Use Advanced features to grow your business successfully</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="googleReviewSection">
                        <div class="googleInner">
                            <img class="googleImg" src="./img/google-play.png" alt="">
                            <div class="googleReviewText">
                                <h5>Google Reviews</h5>
                                <p><img src="./img/star.png" alt=""> &nbsp; 1.3L Total Reviews</p>
                            </div>
                        </div>
                        <p>"Superb customer service. They are easily available on phone and Whatsapp."</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="fifthAnotherSection">
        <div class="container">
            <div class="fifthOutertextBox">
                <h2>Stay 100% GST and audit compliant</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-md-5">
                    <img class="img-fluid fifthAnotherleftImg" src="./img/LP-content.png" alt="">
                </div>
                <div class="col-md-7">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-phone.png" alt="" style="width=100px">
                                &nbsp; &nbsp; &nbsp;&nbsp; <p>GST 1, 2 and 3b reports</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-cart.png" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Audit trail</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-settings.png" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Export JSON to import into GST portal</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-achievement.png" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>eWay Bills and B2B e-Invoices</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-gift.png" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Auto send monthly reports to CA</p>
                            </div>
                            <div class="fifthBoxNew">
                                <img class="fifthimg" src="./img/fifth-money.png" alt="">
                                &nbsp; &nbsp; &nbsp;&nbsp;<p>Powered by GST Suvidha Provider</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mainReviewSection">
        <div class="container">
            <h2>Try India’s easiest GST billing platform</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="mainReviewSectonBox">
                        <img src="./img/inverted.png" alt="">
                        <p>myBillbook has helped us to quickly respond for price estimates and close new orders</p>
                        <div class="reviewMainInner">
                            <img class="reviwimg" src="./img/client1.png" alt="">
                            <div class="reviewMainInnerText">
                                <h5>R V Shetty</h5>
                                <p>RGP Stone Suppliers - Vijayawada</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mainReviewSectonBox">
                        <img src="./img/inverted.png" alt="">
                        <p>myBillbook has simplified our GST reconcillation. We are now getting full Input Tax Credit
                        </p>
                        <div class="reviewMainInner">
                            <img class="reviwimg" src="./img/client2.png" alt="">
                            <div class="reviewMainInnerText">
                                <h5>Mohan Vij</h5>
                                <p>SS Electrical&nbsp;Appliances - Noida</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mainReviewSectonBox">
                        <img src="./img/inverted.png" alt="">
                        <p>With myBillbook we have managed to increase festival sales by 35%</p>
                        <div class="reviewMainInner">
                            <img class="reviwimg" src="./img/client3.png" alt="">
                            <div class="reviewMainInnerText">
                                <h5>Sai Raman</h5>
                                <p>Mobile Shoppee - Bangalore</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="https://mybillbook.in/app/create-account">
                        <div class="mainReviewBtn">Start Free Billing</div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="pricingSectionOne" id="Pricing">
        <div class="container">
            <h2>Pricing Plans</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="priceTagNew">
                        <div class="priceTopPart">
                            <img src="./img/diamond-new.png" alt="">
                            <h3>₹217</h3>
                            <p>Per month. Billed annually. Excl. GST @18%</p>
                            <a href="https://mybillbook.in/app/create-account">
                                <div class="priceNewBtn">Start Free Billing</div>
                            </a>
                        </div>

                        <hr>

                        <div class="priceTagBottomPart">
                            <h5>Features Exclusive of <span class="diamond">Diamond</span></h5>
                            <ul>
                                <li><img src="./img/check-border-less.png" alt="">Add up to 1 business + 1 user</li>
                                <li><img src="./img/check-border-less.png" alt="">Create unlimited invoices</li>
                                <li><img src="./img/check-border-less.png" alt="">Inventory management</li>
                                <li><img src="./img/check-border-less.png" alt="">App + Web support</li>
                                <li><img src="./img/check-border-less.png" alt="">Priority customer support</li>
                                <li><img src="./img/check-border-less.png" alt="">GSTR reports in JSON
                                    format&nbsp;Popular</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="priceTagNew">
                        <div class="priceTopPart">
                            <img src="./img/platinum-new.png" alt="">
                            <h3>₹250</h3>
                            <p>Per month. Billed annually. Excl. GST @18%</p>
                            <a href="https://freetrial.mybillbook.in/book-demo-v1.html">
                                <div class="priceNewBtn">Book Free Demo</div>
                            </a>
                        </div>
                        <hr>

                        <div class="priceTagBottomPart">
                            <h5>Everything on <span class="diamondPlus">Diamond Plan +</span></h5>
                            <ul>
                                <li><img src="./img/check-border-less.png" alt="">Add up to 2 business + 2 user</li>
                                <li><img src="./img/check-border-less.png" alt="">50 e-Way bills/year</li>
                                <li><img src="./img/check-border-less.png" alt="">Staff attendance + payroll</li>
                                <li><img src="./img/check-border-less.png" alt="">Godown management</li>
                                <li><img src="./img/check-border-less.png" alt="">Whatsapp and SMS marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="priceTagNew">
                        <div class="priceTopPart">
                            <img src="./img/enterprise-new.png" alt="">
                            <h3>₹417</h3>
                            <p>Per month. Billed annually. Excl. GST @18%</p>
                            <a href="https://freetrial.mybillbook.in/book-demo-v1.html">
                                <div class="priceNewBtn">Book Free Demo</div>
                            </a>
                        </div>

                        <hr>

                        <div class="priceTagBottomPart">
                            <h5>Everything on <span class="platinum">Platinum Plan +</span></h5>
                            <ul>
                                <li><img src="./img/check-border-less.png" alt="">Custom invoice themes</li>
                                <li><img src="./img/check-border-less.png" alt="">Create your online store</li>
                                <li><img src="./img/check-border-less.png" alt="">Generate and print barcode</li>
                                <li><img src="./img/check-border-less.png" alt="">POS billing on desktop app</li>
                                <li><img src="./img/check-border-less.png" alt="">Unlimited e-Invoices &amp; e-Way bills
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="priceBanner priceBannerTwo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="priceBannerInnerLeft">
                        <h2>Silver Plan at just <span>₹399<span class="sm-text">/ per year</span></span></h2>
                        <ul>
                            <li><img src="./img/ic_check-filled.png" alt=""> Android device (1 device)</li>
                            <li><img src="./img/ic_check-filled.png" alt=""> 1 business &amp; 1 user</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="priceBannerInnerMiddle">
                        <img src="./img/banner-ad-image.png" alt="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="priceBannerInnerRight">
                        <h3>Download from</h3>
                        <a
                            href="https://mybillbook.sng.link/A1sl1/womt?_dl=dashboard&amp;_smtype=3&amp;utm_medium=cpm&amp;utm_source=campaign_landing_page"><img
                                src="./img/google-play-btn.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>