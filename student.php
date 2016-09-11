<?php
    /**
     * Created by PhpStorm.
     * User: NB
     * Date: 2016-09-11
     * Time: 1:18 PM
     */

    class Student {

        function __contstruct() {
            $this->surname = '';
            $this->first_name = '';
            $this->emails = array();
            $this->grades = array();

        }

        function add_email($which, $address) {
            $this->emails[$which] = $address;
        }

        function add_grade($grade) {
            $this->grades[] = $grade;
        }

        function average() {
            $total = 0;
            foreach ($this->grades as $value)
                $total += $value;
            return $total / count($this->grades);
        }


        function toString() {
            $result = $this->first_name . ' ' . $this->surname;
            $result .= ' (' . $this->average() . ")\n";
            foreach ($this->emails as $which => $what)
                $result .= $which . ': ' . $what . "\n";
            $result .= "\n";
            return '<pre>' . $result . '</pre>';
        }

    }