var app = angular.module("DA", ['ngRoute']);

app.config(function($routeProvider)
{

    $routeProvider
    .when("/", {
      templateUrl : "templates/people.php"
    })
    .when("/usage", {
      templateUrl : "templates/usage.php"
    })
    .when("/results", {
      templateUrl : "templates/results.php"
    })
    .when("/summary", {
      templateUrl : "templates/summary.php"
    })
    .when("/customer", {
      templateUrl : "templates/customer.php"
    })
    .when("/overview", {
      templateUrl : "templates/overview.php"
    })
    .when("/confirm", {
      templateUrl : "templates/confirm_address.php"
    })
    .when("/bank", {
      templateUrl : "templates/bank.php"
    });
    
    
});


app.controller("DAC", function($scope,$timeout,$http,$location,$routeParams)
{  
	window["scope"] = $scope;

  try
  {
    if(user_details)
    {
      $scope.user_details = user_details;
    }
  }
  catch(e){}

  /*if(localStorage.getItem("_data"))
  {
    //eval("$scope.user_details = " + localStorage.getItem("_data") + ";\r\n");
  }*/

  $scope.$on('$routeChangeStart', function($event, next, current) { 
     // ... you could trigger something here ...
     $timeout(function()
     {
      $scope.owl();
    },500);
     
  });


  $scope.prevSize = function()
  {

    for(var i in $scope.configuration.data.sizes)
    {
      var item = $scope.configuration.data.sizes[i];
      
      if($scope.configuration.data.default_size.label==item.label)
      {
        if(i>0)
        {

          $scope.configuration.data.default_size = $scope.configuration.data.sizes[i-1];

          break;
        }
        else
        {
          //alert(JSON.stringify(item));
          $scope.configuration.data.default_size = $scope.configuration.data.sizes[$scope.configuration.data.sizes.length-1];
          break;
        }
      }
    }
  };

  $scope.nextSize = function()
  {

    for(var i in $scope.configuration.data.sizes)
    {
      var item = $scope.configuration.data.sizes[i];
      
      if($scope.configuration.data.default_size.label==item.label)
      {
        var i2 = parseInt(i) + 1;
        //alert(JSON.stringify($scope.configuration.data.sizes[i2]));
        if($scope.configuration.data.sizes[i2])
        {
          

          $scope.configuration.data.default_size = $scope.configuration.data.sizes[i2];  
          break;
        }
        else
        {
          //alert();
          $scope.configuration.data.default_size = $scope.configuration.data.sizes[0];
          break;
        }
      }
    }
  };

  $scope.owl = function()
  {
    jQuery(".owl-carousel").owlCarousel(
    {
       nav    : true,
    }
    );
  };

  $scope.goto = function(p)
  {
    if(p=="results")
    {
      if(!$scope.user_details.matches)
      {
        return;
      }
    }
    $("html,body").animate({scrollTop:0});
    $location.path(p);
  };


  $scope.configuration = {
    "data":
    {
      "sizes" : [
        {"label":"2-4 People","icon":"img/ppl1.png"},
        {"label":"4-6 People","icon":"img/ppl2.png"}
      ],
      
      "usages":
      [
        {"label":"Cath up TV","icon":"img/1.png","mb":333},
        {"label":"HD & 4K TV","icon":"img/2.png","mb":1000},
        {"label":"Surfing the web","icon":"img/3.png","mb":1000},
        {"label":"Online Gaming","icon":"img/4.png","mb":1000},
        {"label":"Working from home","icon":"img/5.png","mb":1000},
        {"label":"Video calls","icon":"img/6.png","mb":1000}
      ]
    }

  };

  for(var i in $scope.configuration.data.sizes)
  {
    $scope.configuration.data.default_size = $scope.configuration.data.sizes[i];
    break;
  }

  $scope.selected_address = null;
  $scope.selected_address_object = null;
  $scope.selectAddress = function(addr)
  {
    $scope.selected_address = addr.title;
    $scope.selected_address_object = addr;
  }

  $scope.saveToSession = function()
  {
    $scope.user.address = $scope.selected_address_object;
    $http.post("api/fetch.php?action=saveToSession&t="+(new Date()).getTime(),$scope.user)
    .then(function(response)
    {
      window.location.href = "checkout.php";
      //$scope.addresses = response.data;
    });
  };

  $scope.toggleSelected = function(item)
  {
    item.selected = (item.selected==true)?false:true;
  }

  $scope.gotoUserDetailsPop = function()
  {
    $("#holder").append($("#result_addresses"));
    $("._pop").append($("#pop_userdetails"));
  };


  try
  {
    if(mProducts) $scope.mProducts = mProducts;
  }
  catch(e){}


  $scope.saveLocal = function()
  {
    //localStorage.setItem("_data",JSON.stringify($scope.user_details));
  };

  $scope.selectProductAndProceed = function(product)
  {
    $scope.user_details.product = product;
    $http.post("api/fetch.php?action=saveToSession&t="+(new Date()).getTime(),$scope.user_details)
    .then(function(response)
    {
      $scope.goto('summary');
    });
  };


  
  $scope.selectProduct = function(product)
  {
    $scope.user_details.product = product;
    $http.post("api/fetch.php?action=saveToSession&t="+(new Date()).getTime(),$scope.user_details)
    .then(function(response)
    {

    });
  };


  $scope.products = null;



  $scope.getProducts = function()
  {
    if($scope.products) return;
    $http.post("api/fetch.php?action=getProducts&t="+(new Date()).getTime(),$scope.user_details.address)
    .then(function(response)
    {
      $scope.user_details.products = response.data;

      var matchedProducts = {};
      /* Get Ptoduct matches */
      for(var i in response.data)
      {
        var product = response.data[i];
        for(var j in $scope.mProducts)
        {

          var mProduct = $scope.mProducts[j];
          console.log(mProduct);
          if(mProduct["Supplier Product Ref."]==product.name)
          {
            matchedProducts[mProduct.Name+" "+mProduct.speed] = mProduct;
          }
        }
      }
      console.log("mp",matchedProducts);
      $scope.matches = matchedProducts;
      $scope.user_details.matches = matchedProducts;
      $http.post("api/fetch.php?action=saveMatchedProductsToSession&t="+(new Date()).getTime(),matchedProducts)
      .then(function(response)
      {
      });

      //$scope.saveLocal();
      //$scope.addresses = response.data;
    });
  };

  $scope.searchAddresses = function(zip)
  {
    $http.post("api/fetch.php?action=getAddresses&zip="+zip+"&t="+(new Date()).getTime(),$scope.user)
    .then(function(response)
    {
      $scope.addresses = response.data;
    });
  };
  
  $scope.pop = function(zip)
  {
    $scope.searchAddresses(zip);
    var mask = $("<div class='_mask'></div>");
    var pop = $("<div class='_pop'></div>");
    $("body").append(mask);
    $("body").append(pop);
    $(pop).append($("#result_addresses"));
  }

  $scope.validate = function()
  {
    $http.post("api.php?action=validate_user&t="+(new Date()).getTime(),$scope.user)
    .then(function(response)
    {

    });
  };
});




