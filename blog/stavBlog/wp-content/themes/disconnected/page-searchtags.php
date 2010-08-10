<?php
/*
Template Name: Tag Search
*/
?>
	<?php get_header();?>	
	<div id="main">
	<div id="content">
		
		<div class="page">
		<div class="page-info"><h2 class="page-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</div>
<div class="page-content">
<!-- Style stuff as you see fit! -->
<style type="text/css">
#matches {padding-left:50px;}
</style>

<!-- You need this block of javascript -->
<script language="javascript">
var ajaxUrl = "<?php echo get_settings('home'); ?>/wp-content/plugins/UltimateTagWarrior/ultimate-tag-warrior-ajax.php";

function createRequestObject() {
    var ro;
    var browser = navigator.appName;
    if(browser == "Microsoft Internet Explorer"){
        ro = new ActiveXObject("Microsoft.XMLHTTP");
    }else{
        ro = new XMLHttpRequest();
    }
    return ro;
}

var searchTags = new Array();

function searchFor(item,tagid,related) {
	http = createRequestObject();

	if (tagid != '' && indexOf(searchTags, item) != -1) {
		searchTags.splice(indexOf(searchTags, item), 1);
		document.getElementById('tag_' + tagid).style.fontWeight="normal";
		document.getElementById('tag_' + tagid).style.border="none";

		related += ',' + tagid;

		relatedids = related.split(',');
		for (i = 0; i < relatedids.length; i++) {
			if (relatedids[i] != "") {
				currentsize = document.getElementById('tag_' + relatedids[i]).style.fontSize;

				if (currentsize == "") {
					document.getElementById('tag_' + relatedids[i]).style.fontSize = "12px";
				} else {
					currentint = currentsize.substring(0, currentsize.length - 2) * 1;
					currentint-= 8;
					document.getElementById('tag_' + relatedids[i]).style.fontSize = currentint + "px";
				}
			}
		}

	} else if (tagid != '') {
		searchTags[searchTags.length] = item;
		document.getElementById('tag_' + tagid).style.fontWeight="bolder";
		document.getElementById('tag_' + tagid).style.border="1px solid #ccc";

		related += ',' + tagid;
		relatedids = related.split(',');
		for (i = 0; i < relatedids.length; i++) {
			if (relatedids[i] != "") {
				currentsize = document.getElementById('tag_' + relatedids[i]).style.fontSize;

				if (currentsize == "") {
					document.getElementById('tag_' + relatedids[i]).style.fontSize = "18px";
				} else {
					currentint = currentsize.substring(0, currentsize.length - 2) * 1;
					currentint+= 8;
					document.getElementById('tag_' + relatedids[i]).style.fontSize = currentint + "px";
				}
			}
		}
	}

	searchtype = "any";
	for(i = 0; i < document.forms['searchselector'].elements['searchtype'].length; i++) {

		if (document.forms['searchselector'].elements['searchtype'][i].checked) {
			searchtype = document.forms['searchselector'].elements['searchtype'][i].value;
		}
	}

    http.open('get', ajaxUrl+'?action=tagSearch&tag='+serialiseTags()+'&type='+searchtype);
    http.onreadystatechange = handleSearchResponse;
    http.send(null);
}

function handleSearchResponse() {
    if(http.readyState == 4){
        var response = http.responseText;
        var update = new Array();

        document.getElementById("matches").innerHTML = response;
    }
}

function serialiseTags() {
	var tags = "";
	for (i = 0; i < searchTags.length; i++) {
		tags += searchTags[i] + "|";
	}
	return tags;
}

function indexOf(array, item) {
	for (i = 0; i < array.length; i++) {
		if (array[i] == item) {
			return i;
		}
	}

	return -1;
}

</script>
</div>
<div class="halfpostleft">
<h2 class="posttitle">Select Tags</h2><br />
<!-- You need to include this form.  It has the any/all radio buttons -->
<form name="searchselector">
<input type="radio" name="searchtype" value="all" id="all" onchange="searchFor('','','')"/> <label for="all">All of the Selected Tags</label>
<input type="radio" name="searchtype" value="any" id="any"  onchange="searchFor('','','')" checked/> <label for="any">Any of the Selected Tags</label><br />
</form>
<!-- This is the end of the form -->
<!-- This is the list of tags -->
<?php UTW_ShowWeightedTagSetAlphabetical("", array('default'=>'<a id="tag_%tagid%" href="javascript:searchFor(\'%tag%\', \'%tagid%\', \'%relatedtagids%\')" style=\'font-size:12px; border:none\'>%tagdisplay%</a> | '), 0) ?>
<!-- End of the list of tags.. -->
</div>
<div class="halfpostright">
<h2 class="posttitle">Matching Posts</h2><br />
<!-- You need to include this div.  It's where the matching posts will display -->
<div id="matches"></div>
<!-- End of the matching posts -->
</div>
</div>
</div>
	</div>
	<div id="sidebar">
<h2>Navigation</h2>
<ul>
<?php wp_list_pages('title_li=<strong>Pages</strong>' ); ?>
</ul>

	</div>

<?php get_footer();?>
</div>
</div>
</body>
</html>