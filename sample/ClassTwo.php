<?php

class ClassTwo
{
    public function actionTwo(): void
    {
        (new ClassThree)->actionThree();
    }
}
