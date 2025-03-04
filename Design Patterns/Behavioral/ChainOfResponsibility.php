<?php

// Chain Of Responsibility Pattern Example

class Request
{
    public $username;
    public $password;
    public $role;
}

abstract class LoginHandler
{
    private $next;

    public function setNext(LoginHandler $handler)
    {
        $this->next = $handler;
    }

    public function handle(Request $request)
    {
        if ($this->next !== null) {
            $this->next->handle($request);
        }
    }
}

class CredentialCheck extends LoginHandler
{
    public function handle(Request $request)
    {
        if (!$this->checkCredentials($request)) {
            return 'Invalid Credentials';
        }

        parent::handle($request);
    }

    private function checkCredentials(Request $request)
    {
        // Code to check user credentials
        return true;
    }
}

class UserExistsCheck extends LoginHandler
{
    public function handle(Request $request)
    {
        if (!$this->checkUserExists($request)) {
            return 'User does not exist';
        }

        parent::handle($request);
    }

    private function checkUserExists(Request $request)
    {
        // Code to check if user exists
        return true;
    }
}

class RoleCheck extends LoginHandler
{
    public function handle(Request $request)
    {
        if (!$this->checkRole($request)) {
            return 'You are not allowed to login';
        }

        parent::handle($request);
    }

    private function checkRole(Request $request)
    {
        // Code to check the role
        return true;
    }
}

$login = new CredentialCheck();
$login->setNext(new UserExistsCheck());
$login->setNext(new RoleCheck());

$request = new Request();
$request->username = 'John Doe';
$request->password = 'secret';
$request->role = 'admin';

echo $login->handle($request);
