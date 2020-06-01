# Addignment

Hi Dear

There are some assignments to help us know you better. Please make sure to find the best solution for each problems and also
pass all tests. 

- [Where to start](##where-to-start)
- [Get fammiliar with project](##get-familiar-with-project)

# Where To Start

To start the quiz, first clone the project from command line or download the [zip file](https://github.com/hamedghaderi/assignment/archive/master.zip).

```bash
$ git clone https://github.com/hamedghaderi/assignment.git
```

Next go to the downloaded directory and install it's requirements.

```bash
$ cd /PROJECT_PATH/assignments
$ composer install
```
If your PHP version is under 7.4, please upgrade to PHP 7.4.
There is no need to install database. 


## Get Familiar with Project

If you look around, there are two basic folders `src` and `tests`. We have some problems inside the tests and want
to find the best solution for each problem.

We're trying to make Markdown reader for to help us generate our emails, something like github markdown. There are 4
scenarios to handle. 

### Title

First we want to generate a title from markdown. To make this happen, we want to change all ```#Words``` into an h1. There is
a TitleTest inside our tests and a Title class inside src. Test is failed. So handle the problem the way tase passes.


### Link

We want to generate a link from markdown. To make this happen, we want to change all ```[Goggle](http://www.gogle.com)``` into an anchor tag. There is
a LinkTest inside our tests and a Link class inside src. Test is failed. So handle the problem the way tase passes.

### Italic

We want to generate an italic text from markdown. To make this happen, we want to change all ```_words_``` into an italic tag. There is
an ItalicTest inside our tests and a Italic class inside src. Test is failed. So handle the problem the way tase passes.

### Bold

We want to generate a bold text from markdown. To make this happen, we want to change all ```__words__``` into a bold tag. There is
an BoldTest inside our tests and a Bold class inside src. Test is failed. So handle the problem the way tase passes.

### Time conversion
We have a class to convert a given time in minutes and change it into hour or seconds. To make this happen we have a
TimeConversionTest inside tests and a TimeConversion class inside src. Test is failed. So write your code the way
change it to green.

Good Luck


