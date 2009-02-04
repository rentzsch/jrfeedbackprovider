#JRFeedbackProvider

is a nonviral (MIT license) drop-in source code package which provides an in-application user feedback mechanism for Cocoa apps. It puts up a panel something like this:

<p align="center"><img src="http://rentzsch.com/share/JRFeedbackProvider.jpg" width="564" height="488"></p>

It supplies the panel (in .xib form), the Objective-C controller code and even the `.php` file to put on your web server to turn those web form posts into email messages (just replace `YOUR_(FEEDBACK_)EMAIL_ADDRESS_HERE@gmail.com` with whatever you want).

Requires 10.5.

Please [report bugs and request features](http://rentzsch.lighthouseapp.com/projects/24800-jrfeedbackprovider/tickets/new) on the [Lighthouse JRFeedbackProvider project site](http://rentzsch.lighthouseapp.com/projects/24800-jrfeedbackprovider/tickets?q=all).

##Version History

* **1.1**

	* [NEW] Set the user's reply address in the server-side PHP script. (Michael Zornek)

	* [FIX] Assertion failure if user clicks "Send" button and without waiting click the "Cancel" button. (Oleg Krupnov)

	* [CHANGE] Change "Submit" button to "Send" to be more respectful of the user. (Oleg Krupnov)

* **1.0** Original release