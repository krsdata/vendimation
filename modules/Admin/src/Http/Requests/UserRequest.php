<?php

namespace Modules\Admin\Http\Requests;

use App\Http\Requests\Request;
use Input;

class UserRequest extends Request {

    /**
     * The metric validation rules.
     *
     * @return array
     */
    public function rules() {
        //if ( $metrics = $this->metrics ) {
            switch ( $this->method() ) {
                case 'GET':
                case 'DELETE': {
                        return [ ];
                    }
                case 'POST': {
                        return [
                            'email'     => "required|email|unique:users,email" ,  
                            'first_name'      => 'required|min:3', 
                            'last_name'      => 'required|min:2', 
                            'password'  => 'required|min:6', 
                            'address' => 'required',
                        //    'phone' =>  'required|number|min:10',
                             'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric'
                             //size:10
                            //'role'  => 'required'
                            /*'confirm_password' => 'required|same:password'*/ 
                        ];
                    }
                case 'PUT':
                case 'PATCH': {
                    if ( $user = $this->user ) {

                        return [
                            'email'      => "required|email" ,  
                            'first_name' => 'required|min:3', 
                            'last_name'  => 'required|min:2', 
                            'phone'      => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|numeric',
                            'address'    => 'required',
                           // 'role'  => 'required'
                        ];
                    }
                }
                default:break;
            }
        //}
    }

    /**
     * The
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

}
