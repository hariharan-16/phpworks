<?php
    $city    = 'Coimbatore';
    $country = 'IND';
    $url     = 'http://api.openweathermap.org/data/2.5/forecast/daily?q=' . $city . ',' . $country . '&units=metric&cnt=7&lang=en&appid=c0c4a4b4047b97ebc5948ac9c48c0559';
    $json    = file_get_contents( $url );
    $data    = json_decode( $json, true );
    $data['city']['name'];
    // var_dump($data );

    foreach ( $data['list'] as $day => $value ) {
        echo 'Max temperature for day ' . $day
        . ' will be ' . $value['temp']['max'] . '';
        echo '<img src="http://openweathermap.org/img/w/' . $value['weather'][0]['icon'] . '.png"
                    class="weather-icon" /><br><br>';

    }
