const docxConverter = require('docx-pdf');

docxConverter('./Documento02.docx','./output.pdf', (err, result) => {
  if (err) console.log(err);
  else console.log(result); // writes to file for us
});