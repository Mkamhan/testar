<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
// use App\DataTables\ArchivesDataTable;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\Archiv;
use Validator;
use Set;
use Up;
use Form;
// Auto Controller Maker By Baboon Script
// Baboon Maker has been Created And Developed By  [It V 1.2 | https://it.phpanonymous.com]
// Copyright Reserved  [It V 1.2 | https://it.phpanonymous.com]
class Archives extends Controller
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
            return datatables()->of(Archiv::latest()->get())
                    ->addColumn('action', function($data){
                       $button = '<a type="" href="dash_archives/'.$data->id.'/edit" name="edit" class="edit btn btn-primary btn-sm">Edit</a>';
                        $button .= '&nbsp;&nbsp;';
                        $button .= '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm">Delete</button>';
                        return $button;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('readit.archives.index');
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * Show the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function create()
            {
               return view('readit.archives.create',['title'=>trans('admin.create')]);
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
             'title'=>'required|nullable|sometimes',
             'describe'=>'',
             'img'=>''.it()->image().'|nullable',
             'section_id'=>'required|nullable|sometimes',
             'relevantrepartment_id'=>'required|nullable|sometimes',
             'batch_id'=>'required|nullable|sometimes',
             'file_pro'=>'sometimes|nullable',
             'supervisor_id'=>'required',
             'std_1'=>'',
             'std_2'=>'',
             'std_3'=>'',
             'std_4'=>'',
             'std_5'=>'',
             'note'=>'',
             'file_pro_r'=>'sometimes|nullable',

                   ];
              $data = $this->validate(request(),$rules,[],[
             'title'=>trans('admin.title'),
             'describe'=>trans('admin.describe'),
             'img'=>trans('admin.img'),
             'section_id'=>trans('admin.section_id'),
             'relevantrepartment_id'=>trans('admin.relevantrepartment_id'),
             'batch_id'=>trans('admin.batch_id'),
             'file_pro'=>trans('admin.file_pro'),
             'supervisor_id'=>trans('admin.supervisor_id'),
             'std_1'=>trans('admin.std_1'),
             'std_2'=>trans('admin.std_2'),
             'std_3'=>trans('admin.std_3'),
             'std_4'=>trans('admin.std_4'),
             'std_5'=>trans('admin.std_5'),
             'note'=>trans('admin.note'),
             'file_pro_r'=>trans('admin.file_pro_r'),

              ]);
		
              $data['admin_id'] =1;// admin()->user()->id; 
               if(request()->hasFile('img')){
              $data['img'] = it()->upload('img','archives');
              }
               if(request()->hasFile('file_pro')){
              $data['file_pro'] = it()->upload('file_pro','archives');
              }
               if(request()->hasFile('file_pro_r')){
              $data['file_pro_r'] = it()->upload('file_pro_r','archives');
              }
              Archiv::create($data); 

              session()->flash('success',trans('admin.added'));
              return redirect(url('dash_archives'));
            }

            /**
             * Display the specified resource.
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
            public function show($id)
            {
                $archives =  Archiv::find($id);
                return view('readit.archives.show',['title'=>trans('admin.show'),'archives'=>$archives]);
            }


            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * edit the form for creating a new resource.
             * @return \Illuminate\Http\Response
             */
            public function edit($id)
            {
                $archives =  Archiv::find($id);
                return view('readit.archives.edit',['title'=>trans('admin.edit'),'archives'=>$archives]);
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
             'title'=>'required|nullable|sometimes',
             'describe'=>'',
             'img'=>''.it()->image().'|nullable',
             'section_id'=>'required|nullable|sometimes',
             'relevantrepartment_id'=>'required|nullable|sometimes',
             'batch_id'=>'required|nullable|sometimes',
             'file_pro'=>'sometimes|nullable',
             'supervisor_id'=>'required',
             'std_1'=>'',
             'std_2'=>'',
             'std_3'=>'',
             'std_4'=>'',
             'std_5'=>'',
             'note'=>'',
             'file_pro_r'=>'sometimes|nullable',

                         ];
             $data = $this->validate(request(),$rules,[],[
             'title'=>trans('admin.title'),
             'describe'=>trans('admin.describe'),
             'img'=>trans('admin.img'),
             'section_id'=>trans('admin.section_id'),
             'relevantrepartment_id'=>trans('admin.relevantrepartment_id'),
             'batch_id'=>trans('admin.batch_id'),
             'file_pro'=>trans('admin.file_pro'),
             'supervisor_id'=>trans('admin.supervisor_id'),
             'std_1'=>trans('admin.std_1'),
             'std_2'=>trans('admin.std_2'),
             'std_3'=>trans('admin.std_3'),
             'std_4'=>trans('admin.std_4'),
             'std_5'=>trans('admin.std_5'),
             'note'=>trans('admin.note'),
             'file_pro_r'=>trans('admin.file_pro_r'),
                   ]);
             // $data['admin_id'] = admin()->user()->id; 
               if(request()->hasFile('img')){
              it()->delete(Archiv::find($id)->img);
              $data['img'] = it()->upload('img','archives');
               }
               if(request()->hasFile('file_pro')){
              it()->delete(Archiv::find($id)->file_pro);
              $data['file_pro'] = it()->upload('file_pro','archives');
               }
               if(request()->hasFile('file_pro_r')){
              it()->delete(Archiv::find($id)->file_pro_r);
              $data['file_pro_r'] = it()->upload('file_pro_r','archives');
               }
              Archiv::where('id',$id)->update($data);

              session()->flash('success',trans('admin.updated'));
              return redirect(url('dash_archives'));
            }

            /**
             * Baboon Script By [It V 1.0 | https://it.phpanonymous.com]
             * destroy a newly created resource in storage.
             * @param  \Illuminate\Http\Request  $r
             * @return \Illuminate\Http\Response
             */
            public function destroy($id)
            {
               $archives = Archiv::find($id);

               it()->delete($archives->img);
               it()->delete('archiv',$id);
               it()->delete($archives->file_pro);
               it()->delete('archiv',$id);
               it()->delete($archives->file_pro_r);
               it()->delete('archiv',$id);

               @$archives->delete();
               session()->flash('success',trans('admin.deleted'));
               return back();
            }



 			public function multi_delete(Request $r)
            {
                $data = $r->input('selected_data');
                if(is_array($data)){
                    foreach($data as $id)
                    {
                    	$archives = Archiv::find($id);

                    	it()->delete($archives->img);
                    	it()->delete('archiv',$id);
                    	it()->delete($archives->file_pro);
                    	it()->delete('archiv',$id);
                    	it()->delete($archives->file_pro_r);
                    	it()->delete('archiv',$id);
                    	@$archives->delete();
                    }
                    session()->flash('success', trans('admin.deleted'));
                   return back();
                }else {
                    $archives = Archiv::find($data);
 
                    	it()->delete($archives->img);
                    	it()->delete('archiv',$data);
                    	it()->delete($archives->file_pro);
                    	it()->delete('archiv',$data);
                    	it()->delete($archives->file_pro_r);
                    	it()->delete('archiv',$data);

                    @$archives->delete();
                    session()->flash('success', trans('admin.deleted'));
                    return back();
                }
            }

            
}