function retrieveXML(xmlLocation) {
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		var xmlhttp=new XMLHttpRequest();
	}
	else {
		// code for IE6, IE5
		var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.preserveWhiteSpace = true;
	xmlhttp.open("GET",xmlLocation+".xml",false);
	xmlhttp.send("");
	return xmlhttp.responseXML;
}

function placeText(storyName) {
	$('#reader').empty().append("<div id='story-content'></div>");
	
	var xml = retrieveXML("assets/stories/"+storyName);
	var xsl = retrieveXML("assets/templates/xsl_template");
	
	if (window.ActiveXObject) {
		var resultDocument = xml.transformNode(xsl);
	}
	else {
		var xsltProcessor=new XSLTProcessor();
		xsltProcessor.importStylesheet(xsl);
		var resultDocument = xsltProcessor.transformToFragment(xml,document);
	}

	console.log(resultDocument.childNodes);

	var textNode = new Array();

	for(i=0; i<resultDocument.childNodes.length; i++) {
		textNode[i] = resultDocument.childNodes[i];
		console.log(i);
	}

	for(j=0; j<textNode.length; j++) {
		document.getElementById("story-content").appendChild(textNode[j]);
	}

	$("#story-content").fadeIn(200);

}