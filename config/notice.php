<?php
// Assuming $config is the array that contains the settings from your database
if (isset($config['tutorial_enabled']) && $config['tutorial_enabled'] === true) {
$unicodeData = ['title' => "\u65b0\u624b\u6559\u7a0b", 'content1' => "\u7b2c\u4e00\u6b21\u4f7f\u7528\u672c\u7a0b\u5e8f\uff1f",
'content2' => "\u662f\u5426\u8df3\u8f6c\u5230\u65b0\u624b\u6559\u7a0b\u9875\u9762\uff1f",
'note' => "\u4e0d\u663e\u793a\u6b64\u5f39\u7a97\uff0c\u8bf7\u5728\u540e\u53f0\u5173\u95ed",
'u' => "\u002e\u002f\u0063\u006f\u006e\u0066\u0069\u0067\u002f\u0063\u006f\u0075\u0072\u0073\u0065\u002e\u0070\u0068\u0070"
];function unicodeToString($str) {return preg_replace_callback('/\\\\u([0-9a-fA-F]{4})/', function ($match) {return mb_convert_encoding(pack('H*', $match[1]), 'UTF-8', 'UCS-2BE');}, $str);}
 $displayData = array_map('unicodeToString', $unicodeData);
    echo '
 <div id="tutorial-modal"class="modal"style="display: none;"><div class="modal-content"><h3 style="text-align: center;">'.$displayData['title'].'</h3><p>'.$displayData['content1'].'</p><p>'.$displayData['content2'].'</p><p style="font-size: 12px; color: #888;">'.$displayData['note'].'</p><div class="modal-buttons"><button id="confirm-tutorial">确认</button><button id="cancel-tutorial">取消</button></div></div></div>
<style>.modal{position:fixed;top:0;left:0;width:100%;height:100%;background-color:rgba(0,0,0,0.5);display:flex;justify-content:center;align-items:center;z-index:9999}.modal-content{background-color:white;padding:20px;border-radius:8px;width:300px;box-shadow:0 4px 8px rgba(0,0,0,0.1)}.modal h3{margin-top:0;color:#333;text-align:center}.modal-buttons{display:flex;justify-content:flex-end;margin-top:20px;gap:10px}.modal-buttons button{padding:8px 16px;border:none;border-radius:4px;cursor:pointer}#confirm-tutorial{background-color:#4CAF50;color:white}#cancel-tutorial{background-color:#f44336;color:white;</style>
<script>document.addEventListener("DOMContentLoaded",function(){const modal=document.getElementById("tutorial-modal");const confirmBtn=document.getElementById("confirm-tutorial");const cancelBtn=document.getElementById("cancel-tutorial");modal.style.display="flex";confirmBtn.addEventListener("click",function(){window.open("'.$displayData['u'].'","_blank");modal.style.display="none"});cancelBtn.addEventListener("click",function(){modal.style.display="none"})});</script>
    ';
}
?>