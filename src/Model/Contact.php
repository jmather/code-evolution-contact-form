<?php

namespace Model;

class Contact
{
    public $name;
    public $email;
    public $message;

    public function __construct($data = null)
    {
        if ($data) {
            $this->fromPost($data);
        }
    }

    public function fromPost($post)
    {
        $this->name = $post['name'];
        $this->email = $post['email'];
        $this->message = $post['message'];

        $this->sanitizeData();
    }

    protected function sanitizeData()
    {
        $this->name = filter_var($this->name, FILTER_SANITIZE_STRING);
        $this->name = preg_replace("/\n|\r/", '', $this->name);

        $this->email = filter_var($this->email, FILTER_SANITIZE_EMAIL);
        $this->message = trim(filter_var($this->message, FILTER_SANITIZE_STRING));
    }
}
