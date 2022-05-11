<style>
	.mailchimp-one
	{
		background: #fff !important;
	}
</style>



<div style="amax-width: 900px;margin: auto;">
	<div class="row">
		<div class="col-md-6">
			<div style="    font-size: 40px;
    font-weight: bold;
    line-height: 1em;
    margin-bottom: 20px;">What's Your Broadband Usage</div>
			<div>By highlighting your primary online usages, the broadband gauge will predict which package is best for you...</div>
		</div>
		<div class="col-md-6">
			<img src="dial.png" style="width: 100%;" />
		</div>
	</div>

	<div class="row mt-4">
		<div ng-click="toggleSelected(item)" class="col-md-2 col-4 _icon_collection_item" ng-class="{active:item.selected}" ng-repeat="item in configuration.data.usages" style="border-bottom: 1px solid #5e4c8f;margin-top:40px;padding-bottom: 20px;">
			<img src="{{item.icon}}" style="width: 80px;height:80px;object-fit: scale-down;" />
			<div>{{item.label}}</div>
		</div>
		<!-- <div class="col-md-2">3</div>
		<div class="col-md-2">4</div>
		<div class="col-md-2">2</div>
		<div class="col-md-2">3</div>
		<div class="col-md-2">3</div> -->
	</div>


	<div class="row with_margin">
		<div class="col-md-12 center">
			<span class="_button _gray _sleek" ng-click="goto('')">Back</span>
			<span style="display: inline-block;width:20px;"></span>
			<span class="_button _pink _sleek" ng-click="goto('results')" ng-disabled="!user_details.matches">Show Results</span>
	    </div>
		
	</div>

</div>

