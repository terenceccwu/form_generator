var fs = require('fs');
var mustache = require('mustache');

function getViewCode(formSpec) {

  function getFieldHTML(field) {
    var html = fs.readFileSync(`./templates/view/${field.template}.php`, 'utf8');
    return mustache.render(html,field);
  }

  var fieldsHTML = formSpec.fields.map((field)=>getFieldHTML(field));

  var outputHTML = fs.readFileSync('./templates/view.php', 'utf8');
  return mustache.render(outputHTML,{insertHere:fieldsHTML.join("\n")});;
}

function getControllerCode(formSpec) {
  var template = fs.readFileSync('./templates/controller.php', 'utf8');
  var fields = formSpec.fields;

  var tplFields = {};
  tplFields.formName = formSpec.formName;
  tplFields.modelName = formSpec.modelName;
  tplFields.setRules = fields.map(f=>({
      name: f.name,
      rules: f.rules ? Object.keys(f.rules).join("|") : ''
  })).filter(f=>f.name !== undefined);

  return mustache.render(template,tplFields);
}

var Dom = {
  getViewCode,
  getControllerCode
};

module.exports = Dom;
