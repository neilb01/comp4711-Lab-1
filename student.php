<?php
    /**
     * Created by PhpStorm.
     * User: Neil Brar
     * Date: 2016-09-11
     * Time: 1:18 PM
     */
     /* Student class to construct each student */
    class Student {
        
        /* Constructer to initialize student */
        function __construct()
        {
            $this->surname = '';
            $this->first_name = '';
            $this->emails = array();
            $this->grades = array();
        }
        
        /* Function called to add email */
        function add_email($which, $address)
        {
            $this->emails[$which] = $address;
        }

        /* Function called to add grades */

        function add_grade($grade)
        {
            $this->grades[] = $grade;
        }
        
        /* Function to calculate average grade */
        
        function average()
        {
            $total = 0;
            foreach ($this->grades as $value)
                $total += $value;
            return $total / count($this->grades);
        }

        /* toString function used to display output */
        function toString()
        {
            $result = $this->first_name . ' ' . $this->surname;
            $result .= ' (' . $this->average() . ")\n";
            foreach ($this->emails as $which => $what)
                $result .= $which . ': ' . $what . "\n";
            $result .= "\n";
            return '<pre>' . $result . '</pre>';
        }

    }