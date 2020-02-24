<?php

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

Route::get('/', 'DefaultController@index')->name('home');
Route::get('/home', 'DefaultController@index')->name('home');

Auth::routes();
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

Route::prefix('lipwa')->group(function () {
    Route::post('remit', 'DefaultController@remit');
    Route::any('validate', 'DefaultController@validation');
    Route::any('confirm', 'DefaultController@confirmation');
    Route::any('results', 'DefaultController@results');
    Route::any('register', 'DefaultController@register');
    Route::any('timeout', 'DefaultController@timeout');
    Route::any('reconcile', 'DefaultController@reconcile');
    Route::any('reverse', 'DefaultController@reverse');
    Route::any('status', 'DefaultController@status');
});

Route::get('confirm/{request}', 'DefaultController@confirm');

Route::get('search', 'SearchController')->name('search');

foreach (['admins', 'merchants', 'customers'] as $roler) {
    $role = substr($roler, 0, -1);
    Route::get($roler, function () use ($roler, $role) {
        $users = App\User::whereRole($role)->paginate(15);
        return view('users', ['records' => $users, 'title' => ucfirst($roler)]);
    })->name($role);

    Route::middleware(['auth', 'access'])->prefix($role)->group(function () use ($roler, $role) {
        Route::get('/', function () use ($roler, $role) {
            $users = App\User::whereRole($role)->paginate(15);
            return view('users', ['records' => $users, 'title' => ucfirst($roler)]);
        })->name($role);

        Route::resources(
            [
                'users' => 'UserController',
                'customers' => 'ClientController',
                'products' => 'ProductController',
                'invoices' => 'InvoiceController',
                'orders' => 'OrderController',
                'cart' => 'CartController',
                'payments' => 'PaymentController',
                'shops' => 'ShopController',
                'notifications' => 'ActivityController',
                'inbox' => 'MessageController',
                'contact' => 'QueryController',
                'docs' => 'DocumentController',
                'packages' => 'PackageController',
                'reports' => 'ReportController',
                'webhooks' => 'WebHookController',
                'settings' => 'SettingController',
            ]
        );

        Route::get('/{slug}', function ($slug) {
            if (Auth::check()) {
                if (view()->exists($slug)) {
                    return view($slug, ['title' => ucwords($slug)]);
                } else {
                    return view('profile', ['title' => ucwords($slug), 'user' => auth()->user()]);
                }
            } else {
                if (view()->exists($slug)) {
                    return view($slug, ['title' => ucwords($slug)]);
                } else {
                    abort(404);
                }
            }
        });

        Route::get('/{username}/{slug}', function ($username, $slug) {
            if (Auth::check()) {
                $user = App\User::whereUsername($username)->first();
                if (view()->exists($slug)) {
                    return view($slug, ['title' => ucwords($slug)]);
                } else {
                    return view('profile', ['title' => ucwords($slug), 'user' => $user]);
                }
            } else {
                if (view()->exists($slug)) {
                    return view($slug, ['title' => ucwords($slug)]);
                } else {
                    abort(404);
                }
            }
        });
    });
}


Route::get('manifest', function () {
    return array(
        "short_name"        => config('app.name', 'IQ'),
        "name"              => App\Setting::option('name', 'School IQ'),
        "theme_color"       => "#04a1f4",
        "background_color"  => "#ffffff",
        "orientation"       => "portrait",
        "start_url"         => "/?launcher=true",
        "display"           => "standalone",
        "icons"             => array(
            array(
                "src"     => "icons/ios/Icon-16.png",
                "sizes"   => "16x16",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/ios/Icon-32.png",
                "sizes"   => "32x32",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-36.png",
                "sizes"   => "36x36",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-48.png",
                "sizes"   => "48x48",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-72.png",
                "sizes"   => "72x72",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-144.png",
                "sizes"   => "144x144",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/ios/Icon-152.png",
                "sizes"   => "152x152",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-192.png",
                "sizes"   => "192x192",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/ios/Icon-256.png",
                "sizes"   => "256x256",
                "type"    => "image/png"
            ),
            array(
                "src"     => "icons/android/Icon-512.png",
                "sizes"   => "512x512",
                "type"    => "image/png"
            )
        ),
        "author"              => array(
            "name"              => "Osen Concepts",
            "website"           => "https://twitter.com/osenco",
            "github"            => "https://github.com/osenco"
        ),
        "gcm_sender_id"      => App\Setting::option('gcm', '571712848651')
    );
})->name('manifest');

Route::get('/{slug}', function ($slug) {
    if (view()->exists($slug)) {
        return view($slug, ['title' => ucwords($slug)]);
    } else {
        abort(404);
    }
});
