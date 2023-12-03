<?php
interface DbHandler{
    //public function connect();
    public function get_all_record_paginated();
    public function get_record_by_id($id);
    //public function save($new_values);
    //public function delete($id) ;
    //public function update($edited_values, $id);
}  