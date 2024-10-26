<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('users.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/user', function () {
    return view('users.user-profile');
})->name('user')->middleware('auth');

Route::get('/my-listings', function () {
    return view('users.my-listings');
})->name('my-listings')->middleware('auth');

Route::get('/favorited-listings', function () {
    return view('users.favorited-listings');
})->name('favorited-listings')->middleware('auth');

Route::get('/add-property', function () {
    return view('users.add-property');
})->name('add-property')->middleware('auth');


Route::get('/payment-method', function () {
    return view('users.payment-method');
})->name('payment-method')->middleware('auth');

Route::get('/invoice', function () {
    return view('users.invoice');
})->name('invoice')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/properties-list-1', function () {
    return view('uneditfile.properties-list-1');
});

Route::get('/properties-half-map-1', function () {
    return view('uneditfile.properties-half-map-1'); 
});

Route::get('/agents-listing-grid', function () {
    return view('uneditfile.agents-listing-grid');
});

Route::get('/agencies-listing-1', function () {
    return view('uneditfile.agencies-listing-1'); 
});

    Route::get('/agent-details', function () {
        return view('uneditfile.agent-details');
    });
    
        Route::get('/agencies-details', function () {
        return view('uneditfile.agencies-details'); 
    });
    Route::get('/contact-us', function () {
        return view('uneditfile.contact-us'); 
    });

        Route::get('/properties-grid-3', function () {
        return view('uneditfile.properties-grid-3'); 
    });
    Route::get('/properties-full-grid-1', function () {
        return view('uneditfile.properties-full-grid-1'); 
    });

        Route::get('/shop-with-sidebar', function () {
        return view('uneditfile.shop-with-sidebar'); 
    });
    Route::get('/shop-full-page', function () {
        return view('uneditfile.shop-full-page'); 
    });

        Route::get('/shop-single', function () {
        return view('uneditfile.shop-single'); 
    });
    Route::get('/shop-checkout', function () {
        return view('uneditfile.shop-checkout'); 
    });

        Route::get('/shop-order', function () {
        return view('uneditfile.shop-order'); 
    });
    Route::get('/dashboard', function () {
        return view('uneditfile.dashboard'); 
    });

    // bbbbbb

    Route::get('/about', function () {
        return view('uneditfile.about'); 
    });

        Route::get('/faq', function () {
        return view('uneditfile.faq'); 
    });
    Route::get('/pricing-table', function () {
        return view('uneditfile.pricing-table'); 
    });

        Route::get('/page404', function () {
        return view('uneditfile.page404'); 
    });
    Route::get('/login', function () {
        return view('uneditfile.login'); 
    });

    // nnnn

    Route::get('/register', function () {
        return view('uneditfile.register'); 
    });

        Route::get('/coming-soon', function () {
        return view('uneditfile.coming-soon'); 
    });
    Route::get('/under-construction', function () {
        return view('uneditfile.under-construction'); 
    });

        Route::get('/ui-element', function () {
        return view('uneditfile.ui-element'); 
    });

    // hhhhhhhhhhhhhh

    Route::get('/blog-full-grid', function () {
        return view('uneditfile.blog-full-grid');
    });
    
        Route::get('/blog-grid-sidebar', function () {
        return view('uneditfile.blog-grid-sidebar'); 
    });
    
    Route::get('/blog-full-list', function () {
        return view('uneditfile.blog-full-list');
    });
    
        Route::get('/blog-list-sidebar', function () {
        return view('uneditfile.blog-list-sidebar'); 
    });
    
        Route::get('/blog-details', function () {
            return view('uneditfile.blog-details');
        });
        
                Route::get('/user-profile', function () {
            return view('uneditfile.user-profile'); 
        });
        Route::get('/add-property', function () {
            return view('uneditfile.add-property'); 
        });
    
                Route::get('/payment-method', function () {
            return view('uneditfile.payment-method'); 
        });
        Route::get('/change-password', function () {
            return view('uneditfile.change-password'); 
        });

        Route::get('/single-property-1', function () {
            return view('uneditfile.single-property-1'); 
        });

        Route::get('/single-property-2', function () {
            return view('uneditfile.single-property-2'); 
        });

        Route::get('/properties-details', function () {
            return view('uneditfile.properties-details'); 
        });

        Route::get('/properties-right-sidebar', function () {
            return view('uneditfile.properties-right-sidebar'); 
        });

        Route::get('/properties-full-list', function () {
            return view('uneditfile.properties-full-list'); 
        });

        Route::get('/blog', function () {
            return view('uneditfile.blog'); 
        });
    
        
require __DIR__.'/auth.php';
