<?php
    function getPost ($value) {
        if(isset($_POST[$value])) {
            $result = $_POST[$value];
            $result = fixSQLInjext($result);
            return $result;
        }
    }

    function getGet ($value) {
        if(isset($_GET[$value])) {
            $result = $_GET[$value];
            $result = fixSQLInjext($result);
            return $result;
        }
    }

    function random_name_photo ($name) {
        $numberRandom = (int)rand(0,10);
        //VD random:$numberRandom = 1
        $date = date("d-m-Y H:i:s");
        // $date = 22/11/2021 3:36:11
        $repeatName = str_repeat($name, $numberRandom);
        // name


        return md5(md5($repeatName).$date);
        // haafajhakkjsdhak.jpg
    }

    function uploadFile ($FILES,$BASEURL,$TYPE) {
        if($FILES['size']==0) {
            return 0;
        }

        $type = $FILES['type'];
        $arrytype = explode('/',$type);
        $file_type = $arrytype[count($arrytype)-1];
        if(!in_array($file_type,$TYPE)) {
            return 0;
        }
        $name = random_name_photo($FILES['name']).'.'.$file_type;
        $url = $BASEURL.$name;

        move_uploaded_file($FILES['tmp_name'],$url);
        return array(
            'status'=>1,
            'name'=>$name
        );
    }

    function DeleteFile($BASEURL, $nameFile) {
        if($nameFile != null || $nameFile != '') {
            if(file_exists($BASEURL.$nameFile)) {
                unlink($BASEURL.$nameFile);
                return 1;
            }
        }
    }

    function fixSQLInjext ($sql) {
        $sql = str_replace('\\', '\\\\', $sql);
        $sql = str_replace('\'', '\\\'', $sql);
        return $sql;
    }   

    function convert_vi_to_en($str) {
        $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", "a", $str);
        $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", "e", $str);
        $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", "i", $str);
        $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", "o", $str);
        $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", "u", $str);
        $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", "y", $str);
        $str = preg_replace("/(đ)/", "d", $str);
        $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", "A", $str);
        $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", "E", $str);
        $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", "I", $str);
        $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", "O", $str);
        $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", "U", $str);
        $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", "Y", $str);
        $str = preg_replace("/(Đ)/", "D", $str);
        $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
        return $str;
    }