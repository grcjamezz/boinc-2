<?php
require_once("docutil.php");

page_head("Community and resources");

echo "
<h2>Participants</h2>
<p>
To ask questions or report bugs in the BOINC client software,
please go to the
<a href=http://setiboinc.ssl.berkeley.edu/ap/forum_help_desk.php>Message
board area</a> of the BOINC beta test.

<p>
There are several
<a href=links.php>other web sites about BOINC</a>
in various languages.

<h2>Mailing lists</h2>

The follow mailing lists are available.
Click to subscribe or post to a list.
<dl>
<dt>
<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_projects>boinc_projects</a>
<dd>
This list is for people operating BOINC projects.
Use it to ask questions, report bugs, or request enhancements to
the BOINC server software.
Announcements of modifications and upgrades to BOINC will posted here.
<dt>
<a href=http://ssl.berkeley.edu/mailman/listinfo/boinc_dev>boinc_dev</a>
<dd>
This list is for people developing, debugging or porting the BOINC software.
</dl>
<h2>Getting source code</h2>
<p>
You can get the BOINC source code in several ways:
<ul>
<li>
<a href=source/>Download</a> a tarball or .zip file
(generated nightly).
<li>
Browse the CVS repository via a
<a href=http://boinc.berkeley.edu/cgi-bin/cvsweb.cgi/>web-based interface</a>.
<li>
Access the CVS repository directly, e.g. with a command like
<pre>
cvs -d :pserver:anonymous@alien.ssl.berkeley.edu:/home/cvs/cvsroot checkout boinc
<pre>
</ul>
<h2>Bug database</h2>
<p>
You can browse the BOINC
<a href=http://setiathome.ssl.berkeley.edu/taskbase/database.cgi>bug-tracking database</a>.

<h2>News feeds</h2>
<p>
RSS-based news feeds are available from BOINC
and from several BOINC-based projects:
<ul>
<li> BOINC: http://boinc.berkeley.edu/rss_main.php
<li> BOINC alpha test: http://setiboinc.ssl.berkeley.edu/boinc_alpha/rss_main.php
<li> BOINC beta test: http://setiboinc.ssl.berkeley.edu/ap/rss_main.php
</ul>
<h2>Other</h2>
A good summary of distributed computing projects,
including those based on BOINC, is at
<a href=http://www.aspenleaf.com/distributed/>www.aspenleaf.com</a>.
<p>
For inquiries about BOINC, contact Dr. David P. Anderson,
the director of the BOINC project, at davea at ssl.berkeley.edu.
If you have problems with the BOINC software for Windows please email
Rom Walton: rwalton at ssl.berkeley.edu.

";

page_tail();
?>
