<?php
  public function users() {
    $this->load->library("form_validation");
    $this->form_validation->set_rules("email", "email", "trim|required|valid_email");
    $this->form_validation->set_rules("password", "password", "trim|required");
    $this->form_validation->set_rules("myradio", "myradio", "trim|required");

    if($this->form_validation->run()) {
      echo "done";
    }

    $users = $this->mymodel->get_users();

    $this->data["users"] = $users;
  }

?>
