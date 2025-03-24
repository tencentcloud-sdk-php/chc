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
namespace TencentCloud\Chc\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateReceivingWorkOrder请求参数结构体
 *
 * @method integer getIdcId() 获取机房id
 * @method void setIdcId(integer $IdcId) 设置机房id
 * @method string getDeviceType() 获取设备类型，server, netDevice, wire, otherDevice
 * @method void setDeviceType(string $DeviceType) 设置设备类型，server, netDevice, wire, otherDevice
 * @method string getEntryTime() 获取进入时间
 * @method void setEntryTime(string $EntryTime) 设置进入时间
 * @method string getReceivingOperation() 获取1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method void setReceivingOperation(string $ReceivingOperation) 设置1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
 * @method boolean getIsExpressDelivery() 获取是否快递寄件
 * @method void setIsExpressDelivery(boolean $IsExpressDelivery) 设置是否快递寄件
 * @method ExpressDelivery getExpressInfo() 获取快递寄件信息,快递寄件必填
 * @method void setExpressInfo(ExpressDelivery $ExpressInfo) 设置快递寄件信息,快递寄件必填
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getServerDeviceList() 获取服务器收货列表
 * @method void setServerDeviceList(array $ServerDeviceList) 设置服务器收货列表
 * @method array getNetDeviceList() 获取网络设备收货列表
 * @method void setNetDeviceList(array $NetDeviceList) 设置网络设备收货列表
 * @method array getWireDeviceList() 获取线材收货列表
 * @method void setWireDeviceList(array $WireDeviceList) 设置线材收货列表
 * @method array getOtherDeviceList() 获取其他设备收货列表
 * @method void setOtherDeviceList(array $OtherDeviceList) 设置其他设备收货列表
 */
class CreateReceivingWorkOrderRequest extends AbstractModel
{
    /**
     * @var integer 机房id
     */
    public $IdcId;

    /**
     * @var string 设备类型，server, netDevice, wire, otherDevice
     */
    public $DeviceType;

    /**
     * @var string 进入时间
     */
    public $EntryTime;

    /**
     * @var string 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     */
    public $ReceivingOperation;

    /**
     * @var boolean 是否快递寄件
     */
    public $IsExpressDelivery;

    /**
     * @var ExpressDelivery 快递寄件信息,快递寄件必填
     */
    public $ExpressInfo;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 服务器收货列表
     */
    public $ServerDeviceList;

    /**
     * @var array 网络设备收货列表
     */
    public $NetDeviceList;

    /**
     * @var array 线材收货列表
     */
    public $WireDeviceList;

    /**
     * @var array 其他设备收货列表
     */
    public $OtherDeviceList;

    /**
     * @param integer $IdcId 机房id
     * @param string $DeviceType 设备类型，server, netDevice, wire, otherDevice
     * @param string $EntryTime 进入时间
     * @param string $ReceivingOperation 1.收货-仅核对外包装完整和数量，不开箱 2.验收-开箱核对型号SN一致
     * @param boolean $IsExpressDelivery 是否快递寄件
     * @param ExpressDelivery $ExpressInfo 快递寄件信息,快递寄件必填
     * @param string $Remark 备注
     * @param array $ServerDeviceList 服务器收货列表
     * @param array $NetDeviceList 网络设备收货列表
     * @param array $WireDeviceList 线材收货列表
     * @param array $OtherDeviceList 其他设备收货列表
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("IdcId",$param) and $param["IdcId"] !== null) {
            $this->IdcId = $param["IdcId"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("EntryTime",$param) and $param["EntryTime"] !== null) {
            $this->EntryTime = $param["EntryTime"];
        }

        if (array_key_exists("ReceivingOperation",$param) and $param["ReceivingOperation"] !== null) {
            $this->ReceivingOperation = $param["ReceivingOperation"];
        }

        if (array_key_exists("IsExpressDelivery",$param) and $param["IsExpressDelivery"] !== null) {
            $this->IsExpressDelivery = $param["IsExpressDelivery"];
        }

        if (array_key_exists("ExpressInfo",$param) and $param["ExpressInfo"] !== null) {
            $this->ExpressInfo = new ExpressDelivery();
            $this->ExpressInfo->deserialize($param["ExpressInfo"]);
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ServerDeviceList",$param) and $param["ServerDeviceList"] !== null) {
            $this->ServerDeviceList = [];
            foreach ($param["ServerDeviceList"] as $key => $value){
                $obj = new ServerReceivingInfo();
                $obj->deserialize($value);
                array_push($this->ServerDeviceList, $obj);
            }
        }

        if (array_key_exists("NetDeviceList",$param) and $param["NetDeviceList"] !== null) {
            $this->NetDeviceList = [];
            foreach ($param["NetDeviceList"] as $key => $value){
                $obj = new NetReceivingInfo();
                $obj->deserialize($value);
                array_push($this->NetDeviceList, $obj);
            }
        }

        if (array_key_exists("WireDeviceList",$param) and $param["WireDeviceList"] !== null) {
            $this->WireDeviceList = [];
            foreach ($param["WireDeviceList"] as $key => $value){
                $obj = new WireReceivingInfo();
                $obj->deserialize($value);
                array_push($this->WireDeviceList, $obj);
            }
        }

        if (array_key_exists("OtherDeviceList",$param) and $param["OtherDeviceList"] !== null) {
            $this->OtherDeviceList = [];
            foreach ($param["OtherDeviceList"] as $key => $value){
                $obj = new OtherDevReceivingInfo();
                $obj->deserialize($value);
                array_push($this->OtherDeviceList, $obj);
            }
        }
    }
}
