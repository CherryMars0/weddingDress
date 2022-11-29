<?php
include "../utils/sqlUtils.php";
class PhotoUploader
{
    public $baseData;
    private $baseString;
    private $data;
    private $fileName;
    private $imgPath;
    private $srcPath;
    private $rootPath;
    private $DataBase = 'weddingdress';
    private $id;

    function __construct($baseData, $rootPath, $id)
    {
        $this->baseData = $baseData;
        $this->rootPath = $rootPath;
        $this->id = $id;
        $this->init();
    }

    private function init()
    {
        $this->pretreatment();
    }

    private function pretreatment()
    {
        $this->baseData = str_replace(' ', '+', $this->baseData);
        $this->baseString = explode(',', $this->baseData);
        $this->data = base64_decode($this->baseString[1]);
        $this->fileName = md5(time() . rand(5, 10)) . ".jpg";

        if (!empty($this->baseData)) {
            $this->imgPath = $this->rootPath  . $this->fileName;
            $this->srcPath = "/static/shopImg/" . $this->fileName;
            if (@file_exists($this->imgPath)) {
                @unlink($this->imgPath);
            }
            @clearstatcache();
            file_put_contents($this->imgPath, $this->data);
            $this->changeImgInfo();
        }
    }

    private function changeImgInfo()
    {
        $src = "." . $this->srcPath;
        $position = explode(".", $this->fileName)[0];
        $Photo_SQL_Str = "update shop set pic='" .  $src . "',position='" . $position . "' where ID='" . $this->id . "';";
        sql_conn_insert($this->DataBase, $Photo_SQL_Str);
        echo true;
    }
}

$rootSrc = dirname(dirname(dirname(__file__))) . "\\static\\shopImg\\";
$baseData = $_POST['image'];
$id = $_POST['id'];
new PhotoUploader($baseData, $rootSrc, $id);
