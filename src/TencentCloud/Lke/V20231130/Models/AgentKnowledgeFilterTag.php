<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标签过滤器
 *
 * @method integer getOperator() 获取标签之间的关系;0:AND, 1:OR
 * @method void setOperator(integer $Operator) 设置标签之间的关系;0:AND, 1:OR
 * @method array getLabels() 获取标签
 * @method void setLabels(array $Labels) 设置标签
 */
class AgentKnowledgeFilterTag extends AbstractModel
{
    /**
     * @var integer 标签之间的关系;0:AND, 1:OR
     */
    public $Operator;

    /**
     * @var array 标签
     */
    public $Labels;

    /**
     * @param integer $Operator 标签之间的关系;0:AND, 1:OR
     * @param array $Labels 标签
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AgentKnowledgeAttrLabel();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
