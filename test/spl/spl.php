<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 * @url
 * @http
 * Todo:
 * User: 黑子
 * Date: 2020-10-29 15:49
 */


spl_autoload_register("autoload");

/**
 * @param string $className
 * @url
 * @http
 * Todo: 自定义类加载
 * User: 黑子
 * Date: 2020-10-29 16:06
 */
function autoload($className = '')
{
    echo '类目为：' . $className;
    include "./{$className}.php";
}

$obj = new time();
$obj->index();