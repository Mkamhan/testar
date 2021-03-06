<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\SupervisoresDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Supervisor;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Supervisores extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(SupervisoresDataTable $supervisores)
            {
               return $supervisores->render('admin.supervisores.index',['title'=>trans('admin.supervisores')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.supervisores.create',['title'=>trans('admin.create')]);
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Store a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function store()
            {
              $rules = [
             'name'=>'required|nullable|sometimes',
             'phone'=>'',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
             'phone'=>trans('admin.phone'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
              Supervisor::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('supervisores'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $supervisores =  Supervisor::find($id);
                return view('admin.supervisores.show',['title'=>trans('admin.show'),'supervisores'=>$supervisores]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $supervisores =  Supervisor::find($id);
                return view('admin.supervisores.edit',['title'=>trans('admin.edit'),'supervisores'=>$supervisores]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * update a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function update($id)
            {
                $rules = [
             'name'=>'required|nullable|sometimes',
             'phone'=>'',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
             'phone'=>trans('admin.phone'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
              Supervisor::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('supervisores'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $supervisores = Supervisor::find($id);


               @$supervisores->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$supervisores = Supervisor::find($id);

                    	@$supervisores->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $supervisores = Supervisor::find($data);
 

                    @$supervisores->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}