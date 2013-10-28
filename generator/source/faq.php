<?php $page = "FAQ" ?>
<?php include("header.php") ?>
		
		<h1>FAQ</h1>
	
		<div class="divider"></div>
		
		<div id="main"> 
			<h2>How do I share things with Frenzy?</h2> 
			<p>To share files or folders, select them in the Finder/iPhoto/iTunes and then hit the shortcut (Ctrl+Option+S is the default). Sharing a URL works the same way, goto a site in your web browser and hit the shortcut. Firefox, Safari, OmniWeb, Opera, Camino, NetNewsWire and Chrome are all supported.</p> 
			<p>You can also drag &amp; drop files, links, and text onto the Frenzy status item.</p> 

			<h2>How do I setup a Dropbox shared folder to use Frenzy with?</h2> 
			<p>See the steps outlined <a href="https://www.dropbox.com/help/19">here</a></p> 

			<h2>My shared folders are in a subfolder, can I use them with Frenzy?</h2> 
			<p>Yes! Go into the preferences and on the Dropbox tab click the Choose Folder... button. Then choose the folder you want to use.</p> 

			<h2>How do I uninstall Frenzy?</h2> 
			<p>See the steps outlined <a href="<?=$path_prefix?>uninstall">here</a></p> 

			<h2>I lost/uninstalled the Firefox plugin... How do I get it back?</h2> 
			<p>You can download the extension <a href="frenzy.xpi">here</a></p> 

			<h2>How does this work?</h2> 
			<p>Frenzy stores JSON feeds inside hidden folders (.frenzy) inside the Dropbox shared folders that you choose to use Frenzy with.</p> 

			<h2>Where are my old feed items?</h2> 
			<p>Frenzy currently displays 25 items in your main feed, items beyond this are still kept, but not displayed. In future versions of Frenzy there will be a way to look at older items.</p> 

			<h2>Will this be available on the Mac app store?</h2> 
			<p>We're working on it.</p> 

			<h2>Why does Frenzy connect to a timeserver on startup?</h2> 
			<p>In order to combine you and your friends feed items together and then show them in the correct order there has to be some agreement on the time they were sent. If your clock is set wrong, the timestamps on the items you share will also be wrong and feed items will show in the wrong order. Frenzy solves this by connecting to a NIST timeserver and calculating your clock skew.</p> 
			
			<h2>What was the motivation behind Frenzy?</h2> 
			<p>We were trying to use Delicious to have conversations about links and it was driving us crazy. Delicious is great for personal bookmarking, and not so great for having a conversation.</p>

			<p>There's IM of course, but that's way to intrusive and obligatory. Frenzy tries to fill the gap in between IM and Delicious with the added bonus that you can also share large files.</p> 

			<h2>Any usage tricks?</h2> 
			<p>Holding down option allows you to delete your own replies from a thread (providing you were the last person to reply).</p> 

			<h2>iPhone/Android app?</h2> 
			<p>Initially an iPhone version is planned.</p> 

			<h2>Windows version?</h2> 
			<p>Many have requested it. It would make a lot of sense if this were platform agnostic. If the Mac version is a success we may be willing to go in this direction.</p> 
		</div> 

		
		<div class="divider"></div>
		
<?php include("footer.php") ?>