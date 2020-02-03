<?php

        require("class.user1.php");

        $objUser = new User();
        $objUser->setFirstName("Ed");
        $objUser->setLastName("Kecky-Thomson");
        $objUser->setUsername("ed");
        
        print "First name is ". $objUser->getFirstName() . "<br/>";
        print "Last name is ". $objUser->getLastName() . "<br/>";
        print "Username is ". $objUser->getUsername() . "<br/>";

?>
