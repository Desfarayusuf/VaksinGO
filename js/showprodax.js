products = {}
dataFetch = {}

fetch('./api/hospital')
    .then(response => response.json())
    .then(response => showProdFetch(response))
    // .catch(error => alert(error.message + '\n\nGagal menampilkan produk\nSilakan refresh'))

liveSearch(document.getElementById('search_hospital'))

function liveSearch(input) {
    input.addEventListener('keyup', (event) => {
        if (event.key != 'PageUp' || event.key != 'PageDown') {

            inputVal = document.getElementById('search_hospital').value
            inputVal = inputVal.toLowerCase()

            container2 = document.querySelector('.container2')

            for (card of container2.querySelectorAll('.my-5')) {
                judul = card.querySelector('h1').textContent
                judul = judul.toLowerCase()
                
                judul2 = card.querySelector('h5').textContent
                judul2 = judul2.toLowerCase()

                if (judul.includes(inputVal)) {
                    card.style.display = ''
                } 
                else if (judul2.includes(inputVal)) {
                card.style.display = ''
                }
                else {
                    card.style.display = 'none'
                }

            }
            


        }

    })

}


function showProdFetch(data) {
    tambahkanHospital = document.getElementById('apainibro');
    let dalamnya = ``;
    for (jenis in data) {
        
        for (isi in data[jenis]) {
            item = data[jenis][isi]
            products = {
                ...products,
                [item.nama]: item
            }
            dalamnya += tambahkanData(item)
        }
        dalamnya += `</div>`
    }
    tambahkanHospital.innerHTML = dalamnya
    dataFetch = data

}





function tambahkanData(item) {
    
    return `
<div class="my-5">
    <div class="d-flex flex-row">
        <div class="w-50 my-auto">
            <h1 class="display-5 orange">${(item.nama)}</h1>
            <h5>Alamat : ${(item.alamat)}</h5>
            <p>Quota : ${(item.kuota)} </p>
        </div>
        <div class="mx-auto">
                <img src="${(item.img)}" alt="">
        </div>
        </div>
    </div>
</div>
`
}

