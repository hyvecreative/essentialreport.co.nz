<?php
/*
Template Name: page-linktest
*/
?>
<?php
get_header( ); 
?>

<main>
<article>

<div class="container-fluid" style="position: relative;">

	<div class="row hm-feature-page" style=" ">
		<div class="col search-header">

			<h1 class=""><?php the_title(); ?></h1>

		</div>
	</div>

</div>

<!-- begin content -->

<div class="container-fluid latest-reports-hm">
	<div id="content" class="container page-simple">
		<div class="row" style="min-height: 500px;">
			<div class="col-sm-12 col-md-8 offset-md-2">
<input id="copyTarget" value="Some initial text" style="display: none;"> <button id="copyButton" style="display: none;">Copy</button><br><br>
<span id="copyTarget2" style="display: none;"><?php echo get_permalink($post->ID);?>
</span> <button id="copyButton2">Copy the direct link to this question</button><br><br>
<span id="msg"></span><br>

			<?php if(get_field('echo_title')):?>
				<h1 class="page-header-title"><?php the_title(); ?></h1> 
			<?php else:?> 
			<?php endif;?> 
				
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php the_content(__('(more...)')); ?>

			<?php endwhile; else: ?>
			<p><?php _e('Sorry, no pages are available.'); ?></p>
			<?php endif; ?>
			</div>
		</div>
	</div>
</div>
	
	
</article>
</main>

<script>

document.getElementById("copyButton").addEventListener("click", function() {
    copyToClipboardMsg(document.getElementById("copyTarget"), "msg");
});

document.getElementById("copyButton2").addEventListener("click", function() {
    copyToClipboardMsg(document.getElementById("copyTarget2"), "msg");
});

document.getElementById("pasteTarget").addEventListener("mousedown", function() {
    this.value = "";
});


function copyToClipboardMsg(elem, msgElem) {
	  var succeed = copyToClipboard(elem);
    var msg;
    if (!succeed) {
        msg = "Copy not supported or blocked.  Press Ctrl+c to copy."
    } else {
        msg = "link copied to the clipboard."
    }
    if (typeof msgElem === "string") {
        msgElem = document.getElementById(msgElem);
    }
    msgElem.innerHTML = msg;
    setTimeout(function() {
        msgElem.innerHTML = "";
    }, 4000);
}

function copyToClipboard(elem) {
	  // create hidden text element, if it doesn't already exist
    var targetId = "_hiddenCopyText_";
    var isInput = elem.tagName === "INPUT" || elem.tagName === "TEXTAREA";
    var origSelectionStart, origSelectionEnd;
    if (isInput) {
        // can just use the original source element for the selection and copy
        target = elem;
        origSelectionStart = elem.selectionStart;
        origSelectionEnd = elem.selectionEnd;
    } else {
        // must use a temporary form element for the selection and copy
        target = document.getElementById(targetId);
        if (!target) {
            var target = document.createElement("textarea");
            target.style.position = "absolute";
            target.style.left = "-9999px";
            target.style.top = "0";
            target.id = targetId;
            document.body.appendChild(target);
        }
        target.textContent = elem.textContent;
    }
    // select the content
    var currentFocus = document.activeElement;
    target.focus();
    target.setSelectionRange(0, target.value.length);
    
    // copy the selection
    var succeed;
    try {
    	  succeed = document.execCommand("copy");
    } catch(e) {
        succeed = false;
    }
    // restore original focus
    if (currentFocus && typeof currentFocus.focus === "function") {
        currentFocus.focus();
    }
    
    if (isInput) {
        // restore prior selection
        elem.setSelectionRange(origSelectionStart, origSelectionEnd);
    } else {
        // clear temporary content
        target.textContent = "";
    }
    return succeed;
}

	
</script>

    
<?php get_footer(); ?>


