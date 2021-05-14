@extends('layouts.layout')
@section('bod')
    
    <main> <!-- اكتب الكود هنا -->
        <div class="posterContainer">
    
          <div class="posterHead">
          <h2 class="posterTitle color">- {{ $item->itemTitle}} </h2>
          <div class="posterLocation "><span>بريدة</span></div>
          <div  class="posterTime "><span>متى نزل الاعلان  </span></div>
          <div  class="posterUser  "><a href="/userID">User</a ></div>
          </div>

          <div class="posterMiddle">
            <div class="posterCommodity">
            <p>  
            {{$item->itemDesc}}
            </p>
                 
            </div>
            <hr style="margin-bottom:20px;">
            <div class="posterImages">
                <img src="/images/books.jpg" alt="">
                <img src="/images/books.jpg" alt="">
                <img src="/images/books.jpg" alt="">
            </div>
          </div>

          
          <h2><span class="color">للتواصل  : </span><a href="tel:055828282" class="posterNumber color">055828282</a></h2>
      <div class="posterContact">          
            
            <a href="" class="emailIcone"> <i class="fa fa-envelope-o color" aria-hidden="true"></i> </a> 
        <a href="" class="likeIcon"><i class="fa fa-thumbs-up color" aria-hidden="true"></i></a>
    </div>



    <div class="posterComments">
    <div class="posterCommentsHead">
        <a href="userID">User Name</a><br>
        <div> التوقيت</div>
        
        </div>
            <div class="posterCommentBody">
                <p>
                    Lorem ipsum dolor sit a
                    met consectetur adipisici
                    ng elit. Facere, optio non
                     dolore unde quibusdam nam ne
                     cessitatibus nostrum, distin
                     ctio doloribus saepe sit vit
                     ae iusto, possimus similique
                      ratione itaque mollitia fugiat magni!
                </p>

            </div>
    </div>

    
        <div class="posterLast">
        <form action="" class="posterAsk">
        <textarea class="posterAsk outline" name="commentBody" rows="9" maxlength="200" placeholder="أكتب سؤالك للمعلن هنا"></textarea>
        <br><button class="posterSubmit"> اضافة سؤال</button>
        </form>

        </div>




        </div>
    </main> <!-- وقف هنا -->
    @endsection