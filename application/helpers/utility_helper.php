<?php

function get_name_by_auto_id( $table_name = NULL, $auto_id = NULL, $field_name = 'name' )
{
    $ci = &get_instance();
    if ( !empty( $table_name ) and !empty( $auto_id ) and !empty( $field_name ) ) {
        $query     = $ci->db->select( 'id,' . $field_name );
        $query     = $ci->db->where( 'id', $auto_id );
        $query     = $ci->db->get( $table_name );
        $total_row = $query->num_rows();
        if ( $total_row > 0 ) {
            $ressult = $query->row();
            return $ressult->$field_name;
        } else {
            return FALSE;
        }
    } else {
        return FALSE;
    }
}

function check_unique_field( $table_name = NULL, $unique_field = NULL, $field_name = 'name' )
{
    $ci = &get_instance();
    if ( !empty( $table_name ) and !empty( $unique_field ) and !empty( $field_name ) ) {
        $query     = $ci->db->select( $field_name );
        $query     = $ci->db->where( $field_name, $unique_field );
        $query     = $ci->db->get( $table_name );
        $total_row = $query->num_rows();
        if ( $total_row > 0 ) {
            return FALSE;
        } else {
            return TRUE;
        }
    } else {
        return FALSE;
    }
}

function get_examinfo_by_id( $table_name = NULL, $auto_id = NULL, $field_name = 'name' )
{
    $ci = &get_instance();
    if ( !empty( $table_name ) and !empty( $auto_id ) and !empty( $field_name ) ) {
        $query     = $ci->db->select( 'exam_id,' . $field_name );
        $query     = $ci->db->where( 'exam_id', $auto_id );
        $query     = $ci->db->get( $table_name );
        $total_row = $query->num_rows();
        if ( $total_row > 0 ) {
            $ressult = $query->row();
            return $ressult->$field_name;
        } else {
            return FALSE;
        }
    } else {
        return FALSE;
    }
}

function bangla_date ($fDate) {
    //$currentDate = date("l, F j, Y");
    $engDATE = array('1','2','3','4','5','6','7','8','9','0','January','February','March','April',
    'May','June','July','August','September','October','November','December','Saturday','Sunday',
    'Monday','Tuesday','Wednesday','Thursday','Friday','A','P','M');

    $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারি','ফেব্রুয়ারি','মার্চ','এপ্রিল','মে',
    'জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','
    বুধবার','বৃহস্পতিবার','শুক্রবার','এ','পি','এম');

    $convertedDATE = str_replace($engDATE, $bangDATE, $fDate);
    return $convertedDATE;
    //echo "$convertedDATE";
}


function limitTextWords($content = false, $limit = false, $stripTags = false, $ellipsis = false) 
{
    if ($content && $limit) {
        $content = ($stripTags ? strip_tags($content) : $content);
        $content = explode(' ', $content, $limit+1);
        array_pop($content);
        if ($ellipsis) {
            array_push($content, ' '); #, '...'
        }
        $content = implode(' ', $content);
    }
    return $content;
}
function limitTextChars($content = false, $limit = false, $stripTags = false, $ellipsis = false) 
{
    if ($content && $limit) {
        $content  = ($stripTags ? strip_tags($content) : $content);
        $ellipsis = ($ellipsis ? "..." : $ellipsis);
        $content  = mb_strimwidth($content, 0, $limit, $ellipsis);
    }
    return $content;
}
function format_interval(DateInterval $interval) {
    $result = "";
    if ($interval->y) { $result .= $interval->format("%y years "); }
    if ($interval->m) { $result .= $interval->format("%m months "); }
    if ($interval->d) { $result .= $interval->format("%d days "); }
    if ($interval->h) { $result .= $interval->format("%h hours "); }
    if ($interval->i) { $result .= $interval->format("%i minutes "); }
    if ($interval->s) { $result .= $interval->format("%s seconds "); }

    return $result;
}
//generate a username from Full name
function generate_username($string_name="Sajib Ahmed", $rand_no = 200){
        $username_parts = array_filter(explode(" ", strtolower($string_name))); //explode and lowercase name
        $username_parts = array_slice($username_parts, 0, 2); //return only first two arry part
    
        $part1 = (!empty($username_parts[0]))?substr($username_parts[0], 0,8):""; //cut first name to 8 letters
        $part2 = (!empty($username_parts[1]))?substr($username_parts[1], 0,5):""; //cut second name to 5 letters
        $part3 = ($rand_no)?rand(0, $rand_no):"";
        #$username = $part1.".". str_shuffle($part2). $part3; //str_shuffle to randomly shuffle all characters 
        $username = $part1.".". $part2 . $part3; //str_shuffle to randomly shuffle all characters 
        return $username;
}
#echo generate_username("Sajib Ahmed", 10);

///// End Utility Helper
?>