<?php
   
require APPPATH . 'libraries/REST_Controller.php';
     
class Patient extends REST_Controller {
    
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
	public function patient_records_get($id = 0)
	{
        if(!empty($id)){
            $data = $this->db->get_where("mocl_patient", ['id' => $id])->row_array();
        }else{
            $data = $this->db->get("mocl_patient")->result();
        }
     
        $this->response($data, REST_Controller::HTTP_OK);
	}
    	
}
