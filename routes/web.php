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

Route::get('/', function () {
   return view('welcome');
});

Route::get('/user-registration',[
    'uses'=>'UserRegistrationController@showRegistrationForm',
    'as'=>'user-registration'

])->middleware('auth');

Route::post('/user-registration',[
    'uses'=>'UserRegistrationController@userSave',
    'as'=>'user-save'

])->middleware('auth');

Route::get('/user-list',[
    'uses'=>'UserRegistrationController@userList',
    'as'=>'user-list'

])->middleware('auth');

Route::get('/user-profile/{userId}',[
    'uses'=>'UserRegistrationController@userProfile',
    'as'=>'user-profile'

])->middleware('auth');

Route::get('/change-user-info/{id}',[
    'uses'=>'UserRegistrationController@changeUserInfo',
    'as'=>'change-user-info'

])->middleware('auth');

Route::post('/user-info-update',[
    'uses' =>'UserRegistrationController@userInfoUpdate',
    'as'=>'user-info-update'

])->middleware('auth');

Route::get('/change-user-avatar/{id}',[
    'uses'=>'UserRegistrationController@changeUserAvatar',
    'as'=>'change-user-avatar'

])->middleware('auth');

Route::post('/update-user-photo',[
    'uses'=>'UserRegistrationController@updateUserPhoto',
    'as'=>'update-user-photo'

])->middleware('auth');

Route::get('/change-user-password/{id}',[
    'uses'=>'UserRegistrationController@changeUserPassword',
    'as'=>'change-user-password'

])->middleware('auth');

Route::post('/user-password-update',[
    'uses'=>'UserRegistrationController@userPasswordUpdate',
    'as'=>'user-password-update'

])->middleware('auth');

//Genearal Section

Route::get('/add-header-footer',[
    'uses'=>'HomePageController@addHeaderFooterForm',
    'as'=> 'add-header-footer'
]);

Route::post('/add-header-footer',[
    'uses'=>'HomePageController@headerAndFooterSave',
    'as'=> 'header-and-footer-save'
]);

Route::get('/manage-header-footer/{id}',[
    'uses'=>'HomePageController@manageHeaderFooter',
    'as'=> 'manage-header-footer'
]);

Route::post('/header-and-footer-update',[
    'uses'=>'HomePageController@headerAndFooterUpdate',
    'as'=> 'header-and-footer-update'
]);

//Slider Section start
Route::get('/add-slide',[
    'uses'=>'SliderController@addSlide',
    'as'=> 'add-slide'
]);

Route::post('/upload-slide',[
    'uses'=>'SliderController@uploadSlide',
    'as'=> 'upload-slide'
]);


Route::get('/manage-slide',[
    'uses'=>'SliderController@manageSlide',
    'as'=> 'manage-slide'
]);

Route::get('/slide-unpublished/{id}',[
    'uses'=>'SliderController@slideUnpublished',
    'as'=> 'slide-unpublished'
]);

Route::get('/slide-published/{id}',[
    'uses'=>'SliderController@slidePublished',
    'as'=> 'slide-published'
]);

Route::get('/photo-gallery',[
    'uses'=>'SliderController@photoGallery',
    'as'=> 'photo-gallery'
]);


Route::get('/slide-edit/{id}',[
    'uses'=>'SliderController@slideEdit',
    'as'=> 'slide-edit'
]);


Route::post('/update-slide',[
    'uses'=>'SliderController@updateSlide',
    'as'=> 'update-slide'
]);

Route::get('/slide-delete/{id}',[
    'uses'=>'SliderController@slideDelete',
    'as'=> 'slide-delete'
]);


//Slider Section end


// School Management Start

Route::get('/add-school',[
    'uses'=>'schoolManagementController@addSchool',
    'as'=> 'add-school'
]);

Route::post('/school/add',[
    'uses'=>'schoolManagementController@schoolSave',
    'as'=> 'school-save'
]);

Route::get('/school/list',[
    'uses'=>'schoolManagementController@schoolList',
    'as'=> 'school-list'
]);

Route::get('/school/unpublished/{id}',[
    'uses'=>'schoolManagementController@schoolUnpublished',
    'as'=> 'school-unpublished'
]);

Route::get('/school/published/{id}',[
    'uses'=>'schoolManagementController@schoolPublished',
    'as'=> 'school-published'
]);

Route::get('/school/edit/{id}',[
    'uses'=>'schoolManagementController@schooEditform',
    'as'=> 'school-edit'
]);

Route::post('/school/update',[
    'uses'=>'schoolManagementController@schoolUpdate',
    'as'=> 'school-update'
]);

Route::get('/school/delete/{id}',[
    'uses'=>'schoolManagementController@schoolDelete',
    'as'=> 'school-delete'
]);

//School Management end

//Class Management Start

Route::get('/add-class',[
    'uses'=>'ClassManagementController@addClassform',
    'as'=> 'add-class'
]);

Route::post('/class-save',[
    'uses'=>'ClassManagementController@classSave',
    'as'=> 'class-save'
]);

Route::get('/class-list',[
    'uses'=>'ClassManagementController@classList',
    'as'=> 'class-list'
]);

Route::get('/class/unpublished/{id}',[
    'uses'=>'ClassManagementController@classUnpublished',
    'as'=> 'class-unpublished'
]);

Route::get('/class/published/{id}',[
    'uses'=>'ClassManagementController@classPublished',
    'as'=> 'class-published'
]);

Route::get('/class/edit/{id}',[
    'uses'=>'ClassManagementController@classEditform',
    'as'=> 'class-edit'
]);

Route::post('/class/update',[
    'uses'=>'ClassManagementController@classUpdate',
    'as'=> 'class-update'
]);

Route::get('/class/delete/{id}',[
    'uses'=>'ClassManagementController@classDelete',
    'as'=> 'class-delete'
]);




//Class Management end


//Batch Management start

Route::get('/add/batch',[
    'uses'=>'BatchManagementController@addBatch',
    'as'=> 'add-batch'
]);
Route::get('/class-wise-student-type',[
    'uses'=>'BatchManagementController@classWiseStudentType',
    'as'=> 'class-wise-student-type'
]);

Route::post('/add/batch',[
    'uses'=>'BatchManagementController@batchSave',
    'as'=> 'batch-save'
]);

Route::get('batch/list',[
    'uses'=>'BatchManagementController@batchList',
    'as'=> 'batch-list'
]);

Route::get('batch-list-by-ajax',[
    'uses'=>'BatchManagementController@batchListByAjax',
    'as'=> 'batch-list-by-ajax'
]);


//Batch Management end


//Batch student type start
Route::get('student-type',[
    'uses'=>'StudentTypeController@index',
    'as'=> 'student-type'
]);

Route::post('student-type-add',[
    'uses'=>'StudentTypeController@studentTypeAdd',
    'as'=> 'student-type-add'
]);

Route::get('student-type-list',[
    'uses'=>'StudentTypeController@studentTypeList',
    'as'=> 'student-type-list'
]);


Route::get('student-type-unpublished',[
    'uses'=>'StudentTypeController@studentTypeUnpublished',
    'as'=> 'student-type-unpublished'
]);
Route::get('student-type-published',[
    'uses'=>'StudentTypeController@studentTypePublished',
    'as'=> 'student-type-published'
]);
Route::post('student-type-update',[
    'uses'=>'StudentTypeController@studentTypeUpdate',
    'as'=> 'student-type-update'
]);

Route::get('student-type-delete',[
    'uses'=>'StudentTypeController@studentTypeDelete',
    'as'=> 'student-type-delete'
]);


//Batch student type end


//Student Management Start
Route::get('student/registration-form',[
    'uses'=>'StudentController@studentRegistrationForm',
    'as'=> 'student-registration-form'
]);

Route::get('bring-student-type',[
    'uses'=>'StudentController@bringStudentType',
    'as'=> 'bring-student-type'
]);

Route::get('/batch-roll-form',[
    'uses'=>'StudentController@batchRollForm',
    'as'=> 'batch-roll-form'
]);

Route::post('/student/registration-form',[
    'uses'=>'StudentController@studentSave',
    'as'=> 'student-save'
]);

Route::get('/student/all-student-list',[
    'uses'=>'StudentController@allStudentList',
    'as'=> 'all-student-list'
]);

Route::get('/student/class-selection-form',[
    'uses'=>'StudentController@classSelectionForm',
    'as'=> 'class-selection-form'
]);

Route::get('/student/class-wise-student-type',[
    'uses'=>'StudentController@classWiseStudentType',
    'as'=> 'class-wise-student-type'
]);

//Student Management end





Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');
