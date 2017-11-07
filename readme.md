# [:house: Feni Batch Home Page](http://poloey.github.io/feni)

# Class 26 
Today We've learned about MVC Pattern. MVC pattern help us to organize our code. 
     
## Folder structure 

MVC full meaning is Model, view, controller.   
* Model represent Database stuff
* Controller represent reltion between model and view
* View is viewing site for end user. 

Today We made 4 folder to split our project `controller` `core` `views` `public` We keep database related file inside `core` folder insetead `model` folder. Since real `model` different than our current database structure. 

We will keep our all `css` `js` `image` file inside public folder

## Routing for Clean  URL
first make a array where `key` will be `url` and `value` will be `controller` like following
~~~php
$routes = [
  '' => 'controller/indexController.php',
  'about' => 'controller/aboutController.php',
  'contact' => 'controller/contactController.php'
];
~~~

We can get server uri using `$_SERVER` super global.
~~~php
$uri = $_SERVER['REQUEST_URI']
~~~
`REQUEST_URI` give me uri with `/`. to trim `/` from uri we used php `trim` function 
~~~php
$uri = trim( $_SERVER['REQUEST_URI'], '/' )
~~~
Now we can require specific Controller using following code
~~~php
require $routes[$uri];
~~~
If user try to visit wrong uri in this case `$routes[$uri]` cant be required. Since those `$uri` key is not exists in `$routes`  array. So we have to check before require controller whether array key exists in `$routes` array, if not we will show users not found page
~~~php
if (array_key_exists($uri, $routes)) {
  require $routes[$uri];
} else {
  //show not found page
}
~~~






