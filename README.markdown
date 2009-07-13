#JRFeedbackProvider

is a nonviral (MIT license) drop-in source code package which provides an in-application user feedback mechanism for Cocoa apps. It puts up a panel something like this:

<p align="center"><img src="http://rentzsch.com/share/JRFeedbackProvider.jpg" width="564" height="488"></p>

It supplies the panel (in .xib form), the Objective-C controller code and even the `.php` file to put on your web server to turn those web form posts into email messages (just replace `YOUR_(FEEDBACK_)EMAIL_ADDRESS_HERE@gmail.com` with whatever you want).

Mike Zornek has created a [nice screencast demonstrating how JRFeedbackProvider works and how to integrate it with your application](http://blog.clickablebliss.com/2009/03/03/screencast-introduction-to-jrfeedbackprovider/). Thanks, Mike!

Requires 10.4 or later. Developed and tested on 10.5.

Please [report bugs and request features](http://rentzsch.lighthouseapp.com/projects/24800-jrfeedbackprovider/tickets/new) on the [Lighthouse JRFeedbackProvider project site](http://rentzsch.lighthouseapp.com/projects/24800-jrfeedbackprovider/tickets?q=all).

##Version History

* **1.5.2**

	* [FIX] Disable cancel and send when submitting. ([Brian Cooke](http://github.com/bricooke/jrfeedbackprovider/commit/91b1220f7e6f0b5d989cc7d12aec6d50b674f0b7))

* **1.5.1**

	* [NEW] Conditionally set segment style in code, so XIB can compile without warnings on 10.4. ([Dave Dribin](http://github.com/ddribin/jrfeedbackprovider/commit/15227df3de3128017fce7785853f88ba77792239))

	* [FIX] Leaked return of CFUUIDCreate() (reported by clang static analyzer). Also make GC dual-mode safe by calling `NSMakeCollectable()` on return of `CFUUIDCreateString()`. ([Dave Dribin](http://github.com/ddribin/jrfeedbackprovider/commit/b1fb2b9c658f25f620f57f90d23aa29d2f9622a3))

* **1.5**

	* [NEW] Use SystemConfiguration.framework to ensure feedback host reachablity before presenting panel. (rentzsch)

	* [NEW] Disable contact fields, when "Include contact info:" is unchecked. Switch to bindings for include email address. (Dave Dribin)

	* [CHANGE] Put user name in seperate field since PHP's `is_valid_email()` doesn't understand proper RFC-822. Don't POST name, email or systemProfile fields if they're empty. Finally: s/includeEmailAddress/includeContactInfo ivar and IBOutlet.	(rentzsch)

	* [FIX] Condition inversion in jrfeedback.php dealing with email addresses. (rentzsch)

* **1.4**

	* [NEW] Add field for the submitter's name, auto-populated from the address book. (Victoria Wang)

* **1.3**

	* [NEW] Use `+[NSBundle bundleForClass:]` instead of `+[NSBundle mainBundle]` so JRFeedbackProvider is usable with plug-ins like .prefPanes. (Joesph Wardell)

	* [NEW] 10.4 support. Remove sole trivial use of ObjC 2 fast-enumeration so we can also target 10.4. (Joesph Wardell)

	* [NEW] Allow user to resize window, but vertically only. (Dave Dribin)

* **1.2** *(formerly released as 1.1.1)*

	* [NEW] Added new checkbox to the Feedback Window so users can acknowledge they are sending their hardware profile in.

	* [CHANGE] Made text of feedback message text view use black instead of green.

	* [NEW] Added a new class function to `JRFeedbackController` that allows you to initialize a feedback window with specific bug report text. This method assumes Bug Report is the default tab selected.

	* [NEW BUG] When using this new method the textView is given the bug report text via `setString:` this result in all the test being bold by default.

	* [CHANGE] Edited the `jrfeedback.php` slightly so that appVersion (which `JRFeedbackController` already sends out) is picked up and put into the subject line.

* **1.1**

	* [NEW] Set the user's reply address in the server-side PHP script. (Michael Zornek)

	* [FIX] Assertion failure if user clicks "Send" button and without waiting click the "Cancel" button. (Oleg Krupnov)

	* [CHANGE] Change "Submit" button to "Send" to be more respectful of the user. (Oleg Krupnov)

* **1.0** Original release