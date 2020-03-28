rajaongkir
==========

Laravel + Rajaongkir API

### Intallation
via composer 

```
"require-dev": {
    "bcscoder/rajaongkir": "dev-master"
}
```

Once this operation completes, the final step is to add the service provider. Open app/config/app.php, and add a new item to the providers array.

`'Bcscoder\Rajaongkir\RajaongkirServiceProvider'`

After that add new item to alias array in app.php

`'RajaOngkir' => 'Bcscoder\Rajaongkir\Facades\Profiler',`

### Example to use

#### Get City

```
$rs = RajaOngkir::getCity();

//that will show all the city
```

#### Get Cost

```
//$weight in gram

$results = RajaOngkir::getCost($origin_city_id,$destination_city_id,$weight,$courier);
```

#### tips
You can cache the get city result so it should not make request to server every time you want get the cost from your courier

For more api documentation please  [Visit rajaongkir](rajaongkir.com/dokumentasi)

