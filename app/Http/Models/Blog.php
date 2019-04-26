<?php

namespace App\Http\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;

class Blog extends Model{

    protected $table = 'blog';

    //convert markdown to html
    public function viewMarkdownInHtml(){
        return Markdown::convertToHtml($this->content);
    }

    //convert title from vietnamese to vietnamese simple
    public function getFriendlyUrl(){

        $string = new StringConvert();

        //url = url than thien + id
        $url = $string->sanitizeTitle($this->title);
        return $url;
    }

    public function getAuthor(){
        $author = $user = DB::table('users')->where('id', $this->author_id)->first();
        return $author;
    }

    //hàm lấy ra năm
    public function getYear(){
        return substr($this->time_date, 0, 4);
    }


    //hiển thị thời gian theo cách thân thiện
    public function showFriendlyTime(){

        //2015-12-01 07:43:55
        $thisDateTime = $this->created_at;
        $compareOnDay = substr($this->created_at, 0, 10);

        //nếu là trong ngày
        if(date('Y-m-d') == $compareOnDay){
            return "Hôm nay, lúc ". substr($thisDateTime, 11, 5);

            //nếu không phải trong ngày
        }else {

            $extraYear = substr($this->created_at, 0, 4);
            $thisYear = date("Y");

            //nếu là trong năm
            if ($extraYear == $thisYear) {
                return substr($thisDateTime, 8, 2)." tháng ". substr($thisDateTime, 5, 2).", lúc ". substr($thisDateTime, 11, 5);
            }else{
                return substr($thisDateTime, 8, 2)." tháng ". substr($thisDateTime, 5, 2).", ".$extraYear;
            }
        }

    }
}
