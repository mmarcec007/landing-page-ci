<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method()
    {
        return "ceca";
    }

    function ford_images_folder()
    {
        return base_url('assets/images/ford/ford_image.jpg');
    }

    function to_view($view, $data)
    {
        return site_url($view.$data);
    }   
}