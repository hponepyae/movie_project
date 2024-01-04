<?php

namespace App\Http\Controllers;

use App\Models\AllMovie;
use Illuminate\Http\Request;

class AllMovieController extends Controller
{
          function start () {
          $result =   AllMovie::all();
        //  dd($result);
            return view('home',compact('result'));
          }

          function admin () {
            return view('adminSite');
          }


        //    insert data
          function insert (Request $request) {

            $data = $this->insertData($request);
          if ($request->hasFile('image')) {
            $file = uniqid(). $request->file('image')->getClientOriginalName();
            $request->image->storeAs('public',$file);
            $data['image']= $file;
          }
            AllMovie::create($data);
            return redirect()->route("admin");

          }
                  //    insert data


                  //review

         function review ($id) {
            $review= AllMovie::where('id',$id)->first()->toArray();

            return view('review',compact('review'));

         }



          private function insertData ($request) {
             return [
                'title' => $request->title,
                'description' => $request->description,
                'time' => $request->time,
                'rating' => $request->rating,
                'date' => $request->date

             ];
          }
 }
