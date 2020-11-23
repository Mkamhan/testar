
@extends('readit.index')
@section('content')
     <style type="text/css">
        .textr{
            text-align: center;
        }
        .dir{
            direction:rtl;
        }
    </style>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style=" direction: ltr; background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 style="font-family: 'Cairo', sans-serif; " class="mb-3 bread">{{trans('admin.create')}} </h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/"> < {{  trans('admin.archives') }} </i></a></span> <span>> {{trans('admin.create')}}  </span></p>
          </div>
        </div>
      </div>
    </section>
    <br/>
 <hr>
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row d-flex"  style="TEXT-ALIGN: right; DIRECTION: LTR;">
                <div class="col-md-12">
                                
{!! Form::open(['url'=>url('/dash_archives'),'id'=>'archives','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('title',trans('admin.title'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('title',old('title'),['class'=>'form-control textr','placeholder'=>trans('admin.title')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('describe',trans('admin.describe'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::textarea('describe',old('describe'),['class'=>'form-control textr ckeditor','placeholder'=>trans('admin.describe')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('img',trans('admin.img'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('img',['class'=>'form-control dir','placeholder'=>trans('admin.img')]) !!}
    </div>
</div>
<br>
<div class="form-group">
        {!! Form::label('section_id',trans('admin.section_id'),['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
{!! Form::select('section_id',App\Model\Section::pluck("name","id"),old('section_id'),['class'=>' textr form-control dir','placeholder'=>trans('admin.section_id')]) !!}
        </div>
</div>
<br>
<div class="form-group">
        {!! Form::label('relevantrepartment_id',trans('admin.relevantrepartment_id'),['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
{!! Form::select('relevantrepartment_id',App\Model\RelevantDepartment::pluck("name","id"),old('relevantrepartment_id'),['class'=>'form-control dir','placeholder'=>trans('admin.relevantrepartment_id')]) !!}
        </div>
</div>
<br>
<div class="form-group">
        {!! Form::label('batch_id',trans('admin.batch_id'),['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
{!! Form::select('batch_id',App\Model\Batch::pluck("name_b","id"),old('batch_id'),['class'=>'form-control dir','placeholder'=>trans('admin.batch_id')]) !!}
        </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro',trans('admin.file_pro'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro',['class'=>'form-control dir','placeholder'=>trans('admin.file_pro')]) !!}
    </div>
</div>
<br>
<div class="form-group">
        {!! Form::label('supervisor_id',trans('admin.supervisor_id'),['class'=>'col-md-3 control-label']) !!}
        <div class="col-md-9">
{!! Form::select('supervisor_id',App\Model\Supervisor::pluck("name","id"),old('supervisor_id'),['class'=>'dir form-control','placeholder'=>trans('admin.supervisor_id')]) !!}
        </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_1',trans('admin.std_1'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_1',old('std_1'),['class'=>'form-control textr','placeholder'=>trans('admin.std_1')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_2',trans('admin.std_2'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_2',old('std_2'),['class'=>'form-control textr','placeholder'=>trans('admin.std_2')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_3',trans('admin.std_3'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_3',old('std_3'),['class'=>'form-control textr','placeholder'=>trans('admin.std_3')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_4',trans('admin.std_4'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_4',old('std_4'),['class'=>'form-control textr','placeholder'=>trans('admin.std_4')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('std_5',trans('admin.std_5'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('std_5',old('std_5'),['class'=>'form-control textr','placeholder'=>trans('admin.std_5')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('note',trans('admin.note'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('note',old('note'),['class'=>'form-control textr','placeholder'=>trans('admin.note')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('file_pro_r',trans('admin.file_pro_r'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::file('file_pro_r',['class'=>'form-control dir ','placeholder'=>trans('admin.file_pro_r')]) !!}
    </div>
</div>
<br>

<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-offset-3 col-md-9">
{!! Form::submit(trans('admin.add'),['class'=>'btn btn-success col-md-6']) !!}
         </div>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
                                        </div>
                                
                        </div>
                    
        </div>
    </section>
            <br/>
                                    <br/>
@endsection
    
