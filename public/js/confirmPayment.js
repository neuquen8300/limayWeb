window.onload = () => {

    let form = document.getElementById('amount-form');

    let formArray = Array.from(form.elements);

    let confirm = document.getElementById('confirmPayment');
    
    let businessName = document.getElementById('business_name').innerHTML;
    let clientBalance = document.getElementById('client_balance').innerHTML;

    form.onsubmit = (e) => {
        e.preventDefault();
        if (confirm.classList.contains('modalClose')){
            confirm.classList.remove('modalClose');
        }
        if (!confirm.classList.contains('confirm')){
            confirm.classList.add('confirm');
        }
        confirm.innerHTML = 
        `<div class="container-fluid payment-container bg-white">
        <div class="row "> 
            <div class="col-12 col-md-6 offset-md-3">
                <div class='container-fluid'>
            <div class="row pt-2"> 
            <div class="col-12 mb-4">
                <h3 class='light'>Atención!</h3>
                <h3 class='light'>Se cobrarán <span class='semibold'>$ `+ formArray[1].value +`</span></h3>
                <h3 class='light'>a la siguiente cuenta:</h3>
            </div>        
            <div class="col-12 item py-2">
                <div class="row">
                    <div class='col-12'> 
                        <h3>`+ businessName +`</h3></a> 
                    </div> 
                    <div class='col-12'> 
                        <p>ID Cliente: <span class='semibold'>1354<span></p> 
                    </div> 
                    <div class='col-12'> 
                        <p>Razon social: <span class='semibold'>Ernesto Perez</span></p> 
                    </div> 
                    <div class='col-12'> 
                        <p>CUIT: <span class='semibold'>30-03034567-2</span></p> 
                    </div> 
                </div>
            </div> 
        </div>
        <div class="row py-4 bg-white">
            <div class='col-6'> 
                <p> Nuevo saldo:</p> 
            </div> 
            <div class="col-6 text-right">
                <p class='semibold'> $ `+ (clientBalance - formArray[1].value).toFixed(2)  +`</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class='bold'>Estás seguro?</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 mb-3">
                <a id='pay' class='btn btn-block bg-blue white'>SI, COBRAR</a>
            </div>
            <div class="col-12">
                <a id='goBack' class='btn btn-block bg-lightgray blue'>NO, VOLVER</a>
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    `;

    let goBack = document.getElementById('goBack');
    let pay = document.getElementById('pay');

    goBack.onclick = (e) => {
        e.preventDefault();
        confirm.classList.remove('confirm');
        confirm.classList.add('modalClose');
        confirm.innerHTML = '';
        }

    pay.onclick = (e) => {
        e.preventDefault();
        if (formArray[1].value !== null){
            let formdata = new FormData(form);
            
            fetch('/api/doPayment/',
            {
                headers:{
                    'X-CSRF-TOKEN': formArray[0].value
                },
                body: formdata,
                method: 'post'
            })
            .then(response => {
                console.log(response);
                return response.json();
            })
            .then(data => {
                console.log(data);
                if(data == 'ok'){
                    formArray[1].value = '';
                    location.reload();
                }
            })
            .then(e => {
                console.log(e);
            })
        }
    }
    }

    
    
   
}