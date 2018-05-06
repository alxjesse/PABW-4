<?php

class VisualView {

    public function form() {
        require_once 'View/V_Form.php';
    }

    public function table($data) {
        require_once 'View/V_select.php';
    }
}
