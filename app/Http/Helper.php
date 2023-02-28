<?php
use Illuminate\Support\Facades\DB;

function ReturnSubCategoryCount($main_cat)
{
  return DB::table('tbl_category')->where(['main_cat'=>$main_cat])->count();
}


function ReturnMainCatName($sub_cat)
{
  return DB::table('tbl_category')->where(['id'=>$sub_cat])->first()->cat_name;
}

if (!function_exists('getYear')) {
  function getYear() {
    $curr_date = date('m/d/Y h:i:s a', time());
    $curr_month = date('m');
    $curr_year = date('Y');
    $api_arr = ['-01', '-04', '-07', '-10'];
    $api_end = '';

    if($curr_month == 1) {
      $api_end = ($curr_year - 1) . $api_arr[3];
    } else if($curr_month > 1 && $curr_month <= 4) {
      $api_end = $curr_year . $api_arr[0];
    } else if($curr_month > 4 && $curr_month <= 7) {
      $api_end = $curr_year . $api_arr[1];
    } else if($curr_month > 7 && $curr_month <= 10) {
      $api_end = $curr_year . $api_arr[2];
    } else if($curr_month > 10 && $curr_month <= 12) {
      $api_end = $curr_year . $api_arr[3];
    }

    // print_r($api_end);
    return $api_end;
  }
}
function limit_text($text, $limit) {
    if (str_word_count($text, 0) > $limit) {
        $words = str_word_count($text, 2);
        $pos   = array_keys($words);
        $text  = substr($text, 0, $pos[$limit]) . '...';
    }
    return $text;
}
