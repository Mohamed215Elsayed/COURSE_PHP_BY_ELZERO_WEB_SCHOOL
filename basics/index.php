<?php
/*************lesson-5************* */
// // Single Line Comment
// echo 'Test1'; // Single Line Comment
// echo 'Test2'; # Single Line Comment

// /*
//   Line 1
//   Line 2
// */

// /*
//   ====================
//   == My Special App ==
//   ====================
// */
// /* Single Line */
// echo 'Test3' /* Single Line */;
// // I Used Print Because Its Faster Than Echo <= Example Not True
// print 'Test4';
/****************lesson-6************* */
/*
  ============================================
  = Data Types
  = ----------
  = bool  => Boolean
  = int   => Integer
  = float => Floating Point Number | double
  = string
  = array
  = Other Types
  = gettype()
  ============================================
  */
/*
  echo gettype(True);
  echo '<br>';
  echo gettype(False);
  echo '<br>';
  echo gettype(true);
  echo '<br>';
  echo gettype(100);
  echo '<br>';
  echo gettype(-200);
  echo '<br>';
  echo gettype(0);
  echo '<br>';
  echo gettype(70.30);
  echo '<br>';
  echo gettype(-60.30);
  echo '<br>';
  echo gettype('Elzero');
  echo '<br>';
  echo gettype("Elzero");
  echo '<br>';
  echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arabia"));
  echo '<br>';
  echo gettype(array("Egypt", "Saudi Arabia"));
  echo '<br>';
  echo gettype(["Egypt", "Saudi Arabia"]);*/
  /*lesson-6
echo gettype("hello");//string
echo gettype(1);//integer
echo gettype(1.1);//float
echo gettype(true);//boolean
echo gettype(null);//null
echo gettype(array());//array
echo gettype(new stdClass());//object
echo gettype(function(){});//object
*/

// <!-- /***********lesson-7************* */ -->
  /*
  ============================================
  = Data Types
  = ----------
  = Type Juggling + Automatic Type Conversion
  ============================================
  */
/*
  echo 1 + "2"; // 3
  echo '<br>';
  echo gettype(1 + "2"); // Integer
  echo '<br>';
  echo True; // 1
  echo '<br>';
  echo gettype(True); // Boolean
  echo '<br>';
  echo True + True; // 2
  echo '<br>';
  echo gettype(True + True); // Integer
  echo '<br>';
  echo 5 + '5 Lessons'; // 10 => Warning
  echo '<br>';
  echo gettype(5 + '5 Lessons'); // Integer => Warning
  echo '<br>';
  echo 10 + 15.5; // 25.5
  echo '<br>';
  echo gettype(10 + 15.5); // double => Float
  echo '<br>';*/
/***************lesson-8***************** */
  /*
  ============================================
  = Data Types
  = ----------
  = Type Casting
  = ----------------------
  = "boolean" or "bool"
  = "integer" or "int"
  = "float" or "double" or "real"
  = "string"
  = "array"
  = "object"
  = "null"
  = ------
  = Search For
Settype
  ============================================
  */
  /*
  echo 5 + (int) "5 Lessons";//10
  echo '<br>';
  echo 5 + (integer) "5 Lessons";//10
  echo '<br>';
  echo 5 + ( integer ) "5 Lessons";//10
  echo '<br>';
  echo gettype(5 + (int) "5 Lessons");//integer
  echo '<br>';
  echo 10 + 15.5;//25.5
  echo '<br>';
  echo 10 + (int) 15.5;//25
  echo '<br>';
  echo gettype(10 + (int) 15.5);//integer
  echo '<br>';
  echo 10.5 + 10.5;//21.0
  echo '<br>';
  echo gettype(10.5 + 10.5);//double
  echo '<br>';
  echo (int) 10.5 + (int) 10.5; // 20
  echo '<br>';
  echo gettype((int) 10.5 + (int) 10.5);//integer
  echo '<br>';
  echo (int) (10.5 + 10.5); // 21
  */
/*************lesson-9******************* */
  /*
  ============================================
  = Data Types
  = ----------
  = Boolean + Converting To Boolean
  ============================================
  */
/*
  var_dump((bool) "");//bool(false)
  echo '<br>';
  var_dump((bool) array());//bool(false)
  echo '<br>';
  var_dump((bool) []);//bool(false)
  echo '<br>';
  var_dump((bool) 0);//bool(false)
  echo '<br>';
  var_dump((bool) "0");// bool(false)
  echo '<br>';
  var_dump((bool) "Elzero");// bool(true)
  echo '<br>';
  var_dump((bool) array(1));//bool(true)
  echo '<br>';
  var_dump((bool) [1]);//bool(true)
  echo '<br>';
  var_dump((bool) 100);//bool(true)
  echo '<br>';
  var_dump((bool) -100);//bool(true)
  echo '<br>';
  var_dump((bool) 10.5);//bool(true)
  echo '<br>';
  var_dump((bool) -10.5);//bool(true)
  */
/***********lesson-10************* */
  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = nl2br()
  ============================================
  */
/*
  echo 'Hello PHP';
  echo '<br>';
  echo "Hello PHP";
  echo '<br>';
  echo "Hello 'PHP'";
  echo '<br>';
  echo 'Hello "PHP"';
  echo '<br>';
  echo 'Hello \'PHP\'';
  echo '<br>';
  echo "Hello \"PHP\"";
  echo '<br>';
  echo "Hello PHP\\";
  echo '<br>';
  echo 'Hello PHP
  On Multiple
  Lines';
  echo '<br>';
  echo nl2br('Hello PHP
  On Multiple
  Lines');
  */

/***********lesson-11************* */
  /*
  ============================================
  = Data Types
  = ----------
  = String And Escaping
  = -------------------
  = Heredoc
  = Nowdoc
  Heredoc is a syntax available in PHP that allows you to define multi-line strings without the need for explicit concatenation or escape sequences. It provides a convenient way to define large blocks of text or HTML within your PHP code.

The heredoc syntax starts with <<< followed by an identifier of your choice, and it ends with the same identifier on a line by itself. Here's an example of how to use heredoc in PHP:


  Nowdoc is another string syntax available in PHP that is similar to heredoc but treats the enclosed string as a literal, without performing variable interpolation or evaluating escape sequences. It is useful when you need to preserve the exact contents of a string, including variable names and special characters.

The nowdoc syntax is similar to heredoc, but instead of using <<<EOT, it uses <<<'EOT' (single quotes around the identifier). Here's an example of how to use nowdoc in PHP:
  ============================================
  */

//   $name = "Osama";

//   // Heredoc if "" or not

//   echo <<<"Here"
//   Hello PHP
//   Special Characters $$$ ' ' ' """"" \\\\
//   Hello My Name Is $name
//   Here;

//   echo '<br>';

//   // Nowdoc
//   echo <<<'Now'
//   Hello PHP
//   Special Characters $$$ ' ' ' """"" \\\\
//   Hello My Name Is $name
//   Now;
//   echo '<br>';

//   echo '<ul>';
//     echo "<li>" . $name . "</li>";
//     echo "<li>" . $name . "</li>";
//     echo "<li>" . $name . "</li>";
//     echo "<li>" . $name . "</li>";
//   echo '</ul>';
//   echo '<br>';

//   echo <<<"navlinks"
//          <ul>
//             <li>$name</li>
//             <li>$name</li>
//             <li>$name</li>
//             <li>$name</li>
//           </ul>
//   navlinks;

//   $myname = "John";
// $message = <<<EOT
// Hello $myname,

// Thank you for registering on our website. We're excited to have you as a member!

// Please let us know if you have any questions or need assistance.

// Best regards,
// Your Website Team
// EOT;

// echo $message;
//  echo '<br>';
// $namebynowdoc = "John";
// $message = <<<'EOT'
// Hello $namebynowdoc,

// Thank you for registering on our website. We're excited to have you as a member!

// Please let us know if you have any questions or need assistance.

// Best regards,
// Your Website Team
// EOT;

// echo $message;

/***********lesson-12************* */
  /*
  ============================================
  = Data Types
  = ----------
  = Array
  = -------------------
  = Array With Key
  = Array Without Keys
  = Array With One Key
  = Array Value Override
  = ------------------
  = print_r()
  ============================================
  */
/*
  echo '<pre>';
  print_r([
    0 => "Sameh",
    "A" => "Ahmed",
    "B" => "Basem",
    "Mahmoud",
    True => "Sayed",
    "1" => "Osama",
    "Gamal",
    9 => "Amera",
    "Eman",
    "Mohamed",
    False => "Asmaa",
    8 => "Haytham",
    "Samer",
    "Names" => [
      "Osama",
      "Ahmed",
      "Sayed" => [
        "1",
        "2",
        "3"
      ]
    ]
  ]);
  echo '</pre>';
  */
/**************lesson-13********** */
  /*
    Variables
    - Naming Rules + Info
    [1] Start With Dollar Sign $
    [2] Start With A Letter [a-z] Or [A-Z] Or Underscore
    [3] You Can Use Numbers Inside The Name
    [4] No Special Characters Allowed
    [5] Case Sensitive
    - Test Single And Double Quotes

    Search
    - Loosely Typed Language
  */
/*
  $username = "MO";
  $Username = "ElSayed";

  echo $username;//MO
  echo '<br>';
  echo $Username;//ElSayed
  echo '<br>';

  echo 'Hello $username';//not work as 
  echo '<br>';
  echo "Hello $username";//
  */

/***********lesson-14************* */
// in score page
/************lesson-15************ */
  /*
    Variable Variable
    Takes The Value Of A Variable And Treats That As The Name Of A Variable
  */
/*
  $a = "osama";
  $$a = "elzero";
  $$$a = "school";

  echo $a."<br>";//osama

  echo $$a."<br>";//elzero

  echo $osama."<br>";//elzero

  echo $$$a."<br>";//school

  echo $elzero."<br>";//school

  echo "Hello ${$a}"."<br>"; //Hello elzero ${} must be one outside

  echo "Hello ${$$a}<br>"; //Hello school

    echo "Hello ${a}"; //Hello osama
    */
/************lesson-16************ */
  /*
    Assign Variable By Reference
    - By Default, Variables Are Always Assigned By Value
    - Assigned By Reference Make Variable Alias Or Point To Another

    Search
    - References Are Not Pointers
  */
/*
  $a = "Osama";
  $b = &$a;
  $b = "Elzero";
  $a = "School";

  echo $a.'<br>';//School

  echo $b;
*/
// $original = "Hello";
// $reference = &$original;
// $reference = "Goodbye";

// echo $original;  // Output: Goodbye

/************lesson-17************ */

  /*
    Pre-Defined Variables

    Search
    - PHP Pre-Defined Variables
  */
/*
  echo '<pre>';
  print_r($_SERVER);
  echo $_SERVER["HTTP_CONNECTION"];
  echo '</pre>';
*/
//   echo $_GET["username"];

// <form action="" method="get">
//   <input type="text" name="username">
//   <input type="submit" value="Send">
// </form>
/**************lesson-18********** */
  /*
    Constants
    - That Value Cannot Change During The Execution
    - Constants Always Uppercase
  */
/*
  define("DB_NAME", "elzero");
  define("MAIN_NUMBER", 5);

  echo DB_NAME;
  echo MAIN_NUMBER * 50;
  */
/****************lesson-19******** */

  /*
    Pre-Defined Constants [Case Sensitive]???

    PHP_VERSION: Represents the current version of PHP.
    PHP_OS: Represents the operating system PHP is running on.
    PHP_EOL: Represents the platform-specific end-of-line character sequence.
    PHP_INT_MAX: Represents the maximum value for an integer on the current platform.
    PHP_INT_SIZE: Represents the number of bytes used to store an integer on the current platform.
    PHP_SELF: Represents the filename of the currently executing script.
    __LINE__: Represents the current line number in the script.
    __FILE__: Represents the full path and filename of the script.
    __DIR__: Represents the directory of the script.
    __FUNCTION__: Represents the name of the current function.
    __CLASS__: Represents the name of the current class.
    __TRAIT__: Represents the name of the current trait.
    __METHOD__: Represents the name of the current method.
    __NAMESPACE__: Represents the current namespace name.

   - PHP_OS_FAMILY
    - PHP_INT_MAX
    - DEFAULT_INCLUDE_PATH
    Magic Constants [Case Insensitive]
    - __LINE__
    - __FILE__
    - __DIR__

    Reserved Keywords
    - break
    - clone

    Search
    - PHP Predefined Constants
    - Compile Time vs Runtime
    - List of Reserved Words
  */

  // define("BREAKS", "AA");

  // echo php_uname().'<br>';

  // echo PHP_VERSION .'<br>';
  // echo  PHP_OS_FAMILY .'<br>';//Windows
  // echo PHP_OS  .'<br>';//WINNT
  // echo  "Hello" . PHP_EOL . "World" .'<br>';
  // echo PHP_INT_MAX .'<br>';
  //  echo PHP_INT_SIZE .'<br>';//8

  // echo __LINE__ .'<br>';

  // echo __FILE__ .'<br>';

  // echo __dir__ .'<br>';

  // echo BREAKS .'<br>';

  // // No Problem Here
  // function hellofn() {
  //   echo __FUNCTION__ ."<br>";
  //   return "Hello";
  // }
  // echo hellofn() .'<br>';

  // Syntax Error => Reserved Word
  // function clone() {
  //   return "Clone";
  // }
  // echo clone();

// class MyClass {
//     public function getClassName() {
//         return __CLASS__;
//     }
// }

// $obj = new MyClass();
// echo $obj->getClassName(); // Output: MyClass

// trait MyTrait {
//     public function getTraitName() {
//         return __TRAIT__;
//     }
// }

// class MyClass {
//     use MyTrait;
// }

// $obj = new MyClass();
// echo $obj->getTraitName();  // Output: MyTrait

// trait MyTrait {
// }
// class MyClass {
//     use MyTrait;
// }
// $obj = new MyClass();
// $traits = class_uses($obj);
// echo reset($traits);  // Output: MyTrait


// class MyClass {
//     public function getMethodName() {
//         return __METHOD__;
//     }
// }

// $obj = new MyClass();
// echo $obj->getMethodName();  // Output: MyClass::getMethodName


// namespace MyNamespace;

// function getNamespaceName() {
//     return __NAMESPACE__;
// }

// echo getNamespaceName();  // Output: MyNamespace
/************lesson-20************ */
  /*
    Operators
    - Used To Perform Operations On Values.

    Arithmetic Operators
    - Used To Do Arithmetical Operations &#038; Conversion

    - $a [+]  $b => Addition
    - $a [-]  $b => Subtraction
    - $a [*]  $b => Multiplication
    - $a [/]  $b => Division
    - $a [%]  $b => Modulus
    - $a [**] $b => Exponentiation
    - +$a        => Identity
    - -$a        => Negation
  */


  // echo 10 + 20 .'<br>';
  // echo gettype(10 + 20)."<br>";

  // echo 9.5 + 20.5 .'<br>';

  // echo gettype(9.5 + 20.5).'<br>';


  // echo 10 - 20 .'<br>';

  // echo gettype(10 - 20).'<br>';

  // echo 9.5 - 20.5.'<br>';
  
  // echo gettype(9.5 - 20.5).'<br>';

  // echo 10 * 20 .'<br>';
 
  // echo gettype(10 * 20).'<br>';

  // echo 9.5 * 20.5 .'<br>';

  // echo gettype(9.5 * 20.5).'<br>';


  // echo 20 / 10 .'<br>';

  // echo gettype(20 / 10);
  // echo '<br>';

  // echo 20 / 8;
  // echo '<br>';
  // echo gettype(20 / 8);
  // echo '<br>';

  // echo 21 % 10; // Remove 1 To Become 20
  // echo '<br>';
  // echo 23 % 10; // Remove 3 To Become 20
  // echo '<br>';
  // echo 29 % 10; // Remove 9 To Become 20
  // echo '<br>';
  // echo 30 % 10;
  // echo '<br>';

  // echo 2 ** 4;
  // echo '<br>';
  // echo 2 * 2 * 2 * 2;
  // echo '<br>';
  // echo 3 ** 5;
  // echo '<br>';
  // echo 3 * 3 * 3 * 3 * 3;
  // echo '<br>';

  // echo "100";
  // echo '<br>';
  // echo gettype("100");
  // echo '<br>';
  // echo +"100";
  // echo '<br>';
  // echo gettype(+"100");
  // echo '<br>';

  // echo "-100";
  // echo '<br>';
  // echo gettype("-100");
  // echo '<br>';
  // echo -"-100";
  // echo '<br>';
  // echo gettype(-"-100");
/**********lesson-21************** */

  /*
    Operators
    - Used To Perform Operations On Values.

    Assignment Operators
    - Used To Write Value To Another

    - $a [+=]  $b => Addition
    - $a [-=]  $b => Subtraction
    - $a [*=]  $b => Multiplication
    - $a [/=]  $b => Division
    - $a [%=]  $b => Modulus
    - $a [**=] $b => Exponentiation
  */

  // $a = 10;
  // // $a = $a + 20;
  // $a += 20;//30

  // $b = 20;
  // // $b = $b - 5;
  // $b -= 5;//15

  // $c = 4;
  // // $c = $c ** 4;
  // $c **= 4;//256

  // echo $a;
  // echo '<br>';
  // echo $b;
  // echo '<br>';
  // echo $c;

 /**********lesson-22************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 1
    - ==    => Equal
    - !=    => Not Equal
    - <>    => Not Equal
    - ===   => Identical
    - !==   => Not Identical
  */
/*
  // Test Equal
  var_dump(100 == 100);//bool(true)
  echo '<br>';
  var_dump(100 == "100");//bool(true)
  echo '<br>';
  var_dump(100.0 == "100");//bool(true)
  echo '<br>';
  var_dump(100.0 != "100");//bool(false)
  echo '<br>';
  var_dump(100.0 <> "100");//bool(false)
  echo '<br>';
  echo '##############';
  echo '<br>';

  // Test Identical
  var_dump(100 === 100);//bool(true)
  echo '<br>';
  var_dump(100 === "100");//bool(false)
  echo '<br>';
  var_dump(100.0 === "100");//bool(false)
  echo '<br>';
  var_dump(100.0 === 100);//bool(false)
  echo '<br>';
  var_dump(100.0 !== "100");//bool(true)
  echo '<br>';
  var_dump(100.0 !== 100);//bool(true)
  */

  /**********lesson-23************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Comparison Operators
    - Used To Compare Two Values

    - Part 2
    - >     => Larger Than
    - >=    => Larger Than Or Equal
    - <     => Smaller Than
    - <=    => Smaller Than Or Equal
    - <=>   => Spaceship [Less Than, Equal Or Greater]

    Search
    - How Does PHP Compare Strings With Comparison Operators
  */

  /*
  var_dump(100 > 50);//bool(true)
  echo '<br>';
  var_dump(100 > 100);//bool(false)
  echo '<br>';
  var_dump(100 >= 100);//bool(true)
  echo '<br>';
  var_dump(100 >= 110);//bool(false)
  echo '<br>';
  var_dump(100 < 50);//bool(false)
  echo '<br>';
  var_dump(100 <= 50);//bool(false)
  echo '<br>';
  var_dump(100 <=> 200); // -1
  echo '<br>';
  var_dump(100 <=> 100); // 0
  echo '<br>';
  var_dump(100 <=> 50); // 1
  */
  // $str1 = 'Hello';
  // $str2 = 'hello';
  // if ($str1 == $str2) {
  // echo 'Strings are equal.';
  // } else {
  // echo 'Strings are not equal.';
  // }
// //Output: Strings are not equal.

// $str1 = 'Hello';
// $str2 = 'hello';
// if ($str1 != $str2) {
//     echo 'Strings are not equal.';
// } else {
//     echo 'Strings are equal.';
// }
// // Output: Strings are not equal.

// $str1 = 'Hello';
// $str2 = 'Hello';
// if ($str1 === $str2) {
//     echo 'Strings are identical.';
// } else {
//     echo 'Strings are not identical.';
// }
// // Output: Strings are identical.

// $str1 = 'Hello';
// $str2 = 'hello';
// if ($str1 !== $str2) {
//     echo 'Strings are not identical.';
// } else {
//     echo 'Strings are identical.';
// }
// // Output: Strings are not identical.

// $str1 = 'apple';
// $str2 = 'banana';
// if ($str1 < $str2) {
//     echo 'str1 is less than str2.';
// } else {
//     echo 'str1 is greater than or equal to str2.';
// }
// // Output: str1 is less than str2.

// $str1 = 'apple';
// $str2 = 'Apple';
// if ($str1 < $str2) {
//     echo 'str1 is less than str2.';
// } else {
//     echo 'str1 is greater than or equal to str2.';
// }
// //str1 is greater than or equal to str2. a=97 and A=63

  /**********lesson-24************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Incrementing &#038; Decrementing Operators
    - Increase And Decrease Values
  */
/*
  $likes = 0;
  $likes++;
  $likes++;
  $likes++;
  $likes--;

  echo $likes; // 2
  echo '<br>';

  $a = 0;

  echo $a--; // 0
  echo '<br>';
  echo $a; // -1
  echo '<br>';

  $b = 0;

  echo --$b; // -1
  echo '<br>';
  echo $b; // -1
  */

  /**********lesson-25************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Logical Operators
    - Compare Conditions

    and => And => Two Are True
    &&  => And => Two Are True ["&&" Has A Greater Precedence Than "and"]
    or  => Or  => One Or Both Is True
    ||  => Or  => One Or Both Is True ["||" Has A Greater Precedence Than "or"]
    xor => Xor => One Is True But Not Both
    !   => Not => Not True
  */
/*
  var_dump(100 > 50 and 100 > 80 and 100 > 90); // True
  echo '<br>';
  var_dump(100 > 50 && 100 > 80 && 100 > 90); // true
  echo '<br>';
  var_dump(100 > 50 && 100 > 80 && 100 > 100); // False
  echo '<br>';
  var_dump(100 > 50 or 100 > 110 or 100 > 100); // True
  echo '<br>';
  var_dump(100 > 50 xor 100 > 80);//false
  echo '<br>';
  var_dump(100 < 50 xor 100 < 80);//bool(false)
  echo '<br>';
  */

  /**********lesson-26************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    String Operators
    - Concatenate Strings

    .
    .=
  */
/*
  define("ELZERO", "1");
  $a = "Elzero";
  $b = "Web";
  $c = "School";
  echo "$a $b $c" .'<br>';

  echo "{$a} {$b} {$c}" .'<br>';

  // echo '{$a} {$b} {$c}' .'<br>';//{$a} {$b} {$c}

  echo $a . " " . $b . " " . $c .'<br>';

  echo "{$a} {$b} {$c} " . ELZERO . " " . testing() .'<br>';
  function testing() {
    return 1;
  }

  $x = "Elzero ";
  // $x = $x . "Web"; //=> Elzero Web
  $x .= "Web"; 
  $x .= " School"; // $x = $x . "School" => Elzero Web School

  echo $x;
  /*

  /**********lesson-27************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Array Operators
    - Deal With Arrays

    +     => Union
    ==    => Equal => Same Key And Value
    !=    => Not Equal
    <>    => Not Equal
    ===   => Identical => Same Key And Value, Same Order, Same Type
    !==   => Not Identical
  */
  /*
  $arr1 = [1 => "A", 2 => "B"];
  $arr2 = [3 => "C", 4 => "D"];
  $arr3 = $arr1 + $arr2;//union operator does concatenate

  echo '<pre>';
  // print_r($arr1 + $arr2);
  print_r($arr3);
  echo '</pre>';

  $arr4 = [1 => "10", 2 => "20"];
  $arr5 = [2 => 20, 1 => 10];

  var_dump($arr4 == $arr5); // True =>same key and value
  echo '<br>';
  var_dump($arr4 !== $arr5); //True
  echo '<br>';
  var_dump($arr4 <> $arr5); // False
  echo '<br>';

  $arr6 = [1 => 100, 2 => 200];
  $arr7 = [1 => 100, 2 => 200];
  $arr8 = [2 => 200,1 => 100];
  var_dump($arr6 === $arr7); // Give Me True
  echo '<br>';
  var_dump($arr6 === $arr8); // Give Me false not same order
  */
  /**********lesson-28************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Error Control Operator
    - Control The Errors

    @
    - Variable
    - File
    - Include
  */
/*
  // Variable
  $a = 10;
  $b = @$a or die("Variable Not Found");

  echo "Test $b";
  echo '<br>';

  // File
  $f = @file("mo.txt") or die("File Not Found");
  //$f = @file("mo1.txt") or die("File Not Found");//File Not Found
  echo '<pre>';
  print_r($f);
  echo '</pre>';
  echo '<br>';

  // Include
  (@include("mo.php")) or die("Include File Not Found");
  */

  /**********lesson-29************** */
  /*
    Operators
    - Used To Perform Operations On Values.

    Operator Precedence
    - "||" Has A Greater Precedence Than "or"
    - "&#038;&#038;" Has A Greater Precedence Than "and"
  */
/*
  echo 2 + 4 * 5; // 22
  echo '<br>';
  echo (2 + 4) * 5; // 30
  echo '<br>';
  echo 10 || false || 0 || [] || ""; // True => 1
  echo '<br>';
  echo true; // 1
  echo '<br>';
  var_dump(10 || false || 0 || [] || ""); // True
  echo '<br>';
  echo 10 || false; // 1
  echo '<br>';

  $a = 10 || false; // $a = (10 || false) => $a = 1
  echo $a; // 1

  echo '<br>';

  $b = 10 or false; // ($b = 10) or false
  echo $b; // 10
*/
  /**********lesson-30************** */
  /*
    Control Structure
    - If, Elseif, Else <= Basics

    Syntax
    if (Condition) {
      If Condition Is True <= Run Me
    } else {
      If Condition Is False <= Run Me
    }
  */
/*
  if (10 > 10) {

    echo "First Condition";

  } elseif (10 > 10) {

    echo "Second Condition";

  } else {

    echo "No";

  }
  */
  /**********lesson-31************** */
  /*
    Control Structure
    - If, Elseif, Else <= Real Life Examples
  */
/*
  // If
  $page = "About";
  if ($page == "About") {
    echo "This Is The Page";
  }
  echo '<br>';
  // If, Else
  $title = "";
  if ($title == "") {
    echo "Unknown Page";
  } else {
    echo $title;
  }

  echo '<br>';
  // If, Elseif, Else
  $lang = "Elzero";
  if ($lang == "Arabic") {
    echo 'مرحبا';

  } elseif ($lang == "English") {
    echo 'Hello';
  } elseif ($lang == "Spanish") {
    echo 'Hola';
  } else {
    echo 'Unknown Language';
  }
*/
/**********lesson-32************** */
  /*
    Control Structure
    - If, Elseif, Else <= Advanced Practice
    30% To 60%
  */
  // if ($_SERVER["REQUEST_METHOD"] === "POST") {

  //   if ($_POST['lang'] == 'ar') {
  //     header("Location: ar.php");
  //     exit();
  //   }
  //   elseif ($_POST['lang'] == 'en') {
  //     header("Location: en.php");
  //     exit();
  //   }

  // }

// <!DOCTYPE html>
// <html lang="en">
//   <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Support</title>
//   </head>
//   <body>
//     <form action="" method="POST">
//       <input type="text" name="username">
//       <select name="lang">
//         <option value="ar">Arabic</option>
//         <option value="en">English</option>
//         <option value="es">Spanish</option>
//       </select>
//       <input type="submit" value="Go">
//     </form>
//   </body>
// </html>
/**********lesson-33************** */ 
  /*
    Control Structure
    - If, Elseif, Else <= Alternate Syntax
    60% To 80%
  */
  // if (10 > 5) {
  //   echo "Good";
  // }
  // else {
  //   echo "Bad";
  // }
  // echo "<br>";
  // if (10 > 10) echo "Good"; echo "second line";// second line
  // if (10 > 10) echo "Good";
  // else echo "Bad";
  // echo "<br>";

  // if (10 > 10)
  //   echo "Good";
  // else
  //   echo "Bad";
  // echo "<br>";

  // if (10 > 10) echo "Good"; else echo "Bad";

  ?>
<?php
//  if (10 > 5) :
  ?>
<!-- <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    Hello Page
  </body>
</html> -->
  
<?php
//  endif; 
 ?>
<?php
  // if (10 > 10) :
  //   echo "First";
  // elseif (10 > 10) :
  //   echo "Second";
  // else:
  //   echo "Last";
  // endif;
  ?>
  <!-- /**********lesson-34************** */ -->
  <?php
  /*
    Control Structure
    - Nested If Condition And Training
  */
  /*
  $name = "MOhamed";
  $is_student = true;
  $is_orphan = true;
  $country = "Egypt";
  $country_discount = 25;
  $price = 100;
  $student_discount = 20;
  $orphan_discount = 30;

  if ($country == "Egypt") {
          if ($is_student == true) {
              if ($is_orphan == true) {
                  echo "Hello $name" ."<br>";
                  echo "Country Discount $country_discount" ."<br>";
                  echo "Student Discount $student_discount" ."<br>";
                  echo "Orphan Discount $orphan_discount" ."<br>";
                  echo "The Final Price Is " . $price - $country_discount - $student_discount - $orphan_discount;

              }
              else {
                    echo "Hello $name" ."<br>";
                    echo "Country Discount $country_discount" ."<br>";
                    echo "Student Discount $student_discount" ."<br>";
                    echo "The Final Price Is " . $price - $country_discount - $student_discount;
                    }
          }
          else {
            echo "Hello $name". "<br>";
            echo "Country Discount $country_discount" . "<br>";
            echo "The Final Price Is " . $price - $country_discount;
          }

  }else {
    echo "Hello $name"."<br>";
    echo "No Discount" ."<br>";
    echo "The Final Price Is $price";
  }
  */

  /**********lesson-35************** */
  /*
    Control Structure
    - Ternary Operator => Short If
  */
  // $a = 10;
  // if ($a > 8) {
  //   echo "Good";
  // }
  // else {
  //   echo "Bad";
  // }

  // Condition ? True : False;
  // echo $a > 8 ? "Good" : "Bad" .'<br>';

  // echo "I Love PHP Because Its A ";
  // if ($a > 8) {
  //   echo "Good";
  // } else {
  //   echo "Bad";
  // }
  // echo " Language" .'<br>';

  // echo "I Love PHP Because Its A " . ($a > 8 ? "Good" : "Bad") . " Language" .'<br>';

  // $result = $a > 8 ? "Good" : "Bad";
  // echo "I Love PHP Because Its A $result Language";

  /**********lesson-36************** */
  /*
    Control Structure
    - Switch
    Syntax
    switch (expression) {
      Case 1:
        Code Block 1
        break;
      Case 2:
        Code Block 2
        break;
      Case 3:
        Code Block 3
        break;
      Default:
        Default Code Block
    }
  */

  // $day = "Wed";
  // switch($day) {
  //   case "Sat":
  //     echo "Hello Today Is $day : We Are Open From 10:16";
  //     break;

  //   case "Sun":
  //     echo "Hello Today Is $day  : We Are Open From 12:18";
  //     break;

  //   case "Mon":
  //   case "Thu":
  //   case "Fri":
  //     echo "Hello Today Is $day : We Are Open From 08:12";
  //     break;

  //   default:
  //     echo "Unknown Day";
  // }

  /**********lesson-37***************/
  /*
    Control Structure
    - Loop
    While
  */

  // echo "1<br>";
  // echo "2<br>";
  // echo "3<br>";
  // echo "4<br>";
  // echo "5<br>";

  // echo "1<br>2<br>3<br>4<br>5<br>";

  // $i = 1;
  // while ($i <= 5) {
  //   echo "$i<br>";
  //   $i++;
  // }

  // $a = 1;
  // while ($a <= 5) :
  //   echo "$a<br>";
  //   $a++;
  // endwhile;
  /**********lesson-38************** */
  /*
    Control Structure
    - Loop

    Do, While
  */

  // $i = 4;
  // while ($i <= 3) {
  //   echo "$i<br>";
  //   $i++;
  // }

  // do {
  //   echo "$i<br>";
  //   $i++;
  // } while ($i <= 3);

  // $index = 0;
  // while ($index <= 100) {
  //   echo "$index<br>";
  //   $index += 5;
  // }
  /**********lesson-39************** */
  /*
    Control Structure
    - Loop
    For
    - Expression One Run Once At The First Of The Loop
    - In The Begining Of Iteration Expression Two Is Checked [If True Continue || Break]
    - At The End Of Iteration Expression Three Are Executed
  */

  // $i = 1;
  // while ($i <= 3) {
  //   echo "$i<br>";
  //   $i++;
  // }

  // echo '##### <br>';

  // for ($i = 1; $i <= 3; $i++) {
  //   echo "$i<br>";
  // }
  // echo '##### <br>';

  // $index = 1;
  // for (;;) :
  //   if ($index == 4) {
  //     break;
  //   }
  //   echo "$index<br>";
  //   $index++;
  // endfor;
  /**********lesson-40************** */
  /*
    Control Structure
    - Loop
    Foreach
  */

  // $countries = ["EG", "SA", "QA", "SY"];
  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // foreach ($countries as $country) {
  //   echo $country . "<br>";
  // }

  // $countries_with_discount = ["EG" => 50, "SA" => 30, "QA" => 50, "SY" => 70];

  // echo '<pre>';
  // print_r($countries_with_discount);
  // echo '</pre>';

  // foreach ($countries_with_discount as $country => $discount) :

  //   echo "Country Name Is $country And Discount Is $discount <br>";

  // endforeach;

  /**********lesson-41************** */

  /*
    Control Structure
    - Loop
    Break, Continue
    - Break Ends Execution Of (For, Foreach, While, Do-while or Switch)
    - Skip Current Iteration
  */

  // foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
  //   if ($country == "USA") {
  //     break;
  //   }
  //   echo $country . "<br>";
  // }
  // echo "########## <br>";

  // foreach (["EG", "SA", "QA", "SY", "USA", "GER"] as $country) {
  //   if ($country == "USA") {
  //     continue;
  //   }
  //   echo $country . "<br>";
  // }

  /**********lesson-42************** */
  /*
    Control Structure
    - Including Files
    Include
    Require
  */
    // include("test.php"); // $a = 10;
    // echo $a . '<br>';//10
    // echo "Continue";//continue

    // include("test1.php"); //Warning: include(test1.php): Failed to open stream: No
    // echo $a . '<br>';//Warning: Undefined variable $a 
    // echo "Continue";//continue

    // require("test.php"); // $a = 10;
    // echo $a . '<br>';//10
    // echo "Continue";//continue

    // require("test1.php");//Fatal error: Uncaught Error: Failed opening required 'test1.php'
    // echo $a . '<br>';
    // echo "Continue";

  // include_once("test.php"); // $a = 10;
  // echo $a . '<br>';//10
  // $a = 20;

  // include_once("test.php"); // $a = 10;
  // echo $a . '<br>';//20

  // echo "Continue";

  /**********lesson-43************** */
  /*
    Function
    - Introduction And DRY Concept
    - Parameter
    - Argument
  */
/*
  echo "Hello Mr Osama<br>";
  echo "Hello Mr Ahmed<br>";
  echo "Hello Mr Sayed<br>";

  function say_hello_to($someone) {
    echo "Hello Mr $someone<br>";
  }

  say_hello_to("Osama");
  say_hello_to("Ahmed");
  say_hello_to("Sayed");
  */

  /**********lesson-44************** */
  /*
    Function
    - Advanced Examples With Parameters And Arguments
    - Real Life Example
  */

  // function say_hello_to($one, $two) {
  //   echo "Hello $one $two<br>";
  // }
  // say_hello_to("Osama", "Ahmed");

  // function deep_freezer($item) {
  //   if ($item === "Water") {
  //     echo "Make Ice <br>";
    // } elseif ($item === "Coca Cola") {
    //   echo "Make It Cold <br>";
    // } elseif ($item === "Fruits") {
    //   echo "Make It Fresh <br>";
    // } else {
    //   echo "Unknown Item";
  //   }
  // }

  // deep_freezer("Water");
  // deep_freezer("Coca Cola");
  // deep_freezer("Fruits");
  // deep_freezer("Tv Remote");

  /**********lesson-45************** */

  /*
    Function
    - Optional Return &#038; Null
    - End After Return
  */

  // $prizes = ["PC", "Playstation", "XBOX", "Apple TV", "Laptop", "iPad", "iPhone"];
  // function get_number($num_one, $num_two) {
  //   return $num_one + $num_two;
  //   echo "Will Not Echo Anything";
  // }

  // // get_number(2, 1); // 3
  // // echo $prizes[3]; // "Apple TV"
  // // $prize_number = get_number(2, 1);
  // // var_dump($prize_number);
  // // echo $prizes[];

  // // $prize_number = get_number(2, 1);
  // // var_dump($prize_number);

  // echo $prizes[get_number(2, 1)];

  /**********lesson-46************** */
  /*
    Function
    - Default Parameter Value
    --- Using
    --- Test Data
    --- Skip Arguments
  */

  // function get_data($country = "Private Country", $name = "Private", $age = "Private", $address) {
  //   // if ($address === "") {
  //   //   $address = "Private Address";
  //   // }
  //   $line_one = "Your Country Is $country And Your Name Is $name <br>";
  //   $line_two = "Your Age Is $age And You Live In $address";
  //   return $line_one . $line_two;
  // }
  // // echo get_data("eg","mo",24,"");
  // // echo get_data("eg","mo",24,"Cairo");
  // echo get_data(address: "Cairo");

  /**********lesson-47************** */
  /*
    Function
    - Variable Arguments List
    --- func_num_args()
    --- func_get_arg(index)
    --- func_get_args()
    Spread Syntax In JS
  */

  // function calculate() {
  //   echo "Number Of Arguments: " . func_num_args() . "<br>";//7
  //   echo "Argument Index Number 3 Is " . func_get_arg(3) . "<br>";//30
  //   print_r(func_get_args());
  //   $result = 0;
  //   foreach (func_get_args() as $arg) :
  //     $result += $arg;
  //   endforeach;
  //   echo $result;
  // }
  // calculate(10, 20, 50, 30, 40, 50, 100);//300

    // function calculate(...$nums) {
    //   echo "Argument Index Number 3 Is " . $nums[3] . "<br>";//30
    //   print_r($nums);//[]
    //   echo  "<br>";
    //   $result = 0;
    //   foreach ($nums as $num) :
    //     $result += $num;
    //   endforeach;
    //   echo $result;
    // }

    // calculate(10, 20, 50, 30, 40, 50, 100);

  /**********lesson-48************** */
  /*
    Function
    - Function Advanced Training
    -- Unpacking In Arguments

    Search
    - PHP Variadic Functions
    - Splat Operator
  */

  // $group_of_skills = ["HTML", "CSS", "JS", "PHP"];

  // function get_data($name, $country = "Private", ...$skills) {
  //   echo "Hello $name Your Country Is $country <br>";
  //   foreach ($skills as $skill) :
  //     echo "-- $skill <br>";
  //   endforeach;
  // }
  //   // get_data("Osama", "Egypt", "html","css","js","php");
  // get_data("Osama", "Egypt", ...$group_of_skills);
  // get_data("Osama", "Egypt", ...["HTML", "CSS", "JS", "PHP"]);

//   function sum(...$numbers) {
//     $result = 0;
//     foreach ($numbers as $number) {
//         $result += $number;
//     }
//     return $result;
// }

// echo sum(1, 2, 3, 4); // Output: 10

  /**********lesson-49************** */
  /*
    Function
    - Variable Function
    --- PHP Allow To Use Variable Like Function
    --- When You Append Parentheses () To Variable PHP Will Look For Function With That Name
    - Function Exists
    --- function_exists("Func Name")
  */

  // function one() {
  //   return "One From Function";
  // }

  // // echo one();

  // $func1 = "one";

  // echo $func1();

  // echo '<br>';

  // function say_hello_to($someone) {
  //   return "Hello $someone";
  // }

  // $func2 = "say_hello_to";

  // echo $func2("Osama");

  // echo '<br>';

  // function testing() {
  //   return "Testing From Function";
  // }

  // if (function_exists("testing")) {
  //   echo testing();
  // } else {
  //   echo "Function Not Found";
  // }

  // echo '<br>';

  // // echo strlen("Elzero"); // 6

  // $func3 = "strlen";

  // echo $func3("Elzero12");//8

  /**********lesson-50************** */
  /*
    Function
    - Passing Arguments by Reference
    --- By Default, Function Arguments Are Passed By Value
    --- If The Value Of The Argument Inside The Function Changed It Will (Not Change Outside)
    --- To Change It (Outside Pass The Argument By Reference)

    - Return Type Declarations

    Search
    - PHP Strict Mode
  */

  // function add_five($number) {
  //   $number += 5;
  //   return $number;
  // }
  // echo add_five(15) . "<br>"; // 20
    // $n = 15;
    // echo add_five(15) . "<br>"; // 20

  // echo $n; //15
  // echo '<br>';

  //   $n = 15;
  // function add_five(&$number) {
  //   $number += 5;
  //   return $number;
  // }
  // echo add_five($n) .'<br>';//20
  // echo $n .'<br>'; //20
  

  // function calculate($n1, $n2): int  {
  //   return $n1 + $n2;
  // }

  // echo calculate(10.5, 9.5);

  // echo '<br>';
  // echo gettype(calculate(10.5, 9.5)); // Integer

  /**********lesson-51************** */
  /*
    Function
    - Anonymous Function
    --- When We Create A Function We Give It A Name So We Can Call It Later With That Name
    --- Sometimes We Need To Create A Function For Specific Task <= This Is Not Against DRY

    - Variable Inherit From Parent Scope
    - Variable Inherit By Reference From Parent Scope
    - Anonymous Function Can Be Passed To A Function
    - Anonymous Function Can Be Return From A Function

    Search
    - Closure
  */

  // Normal Function With Parameter
  // function say_hello_to($someone) {
  //   return "Hello $someone";
  // }
  // echo say_hello_to("MO");
  // echo '<br>#########<br>';

  // Anonymous Function In Variable
  // $say_hello = function() {
  //   return "Hello";
  // };
  // echo $say_hello();
  // echo '<br>#########<br>';

  // Anonymous Function With Parameter In Variable
  // $say_hola = function($someone) {
  //   return "Hola $someone";
  // };
  // echo $say_hola("Osama");
  // echo '<br>#########<br>';

  // Inherit Variable From Parent Scope
  // $msg = "Hi";
  // $say_hi = function($someone) use ($msg) {
  //   return "$msg $someone";
  // };
  // echo $say_hi("Osama");
  // echo '<br>#########<br>';

  // Pass Anonymous Function To Function => array_map
  // $nums = [10, 20, 30, 40, 50];
  // function add_five($item) {
  //   return $item + 5;
  // }
  // $nums_after_adding_five = array_map("add_five", $nums);

  // echo '<pre>';
  // print_r($nums_after_adding_five);
  // echo '</pre>';

  // $nums_after_adding_ten = array_map(function($item) { return $item + 10; }, $nums);

  // echo '<pre>';
  // print_r($nums_after_adding_ten);
  // echo '</pre>';

//   $greeting = "Hello";

// $greet = function($name) use ($greeting) {
//     echo "$greeting, $name!";
// };

// $greet("World"); // Output: Hello, World!

  /**********lesson-52************** */
  /*
    Function
    - Arrow Function
    --- Short Syntax For Anonymous Function
    --- Automatic Use Variables From Parent Scope

    - Syntax
    --- Function Replaces With fn
    --- No Need For Curly Braces
    --- Return Is Omitted
  */

  // // Arrow Function In Variable
  // $say_hello = fn() => "Hello";
  // echo $say_hello();
  // echo '<br>#########<br>';

  // // Arrow Function With Parameter In Variable
  // $say_hola = fn($someone) => "Hola $someone";
  // echo $say_hola("Osama");
  // echo '<br>#########<br>';

  // // Arrow Inherit Variable From Parent Scope Is Automatic
  // $msg = "Hi";
  // $say_hi = fn($someone) => "$msg $someone";
  // echo $say_hi("Osama");
  // echo '<br>#########<br>';

  // // Pass Arrow Function To Function => array_map
  // $nums = [10, 20, 30, 40, 50];
  // $nums_after_adding_ten = array_map(fn($item) => $item + 10, $nums);

  // echo '<pre>';
  // print_r($nums_after_adding_ten);
  // echo '</pre>';

  /**********lesson-53************** */
  /*
    String
    - Access Elements
    --- String Is Array Of Characters
    --- Access Elements By Index "Zero Based Indexing"
    --- Negative Index Are Allowed
    - Update Elements
    --- Update Current Elements
    --- Add New Elements

    Search
    - Single-Byte and Multi-Byte
  */

  // $str = "Elzero";

  // echo "First Letter Is $str[0]<br>";//E
  // echo "4th Letter Is $str[3]<br>";//e
  // echo "Number Of Letters " . strlen($str) . "<br>";//6
  // echo "Last Letter Is $str[-1] <br>";//o
  // echo "Last Letter Is {$str[strlen($str) - 1]}<br>";//o

  // echo $str . "<br>";
  // $str[0] = "A";
  // echo $str . "<br>";
  // $str[6] = "A";
  // echo $str . "<br>";//if not exist it add it

  /**********lesson-54************** */
  /*
    String Functions
    - lcfirst(String[Required])
    - ucfirst(String[Required])
    - strtolower(String[Required])
    - strtoupper(String[Required])
    - ucwords(String[Required], Delimiters[Optional])
    - str_repeat(String[Required], Count[Required])
  */

  // echo lcfirst("Elzero Web School") . "<br>";
  // echo ucfirst("elzero web school") . "<br>";
  // echo strtolower("ELZERO WEB SCHOOL") . "<br>";
  // echo strtoupper("elzero web school") . "<br>";
  // echo ucwords("elzero web school") . "<br>";
  // echo ucwords("elzero web|school", "|") . "<br>";
  // echo str_repeat("Elzero", 3);

  /**********lesson-55************** */
  /*
    String Functions
    - implode(Separator[Optional], Array[Required]) => join() Is Alias
    - explode(Separator[Required], String[Required], Limit[Optional])
    - str_shuffle(String[Required])
    - strrev(String[Required])
    - trim(String[Required], CharsList[Optional])
    - ltrim(String[Required], CharsList[Optional])
    - rtrim(String[Required], CharsList[Optional])
    --- Space ""
    --- Tab \t
    --- New Line \n
    --- Carriage Return \r
    --- Vertical Tab "\x0B"
    --- NULL "\0"
  */

  // $friends = ["Ahmed", "Osama", "Ali", "Salem"];
  // echo implode(" ", $friends) . "<br>";
  // echo implode(", ", $friends) . "<br>";
  // echo implode("@@", $friends) . "<br>";
  // echo implode($friends) . "<br>";

  // $str = "Elzero Web School Is Cool";

  // echo "<pre>";
  // print_r(explode(" ", $str));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode("I", $str));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode(" ", $str, 3));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(explode(" ", $str, -2));
  // echo "</pre>";

  // echo str_shuffle("Elzero") . "<br>";
  // echo strrev("Elzero") . "<br>";

  // echo strlen("   Elzero  ") . "<br>";//11
  // echo strlen(trim("   Elzero  ")) . "<br>";//6

  // echo trim("#@@Elzero@@@###", "@") . "<br>";

  // echo rtrim("#@@Elzero@@@###", "#@") . "<br>";
  // echo ltrim("#@@Elzero@@@###", "#@") . "<br>";

  /**********lesson-56************** */
  /*
    String Functions
    - chunk_split(String[Required], Length[Optional], End[Optional])
    - strlen(String[Required])
    - str_split(String[Required], Length[Optional])
    - strip_tags(String[Required], Allowed[Optional])
    - nl2br(String[Required], XHTML[Optional])
  */

  // echo chunk_split("Elzero Web School", 3, "@").'<br>';//Elz@ero@ We@b S@cho@ol@

  // echo chunk_split("Elzero Web School", 2, "@")."<br>";//El@ze@ro@ W@eb@ S@ch@oo@l@

  // echo '<pre>';
  // print_r(str_split("Elzero"));
  // echo '</pre>';
//   Array
// (
//     [0] => E
//     [1] => l
//     [2] => z
//     [3] => e
//     [4] => r
//     [5] => o
// )

  // echo '<pre>';
  // print_r(str_split("Elzero", 2));
  // echo '</pre>';

//   Array
// (
//     [0] => El
//     [1] => ze
//     [2] => ro
// )

  // echo "<h3>Hello <b>Elzero</b></h3>";
  // echo '<br>';

  // echo strip_tags("<h3>Hello <b>Elzero</b></h3>");
  // echo '<br>';

  // echo strip_tags("<h3>Hello <b>Elzero</b></h3>", "<h3><b>");
  // echo '<br>';

  // echo nl2br("Elzero\nWeb\nSchool", false);
//     Elzero<br>
// Web<br>
// School

// echo nl2br("Elzero\nWeb\nSchool");
//   Elzero<br />
// Web<br />
// School

  /**********lesson-57************** */
  /*
    String Functions
    - strpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - strrpos(String[Required], Value[Required], Start Position[Optional]) Case-Sensitive
    - stripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - strripos(String[Required], Value[Required], Start Position[Optional]) Case-Insensitive
    - substr_count(String[Required], Value[Required], Start Position[Optional], Length[Optional])
  */

  // var_dump(strpos("Hello Hello", "H")); // 0
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "H", 3)); // 6
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "H", 6)); // 6
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "h")); // False
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "H", -2)); // False
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "H", -5)); // 6
  // echo '<br>';
  // var_dump(strpos("Hello Hello", "H", -11)); // 0
  // echo '<br>';

  // var_dump(strrpos("Hello Hello", "H")); // 6
  // echo '<br>';
  //  var_dump(strrpos("Hello Hello Hello", "H")); //12
  // echo '<br>';

  // var_dump(strrpos("Hello Hello", "H", 5)); // 6
  // echo '<br>';

  // var_dump(stripos("Hello Hello", "h")); // 0
  // echo '<br>';

  // var_dump(strripos("Hello Hello", "h")); // 6
  // echo '<br>';

  // var_dump(substr_count("Hello Hello", "He")); // 2
  // echo '<br>';

  // var_dump(substr_count("Hello Hello", "He", 1)); // 1
  // echo '<br>';

  // var_dump(substr_count("Hello Hello", "He", 1, 6)); // 0
  // echo '<br>';

  //   var_dump(substr_count("Hello Hello", "He", 1, 7)); // 1
  // echo '<br>';

  // substr_count(string $haystack, string $needle, int $offset = 0, int $length = NULL) : int
  // var_dump(substr_count("abcdabcda", "abcda")); // 1

  //  var_dump(substr_count("ababa", "aba")); // 1
  // $string = "ababa";//5
  // $substring = "aba";//3
  // $count = 0;
  // for ($i = 0; $i < strlen($string) - strlen($substring) + 1; $i++) {
  //   if (substr($string, $i, strlen($substring)) === $substring) {
  //       $count++;
  //   }
  // } 
  // echo $count;  // Output: 2

  /**********lesson-58************** */
  /*
    String Functions
    - parse_str(String[Required], Array[Required])
    - quotemeta(String[Required])
    - str_pad(String[Required], Length[Required], String[Optional], Pad Flag[Optional])
    --- STR_PAD_BOTH
    --- STR_PAD_LEFT
    --- STR_PAD_RIGHT
    - strtr(String[Required], From[Required], To[Required]) || strtr(String[Required], Array[Required])
  */

  // parse_str("name=Osama&email=o@nn.sa&os=mac", $query);
  // echo '<pre>';
  // print_r($query);
  // echo '</pre>';
  // echo $query["name"] . "<br>";
  // echo $query["email"] . "<br>";
  // echo $query["os"] . "<br>";

  // echo "Hello [] () * + . <br>";
  // echo quotemeta("Hello [] () * + . <br>");//Hello \[\] \(\) \* \+ \.

  // echo str_pad("12", 8, 0, STR_PAD_BOTH) . "<br>";
  // echo str_pad("321", 8, 0, STR_PAD_BOTH) . "<br>";
  // echo str_pad("1313", 8, 0, STR_PAD_LEFT) . "<br>";
  // echo str_pad("15435", 8, 0, STR_PAD_LEFT) . "<br>";
  // echo str_pad("500432", 8, 0, STR_PAD_LEFT) . "<br>";

  // echo strtr("E@zero Web Schoo@", "@", "l");

  // echo "<br>";

  // $translation = ["@" => "l", "#" => "o"];

  // echo strtr("E@zer# Web Sch##@", $translation);

  /**********lesson-59************** */
  /*
    String Functions
    - str_replace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
    --- Its Case-Sensitive
    - str_ireplace(Find[Required], Replace With[Required], Data[Required], Replace Count[Optional])
  */

  // echo str_replace( "@", "o" , "Elzer@ Web Sch@@l" , $r ); //Elzero Web School
  // echo '<br>';

  // echo "Replaces Count Is $r ";//3
  // echo '<br>';

  // echo str_replace(["#", "@"], "A", "E#zer@ Web Sch@@#"); // EAzerA Web SchAAA
  // echo '<br>';
  // echo str_replace(["#", "@"], ["l", "o"], "E#zer@ Web Sch@@#"); // Elzero Web School

  // echo '<pre>';
  // print_r(str_replace("One", 1, ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(str_replace(["One", "Two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(str_replace(["One", "Two", "Three"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(str_ireplace(["one", "two"], [1, 2], ["One", "Two", "Three", "One", "One"]));
  // echo '</pre>';

  /**********lesson-60************** */
  /*
    String Functions
    - substr_replace(String[Required], Replace With Or Insert[Required], Start[Required], Length[$])
    --- $ Positive Number => Length Of String To Be Replaced
    --- $ Negative Number => Characters Left At The End After Replacement
    --- $ 0               => Insert Instead Of Replace
  */

  // echo substr_replace("OneTwo", 1, 0); // 1
  // echo '<br>';
  // echo substr_replace("OneTwo", 1, 3); // One1
  // echo '<br>';
  // echo substr_replace("OneTwo", 1, 5); // OneTw1
  // echo '<br>';
  // echo substr_replace("OneTwo", 1, -1); // OneTw1
  // echo '<br>';

  // echo substr_replace("OneTwo", 2, 2); // On2
  // echo '<br>';

  // echo substr_replace("OneTwo", 2, 2, 2); // On2wo
  // echo '<br>';

  // echo substr_replace("OneTwo", 2, 1, 4); // O2o
  // echo '<br>';

  // echo substr_replace("Elzero_Web_School", "A", 7, 3); // Elzero_A_School
  // echo '<br>';

  // echo substr_replace("Elzero_Web_School", "A", 7, -1); //Elzero_Al
  // echo '<br>';
  
  // echo substr_replace("Elzero_Web_School", "A", 7, -3); // Elzero_Aool
  // echo '<br>';

  // echo substr_replace("Elzero_Web_School", "A", 7, -9); // Elzero_Aeb_School
  // echo '<br>';
  //(7=w and -10=w) we insert
  // echo substr_replace("Elzero_Web_School", "A", 7, -10); // Elzero_AWeb_School
  // echo '<br>';

  // echo substr_replace("Elzero_Web_School", "@", 1, 0); // E@lzero_Web_School

  // echo "<pre>";
  // print_r(substr_replace(["OneTwo", "ThreeFour"], 1,0));
  // echo "</pre>";

  // echo "<pre>";
  // print_r(substr_replace(["OneTwo", "ThreeFour"], ["MO","Roody"],0));
  // echo "</pre>";

  /**********lesson-61************** */
  /*
    String Functions
    - wordwrap(String[Required], Width[Optional = 75], Break_Char[Optional = "\n"], Cut_Long[Optional = False])
    - ord(String[Required])
    - chr(Int[Required])
    - similar_text(String_One[Required], String_Two[Required], Percent[Optional])
    --- Returns The Number Of Matching Characters
  */

  // $str = "Welcome To To To T Elzeroo Web School Website Very_Very_Very_Long";
  // // echo strlen($str) . "<br>";//65
  //   echo wordwrap($str, 8, "<br>");
  // echo wordwrap($str, 8, "<br>", True);
  // echo "<br>";

  // echo ord("a"); // 97

  // echo "<br>";

  // echo chr(97); // a

  // echo "<br>";

  // echo similar_text("Elzero", "Elzero");//6 
  // echo "<br>";
  // echo similar_text("Elz@ero", "Elzero");//6 
  // echo "<br>";
  // echo similar_text("E_l_zero__", "El_zero_o");//8
  // echo "<br>";

  // echo similar_text("Elzero", "Elzeroo", $perc);
  // echo "<br>";
  // echo $perc;//92%
  /**********lesson-62************** */
  /*
    String Functions
    - strstr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- => Alias [strchr]
    --- Case-Sensitive
    - stristr(String[Required], Search[Required], Before_Search[Optional] = False)
    --- Case-Insensitive
    - number_format(Number[Required], Decimals[Optional], Decimal_String[Optional], Separator[Optional])
  */

  // echo strstr("Elzero Web", "W") . "<br>"; // Web
  // echo strstr("Elzero Web", "z") . "<br>"; // zero Web
  // echo strstr("Elzero Web", "W", True) . "<br>"; // Elzero
  // echo strlen(strstr("Elzero Web", "W", True)) . "<br>"; // 7

  // var_dump(strstr("Elzero Web", "w"));// False
  // echo '<br>';


  // echo stristr("Elzero Web", "w") . "<br>"; // Web
  // echo(stristr("Elzero Web", "w")); // Web
  // echo '<br>';

  // echo 10_000_000;//syntax sugar //10000000
  // echo '<br>';

  // echo number_format(10000000.156023);//10,000,000
  // echo '<br>';

  // echo number_format(10000000.156023, 3);//10,000,000.156
  // echo '<br>';

  // echo number_format(10000000.156023, 3, "_");//10,000,000_156
  // echo '<br>';

  // echo number_format(10000000.156023, 3, "__", "_");//10_000_000__156


  /**********lesson-63************** */
  /*
    Array Functions

    - array_chunk(Array[Required], Length[Required], Preserve_Key[Optional])
    --- Split An Array Into Chunks [Return A Multidimensional Indexed Array]
    --- Preserve_Key
    ------ [False => Default] Reindex The Keys
    ------ [True] Preserve The Keys

    - array_change_key_case(Array[Required], Case[Optional])
    --- Changes The Case Of All Keys In An Array
    --- Case
    ------ [CASE_LOWER => Default] Changes The Keys To Lowercase
    ------ [CASE_UPPER] Changes The Keys To Uppercase

    - array_combine(Array_Of_Keys[Required], Array_Of_Values[Required])

    - array_count_values(Array[Required])
    --- Counts All The Values Of An Array

  */
  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal"];

  // echo '<pre>';
  // print_r(array_chunk($friends, 2));
  // echo '</pre>';

  // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  // echo '<pre>';
  // print_r(array_chunk($countries, 2, True));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_change_key_case($countries, CASE_UPPER));
  // echo '</pre>';
  // echo '<pre>';
  // print_r(array_change_key_case($countries, CASE_LOWER));
  // echo '</pre>';

  // $keys = ["A", "O", "K"];
  // $values = ["Ahmed", "Osama", "Kamal"];

  // echo '<pre>';
  // print_r(array_combine($keys, $values));
  // echo '</pre>';

  // $counting = ["B", "A", "A", "B", "B", "B", "C"];

  // echo '<pre>';
  // print_r(array_count_values($counting));
  // echo '</pre>';

  /**********lesson-64************** */
  /*
    Array Functions

    - array_reverse(Array[Required], Preserve[Optional])
    --- Reverse Array Elements

    - array_flip(Array[Required])
    --- Exchange Keys With Its Values

    - count(Array[Required], Mode[Optional])
    --- Count Array Elements
    --- Mode
    ------ 0 => Default => Does Not Count Elements Of Multidimensional Arrays
    ------ 1 => Count Elements Of Multidimensional Arrays

    - in_array(Search[Required], Array[Required], Type[Optional])
    --- Checks If A Value Exists In An Array

    - array_key_exists(Key[Required], Array[Required])
    --- Check If Key Is Exists

  */

  // $family = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", ["Eman", "Noha"]];

  // echo '<pre>';
  // print_r($family);
  //   print_r(array_reverse($family));
  // print_r(array_reverse($family, True));
  // echo '</pre>';

  // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  // echo '<pre>';
  // print_r(array_flip($countries));
  // echo '</pre>';

  // $counting = [
  //   "A",
  //   "B",
  //   "C",
  //   [1, 2, 3]
  // ];
  // echo count($counting)."<br>";//4
  // echo count($counting, 0)."<br>";//4
  // echo count($counting, 1)."<br>";//3+3+1=7 array is an element


//   $search = ["1", 2, 3, 4];
// // if (in_array(1, $search)) {//insensitive
//   if (in_array(1, $search, True)) {//sensitive 
//     echo "The Element Is Found";
//   }
//   echo "The Element Not Found<br>";
//   echo '<br>';

  // $courses = [
  //   "Javascript" => 95,
  //   "PHP" => 100,
  //   "HTML" => 60,
  //   "CSS" => 65
  // ];

  // if (array_key_exists("PHP", $courses)) {
  //   echo "The Course Is Found And The Price Is: " . $courses["PHP"];
  // }

  /**********lesson-65************** */
  /*
    Array Functions

    - array_keys(Array[Required], Value[Optional], Type[Optional])
    --- Return The Array Keys
    --- Type
    ------ False => Default => No Checking For Type
    ------ True => Check For Type

    - array_values(Array[Required])
    --- Return All The Values Of An Array

    - array_pad(Array[Required], Size[Required], Value[Required])
    --- Pad Array To The Specified Length With A Value
    --- Negative Value Add Elements Before Original Items
    --- If Size < Array Length Nothing Will Be Deleted

    - array_product(Array[Required])
    --- Calculate The Product Of Values In An Array => Return Int || Float
    --- In Mathematics, A Product Is The Result Of Multiplication

    - array_sum(Array[Required])
    -- Calculate The Sum Of Values In An Array

  */

  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Osama", "Eman", 1, "1"];

  // echo '<pre>';
  // print_r(array_keys($friends));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_keys($friends, "Osama"));//0 5
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_keys($friends, 1, True));//7
  // echo '</pre>';

  // $countries = ["EG" => "Egypt", "KSA" => "Saudi Arabia", "Sy" => "Syria", "USA" => "United States"];

  // echo '<pre>';
  // print_r(array_values($countries));
  // echo '</pre>';

  $pad = ["A", "B", "C", "D"];

  // echo '<pre>';
  // print_r(array_pad($pad, 10, "@"));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_pad($pad, -10, "@"));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_pad($pad, 2, "@"));
  // echo '</pre>';

  // $product = [10, 5, 2, 10];
  // echo array_product($product) . "<br>";//1000

  // $sum = [10, 5, 2, 10];
  // echo array_sum($sum);//27

  /**********lesson-66************** */
  /*
    Array Functions

    --- Every Array Has An Internal Pointer To Its "Current" Element
    --- Which Is Initialized To The First Element.
    --- Functions Returns Value Of Array Element That's Currently Pointed By The Internal Pointer

    - current(Array[Required]) => Return The Current Element In An Array
    - next(Array[Required]) => Advance The Internal Pointer
    - prev(Array[Required]) => Rewind The Internal Pointer
    - reset(Array[Required]) => Put The Internal Pointer On First Element
    - end(Array[Required]) => Put The Internal Pointer On Last Element

  */

  // $friends = ["Osama", "Ahmed", "Sameh", "Mahmoud", "Gamal", "Eman"];
  // echo current($friends) . "<br>"; // "Osama"
  // echo next($friends) . "<br>"; // "Ahmed"
  // echo current($friends) . "<br>"; // "Ahmed"
  // echo next($friends) . "<br>"; // "Sameh"
  // echo current($friends) . "<br>"; // "Sameh"
  // echo prev($friends) . "<br>"; // "Ahmed"
  // echo current($friends) . "<br>";// "Ahmed"

  // echo reset($friends) . "<br>"; // "Osama"
  // echo current($friends) . "<br>"; // "Osama"
  // echo end($friends) . "<br>"; // "Eman"
  // echo current($friends) . "<br>"; // "Eman"

  /**********lesson-67************** */
  /*
    Array Functions

    - array_merge(Array[Required], Other_Array/s[Optional])
    --- Merge One Or More Arrays
    ------ Later Array Key With The Same Name Override The Value Of The Previous One
    ------ Numeric Key Will Be Renumbered

    - array_replace(Array[Required], Replacement/s[Optional])
    --- Replaces Elements From Passed Arrays Into The First Array
    ------ Same Key => Value In Second Array Replace Same Key => Value In First Array
    ------ If Key In Second Array Not Found In Fisrt Array It Will Be Created

    - array_rand(Array[Required], Num[Optional])
    --- Pick One Or More Random Keys Out Of An Array

    - shuffle(Array[Required])
    --- Shuffle An Array
  */


  // $merge_one = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  // $merge_two = ["One" => "HTML", "Four" => "Python"];

  // echo '<pre>';
  // print_r(array_merge($merge_one, $merge_two));
  // echo '</pre>';

  // $merge_three = [10 => "PHP", 20 => "CSS", 30 => "JavaScript"];
  // $merge_four = [40 => "Python", 10 => "Go"];

  // echo '<pre>';
  // print_r(array_merge($merge_three, $merge_four));
  // echo '</pre>';

  // $main = ["One" => "PHP", "Two" => "CSS", "Three" => "JavaScript"];
  // $replace = ["One" => "HTML", "Four" => "Python"];

  // echo '<pre>';
  // print_r(array_replace($main, $replace));
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_replace($merge_three, $merge_four));
  // echo '</pre>';

  $nums = ["A", "B", "C", "D"];
  // echo  array_rand($nums);//indxes
  // echo $nums[array_rand($nums)] . "<br>";

  // echo '<pre>';
  // print_r(array_rand($nums, 3));
  // echo '</pre>';

  // shuffle($nums);

  // echo '<pre>';
  // print_r($nums);
  // echo '</pre>';

  /**********lesson-68************** */
  /*
    Array Functions

    - array_shift(Array[Required])
    --- Shift An Element Off The Beginning Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_pop(Array[Required])
    --- Pop The Element Off Ehe End Of Array
    --- This Function Will Reset => "reset()" The Input Array Pointer

    - array_push(Array[Required], Values[Optional])
    --- Push One Or More Elements Onto The End Of Array
    --- You Can Use $arr[]

    - array_unshift(Array[Required], Values[Optional])
    --- Add One Element In The Beginning Of An Array
    --- This Function Will Reset => "reset()" The Input Array Pointer
  */


  // $chars = ["A", "B", "C", "D"];

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // $first = array_shift($chars);
  // echo "$first<br>"; // "A"

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // $last = array_pop($chars);

  // echo "$last<br>"; // "D"

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // array_push($chars, "X", "Y", "Z");

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // array_push($chars, "1");
  // $chars[] = "1";//effective way

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  // array_unshift($chars, "One", "Two", "Three");

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  /**********lesson-69************** */
  /*
    Array Functions

    - array_slice(Array[Required], Start[Required], Length[Optional], Preserve_Keys[Optional])
    --- Extract A Slice Of The Array
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Slicing Until This Index
    ------ Not Set => All Elements From Start Position
    --- Preserve Keys
    ------ False => Default => Reset Keys
    ------ True => Preserve Keys
    --- If Array Have String Keys, It Will Always Preserve The Keys

    - array_splice(Array[Required], Start[Required], Length[Optional], Array[Optional])
    --- Remove A Portion Of The Array And Replace It With Something Else
    --- Start
    ------ 0 From Start
    ------ -1 From Last Element
    --- Length
    ------ Negative => Stop Removing Until This Index
    ------ Not Set => Remove All Elements From Start Position

  */


  // $chars = ["A", "B", "C", "D", "E", "F", "G"];
  // $chars_with_string_keys = ["A" => 1, "B" => 2, "C" => 3];
  // $chars_with_numeric_keys = [10 => 1, 20 => 2, 30 => 3];

  // echo '<pre>';
  // print_r(array_slice($chars, 2));//"C", "D", "E", "F", "G"
  // print_r(array_slice($chars, -4));//"D", "E", "F", "G"
  // print_r(array_slice($chars, 2, 3));//"C", "D", "E"
  // print_r(array_slice($chars, 2, -2));//"C", "D", "E"
  // echo '</pre>';


  // echo '<pre>';
  // print_r(array_slice($chars_with_string_keys, 0, 2));//  [A] => 1 [B] => 2
  // print_r(array_slice($chars_with_numeric_keys, 0, 2));//[0] => 1 [1] => 2
  // print_r(array_slice($chars_with_numeric_keys, 0, 2, True));
  // echo '</pre>';

  // echo '<pre>';
  // print_r($chars);
  // echo '</pre>';

  $nums = [10, 20, 30, 40, 50, 60, 70];

  // echo '<pre>';
  // print_r(array_splice($nums, 2, 1, "One"));
  // print_r($nums);//10, 20, One , 40, 50, 60, 70
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_splice($nums, 2, 1, ["One", "Two"]));
  // print_r($nums);//10, 20, One,Two , 40, 50, 60, 70
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_splice($nums, -2, 1, ["One", "Two"]));
  // print_r($nums);//10, 20, 40, 50, One,Two, 70
  // echo '</pre>';
  //   echo '<pre>';
  // print_r(array_splice($nums, -2, 2, ["One", "Two"]));
  // print_r($nums);//10, 20, 40, 50, One,Two
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_splice($nums, 0, 0, ["One", "Two"]));
  // print_r($nums);//One,Two ,10, 20, 30, 40, 50, 60, 70
  // echo '</pre>';

  // echo '<pre>';
  // print_r(array_splice($nums, -1, 0, ["One", "Two"]));
  // print_r($nums);// 10, 20, 30, 40, 50, 60,One,Two, 70
  // echo '</pre>';
  //   echo '<pre>';
  // print_r(array_splice($nums, 7, 0, ["One", "Two"]));
  // print_r($nums);// 10, 20, 30, 40, 50, 60,One,Two, 70
  // echo '</pre>';

  /**********lesson-70************** */
  /*
    Array Functions

    - sort(Array[Required], Flag[Optional])
    --- Sort An Indexed Array In Ascending Order

    - rsort(Array[Required], Flag[Optional])
    - Sort An Indexing Array In Descending Order

    - asort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Value

    - arsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Value

    - ksort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Ascending Order According To The Key

    - krsort(Array[Required], Flag[Optional])
    --- Sort An Associative Array In Descending Order According To The Key

    - natsort(Array[Required], Flag[Optional])
    --- Sorts An Array By Using A "Natural Order" Algorithm

    Practice
    -- Flags
    -- Our Own Sorting Function

  */

  // $names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];

  // sort($names);
  // echo '<pre>';
  // print_r($names);
  // echo '</pre>';

  // rsort($names);
  // echo '<pre>';
  // print_r($names);
  // echo '</pre>';

  // $countries = ["S" => "Syria", "Z" => "Egypt", "I" => "Iraq", "Q" => "Qatar"];

  // asort($countries);
  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // arsort($countries);

  // echo '<pre>';
  // print_r($countries);
  // echo '</pre>';

  // $codes = ["1" => "Syria", "3" => "Egypt", "2" => "Iraq", "5" => "Qatar"];

  // ksort($codes);

  // echo '<pre>';
  // print_r($codes);
  // echo '</pre>';

  // krsort($codes);
  // echo '<pre>';
  // print_r($codes);
  // echo '</pre>';

  // $files = ["Photo1.png", "Photo20.png", "Photo3.png"];

  // sort($files);
  // echo '<pre>';
  // print_r($files);
  // echo '</pre>';

  // natsort($files);
  // echo '<pre>';
  // print_r($files);
  // echo '</pre>';

  /**********lesson-71************** */
  /*
    Array Functions

    - array_map(Callback Function[Required], Array[Required], Other Arrays[Optional])
    --- Applies The Callback To The Elements Of The Given Arrays

    - array_filter(Array[Required], Callback Function[Required], Flag[Optional])
    --- Filter Values Of An Array Using A Callback Function
    --- Flag
    ------ ARRAY_FILTER_USE_KEY
    ------ ARRAY_FILTER_USE_BOTH
    ------ 0 Default => Send Value As Arguments

  */

  // function add_title($fname, $lname) {
  //   return "Hello Mr $fname $lname";
  // }

  // // echo add_title("Osama");

  // $first_names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Sameh", "Gamal"];
  // $last_names = ["Ameer", "Samy", "Shady", "Amr", "Mohamed", "Ibrahim"];

  // echo '<pre>';
  // print_r(array_map("add_title", $first_names, $last_names));
  // print_r(array_map(fn($f, $l) => "Hello Mr $f $l", $first_names, $last_names));
  // echo '</pre>';

  // $nums = [
  //   1 => 3,
  //   6 => 1,
  //   3 => 2,
  //   4 => 8,
  //   5 => 4
  // ];

  // function check_nums($n1) {
  //   return $n1 > 4 ;// [4] => 8 (0 Default => Send Value As Arguments)
  // }

  // echo '<pre>';
  // print_r(array_filter($nums, "check_nums"));
  // echo '</pre>';
  
  //  function check_nums($n1) {
  //   return $n1 > 4 ;
  // }

  // echo '<pre>';
  // print_r(array_filter($nums, "check_nums",ARRAY_FILTER_USE_KEY));// [6] => 1 [5] => 4
  // echo '</pre>';

  //  function check_nums($n1, $n2) {
  //   return $n1 > 4 || $n2 > 4;
  // }

  // echo '<pre>';
  // print_r(array_filter($nums, "check_nums", ARRAY_FILTER_USE_BOTH));//  [6] => 1 [4] => 8  [5] => 4
  // echo '</pre>';

  /**********lesson-72************** */
  /*
    Array Functions

    - array_reduce(Array[Required], Callback Function[Required], Initial_Value[Optional])
    --- Reduce The Array To A Single Value
    --- Carry => The Value Of The Previous Iteration || Initial Value
    --- Item => The Value Of The Current Iteration

  */

  // function add($carry, $item) {
  //   echo "carry $carry<br>";
  //   echo "item $item<br>";
  //   echo "sum" .$carry + $item . "<br>";
  //   echo "###########<br>";
  //   return $carry + $item;
  // }

//   $nums = [10, 20, 50, 100, 10];
//   echo array_reduce($nums, "add", 100);
// carry 100
// item 10
// sum110
// ###########
// carry 110
// item 20
// sum130
// ###########
// carry 130
// item 50
// sum180
// ###########
// carry 180
// item 100
// sum280
// ###########
// carry 280
// item 10
// sum290
// ###########
// 290

  // echo array_reduce($nums, "add");//190
// 10, 20, 50, 100, 10
// carry =0
// item 10
// sum10
// ###########
// carry 10
// item 20
// sum30
// ###########
// carry 30
// item 50
// sum80
// ###########
// carry 80
// item 100
// sum180
// ###########
// carry 180
// item 10
// sum190
// ###########
// 190

  /**********lesson-73************** */
  /*
    Math Functions

    - abs(Number[Required])
    --- Absolute Value => Non Negative Value

    - mt_rand(min[Optional], max[Optional]) || rand(min[Optional], max[Optional])
    --- mt_getrandmax() => Show Largest Possible Random Value
    --- Generate Random Value Via The Mersenne Twister Random Number Generator Algorithm

    - intdiv(dividend[Required], divisor[Required])
    --- Integer Division
    --- intdiv vs /

    - fmod(dividend[Required], divisor[Required])
    --- Floating Point Remainder (Modulo)
    --- fmod vs %
  */

  // echo abs(10) . "<br>";//10
  // echo abs(0) . "<br>";//0
  // echo abs(-20) . "<br>";//20

  // echo rand() . "<br>";//1792046278
  // echo mt_getrandmax() . "<br>";//2147483647
  // echo rand(50, 60) . "<br>";//60

  // echo 10 / 5 . "<br>";//2
  // echo gettype(10 / 5) . "<br>";//integer

  // echo 11 / 5 . "<br>";//2.2
  // echo gettype(11 / 5) . "<br>";//double

  // echo intdiv(11, 5) . "<br>";//2
  // echo gettype(intdiv(11, 5)) . "<br>";//integer

  // echo 11.5 % 5 . "<br>";//1
  // echo gettype(11 % 5) . "<br>";//integer

  // echo fmod(11.5, 5) . "<br>";//1.5
  // echo gettype(fmod(11.5, 5)) . "<br>";//double

  /**********lesson-74************** */

  /*
    Math Functions

    - ceil(Number[Required])
    --- Round Up To Integer

    - floor(Number[Required])
    --- Round Down To Integer
  */

  // -1 -2 -3 -4 -5 -6
  // 1  2  3  4  5  6

  // echo ceil(5.99) . "<br>";//6
  // echo ceil(5.49) . "<br>";//6
  // echo ceil(5.10) . "<br>";//6
  // echo ceil(5.01) . "<br>";//6
  // echo ceil(-5.99) . "<br>"; // -5

  // echo floor(5.99) . "<br>";//5
  // echo floor(5.49) . "<br>";//5
  // echo floor(5.10) . "<br>";//5
  // echo floor(5.01) . "<br>";//5
  // echo floor(-5.99) . "<br>"; // -6

  /**********lesson-75************** */
  /*
    Math Functions

    - round(Number[Required], Precision[Optional], Mode[Optional])
    --- Round Up To Integer
    --- Mode
    ------ PHP_ROUND_HALF_UP
    ------ PHP_ROUND_HALF_DOWN
    ------ PHP_ROUND_HALF_EVEN
    ------ PHP_ROUND_HALF_ODD

    - ceil, floor, round => Return Double
  */

  // echo round(5.99) . "<br>";//6
  // echo round(5.50) . "<br>";//6
  // echo round(5.49) . "<br>";//5
  // echo round(5.10) . "<br>";//5

  // echo round(5.99, 1) . "<br>"; // 6
  // echo round(5.94, 1) . "<br>"; // 5.9
  // echo round(5.995, 2) . "<br>"; // 6
  // echo round(5.994, 1) . "<br>"; // 6
  // echo round(5.994, 2) . "<br>"; // 5.99

  // echo round(5.99, 0, PHP_ROUND_HALF_UP) . "<br>";//6
  // echo round(5.49, 0, PHP_ROUND_HALF_UP) . "<br>";//5

  // echo round(5.50, 0, PHP_ROUND_HALF_DOWN) . "<br>";//5

  // echo round(5.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//6
  // echo round(4.50, 0, PHP_ROUND_HALF_EVEN) . "<br>";//4

  // echo round(5.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5
  // echo round(4.50, 0, PHP_ROUND_HALF_ODD) . "<br>";//5

  /**********lesson-76************** */
  /*
    Math Functions

    - sqrt(Number[Required])
    --- Square Root

    - min(array[Required]) || min(Values[Required])
    --- Find Lowest Value

    - max(array[Required]) || min(Values[Required])
    --- Find Highest Value
  */

  // echo sqrt(16) . "<br>"; // 4
  // echo sqrt(25) . "<br>"; // 5
  // echo sqrt(100) . "<br>"; // 10

  // echo min(10, 20, -40, -30, 50) . "<br>"; // -40
  // echo min([10, 20, -40, -30, 50]) . "<br>"; // -40

  // echo "<pre>";
  // print_r(min([1, 3, 5], [1, 2, 6]));
  // echo "</pre>";

  // echo max(10, 20, -40, -30, 50) . "<br>"; // 50
  // echo max([10, 20, -40, -30, 50]) . "<br>"; // 50

  // echo "<pre>";
  // print_r(max([1, 3, 5], [1, 2, 6]));
  // echo "</pre>";

  /**********lesson-77************** */
  /*
    Filter Functions

    - filter_list()
    --- Returns A List Of All Supported Filters

    - filter_id(Filter_Name[Required])

    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Filters A Variable With A Specified Filter
  */

  // echo "<pre>";
  // print_r(filter_list());
  // echo "</pre>";

/* Array
(int - boolean - float - validate_regexp - validate_domain - validate_url - validate_email
- validate_ip -validate_mac - string - stripped - encoded - special_chars - full_special_chars
- unsafe_raw - email  url - number_int - number_float - add_slashes - callback )*/

  // echo filter_id("int") . "<br>";//257
  // echo filter_id("boolean") . "<br>"; // 258
  // echo filter_id("float") . "<br>";//259
  // echo filter_id("validate_domain") . "<br>";//277

  // $val = "on"; // True || 1 || "yes" || "on"
  // // if (filter_var($val, FILTER_VALIDATE_BOOL)) { // Or ID "258"
  // // if (filter_var($val, 258)) { 
  // if (filter_var($val,filter_id("boolean"))) { 
  //   echo "This Is True";
  // }
  // else {
  //   echo "This Is False";
  // }

  /**********lesson-78************** */
  /*
    Filter Functions?
    - filter_var(Value[Required], Filter[Optional], Options[Optional])
    --- Validate Filters

    ------ FILTER_VALIDATE_BOOL => [True, 1, Yes, On]
    ---------- Flag => FILTER_NULL_ON_FAILURE => False For [False, 0, No, Off, ""] Only

    ------ FILTER_VALIDATE_URL
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_PATH_REQUIRED
    ---------- Flag => FILTER_FLAG_QUERY_REQUIRED

    ------ FILTER_VALIDATE_IP
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Flag => FILTER_FLAG_IPV4
    ---------- Flag => FILTER_FLAG_IPV6

    ------ FILTER_VALIDATE_MAC
    ---------- Flag => FILTER_NULL_ON_FAILURE
  */
  // $bool = "Elzero"; // True | 1 | "yes" | "on"
  // var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));//Null
  // echo "<br>";
  // $bool = "True"; // True | 1 | "yes" | "on"
  // var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));//bool(true)
  // echo "<br>";
  // $bool = False; // True | 1 | "yes" | "on"
  // var_dump(filter_var($bool, FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE));//bool(false)
  // echo "<br>";

  // $url = "https://elzero.org";
  // var_dump(filter_var($url, FILTER_VALIDATE_URL));//string(18) "https://elzero.org"
  // echo "<br>";

  // $url = "https://elzero.org/";
  // var_dump(filter_var($url, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED ]));//string(19) "https://elzero.org/"
  // echo "<br>";

  // $url = "https://elzero.org/?id=100";
  // var_dump(filter_var($url, FILTER_VALIDATE_URL,["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_PATH_REQUIRED | FILTER_FLAG_QUERY_REQUIRED]));//string(26) "https://elzero.org/?id=100"
  // echo "<br>";

  // $ip = "192.168.2.1";
  // var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));//NULL
  // echo "<br>";

  // $ip = "192.168.2.1";
  // var_dump(filter_var($ip, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV4]));//string(11) "192.168.2.1"
  // echo "<br>";

  
  // $ipV6 = "2001:db8:3333:4444:5555:6666:7777:8888";
  // var_dump(filter_var($ipV6, FILTER_VALIDATE_IP, ["flags" => FILTER_NULL_ON_FAILURE | FILTER_FLAG_IPV6]));//string(38) "2001:db8:3333:4444:5555:6666:7777:8888"
  // echo "<br>";

  // $mac = "00:00:5e:00d:53:af";
  // var_dump(filter_var($mac, FILTER_VALIDATE_MAC, FILTER_NULL_ON_FAILURE));//bool(false)

  /**********lesson-79************** */
  /*
  ----- FILTER_VALIDATE_EMAIL
    ---------- Flag => FILTER_NULL_ON_FAILURE

    ------ FILTER_VALIDATE_INT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Int On Success

    ------ FILTER_VALIDATE_FLOAT
    ---------- Flag => FILTER_NULL_ON_FAILURE
    ---------- Options => min_range
    ---------- Options => max_range
    ---------- Convert To Float On Success
  */

  // $email = "o@nn.sa";
  // var_dump(filter_var($email, FILTER_VALIDATE_EMAIL, FILTER_NULL_ON_FAILURE));
  // echo "<br>";//string(7) "o@nn.sa"

  // $int = "90";
  // var_dump(filter_var(
  //   $int,
  //   FILTER_VALIDATE_INT,
  //   ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  // ));//int(90)
  // echo "<br>";

  // $float = "90.50";
  // var_dump(filter_var(
  //   $float,
  //   FILTER_VALIDATE_FLOAT,
  //   ["flags" => FILTER_NULL_ON_FAILURE, "options" => ["min_range" => 50, "max_range" => 100]]
  // ));//float(90.5)

  /**********lesson-80************** */
  /*
    --- Sanitize Filters
    ------ FILTER_SANITIZE_EMAIL
    ------ Remove All But Letters + Digits + !#$%&#038;'*+-=?^_`{|}~@.[]
    ------ Test ¥

    ------ FILTER_SANITIZE_NUMBER_INT
    --------- Remove All But Digits, +, -

    ------ FILTER_SANITIZE_NUMBER_FLOAT
    --------- Remove ALL But Digits, +, - And Optionally [.,eE]
    --------- Flags => FILTER_FLAG_ALLOW_THOUSAND
    --------- Flags => FILTER_FLAG_ALLOW_FRACTION

    ------ FILTER_SANITIZE_URL
    ------ Remove All But Letters + Digits + $-_.+!*'(),{}|\\^~[]`<>#%";/?:@&=.
    ------ Test ¥ + Space
  */
  // $email = "o@n  ¥   n.sa";
  // var_dump(filter_var($email, FILTER_SANITIZE_EMAIL));//string(7) "o@nn.sa"
  // echo "<br>";

  // $int = "100 + !@@@LHKLJKJFKLJKLJFKL  f;ldkf;lsdkfl;ksdf;lkdsf===-100";
  // var_dump(filter_var($int, FILTER_SANITIZE_NUMBER_INT));
  // echo "<br>";//string(8) "100+-100"

  // $float = "1,950,150.65AAASSS    sdfdsfsdfsdf@@@@41";
  // var_dump(filter_var(
  //   $float,
  //   FILTER_SANITIZE_NUMBER_FLOAT,
  //   ["flags" => FILTER_FLAG_ALLOW_THOUSAND | FILTER_FLAG_ALLOW_FRACTION]
  // ));//string(14) "1,950,150.6541"
  // echo "<br>";

  // $url = "https://el         zer¥¥¥¥¥o.org";
  // var_dump(filter_var($url, FILTER_SANITIZE_URL));
  // echo "<br>";//string(18) "https://elzero.org"

  /**********lesson-81************** */
  /*
    Filter Functions
    - filter_input(Type[Required], Value[Required], Filter[Optional], Options[Optional])
    --- INPUT_GET
    --- INPUT_POST
    --- INPUT_COOKIE
    --- INPUT_SERVER
    --- INPUT_ENV

    -- FILTER_VALIDATE_INT
    -- FILTER_NULL_ON_FAILURE
  */

  // echo $_GET["num"];

  // filter_input(
  //   INPUT_GET, "num",
  //   FILTER_SANITIZE_NUMBER_INT,
  //   ["options" => ["min_range" => 50, "max_range" => 100]]
  // );
?>

<!-- <form action="" method="GET">
  <input type="text" name="num">
  <input type="submit" value="Send">
</form> -->
  <!-- /************************ */ -->
  <?php
/**********lesson-82************** */ 
  /*
    File System Functions
    - disk_total_space()
    --- Get Total Space In Bytes => Then We Can Get [KB, MB, GB]
    - disk_free_space() || diskfreespace()
    --- Get Free Space In Bytes => Then We Can Get [KB, MB, GB]
    - file_exists(Path)
    --- Checks If A File Or Directory Exists
    - filesize(File_Name)
    --- Get Space In Bytes
  */

  // echo round(disk_total_space("C:") / 1024 / 1024 / 1024) . "<br>";//238
  // echo round(disk_free_space("C:") / 1024 / 1024 / 1024) . "<br>";//38
  // var_dump(file_exists("mo.txt"));//bool(true)
  // echo '<br>';
  // echo filesize("mo.txt");//23B

  /**********lesson-83************** */
  /*
    File System Functions
    - is_dir(Name)
    --- Tells If The Filename Is A Directory
    - mkdir(Path[Required], Mode[Optional] = 0777, Recursive[Optional], Context[Optional])
    --- Permissions Is Ignored On Windows
    --- Permissions Is Octal Number Start With 0
    ------ Second Number Is => Owner Permission
    ------ Third Number Is => User Group Permission
    ------ Fourth Number Is => Others Permissions
    - rmdir(Name[Required], Context[Optional])
  */

  // var_dump(is_dir("Lessons"));//bool(false)
  // echo "<br>";
  // var_dump(is_dir("MO"));//bool(true)
  // echo '<br>';

  // var_dump(is_dir("mo.txt"));//bool(false)
  // echo '<br>';

  // mkdir("Test/Upload/Files", 0777, true);
  // echo '<br>';
  //// rmdir("Test");//warn must empty it first
    // rmdir("Test/Upload/Files");
    // rmdir("Test/Upload");
    // rmdir("Test");
  // var_dump(file_exists("Test/Upload/Files"));//bool(false)

  /**********lesson-84************** */
  /*
    File System Functions
    - chmod(File[Required], Mode[Required])
    --- Change Mode
    - fileperms(Name)
    --- Gets File Permissions
    - clearstatcache()
    --- Clear Cache

    - You Can Change Owner chown()
    - You Can Change Group chgrp()
  */

  // mkdir("Y", 0700);
  // echo fileperms("Y") . "<br>";//16895 by octal
  // chmod("Y", 0644);
  // clearstatcache();
  // echo fileperms("Y") . "<br>";

  /**********lesson-85************** */
  /*
    File System Functions
    - basename(Path[Required], Suffix[Optional])
    --- Returns Trailing Name Component Of Path
    - dirname(Path[Required], Levels[Optional] = 1)
    --- Returns A Parent Directory's Path
    --- Levels => Number of Parent Directories To Go Up
    - realpath(Path[Required])
    --- Returns Absolute Path
    - pathinfo(Path[Required], Flags[Optional]) => Return Array
    --- PATHINFO_DIRNAME
    --- PATHINFO_BASENAME
    --- PATHINFO_EXTENSION
    --- PATHINFO_FILENAME
  */

  // echo basename(__FILE__) . "<br>";//index.php
  // echo basename(__FILE__, ".php") . "<br>";//index

  // echo dirname(__FILE__, 4) . "<br>";//D:\XAMPP\htdocs\work

  // echo realpath(__FILE__) . "<br>";//D:\XAMPP\htdocs\work\php_Learning\ELZERO_PHP_OOP_COURSE\basics\index.php

  // echo "<pre>";
  // print_r(pathinfo(__FILE__));
  // echo "</pre>";

  // echo pathinfo(__FILE__)["extension"] . "<br>";
  // echo pathinfo(__FILE__)["dirname"] . "<br>";

  // echo pathinfo(__FILE__, PATHINFO_DIRNAME). "<br>";

  /**********lesson-86************** */
  /*
    File System Functions
    - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

    --- Mode
    --- [r] For Read => Pointer At The Beginning
    --- [r+] For Read & Write => Pointer At The Beginning
    --- [w] For Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists
    --- [w+] For Read & Write => Pointer At The Beginning + Truncate To 0 Length => Create If Not Exists

    - fgets(File[Required], Length[Optional])
    --- Get A Line From An Open File
    --- Length => Number Of Bytes To Read || End Of Line If No Length
    - fread(File[Required], Length[Required])
    --- Get A Data From An Open File
    --- Length => Maximum Number Of Bytes To Read
    - fclose(File[Required])
    --- Closes An Open File Pointer
  */

  // // $handle = fopen("elzero.txt", "w");
  // $handle = fopen("elzero.txt", "r");
  // // echo fgets($handle, 4)."<br>";//MOh

  // echo fread($handle, 1024);//MOhamed ElSayed Eid!!!
  // fclose($handle);

  /**********lesson-87************** */

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- Mode

  --- [a] For Write => Pointer At The End + Create If Not Exists
  --- [a+] For Read & Write => Pointer At The End + Create If Not Exists
  --- [x] Create + Open For Write => Pointer At The Beginning
  --- [x+] Create + Open For Read & Write => Pointer At The Beginning

  - fwrite(File[Required], String[Required], Length[Optional])
  --- Write To An Open File
  --- Length => Maximum Number Of Bytes To Write
*/

// $handle = fopen("elzero.txt", "a");

// fwrite($handle, "\r\nThis Is A New Line 1", 5);
// fwrite($handle, "\r\nThis Is A New Line 2");

// fclose($handle);

  /**********lesson-88************** */
/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  --- [c]
  ------ For Write
  ------ Create If Not Exists
  ------ No Problem If Its Exists
  ------ No Truncation
  ------ Pointer At The Beginning
  --- [c+] For Read &#038; Write

  - file(File[Required], Flag[Optional], Context[Optional])
  --- Read Entire File Into Array
  - feof(File[Required])
  --- Tests For EOF On A File Pointer
*/

// echo '<pre>';
// print_r(file("elzero.txt"));
// echo '</pre>';

// echo count(file("elzero.txt"));//7

// $handle = fopen("elzero.txt", "r");
// $line = 1;
// while (! feof($handle)) {
//   echo "Line $line => " . fgets($handle) . "<br>";
//   $line++;
// }
//another way to loop on file
// $handle = fopen("elzero.txt", "r");
// $line = 1;
// for ($i = 0; $i < count(file("elzero.txt")); $i++) {
//   echo "Line $line => " . fgets($handle) . "<br>";
//   $line ++;
// }
// fclose($handle);

  /**********lesson-89************** */

/*
  File System Functions
  - Fopen(FileName[Required], Mode[Required], IncludePath[Optional], Context[Optional])

  - rewind(File[Required])
  --- Return The Pointer To The Beginning Of The File

  - ftell(File[Required])
  --- Return Current Position Of The Pointer

  - fseek(File[Required], Offset[Required], Whence[Optional] = SEEK_SET)
  --- Go To A Position
  --- Offset In Bytes
  --- SEEK_SET => Equal To Offset
  --- SEEK_CUR => Current + Offset
  --- SEEK_END => EOF + Offset [Accept Negative]
*/

// $handle = fopen("elzero.txt", "r");
// echo ftell($handle) . "<br>"; // 0
// echo fgets($handle) . "<br>";//MOhamed
// echo ftell($handle) . "<br>"; //9
// echo mb_strlen("MOhamed\r\n", "8bit")."<br>";//9
// echo fgets($handle) . "<br>";//ElSayed
// echo ftell($handle) . "<br>"; //18
// echo mb_strlen("MOhamed\r\nElSayed\r\n", "8bit")."<br>";//18
// rewind($handle);
// echo ftell($handle) . "<br>";//0

// $handle = fopen("elzero.txt", "r");
// echo fgets($handle) . "<br>";//MOhamed
// // echo ftell($handle) . "<br>"; //9
// fseek($handle, 10);
// echo fgets($handle) . "<br>"; //lSayed

// fseek($handle, 0);
// echo fgets($handle) . "<br>";//MOhamed == rewind

// fseek($handle, -6, SEEK_END);
// fseek($handle, 41);
// echo mb_strlen("MOhamed\r\nElSayed\r\nEid!!!\r\nThi\r\nThis Is A N", "8bit")."<br>";//42
// echo fgets($handle) . "<br>"; //New Line 2
// fclose($handle);
// echo mb_strlen("School", "8bit");

  /**********lesson-90************** */
/*
  File System Functions
  - glob(Pattern[Required], Flags[Optional])
  --- Find Pathnames Matching A Pattern And Return Array

  - rename(Old[Required], New[Required]) => Move
  --- Renames A File Or Directory

  - copy(Old[Required], New[Required], Context[Optional])
  --- Copy A File

  - unlink(File[Required], Context[Optional])
  --- Delete A File

  Same Concept
  - opendir()
  - readdir()
  - closedir()
*/

// echo "<pre>";
// print_r(glob("*.*"));//all files
// print_r(glob("MO/*.*"));
// print_r(glob("MO/*.php"));//[0] => MO/x.php
// echo "</pre>";

// Rename => Same Place
// rename("MO/x.txt", "MO/x1.txt");

// Rename => Other Place => "Cut" || "Move"
// rename("MO/x1.css", "New/x1.css");

// Move To Other Place
// rename("MO/Elzero.pptx", "New/Elzero.pptx");

// Copy Without Rename
// copy("MO/Info.docx", "New/info.docx");

// Copy With Rename
// copy("MO/Work.txt", "New/working.txt");

// unlink("MO/Work.txt");

  /**********lesson-91************** */
/*
  File System Functions

  - file_get_contents(File[Required], Include_Path[Optional], Context[Optional], Start[Optional], MaxLength(Optional))
  --- Reads Entire File Into A String

  - file_put_contents(File[Required], Data[Required], Mode[Optional], Context[Optional])
  --- Write Data To File
  --- Mode
  ------ FILE_APPEND => If File Exists Append To It

  - Create If Not Exists
  - Open And Close
  - Return Number Of Bytes

  Search
  - Get Set Include Path

*/

// echo get_include_path() . "<br>";
// echo file_get_contents("elzero.txt");//MOhamed ElSayed Eid!!! Thi This Is A New Line 2
// echo "<br>";
// echo file_get_contents("elzero.txt", true);//Hello ya MOOO !!!
// echo "<br>";
// echo file_get_contents("elzero.txt", true,Null,4,5);//o y

// echo file_get_contents("https://elzero.net");

// print_r(file("https://elzero.net"));

// echo file_put_contents("elzero.txt", "\r\nThis Is New Line", FILE_APPEND);


  /**********lesson-92***************/
  /*
    Date And Time Functions
    - date_default_timezone_get()

    - date_default_timezone_set(timezone[Required])

    - date_create(Date/Time[Optional], Timezone[Optional])
    --- Time: Date/Time String || Current Time If NULL
    --- Timezone: Timezone String || Current Timezone

    - timezone_open(Timezone)

    - checkdate(M, D, Y) => All Required
    --- Validate A Gregorian Date

    Will Cover Later
    - date()
    - date_format()

  */

  // // Get Timezone
  // echo date_default_timezone_get() . "<br>";//Europe/Berlin

  // // Print Date And Time
  // echo date("Y-m-d H:i:s") . "<br>";//2024-03-16 15:57:57 but it is 4:57

  // // Change Timezone
  // date_default_timezone_set("Africa/Cairo");

  // // Print Date And Time Again
  // echo date("Y-m-d H:i:s") . "<br>"; //2024-03-16 16:57:57

  // // Get Timezone Again
  // echo date_default_timezone_get() . "<br>";//Africa/Cairo

  // // Create Date Object
  // $d = date_create("", timezone_open("Indian/Antananarivo"));
  // //// echo $d;//error
  // // Echo Date With Format
  // echo date_format($d, "Y-m-d H:i:s")."<br>";
  // echo date_format(date_create("", timezone_open("Indian/Antananarivo")),"Y-m-d H:i:s");
  // // 2024-03-16 18:11:40
  // // // Check Date

  // echo "<br>";
  // var_dump(checkdate(10, 25, 1982));//bool(true)
  // echo "<br>";
  // var_dump(checkdate(5, 21, 2000));//bool(true)
  // echo "<br>";
  // var_dump(checkdate(31, 02, 1982));//bool(false)
  // echo "<br>";
  // var_dump(checkdate(31, 02, 3500));//bool(false)
  // echo "<br>";
  // var_dump(checkdate(-2, 02, 1982));//bool(false)

  /**********lesson-93************** */
  /*
    Date And Time Functions
    - date_format()
    [Year]
    - Y => Four Digits
    - y => Two Digits

    [Month]
    - m => 01-12
    - M => Text Month => 3 Letters
    - F => Full Text
    - t => Number Of Days In This Month

    [Day]
    - d => Day of The Month 1-31
    - j => Day Without Leading Zero
    - D => Text Day => 3 Letters
    - l => Full Text
    - z => Day Of The Year 0-365
    - S => st, rd, nth Suffix For Day Of The Month
  */

  // date_default_timezone_set("Africa/Cairo");

  // // $d = date_create("2022-10-01 15:5:3");//ممكن تحط اي تاريخ
  // $d = date_create();

  // // Year
  // echo date_format($d, "Y") . "<br>"; // 2024
  // echo date_format($d, "y") . "<br>"; // 24

  // // Month
  // echo date_format($d, "Y-m") . "<br>";//2024-03
  // echo date_format($d, "Y-M") . "<br>";//2024-Mar
  // echo date_format($d, "Y-F") . "<br>";//2024-March
  // echo date_format($d, "t") . "<br>"; // 31

  // Day
  // echo date_format($d, "Y m d") . "<br>";//2024 03 16
  // echo date_format($d, "Y-m-j") . "<br>";//2024-03-16
  // echo date_format($d, "Y/m/D") . "<br>";//2024/03/Sat
  // echo date_format($d, "Y-m-l") . "<br>";//2024-03-Saturday
  // $x ='day of 365';
  // echo date_format($d, "Y-m-l z").$x. "<br>"; //2024-03-Saturday 75
  // echo date_format($d, "Y-m-l d j D l z") . "<br>";//2024-03-Saturday 16 16 Sat Saturday 75
  // echo date_format($d, "Y-m-l S") . "<br>";//2024-03-Saturday th

  /**********lesson-94************** */
  /*
    [Time]
    - a => Small am/pm
    - A => Capital AM/PM

    [Hour]
    - g => 1-12
    - h => 01-12
    - G => 0-23
    - H => 00-23

    [Minutes, Seconds, Micro]
    - i => 00-59
    - s => 00-59
    - u => Microseconds

  */

  // date_default_timezone_set("Africa/Cairo");
  // // // $d = date_create("2022-10-01 15:5:3");
  // $d = date_create();

  // // Time
  // echo date_format($d, "Y-m-d g a") . "<br>";//2024-03-16 6 pm
  // echo date_format($d, "Y-m-d g A") . "<br>";//2024-03-16 6 PM
  // echo date_format($d, "Y-m-d h a") . "<br>";//2024-03-16 06 pm
  // echo date_format($d, "Y-m-d G A") . "<br>";//2024-03-16 18 PM
  // echo date_format($d, "Y-m-d H A") . "<br>";//2024-03-16 18 PM
  // echo date_format($d, "Y-m-d H/i/s") . "<br>";//2024-03-16 18/08/43
  // echo date_format($d, "Y-m-d H/i/s u") . "<br>";//2024-03-16 18/09/20 197030

  /**********lesson-95************** */
  /*
    Date And Time Functions
    - date_interval_create_from_date_string()
    - date_add()
    - date_sub()
    - date_modify()

  */
  // date_default_timezone_set("Africa/Cairo");
  // $d = date_create();
  // date_add($d, date_interval_create_from_date_string("1 year 2 months 5 days"));
  // date_sub($d, date_interval_create_from_date_string("1 year 2 months 5 days"));

  // // date_modify($d, "+20 months");//2025/11/16 19-21-43 pm
  // date_modify($d, "-20 months");//2022/07/16 19-22-16 pm
  // echo date_format($d, "Y/m/d H-i-s a");

  /**********lesson-96************** */
  /*
    Date And Time Functions
    - time()
    --- Unix Timestamp => Seconds Since 01 Jan 1970
    - getdate()
    - date_parse()
  */

  // date_default_timezone_set("Africa/Cairo");

  // echo time() . "<br>";//1710624865  => Seconds Since 01 Jan 1970

  // echo time() / 60 . " Minutes<br>";
  // echo time() / 60 / 60 . " Hours<br>";
  // echo time() / 60 / 60 / 24 . " Days<br>";
  // echo time() / 60 / 60 / 24 / 365 . " Years<br>";//54.24356560756 Years

  // echo "<pre>";
  // print_r(getdate());
  // echo "</pre>";
  //output
//   Array
// (
//     [seconds] => 11
//     [minutes] => 41
//     [hours] => 23
//     [mday] => 16
//     [wday] => 6
//     [mon] => 3
//     [year] => 2024
//     [yday] => 75
//     [weekday] => Saturday
//     [month] => March
//     [0] => 1710625271
// )
// access one by one 
  // $t = getdate();
  // echo $t["year"] . "<br>";//2024
  // echo $t["month"] . "<br>";//March
  // echo $t["mday"] . "<br>";//16
  // echo $t["hours"] . "<br>";//23
  // echo $t["minutes"] . "<br>";//47
  // echo $t["seconds"] . "<br>";//49
  // echo $t["weekday"] . "<br>";// Saturday
  // echo $t["0"] . "<br>";//1710625669 => Seconds Since 01 Jan 1970
  // echo $t["yday"] . "<br>";//75 from year 365
  // echo $t["wday"] . "<br>";//6 hint:(mon is day 1)


  // echo "<pre>";
  // print_r(date_parse("1985-2-31 5:25:15 UTC"));//invalid
  // echo "</pre>";
// Array
// (
//     [year] => 1985
//     [month] => 2
//     [day] => 31
//     [hour] => 5
//     [minute] => 25
//     [second] => 15
//     [fraction] => 0
//     [warning_count] => 1
//     [warnings] => Array
//         (
//             [22] => The parsed date was invalid
//         )

//     [error_count] => 0
//     [errors] => Array
//         (
//         )

//     [is_localtime] => 1
//     [zone_type] => 3
//     [tz_abbr] => UTC
//     [tz_id] => UTC
// )

  // echo "<pre>";
  // print_r(date_parse("1985-2-28 5:25:15 UTC"));//valid
  // echo "</pre>";
  // [warning_count] => 0

  /**********lesson-97************** */
  /*
    Date And Time Functions
    - date_diff()
    - strtotime(DateTime, Base)

  */
  // date_default_timezone_set("Africa/Cairo");

  // $reg = date_create("2022-03-16");
  // $now = date_create("now");

  // $diff = date_diff($reg, $now);

  // echo '<pre>';
  // print_r($diff);
  // echo '</pre>';

//   DateInterval Object
// (
//     [y] => 2
//     [m] => 0
//     [d] => 1
//     [h] => 0
//     [i] => 5
//     [s] => 39
//     [f] => 0.6873
//     [invert] => 0
//     [days] => 732
//     [from_string] => 
// )

  // echo "You Are A Member For " . $diff->days . " Days<br>";
  // echo "You Are A Member For " . $diff->y . " Years<br>";
  // echo "You Are A Member For " . $diff->i . " Minutes<br>";

// $birthdate = "2000-05-21";
// $today = date("Y-m-d");
// $diff = date_diff(date_create($birthdate), date_create($today));
// echo "You Are A Member For " . $diff->y . " Years ". $diff->m . " MOnths " . $diff->d . " Days";//You Are A Member For 23 Years 9 MOnths 25 Days

  // echo date("Y-m-d H:i:s", strtotime("next Friday")) . "<br>";
  // echo date("Y-m-d H:i:s", strtotime("+1 year")) . "<br>";
  // echo date("Y-m-d H:i:s", strtotime("tomorrow")) . "<br>";
  // echo date("Y-m-d M D H:i:s", strtotime("tomorrow", strtotime("2000-05-21"))) . "<br>";//2000-05-22 May Mon 00:00:00
  // i was born on sunday.
  // echo date("Y-m-d M D H:i:s", strtotime("+1year +1day", strtotime("2000-05-21"))) . "<br>";//2001-05-22 May Tue 00:00:00

  // echo "<pre>";
  // print_r(date_parse("2000-05-21"));//valid
  // echo "</pre>";

  /**********lesson-98******Cookies******** */
  /*
    Cookies
    - Examples
    --- Popup
    --- Custom Settings
    --- Remember Me => Login

    - setcookie(Name[Required], Value, Expire, Path, Domain, Secure, HTTP_Only);
    --- Name
    --- Value
    --- Expire
    --- Path
    --- Domain
    --- Secure
    --- HTTP_Only
  */
  // setcookie("style", "dark");
  // setcookie("style", "dark", time() + 60 * 60 * 24 * 30);
  // If you want to synchronize the cookies across multiple browsers on the same device, you can't do that with standard cookies as they are stored locally within each browser.
  // One alternative is to use browser-based storage mechanisms like Local Storage or Session Storage, which are not shared across browsers but are shared within the same browser even if you have multiple tabs open.
  // Another approach is to store the user's preferences on a server and retrieve them when needed, ensuring consistency across different browsers.

  // You can achieve synchronization of preferences across different browsers by storing the user's preferences on a server,
  // for example in a database or a file. When the user accesses your application from a different browser, you can retrieve the stored preferences from the server and apply them to the new browser session.
  // This way, the user will see the same preferences regardless of the browser they are using.

  // If you want to achieve a similar effect, you would need to use a server-side solution, such as storing user preferences in a server-side database and retrieving them when needed.

  /**********lesson-99************** */
  /*
    Cookies
    Important
    - DO NOT Store Sensitive Information
    - Not Everything Saved To Cookies
  */

  // setcookie("style", "dark", time() + 60 * 60 * 24 * 30);
  // setcookie("popup", "done", strtotime("+1 month"));

  // echo "<pre>";
  // print_r($_COOKIE);
  // echo "</pre>";

  // echo $_COOKIE["style1"];
  
  // setcookie("style1", "dark", time() + 60 * 60 * 24 * 30, "/");// if iam created an afolder outside the project and i call on the cookie it will work due to this path:  "/";

  /**********lesson-100************** */
  /*
    Cookies
    - Modify
    - Delete time()-1 or any way make expire done or 1
    - Add Array
  */

  // setcookie("style[color]", "red");
  // setcookie("style[font]", "Tahoma");
  // setcookie("style[layout]", "boxed");

  // echo "<pre>";
  // print_r($_COOKIE);
  // echo "</pre>";

  // if (isset($_COOKIE["style"])) {
  //   echo $_COOKIE["style"]["font"];
  // }

  /**********lesson-101************** */
  /*
    Cookies
    - Practice
  */

  // if (isset($_COOKIE["background"])) {
  //   echo "<style>body { background-color: " . $_COOKIE["background"] . " }</style>";
  // }

  // if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //   setcookie("background", $_POST["bg-color"], strtotime("+1 year"));
  //   setcookie("background", $_POST["price"], strtotime("+1 year"));
  //   header("Location: " . $_SERVER["REQUEST_URI"]);
  //   exit();
  // }

?>

<!-- <form action="" method="POST">
  <input type="color" name="bg-color">
  <input type="number" name="price">
  <input type="submit" value="Go">
</form> -->

  <!-- /**********lesson-102************** */ -->
  <?php
  /*
    Sessions
    - Session Is Stored On The Server
    - Session Store Only A User Key In Cookie To Know Its You
    - Key Are Generated By PHP Engine So Its Almost Impossible To Guess
    - You Need To Add It Before Any Output
  */

  // session_start();

  // $_SESSION['name'] = "Ahmed";
  // $_SESSION['id'] = 1005;

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';

  // echo '<a href="Test_session.php">Test</a>';

  /**********lesson-103************** */
  /*
    Sessions
    - Advanced Information in tmp Folder
    - Edit
    - Views Count
  */
  // session_id("mo2152000");
  // session_start();
  // echo session_id()."<br>";

  // $_SESSION['name'] = "MOhamed";

  // isset($_SESSION['views']) ? $_SESSION['views']++ : $_SESSION['views'] = 1;

  // echo "Hello " . $_SESSION['name'] . " Views Count Is " . $_SESSION['views']."<br>";

  // echo '<a href="about.php">About</a>';

  /**********lesson-104************** */
  /*
    Sessions
    - Unset And Destroy
    - Login And Logout Simulation
  */

  // session_start();
  // if ($_SERVER["REQUEST_METHOD"] === "POST") {
  //   if ($_POST['user'] === "Osama") {
  //     $_SESSION['username'] = "Elzero";
  //     $_SESSION['id'] = 1005;
  //   }
  // }

  // echo '<pre>';
  // print_r($_SESSION);
  // echo '</pre>';

  // if (isset($_SESSION['username'])) {
  //   echo "Welcome " . $_SESSION['username'];
  // }
  // else {
?>

<!-- <form action="" method="POST">
  <input type="text" name="user">
  <input type="submit" value="Login">
</form> -->
<?php 
// } 
?>
<!-- <a href="logout.php">Logout</a> -->

  <!-- /**********lesson-105************** */ -->
  <?php
  /*
    Header
    - Send RAW HTTP Header To Client To Manipulate Info Sent By Web Server Before Any Output
    - You Can Use To Control Cache Or Force File Download

    header(Header[Required], Replace[Optional] = True, Response_Code[Optional])
  */

  // header("HTTP/1.0 404 Not Found");
  // header("expires: Sat, 16 Mar 2024 02:00:00");
  // header("cache-control: no-cache, must-revalidate");
  // echo "<a href='test.php'>Test</a>";
  // header("Refresh:5; url=test.php");
  // header("Location: test.php");
  // exit;