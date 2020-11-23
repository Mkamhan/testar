<li class="nav-item start {{ active_link(null,'active open') }} ">
    <a href="{{aurl('')}}" class="nav-link nav-toggle">
        <i class="fa fa-home"></i>
        <span class="title">{{trans('admin.dashboard')}}</span>
        <span class="selected"></span>
    </a>
</li>
<li class="nav-item start {{active_link('settings','active open')}}  ">
    <a href="{{aurl('settings')}}" class="nav-link nav-toggle">
        <i class="fa fa-cog"></i>
        <span class="title">{{trans('admin.settings')}}</span>
        <span c ass="selected"></span>
    </a>
</li>
<li class="nav-item start {{active_link('sections','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-server"></i>
        <span class="title">{{trans('admin.sections')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('sections','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('sections','active open')}}  "> 
            <a href="{{aurl('sections')}}" class="nav-link "> 
                <i class="fa fa-server"></i>
                <span class="title">{{trans('admin.sections')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('sections/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('relevantdepartments','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list-ol"></i>
        <span class="title">{{trans('admin.relevantdepartments')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('relevantdepartments','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('relevantdepartments','active open')}}  "> 
            <a href="{{aurl('relevantdepartments')}}" class="nav-link "> 
                <i class="fa fa-list-ol"></i>
                <span class="title">{{trans('admin.relevantdepartments')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('relevantdepartments/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('batches','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-list-alt"></i>
        <span class="title">{{trans('admin.batches')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('batches','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('batches','active open')}}  "> 
            <a href="{{aurl('batches')}}" class="nav-link "> 
                <i class="fa fa-list-alt"></i>
                <span class="title">{{trans('admin.batches')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('batches/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('supervisores','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-user"></i>
        <span class="title">{{trans('admin.supervisores')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('supervisores','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('supervisores','active open')}}  "> 
            <a href="{{aurl('supervisores')}}" class="nav-link "> 
                <i class="fa fa-user"></i>
                <span class="title">{{trans('admin.supervisores')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('supervisores/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>
<li class="nav-item start {{active_link('archives','active open')}} ">
    <a href="javascript:;" class="nav-link nav-toggle">
        <i class="fa fa-folder-open"></i>
        <span class="title">{{trans('admin.archives')}} </span>
        <span class="selected"></span>
        <span class="arrow {{active_link('archives','open')}}"></span>
    </a>
    <ul class="sub-menu" style="{{active_link('','block')}}"> 
        <li class="nav-item start {{active_link('archives','active open')}}  "> 
            <a href="{{aurl('archives')}}" class="nav-link "> 
                <i class="fa fa-folder-open"></i>
                <span class="title">{{trans('admin.archives')}}  </span>
                <span class="selected"></span>
            </a>
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('archives/create') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('admin.create')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
        <li class="nav-item start"> 
            <a href="{{ aurl('/foo') }}" class="nav-link "> 
                <i class="fa fa-plus"></i> 
                <span class="title"> {{trans('اضافة ملف الاستورج ')}}  </span> 
                <span class="selected"></span> 
            </a> 
        </li> 
    </ul> 
</li>