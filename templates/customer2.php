<div class="row">
  <div class="col-md-8">
    <div class="row">
      <div class="col-md-12">
        <div class="_box padding40">
          <div class="_h1 left">Your Details</div>
          
          <div class="row with_margin">
            <div class="col-md-6">
              <div class="_p2">Title</div>
            </div>
            <div class="col-md-6">
              <select class="_input">
                <option value=""></option>
              </select>
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-6">
              <div class="_p2">First Name</div>
            </div>
            <div class="col-md-6">
              <input type="text" class="_input" ng-model="user_details.full_name" />
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-6">
              <div class="_p2">Last Name</div>
            </div>
            <div class="col-md-6">
              <input type="text" class="_input" />
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-6">
              <div class="_p2">Email</div>
            </div>
            <div class="col-md-6">
              <input type="text" class="_input" ng-model="user_details.email" />
            </div>
          </div>

          <div class="row with_margin">
            <div class="col-md-6">
              <div class="_p2">Confirm Email</div>
            </div>
            <div class="col-md-6">
              <input type="text" class="_input" />
            </div>
          </div>

          <div class="_hline"></div>

          <div class="row with_margin">
            <div class="col-md-6 left">
              <span class="_button _gray" ng-click="goto('summary')">Back</span>
            </div>
            <div class="col-md-6 right">
              <span class="_button _purple" ng-click="goto('confirm')">Continue</span>
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
          <div class="_p3 left">Super Fast G- Broadband</div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right">£39.99</span>
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
          <span class="_p3 _pink right _purple">£39.99</span>
        </div>
      </div>

      <div class="row">
        <div class="col-md-7">
          <div class="_p3 left">Setup Fee</div>
        </div>
        <div class="col-md-5">
          <span class="_p3 _pink right _purple">£19.99</span>
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
            <span class="_p1 right _white">£39.99</span>
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
    <img src="cd.png" style="width:100%;" />
    
  </div>
  <div class="col-md-4">
    <img src="side.png" style="width:100%;" />
  </div>
</div>
<?php } ?>





