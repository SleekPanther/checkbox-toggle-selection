# Invert Selection (Toggle Selection) Checkboxes & Radio Buttons (HTML forms)

Uses jQuery & JavaScript to select the opposite of any checkboxes that are currently selected

##[Live Demo](https://npatullo.w3.uvm.edu/toggle/)
This uses PHP, but there is also a [pure HTML version](https://npatullo.w3.uvm.edu/toggle/html.html), as the focus of this project was on the jQuery methods, not PHP forms

##jQuery Functions
- `Invert Current Selection` (checkboxes only)
- `Select All`
- `Select None`

`Select None` works to **deselect radio buttons**

No CSS just to make things easier to understand  
Possible improvements could be styling the buttons

##Code Details & Use
###General
- jQuery functions set the **property** of an input element using `item.prop("checked", true);` because `item.attr('checked','checked');` doesn't work.  
It updates the HTML & you can see it happen in realtime using *Inspect Element*, but the actual page doesn't change
- 

###PHP Version Specific
- Form submits to itself
- Currently prints out the contents of the $_POST array when form is submitted
- Uses a for loop to print checkboxes & labels (or just use the html version)

###Pure HTML Version Specific
- No form processing (since it's basic HTML)

##Previous Versions (failed attempts)
The `attempts/` folder is a colleections of my initial versions which didn't pan out

###Tutorial Sources
I cobbled together my own `invert()` function based on various sources because none of them individually was exactly what I was looking for

- **[JQuery checkboxes inverse selection | Marko Jakic](http://markojakic.net/jquery-checkboxes-inverse-selection) Probably the most help, but added to it & expanded compact if-else form**
- **[Stack Overflow: javascript - Why is jQuery is not checking/unchecking checkbox](http://stackoverflow.com/a/18439482) finally figured out why adding `checked` wasn't actually updating the html**
- [Javascript-invert the CheckBoxe selection](http://www.itechies.net/tutorials/jscript/jsexample.php-pid-check-invert.htm) Older JavaScript method NOT using jQuery. 1st one I got to work at all, but didn't use much else
- [jQuery Checkboxes: Select All, Select None, and Invert Selection](https://www.abeautifulsite.net/jquery-checkboxes-select-all-select-none-and-invert-selection) A start, but not much help
- [Stack Overflow: jQuery hasAttr checking to see if there is an attribute on an element](http://stackoverflow.com/a/1318088) some help on checkbox event handling, but not complete
- [CSS-Tricks: A jQuery hasAttr() Equivalent](https://css-tricks.com/snippets/jquery/make-an-jquery-hasattr/) testing if an an element has an attribute
- [Stack Overflow: jQuery checkbox event handling](http://stackoverflow.com/a/29367737) helped when finding how to call functions
