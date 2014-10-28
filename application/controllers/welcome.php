<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		$this->load->library('form_validation');
		$this->lang->load('auth');
		$this->load->model('ubigeo_model');	
		$this->load->model('encuesta_model');	

		// if (!$this->ion_auth->logged_in()) {
		// 	redirect('auth/login');
		// }

		// $roles = $this->ion_auth->get_roles();
		// $flag = FALSE;
		// foreach ($roles as $role) {
		// 	if ($role->id == 1 || $role->id == 2) {
		// 		$flag = TRUE;
		// 		break;
		// 	}
		// }

		// if (!$flag) {
		// 	show_404();
		// 	die();
		// }
	}

	public function index(){

		 redirect('welcome/login');
		 
	}

	public function login()
	{

		$user = $this->facebook->getUser();
        
        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }else {
            $this->facebook->destroySession();
        }

        if ($user) {

            $data['logout_url'] = site_url('welcome/logout'); // Logs off application
            // OR 
            // Logs off FB!
            // $data['logout_url'] = $this->facebook->getLogoutUrl();

        } else {
            $data['login_url'] = $this->facebook->getLoginUrl(array(
                'redirect_uri' => site_url('welcome/login'), 
                'scope' => array("email") // permissions here
            ));
        }
        // $this->load->view('canchas/fb_view',$data);
		$data['nav'] = TRUE;
		$data['title'] = 'Canchas!';
		$data['main_content'] = 'canchas/welcome_view';
		$this->load->view('backend/includes/template', $data);
	}

    public function logout(){

        $this->load->library('facebook');

        // Logs off session from website
        $this->facebook->destroySession();
        // Make sure you destory website session as well.

        redirect('welcome/login');
    }	
}

?>