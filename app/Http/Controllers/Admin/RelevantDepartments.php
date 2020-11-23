<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\RelevantDepartmentsDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\RelevantDepartment;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class RelevantDepartments extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(RelevantDepartmentsDataTable $relevantdepartments)
            {
               return $relevantdepartments->render('admin.relevantdepartments.index',['title'=>trans('admin.relevantdepartments')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.relevantdepartments.create',['title'=>trans('admin.create')]);
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
             'name'=>'required',
             'section_id'=>'required',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
             'section_id'=>trans('admin.section_id'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
              RelevantDepartment::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('relevantdepartments'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $relevantdepartments =  RelevantDepartment::find($id);
                return view('admin.relevantdepartments.show',['title'=>trans('admin.show'),'relevantdepartments'=>$relevantdepartments]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $relevantdepartments =  RelevantDepartment::find($id);
                return view('admin.relevantdepartments.edit',['title'=>trans('admin.edit'),'relevantdepartments'=>$relevantdepartments]);
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
             'name'=>'required',
             'section_id'=>'required',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
             'section_id'=>trans('admin.section_id'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
              RelevantDepartment::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('relevantdepartments'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $relevantdepartments = RelevantDepartment::find($id);


               @$relevantdepartments->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$relevantdepartments = RelevantDepartment::find($id);

                    	@$relevantdepartments->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $relevantdepartments = RelevantDepartment::find($data);
 

                    @$relevantdepartments->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}