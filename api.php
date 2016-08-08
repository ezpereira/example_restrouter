<?php

namespace Example;

require_once 'foo.php';

use Rest\Routes;

function welcome()
{
    echo "Wellcome";
}

function mid($text)
{
    return strtoupper($text);
}

function foobar($p1, $p2)
{
    echo __METHOD__, "  {$p1} {$p2}";
}


class Api implements Routes
{
    public function get()
    {
        return array(
            '/'        => "Example\welcome",
            '/:string' => function ($name = 'tester') {
                echo "Hello $name !!!";
            },
            '/hi/:s' => function ($name) {
                echo "Hi $name!!!";
            },
            '/:var/:var' => 'Example\foobar',
            '/hey/:string/:s' => ['Example\Foo', "bar"],
        );
    }

    public function post()
    {
        return array(
            'login'  => 'login',
            'logout' => 'vai deslogar'
        );
    }

    public function put()
    {
    }

    public function delete()
    {
    }

    public function error()
    {
        return array(
            '404' => function () {
                echo "NOT FOUND !!!";
            },
        );
    }
}
