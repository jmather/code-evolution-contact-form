<?php

class ContactTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Contact
     */
    protected $contact;

    public function setUp()
    {
        $this->contact = new Contact();
    }

    public function testThatContactIsEmpty()
    {
        $this->assertEquals('', $this->contact->name);
        $this->assertEquals('', $this->contact->email);
        $this->assertEquals('', $this->contact->message);
    }

    public function testThatContactDetectsBrokenEmail()
    {
        $contact_info = array(
            'name' => 'My Name',
            'email' => "This is my @broken\nemail",
            'message' => 'something'
        );

        $this->contact->fromPost($contact_info);

        $this->assertEquals($contact_info['name'], $this->contact->name, 'Name variable');
        $this->assertEquals('Thisismy@brokenemail', $this->contact->email, 'email variable');
        $this->assertEquals($contact_info['message'], $this->contact->message, 'message variable');

    }
}
