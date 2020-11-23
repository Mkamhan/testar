@extends('admin.index')
@section('content')

		 <div class="row">
        <div class="col-md-12">
            <div class="widget-extra body-req portlet light bordered">
              <div class="portlet-title">
                    <div class="caption">
                        <span class="caption-subject bold uppercase font-dark">{{$title}}</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('archives/create')}}"
                           data-toggle="tooltip" title="{{trans('admin.archives')}}">
                            <i class="fa fa-plus"></i>
                        </a>


                        <span data-toggle="tooltip" title="{{trans('admin.delete')}}  {{trans('admin.archives')}}">

                        <a data-toggle="modal" data-target="#myModal{{$archives->id}}" class="btn btn-circle btn-icon-only btn-default" href="">
                        <i class="fa fa-trash"></i>
                        </a>
                        </span>


<div class="modal fade" id="myModal{{$archives->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" data-dismiss="modal">x</button>
                <h4 class="modal-title">{{trans('admin.delete')}}؟</h4>
            </div>
            <div class="modal-body">
                                {{trans('admin.ask_del')}} {{trans('admin.id')}} {{$archives->id}} ؟

            </div>
            <div class="modal-footer">
                {!! Form::open([
               'method' => 'DELETE',
               'route' => ['archives.destroy', $archives->id]
               ]) !!}
                {!! Form::submit(trans('admin.approval'), ['class' => 'btn btn-danger']) !!}
                <a class="btn btn-default" data-dismiss="modal">{{trans('admin.cancel')}}</a>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

                        <a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('/archives')}}"
                           data-toggle="tooltip" title="{{trans('admin.show_all')}}   {{trans('admin.archives')}}">
                            <i class="fa fa-list"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="#"
                           data-original-title="{{trans('admin.fullscreen')}}"
                           title="{{trans('admin.fullscreen')}}">
                        </a>
                    </div>
                </div>
            <div class="portlet-body form">
				<div class="col-md-12">
<div class="col-md-12 col-lg-12 col-xs-12">
<b>{{trans('admin.id')}} :</b> {{$archives->id}}
</div>
<div class="clearfix"></div>
<hr />

<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.admin_id')}} :</b>
 {{ App\Admin::find($archives->admin_id)->name }}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.section_id')}} :</b>
 {!! $archives->section_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.relevantrepartment_id')}} :</b>
 {!! $archives->relevantrepartment_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.batch_id')}} :</b>
 {!! $archives->batch_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.supervisor_id')}} :</b>
 {!! $archives->supervisor_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.title')}} :</b>
 {!! $archives->title !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.describe')}} :</b>
 {!! $archives->describe !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.img')}} :</b>
@if(!empty($archives->img))
        <img src="{{it()->url($archives->img)}}" style="width:150px;height:150px;" />
        @endif
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.section_id')}} :</b>
 {!! $archives->section_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.relevantrepartment_id')}} :</b>
 {!! $archives->relevantrepartment_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.batch_id')}} :</b>
 {!! $archives->batch_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.file_pro')}} :</b>
 @if(!empty($archives->file_pro))
        <a href="{{it()->url($archives->file_pro)}}" download="{{ $archives->titel}}">
            اضغط هنا لتحميل الملف..
       
        </a>
        @endif
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.supervisor_id')}} :</b>
 {!! $archives->supervisor_id !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.std_1')}} :</b>
 {!! $archives->std_1 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.std_2')}} :</b>
 {!! $archives->std_2 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.std_3')}} :</b>
 {!! $archives->std_3 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.std_4')}} :</b>
 {!! $archives->std_4 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.std_5')}} :</b>
 {!! $archives->std_5 !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.note')}} :</b>
 {!! $archives->note !!}
</div>


<div class="col-md-4 col-lg-4 col-xs-4">
<b>{{trans('admin.file_pro_r')}} :</b>
 @if(!empty($archives->file_pro_r))
        <a href="{{it()->url($archives->file_pro_r)}}" download="{{ $archives->titel}}">
            اضغط هنا لتحميل الملف..
       
        </a>
        @endif
</div>


			</div>
			<div class="clearfix"></div>
           </div>
         </div>
       </div>
   </div>
@stop