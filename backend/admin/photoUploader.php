<?php
class PhotoUploader
{
    public $baseData;
    private $baseString;
    private $data;
    private $fileName;
    private $imgPath;
    private $srcPath;
    private $rootPath;

    function __construct($baseData, $rootPath)
    {
        $this->baseData = $baseData;
        $this->rootPath = $rootPath;
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
            echo $this->srcPath;
        }
    }
}

$rootSrc = dirname(dirname(dirname(__file__)))."\\static\\shopImg\\";
$baseData = $_POST['image'];
new PhotoUploader($baseData, $rootSrc);
