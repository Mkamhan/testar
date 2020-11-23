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
												data-toggle="tooltip" title="{{trans('admin.add')}}  {{trans('admin.archives')}}">
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
																		<i class="fa fa-exclamation-triangle"></i>   {{trans('admin.ask_del')}} {{trans('admin.id')}} ({{$archives->id}}) ؟
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
										<a class="btn btn-circle btn-icon-only btn-default" href="{{aurl('archives')}}"
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
										
{!! Form::open(['url'=>aurl('/archives/'.$archives->id),'method'=>'put','id'=>'archives','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('title',trans('admin.title'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('title', $archives->title ,['class'=>'form-control','placeholder'=>trans('admin.title')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('describe',trans('admin.describe'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('describe', $archives->describe ,['class'=>'form-control ckeditor','placeholder'=>trans('admin.describe')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('img',trans('admin.img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('img',['class'=>'form-control','placeholder'=>trans('admin.img')]) !!}
        @if(!empty($archives->img))
        <img src="{{it()->url($archives->img)}}" style="width:150px;height:150px;" />
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('section_id',trans('admin.section_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('section_id',App\Model\Section::pluck("name","id"), $archives->section_id ,['class'=>'form-control','placeholder'=>trans('admin.section_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('relevantrepartment_id',trans('admin.relevantrepartment_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('relevantrepartment_id',App\Model\RelevantDepartment::pluck("name","id"), $archives->relevantrepartment_id ,['class'=>'form-control','placeholder'=>trans('admin.relevantrepartment_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('batch_id',trans('admin.batch_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('batch_id',App\Model\Batch::pluck("name_b","id"), $archives->batch_id ,['class'=>'form-control','placeholder'=>trans('admin.batch_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro',trans('admin.file_pro'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro',['class'=>'form-control','placeholder'=>trans('admin.file_pro')]) !!}
     
       @if(!empty($archives->file_pro))
        <a href="{{it()->url($archives->file_pro)}}" download="{{ $archives->titel}}">
            اضغط هنا لتحميل الملف..
      
        </a>
        @endif
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('supervisor_id',trans('admin.supervisor_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('supervisor_id',App\Model\Supervisor::pluck("name","id"), $archives->supervisor_id ,['class'=>'form-control','placeholder'=>trans('admin.supervisor_id')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_1',trans('admin.std_1'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_1', $archives->std_1 ,['class'=>'form-control','placeholder'=>trans('admin.std_1')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_2',trans('admin.std_2'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_2', $archives->std_2 ,['class'=>'form-control','placeholder'=>trans('admin.std_2')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_3',trans('admin.std_3'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_3', $archives->std_3 ,['class'=>'form-control','placeholder'=>trans('admin.std_3')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_4',trans('admin.std_4'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_4', $archives->std_4 ,['class'=>'form-control','placeholder'=>trans('admin.std_4')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_5',trans('admin.std_5'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_5', $archives->std_5 ,['class'=>'form-control','placeholder'=>trans('admin.std_5')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('note',trans('admin.note'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('note', $archives->note ,['class'=>'form-control','placeholder'=>trans('admin.note')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro_r',trans('admin.file_pro_r'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro_r',['class'=>'form-control','placeholder'=>trans('admin.file_pro_r')]) !!}
        @if(!empty($archives->file_pro_r))

        <a href="{{it()->url($archives->file_pro_r)}}" download="{{ $archives->titel}}">
            اضغط هنا لتحميل الملف..
       
       
      
        <img src="{{it()->url($archives->file_pro_r)}}" style="width:150px;height:150px;" />
         </a>
        @endif
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.save'),['class'=>'btn btn-success']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}

												</div>
												<div class="clearfix"></div>
								</div>
						</div>
				</div>
		</div>
		@stop
		
