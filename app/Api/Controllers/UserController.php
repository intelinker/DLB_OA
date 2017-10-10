<?php
/**
 * Created by PhpStorm.
 * User: YuanGuan
 * Date: 2017/10/10
 * Time: 下午9:18
 */
namespace App\Api\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __contruct() {
        $this->middleware('auth', ['only'=>[]]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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

    public function login() {
        return view('auth.login');
    }


    public function signin(Requests\UserLoginRequest $request) {
//        dd($request->all());
        if(Auth::attempt([
            'email' => $request->get('email'),
            'password' => $request->get('password'),

        ]))
            return redirect('/');
        Session::flash('user_login_failed', '手机号或密码错误');
        return redirect('/user/login')->withInput();
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}