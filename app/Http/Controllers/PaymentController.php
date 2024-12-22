<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\User;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $propertyId = $request->input('property_id');
        $property = Room::find($propertyId);
        $userId = $request->input('user_id');
        
        if (!$property) {
            return redirect()->route('favourites.index')->with('error', "Property with ID {$propertyId} not found.");
        }
        
        $user = User::find($userId);
        if (!$user) {
            return redirect()->route('favourites.index')->with('error', "User with ID {$userId} not found.");
        }
        
        $owner = User::find($property->owner_id);
        if (!$owner) {
            return redirect()->route('favourites.index')->with('error', "Owner with ID {$property->owner_id} not found.");
        }


           // Lấy các biến cần thiết
    $phone_number = $user->phone_number ?? '0000000000'; // Số điện thoại người dùng (giả sử user có cột phone_number)
    $user_name = $user->name ?? 'Unknown';              // Tên người dùng
    $price = $property->price ?? 0;                     // Giá phòng (giả sử room có cột price)

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://bio.ziller.vn/api/qr/add",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 2,
            CURLOPT_TIMEOUT => 10,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer b60ba84a2a928cc49bfbb1bfb954ebe0",
                "Content-Type: application/json",
            ),
            CURLOPT_POSTFIELDS => json_encode(array (
        'type' => 'text',
        'data' => '2|99|' . $phone_number .'|'. $user_name . '|0|0|' . $price . '|Thanh toan tien phong'.'|transfer_myqr',//'2|99|' . $phone_number . $user_name . '|0|0|' . $price . '|Thanh toan tien phong|'.'|transfer_myqr',
        'background' => 'rgb(255,255,255)',
        'foreground' => 'rgb(0,0,0)',
        'logo' => 'https:\/\/site.com\/logo.png',
        )),
        ));
      // '2|99|0828546324|LE QUANG CHINH|0|0|10000|noidung|transfer_myqr' 
        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;

        $qrLink = json_decode($response);


        return view('user.payment-method', compact('property', 'user', 'owner', 'qrLink'));
    }
}
