
window.onload = () => {
    
    let form = document.getElementById('search-form');

    let formArray = Array.from(form.elements);

    let results = document.getElementById('results');
    
    let path = window.location.pathname;
    
    let renderItem = null;

    let visitsItem = (id, businessName, clientName, clientBalance) => {
        return `<div class='container-fluid item py-4 mb-1 px-0'> 
                <div class='row mb-2'> 
                <div class='col-12 col-md-6 '> 
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
                    <a href='/account/`+ id +`' class='btn shadow-btn white bg-blue'>REGISTRAR VISITA</a> 
                </div> 
            </div> 
        </div>`

    };

    let paymentsItem = () => {
        return 'hola';
    }
    
    if (path.includes('registerVisit')){
        renderItem = visitsItem;
    } else if (path.includes('payments')){
        renderItem = paymentsItem;
    }
    
    
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        results.innerHTML = null;
        let search = formArray[1].value;
        
        fetch('api/client/' + search)
        .then(response => {
            
            return response.json();
        })
        .then(data => {
            console.log(data);
            data.forEach(element => {
                results.insertAdjacentHTML("afterbegin", renderItem(element.client_id, element.business_name, element.client_name, element.client_balance));
            });

        })
        .catch(e => {
            return 'ERROR: ' + e;
        })
    })
}