<?php
 class Controller_need extends Controller {
    public function action_default()
    {
        $this->action_need();
    }

    public function action_need() {

        $m = Model::getModel();
        $data = $m->besoinHeuresParDepartement();
        $this->render("need", $data);
    }
 }