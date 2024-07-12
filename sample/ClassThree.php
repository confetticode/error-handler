<?php

class ClassThree
{
    public function actionThree()
    {
        $this->doSomething();
    }

    public function doSomething()
    {
        $this->doSomethingUndefined();
    }
}
