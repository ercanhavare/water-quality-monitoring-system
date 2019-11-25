<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $users = DB::table('users')->get();

        if (!$request->ajax()) {

            return view('user.index', [
                'users_data' => json_encode($users)
            ]);
        } else {
            // paginate
            $paging = $request->input('page');
            $limit = $request->input('limit');

            $users = $users->skip($limit * ($paging - 1))->take($limit)->get();

            return response()->json([
                'users_data' => $users,
                'count' => count($users)
            ], 200);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobile_phone = $request->mobile_phone;
        $user->country_id = $request->country_id;
        $user->address = $request->address;
        $user->postcode = $request->postcode;

        $result = $user->save();

        if ($result) {
            return response()->json([
                "message" => "success"
            ]);
        } else {
            return response()->json([
                "message" => "warning"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function show(User $user)
    {
        return view("user.show", compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return void
     */
    public function edit(User $user)
    {
        return view("user.edit", compact($user));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $user
     * @return void
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->mobile_phone = $request->mobile_phone;
        $user->country_id = $request->country_id;
        $user->address = $request->address;
        $user->postcode = $request->postcode;

        $result = $user->update();

        if ($result) {
            return response()->json([
                "message" => "success"
            ]);
        } else {
            return response()->json([
                "message" => "warning"
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return void
     */
    public function destroy(User $user)
    {

        $result = $user->delete();

        if ($result) {
            return response()->json([
                "message" => "success"
            ]);
        } else {
            return response()->json([
                "message" => "warning"
            ]);
        }
    }

    public function profile(User $user)
    {
        return view('user.show',compact("user"));
    }
}
