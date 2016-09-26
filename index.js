var fs = require('fs');
var Dom = require('./Dom');

var formSpec = JSON.parse(fs.readFileSync('./form.json', 'utf8'));

fs.writeFileSync(formSpec.output.views,Dom.getViewCode(formSpec));
fs.writeFileSync(formSpec.output.controllers,Dom.getControllerCode(formSpec));
