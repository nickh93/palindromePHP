# palindromePHP

#### Web app that checks if words are palindromes. It will use php, silex, twig, and tests (phpunit). 09.14.16

#### By _**Alexandre Leibler, Nicolas Hurtado, Lisa MacCarrigan**_


## Description

Given a string, palindromePHP will check to see if it is a palindrome. Additionally, it will be responsible for displaying the resulting output to the web page


## Setup/Installation Requirements

* If you wish to view the source code locally on your machine please follow the following steps:

  +  1). Navigate to the directory in which you want the palindromePHP project to reside.

  +  2). Enter the following command into your terminal:
        git clone https://github.com/KomodoTech/palindromePHP.git

  +  3). Navigate to the palindromePHP directory, and execute the following command in the terminal:
          composer install

  +  4). Navigate to the web directory and start your local host by executing the following command in your terminal:
          php -S localhost:8000

  +  5). Open up the browser of your choice and go to the following url:
          http://localhost:8000/

  +  6). If you wish to look at the source code, feel free to browse through the files in the palindromePHP directory


## Specs

* 1). Word is a single lower case alpha character
  + IN:  t
  + OUT: true

* 2). Word is a sequence of lower case alpha characters, that is not a palindrome
  + IN:  treat
  + OUT: false

* 3). Word is a sequence of lower case alpha characters, that is a palindrome
  + IN:  tacocat
  + OUT: true

* 4). Word is a sequence of mixed case alpha characters, that is not a palindrome
  + IN:  trEaT
  + OUT: false

* 5). Word is a sequence of mixed case alpha characters, that is a palindrome
  + IN:  taCOcAT
  + OUT: true

* 6). Word is a sequence of mixed case alpha and non-alpha characters, that is not a palindrome
  + IN:  t_+4343F
  + OUT: false

* 7). Word is a sequence of mixed case alpha and non-alpha characters, that is a palindrome
  + IN:  T@c0c@t
  + OUT: true

## Known Bugs

None yet


## Support and Contact Details

Please feel free to contact us through the github account KomodoTech or at the following emails:
    alexandre.leibler@gmail.com
    nickh93@outlook.com
    lisa.maccarrigan@gmail.com

## Technologies Used

* silex v~2.0
* twig v~1.0
* phpunit v5.5.*
* bootstrap v3.3.7



### License

* GPLV3

palindromePHP Copyright (c) 2016 **Alexandre Leibler, Nicolas Hurtado, Lisa MacCarrigan**
