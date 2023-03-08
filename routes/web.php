


<?php

use App\Models\Subscriber;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use Barryvdh\DomPDF\Facade as PDF;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/', function () {
  //  return Auth::user();
    return view('welcome');
});

Route::get('/subscribers', function () {
    $subscribers = Subscriber::latest()->get();
    return view('dashboard.sections.user.index',['subscribers'=>$subscribers]);
})->middleware('auth')->name('dashboard');

Route::get('/download',function(){
    //$users= User::get();
    //return (new FastExcel(Subscriber::all()))->download('file.xlsx');

   return (new FastExcel(Subscriber::all()))->download('subscribers.csv', function ($sub) {
        return [
            'Name' => $sub->name,
            'Phone' => $sub->phone,
            'طريقة الدفع' => $sub->payment_type,
            'تاريخ الحجز' => $sub->created_at->format("Y/M/D"),
        ];
    });
})->name('excel');

 Route::get('/pdf',function(){
  $sub = Subscriber::first();
  $pdf = app('dompdf.wrapper');
$pdf->loadView('pdf.report',['sub'=>$sub]);
  return $pdf->stream('pdf.report', array('Attachment' => 0));

})->name('pdf');
 


Route::post('/store',[SubscriberController::class,'store'])->name('store');
require __DIR__.'/auth.php';

