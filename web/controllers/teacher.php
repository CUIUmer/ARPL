<?php

class Teacher extends Controller
{
    protected function register()
    {
        $viewmodel = new TeacherModel();
        $this->returnView($viewmodel->register(), true);
    }

    protected function login()
    {
        $viewmodel = new TeacherModel();
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
        $viewmodel = new TeacherModel();
        $this->returnView($viewmodel->Index(), true);
    }

    protected function Students()
    {
        $viewmodel = new TeacherModel();
        $this->returnView($viewmodel->Students(), true);
    }

    protected function evaluateStudents()
    {
        $viewmodel = new TeacherModel();
        $this->returnView($viewmodel->evaluateStudents(), true);
    }

    protected function addClassroom()
    {
        $viewmodel = new TeacherModel();
        $this->returnView($viewmodel->addClassroom(), true);
    }
}