<<<<<<< HEAD
//import './bootstrap';
=======
import './bootstrap';
>>>>>>> 6574581fd52978f0ed442b0447ac0f9ddf394a0c

const URL = '/api/books/latest';

const loadData = async () => {
<<<<<<< HEAD
    const response = await fetch(URL);
    const data = await response.json();
    const listElement = document.getElementById('latestBooks');
    console.log(listElement);
    listElement.innerhtml = '';

    data.forEach((book) => {
        const item = document.createElement('li');
        item.innerText = book.title;
        listElement.appendChild(item);
    });
    console.log(data);
}


// console.log('hello');
document.addEventListener('DOMContentLoaded', () => {

const button = document.getElementById('laodBooksBtn');

button.addEventListener('click', loadData);


});
=======
  const listElement = document.getElementById('latestBooks');
  const response = await fetch(URL);
  const data = await response.json();

  listElement.innerHTML = '';

  data.forEach((book) => {
    const item = document.createElement('li');
    item.innerText = book.title;
    listElement.appendChild(item);
  });
}

document.addEventListener('DOMContentLoaded', () => {
  const button = document.getElementById('loadBooksBtn');

  button.addEventListener('click', loadData);
});
>>>>>>> 6574581fd52978f0ed442b0447ac0f9ddf394a0c
