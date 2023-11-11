<?php

$option = (isset($_GET['view']))?$_GET['view']:'';
switch ($option) {
    case 'inter':
        include 'inter/inter.html';
        break;
  
	 case 'turno':
        include 'inter/turno.html';
        break;
    
    case 'dictamen':
        include 'inter/dictamen.html';
        break;
    
    case 'aprobar':
        include 'inter/aprobar_dictamen.html';
        break;
    
    case 'general':
        include 'inter/general_servicios.html';
        break;
    
    case 'informes':
        include 'inter/informes.html';
        break;
    
     case 'archivo':
        include 'inter/prueba.html';
        break;

    default :
        include 'index/introduction.html';
        break;

}

