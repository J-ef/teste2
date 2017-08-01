<?php

namespace Application\Controller;

use Application\Service\Factory\AuthenticationServiceFactory;
use Zend\Authentication\Adapter\DbTable\CallbackCheckAdapter;
use Zend\Authentication\AuthenticationServiceInterface;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    /**
     * @var AuthenticationServiceInterface
     */
    private $authService;

    public function __construct(AuthenticationServiceInterface $authService)
    {

        $this->authService = $authService;
    }

    public function loginAction()
        /** @var \Zend\Http\Request $request */
    {
        $request = $this->getRequest();
        if ($request->isXmlHttpRequest()) {

            if ($request->isPost()) {

                /** @var CallbackCheckAdapter $authAdpter*/
                $authAdpter = $this->authService->getAdapter();
                $authAdpter->setIdentity($request->getPost('usuario'));
                $authAdpter->setCredential($request->getPost('senha'));


                $result = $this->authService->authenticate();
                if ($result->isValid()) {
                    $data = new JsonModel(array(
                        'success' => true,
                        'redirect' => 'app/dashboard',
                        'responseMessage' => 'Login efetuado com sucesso'
                    ));
                    return $data;
                } else {
                    $data = new JsonModel(array(
                        'success' => false,
                        'redirect' => '',
                        'responseMessage' => 'Usuario ou senha inválidos'
                    ));
                    return $data;
                }
            }
        }


    }
}

