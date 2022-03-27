<?php 

    echo "<pre>";
    // // $_REQUEST used to get data from request
    print_r($_REQUEST);

    // echo "$_REQUEST[name] is a $_REQUEST[age] years old $_REQUEST[job]";
    // if there is red_underline in $_REQUEST then use {$_REQUEST[key]};

    // HERE $_REQUEST is used both get and post

    // In real world , we rarely use REQUEST and catch specific ones
    
    // For get

        print_r($_GET);

    // For post

        print_r($_POST);

    // For Files

        print_r($_FILES);

    // when catch files , we also catch it along with post
    
?>