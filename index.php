<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        /* Include the student class  */
        include('student.php');
        
        /* Create student array */
        $students = array();

        foreach ($students as $student) {
            echo $student->toString();
        }
        
        /* Adding the first student */
        
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home', 'john@doe.com');
        $first->add_email('work', 'jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;

        /* Adding the second  student */

        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home', 'albert@braniacs.com');
        $second->add_email('work1', 'a_einstein@bcit.ca');
        $second->add_email('work2', 'albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /* Adding myself */

        $third = new Student();
        $third->surname = "Brar";
        $third->first_name = "Neil";
        $third->add_email('home', 'harneilbrar@gmail.com');
        $third->add_email('work1', 'hbrar21@my.bcit.ca');
        $third->add_grade(91);
        $third->add_grade(83);
        $third->add_grade(66);
        $students['a567'] = $third;
        
        /* Sort the students in the array */
        ksort($students);
        
        /* Print out the content of the array */
        foreach ($students as $student) {
            echo $student->toString();
        }

    ?>
</body>
</html>