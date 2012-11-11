<?
$title = "Utilisation de X11";
$cvs_author = 'Author: gecko2';
$cvs_date = 'Date: 2012/11/11 15:20:18';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Utilisation de X11 Contents"><link rel="next" href="intro.php?phpLang=fr" title="Introduction">';


include_once "header.fr.inc";
?>
<h1>Utilisation de X11 sous Darwin et Mac OS X</h1>
<p>Ce document traite de l'utilisation de X11, XFree86, et Xtools sur les systèmes Mac OS X et Darwin d'Apple. Il commence par une introduction et l'historique du développement, puis décrit la situation actuelle et les nombreuses options d'utilisation de X11 avec ou sans Fink.</p>
<h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="intro.php?phpLang=fr"><b>1 Introduction</b></a><ul><li><a href="intro.php?phpLang=fr#def-x11">1.1 Qu'est-ce que X11 ?</a></li><li><a href="intro.php?phpLang=fr#def-macosx">1.2 Qu'est-ce que Mac OS X ?</a></li><li><a href="intro.php?phpLang=fr#def-darwin">1.3 Qu'est-ce que Darwin ?</a></li><li><a href="intro.php?phpLang=fr#def-xfree86">1.4 Qu'est-ce que XFree86 ?</a></li><li><a href="intro.php?phpLang=fr#def-xtools">1.5 Qu'est-ce que Xtools ?</a></li><li><a href="intro.php?phpLang=fr#client-server">1.6 Client et Serveur</a></li><li><a href="intro.php?phpLang=fr#rootless">1.7 Que signifie sans racine (rootless) ?</a></li><li><a href="intro.php?phpLang=fr#wm">1.8 Qu'est-ce qu'un gestionnaire de fenêtres ?</a></li><li><a href="intro.php?phpLang=fr#desktop">1.9 Que sont Quartz/Aqua, Gnome et KDE ?</a></li></ul></li><li><a href="history.php?phpLang=fr"><b>2 Historique</b></a><ul><li><a href="history.php?phpLang=fr#early">2.1 Genèse</a></li><li><a href="history.php?phpLang=fr#xonx-forms">2.2 Création de XonX</a></li><li><a href="history.php?phpLang=fr#root-or-not">2.3 Être ou ne pas être racine</a></li></ul></li><li><a href="inst-xfree86.php?phpLang=fr"><b>3 Récupération et installation de X11</b></a><ul><li><a href="inst-xfree86.php?phpLang=fr#fink">3.1 Installation de X11 via Fink</a></li><li><a href="inst-xfree86.php?phpLang=fr#apple-binary">3.2 Binaires d'Apple</a></li><li><a href="inst-xfree86.php?phpLang=fr#official-binary">3.3 Binaires officiels</a></li><li><a href="inst-xfree86.php?phpLang=fr#official-source">3.4 Source Officiel</a></li><li><a href="inst-xfree86.php?phpLang=fr#latest-cvs">3.5 Source le plus récent</a></li><li><a href="inst-xfree86.php?phpLang=fr#switching-x11">3.6 Remplacement de X11</a></li><li><a href="inst-xfree86.php?phpLang=fr#fink-summary">3.7 Résumé des paquets Fink disponibles</a></li></ul></li><li><a href="run-xfree86.php?phpLang=fr"><b>4 Lancement de X11</b></a><ul><li><a href="run-xfree86.php?phpLang=fr#darwin">4.1 Darwin</a></li><li><a href="run-xfree86.php?phpLang=fr#macosx-41">4.2 Mac OS X + XFree86 4.x.y</a></li><li><a href="run-xfree86.php?phpLang=fr#starting-xorg">4.3 Lancement de X.org</a></li><li><a href="run-xfree86.php?phpLang=fr#starting-apples-x11">4.4 Lancement de X11 d'Apple</a></li><li><a href="run-xfree86.php?phpLang=fr#applex11tools">4.5 applex11tools</a></li><li><a href="run-xfree86.php?phpLang=fr#xinitrc">4.6 Fichier .xinitrc</a></li><li><a href="run-xfree86.php?phpLang=fr#oroborosx">4.7 OroborOSX</a></li></ul></li><li><a href="xtools.php?phpLang=fr"><b>5 Xtools</b></a><ul><li><a href="xtools.php?phpLang=fr#install">5.1 Installation de Xtools</a></li><li><a href="xtools.php?phpLang=fr#run">5.2 Lancement de Xtools</a></li><li><a href="xtools.php?phpLang=fr#opengl">5.3 Notes sur OpenGL</a></li></ul></li><li><a href="other.php?phpLang=fr"><b>6 Autres possibilités pour X11</b></a><ul><li><a href="other.php?phpLang=fr#vnc">6.1 VNC</a></li><li><a href="other.php?phpLang=fr#wiredx">6.2 WiredX</a></li><li><a href="other.php?phpLang=fr#exodus">6.3 eXodus</a></li></ul></li><li><a href="trouble.php?phpLang=fr"><b>7 Résolution de problèmes engendrés par XFree86</b></a><ul><li><a href="trouble.php?phpLang=fr#immedate-quit">7.1 Après lancement, XDarwin se termine ou se plante quasi immédiatement</a></li><li><a href="trouble.php?phpLang=fr#black">7.2 Icônes noires dans le panneau GNOME ou dans le menu d'une application GNOME</a></li><li><a href="trouble.php?phpLang=fr#keyboard">7.3 Le clavier ne fonctionne pas sous XFree86</a></li><li><a href="trouble.php?phpLang=fr#delete-key">7.4 La touche retour arrière ne fonctionne pas</a></li><li><a href="trouble.php?phpLang=fr#locale">7.5 "Warning: locale not supported by C library"</a></li></ul></li><li><a href="tips.php?phpLang=fr"><b>8 Conseils d'utilisation</b></a><ul><li><a href="tips.php?phpLang=fr#terminal-app">8.1 Lancement d'applications X11 à partir de Terminal.app</a></li><li><a href="tips.php?phpLang=fr#open">8.2 Lancement d'applications Aqua à partir d'un xterm</a></li><li><a href="tips.php?phpLang=fr#copy-n-paste">8.3 Copier-coller</a></li></ul></li></ul>
<!--Generated from $Fink: x11.fr.xml,v 1.27 2012/11/11 15:20:18 gecko2 Exp $-->
<? include_once "../../footer.inc"; ?>


