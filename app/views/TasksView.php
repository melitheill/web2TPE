<?php
class TasksView {

    public function showTasks (){
        require 'templates/playlist.phtml';
    }
    
    public function showError($error) {
        require 'templates/error.phtml';
    }


}