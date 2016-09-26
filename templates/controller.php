<?php
  public function {{formName}}() {
    $this->load->library("form_validation");
    {{#setRules}}
    $this->form_validation->set_rules("{{name}}", "{{name}}", "{{rules}}");
    {{/setRules}}

    if($this->form_validation->run()) {
      echo "done";
    }

    ${{formName}} = $this->{{modelName}}->get_{{formName}}();

    $this->data["{{formName}}"] = ${{formName}};
  }

?>
