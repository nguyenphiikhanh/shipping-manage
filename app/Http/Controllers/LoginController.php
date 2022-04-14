<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('home');
    }

    public function login(Request $request)
    {
        //
        $loginInfo = [
            'phone_number' => $request->phone_number,
            'password' => $request->password,
        ];
        if (Auth::attempt($loginInfo)) {
            $user = User::find(Auth::user()->id);
            if ($user->role == "admin") {
                return redirect()->route('admin-home');
            } elseif ($user->role == "shipper") {
                return redirect()->route('shipper-home');
            } else return redirect()->route('customer-home');
        } else {
            $alert = "
            <script src='//cdn.jsdelivr.net/npm/sweetalert2@11'></script>
            <script>
             Swal.fire({
                 icon: 'error',
                 text: 'Số điện thoại hoặc mật khẩu không chính xác, vui lòng thử lại!',
                 showConfirmButton: true,
               })
               </script>";

            return view('home', compact('alert'));
        }
    }

    public function adminHome()
    {
        return view('admin.home');
    }

    public function shipperHome()
    {
        return view('shipper.home');
    }

    public function customerHome()
    {
        return view('customer.home');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
