
    <!-- header -->
    <?php include 'includes/header.php'?>
            <!-- end header -->

            <!-- Calculate insurance premium -->
            <div id="contact" class="contact">
                <div class="container">
                    
                        <div class="col-md-12">
                            <div class="titlepage2">
                                <h2>Find the best offer for you</h2>
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

                                        <label for="phones" class="phones m-3">Select your phone's manufacturer:
                                            <div class="text-danger star">*</div>
                                            </label></br>


                                        <select id="phones" class="phoneselect">
                                            <option value="manufacturer">manufacturer</option>
                                            <option value="Apple">Apple</option>
                                            <option value="Samsung">Samsung</option>
                                            <option value="Huawei">Huawei</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Vivo">Vivo</option>
                                            <option value="Sony">Sony</option>
                                            <option value="OnePlus">OnePlus</option>
                                            <option value="Honor">Honor</option>
                                            <option value="Nokia">Nokia</option>
                                            <option value="LG">LG</option>
                                            <option value="Xiaomi">Xiaomi</option>
                                            <option value="Oppo">Oppo</option>
                                            <option value="Realme">Realme</option>
                                            <option value="ZTE">ZTE</option>
                                            <option value="Other">Other...</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="phoneage" class="purchasedatelabel m-3">Date of purchase: <div
                                                class="text-danger star">*</div> </label></br>

                                        <select id="phoneage" class="inputed">
                                            <option value="choose">Please choose</option>
                                            <option value="older than 1 year">older than 1 year</option>
                                            <option value="newer than 1 year">newer than 1 year</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="priceinput" class="phones m-3">Enter your phone's purchase price:
                                            <div class="text-danger star userinput">*</div>
                                            </label></br>
                                        <input id="priceinput" class="inputed priceinput" placeholder="€" type="text"
                                            name="Phone Price">
                                    </div>




                                    <div class="col-md-12">
                                        <label for="payinterval" class="purchasedatelabel m-3">Would you like to pay
                                            monthly or yearly?</label>
                                        <div class="text-danger star">*</div></br> </label>

                                        <select id="payinterval" class="inputed">
                                            <option value="choose">Please choose</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="Yearly">Yearly</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="thief" class="purchasedatelabel m-2">Would you like to add extra
                                            thief and cyber protection? (for only €2.50)</label>
                                        <div class="text-danger star">*</div></br> </label>

                                        <select id="thief" class="inputed">
                                            <option value="choose">Please choose</option>
                                            <option value="With">With</option>
                                            <option value="Without">Without</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="premiumpricelabel text-white row h3 font-weight-bold m-2">
                                            <div class="mr-2">Premium price: </div>

                                            <div class="text-danger star">€ </div>
                                            <div class="premiumprice text-danger">0</div>
                                        </div>
                                    </div>
                                    <div class="notice3 text-danger h3"></div>
                                    <div class="notice text-danger h3"></div>
                                    <div class="notice2 text-danger h3"></div>
                                    <div class="notice4 text-danger h3"></div>
                                    <div class="notice5 text-danger h3"></div>
                                    <div class="notice5 text-warning h3">Please note that the end-payment will be converted to ETH (in ethereum's Rinkeby testnet)</div>
                                    <div class="col-sm-12">
                                        <button class="send_btn calculate">Calculate Premium</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end contact -->
                <!--  footer -->
                <?php include "includes/footer.php" ?>