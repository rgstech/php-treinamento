<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */




        
        foreach (new DirectoryIterator('../funcional') as $fileInfo) {
         
            echo $fileInfo->getFileInfo() . "<br>";
        }
        