<?php

class Ajax_Aboutme {

    public static function aboutme_centerblock($data) {
        $functions = array('ct_aboutme', 'ct_myphotos');
        if (in_array($data, $functions)) {
            return Plussia_Viewer::getAboutmeCenterblock(array_search($data, $functions)+1);
        }
        return null;
    }

}