//import './bootstrap';

const URL = '/api/books/latest';

const loadData = async () => {
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