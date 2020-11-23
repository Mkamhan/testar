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
								<a  href="{{aurl('archives')}}"
										class="btn btn-circle btn-icon-only btn-default"
										tooltip="{{trans('admin.show_all')}}"
										title="{{trans('admin.show_all')}}">
										<i class="fa fa-list"></i>
								</a>
								<a class="btn btn-circle btn-icon-only btn-default fullscreen"
										href="#"
										data-original-title="{{trans('admin.fullscreen')}}"
										title="{{trans('admin.fullscreen')}}">
								</a>
						</div>
				</div>
				<div class="portlet-body form">
								<div class="col-md-12">
								
{!! Form::open(['url'=>aurl('/archives'),'id'=>'archives','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('title',trans('admin.title'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('title',old('title'),['class'=>'form-control','placeholder'=>trans('admin.title')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('describe',trans('admin.describe'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('describe',old('describe'),['class'=>'form-control ckeditor','placeholder'=>trans('admin.describe')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('img',trans('admin.img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('img',['class'=>'form-control','placeholder'=>trans('admin.img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('section_id',trans('admin.section_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('section_id',App\Model\Section::pluck("name","id"),old('section_id'),['class'=>'form-control','placeholder'=>trans('admin.section_id')]) !!}
		</div>
</div>
<br>
<div class="form-group">
		{!! Form::label('relevantrepartment_id',trans('admin.relevantrepartment_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('relevantrepartment_id',App\Model\RelevantDepartment::pluck("name","id"),old('relevantrepartment_id'),['class'=>'form-control','placeholder'=>trans('admin.relevantrepartment_id')]) !!}
		</div>
</div>
<br>
<div class="form-group">
		{!! Form::label('batch_id',trans('admin.batch_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('batch_id',App\Model\Batch::pluck("name_b","id"),old('batch_id'),['class'=>'form-control','placeholder'=>trans('admin.batch_id')]) !!}
		</div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro',trans('admin.file_pro'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro',['class'=>'form-control','placeholder'=>trans('admin.file_pro')]) !!}
    </div>
</div>
<br>
<div class="form-group">
		{!! Form::label('supervisor_id',trans('admin.supervisor_id'),['class'=>'col-md-3 control-label']) !!}
		<div class="col-md-9">
{!! Form::select('supervisor_id',App\Model\Supervisor::pluck("name","id"),old('supervisor_id'),['class'=>'form-control','placeholder'=>trans('admin.supervisor_id')]) !!}
		</div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_1',trans('admin.std_1'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_1',old('std_1'),['class'=>'form-control','placeholder'=>trans('admin.std_1')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_2',trans('admin.std_2'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_2',old('std_2'),['class'=>'form-control','placeholder'=>trans('admin.std_2')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_3',trans('admin.std_3'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_3',old('std_3'),['class'=>'form-control','placeholder'=>trans('admin.std_3')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_4',trans('admin.std_4'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_4',old('std_4'),['class'=>'form-control','placeholder'=>trans('admin.std_4')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_5',trans('admin.std_5'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_5',old('std_5'),['class'=>'form-control','placeholder'=>trans('admin.std_5')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('note',trans('admin.note'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('note',old('note'),['class'=>'form-control','placeholder'=>trans('admin.note')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro_r',trans('admin.file_pro_r'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro_r',['class'=>'form-control','placeholder'=>trans('admin.file_pro_r')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.add'),['class'=>'btn btn-success']) !!}
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
	
