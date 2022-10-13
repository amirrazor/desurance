<!-- user panel -->
<div id="loggedIn" style="display:none;"
    class="user-login-msg text-white h3 bg-success font-weight-bold my-3 p-3 text-center">
    Successful Login with your Ethereum address: <span id="ethAddress"></span>
</div>
<div id="userPanel">

    <div class="contact">
        <div class="container">
            <h3 id="welcomeUser" class="text-white"></h3>


            <h1 class="text-white">Previous Claims</h1>

            <!-- dom table -->
            <div id="table-box-user" class="col-md-12 text-white h4">
            </div>
            <!-- end of dom table -->

            <h1 class="text-white mt-5">Make a new claim</h1>
            <div class="col-md-12">
                <label for="claimTitle" class="phones m-3">Claim title:
                    <div class="text-danger star userinput">*</div>
                </label>
                <input id="claimTitle" class="inputed priceinput" type="text" name="claimTitle">


            </div>
            <div class="col-md-12">
                <label for="claimContent" class="phones m-3">Enter your claim here:
                    <div class="text-danger star userinput">*</div>
                </label>
                </br> <textarea id="claimContent" name="claimContent" rows="4" cols="50"></textarea>

            </div>

            <div id="claimSuccessful" class="text-success h4"></div>
            <div id="claimNotice" class="text-warning h4"></div>

            <button onclick="setClaim()" id="" class="read_more btn btn-default mt-5 ml-4 mb-5">Submit Claim</button>

        </div>

    </div>
    <?php include "includes/footer.php" ?>
</div>
<!-- end user panel -->