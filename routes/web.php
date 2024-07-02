<?php

use App\Livewire\Auth\Login;
use App\Livewire\Client\Faqs;
use App\Livewire\Client\About;
use App\Livewire\Auth\Register;
use App\Livewire\Admin\Customer;
use App\Livewire\Client\Contact;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\LoginAdmin;
use App\Livewire\Client\Estimate;
use App\Livewire\Client\Homepage;
use App\Livewire\Client\Projects;
use App\Livewire\Admin\Project\Team;
use App\Livewire\Client\ProjectView;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Employee\Account;
use App\Livewire\Admin\Project\Division;
use App\Livewire\Admin\Project\Progress;
use App\Livewire\Admin\Employee\Position;
use App\Livewire\Admin\Project\ProjectList;

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


Route::prefix('admin')->group(function() {
    // Routes within this group will have the 'admin' prefix
    Route::get('auth/login', LoginAdmin::class)->name('admin.login');
    Route::get('dashboard', Dashboard::class)->name('admin.dashboard');
    Route::get('customer', Customer::class)->name('admin.customer');
    Route::get('employee/position',Position::class)->name('admin.employee.position');
    Route::get('employee/account',Account::class)->name('admin.employee.account');

    Route::get('project/division',Division::class)->name('admin.project.division');
    Route::get('project/team',Team::class)->name('admin.project.team');
    Route::get('project/list',ProjectList::class)->name('admin.project.list');
    Route::get('project/progress/{project_id}',Progress::class)->name('admin.project.progress');
});

    Route::get('/',Homepage::class)->name('client.homepage');
    Route::get('/projects',Projects::class)->name('client.project');
    Route::get('/project/{id}',ProjectView::class)->name('client.project.view');
    Route::get('/faqs',Faqs::class)->name('client.faqs');
    Route::get('/about',About::class)->name('client.about');
    Route::get('/contact',Contact::class)->name('client.contact');
    Route::get('/login',Login::class)->name('client.login');
    Route::get('/register',Register::class)->name('client.register');
    Route::get('/estimate',Estimate::class)->name('client.estimate');

