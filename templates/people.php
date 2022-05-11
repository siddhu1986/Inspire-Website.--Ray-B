<style>
	.mailchimp-one
	{
		background: #fff !important;
	}
</style>


<span ng-init="getProducts()"></span>




<div class="row" style="width:400px;margin:auto;">
  <div class="col-md-2 _arrow_flex" ng-click="prevSize()"><img src="img/arrow_left.png" /></div>
  <div class="col-md-8" style="text-align: center;">
  	<img style="width:150px;height:150px;object-fit: scale-down;" src="{{configuration.data.default_size.icon}}" />
  	<div style="text-align: center;font-size: 18px;">{{configuration.data.default_size.label}}</div>
  </div>
  <div class="col-md-2 _arrow_flex" ng-click="nextSize()"><img src="img/arrow_right.png" /></div>
  
</div>


<div class="row mt-3">
	<div class="col-md-12">
		<div style="font-size: 24px;font-weight:bold;text-align: center;">How many people live in your household?</div>
	</div>
</div>


<div class="row with_margin">
	<div class="col-md-12 center">
		<span class="_button _gray _sleek" ng-click="goto('')">Back</span>
		<span style="display: inline-block;width:20px;"></span>
		<span class="_button _pink _sleek" ng-click="goto('usage')">Next</span>
    </div>
	
</div>


