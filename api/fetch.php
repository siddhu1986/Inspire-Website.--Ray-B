<?php
session_start();
extract($_REQUEST);

$c = file_get_contents("php://input");
$obj = json_decode($c);
if(isset($action))
{
	if($action=="saveToSession")
	{
		//$ud = $_SESSION["user_details"];
		//$ud->matches = $obj;
		$_SESSION["user_details"] = $obj;
		echo json_encode($obj);
		die();
	}
	if($action=="saveMatchedProductsToSession")
	{
		$ud = $_SESSION["user_details"];
		$ud->matches = $obj;
		$_SESSION["user_details"] = $ud;
		echo json_encode($ud);
		die();
	}
	if($action=="saveToSession")
	{
		$_SESSION["user_details"] = $obj;
		echo json_encode($obj);
		die();
	}
	if($action=="getAddresses")
	{
		//$zip = "ME3 8GD";
		$url = "https://api.digitalwholesalesolutions.com";

		$xml = '<Request module="dwapi" call="address_search" aid="46309a3e6119271cb28dce16ebb9bc3e" version="1.0">
		  <block name="auth">
		    <a name="username" format="text">api.inspiretelecom</a>
		    <a name="password" format="password">xdt2WJi66Q!</a>
		  </block>
		  <a name="postcode" format="text" v="BB95SR">'.$zip.'</a>
		</Request>
		';
        //setting the curl parameters.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
// Following line is compulsary to add as it is:
        curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        $data = curl_exec($ch);
        curl_close($ch);
        //echo $data;

        $xml = simplexml_load_string($data);
		$json = json_encode($xml);
		$obj = json_decode($json);

		//echo $obj->status;
		if($obj->status->{"@attributes"}->no!=0)
		{
			die("Error");
		}
		$cols = 
		[
		"building",
		"street",
		"locality",
		"city",
		"postcode",
		"address-reference",
		"css-database-code"
		];


		$items = array();
		if(count($obj->block->block)!=0)
		{
			foreach($obj->block->block as $key=>$item)
			{
				$_item = new stdClass();
				//print_r($item->a);
				if(isset($item->a))
				{
					foreach($item->a as $k=>$v)
					{
						$col = $cols[$k];
						$_item->$col = $v;
					}
					$_item->title = $_item->building . ", " . $_item->street . ", " . $_item->postcode;
					$items[] = $_item;	
				}
				
			}
		}


		//print_r($items);
		echo json_encode($items);
		//print_r($obj->block->block);

		        //convert the XML result into array
		        //$array_data = json_decode(json_encode(simplexml_load_string($data)), true);

		die();
	}
	if($action=="getProducts")
	{

		//$zip = "ME3 8GD";
		$url = "https://api.digitalwholesalesolutions.com";
		//print_r($obj);
		//die();
		//echo $obj['css-database-code'];

		//die();
		$xml = '<?xml version="1.0"?>
<Request module="dwapi" call="availability" aid="0aa6bbc9901b21b6a0d1b9aefee2fec2" version="1.0">
  <block name="auth">
    <a name="username" format="text">api.inspiretelecom</a>
    <a name="password" format="password">xdt2WJi66Q!</a>
  </block>
  <a name="address-reference" format="text">'.$obj->{"address-reference"}.'</a>
  <a name="css-database-code" format="text">'.$obj->{"css-database-code"}.'</a>
</Request>
		';
        //setting the curl parameters.
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
// Following line is compulsary to add as it is:
        curl_setopt($ch, CURLOPT_POSTFIELDS,$xml);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 300);
        $data = curl_exec($ch);
        curl_close($ch);
        //echo $data;


        $xml = simplexml_load_string($data);
        echo $xml;
		$json = json_encode($xml);
		$obj = json_decode($json);

		//echo $obj->status;
		/*if($obj->status->{"@attributes"}->no!=0)
		{
			die("Error");
		}*/

		$cols = 
		[
		"building",
		"street",
		"locality",
		"city",
		"postcode",
		"address-reference",
		"css-database-code"
		];

		$out = null;
		foreach($obj->block as $block)
		{
			if($block->{"@attributes"}->name=="products")
			{
				$out = array();
				foreach($block->block as $b)
				{
					$blck = new stdClass();
					$blck->name = $b->a[16];
					$blck->speed = $b->a[17];
					$out[] = $blck;
				}
				break;
				
				//$out = $block->block;
				//break;
			}
		}

		$ud = $_SESSION["user_details"];
		if(isset($ud))
		{
			$ud->products = $out;
		}
		$_SESSION["user_details"] = $ud;


		echo json_encode($out);
		die();

		$items = array();
		if(count($obj->block->block)!=0)
		{
			foreach($obj->block->block as $key=>$item)
			{
				$_item = new stdClass();
				//print_r($item->a);
				if(isset($item->a))
				{
					foreach($item->a as $k=>$v)
					{
						$col = $cols[$k];
						$_item->$col = $v;
					}
					$_item->title = $_item->building . ", " . $_item->street . ", " . $_item->postcode;
					$items[] = $_item;	
				}
				
			}
		}


		//print_r($items);
		echo json_encode($items);
		//print_r($obj->block->block);

		        //convert the XML result into array
		        //$array_data = json_decode(json_encode(simplexml_load_string($data)), true);

		die();
	}
}


        

?>