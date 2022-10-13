<!-- personal info -->
<div id="info">
    <div class="contact">
        <div class="container">

            <div class="col-md-12">
                <div class="titlepage2">
                    <h2>Complete your registration</h2>
                    <div class="mb-3">Please enter the information below </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-12 ">

                    <div class="row">
                        <div class="main_form">

                            <div class="col-md-12">

                                <div class="col-md-12">
                                    <label for="username" class="phones m-3">Username:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input type="text" id="updatePublicName" class="inputed priceinput"
                                        placeholder="Your username" name="username" onfocusout="showPublicName()">
                                </div>

                                <div class="col-md-12">
                                    <label for="fullname" class="phones m-3">Full Name:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input id="updateFullname" class="inputed priceinput" placeholder="Your full name"
                                        type="text" name="fullname" onfocusout="showFullname()">
                                </div>

                                <div class="col-md-12">
                                    <label for="homeAddress" class="phones m-3">Your address:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input id="homeAddress" class="inputed priceinput" placeholder="address" type="text"
                                        name="homeAddress" onfocusout="showHomeaddress()">
                                </div>

                                <div class="col-md-12">
                                    <label for="phonemodel" class="phones m-3">Your Phone's Model:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input id="phoneModel" class="inputed priceinput" placeholder="phone model"
                                        type="text" name="phonemodel" onfocusout="showPhonemodel()">
                                </div>

                                <div class="col-md-12">
                                    <label for="email" class="phones m-3">Your email:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input id="email" class="inputed priceinput" placeholder="email" type="text"
                                        name="email" onfocusout="showEmail()">
                                </div>

                                <div class="col-md-12">
                                    <label for="phonenumber" class="phones m-3">Your Phone Number:
                                        <div class="text-danger star userinput">*</div>
                                    </label></br>
                                    <input id="phoneNumber" class="inputed priceinput" placeholder="Phone number"
                                        type="text" name="phonenumber" onfocusout="showPhonenumber()">
                                </div>




                            </div>
                            <div class="notice3 text-danger h3"></div>
                            <div class="notice text-danger h3"></div>
                            <div class="notice2 text-danger h3"></div>
                            <div class="notice4 text-danger h3"></div>
                            <div class="notice5 text-danger h3"></div>

                            <div class="col-sm-12 text-center">
                                <button onclick="infoToCalc()" class="read_more btn btn-default">back</button>
                                <button
                                    onclick="infoToReview();setPublicName();showPublicName();setFullname();setHomeaddress();setPhonemodel();setEmail();setPhonenumber();"
                                    class="read_more btn btn-default">Continue</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include "includes/footer.php" ?>
</div>
<!-- end Personal info -->