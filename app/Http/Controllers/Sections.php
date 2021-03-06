<?php
namespace App\Http\Controllers;
// use App\Http\Controllers\Controller;
// use App\DataTables\SectionsDataTable;
use Illuminate\Http\Request;
// use Carbon\Carbon;
use App\Model\Section;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Sections extends Controller
{

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Display a listing of the resource.
             * @return \Illuminate\Http\Response
             */
     public function index()
            {
           if(request()->ajax())
        {
            return datatables()->of(Section::latest()->get())
                    ->addColumn('action', function($data){
                       $button = '<a type="" href="dash_sections/'.$data->id.'/edit" name="edit" class="edit btn btn-primary btn-sm">Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('readit.sections.index');
    }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('readit.sections.create',['title'=>trans('admin.create')]);
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

                   ];
              $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),

              ]);
		
              $data['admin_id'] = 1;//admin()->user()->id; 
              Section::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(url('dash_sections'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $sections =  Section::find($id);
                return view('readit.sections.show',['title'=>trans('admin.show'),'sections'=>$sections]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $sections =  Section::find($id);
                return view('readit.sections.edit',['title'=>trans('admin.edit'),'sections'=>$sections]);
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

                         ];
             $data = $this->validate(request(),$rules,[],[
             'name'=>trans('admin.name'),
                   ]);
             // $data['admin_id'] = admin()->user()->id; 
              Section::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(url('dash_sections'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $sections = Section::find($id);


               @$sections->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$sections = Section::find($id);

                    	@$sections->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $sections = Section::find($data);
 

                    @$sections->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}