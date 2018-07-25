function copy() {
var range = document.createRange();
var element = document.getElementById('copy');
range.selectNode(element);

var selection = getSelection();
selection.removeAllRanges();
selection.addRange(range);

document.execCommand('copy');

selection.removeAllRanges();
}