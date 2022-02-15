<?php

class MyCustomException extends Exception { }

function exception_handler($exception) {
   echo "Uncaught exception: " , $exception->getMessage(), "\n<br>";
}

set_exception_handler('exception_handler');

try {
   throw new Exception('Uncaught Exception');
} catch (MyCustomException $e) {
   echo "Your custom exception caught ";
   echo $e->getMessage();
} finally {
   echo "I'm always here";
}

print "Not executed";
// https://netgen.io/blog/modern-error-handling-in-php
