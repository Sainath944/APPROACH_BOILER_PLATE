<?php
namespace Template;
require_once __DIR__ . '/support/lib/vendor/autoload.php';

use Approach\Render\HTML;

$x = new HTML(tag: "div", content: "Hello World");

echo $x->render();

// $root = new HTML(tag: 'html');

// $root[] = $head = new HTML(tag: 'h1', content: 'header');

// $root[] = $body = new HTML(tag:'body');
$root[] = new HTML(
    tag: 'link',
    attributes: ['rel' => "stylesheet", 'href' => 'cards.css']
);
// $body[] = new HTML(tag:'p' , content:'can i make it');
// $body[] = $firstcard = new HTML(tag:'div' , classes:['card']);
// $firstcard[] = $textdiv1 = new HTML(tag:'div' , classes:['card-text']);
// $textdiv1[] = new HTML(tag:'p' , content:'hello this is my first card');

// $body[] = new HTML(tag:'<hr><br>');
// $body[] = $secondcard = new HTML(tag:'div' , classes:['secondcard']);
// $secondcard[] = $cardbody = new HTML(tag:'div' , classes:['card-body']);
// $cardbody[] = new HTML(tag:'h4' , content:'this is the h4');
// $cardbody[] = new HTML(tag:'h5' , content:'this is the h5');
// $cardbody[] = new HTML(tag:'p' , content:'Lorem ipsum dolor consectetur adipisicing elit. At, repellendus! Autem, consectetur reiciendis ratione quas lab');
// $cardbody[] = new HTML(tag:'a' , attributes:['href' => '#'] , content:'hello');
// $cardbody[] = new HTML(tag:'a' , attributes:['href' => '#'] , content:'world');

// $body[] = new HTML(tag:'<br>');
// $body[] = $thirdcard = new HTML(tag:'div' , classes:['thirdcard']);
// $thirdcard[] = $listdiv = new HTML(tag:'div' , classes:['list-div']);
// $listdiv[] = $ul1 = new HTML(tag:'ul' , classes:['list']);
// $ul1[] = new HTML(tag:'li' , content:'first item' , classes:['list-item']);

// $ul1[] = new HTML(tag:'li' , content:'second item' , classes:['list-item']);
// $ul1[] = new HTML(tag:'li' , content:'third item' , classes:['list-item']);
// // <div class="card" style="width: 18rem;">
// //   <ul class="list-group list-group-flush">
// //     <li class="list-group-item">An item</li>
// //     <li class="list-group-item">A second item</li>
// //     <li class="list-group-item">A third item</li>
// //   </ul>
// // </div>








// echo $root;


// <?php
// namespace Template;
// // require_once __DIR__ . '/support/lib/vendor/autoload.php';

// // use Approach\context;
// // use Approach\Render\HTML;

// $root = new HTML(tag:'div');
// $root = new HTML(tag:'link', attributes:['rel' => 'stylesheet', 'href' => 'styles.css']);

// $root[] = new HTML(tag:'nav', classes:'navbar');

// $navItems = [
//     'Home',
//     'About',
//     'Contact',
//     'Services',
// ];

// foreach($navItems as $item) {
//     $root[] = new HTML(tag:'a', content:$item, classes:'nav-link');
// }


// $card = new HTML(tag:'div', id:'card');

// $cardContent = new HTML(tag:'div', classes:'card-content');
// $cardContent[] = new HTML(tag:'h2', content:'Card Title', classes:"card-title");
// $cardContent[] = new HTML(tag:'p', content:'This is some information about the card', classes:'card-info');

// $card[] = $cardContent;
// $root[] = $card;

// $root[] = new HTML(tag:'ul', classes:'list-group');

// $listItems = [
//     'A disabled item',
//     'A second item',
//     'A third item',
//     'A fourth item'
// ];


// foreach($listItems as $index => $item) {
//     $attributes = ['class' => 'list-group-item'];
//     if ($index === 0) {
//         $attributes['class'] .= ' disabled';
//         $attributes['aria-disabled'] = 'true';
//     }
//     $root[] = new HTML(tag:'li', content:$item, attributes:$attributes);
// }

// // $root[] = new HTML(tag:'h1', content:'Hello World', classes:'title')


// $root[] = new HTML(tag:'br');

// $newroot = new HTML(tag:'div', classes:'badge');

//     $heading = new HTML(tag:'h1', content: 'Example heading <br>');
//     $badge = new HTML(tag:'span', content: 1, classes:'badge');
//     $newroot[] = new HTML(tag:'br');
//     $heading[]  = $badge;
//     $newroot[] = $heading;

//     echo $newroot;

//     $root[] = new HTML(tag:'br');
//     $root[] = new HTML(tag:'button', content:'Click me', attributes:['onclick' => 'alert("Hello World")']);
//     echo $root;

// $root = new HTML(tag:'head')
// $root = new HTML(tag:'div');

$root = new HTML(tag:'html');

$root[] = $head = new HTML(tag:'head');
$head[] = new HTML(tag:'link', attributes:['rel' => 'stylesheet', 'href' => 'cards.css']);
$root[] = $body = new HTML(tag:'body');
$body[] = $firstdiv = new HTML(tag:'div' , attributes:['class' => 'navbar']);
$navbaritems = [
    'first-item' ,
    'second-item' ,
    'third-item' ,
    'fourth-item' ,
    'fifth-item' ,
];

foreach($navbaritems as $items){
    $firstdiv[] = new HTML(tag:'a' , content:$items , classes:['navbar-item'] , attributes:['href' => '#']);
    $firstdiv[] = new HTML(tag:'div' , classes:['space']);
}

$body[] = new HTML(tag:'hr');

$body[] = $seconddiv = new HTML(tag:'div' , classes:['list']);
$seconddiv[] = $ul1 = new HTML(tag:'ul' , classes:['unorderedlist1']);
$j = 5;
for($i = 0;$i<=10;$i++){
    $ul1[] = new HTML(tag:'li' , classes:['classes'] , content:"{$j} * {$i} = " . ($j) * ($i));
    $ul1[] = new HTML(tag:'br');
}

$body[] = new HTML(tag:'hr');
$body[] = new HTML(tag:'br');

$body[] = $parentdiv = new HTML(tag:'div' , classes:['maindiv']);
$parentdiv[] = $anydiv = new HTML(tag:'div' , classes:['anydiv']);
$anydiv[] = $form = new HTML(tag:'form' , attributes:['method' => 'post' , 'action' => 'index.php']);
$form[] = new HTML(tag:'label' , content:"username". "<br>");
// $form[] = new HTML(tag:'br');
$form[] = new HTMl(tag:'input' , attributes:['type' => 'text' , 'name' => 'username' , 'value' => '']);
// $form[] = new HTML(tag:'hr');
$form[] = new HTML(tag:'label' , content:"age"."<br>");
// $form[] = new HTML(tag:'br');
$form[] = new HTMl(tag:'input' , attributes:['type' => 'text' , 'name' => 'age' , 'value' => '']);
// $form[] = new HTML(tag:'hr');
$form[] = new HTML(tag:'label' , content:"email" . "<br>");
// $form[] = new HTML(tag:'br');
$form[] = new HTMl(tag:'input' , attributes:['type' => 'text' , 'name' => 'email' , 'value' => '']);
$form[] = new HTML(tag:'br');
$form[] = new HTML(tag:'input' , attributes:['type' => 'submit' , 'name' => 'login' , 'value' => 'login']);

$body[] = new HTML(tag:'button', content:'Click me', attributes:['onclick' => 'alert("Hello World")']);

if(isset($_POST["login"])){
    echo "you are ready to go my dear";
    $username = filter_input(INPUT_POST , "username" , FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST , "age" , FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST , "email" , FILTER_SANITIZE_EMAIL);
    // $nothing = filter_input(INPUT_POST , "nothing" , FILTER_SANITIZE_SPECIAL_CHARS);


    echo "{$username} . <br>";
    echo "{$age} . <br>";
    echo "{$email} . <br>";
    // echo "{$nothing} . <br>";
}

// <form action="four.php" method="get">
//     <label >username</label>
//         <input type="text" name="username" value="">
//         <label >age</label>
//         <input type="text" name="age" value="">
//         <label >email</label>
//         <input type="text" name="email" value="">
//         <input type="submit" name="login" value="login">
//     </form>

$parentdiv[] = $anydiv2 = new html(tag:'div' , classes:['anydiv2']); 
$anydiv2[] = $form2 = new HTML(tag:'form' , attributes:['action' => 'index.php' , 'method' => 'get']);
$val = [
    'usernam' , 
    'agee' , 
    'emaill'
];

foreach($val as $va){
    $form2[] = new HTML(tag:'label' , content:"{$va}" . "<br>");
    // $form2[] = new HTML(tag:'br');
    $form2[] = new HTML(tag:'input' , attributes:['type' => 'text' , 'name' => "{$va}" , 'value' => ' ']);
    $form2[] = new HTML(tag:'hr');
}
$form2[] = new HTML(tag:'input' , attributes:['type' => 'submit' , 'name' => 'login' , 'value' => 'login']);

if(isset($_GET["login"])){
    $age = filter_input(INPUT_GET , "age" , FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_GET , "email" , FILTER_VALIDATE_EMAIL);

    if(empty($email)){
        echo "enter a valid email plssssssssssssss..........";
    }
    else{
        echo "hello my dear your email is {$email}";
    }
    if(empty($age)){
        echo "enter a valid age you r.";
    }
    else{
        echo "hello dear thnx for confirming your age as{$age} your are officilly selected now";
    }
}



echo $root;