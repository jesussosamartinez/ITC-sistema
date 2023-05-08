

function fnPDF(){

var maintable  = document.getElementById('tbllist');

        var doc = new jsPDF('p', 'pt', 'letter');
        margin = 20;
        var scale = (doc.internal.pageSize.width - margin * 2) / document.body.clientWidth;
        var scale_mobile = (doc.internal.pageSize.width - margin * 2) / document.body.getBoundingClientRect();

        //Se verifica el dispositivo
        if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
            //mobile
            doc.html(maintable,{
                x: margin,
                y: margin,
                html2canvas: {
                    scale: scale_mobile,
                },
                callback: function(doc){
                    doc.output('dataurlnewwindow',{filename: 'pdf.pdf'});
                }
            })
        } else{
            //PC
            doc.html(maintable,{
                x: margin,
                y: margin,
                html2canvas: {
                    scale: scale,
                },
                callback: function(doc){
                    doc.output('dataurlnewwindow',{filename: 'pdf.pdf'});
                }
            })
        }
    }
