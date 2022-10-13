<!-- review claim panel -->
<div id="loggedIn" style="display:none;"
    class="user-login-msg text-white h3 bg-success font-weight-bold my-3 p-3 text-center">
    Successful Login with your Ethereum address: <span id="ethAddress"></span>
</div>
<div id="reviewClaimPanel">

    <div class="contact">
        <div class="container">
            <div id="claimReviewSingle">

            </div>
            <div class="col-md-12">
                <label for="updateClaimPrice" class="phones">Claim Price:
                    <div class="text-danger star userinput">*</div>
                </label></br>
                <input id="updateClaimPrice" class="inputed" placeholder="€" type="text" name="updateClaimPrice"
                    onfocusout="">
            </div>

            <div class="col-md-12 text-danger h4">
                <label for="showClaimPrice" class="phones">The amount to pay is:

                </label>
                <span type="text" id="showClaimPrice" name="showClaimPrice"></span> €
            </div>

            <div class="col-md-12 text-danger h4">
                <label for="claimInEther" class="phones">The equivalent amount in Ether:

                </label>
                <span type="text" id="claimInEther" name="claimInEther"></span> Ether
            </div>

            <div class="col-md-12 text-danger h4">
                <label for="customerAddressClaim" class="phones">Customer's Ethereum address:

                </label>
                <span type="text" id="customerAddressClaim" name="customerAddressClaim"></span>
            </div>

            <div class="col-md-12 text-warning h4">

                <span type="text" id="miningClaim" name="miningClaim"></span>
            </div>
            <div class="col-md-12 text-success h4">

                <span type="text" id="minedClaim" name="minedClaim"></span>
            </div>
            <div class="col-md-12 text-success h4">

                <span type="text" id="successConfirmationClaim" name="successConfirmationClaim"></span>
            </div>
            <div class="col-md-12 text-success h4">

                <span type="text" id="contractAddressClaim" name="contractAddressClaim"></span>
            </div>
            <div class="col-md-12 text-danger h4">

                <span type="text" id="failedTransactionClaim" name="failedTransactionClaim"></span>
            </div>

            <button onclick="ReviewClaimToAdmin()" id="" class="read_more btn btn-default ml-4 mb-5">Back</button>
            <button onclick="setClaimPrice()" id="claimApprove" class="read_more btn btn-default ml-4 mb-5">Set
                claim price</button>
            <button onclick="" id="payClaim" class="read_more btn btn-default ml-4 mb-5">Pay the claim</button>
            <button onclick="dissapproveClaim()" id="" class="read_more btn btn-default ml-4 mb-5">Dissapprove
                claim</button>

        </div>



    </div>
    <?php include "includes/footer.php" ?>

</div>
<!-- end review claim panel -->