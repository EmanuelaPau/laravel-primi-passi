<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $data = [
        'cards' => [
            [
                'name' => 'Gina',
                'surname' => 'Ginetti',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/17064756/media/18c3f5697d0a0df8a0bd3c677169ea3f.jpg?resize=1600x1200&vertical=center'
            ],
            [
                'name' => 'Pino',
                'surname' => 'Pinetti',
                'img' => 'https://cdn.dribbble.com/userupload/4248921/file/original-e4c4062cb4c3967576d9f9d68f017fff.jpg?resize=2048x1536'
            ],
            [
                'name' => 'Paola',
                'surname' => 'Paolini',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/17539686/media/7b8209c003fee4804c09f9c7ae9e661a.jpg?resize=1600x1200&vertical=center'
            ],
            [
                'name' => 'Michele',
                'surname' => 'Michetti',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/6408899/pika-nap-drib-sm.gif'
            ],
            [
                'name' => 'Piero',
                'surname' => 'Angela',
                'img' => 'https://cdn.dribbble.com/users/1186561/screenshots/16961522/media/0666b81f0ea67849cd9620ff04041128.jpg?resize=1600x1200&vertical=center'
            ],
            [
                'name' => 'Michele',
                'surname' => 'Michetti',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/5960269/media/3b20eaab39ce2b97a9995d5ef3a434f4.gif'
            ],
            [
                'name' => 'Emma',
                'surname' => 'Bonino',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/6014153/media/059d98d17fe52c42dce7f6c31457e141.jpg?resize=1600x1200&vertical=center'
            ],
            [
                'name' => 'Cristiano',
                'surname' => 'Mmalgioglio',
                'img' => 'https://cdn.dribbble.com/users/1413398/screenshots/13641576/media/db0bc7f7bb94cf884b5aac9a2fa89993.jpg?resize=800x600&vertical=center'
            ],
            [
                'name' => 'Barbara',
                'surname' => 'D\'Orso',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/14524591/media/a8f087c73d9d420830f6149894ea9332.jpg?resize=1600x1200&vertical=center'
            ],

            [
                'name' => 'Michele',
                'surname' => 'Michetti',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/5787678/media/112947bca37bc43d0d55b41f38849298.gif'
            ],

            [
                'name' => 'Gigia',
                'surname' => 'Topa',
                'img' => 'https://cdn.dribbble.com/userupload/3075541/file/original-9da79affd109c93626a309f07693647d.png?resize=1504x1128'
            ],

            [
                'name' => 'Gin',
                'surname' => 'Tonica',
                'img' => 'https://cdn.dribbble.com/users/112047/screenshots/14785033/media/3a8cea9df78eb0b707373ee2ea152dcb.jpg?resize=1600x1200&vertical=center'
            ],
        ]
    ];
    return view('home', $data);
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/my-profile', function () {
    return view('my-profile');
})->name('my-profile');