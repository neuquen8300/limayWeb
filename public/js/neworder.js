window.onload = () => {

    let form = document.getElementById('search-form');
    let formArray = Array.from(form.elements);
    let results = document.getElementById('results');
    let orderContainer = document.getElementById('order-list');
    let total = document.querySelector('.total');
    let confirmContainer = document.getElementById('confirm');
    let orderList = (id) => {
        fetch('/api/order-add-product/' + id)
        .then(response => {
            return response.json();
        })
        .then(data => {
            if(!confirmContainer.classList.contains('confirm')){
                confirmContainer.classList.add('confirm');
            }
            
            orderContainer.insertAdjacentHTML('afterbegin', 
            `
            <div class="row">
                <div class="col-8">
                    <p>`+ data.name +`</p>
                </div>
                <div class="col-4">
                    <p>$ `+ data.price +`</p>
                </div>
            </div>
            `);
            (total.innerHTML == '') ? total.innerHTML = parseFloat(data.price) : total.innerHTML = parseFloat(total.innerHTML) + parseFloat(data.price);
        })
        .catch(e => {
            return e;
        })
    }
    form.onsubmit = (e) => {
        e.preventDefault();
        results.innerHTML = null;
        searchList = [];
        let search = formArray[1].value;
        fetch('/api/product/' + search)
        .then(response => {
            return response.json();
        })
        .then(data => {

            if (data.length !== 0){            
                data.forEach(element => {
                    results.insertAdjacentHTML('afterbegin',`
                    <div class="container-fluid item py-3 my-1">
                        <div class="row">
                            <div class="col-12">
                                <h3 class='semibold'>`+ element.name +`</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>COD: <span class='semibold'>`+ element.product_id +`</span></p>
                            </div>
                            <div class="col-12">
                                <p>Marca: <span class='semibold'>`+ element.brand +`</span></p>
                            </div>
                            <div class="col-12">
                                <p>Venta al peso: <span class='semibold'>` + (element.by_weight ? 'SI' : 'NO' ) + `</span></p>
                            </div>
                            <div class="col-12">
                                <p>Peso por unidad (aprox): <span class='semibold'>0.8 Kg</span></p>
                            </div>
                            <div class="col-6">
                                <p>Precio x `+ (element.by_weight ? 'Kg' : 'unidad') +`:</p>
                            </div>
                            <div class="col-6 text-right">
                                <p class='semibold'>$ ` + element.price + `</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 pt-2 `+ element.product_id +`">
                                <a href="" class='btn shadow-btn white bg-blue add-product'>AÑADIR</a>
                            </div>
                        </div>
                    </div>
                    `);
                });

                let addProduct = document.querySelectorAll('.add-product');

                addProduct.forEach(element => {
                    let id = element.parentNode.classList.item(2);
                    element.addEventListener('click', (e) => {
                        e.preventDefault();
                        orderList(id);
                    })
                })
            }
        })
        .catch(e => {
            return e;
        })
    }
    




}