<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Authenticate extends REST_Controller {
    
	  /**
     * Get All Data from this method.
     *
     * @return Response
    */
    public function __construct() {
       parent::__construct();
       $this->load->database();
    }
       
    /**
     * Get All Data from this method.
     *
     * @return Response
    */
	public function login_post()
	{
        $data = $this->input->post();
        $login = $this->db->where('username',$data['username'])->get('mocl_users')->result_array();

		if(empty($login) || $login[0]['id'] == '' )
		{
			return 1;
		}
		else
		{
					
		}
	}
    	
}
