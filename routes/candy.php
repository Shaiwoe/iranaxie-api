<?php

use App\Candy\Frontend\Middleware\IdentityMiddleware;
use App\Candy\Frontend\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::namespace('App\Candy')->prefix('candy')->group(function() {

    Route::namespace('Frontend')->prefix('frontend')->group(function() {

        Route::namespace('Auth')->prefix('auth')->group(function() {

            Route::namespace('Phone')->prefix('phone')->group(function() {

                Route::post('login', 'PhoneController@login');
                Route::post('verify', 'PhoneController@verify');
            });
        });

        Route::namespace('Common')->prefix('common')->group(function() {

            Route::get('banks', 'CommonController@banks');
            Route::get('coins', 'CommonController@coins');
            Route::get('coin/{id}', 'CommonController@coin');
            Route::get('networks/{id}', 'CommonController@networks');
            Route::get('network/{id}', 'CommonController@network');
            Route::get('wallets/{id}', 'CommonController@wallets');
            Route::get('wallet/{id}', 'CommonController@wallet');

            Route::middleware(UserMiddleware::class)->group(function() {

                Route::namespace('User')->prefix('user')->group(function() {

                    Route::get('wallets/{id}', 'UserController@wallets');
                    Route::get('wallet/{id}', 'UserController@wallet');
                    Route::get('cards', 'UserController@cards');

                    Route::namespace('Profile')->prefix('profile')->group(function() {

                        Route::get('show', 'ProfileController@show');
                        Route::post('create', 'ProfileController@create');
                    });

                    Route::namespace('Graph')->prefix('graph')->group(function() {

                        Route::get('orders', 'GraphController@orders');
                    });
                });
            });
        });

        Route::namespace('Game')->prefix('game')->group(function() {

            Route::get('cards', 'GameController@cards');
        });

        Route::namespace('Payment')->prefix('payment')->group(function() {

            Route::namespace('Exchange')->prefix('exchange')->group(function() {

                Route::get('purchase/{id}', 'ZibalController@purchase');
                Route::get('complete/{id}', 'ZibalController@complete');
            });
        });

        Route::middleware(UserMiddleware::class)->group(function() {

            Route::namespace('Card')->prefix('card')->group(function() {

                Route::get('index', 'CardController@index');
                Route::get('show/{id}', 'CardController@show');
                Route::post('create', 'CardController@create');
            });

            Route::namespace('Account')->prefix('account')->group(function() {

                Route::get('index', 'AccountController@index');
                Route::get('show/{id}', 'AccountController@show');
                Route::post('create', 'AccountController@create');

                Route::namespace('Graph')->prefix('graph')->group(function() {

                    Route::get('dailySlp/{id}', 'GraphController@dailySlp');
                    Route::get('monthlySlp/{id}', 'GraphController@monthlySlp');

                    Route::get('dailyRank/{id}', 'GraphController@dailyRank');
                    Route::get('monthlyRank/{id}', 'GraphController@monthlyRank');
                });
            });

            Route::namespace('Wallet')->prefix('wallet')->group(function() {

                Route::get('index', 'WalletController@index');
                Route::get('show/{id}', 'WalletController@show');
                Route::post('create', 'WalletController@create');
            });

            Route::namespace('Exchange')->prefix('exchange')->group(function() {

                Route::get('index', 'ExchangeController@index');

                Route::middleware(IdentityMiddleware::class)->group(function() {

                    Route::post('buy', 'ExchangeController@buy');
                    Route::post('sell', 'ExchangeController@sell');
                });
            });
        });
    });
});
