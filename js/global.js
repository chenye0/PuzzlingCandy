function removeChildren(myNode) {
	while (myNode.firstChild) {
		myNode.removeChild(myNode.firstChild)
	};
}
