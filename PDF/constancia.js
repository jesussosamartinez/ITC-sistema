const { default: jsPDF } = require("jspdf");


$("#generar")("click", function(){

var pdf = new jsPDF();

pdf.text(20, 20, "Mostrando una Tabla con Jspdf y el plugin Autotbale");
var columns = ["Id", "Nombre", "Domicilio", "Telefono", "Email"];


  pdf.save('mipdf.pdf');

});