<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookingController extends Controller
{
    function booking(Request $request){
    	$ym = $request->ym;
    	echo view('calender')->with(compact('ym'));
    }



    function getTimeSlot(Request $request){
    	$output = $request->ym;
    	for ($i=0; $i < 11; $i++) { ?>
                <div style="width: 15%; position: relative; color: #fff; vertical-align: middle; padding: 10px;float: left; border:1px solid #ccc;text-align: center;">
                    <input disabled="" id="<?php echo $i; ?>" type="checkbox">
                    <label style="<?php echo ($i==3 ) ? 'background-color: red;cursor: not-allowed;' : ' background-color: #0F9786;'; ?>  position: absolute;width: 100%;left: 0;top: 0; height: 100%" for="<?php echo $i; ?>"><?php echo $output; ?></label>
                </div> 
       <?php }
    }    

    function calender_sitebar(Request $request){
        $ym_sitebar = $request->ym_sitebar;
        echo view('calender-sitebar')->with(compact('ym_sitebar'));
    }


    function get_booking_list(Request $request){
        $output = $request->ym;
        for ($i=0; $i < 11; $i++) { ?>
                <div style="width: 15%; position: relative; color: #fff; vertical-align: middle; padding: 10px;float: left; border:1px solid #ccc;text-align: center;">
                    <input disabled="" id="<?php echo $i; ?>" type="checkbox">
                    <label style="<?php echo ($i==3 ) ? 'background-color: red;cursor: not-allowed;' : ' background-color: #0F9786;'; ?>  position: absolute;width: 100%;left: 0;top: 0; height: 100%" for="<?php echo $i; ?>"><?php echo $output; ?></label>
                </div> 
       <?php }
    }
}
