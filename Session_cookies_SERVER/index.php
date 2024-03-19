<!-- acts as send and recieve requests to and from the server   -->
<!-- // super global variables $_session  $_cookies , $_server -->
<!-- $_cookies is used to store data in the browser -->
<!-- // $_Request is used to store data in the server  -->
<?php
// $receivedSearch = [$_REQUEST['search']];//recieve data from search.html
// setcookie('searchData',json_encode($receivedSearch),time()+3600);
// *******************
$search = [];
if(isset($_COOKIE['search'])){ // if cookie is known 
    $search = $_COOKIE['search'];// read 
    $search = json_decode($search,true);// decode
    $search[] = $_REQUEST['search'];// array push
    setcookie('searchData',json_encode($search),time()+3600);// encode
}
else{ // if cookie is not known
    $search = [$_REQUEST['search']];// array
    setcookie('searchData',json_encode($search),time()+3600);
}
/******we can optimize this code******** */
// $search = [];
// if (isset($_COOKIE['search'])) {
//     $search = json_decode($_COOKIE['search'], true);
//     echo $search;
// }
// if (isset($_REQUEST['search'])) {
//     $newSearch = $_REQUEST['search'];
//     if (!in_array($newSearch, $search)) {
//         $search[] = $newSearch;
//         setcookie('searchData', json_encode($search));
//     }
    // echo $search;
// }
?>