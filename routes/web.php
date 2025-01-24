<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {

//    //   return view('welcome');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/sistema', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');

   
   Route::get('reportes/{survey_id}',[App\Http\Controllers\ReportController::class, 'index']);

 

Route::get('encuesta/{survey_id}',[App\Http\Controllers\SurveyClientController::class, 'index']);




   Route::resource("Encuestas_respuestas", App\Http\Controllers\CategoryController::class);
   Route::post('survey_clientStore',[App\Http\Controllers\SurveyClientController::class, 'store']);
   Route::post('survey_clientEdit',[App\Http\Controllers\SurveyClientController::class, 'edit']);
   Route::post('survey_clientUpdate',[App\Http\Controllers\SurveyClientController::class, 'update']);
   Route::post('survey_clientDestroy',[App\Http\Controllers\SurveyClientController::class, 'destroy']);
   Route::post('survey_clientShow',[App\Http\Controllers\SurveyClientController::class, 'show']);

   Route::post('clientStore',[App\Http\Controllers\ClientController::class, 'store'])->middleware('throttle:100,1440');




   Route::resource("seleccion", App\Http\Controllers\SelectionController::class);
   Route::post('selectionStore',[App\Http\Controllers\SelectionController::class, 'store']);
   Route::post('selectionEdit',[App\Http\Controllers\SelectionController::class, 'edit']);
   Route::post('selectionUpdate',[App\Http\Controllers\SelectionController::class, 'update']);
   Route::post('selectionDestroy',[App\Http\Controllers\SelectionController::class, 'destroy']);


//Route::resource("seleccion", App\Http\Controllers\SelectionController::class);
   Route::post('selection_detailStore',[App\Http\Controllers\SelectionDetailController::class, 'store']);
   Route::post('selection_detailEdit',[App\Http\Controllers\SelectionDetailController::class, 'edit']);
   Route::post('selection_detailUpdate',[App\Http\Controllers\SelectionDetailController::class, 'update']);
   Route::post('selection_detailDestroy',[App\Http\Controllers\SelectionDetailController::class, 'destroy']);






   Route::post('associateShow',[App\Http\Controllers\surveyClientController::class, 'associate_show']);




Route::get('/perfil', [App\Http\Controllers\HomeController::class, 'sistema'])->name('sistema');
/////////////////////////////////////////

Route::group(['middleware' => ['role:Administrador']], function () {



    
    Route::get('ajustes',[App\Http\Controllers\SettingController::class, 'index']);
    Route::post('settingStore',[App\Http\Controllers\SettingController::class, 'store']);
    Route::post('settingEdit',[App\Http\Controllers\SettingController::class, 'edit']);
    Route::post('settingUpdate',[App\Http\Controllers\SettingController::class, 'update']);
    Route::get('settingDestroy',[App\Http\Controllers\SettingController::class, 'destroy']);
    Route::post('settingShow',[App\Http\Controllers\SettingController::class, 'show']);





       Route::post('reportDestroy',[App\Http\Controllers\ReportController::class, 'destroy']);
        Route::post('reportEdit',[App\Http\Controllers\ReportController::class, 'edit']);

        Route::post('reportUpdate',[App\Http\Controllers\ReportController::class, 'update']);
    //
   Route::resource("categorias", App\Http\Controllers\CategoryController::class);
   Route::post('categoryStore',[App\Http\Controllers\CategoryController::class, 'store']);
   Route::post('categoryEdit',[App\Http\Controllers\CategoryController::class, 'edit']);
   Route::post('categoryUpdate',[App\Http\Controllers\CategoryController::class, 'update']);
   Route::post('categoryDestroy',[App\Http\Controllers\CategoryController::class, 'destroy']);
   Route::post('categoryShow',[App\Http\Controllers\CategoryController::class, 'show']);


   Route::post('category_productDestroy',"ProductController@category_productDestroy");
   Route::post('category_productStore',"ProductController@category_productStore");
   Route::post('category_productEdit',"ProductController@category_productEdit");





   Route::resource('usuarios', App\Http\Controllers\UserController::class);
   Route::post('userCreate', 'UserController@create');
   Route::post('userStore', [App\Http\Controllers\UserController::class, 'store']);
   Route::post('userDestroy',[App\Http\Controllers\UserController::class, 'destroy']);
   Route::post('userEdit', [App\Http\Controllers\UserController::class, 'edit']);
   Route::post('userUpdate', [App\Http\Controllers\UserController::class, 'update']);
   Route::post('userShow', [App\Http\Controllers\UserController::class, 'show']);
   Route::post('userUpdateProfile', [App\Http\Controllers\UserController::class, 'updateProfile']);

   Route::post('userRoleStore',[App\Http\Controllers\UserController::class, 'userRoleStore']);
   Route::post('userRoleEdit',[App\Http\Controllers\UserController::class, 'userRoleEdit']);
   Route::post('userRoleDestroy',[App\Http\Controllers\UserController::class, 'userRoleDestroy']);

   Route::resource("roles", App\Http\Controllers\RoleController::class);
   Route::post('roleStore',[App\Http\Controllers\RoleController::class, 'store']);
   Route::post('roleEdit',[App\Http\Controllers\RoleController::class, 'edit']);
   Route::post('roleUpdate',[App\Http\Controllers\RoleController::class, 'update']);
   Route::post('roleDestroy',[App\Http\Controllers\RoleController::class, 'destroy']);
   Route::post('roleShow',[App\Http\Controllers\RoleController::class, 'show']);

   Route::post('rolePermissionStore',[App\Http\Controllers\RolePermissionController::class,'store']);
   Route::post('rolePermissionEdit',[App\Http\Controllers\RolePermissionController::class,'edit']);
   Route::post('rolePermissionDestroy',[App\Http\Controllers\RolePermissionController::class,'destroy']);




  Route::resource("tipos", App\Http\Controllers\TypeController::class);
   Route::post('typeStore',[App\Http\Controllers\TypeController::class, 'store']);
   Route::post('typeEdit',[App\Http\Controllers\TypeController::class, 'edit']);
   Route::post('typeUpdate',[App\Http\Controllers\TypeController::class, 'update']);
   Route::post('typeDestroy',[App\Http\Controllers\TypeController::class, 'destroy']);
   Route::post('typeShow',[App\Http\Controllers\TypeController::class, 'show']);


  Route::resource("encuestas", App\Http\Controllers\SurveyController::class);
   Route::post('surveyStore',[App\Http\Controllers\SurveyController::class, 'store']);
   Route::post('surveyEdit',[App\Http\Controllers\SurveyController::class, 'edit']);
   Route::post('surveyUpdate',[App\Http\Controllers\SurveyController::class, 'update']);
   Route::post('surveyDestroy',[App\Http\Controllers\SurveyController::class, 'destroy']);
   
   Route::post('surveyNotify',[App\Http\Controllers\SurveyController::class, 'notify']);


   Route::post('survey_detail',[App\Http\Controllers\SurveyController::class, 'survey_detail']);

   Route::resource("encuestas_mantenimiento", App\Http\Controllers\SurveyDetailController::class);
 Route::post('survey_detailStore',[App\Http\Controllers\SurveyDetailController::class, 'store']);

   Route::post('survey_detailStore',[App\Http\Controllers\SurveyDetailController::class, 'store']);
   Route::post('survey_detailEdit',[App\Http\Controllers\SurveyDetailController::class, 'edit']);
   Route::post('survey_detailUpdate',[App\Http\Controllers\SurveyDetailController::class, 'update']);
   Route::post('survey_detailDestroy',[App\Http\Controllers\SurveyDetailController::class, 'destroy']);


   Route::get('recursos', [App\Http\Controllers\ResourceController::class, 'index']);
   Route::post('ResourceStore', [App\Http\Controllers\ResourceController::class, 'store']);
   Route::post('ResourceDestroy', [App\Http\Controllers\ResourceController::class, 'destroy']);
   Route::post('ResourceEdit', [App\Http\Controllers\ResourceController::class, 'edit']);
   Route::post('ResourceUpdate', [App\Http\Controllers\ResourceController::class, 'update']);
 
   Route::post('ResourceDestroyAll', [App\Http\Controllers\ResourceController::class, 'destroyAll']);
});
Route::group(['middleware' => ['role:Postulante']], function () {
Route::get('inscripcion/{survey_id}',[App\Http\Controllers\SurveyClientController::class, 'inscription']);
});

//// social media
   Route::post('socialMediaShare',[App\Http\Controllers\SocialMediaController::class, 'share']);

//




    Route::get('certificaciones/{registry_detail_id}/{language}/{id}',[App\Http\Controllers\CertificationController::class, 'report']);

   Route::post('certificationGenerate',[App\Http\Controllers\RegistryDetailController::class, 'certificationGenerate']);
    //  Route::post('certificationOpen',[App\Http\Controllers\RegistryDetailController::class, 'certificationGenerate']);

    //obtener registry_detail_id para poder generar el certificado despuees
         Route::resource("certificados-mantenimiento", App\Http\Controllers\CertificationController::class);

 Route::resource("certificados", App\Http\Controllers\CertificateController::class);


 Route::get('logout',[\App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('auth/google', [\App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle']);
 
use App\Models\User;


Route::get('/auth/google/callback', function () {
   try {
            //create a user using socialite driver google
            $user = Socialite::driver('google')->user();
            // if the user exits, use that user and login
            $finduser = User::where('email', $user->email)->first();
            if($finduser){
                //if the user exists, login and show dashboard
                Auth::login($finduser);
                return redirect('/home');
        }else{
           // return redirect('/login');

                //user is not yet created, so create first
                $newUser = User::create([
                    'names' => $user->name,
                     'firstname' => '',
                      'lastname' => '',
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'photo'=> $user->avatar,
                    'sex' => $user->user['gender'] ?? '', // Acceder al género si está disponible
                    'password' => Hash::make('postulante')
                ]);
              
                $newUser->save();
                //login as the new user
                Auth::login($newUser);
                $newUser->assignRole('Postulante');
                //
              //  $newUser->createToken(request()->device_name)->plainTextToken ;
                // go to the dashboard
                return redirect('/home');
            }
            //catch exceptions
        } catch (Exception $e) {
            dd($e->getMessage());
        }

});

