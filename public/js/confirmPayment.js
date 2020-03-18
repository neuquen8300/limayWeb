window.onload = () => {

    let form = document.getElementById('amount-form');

    let formArray = Array.from(form.elements);

    let confirm = document.getElementById('confirmPayment');
    console.log(formArray);

    form.onsubmit = (e) => {
        e.preventDefault();
        if (confirm.classList.contains('modalClose')){
            confirm.classList.remove('modalClose');
        }
        if (!confirm.classList.contains('confirmPayment')){
            confirm.classList.add('confirmPayment');
        }
        confirm.innerHTML = `<div class="container-fluid bg-white">

        <div class="row pt-2"> 
            <div class="col-12 mb-4">
                <h3 class='light'>Atención!</h3>
                <h3 class='light'>Se cobrarán <span class='semibold'>$ `+ formArray[1].value +`</span></h3>
                <h3 class='light'>a la siguiente cuenta:</h3>
            </div>        
            <div class="col-12 item py-2">
                <div class="row">
                    <div class='col-12'> 
                        <h3>Almacén Lo de tito</h3></a> 
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
                <p class='semibold'> $ 1532</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3 class='bold'>Estás seguro?</h3>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 mb-3">
                <a href="" class='btn btn-block bg-blue white'>SI, COBRAR</a>
            </div>
            <div class="col-12">
                <a id='goBack' class='btn btn-block bg-lightgray blue'>NO, VOLVER</a>
            </div>
        </div>
    </div>`
    window.scrollTo(0, 0);

    let goBack = document.getElementById('goBack');

    goBack.onclick = (e) => {
        e.preventDefault();
        confirm.classList.remove('confirmPayment');
        confirm.classList.add('modalClose');
        confirm.innerHTML = '';
        }
    }
    
   
}