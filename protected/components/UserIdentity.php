<?php

class UserIdentity extends CUserIdentity
{
    public function authenticate()
    {
        $model = User::model()->findByAttributes(array('login' => $this->username));
        if ($model and $model->pass === User::hash($this->password)) {

            $this->setState('id', $model->id);
            $this->setState('login', $model->login);
            //$this->setState('role', $model->role);
            //$this->setState('name', $model->name);
            $this->setState('pass', $model->pass);
            return true;
        } else
            $this->errorMessage = 'Incorrect username or password';
    }


}