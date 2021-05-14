@extends('layouts.layout')
@section('bod')
        <!-------- الشعار -------->
        <div class="flexbox-item middle-header" >
        <a href="/tvtcauction" class="logo-link">
        <div class="image-container">
        <img src="/Images/project-logo.png" alt="Logo" class="logo-image">
        </div>
        </a>

        <!-------- اضافة سلعة------ -->
<form action="/auction/addCommodity" method="POST" class="addCommForm"> 
@csrf
<div class="addCommContainer">


<label for="postTitle" class="postLabel"><h3>عنوان الاعلان :</h3></label>
<input type="text" name="title" id="title"  class="postTitle outline" placeholder="للبيع اسطوانة غاز" required>
<hr>


<label for="postSection" class="postLabel"><h3>نوع السلعة :</h3></label>
<select class="postSection outline" name="cat" id="cat" require>
    <option value="books">كتب</option>
    <option value="devices">أجهزة</option>
    <option value="cars">سيارات</option>
</select>
<hr>

<label for="postTitle" class="postLabel"><h3> <input type="checkbox">  عرض رقم الجوال   </h3> </label>


<hr><br><br>

<label for="postDetails" class="postLabel"><h3> نص الاعلان :   </h3></label>
<textarea  class="outline" name="postDetails" id="postDetails" cols="30" rows="10" placeholder="التفاصيل"></textarea>
<hr>



<label for="postImage" class="postLabel"><h3> اختر صورة : </h3></label><br>
  <input type="file" value="chose" name="postImage" id=""  class="postImage" onchange="previewImage(event)"><br><br>
  <div class="postImageContainer">
      <img src="" alt="" id="postImage"><br>
    </div>

  <script type="text/javascript">
function previewImage(event) {
    var reader = new FileReader();
    var imageField = document.getElementById("postImage")

reader.onload = function(){
    if (reader.readyState == 2 ){
        imageField.src=reader.result;
    }
}
reader.readAsDataURL(event.target.files[0]);
}

  </script>
  <hr>


<br>
<input type="submit" class="submitButton" value="نشر الاعلان">


</div>


</form>

@endsection