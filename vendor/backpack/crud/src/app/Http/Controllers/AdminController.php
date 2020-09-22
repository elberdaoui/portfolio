<?php

namespace Backpack\CRUD\app\Http\Controllers;

use Illuminate\Routing\Controller;

// use Backpack\CRUD\App\Models\skill;
use App\skill;
use App\Work;
use App\experiences;
use App\educations;


class AdminController extends Controller
{
    protected $data = []; // the information we send to the view

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(backpack_middleware());
    }

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $skill = Skill::all();
        $work = Work::all();
        $education = educations::all();
        $experience = experiences::all();
        $this->data['title'] = trans('backpack::base.dashboard'); // set the page title
        $this->data['breadcrumbs'] = [
            trans('backpack::crud.admin')     => backpack_url('dashboard'),
            trans('backpack::base.dashboard') => false,
        ];

        return view(backpack_view('dashboard'), $this->data, compact('work','skill', 'education', 'experience'));


    }

    /**
     * Redirect to the dashboard.
     *
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function redirect()
    {
        // The '/admin' route is not to be used as a page, because it breaks the menu's active state.
        return redirect(backpack_url('dashboard'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function index()
    // {
    //
    //
    // }

}
