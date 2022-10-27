<?php 
/*PHP Variables Scope
1. Global Scope.
2. local Scope.
3. Static Scope.
*/

//Global Scope ================>
$name = 'Parvej';

function callName(){
    global $name; //This is Global scope
    echo $name; 
}callName();
echo "<br>";




//local Scope ================>
$name = 'Parvej';

function callName2(){
    $name2 = 'Ahmmed'; //This is Local scope
    echo $name2; 
}callName2();
echo "<br>";




//Static Scope==============>
//Loss Business:
function realEstateBusiness($perMonthProfit){
    $capital = 50000;
    $capital += $perMonthProfit;
    return $capital . '<br>'; 
}
echo 'First month capital + profit= ' . realEstateBusiness(500);
echo 'second month capital + profit= ' . realEstateBusiness(1000);
echo 'Third month capital + profit= ' . realEstateBusiness(1000);
echo "Loss Project . <br>";
echo '<br>';



//Profitable Business:
function itFramBusiness($perMonthProfit){
    static $capital = 50000;
    $capital += $perMonthProfit;
    return $capital . '<br>';
}
echo 'First month capital + profit= ' . itFramBusiness(500);
echo 'second month capital + profit= ' . itFramBusiness(1000);
echo 'Third month capital + profit= ' . itFramBusiness(1000);
echo "Mashallah this is profitable Project . <br>";
echo '<br>';


//Array=====================>
// 1. Indexing Array:
$names = [
    'Parvej',
    'Ahmmed',
    'Hafizul',
    'Raju',
    'Jweal',
    'Faruk'
];
echo '<pre>';
print_r($names);//Indexing Array print;
echo '</pre>';
echo '<br>';
print_r($names['0']);//Indexing Array print key or value wise
echo '<br>';
print_r($names['2']);//Indexing Array print key or value wise
echo '<br>';




// 2. Associative Array:
$address = [
   'name' => 'Md parvej Ahmmed',
   'ariea' => 'Hill View road no #01',
   'post_office' => 'Amin jute milles',
   'pollice_station' => 'Baized Bostami',
   'Distric' => 'Chittagong'
];
echo '<pre>';
print_r($address);//Associative Array print;
echo '</pre>';
print_r($address['ariea']);//Associative Array print key or value wise
echo '<br>';


// 3. Multi Dimantional Array: 
$users = [
    'parvej' => [
        '1st_name' => 'Md Parvej',
        '2nd_name' => 'Ahmmed'
    ],
    'account' => [
        'facebook' => [
            'two_account' => [
                'real' => [
                    'find_two_account' => [
                        '1st_account' => 'https://www.facebook.com/parvezahmed45/',
                        'corporet_account' => 'https: not found'
                    ]
                ]
            ] 
        ],
        'linkedin' => [
            '1st' => 'https://www.linkedin.com/in/md-parvez-ahmmed/',
            'corporet_account' => 'https: not found'
        ],
        'numbers' => [
            '1st' => '01631381528',
            'corporret' => 'Not found'
        ]
    ]   
];
echo '<pre>';
print_r($users);//Associative Array print;
echo '</pre>';
print_r($users['account']['facebook']['two_account']['real']['find_two_account']['1st_account']);//my 1st facebook account access with multidimantion array
echo '<br>';
$users['account']['facebook']['two_account']['real']['find_two_account']['corporet_account'] = 'Akhono khula hoy nai, Inshallah khulbo'; //access and chanege of array value
print_r($users['account']['facebook']['two_account']['real']['find_two_account']['corporet_account']);////access and chanege of array value , print out changed value
echo '<br>';



//some function :
//strtoupper
$sentence = 'Islam is universal turth';
print_r(strtoupper($sentence));//use strtoupper function
echo '<br>';


//srttolower
$sentence2 = 'I BELIEVE, ISLAM IS UNIVERSAL TURTH';
print_r(strtolower($sentence2));//use strtolower function
echo '<br>';


//ucwords
$sentence3 = "islam is univarsal turth";
echo ucwords($sentence," ");//Convert the first character of each word to uppercase
echo '<br>';



//ucfirst
echo ucfirst($sentence3); //converts the first character of a string to uppercase
echo '<br>';



//lcfirst
echo lcfirst($sentence2);//converts the first character of a string to lowercase
echo '<br>';



//PHP addcslashes() Function
echo addcslashes($sentence3, 'i');//Add a backslash in front of the character
echo '<br>';


//addslashes()  Function
$sentence4 = addslashes('Islam is univarsal "turth"');
echo $sentence4;//Returns a string with backslashes in front of predefined characters
echo '<br>';



//PHP bin2hex() Function
echo bin2hex($sentence);//Convert to hexadecimal values:
echo '<br>';



//PHP chop() Function
echo chop($sentence, 'turth');//Remove characters from the right end of a string:
echo '<br>';




//PHP chr() Function
$Decimal = chr(52) ; // Decimal value
$Octal = chr(052); // Octal value
$Hex =  chr(0x52); // Hex value
print_r($Decimal . 'This is Decenal value' . '<br>');
print_r($Octal . 'This is Octal value' . '<br>');
print_r($Hex . 'This is Hex value' . '<br>');
echo '<br>';




//PHP chunk_split() Function
$exmp = "veryveryverygood";
echo chunk_split($exmp, 4, '.');//Split the string after each character and add
echo '<br>';

////PHP explode() Function
$imageName = 'my.beautyful_image.jpg';
$imgArray = explode('.', $imageName);//Breaks a string into an array
$imgExt = end($imgArray);//Output the value of the current and the last element in an array
print_r($imgExt);//Find out this image extention
echo '<br>';



//PHP hex2bin() Function
echo hex2bin('48656c6c6f20576f726c6421');
echo '<br>';



//PHP implode() Function
$subject = ['bangla', 'english', 'math', 'ict'];
print_r(implode('.', $subject));
echo '<br>';




//PHP join() Function
$subject = ['bangla', 'english', 'math', 'ict'];
print_r(join('.', $subject));
echo '<br>';



//PHP trim() Function
$paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia pariatur est dolorem aliquam veniam voluptates quas laudantium necessitatibus sequi voluptatum!';
echo trim($paragraph, "o");
echo '<br>';



////PHP ltrim() Function
echo ltrim($paragraph, 'o');
echo '<br>';



////PHP rtrim() Function
echo ltrim($paragraph, 'o');
echo '<br>';



//PHP md5() Function
echo md5('parvej');
echo '<br>';


//PHP sha1() Function
echo sha1('parvej');
echo '<br>';


//PHP strrev() Function
echo strrev('Md parvej Ahmmed');
echo '<br>';


//PHP strpos() Function
$ext = 'Md parvej Ahmmed';
echo strpos($ext,'a');//case sencetive
echo '<br>';


//PHP stripos() Function
$ext = 'Md parvej Ahmmed';
echo stripos($ext, 'A');//case insencetive
echo '<br>';



//PHP str_ireplace() Function
$creativeIt = 'creative it bashi kharap. creative it one kharap';
echo str_ireplace($creativeIt, 'good', 'kharap');
echo '<br>';



//PHP substr() Function and srtlen() Function with a program
$comment = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat inventore magni cumque optio at dolorum exercitationem delectus, modi esse illo molestiae natus cum culpa tempora doloremque fuga, incidunt numquam dicta.";
if(strlen($comment) > 60){// use PHP srtlen() Function
    echo substr($comment, 0, 60) . " <a href='#'>see more</a>"; //use PHP substr() Function
}
echo '<br>';



//Encription password random
$userPassword = '0163381528';
$encriptPass = password_hash($userPassword, PASSWORD_BCRYPT);
print_r($encriptPass);
echo '<br>';
//Verify Encription password
$anotherUserInput = '01631381522';
if(password_verify($userPassword, $encriptPass)){
    echo 'Successful login! Welcom to parvej world';
}else{
    echo 'Sorry! Denid access';
}
echo '<br>';
//another user input worng password
$anotherUserInput = '01631381522';
if(password_verify($userPassword, $encriptPass) == $anotherUserInput){
    echo 'Sorry! Denid access';
}



?>