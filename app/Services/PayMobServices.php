<?php
namespace App\Services;
use Illuminate\Http\Client\Request ;
use Illuminate\Support\Facades\Http;
class PayMobServices {
    private $PAYMOB_API_KEY ;
    private $token ;
    private $id ;
    private $integration_id ;
    private $price;
    private $iframe_token;
    public function __construct($price)
    {
        $this->PAYMOB_API_KEY="ZXlKaGJHY2lPaUpJVXpVeE1pSXNJblI1Y0NJNklrcFhWQ0o5LmV5SmpiR0Z6Y3lJNklrMWxjbU5vWVc1MElpd2ljSEp2Wm1sc1pWOXdheUk2TVRBME5EWXlMQ0p1WVcxbElqb2lhVzVwZEdsaGJDSjkuZnZuTS1henUtck4waFFHOEx1TlQtS3NrRlNUYjlWNmVXcmYzNEtIMDduZXVOdHl0TmJUWXJDQll2QUdPN1FqVjdqVUJtR0ZOaUtLSTUxOEJVbVFoNWc="; // change it
        $this->id=null;
        $this->integration_id=113360;//change it
        $this->price=$price;
        $this->iframe_token=null;
    }

    public function getToken()
    {
        $url="https://accept.paymobsolutions.com/api/auth/tokens";
	    $response = Http::withHeaders(['content-type' => 'application/json'])->post($url,

		["api_key" => $this->PAYMOB_API_KEY]);
        if(isset($response->json()['token']))
        {
            $this->token= $response->json()['token'];
            return $response->json()['token'];

        }
        return false;
    }

    public function get_id()
    {
            $this->token = $this->getToken();
            $response_final = Http::withHeaders(['content-type' => 'application/json'])
            ->post('https://accept.paymobsolutions.com/api/ecommerce/orders',
            ["auth_token" => $this->token,
                 "delivery_needed" => "false",
                 "amount_cents" => $this->price * 100,
                 "items" => []]);
            if(isset($response_final->json()['id']))
            {
                $this->id=$response_final->json()['id'];
                return $this->id;
            }
    }
    public function make_order($user)
    {
        $url = "https://accept.paymobsolutions.com/api/acceptance/payment_keys";
	    $response_final_final = Http::withHeaders(['content-type' => 'application/json'])->post($url,
             ["auth_token" =>
		$this->token,
             "expiration" => 36000,
             "amount_cents" =>$this->price *100,

		"order_id" => $this->id,
             "billing_data" => ["apartment" => "NA",
             "email" => $user->email,

		"floor" => "NA",

		"first_name" => $user->name,
             "street" => "NA",
             "building" => "NA",

		"phone_number" => $user->phone??'',
             "shipping_method" => "NA",
             "postal_code" => "NA",

		"city" => "NA",
             "country" => "NA",
             "last_name" =>$user->name,
             "state" => "NA"],

		"currency" => "EGP",
             "integration_id" =>$this->integration_id  ]);
        if(isset($response_final_final->json()['token']))
        {
            $this->iframe_token = $response_final_final->json()['token'];
            return $this->iframe_token;
        }

    }

}