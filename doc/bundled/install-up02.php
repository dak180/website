<?
$title = "Installation - Upgrade from 0.2";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/07/08 18:09:53 $';

$metatags = '<link rel="start" href="install.php" title="Installation Contents"><link rel="contents" href="install.php" title="Installation Contents"><link rel="next" href="install-up01.php" title="Upgrading From Fink 0.1.x"><link rel="prev" href="install-first.php" title="First Time Installation">';

include "header.inc";
?>

<h1>Installation - Upgrading From Fink 0.2.x</h1>



<p>
If you already have Fink 0.2.x installed, you can update your
installation to 0.2.3 with this package.
</p>
<p>
Actually, there are two pieces that are updated independently: the
package manager and the package descriptions. It is recommended to
update the package manager first.
</p>

<h2>Updating The Package Manager</h2>
<p>
To update the package manager, run the inject.pl script in this
directory, like this:
</p>
<pre>./inject.pl</pre>
<p>
It will try to locate your Fink installation automatically. If it
can't find it, you can pass the path as a parameter, like this:
</p>
<pre>./inject.pl /sw</pre>
<p>
The script copies the package descriptions into the appropriate
directory, creates tarballs in /sw/src and then runs fink to install
the new versions of the fink and base-files packages.
</p>


<h2>Updating The Package Descriptions</h2>
<p>
If you downloaded the fink-0.2.3-full tarball, the package
descriptions are in the subdirectory pkginfo. To install them, run the
inject.pl script in that directory:
</p>
<pre>cd pkginfo
./inject.pl</pre>
<p>
This inject.pl script works just like the one for the package
manager.
</p>
<p>
You can also grab the package descriptions as a separate tarball,
packages-0.2.3. If you did that, just unpack it and run the inject.pl
script inside.
</p>


<h2>Getting X11 Sorted Out</h2>
<p>
The first thing you should do after updating the package descriptions
is getting the X11 dependencies settled. Refer to the "Getting X11
Sorted Out" section under "First Time Installation" above.
</p>
<p>
Note that if you used the xfree86-base package before Fink 0.2.2, you
may have to rebuild it to get correct dependency information. If you
have xfree86-base-4.1.0-1 (and exactly that version) installed, run:
</p>
<pre>fink rebuild xfree86-base</pre>
<p>
If you have an older version of the xfree86-base package, simply
update it to 4.1.0-1:
</p>
<pre>fink update xfree86-base</pre>


<h2>Updating Packages</h2>
<p>
The above updating steps will not update the actual packages, they
only provide you with the means to do so. The easiest way to get the
new packages is to use the 'update-all' command:
</p>
<pre>fink update-all</pre>
<p>
This will bring all installed packages to the latest version. If you
don't want to do this (it may take some time), you can update
individual packages with the 'update' command. But note that some
package require specific versions of the packages they depend
upon. Fink currently has no way to enforce this, so you may run into
problems.
</p>


<h2>Other Notes</h2>
<p>
IMPORTANT! When you update from Fink 0.2.0 or a CVS version before
0.2.1, the first thing you should do after running the inject.pl
scripts is this:
</p>
<pre>fink update dpkg</pre>
<p>
There was a bug in dpkg that could lead to partially extracted
packages. If you had unusual trouble with installed packages,
especially missing symlinks, use 'fink reinstall' on them to
re-install the .deb package files.
</p>





<?
include "footer.inc";
?>
