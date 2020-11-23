
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
            <p class="breadcrumbs"><span class="mr-2"><a href="/"> < {{  trans('admin.batches') }} </i></a></span> <span>> {{trans('admin.create')}}  </span></p>
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
                                
{!! Form::open(['url'=>url('/dash_batches'),'id'=>'batches','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name_b',trans('admin.name_b'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name_b',old('name_b'),['class'=>'form-control textr ','placeholder'=>trans('admin.name_b')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('school_year',trans('admin.school_year'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('school_year',old('school_year'),['class'=>'form-control textr','placeholder'=>trans('admin.school_year')]) !!}
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
								
						</div>
					
    	</div>
    </section>
			<br/>
									<br/>
@endsection
	
