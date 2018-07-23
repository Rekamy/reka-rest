<?php

namespace app\components;


class DateTimeHelper
{
    public static function ReadableDateDiff($start, $end, $precision = 2)
    {
        $result = ['reversed'=>false];
        // If not numeric then convert timestamps
        if( !is_int( $start ) ) {
            $start = strtotime( $start );
        }
        if( !is_int( $end ) ) {
            $end = strtotime( $end );
        }
        // If start > end then swap the 2 values
        if( $start > $end ) {
            list( $start, $end ) = array( $end, $start );
            $result = ['reversed'=>true];
        }
        // Set up intervals and diffs arrays
        $intervals = array( 'year', 'month', 'day', 'hour', 'minute', 'second' );
        $diffs = array();
        foreach( $intervals as $interval ) {
            // Create temp time from start and interval
            $ttime = strtotime( '+1 ' . $interval, $start );
            // Set initial values
            $add = 1;
            $looped = 0;
            // Loop until temp time is smaller than end
            while ( $end >= $ttime ) {
                // Create new temp time from start and interval
                $add++;
                $ttime = strtotime( "+" . $add . " " . $interval, $start );
                $looped++;
            }
            $start = strtotime( "+" . $looped . " " . $interval, $start );
            $diffs[ $interval ] = $looped;
        }
        $count = 0;
        $times = array();
        foreach( $diffs as $interval => $value ) {
            // Break if we have needed precission
            if( $count >= $precision ) {
                break;
            }
            // Add value and interval if value is bigger than 0
            if( $value > 0 ) {
                if( $value != 1 ){
                    $interval .= "s";
                }
                // Add value and interval to times array
                $times[] = $value . " " . $interval;
                $count++;
            }
        }
        $result['diff'] = implode( ", ", $times );
        // Return string with times
        return $result;
    }
}
