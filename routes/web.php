 <?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComplaintController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('welcome');
});

// siswa isi data dan kirim pengaduan (publik)
Route ::get ('/student/create', [StudentController::class, 'create'])->name('student.create');
Route ::post('/student/store',[StudentController::class,  'store'])->name('student.store');
Route :: get ('/complaint/create', [ComplaintController::class, 'create'])->name('complaint.create');
Route :: post('/complaint/store', [ComplaintController::class, 'store'])->name('complaint.store');

// login/logout admin
Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login']);

});
Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route :: group([
    'prefix' => 'admin',
    'as'=> 'admin.',
    'middleware' => 'auth'
],function() {
    Route::get ('/dashboard', function () {
        return view('pages.dashboard');
    })->name('dashboard');

    Route::resource('admin', AdminController::class);

    Route::get ('/student', [StudentController::class, 'index'])->name('student.index');
    Route::get ('/student/{student}', [StudentController::class, 'show'])->name('student.show');
    Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy');

    Route::get ('/complaint', [ComplaintController::class, 'index'])->name('complaint.index');
    Route::get ('/complaint/{complaint}', [ComplaintController::class, 'show'])->name('complaint.show');
    Route::delete ('/complaint/{complaint}', [ComplaintController::class, 'destroy'])->name('complaint.destroy');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
