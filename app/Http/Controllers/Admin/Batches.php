<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\DataTables\BatchesDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Batch;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Batches extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
            public function index(BatchesDataTable $batches)
            {
               return $batches->render('admin.batches.index',['title'=>trans('admin.batches')]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('admin.batches.create',['title'=>trans('admin.create')]);
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
             'name_b'=>'required',
             'school_year'=>'required',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name_b'=>trans('admin.name_b'),
             'school_year'=>trans('admin.school_year'),

              ]);
		
              $data['admin_id'] = admin()->user()->id; 
              Batch::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(aurl('batches'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $batches =  Batch::find($id);
                return view('admin.batches.show',['title'=>trans('admin.show'),'batches'=>$batches]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $batches =  Batch::find($id);
                return view('admin.batches.edit',['title'=>trans('admin.edit'),'batches'=>$batches]);
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
             'name_b'=>'required',
             'school_year'=>'required',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name_b'=>trans('admin.name_b'),
             'school_year'=>trans('admin.school_year'),
                   ]);
              $data['admin_id'] = admin()->user()->id; 
              Batch::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(aurl('batches'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $batches = Batch::find($id);


               @$batches->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$batches = Batch::find($id);

                    	@$batches->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $batches = Batch::find($data);
 

                    @$batches->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}