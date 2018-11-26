<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getDomain() 获取转发规则的域名。
 * @method void setDomain(string $Domain) 设置转发规则的域名。
 * @method string getUrl() 获取转发规则的路径。
 * @method void setUrl(string $Url) 设置转发规则的路径。
 * @method integer getSessionExpireTime() 获取会话保持时间
 * @method void setSessionExpireTime(integer $SessionExpireTime) 设置会话保持时间
 * @method HealthCheck getHealthCheck() 获取健康检查信息
 * @method void setHealthCheck(HealthCheck $HealthCheck) 设置健康检查信息
 * @method CertificateInput getCertificate() 获取证书信息
 * @method void setCertificate(CertificateInput $Certificate) 设置证书信息
 * @method string getScheduler() 获取规则的请求转发方式
 * @method void setScheduler(string $Scheduler) 设置规则的请求转发方式
 */

/**
 *HTTP/HTTPS转发规则（输入）
 */
class RuleInput extends AbstractModel
{
    /**
     * @var string 转发规则的域名。
     */
    public $Domain;

    /**
     * @var string 转发规则的路径。
     */
    public $Url;

    /**
     * @var integer 会话保持时间
     */
    public $SessionExpireTime;

    /**
     * @var HealthCheck 健康检查信息
     */
    public $HealthCheck;

    /**
     * @var CertificateInput 证书信息
     */
    public $Certificate;

    /**
     * @var string 规则的请求转发方式
     */
    public $Scheduler;
    /**
     * @param string $Domain 转发规则的域名。
     * @param string $Url 转发规则的路径。
     * @param integer $SessionExpireTime 会话保持时间
     * @param HealthCheck $HealthCheck 健康检查信息
     * @param CertificateInput $Certificate 证书信息
     * @param string $Scheduler 规则的请求转发方式
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("SessionExpireTime",$param) and $param["SessionExpireTime"] !== null) {
            $this->SessionExpireTime = $param["SessionExpireTime"];
        }

        if (array_key_exists("HealthCheck",$param) and $param["HealthCheck"] !== null) {
            $this->HealthCheck = new HealthCheck();
            $this->HealthCheck->deserialize($param["HealthCheck"]);
        }

        if (array_key_exists("Certificate",$param) and $param["Certificate"] !== null) {
            $this->Certificate = new CertificateInput();
            $this->Certificate->deserialize($param["Certificate"]);
        }

        if (array_key_exists("Scheduler",$param) and $param["Scheduler"] !== null) {
            $this->Scheduler = $param["Scheduler"];
        }
    }
}