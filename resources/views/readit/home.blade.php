@extends('readit.index')
@section('content')
<!-- BEGIN PAGE BASE CONTENT -->
    <section dir="ltr" class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                       <div class="col-md-12">
                          <div class="col-md-6 col-lg-4 col-xl-10 d-flex">
                             <div class="sidebar-box">
                                  <form action="/search" method="POST" class="search-form">
                                      {{ csrf_field() }}
                                    <div class="form-group">
                                      <button style="    padding: 13px; left: 10px; right: 0px; background: white; color: #b90fb3; border: aliceblue;" class="icon icon-search"></button>
                                      <input name="serch" style="    text-align: center;" type="text" class="form-control" placeholder="{{ trans('web.serch') }}">
                                    </div>

                                  </form>
                                </div>

                            </div>

                      </div>
                    @foreach ($archiv as $archivs)
                    
                   
                    <div class="case">
                        <div class="row">

                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                {{-- <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_1.jpg);"></a> --}}
                            
                            @if(!empty($archivs->img))
                                 <a href="archiv/{{  $archivs->id }}" class="img w-100 mb-3 mb-md-0" style="background-image: url({{it()->url($archivs->img)}});"></a>
                                 @else
                                    <a href="{{ route('WebController.show') }}" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/dddd.jpg);"></a>
                                @endif
                                </div>
                              
                            <div style="    text-align: right;" class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">
                                        {{ App\Model\RelevantDepartment::find($archivs->relevantrepartment_id)->name}} </span>
                                    <h3><a href="archiv/{{  $archivs->id }}" style="color: #000000; " > {{  $archivs->title }}</a></h3>
                                    <p>
                                        {{  $archivs->describe }}
                                    </p>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">{{ $archivs->created_at }}</a> | <a href="#">{{ $archivs->created_at->diffForHumans() }}</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     @endforeach
                   {{--  ///////////////////////////////////////////// --}}
                   {{--  <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/dddd.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Application</span>
                                    <h2><a href="blog-sing  le.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                       {{--  ///////////////////////////////////////////// --}}
                   {{--  <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_3.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Design</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_4.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_5.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_6.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_7.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_8.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                   {{--  <div class="case">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-xl-8 d-flex">
                                <a href="blog-single.html" class="img w-100 mb-3 mb-md-0" style="background-image: url({{url('readit')}}/images/image_9.jpg);"></a>
                            </div>
                            <div class="col-md-6 col-lg-6 col-xl-4 d-flex">
                                <div class="text w-100 pl-md-3">
                                    <span class="subheading">Illustration</span>
                                    <h2><a href="blog-single.html">Build a website in minutes with Adobe Templates</a></h2>
                                    <ul class="media-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                          </ul>
                                    <div class="meta">
                                        <p class="mb-0"><a href="#">11/13/2019</a> | <a href="#">12 min read</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
        </div>
    </section>
@endsection