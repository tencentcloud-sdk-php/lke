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
 * 标签ID
 *
 * @method string getLabelBizId() 获取标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelBizId(string $LabelBizId) 设置标签ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLabelName() 获取标签名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLabelName(string $LabelName) 设置标签名称
注意：此字段可能返回 null，表示取不到有效值。
 */
class Label extends AbstractModel
{
    /**
     * @var string 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelBizId;

    /**
     * @var string 标签名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LabelName;

    /**
     * @param string $LabelBizId 标签ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LabelName 标签名称
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("LabelBizId",$param) and $param["LabelBizId"] !== null) {
            $this->LabelBizId = $param["LabelBizId"];
        }

        if (array_key_exists("LabelName",$param) and $param["LabelName"] !== null) {
            $this->LabelName = $param["LabelName"];
        }
    }
}
