<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function about()
    {
        return view("about"); // resources/views/about.blade.php (~ .html)
    }

    function contact()
    {
        return view("contact");
    }

    function user($id,$id2)
    {
        echo $id;
    }

    function register()
    {
        return view("register");
    }

    function save(Request $request)
    {
        // fetch form values
        $n1 = $request->n1;
        $e1 = $request->e1;
        $p1 = Hash::make($request->p1);
        $m1 = $request->m1;

        // Insert
        // Create Object of User Model
        $obj = new User();

        // Initializing value one by one
        $obj->name = $n1;
        $obj->email = $e1;
        $obj->password = $p1;
        $obj->mobile = $m1;
        $obj->save(); // save() is built-in function

        echo "Inserted Successfully";

    }

    function show()
    {
        /*
            1) Fetch Data from User Model - all()
            2) Send Data to View
        */
        $obj = User::all(); // select * from users - array
        return view('show',compact('obj'));

        // compact() is used to transfer data from Controller to View.
        // return view('view name',compact('variable name'))

    }

    function login()
    {
        return view("login");
    }

    function login_check(Request $request)
    {
        // fetch form values
        $email = $request->email;
        $password = $request->password;

        $k = Auth::attempt(['email' => $email, 'password' => $password]);

        if($k)
        {
            return redirect("dashboard");
        }
        else
        {
            echo "Invalid Login";
        }

    }

    function delete($id)
    {
        // delete from users where id='$id'
        User::find($id)->delete();

        return redirect("show"); // go to "show" route
    }


    function dashboard()
    {
        return view("dashboard");
    }






   
}
