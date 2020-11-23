
@extends('readit.index')
@section('content')
	 <style type="text/css">
    	.textr{
    		text-align: center;
    	}
    	.dir{
    	    direction:rtl;
    	}
    	 input,textarea,select{
            text-align:center;
        }
           select{ direction: rtl;}
    </style>
    <section class="hero-wrap hero-wrap-2 js-fullheight" style=" direction: ltr; background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h2 style="font-family: 'Cairo', sans-serif; " class="mb-3 bread">{{trans('admin.edit')}} </h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="/"> < {{  trans('admin.relevantdepartments') }} </i></a></span> <span>> {{trans('admin.edit')}}  </span></p>
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
										
{!! Form::open(['url'=>url('/dash_relevantdepartments/'.$relevantdepartments->id),'method'=>'put','id'=>'relevantdepartments','files'=>true,'class'=>'form-horizontal form-row-seperated']) !!}
<div class="form-group">
    {!! Form::label('name',trans('admin.name'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
        {!! Form::text('name', $relevantdepartments->name ,['class'=>'form-control','placeholder'=>trans('admin.name')]) !!}
    </div>
</div>
<br>
<div class="form-group">
    {!! Form::label('section_id',trans('admin.section_id'),['class'=>'col-md-3 control-label']) !!}
    <div class="col-md-9">
{!! Form::select('section_id',App\Model\Section::pluck("name","id"), $relevantdepartments->section_id ,['class'=>'form-control','placeholder'=>trans('admin.section_id')]) !!}
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
								
						</div>
					
    	</div>
    </section>
			<br/>
									<br/>
@endsection
	
