<?php
$dir = __DIR__ . '/../uploads/';

# 用關聯式陣列做檔案類型的篩選
$exts = [
    'image/jpeg' => '.jpg',
    'image/png' => '.png',
    'image/webp' => '.webp',
];

header("Content-Type: application/json");
$result = [
    'success'=>false,
    'file'=>''
];



if(!empty($_FILES) and !empty($_FILES['avatar'])){

    if(!empty($exts[$_FILES['avatar']['type']])){
        $ext=$exts[$_FILES['avatar']['type']];// 副檔名
        # 隨機的主檔名
        $f =sha1($_FILES['avatar']['name']. uniqid());
        if(
            move_uploaded_file(
            $_FILES['avatar']['tmp_name'],
            $dir . $f. $ext
        )
        ){
            $result['success']=true;
            $result['file']=$f. $ext;
        }
    }
}

echo json_encode($result);
