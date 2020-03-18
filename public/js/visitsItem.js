 var visitsItem = function(id, businessName, clientName, clientBalance) {
return `<div class='container-fluid item py-4 mb-1'> 
<div class='row mb-2'> 
<div class='col-12'> 
    <a href='/account/`+ id +`'><h3>`+ businessName + `</h3></a> 
</div> 
<div class='col-12'> 
    <p>ID Cliente: <span class='semibold'>`+ id +`<span></p> 
</div> 
<div class='col-12'> 
    <p>Razon social: <span class='semibold'>`+ clientName +`</span></p> 
</div> 
<div class='col-12'> 
    <p>CUIT: <span class='semibold'>30-03034567-2</span></p> 
</div> 
<div class='col-12'> 
    <p>Dirección: <span class='semibold'>Los Aromos 432</span></p> 
</div> 
<div class='col-6'> 
    <p>Saldo:</p> 
</div> 
<div class='col-6 text-right'> 
    <h5>$ ` + (clientBalance < 0  ? `<span class='red'>` : `<span class=''>`) + clientBalance +`</span></h5> 
</div> 
</div> 
<div class='row'> 
<div class='col-12 mb-3'> 
    <a href='' class='btn shadow-btn white bg-blue'>REGISTRAR VISITA</a> 
</div> 
</div> 
</div>`
};

export default visitsItem;

