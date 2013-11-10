<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Users extends CI_Model{




    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    function getusers()
    {
       
    	


        $this->db->select('Nom,Cognom,Adreça,Ciutat,Pais,Telefon');
    	$query = $this->db->get('usuaris');

    	

        //echo '<pre>'; print_r($data); die();


    	

    	return $query->result_array();

     
	}
     function guardar()
    {
       $data = array(

        'Nom'=> $_POST['nom'],
        'Cognom'=> $_POST['cognom'],
        'Adreça'=> $_POST['adresa'],
        'Ciutat'=> $_POST['ciutat'],
        'Pais'=> $_POST['pais'],
        'Telefon'=> $_POST['telefon']

        ); 
       

       $prova = $this->db->insert('usuaris',$data);

     
    }
}
