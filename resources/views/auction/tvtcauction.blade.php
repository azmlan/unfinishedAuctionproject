@extends('layouts.layout')
@section('bod')
        <div class="header-container">
            <!--   ايقونة اضافة الاعلان    -->
            <div class="add-icon-container">
                <div class="flexbox-item left-header" >
                   <a href="/addCommodity" class="add-comm-page">
                    <i class="fas fa-plus-circle"></i></a>
                     <label for="i">اضف اعلانك</label>
                </div>
            </div>  
                <!--    الشعار     -->
            <div class="flexbox-item middle-header" >
                <a href="/tvtcauction" class="logo-link">
                    <div class="image-container">
                        <img src="/Images/project-logo.png" alt="Logo" class="logo-image">
                    </div>
                </a>
                
                    <!------- ايقونة البحث ------->
                <div class="search-container">
                    <button class="search-button" type="submit"><i class="fas fa-search"></i></button>
                    <input type="text" placeholder=" ابحث باسم الاعلان " name="search2">
                </div>
            </div>


                <!----- ايقونة الحساب  ----->
            <div class="flexbox-item right-header" >
                <a href="login" class="login-page">
                    <i class="far fa-user-circle"></i>
                </a>
                
            </div>
            
        </div>


        
<nav>
    <div class="nav-container">
        <ul>
        <li><a href="cat">    (استعلام يعرضلك  هذا القسم) قسم  الحاسب</a> </li>
            <li> <a href="cat">    (استعلام يعرضلك  هذا القسم)قسم السيارات </a></li>
            <li> <a href="cat">   (استعلام يعرضلك  هذا القسم)قسم المذكرات  </a> </li>
        </ul>
    </div>
</nav>
    
    <main> <!-- اكتب الكود هنا -->
        <div class="main-title">
            <p class="title"><h2>  المضافة  حديثا</h2></p>
        </div>
        
        <div id="main-grid-container">
        
        <div id="main-grid">


        @foreach ($itemTitles as $item)
            <a href="showCommodity" class="image-main-container">
            <div class="commImage"> 
                {{$images}}
            </div>
            <hr class="commSeperator"> 
            <p class="commTitle"> 
            
            {{$item}}
           </p>
             </a>
             
           @endforeach

             
            <!-- <a href="showCommodity" class="image-main-container">
            <div class="commImage"> 
            <img src="/images/computer.jpg" alt="">
            </div>
            <hr class="commSeperator"> 
            <p class="commTitle"> 
            @foreach ($itemTitles as $item)
            {{$item}}</p>
           @endforeach
             </a>
            -->

           
            




            </div>
        </div>
        @endsection