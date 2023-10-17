<?php
$dir = __DIR__ . '/../uploads/';
# 檔案類型的篩選
$exts = [
  'image/jpeg' => '.jpg',
  'image/png' => '.png',
  'image/webp' => '.webp',
];

$output = [
  'success' => false,
  'files' => []
];

if (!empty($_FILES) and !empty($_FILES['photos'])) {

  # 是不是陣列
  if (is_array($_FILES['photos']['name'])) {

    foreach ($_FILES['photos']['name'] as $i => $name) {

      if (!empty($exts[$_FILES['photos']['type'][$i]])and $_FILES['photos']['error'][$i]==0) {
        $ext = $exts[$_FILES['photos']['type'][$i]]; // 副檔名

        # 隨機的主檔名
        $f = sha1($name . uniqid() . rand());

        if (
          move_uploaded_file(
            $_FILES['photos']['tmp_name'][$i],
            $dir . $f . $ext
          )
        ) {

          $output['files'][] = $f . $ext;  // array push
        }
      }
    }

    if (count($output['files'])) {
      $output['success'] = true;
    }
  }
}

header('Content-Type: application/json');
echo json_encode($output);