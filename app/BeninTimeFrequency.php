<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BeninTimeFrequency extends MyModel
{
    //
    public function beninChannels(){
        return $this->belongsTo(BeninChannels::class);
    }

    public static function getChannelsForTime($selectedTime){
        $threshold_signal = -95;
        $channels = array();
        switch ($selectedTime){
            case 0:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('12AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 1:
//                $channels = BeninTimeFrequency::whereIn("1AM",$selectedTime)->where('latest', '<=', $threshold_signal)->get();
//                $channels = BeninTimeFrequency::where('1AM', '<=', $threshold_signal)->get();

              $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('1AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 2:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('2AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 3:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('3AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 4:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('4AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 5:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('5AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 6:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('6AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 7:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('7AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 8:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('8AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 9:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('9AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 10:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('10AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 11:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('11AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 12:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('12AM', '<', $threshold_signal)->distinct()->get();
                break;
            case 13:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('1PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 14:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('2PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 15:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('3PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 16:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('4PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 17:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('5PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 18:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('6PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 19:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('7PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 20:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('8PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 21:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('9PM', '<', $threshold_signal)->distinct()->get();
                break;

            case 22:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('10PM', '<', $threshold_signal)->distinct()->get();
                break;

            case 23:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('11PM', '<', $threshold_signal)->distinct()->get();
                break;
            case 24:
                $channels = DB::table('benin_time_frequencies')->select('channel_id')->where('12AM', '<', $threshold_signal)->distinct()->get();
                break;
            default:
                break;
        }
        return $channels;

    }
}
