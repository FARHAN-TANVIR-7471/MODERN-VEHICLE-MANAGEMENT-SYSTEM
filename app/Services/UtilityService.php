<?php

namespace App\Services;

use Intervention\Image\ImageManagerStatic as Image;
/**
 * Class UtilityService
 * @package App\Services
 */
class UtilityService
{
    public static $status = [
        'ACTIVE' => 'ACTIVE',
        'INACTIVE' => 'INACTIVE',
    ];

    public static $statusBoolean = [
        'ACTIVE' => '1',
        'INACTIVE' => '0',
    ];

    public static $imageUploadPath = [
        'logo' => 'images/company_logo/',
        'sider_image' => 'images/sider_image/',
        'profile_image' => 'images/profile_image/',
        'scan_image' => 'images/scan_image/',
        'card_user_image' => 'images/card_user_image/',
        'company_logo' => 'images/company_logo/',
        'thum_img' => 'images/thum_img/',
        'premium_card_user_image' => 'images/premium_card/user/',
        'premium_card_user_company_logo' => 'images/premium_card/company_logo/',
        'defaults_img' => '/images/demi-pp.png',
    ];
    public static $imagePath = [
        'defold_image' => '/images/a-1.jpeg',
        'defold_white_img' => '/images/whiteimg.png',
    ];


    public function uplodeImage($data, $imageUploadPath)
    {
        $file = $data;
        if (isset($file)) {
            $filename =date('y-m-d-h-i-s') . '_' . time() . '_' . $file->getClientOriginalName();
            $image = $imageUploadPath.$filename;
            $a = $file->move($imageUploadPath,$filename);
            $image = '/'.$image;
            return $image;
        }else{
            return null;
        }
    }

    public function imageExit($path)
    {
        $image_path = public_path().$path;
        if (file_exists($image_path)) {
            return $path;
        }else{
            return UtilityService::$imagePath['defold_white_img'];
        }
    }
}