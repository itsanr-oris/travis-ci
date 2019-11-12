<?php

namespace Foris\TravisCI;

/**
 * Class HelloWorld
 */
class HelloWorld
{
    /**
     * Say hello
     *
     * @param $target
     * @return string
     */
    public function sayHello($target)
    {
        return sprintf('Hello %s!', $target);
    }

    /**
     * Say something
     *
     * @param $message
     * @return mixed
     */
    public function say($message)
    {
        return $message;
    }
}
