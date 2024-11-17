// document.addEventListener('DOMContentLoaded', function () {
//     const buttons = document.querySelectorAll('.btn-check');
//     const cardContainer = document.querySelector('.row');

//     buttons.forEach((button) => {
//         button.addEventListener('click', function () {
//             const filter = this.id === 'btnradio1' ? 'ALL' : this.id === 'btnradio2' ? 'Solo' : 'Team';

//             console.log('Filter selected:', filter); // 디버깅용

//             const formData = new FormData();
//             formData.append('filter', filter);

//             fetch('/project/getCards', {
//                 method: 'POST',
//                 body: formData,
//             })
//                 .then((response) => response.json())
//                 .then((data) => {
//                     console.log('Filtered Data:', data); // 디버깅용
//                     cardContainer.innerHTML = '';
//                     data.forEach((card) => {
//                         cardContainer.innerHTML += `
//                           <div class="col">
//                               <div class="card h-100">
//                                   <img src="..." class="card-img-top" alt="...">
//                                   <div class="card-body">
//                                       <h5 class="card-title">${card.title}</h5>
//                                       <p class="card-text">This is a description of ${card.title}.</p>
//                                   </div>
//                                   <div class="card-footer">
//                                       <small class="text-body-secondary">Last updated 5 mins ago</small>
//                                   </div>
//                               </div>
//                           </div>
//                       `;
//                     });
//                 })
//                 .catch((error) => console.error('Error:', error));
//         });
//     });
// });

document.addEventListener('DOMContentLoaded', () => {
    const buttons = document.querySelectorAll('input[name="btnradio"]');
    const cards = document.querySelectorAll('#cardContainer .col');

    buttons.forEach((button) => {
        button.addEventListener('change', () => {
            const selectedCategory = button.value;

            cards.forEach((card) => {
                const category = card.dataset.category;
                if (selectedCategory === 'all' || category === selectedCategory) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });

    cards.forEach((card) => (card.style.display = 'block'));
});

document.addEventListener('DOMContentLoaded', () => {
    const cards = document.querySelectorAll('.col');

    cards.forEach((card) => {
        card.addEventListener('click', (event) => {
            if (event.target.tagName === 'A') {
                return;
            }
            const url = card.dataset.url;
            if (url) {
                window.location.href = url;
            }
        });
    });
});
