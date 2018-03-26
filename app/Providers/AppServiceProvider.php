<?php

namespace App\Providers;

use App\Restaurant;
use App\Observers\RestaurantObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Address::observe(AddressObserver::class);
        // Dish::observe(DishObserver::class);
        Restaurant::observe(RestaurantObserver::class);
        // RestaurantPhoto::observe(RestaurantPhotoObserver::class);
        // RestaurantVote::observe(RestaurantVoteObserver::class);
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}
