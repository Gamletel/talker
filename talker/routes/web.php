<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\RealtimeMessage::class);

Route::get('/chat', function (){
    return view('chat');
});
