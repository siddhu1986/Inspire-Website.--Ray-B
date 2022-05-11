

<!-- Set up your HTML -->

<div class="owl-carousel" style="max-width: 700px;margin: auto;">
	<div class="_box" style="width:200px;float:left;margin-right: 5px;" ng-repeat="product in user_details.matches">
		<div class="_h1">{{product["Actual Ex VAT"]}}</div>
		<div class="_p3 center">{{product.Category}}</div>
		<div class="_p3 center">{{product.speed}}</div>

		<div class="row mt-3">
			<div class="col-md-12">
				<span class="_button" ng-click="selectProductAndProceed(product)">Customize</span>
			</div>
		</div>
		
	</div>
</div>

<br style="clear: left;" />


<!--<div ng-repeat="product in user_details.matches">
	<div class="_box" style="width:250px;float:left;margin-right: 5px;">
      <div class="_h1">{{product["Actual Ex VAT"]}}</div>
      <div class="_p3 center">{{product.Category}}</div>
      <div class="_p3 center">{{product.speed}}</div>
      <span class="_button" ng-click="selectProductAndProceed(product)">Customize</span>

    </div>

  {{product.Name}} {{product.speed}} {{product["Actual Ex VAT"]}}
</div> -->
