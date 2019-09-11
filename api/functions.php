<?php

class functions
{
    static function mSuccess($data = '', $msg = 'ok')
    {
        $rt = array(
            'result' => 'success',
            'message' => $msg,
            'data' => $data
        );
        die(json_encode($rt));
    }

    /**
     * 用于模型或接口返回一个错误的结果
     * @return array
     * @author xiaoguo
     */
    static function mError($msg = 'system error', $code = 50000)
    {
        $rt = array(
            'code' => $code,
            'result' => 'fail',
            'message' => $msg,
        );
        die(json_encode($rt));
    }

}

