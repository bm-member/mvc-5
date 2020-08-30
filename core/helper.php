<?php 

function dd($arr) {
    echo "<pre>" . print_r($arr, true) . "</pre>";
    die();
}

function base_path($file = '')
{
    return dirname(dirname(__FILE__)) . '/' . $file;
}

function config($name)
{
    $config = include '../config/app.php';
    return $config[$name];
}

function view($view, $data = [], $title = '')
{
    extract($data);
    include base_path('app/view/master.php');
}

function url($path)
{
    echo config('app_url') . $path;
}

function redirect($url)
{
    header("Location: " . config('app_url') . $url);
}