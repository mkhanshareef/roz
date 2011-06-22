<?php ini_set("display_errors",'off');

/*require_once 'Zend/Http/Client.php';  
require_once 'Zend/Controller/Action.php';
require_once 'Zend/Db.php';
require_once 'Zend/Config/Ini.php';
require_once 'Zend/Session/Namespace.php';
*/

class OwnerController extends Zend_Controller_Action
{
    public function init(){
	
	    $auth     = Zend_Auth::getInstance();
		$identity = $auth->getIdentity();
		$username = $identity;
		
		$this->view->username = $username;
		
		if($username == ''){
		 	 return new Application_Form_Ownerlogin(array(
			'action' => '/owner/process',
			'method' => 'post',
		));
		}
    }
	
	public function  indexAction()
    {
		
		 
		$this->_helper->layout->setLayout('ownerlayout');
		$this->view->form = $this->getForm();
		
		
    }
	
	// Fetch form and redirect to process action
	public function  getForm(){
		return new Application_Form_Ownerlogin(array(
			'action' => '/owner/process',
			'method' => 'post',
		));
	}
	
	public function  processAction(){
		$this->_helper->layout->setLayout('ownerlayout');
		$request = $this->getRequest();
		
		// Check if we have a POST request
        if (!$request->isPost()) {
            return $this->_helper->redirector('index');
        }

        // Get our form and validate it
        $form = $this->getForm();
    
		
	
	
		if (!$form->isValid($request->getPost())) {
            // Invalid entries
            /* echo"<pre>";
		    print_r($form);exit;*/
			$this->view->form = $form;
            return $this->render('index'); // re-render the login form
        }
 			
        // Get our authentication adapter and check credentials
        $values = $form->getValues();
		echo"<pre>";
		print_r($values);
		
		
		$bootstrap = $this->getInvokeArg('bootstrap');
		$resource = $bootstrap->getPluginResource('db');
		$db = $resource->getDbAdapter();
		
		
		//echo"exit";exit;
		
		$adapter = new Zend_Auth_Adapter_DbTable($db);
       
	   
	   /* $adapter->setTableName('crw_users');
        $adapter->setIdentityColumn('username');
        $adapter->setCredentialColumn('password');
        $adapter->setIdentity($values['username']);
		 $adapter->setCredential(
        hash('MD5', $values['password'])
        );*/
		
		
		
		
		$adapter->setTableName('tbl_owner');
        $adapter->setIdentityColumn('fld_email');
        $adapter->setCredentialColumn('fld_password');
        $adapter->setIdentity($values['fld_email']);
		$adapter->setCredential($values['fld_password']);
		
		
		// authentication attempt
        $auth = Zend_Auth::getInstance();
    	$identity = $auth->getIdentity();
		$username = $identity;
		$this->view->username = $username;
		$result = $auth->authenticate($adapter);
		
		echo"<pre>";
		print_r($result);exit;
        // authentication succeeded
        if (!$result->isValid()) {
            // Invalid credentials
            $form->setDescription('Invalid credentials provided');
            $this->view->form = $form;
            return $this->render('index'); // re-render the login form
        }
		
		
		 $id = $this->_getParam('id', 0);
		 $this->_helper->redirector('home', 'owner');
		
    }
	
	public function  logoutAction(){
        Zend_Auth::getInstance()->clearIdentity();
        $this->_helper->redirector('index'); // back to login page
    }
	
	public function  homeAction()
    {
        $this->_helper->layout->setLayout('ownerlayout');
		$this->view->title = "Owner Home Page";
		$auth     = Zend_Auth::getInstance();
		$identity = $auth->getIdentity();
		$username = $identity;
		$this->view->username = $username;
		if($username == ''){
			$this->_helper->redirector('index');
		}
		
    }
	
	public function  successAction()
    {
        $this->_helper->layout->setLayout('ownerlayout');
		$this->view->title = "Owner Setting";
		$auth     = Zend_Auth::getInstance();
		$identity = $auth->getIdentity();
		$username = $identity;
		$this->view->username = $username;
		if($username == ''){
			$this->_helper->redirector('index');
		}
		
    }
	
}







