<?php
	$title = "noUiSlider - New Version: noUiSlider 6";
	$description = "";
?>

<h1>Version 6</h1>

<section>

	<h2>New version</h2>

	<div class="double">

		<p>noUiSlider has been updated to version 6! This version fixes overhauls the serialization system and adds non-linear slider behaviour.</p>

		<p>Version 6 also improves general performance, and, when used with Zepto, no longer requires the data module.</p>
	</div>

	<div class="double">

		<p>All changes should be relatively easy to patch into your current implementation. If you require help with any specifics, feel free to <a href="mailto:leon.gersen+public@gmail.com">email me</a>. If you do, consider providing a <a href="http://jsfiddle.net/">jsFiddle</a> demonstrating your problem.</p>
	</div>
</section>

<section>

	<h2>Latest version</h2>

	<div class="lonely">

		<p>noUiSlider 6.1 contains fixes and is compatible with noUiSlider 6.0.</p>
	</div>

	<ol class="lonely list">
		<li><p><code>$.noUiSlider.Link</code> is now available as <code>$.Link</code>, and will self-initialize (no need to use <code>new</code> anymore. The element is still aliased in the noUiSlider namespace, so all existing code will continue to work.</p></li>
		<li><p>Several issues have been resolved, including a compression issue in IE11 and some value-setting in <code>RTL</code> configurations.</p></li>
		<li><p>The <a href="/nouislider/slider-values"><code>snap</code></a> option and the <a href="/nouislider/examples/tooltip"><code>"-tooltip-"</code></a> modifier are now in the documentation.</p></li>
		<li><p>Added <code>to</code> and <code>from</code> <a href="/nouislider/number-formatting">formatting options</a>, which allow modification of a formatted value.</p></li>
	</ol>
</section>

<section>

	<h2>Upgrading</h2>

	<div class="lonely">

		<p>noUiSlider 6 <strong>breaks compatibility</strong> with noUiSlider 5. Several options have been altered or removed.</p>
	</div>

	<ol class="lonely list">

		<li><p>The handles option has been removed. Use the <a href="/nouislider/slider-values">start option</a> to set the number of handles.</p></li>

		<li><p>All callbacks have been removed. You can now use jQuery's <code>.on()</code> and <code>.off()</code> to bind and unbind events at will. See <a href="/nouislider/events-callbacks">the events documentation</a> for more information.</p></li>

		<li><p>All formatting options have been merged into their own object. Several other options have been added too. See <a href="/nouislider/number-formatting">number formatting</a> for a complete documentation.</p></li>

		<li><p>The serialization API has been replaced by an object oriented system. See <a href="/nouislider/serialization">serialization</a> for all information.</p></li>

		<li><p>Faulty configuration options will now throw errors with detailed debugging messages.</p></li>

		<li><p>The <code>'block'</code> event is removed. It provided limited use cases that can more easily be implemented with the existing API.</p></li>
	</ol>
</section>
