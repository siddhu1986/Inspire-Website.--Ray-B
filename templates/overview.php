<div class="row" style="max-width: 700px;margin: auto;">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <div class="_box padding40 _contained">
          <div class="_h2 left">Personal Details</div>
          


          <div class="row with_margin">
            <div class="col-md-8">
              <div class="_p2"><span ng-bind="user_details.full_name"></span></div>
              <div class="_p3 _gray">Sid Dis</div>
            </div>
            <div class="col-md-4">
              <span class="_button _gray _sleek" ng-click="goto('customer')">Change</span>
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-8">
              <div class="_p2">Email</div>
              <div class="_p3 _gray"><span ng-bind="user_details.email"></div>
            </div>
            <div class="col-md-4">
              <span class="_button _gray _sleek" ng-click="goto('customer')">Change</span>
            </div>
          </div>


          <div class="row with_margin">
            <div class="col-md-8">
              <div class="_p2">Address</div>
              <div class="_p3 _gray"><span ng-bind="user_details.address.building"></span></div>
              <div class="_p3 _gray"><span ng-bind="user_details.address.street"></span></div>
              <div class="_p3 _gray"><span ng-bind="user_details.address.postcode"></span></div>
            </div>
            <div class="col-md-4">
              <span class="_button _gray _sleek" ng-click="goto('confirm')">Change</span>
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-8">
              <div class="_p2">Payment Method</div>
              <div class="_p3 _gray">Direct Debit</div>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">
              <div class="_h2 left">Order Summary - Monthly Payment</div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-8">
              <div class="_p2 left"><span ng-bind="user_details.product.Category"></span></div>
              <div class="_p3 _gray">We will let you know</div>
            </div>
            <div class="col-md-4">
              <span class="_p1 _pink right _purple"><span ng-bind="user_details.product['Actual Ex VAT']"></span></span>
            </div>
          </div>
          
          <br /><br /><br />

          <div class="row">
            <div class="col-md-12">
              <div class="_h2 left">Today's Payment</div>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-8">
              <div class="_p2 left">First Monthly Payment</div>
            </div>
            <div class="col-md-4">
              <span class="_p1 _pink right _purple"><span ng-bind="user_details.product['Actual Ex VAT']"></span></span>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-8">
              <div class="_p2 left">Set-up Fee</div>
            </div>
            <div class="col-md-4">
              <span class="_p1 _pink right _purple">£10.00</span>
            </div>
          </div>

          <div class="row mt-3">
            <div class="col-md-8">
              <div class="_p2 left">Wireless Router</div>
            </div>
            <div class="col-md-4">
              <span class="_p1 _pink right _purple">£0.00</span>
            </div>
          </div>

          <br />
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

        <div class="row with_margin">
          <div class="col-md-6 left">
            <span class="_button _gray" ng-click="goto('bank')">Back</span>
          </div>
          <div class="col-md-6 right">
            <span class="_button _purple" ng-click="">Join Inspire</span>
          </div>
        </div>



      </div>
      
    </div>
  </div>

</div>


<!-- <img src="scr.png" style="width:600px;" /> -->
<?php if(isset($_REQUEST["debug"])) { ?>
<div class="row">
  <div class="col-md-8">
    <img src="confirm.png" style="width:100%;" />
    
  </div>
  <div class="col-md-4">
    <img src="side.png" style="width:100%;" />
  </div>
</div>
<?php } ?>





