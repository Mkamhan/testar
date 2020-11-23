<?php

namespace App\Http\Controllers;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use App\Model\Archiv;
use Carbon\Carbon;
use App\Model\Batch;
use App\Model\Section;
use App\Model\Supervisor;
use App\Model\RelevantDepartment;
use Validator;
use Set;
use Up;
use Form;
use Illuminate\Support\Facades\Input;

class WebController extends Controller
{
           public function index()
            {
                $archiv = Archiv::latest('created_at')->get();//all(); //  dd($archiv);
             return view('readit.home',['home'=>trans('admin.home'),'archiv'=>$archiv ]);
            }


             public function show($id)
            {
                $archiv =  Archiv::find($id);
                $newss = Archiv::orderBy('created_at', 'desc')->take(5)->get();

                return view('readit.singel',['title'=>trans('admin.show'),'archiv'=>$archiv])->with('newss', $newss);;
            }

              public function rele($id)
            {
                $archiv =  Archiv::where('relevantrepartment_id',$id)->get();
               // $newss = Archiv::orderBy('created_at', 'desc')->take(5)->get();

                return view('readit.home',['title'=>trans('admin.show'),'archiv'=>$archiv]);//->with('newss', $newss);
            }
             public function batch($id)
            {
                $archiv =  Archiv::where('batch_id',$id)->get();
               // $newss = Archiv::orderBy('created_at', 'desc')->take(5)->get();

                return view('readit.home',['title'=>trans('admin.show'),'archiv'=>$archiv]);//->with('newss', $newss);
            }
              public function search(Request $req)
            {
                 $q = Input::get ( 'serch' );





                $archiv = Archiv::where('title','LIKE','%'.$q.'%')
                                 ->orWhere('describe','LIKE','%'.$q.'%')
                                 ->orWhere('std_1','LIKE','%'.$q.'%')
                                 ->orWhere('std_2','LIKE','%'.$q.'%')
                                 ->orWhere('std_3','LIKE','%'.$q.'%')
                                 ->orWhere('std_4','LIKE','%'.$q.'%')
                                 ->paginate(50);
            //    $archiv =  Archiv::where('relevantrepartment_id',$id)->get();
               // $newss = Archiv::orderBy('created_at', 'desc')->take(5)->get();

                return view('readit.home',['title'=>trans('admin.show'),'archiv'=>$archiv]);//->with('newss', $newss);;
            }
               //////////////////////////End Arshives /////////////////////////////////////////////
//              public function createAr()
//             {
//               $rules = [
//              'title'=>'required|nullable|sometimes',
//              'describe'=>'',
//              'img'=>''.it()->image().'|nullable',
//              'section_id'=>'required|nullable|sometimes',
//              'relevantrepartment_id'=>'required|nullable|sometimes',
//              'batch_id'=>'required|nullable|sometimes',
//              'file_pro'=>'sometimes|nullable',
//              'supervisor_id'=>'required',
//              'std_1'=>'',
//              'std_2'=>'',
//              'std_3'=>'',
//              'std_4'=>'',
//              'std_5'=>'',
//              'note'=>'',
//              'file_pro_r'=>'sometimes|nullable',

//                    ];
//               $data = $this->validate(request(),$rules,[],[
//              'title'=>trans('admin.title'),
//              'describe'=>trans('admin.describe'),
//              'img'=>trans('admin.img'),
//              'section_id'=>trans('admin.section_id'),
//              'relevantrepartment_id'=>trans('admin.relevantrepartment_id'),
//              'batch_id'=>trans('admin.batch_id'),
//              'file_pro'=>trans('admin.file_pro'),
//              'supervisor_id'=>trans('admin.supervisor_id'),
//              'std_1'=>trans('admin.std_1'),
//              'std_2'=>trans('admin.std_2'),
//              'std_3'=>trans('admin.std_3'),
//              'std_4'=>trans('admin.std_4'),
//              'std_5'=>trans('admin.std_5'),
//              'note'=>trans('admin.note'),
//              'file_pro_r'=>trans('admin.file_pro_r'),

//               ]);
        
//               $data['admin_id'] = 1; 
//                if(request()->hasFile('img')){
//               $data['img'] = it()->upload('img','archives');
//               }
//                if(request()->hasFile('file_pro')){
//               $data['file_pro'] = it()->upload('file_pro','archives');
//               }
//                if(request()->hasFile('file_pro_r')){
//               $data['file_pro_r'] = it()->upload('file_pro_r','archives');
//               }
//               Archiv::create($data); 

//               session()->flash('success',trans('admin.added'));
//               return redirect(url('arcreate'));
//             }
//              public function editar($id)
//             {
//                 $archives =  Archiv::find($id);
//                 return view('readit.editAR',['title'=>trans('admin.edit'),'archives'=>$archives]);
//             }

//             public function updatear($id)
//             {
//                 $rules = [
//              'title'=>'required|nullable|sometimes',
//              'describe'=>'',
//              'img'=>''.it()->image().'|nullable',
//              'section_id'=>'required|nullable|sometimes',
//              'relevantrepartment_id'=>'required|nullable|sometimes',
//              'batch_id'=>'required|nullable|sometimes',
//              'file_pro'=>'sometimes|nullable',
//              'supervisor_id'=>'required',
//              'std_1'=>'',
//              'std_2'=>'',
//              'std_3'=>'',
//              'std_4'=>'',
//              'std_5'=>'',
//              'note'=>'',
//              'file_pro_r'=>'sometimes|nullable',

//                          ];
//              $data = $this->validate(request(),$rules,[],[
//              'title'=>trans('admin.title'),
//              'describe'=>trans('admin.describe'),
//              'img'=>trans('admin.img'),
//              'section_id'=>trans('admin.section_id'),
//              'relevantrepartment_id'=>trans('admin.relevantrepartment_id'),
//              'batch_id'=>trans('admin.batch_id'),
//              'file_pro'=>trans('admin.file_pro'),
//              'supervisor_id'=>trans('admin.supervisor_id'),
//              'std_1'=>trans('admin.std_1'),
//              'std_2'=>trans('admin.std_2'),
//              'std_3'=>trans('admin.std_3'),
//              'std_4'=>trans('admin.std_4'),
//              'std_5'=>trans('admin.std_5'),
//              'note'=>trans('admin.note'),
//              'file_pro_r'=>trans('admin.file_pro_r'),
//                    ]);
//               $data['admin_id'] = admin()->user()->id; 
//                if(request()->hasFile('img')){
//               it()->delete(Archiv::find($id)->img);
//               $data['img'] = it()->upload('img','archives');
//                }
//                if(request()->hasFile('file_pro')){
//               it()->delete(Archiv::find($id)->file_pro);
//               $data['file_pro'] = it()->upload('file_pro','archives');
//                }
//                if(request()->hasFile('file_pro_r')){
//               it()->delete(Archiv::find($id)->file_pro_r);
//               $data['file_pro_r'] = it()->upload('file_pro_r','archives');
//                }
//               Archiv::where('id',$id)->update($data);

//               session()->flash('success',trans('admin.updated'));
//               return back();
//             }
//             public function deletar($id)
//             {
//                $archives = Archiv::find($id);

//                it()->delete($archives->img);
//                it()->delete('archiv',$id);
//                it()->delete($archives->file_pro);
//                it()->delete('archiv',$id);
//                it()->delete($archives->file_pro_r);
//                it()->delete('archiv',$id);

//                @$archives->delete();
//                session()->flash('success',trans('admin.deleted'));
//                return back();
//             }
//            //////////////////////////End Arshives /////////////////////////////////////////////
//               public function createSec()
//             {
//               $rules = [
//              'name'=>'required',

//                    ];
//               $data = $this->validate(request(),$rules,[],[
//              'name'=>trans('admin.name'),

//               ]);
        
//               $data['admin_id'] = 1; 
//               Section::create($data); 

//               session()->flash('success',trans('admin.added'));
//               return redirect(url('/'));
//             }

//          public function createRele()
//             {
//               $rules = [
//              'name'=>'required',
//              'section_id'=>'required',

//                    ];
//               $data = $this->validate(request(),$rules,[],[
//              'name'=>trans('admin.name'),
//              'section_id'=>trans('admin.section_id'),

//               ]);
        
//               $data['admin_id'] =1; 
//               RelevantDepartment::create($data); 

//               session()->flash('success',trans('admin.added'));
//               return redirect(url('/'));
//             }
//             public function createSupe()
//             {
//               $rules = [
//              'name'=>'required|nullable|sometimes',
//              'phone'=>'',

//                    ];
//               $data = $this->validate(request(),$rules,[],[
//              'name'=>trans('admin.name'),
//              'phone'=>trans('admin.phone'),

//               ]);
        
//               $data['admin_id'] = 1; 
//               Supervisor::create($data); 

//               session()->flash('success',trans('admin.added'));
//               return redirect(url('/'));
//             }
            
//               public function createBat()
//             {
//               $rules = [
//              'name_b'=>'required',
//              'school_year'=>'required',

//                    ];
//               $data = $this->validate(request(),$rules,[],[
//              'name_b'=>trans('admin.name_b'),
//              'school_year'=>trans('admin.school_year'),

//               ]);
        
//               $data['admin_id'] = 1; 
//               Batch::create($data); 

//               session()->flash('success',trans('admin.added'));
//               return redirect(url('/'));
//             }

            
}
