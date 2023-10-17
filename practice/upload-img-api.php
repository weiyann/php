<?php
$dir = __DIR__ . '/../uploads/';

# 用關聯式陣列做檔案類型的篩選
$exts = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
    'image/webp' => '.webp',
];

header("Content-Type: application/json");
$output = [
    'success'=>false,
    'file'=>''
];



if(!empty($_FILES) and !empty($_FILES['avatar']) and $_FILES['avatar']['error']==0){

    if(!empty($exts[$_FILES['avatar']['type']])){
        $ext=$exts[$_FILES['avatar']['type']];// 副檔名
        # 隨機的主檔名
        $f =sha1($_FILES['avatar']['name']. uniqid()); //uniqid 唯一
        if(
            move_uploaded_file(
            $_FILES['avatar']['tmp_name'], // 臨時路徑
            $dir . $f. $ext // 目標路徑，新的文件名
        )
        ){
            $output['success']=true;
            $output['file']=$f. $ext;
        }
    }
}

echo json_encode($output);

