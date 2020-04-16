<?php

/**
 * @filename AliyPayTest.php
 * @encoding UTF-8
 * @author sky
 * @link bmqmingqi@qq.com
 * @license http://www.gnu.org/licenses/
 * @datetime 2020-4-15  14:17:26
 * @version 3.0
 * @ * Description of AliyPayTest
 */
require '../vendor/autoload.php';
use BmqMingQi\AliyPayClient;
class AliyPayTest {
    static public function startpay() {
//        pp::a(1);
        $data = [
                'timeout_express' => '600m',
                'seller_id' => '',
                'product_code' => 'QUICK_MSECURITY_PAY',
                'total_amount' => 100,
                'subject' => "商品名称",
                'body' => "商品信息",
                'out_trade_no' => self::createOrderId(),
                    // 'goods_detail' => [], 
            ];
        $aliypay=new AliyPayClient();
        $payrul=$aliypay->AliyPay($data);
        var_dump($payrul);//app需要的支付地址
    }
    /**
     * 生成订单id
     * @return type
     */
    static public function createOrderId() {
       return date("Ymd").hexdec(substr(uniqid(),7));
    }
    /***
     * 支付宝回调
     */
    static public function CallBack($request) {
        $aliypay=new AliyPayClient();
        $status=$aliypay->AliPayCallBack($request);
        ////////////////////////////根据支付宝返回的状态完成自己的业务
    }
}
AliyPayTest::startpay();
