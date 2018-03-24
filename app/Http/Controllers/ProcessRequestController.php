<?php

namespace App\Http\Controllers;

use App\BeninTimeFrequency;
use Illuminate\Http\Request;

class ProcessRequestController extends Controller
{
    //
    public function getFreeSpaces(){
        $channelId = BeninTimeFrequency::getChannelsForTime(request('selected_time'));
//        $location = request('location');
//
//        if($location == "benin"){
//            $channels = BeninTimeFrequency::getChannelsForTime(request('seleceted_time'));
//        }
//        elseif($location == "ogbona"){
//
//        }
//        dd($channels);
//        dd($channels->beninChannels);
        $timeSelect = request('selected_time');
        if(($timeSelect % 12) > 0){
            $timeSelected = "" . ($timeSelect % 12) . "PM";
        }
        else{
            $timeSelected = "" . ($timeSelect % 12) . "AM";
        }
        $channels =$this->mapChannelIdToChannels($channelId);
//        dd($channels);
        return view('firstpage', compact('timeSelected','channels'));
    }

    public function mapChannelIdToChannels($channel_id){
        $newChannel = array();
        foreach ($channel_id as $key => $value){
//            var_dump($value);
        $newValue = $value->channel_id + 13;
        array_push($newChannel, $newValue);
        }
        return $newChannel;
    }
}
