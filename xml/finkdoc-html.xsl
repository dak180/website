<?xml version="1.0" encoding="iso-8859-1"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                version="1.1">

<xsl:output method="html" indent="no" encoding="iso-8859-1" />

<!-- ***** whole document ***** -->

<xsl:template match="document">
<html><head>
<title>Fink Documentation - <xsl:value-of select="title"/></title>
</head><body>

<h1 align="center"><xsl:value-of select="title"/></h1>

<xsl:apply-templates select="preface" />

<!-- start TOC -->

<h2><xsl:text>Contents</xsl:text></h2>

<ul><xsl:text>
</xsl:text>
<xsl:for-each select="chapter">
<li><a><xsl:attribute name="href">
<xsl:text>#</xsl:text><xsl:value-of select="@filename"/>
</xsl:attribute>
<b><xsl:number format="1 " /><xsl:value-of select="title" /></b></a></li><xsl:text>
</xsl:text>

<ul><xsl:text>
</xsl:text>
<xsl:for-each select="faqentry|section">
<li><a><xsl:attribute name="href">
<xsl:text>#</xsl:text><xsl:value-of select="../@filename" /><xsl:text>.</xsl:text><xsl:value-of select="@name" />
</xsl:attribute>
<xsl:number count="chapter" format="1." /><xsl:number format="1 " />
<xsl:for-each select="question/p">
<xsl:if test='position() = 1'><xsl:call-template name="plain"/></xsl:if>
</xsl:for-each>
<xsl:value-of select="title" />
</a></li><xsl:text>
</xsl:text>
</xsl:for-each>
</ul><xsl:text>
</xsl:text>

</xsl:for-each>
</ul>

<!-- end TOC -->

<xsl:apply-templates select="chapter" />

<xsl:call-template name="copyright" />

<xsl:apply-templates select="cvsid" />

</body></html>
</xsl:template>

<!-- ***** chapter ***** -->

<xsl:template match="chapter">

<a name="{@filename}"><h2><xsl:number format="1 " /><xsl:value-of select="title"/></h2></a>

<xsl:apply-templates/>

</xsl:template>

<!-- ***** article ***** -->

<xsl:template match="article">
<html><head>
<title>Fink Documentation - <xsl:value-of select="title" /></title>
</head><body>

<h1 align="center"><xsl:value-of select="title"/></h1>

<xsl:apply-templates select="preface" />

<xsl:apply-templates select="section" />

<xsl:call-template name="copyright" />

<xsl:apply-templates select="cvsid" />

</body></html>
</xsl:template>


<!-- ***** other structure elements ***** -->

<xsl:template match="preface">
<xsl:apply-templates/>
</xsl:template>

<xsl:template match="section">
<a name="{../@filename}.{@name}"><h3>
<xsl:if test="boolean(//document)">
<xsl:number count="chapter" format="1." /><xsl:number format="1 " />
</xsl:if>
<xsl:value-of select="title"/></h3></a>
<xsl:apply-templates/>
</xsl:template>

<xsl:template match="faqentry">
<a name="{../@filename}.{@name}"><xsl:apply-templates/></a>
</xsl:template>

<xsl:template match="question">
<div class="question">
<p><b>Q<xsl:number count="chapter" format="1." /><xsl:number count="faqentry" format="1" /><xsl:text>: </xsl:text>
<xsl:for-each select="p">
<xsl:if test='position() = 1'><xsl:call-template name="plain" /></xsl:if>
</xsl:for-each>
</b></p>
<xsl:for-each select="p">
<xsl:if test='position() > 1'><xsl:apply-templates select="." /></xsl:if>
</xsl:for-each>
</div>
</xsl:template>

<xsl:template match="answer">
<div class="answer">
<p><b><xsl:text>A:</xsl:text></b><xsl:text> </xsl:text>
<xsl:for-each select="p">
<xsl:if test='position() = 1'><xsl:call-template name="plain" /></xsl:if>
</xsl:for-each>
</p>
<xsl:for-each select="p | codeblock | ul">
<xsl:if test='position() > 1'><xsl:apply-templates select="." /></xsl:if>
</xsl:for-each>
</div>
</xsl:template>

<!-- ***** block-level elements ***** -->

<xsl:template match="p">
<p><xsl:apply-templates/></p>
</xsl:template>

<xsl:template match="codeblock">
<pre><xsl:apply-templates/></pre>
</xsl:template>

<xsl:template match="ul">
<ul><xsl:apply-templates/></ul>
</xsl:template>

<xsl:template match="li">
<li><xsl:apply-templates/></li>
</xsl:template>

<xsl:template match="itemtable">
<table border="0" cellpadding="0" cellspacing="10">
<tr valign="bottom"><th align="left"><xsl:value-of select="@labelt" /></th><th align="left"><xsl:value-of select="@labeld" /></th></tr>
<xsl:apply-templates select="item" />
</table>
</xsl:template>

<xsl:template match="item">
<tr valign="top"><td><xsl:apply-templates select="itemt" /></td>
<td><xsl:apply-templates select="itemd" /></td></tr>
</xsl:template>

<xsl:template match="itemt|itemd">
<xsl:apply-templates/>
</xsl:template>

<xsl:template match="cvsid">
<xsl:text>
</xsl:text>
<p><hr/><xsl:text>Generated from </xsl:text><i><xsl:apply-templates/></i></p>
</xsl:template>


<!-- ***** character-level elements ***** -->

<xsl:template match="em">
<b><xsl:apply-templates/></b>
</xsl:template>

<xsl:template match="i">
<i><xsl:apply-templates/></i>
</xsl:template>

<xsl:template match="code|filename|literal">
<tt><nobr><xsl:apply-templates/></nobr></tt>
</xsl:template>

<xsl:template match="link">
<a href="{@url}"><xsl:apply-templates/></a>
</xsl:template>

<xsl:template match="xref">
<a><xsl:attribute name="href">#<xsl:choose><xsl:when test="boolean(@chapter)"><xsl:value-of select="@chapter" /></xsl:when><xsl:otherwise><xsl:for-each select="ancestor::chapter | ancestor::article"><xsl:value-of select="@filename"/></xsl:for-each></xsl:otherwise></xsl:choose><xsl:if test="boolean(@section)">.<xsl:value-of select="@section" /></xsl:if></xsl:attribute>
<xsl:apply-templates/></a>
</xsl:template>


<!-- *** special stuff *** -->

<xsl:template match="title|shorttitle">
</xsl:template>

<xsl:template name="plain">
<xsl:apply-templates/>
</xsl:template>


<xsl:template name="copyright">
<xsl:text>
</xsl:text>
<hr/>
<h2>Copyright Notice</h2><xsl:text>
</xsl:text><p><xsl:text>Copyright (c) 2001 Christoph Pfisterer.
You may distribute this document in print for private purposes,
provided the document and this copyright notice remain complete and
unmodified. Any commercial reproduction and any online publication
requires the explicit consent of the author.</xsl:text></p>
</xsl:template>



</xsl:stylesheet>
