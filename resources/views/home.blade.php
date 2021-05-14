
@extends('layouts.app')

@section('profile-nav')

<div class="add-icon-container">
                <div class="flexbox-item left-header" >
                   <a href="/addCommodity" class="add-comm-page">
                    <i class="fas fa-plus-circle"></i></a>
                     <label for="i">اضف اعلانك</label>
                </div>
            </div>  
  
<div class="profile-container" >
      <nav>
    <div class="nav-container" >
        <ul >
            <li><a href="#">الرسائل</a></li>
            <li> <a href="#">المفضلة</a></li>
            <li> <a href="#">اعلاناتي</a></li>

        </ul>
    </div>
</nav>
</div>


@endsection



@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            
                <!-- <div class="card-header" style="color:#073eb3;">{{ __('حسابي') }}</div><br> -->
            

                <div class="card-body">
                    @if (session('status'))
                    
                    <div class="alert alert-success" role="alert" style="color:#073eb3;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="blue"><a href="#">تغيير كلمة المرور</a></p>
                    <!-- {{ __('تم تسجيل الدخول بنجاح!') }} -->
                    
                </div>
            </div>
        </div>
    </div>
</div>
<hr>
{{ session('msg') }}
    
@endsection
