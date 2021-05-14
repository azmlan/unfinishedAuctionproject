<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;
class ItemController extends Controller
{
    //
    function index(){
        
        // $itemTitles= Item::select('itemTitle')->get();
        //   $itemTitles= Item::all();
        //   $itemTitles= Item::latest()->get();
        //   $itemTitles= Item::select('itemTitle')->where('id',1)->get();
          $images= Item::find('itemImage');
           $itemTitles= Item::all();
        
        
    return view('auction/tvtcauction',['itemTitles'=>$itemTitles,'images'=>$images]);
         }




         function show($id){
            $item=Item::find($id);
            return view('auction/Commodities/showCommodity',['item'=>$item]);
        }



        function showCat(){

             
             return view('auction/cat');
         }




         function create(){

            return view('auction/Commodities/addCommodity');
            }




            function store(){

                $item = new Item();
      $item ->titel = request('title');
      $item ->cat = request('cat');
      $item ->postDetails = request('postDetails');
      $item ->postImage = request('postImage');
      
      
      $item->save();
      
      
      return redirect('/home')->with('msg','تم اضافة الاعلان ');
                

            }
         


    }

