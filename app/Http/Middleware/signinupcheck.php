<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Session;
use App\signupmodel;

class signinupcheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $request->validate([
                    'username' => 'required',
                    'emailaddr' => 'required',
                    'password' => 'required',
                    'confirmpassword' => 'required',
                    'typeofacct' => 'required',
                    ]);
        
        if (strcmp($request->password,$request->confirmpassword) != 0) {
            return redirect("signup")->with(["data"=>["status"=>"error","msg"=>"Passwords do not match."]]);
        }

        $emailcheck = signupmodel::where([
                                        ["emailaddress", $request->emailaddr]
                                        ])->get();

        if (count($emailcheck) > 0) {
            // return to signup page with error
            return redirect("signup")->with(["data"=>["status"=>"error","msg"=>"Someone with that email address has already signed up."]]);
        }

        $usernamecheck = signupmodel::where([["username", $request->username]])->get();
        if (count($usernamecheck) > 0) {
            return redirect("signup")->with(["data"=>["status"=>"error","msg"=>"Someone with that username has already signed up."]]);
        }

        $user = signupmodel::create([
                            "username"      => $request->username,
                            "password"      => Hash::make($request->password),
                            "emailaddress"  => $request->emailaddr,
                            "typeofaccount" => $request->typeofacct,
                            "status"        => 0
                            ]);

        if ($user->save()) {
            return redirect("signup")->with(["data"=>["status"=>"success","msg"=>"You have successfully signed up. Please check your email and confirm."]]);
        }

        // return $next($request);
    }
}
