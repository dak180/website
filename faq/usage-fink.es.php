<?
$title = "P.M.F. - Fink Usage";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/07/15 18:35:34';
$metatags = '<link rel="contents" href="index.php?phpLang=es" title="P.M.F. Contents"><link rel="next" href="comp-general.php?phpLang=es" title="Compile Problems - General"><link rel="prev" href="upgrade-fink.php?phpLang=es" title="Upgrading Fink (version-specific troubleshooting)">';


include_once "header.es.inc";
?>
<h1>P.M.F. - 5. Installing, Using and Maintaining Fink</h1>
    
    
    <a name="what-packages">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.1: ¿Cómo puedo averiguar que paquetes apoya Fink?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Since Fink 0.2.3, there is the <code>list</code> command. It produces a list of all packages known to your Fink installation. Example:</p><pre>fink list</pre><p>If you're using the binary distribution, <code>dselect</code> gives you a nice browsable listing of available packages. Note that you must run it as root if you want to select and install packages from within dselect.</p><p>There's also the <a href="http://fink.sourceforge.net/pdb/">package database</a> at the
        website.</p></div>
    </a>
    <a name="proxy">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.2: Estoy atrás de un firewall, ¿cómo configuro Fink para usar un HTTP proxy?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> The <code>fink</code> command supports explicit proxy settings that are passed on to <code>wget</code>/<code>curl</code>. If you were not asked for proxies on first time installation, you can run <code>fink configure</code> to set it up. You can also run that command at any time to reconfigure the <code>fink</code> command. If you  followed the instructions in the installation guide, and use  <code>/sw/bin/init.csh</code> (or <code>/sw/bin/init.sh</code>), then <code>apt-get</code> and <code>dselect</code> also will use these proxy settings. Make sure that you put the protocol in front of the proxy, e.g.</p><pre>ftp://proxy.yoursite.somewhere</pre><p>If you are still having problems, go into System Preferences, select the Network pane, select the Proxies tab, and make sure that the box labeled "Use Passive FTP Mode (PASV)" is checked.</p></div>
    </a>
    <a name="firewalled-cvs">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.3: ¿Cómo actualizo paquetes disponibles  de CVS cuando estoy atrás de un firewall?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> The package <b>cvs-proxy</b> can tunnel through HTTP proxies.</p><ul>
          <li>
            <p>First download the <a href="http://cvs.sourceforge.net/cgi-bin/viewcvs.cgi/fink/dists/10.2/unstable/main/finkinfo/devel/">cvs-proxy</a>
          files (an .info file and a .patch file) and place them into your
          local tree (i.e. /sw/fink/dists/local/main/finkinfo/).</p>
          </li>
          <li>
            <p>Install the <b>cvs-proxy</b> package with the command:</p>
            <p>
              <code>fink install <b>cvs-proxy</b>
              </code>
            </p>
          </li>
          <li>
            <p>Packages are then updated with the commands:</p>
            <p>
              <code>fink selfupdate-cvs</code>
            </p>
            <p>
              <code>fink
          update-all</code>
            </p>
          </li>
        </ul><p>If fink is not configured to use your proxy, change the settings
        using:</p><p>
          <code>fink configure</code>.</p></div>
    </a>
    <a name="moving">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.4: ¿Puedo mover Fink a otro lugar después de la instalación?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> No. Well, of course you can move the files using mv or the Finder,
        but 99% of the programs will stop working when you do. That's because
        basically all Unix software depends on hardcoded paths to find data
        files, libraries and other stuff.</p></div>
    </a>
    <a name="moving-symlink">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.5: Si muevo Fink después de la instalación y proveo un symlink a la ubicación vieja, ¿funcionará?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Maybe. The general expectation is that it should work, but there
        may be hidden traps somewhere.</p></div>
    </a>
    <a name="removing">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.6: ¿Cómo puedo desinstalar todo el Fink?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Almost all files installed by Fink are in /sw (or wherever you
        chose to install it). Thus in order to get rid of Fink, enter this
        command:</p><pre>sudo rm -rf /sw</pre><p>The only exception to this rule is XFree86. If you installed
        XFree86 through Fink (i.e., you installed the <code>xfree86</code> or
        <code>xfree86-rootless</code> packages, instead of using
        <code>system-xfree86</code>) and want to remove it, you will need
        additionally to enter this:</p><pre>sudo rm -rf /usr/X11R6 /etc/X11 /Applications/XDarwin.app</pre><p>If you aren't planning to reinstall Fink you also will want to
        remove the "<code>source /sw/bin/init.csh</code>" line you added to
        your <code>.cshrc</code> file or the "<code>source
        /sw/bin/init.sh</code>" line you added to your
        <code>.bashrc</code> file, whichever is appropriate to your
        setup, using a text editor.</p></div>
    </a>
    <a name="bindist">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.7: El paquete de base de datos en el website enlista paquete xxx, pero apt-get y dselect no saben nada acerca de ese paquete. ¿Quién está mintiendo?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Both are correct. The <a href="http://fink.sourceforge.net/pdb/">package database</a> knows
        about every package, including those that are still in the unstable
        section. The <code>dselect</code> and <code>apt-get</code> tools on
        the other hand only know about the packages available as precompiled
        binary packages. Many packages are not available in precompiled form
        through these tools for a variety of reasons. A package must be in the
        "stable" section of the latest point release to be considered, and it
        must pass additional checks for policy compliance as well as licensing
        and patent restrictions.</p><p>If you want to install a package that is not available via
        <code>dselect</code> / <code>apt-get</code>, you have to compile it
        from source using <code>fink install <b>packagename</b>
          </code>.
        Make sure you have the Developer Tools installed before you try this.
        (If there is no installer for the Developer Tools in your
        <code>/Applications</code> folder, you can get them from the <a href="http://connect.apple.com/">Apple Developer Connection</a>
        after free registration.) See also the question about unstable
        below.</p></div>
    </a>
    <a name="unstable">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.8: Existe este paquete en unstable que quiero instalar, pero el comando fink dice "no encuentro el paquete" ('no package found'). ¿Cómo lo puedo instalar?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> First make sure you understand what 'unstable' means. Packages in
        the unstable tree usually have not been tested by more than a few
        people. For that reason, Fink doesn't search the unstable tree by
        default. If you do enable unstable, please remember to e-mail the
        maintainer if something works (or even if it doesn't). Feedback from
        users like you is what we use to determine if something is ready for
        stable! To find out the maintainer of a package, run <code>fink info
        &lt;packagename&gt;</code>.</p><p>Packages often have dependencies, and packages in unstable often
        depend on other packages in unstable. For that reason, it is best to
        activate all of unstable.</p><p>If you want Fink to use all of unstable, edit
        <code>/sw/etc/fink.conf</code>, add <code>unstable/main</code>
        and <code>unstable/crypto</code> to the <code>Trees:</code> line, and
        then run <code>fink selfupdate; fink index</code>.</p><p>If you only want one or two specific packages, and nothing else
        from unstable, then you need to switch over to CVS updating (i.e. use
        <code>fink selfupdate-cvs</code>), because rsync only updates the
        trees that are active in your <code>fink.conf</code>. Edit
        <code>/sw/etc/fink.conf</code> and add <code>local/main</code>
        to the <code>Trees:</code> line, if not present. Then you'll need to
        run <code>fink selfupdate</code> to download the package description
        files. Now copy the relevant <code>.info</code> files (and their
        associated <code>.patch</code> files, if there are any) from
        <code>/sw/fink/dists/unstable/main/finkinfo</code> (or
        <code>/sw/fink/dists/unstable/crypto/finkinfo</code>) to
        <code>/sw/fink/dists/local/main/finkinfo</code>. However, note
        that your package may depend on other packages (or particular
        versions) which are also only in unstable. You will have to move their
        <code>.info</code> and <code>.patch</code> files as well. After you
        move all of the files, make sure to run <code>fink index</code>, so
        that Fink's record of available packages is updated. Once you're done
        you can switch back to rsync (<code>fink selfupdate-rsync</code>) if
        you want.</p></div>
    </a>
    <a name="sudo">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.9: Estoy cansado de tener que teclear mi contraseña en sudo una y otra vez  ¿hay alguna forma de evitar esto?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If you're not paranoid, you can configure sudo to not ask you for a
        password. To do this, run <code>visudo</code> as root and add a line like this:</p><pre>username ALL = NOPASSWD: ALL</pre><p>Replace <code>username</code> with your actual username, of course.
        This line allows you to run any command via sudo without typing your
        password.</p></div>
    </a>
    <a name="exec-init-csh">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.10: Cuando trato de correr init.csh o init.sh me aparece un error de  "Permiso denegado" ("Permission denied"). ¿Qué estoy haciendo mal?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> init.csh and init.sh are not supposed to be run like normal
        commands. These files set environment variables like PATH and MANPATH
        in your shell. To have a lasting effect on the shell, it must be
        processed with the <code>source</code> command for csh/tcsh, or with
        the <code>.</code> command for bash/zsh, like this:</p><p>for csh/tcsh:</p><pre>source /sw/bin/init.csh</pre><p>for bash/zsh:</p><pre>. /sw/bin/init.sh</pre></div>
    </a>
    <a name="dselect-access">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.11: Ayuda! Usé el menú de entrada de "(A)cces" en dselect y ahora ya  no puedo bajar paquetes!</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> You probably pointed apt at a Debian mirror, which of course
        doesn't have the Fink files. You can fix this manually or through
        dselect. To fix it manually, edit the file
        <code>/sw/etc/apt/sources.list</code> in a text editor as root. Remove
        lines that mention debian.org and replace them with these:</p><pre>deb http://us.dl.sourceforge.net/fink/direct_download release main crypto
deb http://us.dl.sourceforge.net/fink/direct_download current main crypto</pre><p>(Or if you live in Europe, you can use
        <code>eu.dl.sourceforge.net</code> instead of
        <code>us.dl.sourceforge.net</code>)</p><p>To fix it through dselect, run "[A]ccess" again, choose the "apt"
        method and enter the following info:</p><p>URL: http://us.dl.sourceforge.net/fink/direct_download -
        Distribution: release - Components: main crypto</p><p>Then, say you want to add another source and repeat the process
        with "current" instead of "release".</p><p>A fixed version of the apt package (which provides the
        configuration script as a plug-in for dselect) is making it's way
        through CVS now.</p></div>
    </a>
    <a name="cvs-busy">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.12: Cuando trato de correr "fink selfupdate" o "fink selfupdate-cvs", me sale el error <code> 
                   "Updating using CVS failed.  Check the error messages above.".</code>"</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If the message is</p><pre>Can't exec "cvs": No such file or directory at 
/sw/lib/perl5/Fink/Services.pm line 216, &lt;STDIN&gt; line 3.
### execution of cvs failed, exit code -1</pre><p>then you need to install the Developer Tools.</p><p>If, on the other hand, the last line is</p><pre>### execution of su failed, exit code 1</pre><p>you'll need to look further back in the output to see the error. If
        you see a message that your connection was refused:</p><pre>(Logging in to anonymous@cvs.sourceforge.net)
CVS password:
cvs [login aborted]: connect to cvs.sourceforge.net:2401 failed: 
Connection refused
### execution of su failed, exit code 1
Failed: Logging into the CVS server for anonymous read-only access failed.</pre><p>or a message like the following:</p><pre>cvs [update aborted]: recv() from server cvs.sourceforge.net: 
Connection reset by peer 
### execution of su failed, exit code 1 
Failed: Updating using CVS failed. Check the error messages above.</pre><p>or</p><pre>cvs [update aborted]: End of file received from server</pre><p>or</p><pre>cvs [update aborted]: received broken pipe signal</pre><p>then it's likely that the cvs servers are overloaded and you have
        to try the update later.</p><p>Another possibility is that you have some bad permissions in your
        CVS directories, in which case you get "Permission denied"
        messages:</p><pre>cvs update: in directory 10.2/stable/main: 
cvs update: cannot open CVS/Entries for reading: No such file or directory
cvs server: Updating 10.2/stable/main 
cvs update: cannot write 10.2/stable/main/.cvsignore: Permission denied
cvs [update aborted]: cannot make directory 10.2/stable/main/finkinfo: 
No such file or directory 
### execution of su failed, exit code 1 Failed: 
Updating using CVS failed. Check the error messages above.</pre><p>In this case you need to reset your cvs directories. Use the
        command:</p><pre>sudo find /sw/fink -type d -name 'CVS' -exec rm -rf {}\
; fink selfupdate-cvs</pre><p>If, you don't see either of the above messages, then this almost
        always means you've modified a file in your /sw/fink/dists tree and
        now the maintainer has changed it. Look further back in the
        selfupdate-cvs output for lines that start with "C", like so:</p><pre>C 10.2/unstable/main/finkinfo/libs/db31-3.1.17-6.info 
... (other info and patch files) ... 
### execution of su failed, exit code 1 
Failed: Updating using CVS failed. Check the error messages above.</pre><p>The "C" means CVS had a conflict in trying to update the latest
        version.  The fix is to delete any files that show up as starting with "C" in
        the output of selfupdate-cvs, and try again:</p><pre>sudo rm /sw/fink/10.2/unstable/main/finkinfo/libs/db31-3.1.17-6.info
fink selfupdate-cvs</pre></div>
    </a>
    <a name="kernel-panics">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.13: Cuando uso Fink, my equipo se congela /  se produce un kernel panic / muere. Ayuda!</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> A number of recent reports on the <a href="http://sourceforge.net/mailarchive/forum.php?forum=fink-users">fink-users
        mailing list</a> have indicated problems (including kernel panics
        and infinite hangs during patching) when using Fink to compile
        packages while anti-virus software is installed. You may need to
        switch off any anti-virus software before using Fink.</p></div>
    </a>
    <a name="not-found">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.14: Estoy tratando de instalar un paquete, pero Fink no puede bajarlo. El servidor muestra una version mas reciente del paquete que lo que tiene Fink. ¿Qué hago?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> The package sources get moved around by the upstream sites when new
        versions are released.</p><p>The first thing you should do is run <code>fink selfupdate</code>.
        It may be that the package maintainer has already fixed this, and you
        will get an updated package description with either a more recent
        version or a revised download URL.</p><p>If this doesn't work, most sources are available on <a href="http://distfiles.master.finkmirrors.net/">http://distfiles.master.finkmirrors.net/</a>
        (thanks to Rob Braun) , and you can run <code>fink configure</code> to
        choose to search "Master" source mirrors so that Fink will
        automatically look there.</p><p>If this doesn't work, please let the package maintainer (available
        from "<code>fink describe <b>packagename</b>
          </code>") know that the
        URL is broken; not all maintainers read the mailing lists all of the
        time.</p><p>To get a usable source, first try hunting around the remote site in
        other directories for the same version of the source that Fink wants
        (e.g. in an "old" directory). Keep in mind, though, that some remote
        sites like to trash the old versions of their packages. If the
        official site doesn't have it, then try a web search--sometimes there
        are unofficial sites that have the tarball you want. Another place to
        look is <a href="http://us.dl.sourceforge.net/fink/direct_download/source/">http://us.dl.sourceforge.net/fink/direct_download/source/</a>,
        which is where Fink stores sourcefiles from packages that have been
        released in binary form. If all of the above fail, then you might
        consider posting on the <a href="http://sourceforge.net/mailarchive/forum.php?forum=fink-users">fink-users
        mailing list</a> to ask if anybody has the old source available to
        give you.</p><p>Once you locate the proper source tarball, download it manually,
        and then move the file into your Fink source location (i.e. for a
        default Fink install, "<code>sudo mv <b>package-source.tar.gz</b>
        /sw/src/</code>". Then use '<code>fink install <b>packagename</b>
          </code>' as normal.</p><p>If you can't get the source file, then you'll have to wait for the
        maintainer to deal with the problem. They may either post a link to
        the old source, or update the .info and .patch files to use the newer
        version.</p></div>
    </a>
    <a name="fink-not-found">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.15: Aparece errores de "command not found" cuando corro Fink o cualquier cosa que haya instalado con Fink.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If this always happens, then you may have inadvertently modified (or failed to modify) your startup scripts. Run the
        <code>/sw/bin/pathsetup.command</code> script (either by
        double-clicking in the Finder or in a terminal), which will attempt to
        detect your startup configuration. You'll then need to open a new
        terminal session so that your environment settings are loaded.  <b>Note:</b>  for <code>fink-0.18.3</code> and <code>fink-0.19.2</code>, the script has been changed to <code>/sw/bin/pathsetup.sh</code>, and must be run in a terminal.</p><p>On the other hand, if you only have problems in the Apple X11
        terminal, this probably means that you need to create a <a href="http://fink.sourceforge.net/doc/x11/run-xfree86.php#xinitrc">.xinitrc</a>
        file and add the line</p><pre>. /sw/bin/init.sh</pre><p>near the beginning (i.e. before any programs get run). Restart X11
        (if running) after you do this.</p></div>
    </a>
    <a name="invisible-sw">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.16: Quiero esconder / sw en el Finder para evitar que los usuarios dañen la instalación de Fink.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> You can indeed do this. If you have the Development Tools
        installed, then you can run the following command:</p><pre>sudo /Developer/Tools/SetFile -a V /sw</pre><p>This makes /sw invisible, just like the standard system folders
        (/usr, etc.). If you don't have the Developer Tools, there are various
        third-party applications that let you manipulate file attributes--you
        need to set /sw to be invisible.</p></div>
    </a>
    <a name="install-info-bad">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.17: No puedo instalar nada, porque me sale el siguiente error: "install-info: unrecognized option `--infodir=/sw/share/info"</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> This usually is due to a problem in your PATH. In a terminal window
        type:</p><pre>printenv PATH</pre><p>If <code>/sw/sbin</code> doesn't appear at all, then you
        need to set your environment up as per the <a href="http://fink.sourceforge.net/doc/users-guide/install.php#setup">instructions</a>
        in the Users Guide. If <code>/sw/sbin</code> is there, but
        there are other directories ahead of it (e.g.
        <code>/usr/local/bin</code>), then you will either want to
        reorder your PATH so that <code>/sw/sbin</code> is near the
        beginning. Or if you really need the other directory to be before
        <code>/sw/sbin</code>,  and this former directory includes another install-info directory, then you'll want to temporarily rename this <code>install-info</code> subdirectory when you use Fink.</p></div>
    </a>
    <a name="bad-list-file">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.18: No puedo instalar o remover  nada, por un problema con "files list file" ("el archivo de la lista de archivos").</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Typically these errors take the form:</p><pre>files list file for package <b>packagename</b> contains empty filename</pre><p>or</p><pre>files list file for package <b>packagename</b> is missing final newline</pre><p>This can be fixed, with a little work. If you have the .deb file
        for the offending package currently available on your system, then
        check its integrity by running</p><pre>dpkg --contents <b>full-path-to-debfile</b>
        </pre><p>e.g.</p><pre>dpkg --contents /sw/fink/debs/libgnomeui2-dev_2.0.6-2_darwin-powerpc.deb</pre><p>If you get back a listing of directories and files, then your .deb
        is OK. If the output is something other than directories and files, or
        if you don't have the .deb file, you can still proceed because the
        error doesn't interfere with builds.</p><p>If you have been installing from the binary distribution or you
        know for sure that the version in the binary distribution is the same
        as what you have installed (e.g. by checking the <a href="http://fink.sourceforge.net/pdb/index.php">package
        database</a>), then you can get a .deb file by running <code>sudo
        apt=get install --reinstall --download-only <b>packagename</b>
          </code>. Otherwise you can build one yourself by running <code>fink
        rebuild <b>packagename</b>
          </code>, but it won't install yet.</p><p>Once you have a valid .deb file, then you can reconstitute the
        file. First become root by using <code>sudo -s</code> (enter your
        administrative user password if necessary), and then use the following
        command:</p><pre>dpkg -c <b>full-path-to-debfile</b> | awk '{if ($6 == "./"){ print "/."; } \
else if (substr($6, length($6), 1) == "/")\
{print substr($6, 2, length($6) - 2); } \
else { print substr($6, 2, length($6) - 1);}}'\ 
&gt; /sw/var/lib/dpkg/info/<b>packagename</b>.list</pre><p>e.g.</p><pre>dpkg -c /sw/fink/debs/libgnomeui2-dev_2.0.6-2_darwin-powerpc.deb | awk \
'{if ($6 == "./") { print "/."; } \
else if (substr($6, length($6), 1) == "/") \
{print substr($6, 2, length($6) - 2); } \
else { print substr($6, 2, length($6) - 1);}}' \ 
&gt; /sw/var/lib/dpkg/info/libgnomeui2-dev.list</pre><p>What this does is to extract the contents of the .deb file, remove
        everything but the filenames, and write these to the .list file.</p></div>
    </a>
    <a name="error-nineteen">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.19: Cuando uso el paquete de instalación binario de Fink, me aparece un gran "19" en la ventana y no puedo instalar nada.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> The number 19 appears because your OS X system is localized to a
        language other than English. (This is a bug in Apple's Installer, that
        it doesn't just show you the English-language error message.)</p><p>The English language error message corresponding to number 19
        is</p><p>"A root directory /sw exists. Please see the Read Me file for
        update instructions, or for information on installing Fink on a
        separate volume."</p><p>You may be getting this error if you've used Fink before, and
        didn't delete <code>/sw</code>. If you haven't installed Fink
        before, the most likely cause of this is that you installed the Virex
        program available for free to .Mac users. As explained on Fink's
        webpage, Virex is incompatible with Fink (due to the Virex folks
        having made errors in the way they set things up).</p></div>
    </a>
    <a name="dselect-garbage">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.20: Me aparece un montón de basura cuando selecciono paquetes en <code>dselect</code>. ¿Cómo lo puedo usar?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> There are issues between <code>dselect</code> and
        <code>Terminal.app</code>. A workaround is to enter the
        following command</p><p>tcsh users:</p><pre>setenv TERM xterm-color</pre><p>bash users:</p><pre>export TERM=xterm-color</pre><p>before you run <code>dselect</code>. You may want to put
        this in your startup file (e.g. <code>.cshrc</code> |
        <code>.profile</code>) so that it gets run all of the time.</p></div>
    </a>
    <a name="perl-undefined-symbol">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.21: W ¿Por qué me aparecen un montón de errores con "dyld: perl undefined symbols" cuando corro comandos Fink?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If you see an error sequence like the following:</p><pre>dyld: perl Undefined symbols: 
_Perl_safefree
_Perl_safemalloc 
_Perl_saferealloc 
_Perl_sv_2pv 
_perl_call_sv
_perl_eval_sv 
_perl_get_sv</pre><p>then what has probably happened is that you updated Perl to a new
        version and now <code>storable-pm</code> needs to be updated.
        You should update Fink. During the process you will be prompted to
        install either <code>perl-core</code> or
        <code>system-perl</code>; choose the latter. In addition,
        <code>storable-pm</code> should also get updated.</p><p>For OS 10.1.x, perform the following commands (you'll need the
        Developer Tools):</p><pre>sudo mv /sw/lib/perl5/darwin/Storable.pm /tmp 
sudo mv /sw/lib/perl5/darwin/auto/Storable /tmp 
fink rebuild storable-pm 
fink selfupdate-cvs</pre></div>
    </a>
    <a name="cant-upgrade">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.22: No puedo actualizar la versión Fink.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> There are <a href="http://fink.sourceforge.net/download/fix-upgrade.php">special
        instructions</a> to follow under these circumstances.</p></div>
    </a>
    <a name="spaces-in-directory">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.23: ¿Puedo colocar a Fink en un volumen o directorio con un espacio en su nombre?</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> We recommend against putting your Fink directory tree inside a
        directory with spaces in its name. It's just not worth the hassle.</p></div>
    </a>
    <a name="packages-gz">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.24: Cuando trato de hacer una actualización binaria, aparecen muchos mensajes con "File not found"  ("archivo no encontrado").</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If you see something like the following:</p><pre>Err file: local/main Packages 
File not found 
Ign file: local/main Release 
Err file: stable/main Packages 
File not found 
Ign file: stable/main Release 
Err file: stable/crypto Packages 
File not found 
Ign file: stable/crypto Release 
Hit http://us.dl.sourceforge.net 10.3/release/main Packages 
Hit http://us.dl.sourceforge.net 10.3/release/main Release 
Hit http://us.dl.sourceforge.net 10.3/release/crypto Packages 
Hit http://us.dl.sourceforge.net 10.3/release/crypto Release 
Hit http://us.dl.sourceforge.net 10.3/current/main Packages 
Hit http://us.dl.sourceforge.net 10.3/current/main Release 
Hit http://us.dl.sourceforge.net 10.3/current/crypto Packages 
Hit http://us.dl.sourceforge.net 10.3/current/crypto Release 
Failed to fetch file:/sw/fink/dists/local/main/binary-darwin-powerpc/Packages
File not found 
Failed to fetch file:/sw/fink/dists/stable/main/binary-darwin-powerpc/Packages
File not found
Failed to fetch file:/sw/fink/dists/stable/crypto/binary-darwin-powerpc/Packages
File not found 
Reading Package Lists... Done 
Building Dependency Tree...Done 
E: Some index files failed to download, 
they have been ignored, or old ones used instead. 
update available list script returned error exit status 1.</pre><p>then all you need to do is run <code>fink scanpackages</code>. This
        generates the files that aren't being found.</p></div>
    </a>
    <a name="wrong-tree">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.25: Cambie mi sistema OS y las herramientas de desarrollo, pero Fink no reconoce el cambio.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> When changing the Fink distribution (of which the source and binary
        distros are subsets), Fink needs to be told that this has happened. To
        do this, you can run a script that normally gets run when you first
        install Fink:</p><pre>/sw/lib/fink/postinstall.pl</pre><p>Doing this will point Fink to the correct place.</p></div>
    </a>
    <a name="seg-fault">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.26: Me salen errores con las aplicaciones de  <code>gzip</code> - <code>dpkg-deb</code> del paquete de fileutils! Ayuda!</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Errors of the form:</p><pre>gzip -dc /sw/src/dpkg-1.10.9.tar.gz | /sw/bin/tar -xf - 
### execution of gzip failed, exit code 139</pre><p>or</p><pre>gzip -dc /sw/src/aquaterm-0.3.0a.tar.gz | /sw/bin/tar -xf -
gzip: stdout: Broken pipe 
### execution of gzip failed, exit code 138</pre><p>or</p><pre>dpkg-deb -b root-base-files-1.9.0-1 /sw/fink/dists/unstable/main/binary-darwin-powerpc/base

### execution of dpkg-deb failed, exit code 1
Failed: can't create package base-files_1.9.0-1_darwin-powerpc.deb</pre><p>or segmentation faults when running utilities from<code>
        fileutils</code>, e.g. <code>ls</code> or <code>mv</code>, are likely
        to be due to a prebinding error in a library, and can be fixed by
        running</p><pre>sudo /sw/var/lib/fink/prebound/update-package-prebinding.pl -f</pre></div>
    </a>
    <a name="pathsetup-keeps-running">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.27: Cuando abro una ventana terminal, me sale un mensaje  que dice "Your  environment seems to be correctly set up for Fink already." y se desconecta.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> What happened is that somehow the OSX Terminal program has been
        told to run <code>/sw/bin/pathsetup.command</code> every time you log
        in. You can fix this by removing the Preferences file,
        <code>~/Library/Preferences/com.apple.Terminal.plist</code>.</p><p>If you have other preferences that you want to keep, you can edit
        the file with a text editor and remove the reference to
        <code>/sw/bin/pathsetup.command</code>.</p></div>
    </a>
    <a name="ext-drive">
      <div class="question"><p><b><? echo FINK_Q ; ?>5.28: Tengo a Fink instalado afuera  de la  partición principal y no puedo actualizar el paquete Fink desde la fuente. Hay errores involucrando <q>chowname</q>.</b></p></div>
      <div class="answer"><p><b><? echo FINK_A ; ?>:</b> If your error looks like:</p><pre>This first test is designed to die, so please ignore the error
message on the next line.
# Looks like your test died before it could output anything.
./00compile............................ok
./Base/initialize......................ok
./Base/param...........................ok
./Base/param_boolean...................ok
./Command/cat..........................ok
./Command/chowname.....................#     
Failed test (./Command/chowname.t at line 27)
#          got: 'root'
#     expected: 'nobody'</pre><p>then you need to run <b>Get Info</b> on the drive/partition where Fink is installed and unselect the "Ignore ownership" button.</p></div>
    </a>
  <p align="right"><? echo FINK_NEXT ; ?>:
<a href="comp-general.php?phpLang=es">6. Compile Problems - General</a></p>
<? include_once "../footer.inc"; ?>


