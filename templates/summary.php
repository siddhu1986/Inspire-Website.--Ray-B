<div class="row">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-4">
        <div class="_box">
          <div class="_h1"><span ng-bind="user_details.product['Actual Ex VAT']"></span></div>
          <div class="_p3 center"><span ng-bind="user_details.product.Category"></span></div>
          <div class="_p3 center">Upto 10 Mbps</div>
          <span class="_button" ng-click="goto('results')">Change</span>
        </div>
      </div>
      <div class="col-md-8">
        <div class="_box">
          <div class="_h1">Your Broadband</div>


          <div class="row">
            <div class="col-md-5">
              <img src="advert.png" style="width: 100%;" />
            </div>
            <div class="col-md-7" style="padding:0px;">
              <div style="text-align: left;"><input class="radio-custom static" name="static" type="radio" checked> <label class="radio-custom-label static">Upto 100 mbps download</label></div>

              <div style="text-align: left;"><input class="radio-custom static" name="static2" type="radio" checked> <label class="radio-custom-label static">Upto 100 mbps upload</label></div>

              <div style="text-align: left;"><input class="radio-custom static" name="static3" type="radio" checked> <label class="radio-custom-label static">Unlimited Usage</label></div>

              <div style="text-align: left;"><input class="radio-custom static" name="static4" type="radio" checked> <label class="radio-custom-label static">Free Wireless Router</label></div>

            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <input id="months-12" class="radio-custom" name="radio-months" type="radio" ng-model="user_details.product.tenure" value="12"> <label for="months-12" class="radio-custom-label">12 Months</label>
            </div>
            <div class="col-md-6">
              <input id="months-24" class="radio-custom" name="radio-months" type="radio" ng-model="user_details.product.tenure" value="24"> <label for="months-24" class="radio-custom-label">24 Months</label>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="_box">

          <div class="row mt-2">
            <div class="col-md-12">
              <div class="_h2 left unbold">Digital Voice</div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="_p3 left">Super Fast G- Broadband and then in the bla and lorem ipsum and Fast G- Broadband and then in the bla and lorem ipsum so there is Fast G- Broadband and then in the bla and lorem ipsum</div>
            </div>
          </div>
          
          

          <div class="row mt-3">
            <div class="col-md-6">
              <input id="radio-1" class="radio-custom" name="radio-group-dv" type="radio" ng-model="user_details.product.digital_voice" value="0"> <label for="radio-1" class="radio-custom-label">No, I dont want digital voice</label>
            </div>
            <div class="col-md-6">
              <input id="radio-2" class="radio-custom" name="radio-group-dv" type="radio" ng-model="user_details.product.digital_voice" value="1"> <label for="radio-2" class="radio-custom-label">Yes, I want digital voice</label>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-12">
              <div class="_bg_purple">
                Lorem and then in the bla and lorem ipsum and Fast G- Broadband and then in the bla and lorem ipsum so there is Fast G- Broadband and then in the bla and lorem ipsum
              </div>
            </div>
          </div>



          <div class="row mt-2">
            <div class="col-md-12">
              <div class="_h2 left unbold">Telephone Line</div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="_p3 left">Would you like to transfer your line?</div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <input id="radio-tl0" class="radio-custom" name="radio-group-tl" type="radio" ng-model="user_details.product.telephone_line" value="0"> <label for="radio-tl0" class="radio-custom-label">No, I dont want telephone line</label>
            </div>
            <div class="col-md-6">
              <input id="radio-tl1" class="radio-custom" name="radio-group-tl" type="radio" ng-model="user_details.product.telephone_line" value="1"> <label for="radio-tl1" class="radio-custom-label">Yes, I want telephone line</label>
            </div>
          </div>




          <div class="row mt-2">
            <div class="col-md-12">
              <div class="_h2 left unbold">Your Broadband Connection</div>
            </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-12">
              <div class="_p3 left">Please confirm the following:</div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-6">
              <input id="radio-ri1" class="radio-custom" name="radio-group" type="radio" ng-model="user_details.residential_info" value="permanent"> <label for="radio-ri1" class="radio-custom-label">I live here and I am, or, I have consent from the bill payer</label>
            </div>
            <div class="col-md-6">
              <input id="radio-ri2" class="radio-custom" name="radio-group" type="radio" ng-model="user_details.residential_info" value="recent"> <label for="radio-ri2" class="radio-custom-label">I am moving to this address or have moved there in the last 14 days.</label>
            </div>
          </div>


          <div class="row mt-3">
            <div class="col-md-12">
              <div class="_bg_purple">
                Great news - there's already a working Full Fibre broadband connection at your home. You'll have a white box on the wall that looks different from a normal phone socket. We can take over the Full Fibre service without the need for an engineer visit.
              </div>
            </div>
          </div>

          <br />
          <div class="_hline"></div>
          <div class="row with_margin">
            <div class="col-md-6 left">
              <span class="_button _gray" ng-click="goto('results')">Back</span>
            </div>
            <div class="col-md-6 right">
              <span class="_button _purple" ng-click="goto('customer')">Pay Now</span>
            </div>
          </div>




          
        </div>
      </div>
    </div>


  </div>
  <div class="col-md-4">
    <div class="_box _contained">
      <div class="_h3 left">Order Summary - Monthly Payment</div>
      <div class="row">
        <div class="col-md-7">
          <div class="_p3 left"><span ng-bind="user_details.product.Category"></span></div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right"><span ng-bind="user_details.product['Actual Ex VAT']"></span></span>
        </div>
        
      </div>
      
      <span class="_p3 black">Sme orelm and ipsum and then in the stupendoius this of the blabber</span>
      <br /><br /><br />

      <div class="_h3 left">Today's Payment</div>
      
      <div class="row">
        <div class="col-md-7">
          <div class="_p3 left">First Monthly Payment</div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right _purple"><span ng-bind="user_details.product['Actual Ex VAT']"></span></span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="_p3 left">Setup Fee</div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right _purple">£10.00</span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="_p3 left">Wireless Router</div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right _purple">£0.00</span>
        </div>
      </div>


      <div class="_bottom_sticky_btn">
        <div class="row">
          <div class="col-md-7">
            <div class="_p3 left _white">Total to pay today</div>
          </div>
          <div class="col-md-5">
            <span class="_p1 right _white"><span ng-bind="user_details.product['Actual Ex VAT']"></span></span>
          </div>
        </div>
      </div>

    </div>

    


    <div class="row">
      <div class="col-md-12">
        <img src="banner.png" style="width: 100%;" />
      </div>
    </div>

  </div>
</div>


<!-- <img src="scr.png" style="width:600px;" /> -->

<?php if(isset($_REQUEST["debug"])) { ?>
<div class="row">
  <div class="col-md-8">
    <img src="left.png" style="width:100%;" />
    <img src="left_down.png" style="width:100%;" />
  </div>
  <div class="col-md-4">
    <img src="side.png" style="width:100%;" />
  </div>
</div>
<?php } ?>



