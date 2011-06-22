<?php
class Application_Form_Addowner extends Zend_Form
{
  

  
   public function __construct($options = null,$page_name = null)
    {
        parent::__construct($options);
		$this->setEnctype(Zend_Form::ENCTYPE_MULTIPART);
        $id = new Zend_Form_Element_Hidden('id');
        $id->addFilter('Int');
		
		
		$firstname = $this->createElement('text','fld_fname', array('label' => 'First Name : ','style'=>'width:250px; height:20px;'));
		$firstname->setRequired(true);
		$this->addElement($firstname);
		
		$lastname = $this->createElement('text','fld_last_name', array('label' => 'Last Name : ','style'=>'width:250px; height:20px;'));
		$lastname->setRequired(true);
		$this->addElement($lastname);
		
		$email = $this->createElement('text','fld_email', array('label' => 'Email : ','style'=>'width:250px; height:20px;'));
		$email->setRequired(true);
		$this->addElement($email);
		
		$password = $this->createElement('password','fld_password', array('label' => 'Password : ','style'=>'width:250px; height:20px;'));
		$this->addElement($password);

		$phone = $this->createElement('text','fld_workphone', array('label' => 'Work Phone : ','style'=>'width:250px; height:20px;'));
		$phone->setRequired(true);
		$this->addElement($phone);
		
		
		$mobile = $this->createElement('text','fld_mobilephone', array('label' => 'Mobile Phone : ','style'=>'width:250px; height:20px;'));
		$mobile->setRequired(true);
		$this->addElement($mobile);
		
		$fax = $this->createElement('text','fld_fax', array('label' => 'Fax : ','style'=>'width:250px; height:20px;'));
		$fax->setRequired(true);
		$this->addElement($fax);
		
		$website = $this->createElement('text','fld_website', array('label' => 'Website Address : ','style'=>'width:250px; height:20px;'));
		$website->setRequired(true);
		$this->addElement($website);
		
		$postalcode = $this->createElement('text','fld_postal_code', array('label' => 'Postal Code : ','style'=>'width:250px; height:20px;'));
		$postalcode->setRequired(true);
		$this->addElement($postalcode);
		
		$city = $this->createElement('text','fld_city', array('label' => 'City : ','style'=>'width:250px; height:20px;'));
		$city->setRequired(true);
		$this->addElement($city);
		
		
		$state = $this->createElement('text','fld_state', array('label' => 'State : ','style'=>'width:250px; height:20px;'));
		$state->setRequired(true);
		$this->addElement($state);
		
		
		$country=$this->createElement('select','fld_country',array('style'=>'width:250px;font-size:14px;font-weight:bold;'));
		$country->setLabel('Country : ')
			->setRequired(true)
			->addMultiOptions(array($page_name));
		$this->addElement($country);	
		$address=$this->createElement('text','fld_address',array('label' => 'Address : ','style'=>'width:250px; height:20px;'));
		$state->setRequired(true);
		$this->addElement($address);
		
		$business=$this->createElement('text','fld_business',array('label' => 'Business/Company : ','style'=>'width:250px; height:20px;'));
		$state->setRequired(true);
		$this->addElement($business);
		
		
		$published=$this->createElement('radio','fld_status');
		$published->setLabel('Active : ')
			->setRequired(true)
			->addMultiOptions(array('Y'=>'Yes', 'N'=>'No'),array('style' =>'padding:4px;'))
			->setValue("Y");
		$this->addElement($published);
		
		
		
		  $firstname->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		 
		  $lastname->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		 
		 
		  $email->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		 
		 
		  $password->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		 
		  $phone->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		 
		 
		 
		  $mobile->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px; border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		 $fax->addDecorator('FormElements')
         ->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		 ->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));	  
			  
		 $website->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		 $postalcode->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		 $city->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
				
		 $state->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		 $country->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		$address->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		$business->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		$published->addDecorator('FormElements')
		->addDecorator('HtmlTag', array('tag' => 'dd','style' =>'margin-left:90px;padding:4px;border:solid 4px #cccccc;'))
		->addDecorator('Label', array('tag' => 'dt','style'=>'font-size:11px; font-weight:bold'));
		
		 $submit = new Zend_Form_Element_Submit('submit');
         $submit->setAttrib('id', 'submitbutton');
		 $this->setAttrib('onSubmit', 'javascript:return frmValidate();');
        $this->addElements(array($id,$name,$submit));
    }
	
	  /* public function init()
    {
        $login = new Zend_Form_Element_Text('login');
        $login->setRequired(true);
 
        $password = new Zend_Form_Element_Password('password');
        $password=>setRequired(true);
 
        $this->addElements(array($login, $password));
    }
 
    public function isValid(array $formData)
    {
        //call the parent method for basic form validation
        $isValid = parent::isValid();
 
        if($isValid)
        {
            //custom validation
            if($formData['login'] == 'test')
            {
                $login->setErrors(array('Cannot use test as login'));
                $isValid = false;
            }
        }
 
        return $isValid;
    }*/
}
