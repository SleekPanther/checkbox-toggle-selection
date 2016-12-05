# Invert Selection (Toggle Selection) Checkboxes & Radio Buttons (HTML forms)

Uses jQuery & JavaScript to select the opposite of any checkboxes that are currently selected

##jQuery Functions
- Invert Current Selection (checkboxes)
- Select All
- Select None

Select None works to **deselect radio buttons**

No CSS just to make things easier to understand  
Possible improvements could be styling the buttons

###Tutorial Sources
I cobbled together my own `invert()` function based on various sources. All of which I found to not meet my standards or were too complex

- **[JQuery checkboxes inverse selection | Marko Jakic](http://markojakic.net/jquery-checkboxes-inverse-selection) Probably the most help, but added to it & expanded compact if-else form**
- **[Stack Overflow: javascript - Why is jQuery is not checking/unchecking checkbox](http://stackoverflow.com/a/18439482) finally figured out why adding `checked` wasn't actually updating the html**
- [Javascript-invert the CheckBoxe selection](http://www.itechies.net/tutorials/jscript/jsexample.php-pid-check-invert.htm) Older JavaScript method NOT using jQuery. 1st one I got to work at all, but didn't use much else
- [jQuery Checkboxes: Select All, Select None, and Invert Selection](https://www.abeautifulsite.net/jquery-checkboxes-select-all-select-none-and-invert-selection) A start, but not much help
- [Stack Overflow: jQuery hasAttr checking to see if there is an attribute on an element](http://stackoverflow.com/a/1318088) some help on checkbox event handling, but not complete
- [CSS-Tricks: A jQuery hasAttr() Equivalent](https://css-tricks.com/snippets/jquery/make-an-jquery-hasattr/) testing if an an element has an attribute
- [Stack Overflow: jQuery checkbox event handling](http://stackoverflow.com/a/29367737) helped when finding how to call functions
