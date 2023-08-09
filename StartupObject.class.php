<?php

// StartupObject
// Startup Directory object by PJA
// Version 2023-03-15
// Placeholder file

namespace StartupDirectory\Classes;

class StartupObject
{

    // Define properties

//    const CONSTANT_NAME = "value";

    
    /**
    * @var string
    */
    private $id = "";

    /**
    * @var string
    */
    private $_latest_edit_timestamp = "";

    /**
    * @var string
    */
    private $startup_name = "";

    /**
    * @var string
    */
    private $profile_text = "";

    /**
    * Describe the variable
    * @var string
    */
    private $website = "";

    /**
    * Describe the variable
    * @var integer
    */
    private $numberofFounders = false;
    
    /**
     * Constructor
     * Initialises the declared properties to their matching incoming values (if supplied)
     * 
     * @param array $initialFieldValues If supplied, a set of starting values
     * 
     */
    public function __construct($initialFieldValues = array())
    {

        // Copy incoming field values to their corresponding properties (if they exist)
 
        foreach ($initialFieldValues as $k => $v) {
 
            if (isset($initialFieldValues[$k]) && isset($this->{$k})) {

                $this->{$k} = (string) $v;   // enforcing string type

            }
        }

    } // EOF __construct



    // Getters


    public function getID()
    {

        return $this->id;

    }



    public function getName()
    {

        return $this->startup_name;

    } 


    public function getProfileText()
    {

        $string = "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Diam maecenas sed enim ut sem viverra aliquet eget. 
        Cum sociis natoque penatibus et. Id donec ultrices tincidunt arcu non. Aenean euismod elementum nisi quis. Potenti nullam ac tortor vitae dignissim diam quis enim. 
        Tempus urna et pharetra pharetra massa massa. Donec adipiscing id consectetur purus ut faucibus pulvinar elementum. Auctor urna nunc id cursus metus aliquam eleifend mi. Id venenatis a condimentum vitae sapien pellentesque habitant morbi. At in tellus integer feugiat scelerisque varius morbi enim.";

        return $string;

    }


    
}



?>
