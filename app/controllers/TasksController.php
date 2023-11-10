<?php
require_once 'app/models/TasksModel.php';
require_once 'app/views/Tasksview.php';

class TasksController { 
    private $model;
    private $view;
 
    public function __construct() {
       $this-> model = new TasksModel ();
       $this->view = new TasksView();
    }
 
    public function showTasks (){

      $canciones = $this -> model ->getTasks (); 

      require 'templates/formAlta.phtml';
      
      ?>
      <ul class="list-group">

      <?php foreach($canciones as $cancion) { ?>

         <li class="list-group-item  item-task <?php if(!$cancion->guardar) echo 'guardada' ?> "> las canciones que agrego en teoria
            <div class="actions">
               <a href="eliminar/<?php echo $cancion->id ?>" type="button" class='btn btn-danger ml-auto'>Borrar</a>
               <a href="guardar/<?php echo $cancion->id ?>" type="button" class='btn btn-success ml-auto'>Guardar</a> <?php } ?>
            
            </div>
         </li>
      </ul>
      
    
      <?php } 
      
    public function addTasks(){
      
      //obtengo los datos del usuario
      $titulo = $_POST['titulo'];
      $genero = $_POST['genero'];
      $artista = $_POST['artista'];

      //validacion
      if (empty($titulo) || empty($genero)) {
         $this->view->showError("Debe completar todos los campos");
         return;
     }

     //inserto en la DB
     $id = $this->model->insertTasks($titulo, $genero, $artista);
     if ($id) {
         header('Location: ' . BASE_URL. 'lista');
     } else {
         $this->view->showError("Error");
     }

   }

   public function removeTasks($id){
      $this->model->deleteTask($id);
      header("LOCATION: " . BASE_URL . 'lista');

   }

   public function saveTasks($id){
      $this->model->updateTask($id);
      header("LOCATION: " . BASE_URL . 'lista');

   }
  
}
