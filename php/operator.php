<?php
if(isset($_POST['a']) AND isset($_POST['b']) AND isset($_POST['op']))
{
    $a =htmlspecialchars($_POST['a']);
    $b = htmlspecialchars($_POST['b']);
    $op = htmlspecialchars($_POST['op']);
    
 
    if($a != NULL AND $b != NULL) 
    {
        if($op == 'add')
        {
            $result = $a + $b;
        }

        if($op == 'sous') 
        {
            $result = $a - $b;
        }

        if($op == 'mul')
        {  
            $result = $a * $b;
        }

        if($op == 'div')
        { 
            if (b == 0)
            {
                $erreur = echo "Avec un diviseur égal à 0, ça va pas être possible ...";
            } else
            {
                $result = $a / $b;
            }
        }
    }
}