<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Session;

use App\signupmodel;
class signincheck
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
        $signin = signupmodel::where([
                                    ["username",$request->username],
                                    ["password",Hash::check("plain-text",$request->password)]
                                ])->get();

        if (count($signin)==0){
            // proceed with error 
            return redirect("login")->with(["data"=>["status"=>"error","msg"=>"Account cannot be found"]]);
        }

        session(["username"=>$request->username,"typeofaccount"=>$signin[0]->typeofaccount,"emailaddr"=>$signin[0]->emailaddress,"userid"=>$signin[0]->userid
]);

        if ($request->session()->exists('username') != null) {
            if ($request->session()->get("typeofaccount") == 1) {
                // employer
                return redirect("/employer");
            } else {
                // worker 
                return redirect("/worker");
            }
        }

        
        //return $next($request);
    }
}
