<?php

namespace App\Http\Controllers;

use App\Traits\FlashMessages;

class BaseController extends Controller
{
    use FlashMessages;

    protected $data = null;

    protected function setPageTitle($title, $subTitle, $icon, $buttons=null){
        view()->share(['pageTitle' => $title, 'subTitle' => $subTitle, 'pageIcon' => $icon, 'pageButtons' => $buttons]);
    }

    protected function showErrorPage($errorCode = 404, $message = null)
    {
        $data['message'] = $message;
        return response()->view('errors.'.$errorCode, $data, $errorCode);
    }

    protected function responseJson($error = true, $responseCode = 200, $message = [], $data = null)
    {
        return response()->json([
            'error'         =>  $error,
            'response_code' =>  $responseCode,
            'message'       =>  $message,
            'data'          =>  $data
        ]);
    }

    protected function responseError($message, $type = 'error'){
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->back()->withInput();
    }

    protected function responseRedirect($route, $routeParam = null, $message='', $type = 'info')
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->route($route, $routeParam);
    }

    protected function responseRedirectBack($message, $type =  'info')
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->back();
    }
}
