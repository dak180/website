<?
$title = "Home";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/08/13 16:43:55 $';
$is_home = 1;

$metatags = '<meta name="description" content="Fink, a distribution of Unix software for Mac OS X and Darwin">
<meta name="keywords" content="Mac OS X, Darwin, GNU, Unix, GNOME, software, distribution, Fink">
';

include "header.inc";
?>


<p>Fink is an attempt to bring the full world of Unix Open Source
software to <a href="http://www.opensource.apple.com/">Darwin</a> and
<a href="http://www.apple.com/macosx/">Mac OS X</a>. Think of it as an
add-on distribution (in the Linux sense) for these systems. Once it is
more mature, Fink might evolve into a general package manager and
add-on distribution suitable for all Unix variants.</p>

<p>Fink wants to be simple, functional and fully automated. It manages
a separate directory tree using dpkg. The fink package manager
downloads, configures, compiles and installs software from the
Internet.</p>

<p><table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top"><td width="50%">

<h2>News</h2>

<p>2001-08-13: The <a href="doc/porting/index.php">porting tips</a>
document has a new chapter on shared libraries and modules. The <a
href="doc/x11/index.php">X11</a> document was also updated
recently.</p>
<p>2001-08-01: There was a bootstrapping problem in Fink 0.2.4. It is
fixed in Fink 0.2.4a. You only need this if you're doing a first time
install, updates are not affected.</p>
<p>2001-08-01: Version 0.2.4 is released. Get it from the <a
href="download.php">download page</a>. Some highlights: The GIMP
1.2.2, sound playback and recording via esound (thanks to Shawn Hsiao
and Masanori Sekino for the CoreAudio patch), xmms 1.2.5.</p>

<h2>Status</h2>

<p>
Fink 0.2.4 was released on 1 August 2001.
Now that a base feature set is implemented, focus is shifting to
provide more packages, keep them current and improve quality.
A binary distribution is also in the works.
</p>

</td><td>&nbsp;&nbsp;&nbsp;</td><td width="50%">

<h2>Resources</h2>

<p>
This project is hosted by SourceForge.
Have a look at the <a
href="http://sourceforge.net/projects/fink/">project summary</a> for
bug tracking and other stuff.
</p>

<p>
Several <a href="lists/index.php">mailing lists</a> are available.
Common problems are addressed in the <a href="faq/index.php">FAQ
section</a>.
Other documentation can be found in the <a
href="doc/index.php">Documentation section</a>.
</p>

<h2>Feedback</h2>

<p>
Fink is still under development, so I appreciate feedback that
helps me improve Fink.
You can send it my way at <a
href="mailto:fink@chrisp.de">fink@chrisp.de</a>.
Keep in mind that, like most people on this planet, I'm usually quite
busy.
If you need help with using or troubleshooting Fink, a better place to
ask is the <a href="lists/fink-users.php">fink-users mailing list</a>.
</p>

</td></tr></table></p>


<?
include "footer.inc";
?>
