<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HomeOrder;

class HomeController extends Controller
{
    function fetchContent($page, $isMob){

        $dataAmount = 4;
        $skip = ($page-1) * $dataAmount; 

        $contents = HomeOrder::with("work", "workImage", "workImage.work", "product", "productImage", "productImage.product", "blog")->orderBy("order")->skip($skip)->take($dataAmount)->get();

        $loop = $skip;
        $htmlContents = [];
        foreach($contents as $order){

            array_push($htmlContents, $this->welcomeCards($loop, $isMob, $order));
            $loop++;
        }

        return response()->json(["html" => $htmlContents]);

    }

    function welcomeCards($loop, $isMob, $order){

        $class = "";
        $style = "";
        if($loop == 0){
            $style = "width: 300px;";
        }
        else if($loop == 1){
            $style = "";
        }
        else if($loop == 2){
            $style = "height: auto!important;";
        }

        else if($loop == 4){
            $style = "";
        }
        else if($loop == 5){
            $style = "margin-top: -15rem;
            margin-left: -8rem;
            height: 300px!important;
            margin-bottom: 10rem;";
        }
        else if($loop == 6){
            $style = "margin-top: -19rem;";
        }else if($loop == 20){
            $style = "margin-top: -16rem; width: 200px; margin-left: 0rem;    height: 500px;";
        }


        if($loop == 0){
            $class="col-md-5  col-lg-5 ";
        }

        else if($loop == 1 || $loop == 17){
            $class="col-md-7 col-lg-7";
        }

        else if($loop == 2){
            $class = "col-md-6 offset-md-3 col-lg-6 offset-lg-3 hola";
        }
        
        else if($loop== 5){
            $class = "col-md-4 offset-md-8 col-lg-4 offset-lg-8";
        }

        else if($loop == 6 || $loop == 7){
            $class="col-md-6";
        }

        else if($loop == 3 || $loop == 4 || $loop == 8 || $loop == 9 || $loop == 11 || $loop == 12 || $loop == 16 || $loop == 19){
            $class = "col-lg-12";
        }

        else if($loop == 10){
            $class = "col-md-8 offset-md-4 col-lg-8 offset-lg-4";
        }

        else if($loop == 13 || $loop == 14 || $loop == 15){
            $class="col-md-4 col-lg-4";
        }

        else if($loop == 18){
            $class = "col-md-4 offset-md-6 col-lg-4 offset-lg-6";
        }

        else if($loop == 20){
            $class ="col-md-4 col-lg-4";
        }


        if($order->work){

            $html = "<div class='$class grid-item'>";	
            $html .="<a href='".url('/works?work='.$order->work->slug)."'>";	
            if($order->work->main_image_file_type == 'image'){
                $html .="<img src='".$order->work->main_image."' alt='imagen' style='$style'>";
            }
            else{

                if(intval($isMob) == 1){
                    $html .="<video style='width: 100%; $style' controls>";
                }else{
                    $html .="<video style='width: 100%; $style' loop autoplay='true' muted='muted'>";
                }
                $html .="<source src='".$order->work->main_image."#t=0.5' type='video/mp4'>";	
                $html .="</video>";

            }       	
            $html .="</a>";	
            $html .="</div>";	

        }
        else if($order->workImage){

            $html = "<div class='$class grid-item'>";
            if($order->workImage->file_type == 'image'){
                $html .= "<a href='".url('/works?work='.$order->workImage->work->slug)."'>";
            }else{
                $html .= "<a>";
            }

            if($order->workImage->file_type == 'image'){
                $html .= "<img class='img-miniatura' src='".$order->workImage->image."' alt='imagen' style='$style'>";
            }else{
                if(intval($isMob) == 1){
                    $html .= "<video style='width: 100%; $style' controls>";
                }else{
                    $html .= "<video style='width: 100%; $style' loop autoplay='true' muted='muted'>";
                }	
                $html .= "<source src='".$order->workImage->image."#t=0.5' type='video/mp4'>";	
                $html .= "</video>";	
            }

            $html .= "</a>";	
            $html .="</div>";


        }

        else if($order->product){

            $html = "<div class='$class grid-item'>";
            if($order->product->main_image_file_type == 'image'){
                $html .= "<a href='".url('/shop')."'>";
            }else{
                $html .= "<a>";
            }
            
            if($order->product->main_image_file_type == 'image'){
                $html .= "<img class='img-miniatura' src='".$order->product->image."' alt='imagen' style='$style'>";
            }else{
                if(intval($isMob) == 1){
                    $html .= "<video style='width: 100%; $style' controls>";
                }else{
                    $html .= "<video style='width: 100%; $style' loop autoplay='true' muted='muted'>";
                }	
                $html .= "<source src='".$order->product->image."#t=0.5' type='video/mp4'>";	
                $html .= "</video>";	
            }
            
            $html .= "</a>";	
            $html .="</div>";


        }
        else if($order->productImage){

            $html = "<div class='$class grid-item'>";
            if($order->productImage->file_type == 'image'){
                $html .= "<a href='".url('/shop')."'>";
            }else{
                $html .= "<a>";
            }
            
            if($order->productImage->file_type == 'image'){
                $html .= "<img class='img-miniatura' src='".$order->productImage->image."' alt='imagen' style='$style'>";
            }else{
                if(intval($isMob) == 1){
                    $html .= "<video style='width: 100%; $style' controls>";
                }else{
                    $html .= "<video style='width: 100%; $style' loop autoplay='true' muted='muted'>";
                }	
                $html .= "<source src='".$order->productImage->image."#t=0.5' type='video/mp4'>";	
                $html .= "</video>";	
            }
            
            $html .= "</a>";	
            $html .="</div>";


        }

        else if($order->blog){

            $html = "<div class='$class grid-item'>";
            if($order->blog->main_image_file_type == 'image'){
                $html .= "<a href='".url('/blog/'.$order->blog->slug)."'>";
            }else{
                $html .= "<a>";
            }
            
            if($order->blog->main_image_file_type == 'image'){
                $html .= "<img class='img-miniatura' src='".$order->blog->image."' alt='imagen' style='$style'>";
            }else{
                if(intval($isMob) == 1){
                    $html .= "<video style='width: 100%; $style' controls>";
                }else{
                    $html .= "<video style='width: 100%; $style' loop autoplay='true' muted='muted'>";
                }	
                $html .= "<source src='".$order->blog->image."#t=0.5' type='video/mp4'>";	
                $html .= "</video>";	
            }
            
            $html .= "</a>";	
            $html .="</div>";


        }
        

        return $html;


    }
}
