<?php
namespace App\Bussiness\Common;

use App\Bussiness\Common\Logic\CommonLogic;

// ----------------------------------------------------------------------
// 公共
// ----------------------------------------------------------------------
// Link  : http://www.hlzblog.top/
// GITHUB: https://github.com/HaleyLeoZhang
// ----------------------------------------------------------------------

class CommonBussiness
{
    /**
     * 背景音乐
     */
    public static function memorabilia_bg()
    {
        $url  = CommonLogic::memorabilia_bg();
        $data = compact('url');
        return $data;
    }

    /**
     * 快递查询
     * @param string no 快递单号
     * @return array
     */
    public static function express_delivery($no)
    {
        $track_info = CommonLogic::express_delivery($no);
        $data       = compact('track_info');
        return $data;
    }

    /**
     * 快递查询
     * @param string long_url 长地址
     * @return array
     */
    public static function short_url($long_url, $channel)
    {
        $short_url = CommonLogic::short_url($long_url, $channel);
        $data      = compact('short_url');
        return $data;
    }

}
