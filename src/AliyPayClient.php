<?php

/**
 * @filename AliyPayClient.php
 * @encoding UTF-8
 * @author sky
 * @link bmqmingqi@qq.com
 * @license http://www.gnu.org/licenses/
 * @datetime 2020-4-15  13:48:38
 * @version 3.0
 * @ * Description of AliyPayClient
 */
namespace BmqMingQi;
use BmqMingQi\request\AlipayTradeAppPayRequest;
class AliyPayClient extends AopCertClient{
    /**
     * 获取支付宝支付链接
     * @param type $data
     * @return type
     */
    private $alipayconfig;
    public function __construct($config='',$env='dev') {
        if(!$config){
            $config = include_once(__DIR__.'/config/alipay.php');
        }
        if ($env == 'dev') {
            $this->alipayconfig = $config['dev'];
        } else {
            $this->alipayconfig = $config['product'];
        }
    }
    /**
     * 发起支付
     * @param type $data
     * @return type
     */
    public function AliyPay($data) {
        $this->gatewayUrl = $this->alipayconfig['gatewayUrl'];
        $this->appId = $this->alipayconfig['appId'];
        $this->rsaPrivateKey = $this->alipayconfig['rsaPrivateKey'];
        $this->alipayrsaPublicKey = $this->alipayconfig['alipayrsaPublicKey'];
        $this->signType = $this->alipayconfig['signType'];
        $this->postCharset = $this->alipayconfig['postCharset'];
        $this->format = $this->alipayconfig['format'];
        $this->apiVersion = '1.0';
        $request = new AlipayTradeAppPayRequest();
        $request->setNotifyUrl($this->alipayconfig['NotifyUrl']);
        $request->setBizContent(json_encode($data));
        $result = $this->sdkExecute($request);
        return $result;
    }
    /**
     * 支付宝回调方法
     * @param type $request
     * @return type
     */
     public function AliPayCallBack($request) {
        $this->alipayrsaPublicKey = $this->alipayconfig['alipayrsaPublicKey'];
        $result = $this->rsaCheckV1($request->input(), '', 'RSA2'); //校验回调参数合法性
        if ($result) {
            $trade_status = $request->input('trade_status');
            return $trade_status;
//                    switch ($trade_status) {
//                        case 'WAIT_BUYER_PAY':
//                            $status = 1;
//                            break;
//                        case 'TRADE_SUCCESS':
//                            $status = 2;
//                            break;
//                        case 'TRADE_FINISHED':
//                            $status = 3;
//                            break;
//                        case 'TRADE_CLOSED';
//                            $status = 4;
//                            break;
//                    }
        }
        return $result;
    }
}
