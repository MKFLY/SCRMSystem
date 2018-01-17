<?php
require_once('include/Dashlets/Dashlet.php');
class PPIDashlet extends Dashlet{
    //Sugar系统调用Dashlet时会调用这个构造函数
    function PPIDashlet($id, $def){
        parent::Dashlet($id);
        $this->title = 'Dashlet标题';
    }
    //这个函数是用来显示Dashlet内容的
    function display($text = ''){
        //这里写你在Dashlets显示内容的业务逻辑代码，此示例简单输出一行文本。
        $text = '这是Dashlet显示的内容。';
        return $text;
    }
}
?>