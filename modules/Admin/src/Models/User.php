<?php

namespace Modules\Admin\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\Admin\Models\Group;
use Modules\Admin\Models\Position;
use Auth;
<<<<<<< HEAD
use URL;
=======
>>>>>>> 749be5ae7e09c2da741080e084a373208e43fcf9

class User extends Authenticatable {

   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     /**
     * The primary key used by the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
                            'first_name','last_name','about_me','profile_image',
=======
                            'name',
>>>>>>> 749be5ae7e09c2da741080e084a373208e43fcf9
                            'phone',
                            'mobile',
                            'email', 
                            'role_type',
<<<<<<< HEAD
                            'password',
                            'status',
                            'tagLine',
                            'address',
                            'birthday',
                            'skills',
                            'modeOfreach',
                            'language',
                            'qualification',
                            'workExperience',
                            'percentageCompletion',
                            'rating',
                            'companyName',
                            'position',
                            'extension',
                            'dateOfBirth',
                            'companyLogo',
                            'occupation',
                            'interests',
=======
>>>>>>> 749be5ae7e09c2da741080e084a373208e43fcf9
                            'remember_token'
                        ];  // All field of user table here    


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    protected $guarded = ['created_at' , 'updated_at' , 'id' ];

    // Return user record
    public function getUserDetail($id=null)
    {
        if($id){
            return User::find($id); 
        }
        return User::all();
    }

<<<<<<< HEAD
    public static function createImage($request, $fielName)
    {
        try{
           
            if ($request->file($fielName)) {
                $photo = $request->file($fielName);

                $destinationPath = storage_path('uploads/profile/');
                $photo->move($destinationPath, time().$photo->getClientOriginalName());
                $photo_name = time().$photo->getClientOriginalName();
                return  'storage/uploads/profile/'.$photo_name;
                //$request->merge(['photo'=>$photo_name]);
            }else{
                 return false;
            }  
            
        }catch(Exception $e){
            return false;
        }
        
    }
=======
>>>>>>> 749be5ae7e09c2da741080e084a373208e43fcf9

}