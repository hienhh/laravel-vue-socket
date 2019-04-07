<?php

use Faker\Generator as Faker;
use App\Models\User;
use App\Models\Room;
use App\Models\Message;

$factory->define(Message::class, function (Faker $faker) {
    return [
        'room_id' => function () {
            return factory(Room::class)->create()->id;
        },
        'user_id' => function () {
            return factory(User::class)->create()->id;
        },
        'status' => 1,
        'content' => $faker->sentence
    ];
});
