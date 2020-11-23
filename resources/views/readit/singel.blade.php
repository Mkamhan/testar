@extends('readit.index')
@section('content')
<!-- BEGIN PAGE BASE CONTENT -->
    <section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div style="text-align: right;"class="col-lg-8 ftco-animate">
            {{-- <p class="mb-5">
              <img src="{{url('readit')}}/images/image_1.jpg" alt="" class="img-fluid">
            </p> --}}
            <style type="text/css">
                .container {
                              position: relative;
                            }

                            /* Bottom right text */
                 .text-block {
                              position: absolute;
                              bottom: 100px;
                              right: 10%;
                              left: 10%
                              background-color: #0000002e;
                              color: #021852;
                              padding-left: 100px;
                              padding-right: 100px;
                              padding-top: 30px;
                            }
            </style>

             <p class="mb-5">
                @if(!empty($archiv->img))
                 <img src="{{it()->url($archiv->img)}}" alt="Norway" style="width:;"class="img-fluid">
                  <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{it()->url($archiv->img)}});"></a>
                  @else
                   <div class="container">
                      <img src="{{url('readit')}}/images/dddd.jpg" alt="Norway" style="width:;"class="img-fluid">
                      <div class="text-block text">
                        <h4>مشروع </h4>
                        <h2>{{$archiv->title}} </h2>
                      </div>
                    </div>
                     
                  @endif
               
           
            </p>

            <h2 class="mb-3"> {{$archiv->title}} </h2>
            <blockquote> نبذة عن المشروع </blockquote>
            <p>
                {{$archiv->describe}}
            </p>
             <div class=" ftco-animate">
              <h3>{{ trans('web.datapro') }}</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">{{ trans('admin.sections') }} : {{ App\Model\Section::find($archiv->section_id)->name}} </a>
                <a href="#" class="tag-cloud-link">{{ trans('admin.relevantdepartments') }} : {{ App\Model\RelevantDepartment::find($archiv->relevantrepartment_id)->name}} </a>
                <a href="#" class="tag-cloud-link">{{ trans('admin.batches') }} : {{ App\Model\Batch::find($archiv->batch_id)->name_b}} </a>
                <a href="#" class="tag-cloud-link">{{ trans('admin.school_year') }} :{{ App\Model\Batch::find($archiv->batch_id)->school_year}}</a>
               {{--  <a href="#" class="tag-cloud-link">model</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a> --}}
              </div>
            </div>
            <h2 class="mb-3 mt-5">المشرف  : د/  {{ App\Model\Supervisor::find($archiv->supervisor_id)->name}} </h2>
             <h2 class="mb-3 mt-5">{{trans('web.Team')}}:</h2>
               @if(!empty($archiv->std_1))

                  <p>1- {{ $archiv->std_1}}</p>
                @endif
                  @if(!empty($archiv->std_2))

                  <p>2- {{$archiv->std_2 }}</p>
                @endif
                  @if(!empty($archiv->std_3))

                  <p>3- {{ $archiv->std_3}}</p>
                @endif
                  @if(!empty($archiv->std_4))

                  <p>4- {{ $archiv->std_4}}</p>
                @endif
                  @if(!empty($archiv->std_5))

                  <p>5- {{ $archiv->std_5 }}</p>
                @endif
           
            {{-- <div class="tag-widget post-tag-container mb-5 mt-5">
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">Life</a>
                <a href="#" class="tag-cloud-link">Sport</a>
                <a href="#" class="tag-cloud-link">Tech</a>
                <a href="#" class="tag-cloud-link">Travel</a>
              </div>
            </div> --}}
            
            


          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar pl-lg-5 ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon icon-search"></span>
                  <input type="text" class="form-control" placeholder="{{ trans('web.serch') }}">
                </div>
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>{{ trans('web.sections') }}</h3>
                @php
                    $reles=App\Model\RelevantDepartment::all();
                @endphp
                @foreach ($reles as $rele)
                    <li><a href="rele/{{$rele->id }}">{{$rele->name}} <span class="ion-ios-arrow-forward"></span> <span style="background-color: #c40bc4;color: white; padding: 9px;" class="badge badge-primary badge-pill">{{App\Model\Archiv::where('relevantrepartment_id',$rele->id)->count() }}</span></a></li>
                @endforeach
               {{--  <li><a href="#">Illustration <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Branding <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Application <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Design <span class="ion-ios-arrow-forward"></span></a></li>
                <li><a href="#">Marketing <span class="ion-ios-arrow-forward"></span></a></li> --}}
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>{{ trans('web.Recentlyadded') }}</h3>
      @foreach ($newss as $news)
      @if ($news->id!=$archiv->id)
          
      
          
      
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{it()->url($news->img)}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="archiv/{{  $news->id }}">{{$news->title}}</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> {{$news->created_at}}</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    {{-- <div><a href="#"><span class="icon-chat"></span> 19</a></div> --}}
                  </div>
                </div>
              </div>
     @endif

@endforeach
             {{--  <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{url('readit/images/image_2.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url({{url('readit/images/image_3.jpg')}});"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> Nov. 14, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div> --}}

         {{--    <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">cat</a>
                <a href="#" class="tag-cloud-link">abstract</a>
                <a href="#" class="tag-cloud-link">people</a>
                <a href="#" class="tag-cloud-link">person</a>
                <a href="#" class="tag-cloud-link">model</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            <div class="sidebar-box ftco-animate">
              <h3>Paragraph</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
            </div>
          </div> --}}

        </div>
      </div>
    </section> <!-- .section -->
@endsection