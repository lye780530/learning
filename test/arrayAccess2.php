<?php
/**
 * ${PARAM_DOC}
 * @return ${TYPE_HINT}
 * ${THROWS_DOC}
 * @url
 * @http
 * Todo:
 * User: 黑子
 * Date: 2020-11-02 15:33
 */
class arrayAccess2 implements \ArrayAccess
{
    private $testDara = [
        'title' => 'TIME'
    ];

    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
        echo "offsetExists---{$offset}";
        return isset($this->testDara[$offset]);
    }

    public function offsetGet($offset)
    {
        // TODO: Implement offsetGet() method.
        echo "offsetGet---{$offset}";
        return $this->testDara[$offset];
    }

    public function offsetSet($offset, $value)
    {
        // TODO: Implement offsetSet() method.
        echo "offsetSet---{$offset}---{$value}";
        return $this->testDara[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
        echo "offsetUnset---{$offset}";
        unset($offset);
    }
}