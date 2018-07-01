<?php

namespace App\Http\Controllers;


use App\UsersCv;
use App\Http\Requests\StoreUsersCvRequest;
use Illuminate\Http\Request;
use function compact;
use Auth;
use const null;
use function view;

class UsersCvController extends Controller
{
    protected $usersCvs;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UsersCv $usersCvs)
    {
        $this->usersCvs=$usersCvs;
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('home');
    }

    public function create(UsersCv $usersCv)
    {
        return view('other.cv',compact('usersCv'));
    }
    public function store(StoreUsersCvRequest $request)
    {
        $usersCv=new UsersCv;

        $usersCv->user_id = $request -> user_id;
        $usersCv->user_full_name = $request -> user_full_name;
        $usersCv->user_address = $request -> user_address;
        $usersCv->user_phone = $request -> user_phone;
        $usersCv->user_email = $request -> user_email;
        $usersCv->user_objective = $request -> user_objective;
        $usersCv->user_education = $request -> user_education;
        $usersCv->user_date_of_birth = $request -> user_date_of_birth;
        $usersCv->user_experience = $request -> user_experience;
        $usersCv->save();

        return redirect('home');
    }
    public function edit($id)
    {
        $usersCv1=UsersCv::class;
        $usersCv=$this->usersCvs->findOrFail($id);
        if ($usersCv!=null){
            return view('other.cv',compact('usersCv'));
        }
    }
    public function update(Request $request, $id)
    {
        $usersCv=$this->usersCvs->findOrFail($id);

        $usersCv->user_id = $request -> user_id;
        $usersCv->user_full_name = $request -> user_full_name;
        $usersCv->user_address = $request -> user_address;
        $usersCv->user_phone = $request -> user_phone;
        $usersCv->user_email = $request -> user_email;
        $usersCv->user_objective = $request -> user_objective;
        $usersCv->user_education = $request -> user_education;
        $usersCv->user_date_of_birth = $request -> user_date_of_birth;
        $usersCv->user_experience = $request -> user_experience;
        $usersCv->save();

        return redirect('home');

    }
}
