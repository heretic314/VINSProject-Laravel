<?php

use Faker\Generator as Faker;

$factory->define(App\VentilatorChargeSheet::class, function (Faker $faker) {
    return [

      'name'=> $faker->word,
      'age'=> $faker->word,
      'sex'=> $faker->word,
      'bed_no'=> $faker->word,
      'time'=> $faker->time,
      'date'=> $faker->date,
      'time_slot01'=> $faker->word,
      'time_slot02'=> $faker->word,
      'time_slot03'=> $faker->word,
      'time_slot04'=> $faker->word,
      'mode'=> $faker->word,
      'tidal_volume'=> $faker->word,
      'freq_controlled'=> $faker->word,
      'freq-simv'=> $faker->word,
      'pressure_control'=> $faker->word,
      'pressure_support'=> $faker->word,
      'peep_cpap'=> $faker->word,
      'flo2'=> $faker->word,
      'triggering'=> $faker->word,
      'inp_tv'=> $faker->word,
      'exp_tv'=> $faker->word,
      'exp_mv'=> $faker->word,
      'measured_freq'=> $faker->word,
      'peak_pressure'=> $faker->word,
      'mean_pressure'=>$faker->word,
      'end_exp'=> $faker->word,
      'pressure_low'=> $faker->word,
      'volume_high_mv'=> $faker->word,
      'volume_low_mv'=> $faker->word,
      'gas_supply'=> $faker->word,
      'power_failure'=> $faker->word,
      'position'=> $faker->word,
      'et_tstomy'=> $faker->word,
      'oral'=> $faker->word,
      'chest_physio'=> $faker->word,
      'abg'=> $faker->word,
      'x-xray_chest'=> $faker->word,
      'catheter_mount'=> $faker->word,
      'filter'=> $faker->word,
      'ventilator_circuit'=> $faker->word,
      'et_tube'=> $faker->word,

    ];
});
