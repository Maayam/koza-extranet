<?php
//connect to db
$dbh = new PDO('mysql:host=0.0.0.0;dbname=c9', "maayam", "");

//get mediaList from Db
$results = $dbh->query('SELECT * from media');
$mediaList = array();
foreach ($results as $result) {
    array_push($mediaList, $result['path']);
}

//get pictures list from db
$pictureResult = $dbh->query('SELECT path from mission');
$pictureList = array();
foreach ($pictureResult as $picture) {
    array_push($pictureList, $picture['path']);
}

//scan upload directory
$cwd = $_SERVER['DOCUMENT_ROOT']."/web/uploads/";
$files = scandir($cwd);
array_shift($files);
array_shift($files);

//scan thumbnails directory
$thumbnailCwd = $_SERVER['DOCUMENT_ROOT']."/web/thumbnails/mission/";
$pictures = scandir($thumbnailCwd);
array_shift($pictures);
array_shift($pictures);

//map all media from db
foreach ($files as $file) {
    //if one file from server is not in db
    if(!in_array($file, $mediaList)){
        //var_dump("found orphan document to delete ! ($file)");
        //delete it
        unlink($cwd.$file);
    }
}

//map all pictures from db
foreach ($pictures as $picture) {
    //if one media from server is not in db
    if(!in_array($picture, $pictureList)){
        //var_dump("found orphan picture to delete ! ($picture)");
        //delete it
        unlink($thumbnailCwd.$picture);
    }
}