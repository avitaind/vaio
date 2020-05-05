<?php

use Faker\Generator as Faker;

$factory->define(App\Form::class, function (Faker $faker) {
    return [
        'email' => $faker->unique()->safeEmail,
        'q2_ans' => $faker->randomElement(['是', '否']),
        'q3_ans' => $faker->randomElement(['櫻花粉','深夜黑','珍珠白','月光銀','金櫚棕']),
        'q4_ans' => $faker->randomElement(['日本製造','外形設計','VAIO品牌','TRUE PERFORMANCE','防濺水鍵盤','其它']),
        'q5_ans' => $faker->randomElement(['香港','台灣','新加坡','馬來西亞','其他']),
    ];
});
