<?php
//前端首页控制器
Class IndexAction extends Action{
    //首页视图
    Public function index(){
        $this->display();
    }
    //异步发布处理
    Public function  handle(){
        if(!IS_AJAX) halt('页面不存在');
        
        p(T('post.'));
    }
}