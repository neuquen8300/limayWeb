window.onload = () => {

    let form = document.getElementById('search-form');
    let formArray = Array.from(form.elements);
    let results = document.getElementById('results');

    form.onsubmit = (e) => {
        e.preventDefault();
        results.innerHTML = null;
        let search = formArray[1].value;
        fetch('/api/product/' + search)
        .then(response => {
            console.log(response);

            return response.json();
        })
        .then(data => {
            data.forEach(element => {
                console.log(element);
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
                    <div class="col-12">
                        <a href="" class='btn shadow-btn white bg-blue'>AÑADIR</a>
                    </div>
                </div>
            </div>
            
                `);
            });
        })
        .catch(e => {
            return e;
        })
    }

    /*
*/

}