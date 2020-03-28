<?php namespace Bcscoder\Rajaongkir;

class RajaOngkir {

	private $apikey;
    private $base_url = "http://rajaongkir.com/api/";

    public function __construct($api)
    {
        $this->apikey = $api;
    }


	function getCity()
	{
        $client = new \GuzzleHttp\Client();
	    $response = $client->get($this->base_url.'city', [
            'query' => [
                'key' => $this->apikey,
            ]
        ]);
        $body = $response->json();
        return $body;
	}
	 
	function getCost($origin, $destination,$weight,$courier)
	{
        $client = new \GuzzleHttp\Client();
        $response = $client->post($this->base_url.'cost', [
            'body' => [
                'key' => $this->apikey,
                'origin' => $origin,
                'destination' => $destination,
                'weight' => $weight,
                'courier' => $courier
            ]
        ]);
        $body = $response->json();
        return $body;
	}
	 
	//$kota = get_city('ban','origin');
	//echo json_encode($kota);
}