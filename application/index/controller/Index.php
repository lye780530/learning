<?php
namespace app\index\controller;

use think\Container;
use think\Loader;

class Index
{
    /**
     * @return string
     * @url
     * @http
     * @todo: 真是搞笑
     * @time: 2020-11-04 14:20
     * @author: TIME
     */
    public function index()
    {
        return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) 2018新年快乐</h1><p> ThinkPHP V5.1<br/><span style="font-size:30px">12载初心不改（2006-2018） - 你值得信赖的PHP框架</span></p></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="eab4b9f840753f8e7"></think>';
    }

    public function hello($name = 'ThinkPHP5')
    {
        phpinfo();die;
        return 'hello,' . $name;
    }

    public function test()
    {
//        echo App::class;die;

        var_dump(\Config::get('app.dispatch_success_tmpl'));
        die;

        $obj = new \arrayAccess2();
//        var_dump($obj['title']);
//die;
//        $obj['age'] = 22;

        if ($obj['age']) {

        }

    }

    public function yaconf()
    {
//        phpinfo();die;
        var_dump(\Yaconf::get("abc.title"));
    }

    public function yaml()
    {
        $a = Loader::getRootPath();
        $str = yaml_parse_file($a."/config/time.yaml");
        var_dump($str);

//        var_dump(\Config::get('time.'));  需要在.env文件中 加上 CONFIG_EXT='.yaml'
    }

    public function container()
    {
        // 方法一
//        $config = new \Config();
//        $res = $config::get("app.");
//        var_dump($res);

        // 方法二
//        $res = Container::get('config')->get('app.');
//        var_dump($res);

        // 方法三
        $res = app('config')->get('app.');
        dump($res);
    }

    public function facade()
    {
//        dump(\think\facade\Config::get('app.'));
        // facade 静态方法 get -> 容器里面 实例 -> 实际类config get
    }

    public function facade_test()
    {
//        phpinfo();die;
        $a = rand(0, 30);
        xdebug_debug_zval('a');

        $b = $a;
        xdebug_debug_zval('a');

        die;
//        $array = debug_backtrace(); // 查看内存
        var_dump(memory_get_peak_usage());
        // 实际的 time调用
//        $obj = new \app\common\Time();
//        echo $obj->abcd();

        // 第一种门面模式使用常见：需要把上面的内容转换为门面模式思想来调用
//        echo \app\facade\Time::abcd();

        // 第二种门面模式使用的场景
//        \think\Facade::bind('app\facade\Ti', 'app\common\Ti');
//        dump(\app\facade\Ti::abcd());
    }
}
