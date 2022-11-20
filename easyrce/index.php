<?php

/*
# -*- coding: utf-8 -*-
# @Author: swedsn
# @Date:   2022-11-15 16:46:34

*/

error_reporting(0);
if(isset($_GET['cmd'])){
    $c = $_GET['cmd'];
    if(!preg_match("/flag|cat|php/i", $c)){
        eval($c);
    }
    
}else{
    highlight_file(__FILE__);
}