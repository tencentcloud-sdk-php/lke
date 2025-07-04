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
 * 一条message代表一条对话记录
role表示角色  user或者assistant
content表示对话内容
 *
 * @method string getRole() 获取role表示角色  user标识用户提问，assistant标识返回的答案

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRole(string $Role) 设置role表示角色  user标识用户提问，assistant标识返回的答案

注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取对话内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置对话内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class Message extends AbstractModel
{
    /**
     * @var string role表示角色  user标识用户提问，assistant标识返回的答案

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Role;

    /**
     * @var string 对话内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Role role表示角色  user标识用户提问，assistant标识返回的答案

注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 对话内容
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
        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
