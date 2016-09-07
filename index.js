var fs = require('fs');
var cheerio = require('cheerio');

var obj = JSON.parse(fs.readFileSync('./form.json', 'utf8'));
var template = fs.readFileSync('./template.html', 'utf8');

var $ = cheerio.load(template);

// obj.fields.forEach((field)=>{
//   console.log(field.name);
// })
