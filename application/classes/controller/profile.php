<?php

defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Plussia_Controller {

    public function  validate() {
        $user = Plussia_Dispatcher::getUser();
        return $user && true;
    }

    public function index() {
        $user = Plussia_Dispatcher::getUser();
        
        $view = $this->view;
        $view->text = XML_Texts::factory('profile_text')->getAssoc();
        $view->centerblock = Plussia_Viewer::getProfileCenterblock();
        $view->leftuserinfo = Plussia_Viewer::getLeftuserinfo();
        $view->leftusersonic = Plussia_Viewer::getLeftusersonic();
        $view->loveusers = Plussia_Viewer::getLoveusers();
        $view->rightartmonth = Plussia_Viewer::getRightartmonth();
        $view->rightbanner = Plussia_Viewer::getRightbanner();
        $view->searchform = Plussia_Viewer::getSearchform();
        $view->userphoto = Plussia_Viewer::getUserphoto();
        $view->pagecomplete = Plussia_Viewer::getPagecoplete();
        $view->userleftmenu = Plussia_Viewer::getUserleftmenu();
        $view->usertopmenu = Plussia_Viewer::getUsertopmenu();

        $view->values = array(
            'new_users' => $user->getRSCount('new'),
            'new_interesme' => $user->getRSCount('interesme')
        );

        $this->response->body($view);
    }

    protected function getView() {
        return View::factory('profile');
    }

}