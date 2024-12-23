<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MomoApiController extends Controller
{
    private $endpoint = 'http://localhost:9999/v2/gateway/api/create';
    private $accessKey = 'F8BBA842ECF85'; // Replace with your AccessKey
    private $secretKey = 'K951B6PE1waDMi640xX08PD3vg6EkVlz'; // Replace with your SecretKey
    private $partnerCode = 'MOMO'; // Replace with your PartnerCode
    private $redirectUrl = 'https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b';
    private $ipnUrl = 'https://webhook.site/b3088a6a-2d17-4f8d-a383-71389a6c600b';

    public function createPayment(Request $request)
    {
        $orderId = time(); // Unique order ID
        $amount = $request->input('amount'); // Amount to pay
        $orderInfo = 'Payment for order ' . $orderId;
        $extraData = ''; // Optional extra data
        $requestId = time(); // Unique request ID
        $requestType = 'payWithMethod';
        $autoCapture = true;

        // Prepare the signature
        $rawHash = "accessKey={$this->accessKey}&amount={$amount}&extraData={$extraData}&ipnUrl={$this->ipnUrl}&orderId={$orderId}&orderInfo={$orderInfo}&partnerCode={$this->partnerCode}&redirectUrl={$this->redirectUrl}&requestId={$requestId}&requestType={$requestType}";
        $signature = hash_hmac('sha256', $rawHash, $this->secretKey);

        // Prepare data for the request
        $data = [
            'partnerCode' => $this->partnerCode,
            'partnerName' => 'MoMo Payment',
            'storeId' => 'Test Store',
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'requestType' => $requestType,
            'ipnUrl' => $this->ipnUrl,
            'redirectUrl' => $this->redirectUrl,
            'autoCapture' => $autoCapture,
            'extraData' => $extraData,
            'signature' => $signature,
        ];

        // Make the POST request to Momo API
        $result = $this->execPostRequest($this->endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        // Redirect to Momo payment page
        if (!empty($jsonResult['payUrl'])) {
            return redirect($jsonResult['payUrl']);
        }

        // Handle failure
        return redirect()->back()->with('error', 'Failed to create payment.');
    }
    public function processPayment(Request $request)
    {
        // Extract data from the form
        $amount = $request->input('amount');
        $propertyId = $request->input('property_id');
        $userId = $request->input('user_id');
        $ownerId = $request->input('owner_id');

        $orderId = time(); // Unique order ID
        $orderInfo = "Payment for Property ID: $propertyId by User ID: $userId";
        $extraData = json_encode(['owner_id' => $ownerId, 'property_id' => $propertyId]); // Optional data
        $requestId = time(); // Unique request ID
        $requestType = 'captureWallet';

        // Prepare the signature
        $rawHash = "accessKey={$this->accessKey}&amount={$amount}&extraData={$extraData}&ipnUrl={$this->ipnUrl}&orderId={$orderId}&orderInfo={$orderInfo}&partnerCode={$this->partnerCode}&redirectUrl={$this->redirectUrl}&requestId={$requestId}&requestType={$requestType}";
        $signature = hash_hmac('sha256', $rawHash, $this->secretKey);

        // Prepare the request data
        $data = [
            'partnerCode' => $this->partnerCode,
            'partnerName' => 'MoMo Payment',
            'storeId' => 'Test Store',
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'requestType' => $requestType,
            'ipnUrl' => $this->ipnUrl,
            'redirectUrl' => $this->redirectUrl,
            'autoCapture' => true,
            'extraData' => $extraData,
            'signature' => $signature,
        ];

        // Send the request to MoMo API
        $result = $this->execPostRequest($this->endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);

        // Redirect to MoMo's payment page
        if (!empty($jsonResult['payUrl'])) {
            return redirect($jsonResult['payUrl']);
        }

        // Handle failure
        return redirect()->back()->with('error', 'Failed to initiate payment. Please try again.');
    }

    private function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data),
        ]);
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        $result = curl_exec($ch);
        curl_close($ch);

        return $result;
    }
}
