<?php
function admin_link($router = '', $withoutProject = FALSE)
{
    return url(str_replace('//', '/', '/admin/' . $router));
}