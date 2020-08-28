<?php
      use pieterboersma\Portfolio\Models\Item;
      use Illuminate\Support\Facades\Route;

      Route::get('/items', function(){
            $items = Item::all();
            $items->reverse();
            return $items;
      });
?>