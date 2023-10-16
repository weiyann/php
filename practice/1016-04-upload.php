<?php
header("Content-Type: application/json");
echo json_encode($_FILES);

/*
上傳一個檔案
  "photo": {
        "name": "japan1.jpg",
        "full_path": "japan1.jpg",
        "type": "image/jpeg",
        "tmp_name": "C:\\xampp\\tmp\\php2EF4.tmp",
        "error": 0,
        "size": 6347312
    }
    */

    /*

    "photo": {
        "name": [
            "japan1.jpg",
            "japan2.jpg",
            "japan3.jpg"
        ],
        "full_path": [
            "japan1.jpg",
            "japan2.jpg",
            "japan3.jpg"
        ],
        "type": [
            "image/jpeg",
            "image/jpeg",
            "image/jpeg"
        ],
        "tmp_name": [
            "C:\\xampp\\tmp\\php3549.tmp",
            "C:\\xampp\\tmp\\php3569.tmp",
            "C:\\xampp\\tmp\\php357A.tmp"
        ],
        "error": [
            0,
            0,
            0
        ],
        "size": [
            6347312,
            6548301,
            5740752
        ]
    }
    */