<?php
class MyController extends Controller{

    public $defaultAction = 'one';
    public function actionOne(){
        $this->render('one');
    }

    public function actionTwo(){

    }
}
?>