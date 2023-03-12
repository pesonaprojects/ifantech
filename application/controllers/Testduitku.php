<?php 
/**
  * 
  */
class Testduitku extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		error_reporting(0);
	}
	public function index()
	{
		$merchantCode = 'D7500';
		$merchantKey = '3a0cfa8e55618e18f14f4a84e8c1b3d1';
		$timestamp = round(microtime(true) * 1000);
		$paymentAmount = 100000;
		$merchantOrderId = time() . '';
		$productDetails = 'Split Pay';
		$email = 'gatewaykudigital@gmail.com';
		$phoneNumber = '082288777821';
		$additionalParam = '';
		$merchantUserInfo = '';
		$customerVaName = 'NEW CS1';
		$callbackUrl = base_url().'duitku/callback';
		$returnUrl = 'http://example.com/api-pop/backend/redirect.php';
		$expiryPeriod = 1440;
		$signature = hash('sha256', $merchantCode.$timestamp.$merchantKey);


		$customerDetail = array(
			'email' => $email,
			'phoneNumber' => $phoneNumber
		);
		$item1 = array(
			'name' => $productDetails,
			'price' => $paymentAmount,
			'quantity' => 1
		);
		$itemDetails = array(
			$item1
		);

		$params = array(
			'merchantCode' => $merchantCode,
			'paymentAmount' => $paymentAmount,
			'paymentMethod' => $paymentMethod,
			'merchantOrderId' => $merchantOrderId,
			'productDetails' => $productDetails,
			'additionalParam' => $additionalParam,
			'merchantUserInfo' => $merchantUserInfo,
			'customerVaName' => $customerVaName,
			'email' => $email,
			'phoneNumber' => $phoneNumber,
			'itemDetails' => $itemDetails,
			'customerDetail' => $customerDetail,
			'callbackUrl' => $callbackUrl,
			'returnUrl' => $returnUrl,
			'signature' => $signature,
			'expiryPeriod' => $expiryPeriod
		);
		echo $merchantCode;

		$params_string = json_encode($params);
		$url = "https://api-prod.duitku.com/api/merchant/createinvoice";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
			'Content-Type: application/json',
			'Content-Length: ' . strlen($params_string),
			'x-duitku-signature:' . $signature,
			'x-duitku-timestamp:' . $timestamp,
			'x-duitku-merchantcode:' . $merchantCode
		)   
	);   
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

    //execute post
    $request = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if($httpCode == 200)
    {
        $result = json_decode($request, true);
        //header('location: '. $result['paymentUrl']);
        // print_r($result, false);
        echo "paymentUrl :". $result['paymentUrl'] . "<br />";
        echo "reference :". $result['reference'] . "<br />";
        echo "statusCode :". $result['statusCode'] . "<br />";
        echo "statusMessage :". $result['statusMessage'] . "<br />";
    }
    else
    {
        // echo $httpCode . " " . $request ;
        echo $request ;
    }
	}
} ?>