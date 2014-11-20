<?php

class deldocs_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
        $this->load->library('session');
    }

    public function document_to_delete($document)
    {
        $this->db->select('documents.*');
        $this->db->from('documents');
        $this->db->where('documents.documentid', $document['documentid']);
        $this->db->delete('documents');
        
        /*
         * Here we will also make the function to delete the documents
         */
    }
    //public function <- future function
}

?>