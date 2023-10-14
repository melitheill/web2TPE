<?php

class AstistaView {
    
    function showAstistas ($artistas){
        require 'templates/header.phtml';
        
        echo "<h1> Lista de Nuestros Artistas </h1>";
         
        echo "<table>
                <thead>
               <tr>
               <th>Artista</th>
               <th>Pais</th>
               <th>Edad</th>
           </tr>
       <thead>
       <tbody>
       ";

       
        foreach ($artistas as $artista){
           
            echo "
           <tr>
               <td>$artista->nombreArtista</td>
               <td>$artista->nacionalidad</td>
               <td>$artista->edad</td>
           </tr>
       ";
       }
       echo " </tbody>   
       </table>";
        
        require 'templates/footer.phtml';
        }
 

        
 
    

}
