<?php
namespace MyBuilder\widget;

class FromBuilder
{
    protected static $receive;

    protected static $url;

    protected static $way;

    protected static $isAjax = FALSE;

    protected static $config;

    protected static $title;

    protected static $validation = FALSE;

    protected static $topTitle;

    protected static $breadCrumbs;

    public function __construct($config)
    {
        self::$config = $config;
    }

    public function setBreadCrumbs($breadCrumbs)
    {
        self::$breadCrumbs = $breadCrumbs;
    }

    public function addFormItem($output)
    {
        self::$receive[] = $output;

        return $this;
    }

    public function setFormTitle($title)
    {
        self::$title = $title;

        return $this;
    }

    public function setTopTitle($title)
    {
        self::$topTitle = $title;
    }

    public function setFormUrl($url)
    {
        self::$url = $url;

        return $this;
    }

    public function setSubWay($way)
    {

        self::$way = $way;

        return $this;

    }

    public function isAjax()
    {
        self::$isAjax = TRUE;
    }

    public function openValidation()
    {
        self::$validation = TRUE;
    }


    public function display()
    {
        include BUILDER_DIR . '/view/FromView.php';
    }
}