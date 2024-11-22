<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
class SocialController extends Controller
{
    // Redirect to Facebook
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    
    public function handleFacebookCallback()
    {
        try {
            // Lấy thông tin người dùng từ Socialite
            $facebookUser = Socialite::driver('facebook')->user();
            $accessToken = $facebookUser->token;

            // Gửi yêu cầu tới Graph API để lấy ảnh kích thước lớn
            $response = Http::get("https://graph.facebook.com/me?fields=picture.type(large){url}&access_token={$accessToken}");
            $data = $response->json();

            // Lấy URL ảnh đại diện
            $avatarUrl = $data['picture']['data']['url'];

            // Tạo tên file duy nhất
            $filename = $facebookUser->getId() . '-' . time() . '.jpg';

            // Tải ảnh về và lưu vào thư mục 'public/storage/users'
            $imageContent = file_get_contents($avatarUrl);
            $path = Storage::disk('public')->put('users/' . $filename, $imageContent);

            // Lưu đường dẫn ảnh vào cơ sở dữ liệu
            $imagePath = 'users/' . $filename;

            // Kiểm tra hoặc tạo tài khoản người dùng
            $existingUser = User::where('facebook_id', $facebookUser->getId())->first();

            if ($existingUser) {
                $existingUser->update(['image_url' => $imagePath]);
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    'facebook_id' => $facebookUser->getId(),
                    'image_url' => $imagePath,
                    'password' => Str::random(16),
                    'email_verified_at' => now(),
                ]);
                Auth::login($newUser);
            }

            return redirect()->route('home');
        } catch (Exception $e) {
            return redirect()->route('home')->withErrors('Facebook login failed');
        }
    }
    
}
