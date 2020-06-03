<?php

class Student extends Controller
{
    protected function register()
    {
        $viewmodel = new StudentModel();
        $this->returnView($viewmodel->register(), true);
    }

    protected function login()
    {
        $viewmodel = new StudentModel();
        $this->returnView($viewmodel->login(), true);
    }

    protected function logout()
    {
        unset($_SESSION['is_logged_in']);
        unset($_SESSION['user_data']);
        session_destroy();
        // Redirect
        header('Location: ' . ROOT_URL);
    }

    protected function Index()
    {
        $viewmodel = new StudentModel();
        $this->returnView($viewmodel->Index(), true);
    }
}