<?php

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\PasswordResetController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ChangeForgotPasswordControllerController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::post('register', [AuthController::class, 'register'])
//     ->name('register');

// Route::post('login', [AuthController::class, 'login'])
//     ->name('login');





Route::group(['middleware' => 'api'], function ($router) {

    // Auth
    require __DIR__ . '/api_routes/auth.php';

    // users
    require __DIR__ . '/api_routes/users.php';
    
    // roles
    require __DIR__ . '/api_routes/roles.php';
    
    // directory
    require __DIR__ . '/api_routes/directory.php';
    
    // afiliaciones
    require __DIR__ . '/api_routes/afiliaciones.php';
    
    // aliados
    require __DIR__ . '/api_routes/aliados.php';
    
    // bancuadrados
    require __DIR__ . '/api_routes/bancuadrados.php';
    
    // banhorizontal
    require __DIR__ . '/api_routes/banhorizontal.php';
    
    // banvertical
    require __DIR__ . '/api_routes/banvertical.php';
    
    // blog
    require __DIR__ . '/api_routes/blog.php';
    
    
    // cargo
    require __DIR__ . '/api_routes/cargo.php';
    
    
    // ceo
    require __DIR__ . '/api_routes/ceo.php';
    
    // dirregional
    require __DIR__ . '/api_routes/dirregional.php';
    
    // setting
    require __DIR__ . '/api_routes/setting.php';
    
    // documento
    require __DIR__ . '/api_routes/documento.php';
    
    // formacions
    require __DIR__ . '/api_routes/formacions.php';
    
    // fotoceo
    require __DIR__ . '/api_routes/fotoceo.php';
    
    // galeria
    require __DIR__ . '/api_routes/galeria.php';
    
    // areapaciente
    require __DIR__ . '/api_routes/areapaciente.php';
    
    // revistas
    require __DIR__ . '/api_routes/revistas.php';
    
    // sliders
    require __DIR__ . '/api_routes/sliders.php';

    // timelines
    require __DIR__ . '/api_routes/timelines.php';
    




    //comandos desde la url del backend

    Route::get('/cache', function () {
        Artisan::call('cache:clear');
        return "Cache";
    });

    Route::get('/optimize', function () {
        Artisan::call('optimize:clear');
        return "Optimización de Laravel";
    });

    Route::get('/storage-link', function () {
        Artisan::call('storage:link');
        return "Storage Link";
    });


    Route::get('/migrate-seed', function () {
        Artisan::call('migrate:refresh --seed');
        return "Migrate seed";
    });
    
    Route::get('/send-notification', function () {
        Artisan::call('command:notification-appointments');
        return "Send All notifications";
    });
    
    Route::get('/send-whatsapp', function () {
        Artisan::call('command:notification-appointment-whatsapp');
        return "Send All whatsapp";
    });




    //rutas libres


    // Route::get('/categories', [CategoryController::class, 'index'])
    //     ->name('category.index');


});
