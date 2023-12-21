<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function postShop()
    {
        return view('delivery.shop.shop-post');
    }

    public function usersShopPage()
    {
        return view('delivery.users.shop-page');
    }

    public function bookingRegistrationIndex()
    {
        return view('delivery.users.users-shop-booking');
    }
}
