<?php 

echo "<h2>E) Make a grading application where someone marks a subject and tells you the Grade and GPA.</h2><br>";  
    /**
    * set for English I */ 
    // variables set

    $marks = 65;
    $subject = "English I";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
   /**
    * set for English II */ 
    // variables set

    $marks = 55;
    $subject = "English II";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
/**
    * set for Bengali I */ 
    // variables set

    $marks = 45;
    $subject = "Bengali I";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for Bengali II */ 
    // variables set

    $marks = 32;
    $subject = "Bengali II";

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for Maths */ 
    // variables set

    $marks = 82;
    $subject = "Maths";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for BGS */ 
    // variables set

    $marks = 50;
    $subject = "BGS";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for Science */ 
    // variables set

    $marks = 78;
    $subject = "Science";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for C.Sc */ 
    // variables set

    $marks = 61;
    $subject = "C.Sc";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for Moral & Ethics */ 
    // variables set

    $marks = 93;
    $subject = "Moral & Ethics";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }
    /**
    * set for Art */ 
    // variables set

    $marks = 88;
    $subject = "Art";
    

     //setting to get grades with if-else based on marks
     $grade = null;

     if ($marks >= 0 && $marks <= 35) {
        $grade = "F";
    } elseif ($marks >= 36 && $marks <= 40) {
        $grade = "E";
    } elseif ($marks >= 41 && $marks <= 50) {
        $grade = "D";
    } elseif ($marks >= 51 && $marks <= 60) {
        $grade = "C";
    } elseif ($marks >= 61 && $marks <= 70) {
        $grade = "B";
    } elseif ($marks >= 71 && $marks <= 80) {
        $grade = "A";
    } elseif ($marks >= 81 && $marks <= 100) {
        $grade = "A+";
    }



    //setting to get credit points with switch-case based on grades

    switch ($grade) {
        case "A+":
            $creditPoint = "5.5";
            break;
        case "A":
            $creditPoint = "5";
            break;
        case "B":
            $creditPoint = "4";
            break;
        case "C":
            $creditPoint = "3";
            break;
        case "D":
            $creditPoint = "2";
            break;
        case "E":
            $creditPoint = "1";
            break;
        case "F":
            $creditPoint = "0";
            break;
    }

    // call for output of a student's marksheet
    if ($creditPoint !== "Invalid grade") {
        echo "<p><b>Subject:</b> $subject  <b>Marks:</b> $marks  <b>Grade:</b> $grade  <b>Credits:</b> $creditPoint</p>";
    } else {
        echo "<p>Invalid marks entered.</p>";
    }

    // calculate GPA of the student

?>