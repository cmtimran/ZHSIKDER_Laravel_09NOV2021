<?php

namespace App\Http\Controllers;

use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use DB;
use Zoom;

class LiveClassController extends Controller
{  
  public function index(Request $request)
  {
    $auth_code = $request->auth_code;
    $teacher_id = $request->teacher_id;
    $topic = $request->topic;
    $start_time = $request->start_time;

    $user = DB::table('users')->where('auth_code', $auth_code)->first();

    if(!empty($user)) {
      DB::table('users')->where('id', $user->id)->update(['auth_code'=>'']);
      $teacher = DB::table('users')->find($teacher_id);

      if(!empty($teacher)) {
        $zoomUser = Zoom::user()->find($teacher->email);

        if(!empty($zoomUser) && $zoomUser->verified==1) {
          $meeting = Zoom::meeting()->make([
            'topic' => (!empty($topic)) ? $topic : 'Online Class',
            'type' => 2,
            'password' => '123456',
            'start_time' => new Carbon($start_time) // best to use a Carbon instance here.
          ]);

          $meeting->settings()->make([
            'join_before_host' => true,
            'approval_type' => 1,
            'registration_type' => 2,
            'enforce_login' => false,
            'waiting_room' => false,
          ]);

          $ret = $zoomUser->meetings()->save($meeting);

          if(!empty($ret) && !empty($ret->id)) {
            $output = [
              'msgType' => 'success',
              'msg' => 'Meeting created successfully',
              'meeting_id' => $ret->id,
              'join_url' => $ret->join_url
            ];
          } else {
            $output = [
              'msgType' => 'error',
              'msg' => 'Meeting not created'
            ];
          }
        } else {
          $output = [
            'msgType' => 'error',
            'msg' => 'Teacher is not added in zoom'
          ];
        }
      } else {
        $output = [
          'msgType' => 'error',
          'msg' => 'Teacher not valid'
        ];
      }
    } else {
      $output = [
        'msgType' => 'error',
        'msg' => 'User Authentication not valid'
      ];
    }

    return $output;

  }
  
  




}
