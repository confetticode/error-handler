<?php

class ClassOne
{
    public function actionOne(): void
    {
        (new ClassTwo)->actionTwo();
    }
}
