<?php 

namespace hoangtu\phpmvc\controllers;

use hoangtu\phpmvc\core\Application;
use hoangtu\phpmvc\core\BaseController;
use hoangtu\phpmvc\core\Request;
use hoangtu\phpmvc\core\Response;
use hoangtu\phpmvc\models\ContactForm;

class SiteController extends BaseController {
    public function contact(Request $request, Response $respone)
    {
        $contact = new ContactForm();
        if($request->isPost()){
            $contact->loadData($request->getBody());
            if($contact->validate() && $contact->send()){
                Application::$app->session->setFlash('success', 'Thanks for contacting us.');
                return $respone->redirect('/contact');
            }
        }
        return $this->render('contact', [
            'model' => $contact
        ]);
    }
    public function home()
    {
        return $this->render('home');
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        return 'Handling submitted data';
    }
}