<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CalendarController extends Controller
{
    // public function index() {
    //     return view('admin.calendar');
    //    }

       public function index(Request $request)
       {

//            if($request->ajax()) {
// dd("ok");
//                 $data = Calendar::whereDate('start', '>=', $request->start)
//                           ->whereDate('end',   '<=', $request->end)
//                           ->get(['id', 'title', 'start', 'end']);

//                 return response()->json($data);
//            }

           return view('admin.calendar');
       }

       /**
        * Write code on Method
        *
        * @return response()
        */
       public function ajax(Request $request): JsonResponse
       {

           switch ($request->type) {
              case 'add':
                 $event = Calendar::create([
                     'title' => $request->title,
                     'start' => $request->start,
                     'end' => $request->end,
                 ]);

                 return response()->json($event);
                break;

              case 'update':
                 $event = Calendar::find($request->id)->update([
                     'title' => $request->title,
                     'start' => $request->start,
                     'end' => $request->end,
                 ]);

                 return response()->json($event);
                break;

              case 'delete':
                 $event = Calendar::find($request->id)->delete();

                 return response()->json($event);
                break;

              default:
                # code...
                break;
           }
       }
}
