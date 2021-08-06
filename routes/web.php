<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controlador;
use App\Http\Controllers\userController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactNosController;

use App\Models\ModelSite;
use App\Models\User;

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
/*
Route::get('/', function () {
    return view('index');
})->name('home');
*/
Route::get('/start',[controlador::class, 'index']);

Route::get('/sobre', function() {
    return view('about');
})->name('about');

Route::get('dados', function(){
        return view('carrega');
})->name('dados');

Route::get('geral', function(){
    $site=ModelSite::all();
    return view('geral', compact('site'));

})->name('paginageral');

Route::get('i+mpo+rta+cao', function(){
        return view('importacao');

})->name('Importa&Exportacao');

Route::get('informacao', function(){
    $site=ModelSite::all();
    return view('info', compact('site'));

})->name('DadosDaBD');

Route::get('~Con+ta~bi+lidade', function(){

return view('contabilidade');

})->name('SercicosDeContabilidade');

Route::get('tics', function(){

   
    return view('tics');

})->name('tics');

Route::get('biblioteca', function(){

    $site=ModelSite::all();
    return view('biblioteca');

})->name('biblioteca');

Route::get('PlaYGame', function(){
        return view('play');
})->name('playNow');

Route::get('manuais', function(){
    $site=ModelSite::all();
    return view('livros', compact('site'));
})->name('Leitura');

Route::get('team', function(){
    
    return view('team');
})->name('a+equipe~ImpoSerC');

//Route::resource('/authentication', UserController::class);
////Route::get('authentication', function(){
  //  return view('auth');
//});


Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
    //Route::post('/logout',[UserController::class,'logout'])->name('logout');
});
//Route::get('/start', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
    Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');


    Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
    Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
    Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
   
});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
Route::get('profile',[UserController::class,'profile'])->name('user.profile');
Route::get('settings',[UserController::class,'settings'])->name('user.settings');

});






//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
/*

Route::prefix('user')->name('user.')->group(function(){
  
    Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
    });

    Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
          Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
 
          Route::get('profile',[AdminController::class,'profile'])->name('admin.profile');
          Route::get('settings',[AdminController::class,'settings'])->name('admin.settings');
  
          Route::post('update-profile-info',[AdminController::class,'updateInfo'])->name('adminUpdateInfo');
        Route::post('change-profile-picture',[AdminController::class,'updatePicture'])->name('adminPictureUpdate');
        Route::post('change-password',[AdminController::class,'changePassword'])->name('adminChangePassword');
       
 
        });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
  
  
    });

});

Route::prefix('doctor')->name('doctor.')->group(function(){

       Route::middleware(['guest:doctor','PreventBackHistory'])->group(function(){
            Route::view('/login','dashboard.doctor.login')->name('login');
            Route::view('/register','dashboard.doctor.register')->name('register');
            Route::post('/create',[DoctorController::class,'create'])->name('create');
            Route::post('/check',[DoctorController::class,'check'])->name('check');
       });

       Route::middleware(['auth:doctor','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.doctor.home')->name('home');
            Route::post('logout',[DoctorController::class,'logout'])->name('logout');
       });

});

Route::get('contact',[ContactNosController::class, 'index']);
Route::post('sendMail',[ContactNosController::class,'sendMyData'])->name('sendMyMail');
*/
