const img    = document.querySelectorAll('#img-gallery img');
const body   = document.querySelector('body');
let count    = 0;
function getContent() {
  // trnsparent layer to improve focus on main content
  var layer = document.createElement('div');
  layer.setAttribute('class', 'layer');

  // main node
  var node = document.createElement('div');
  node.setAttribute('class', 'info');

  // Text node X
  var x = document.createElement('h2');
  x.append('X');

  // cancel button for quiting .info panel
  var close = document.createElement('div');
  close.appendChild(x);
  close.setAttribute('class', 'close');

  // title
  var title = document.createElement('h2');
  title.append(this.alt);

  // img
  var image = document.createElement('img');
  image.setAttribute('src', this.src);

  // download button
  var download = document.createElement('button');
  download.setAttribute('class', 'downloadButton');
  download.setAttribute('download', this.src);
  download.textContent = 'Download';

  // download link
  var a = document.createElement('a');
  a.setAttribute('href', this.src);
  a.setAttribute('download', 'image');
  a.appendChild(download);

  // .container for flexibility
  var flexDiv = document.createElement('div');
  flexDiv.setAttribute('class', 'container');
  flexDiv.appendChild(image);
  flexDiv.appendChild(a);

  // remove button for quiting
  var removeButton = document.createElement('button');
  removeButton.setAttribute('class', 'removeButton');
  removeButton.textContent = 'close';

  // appending childs to .info node
  node.appendChild(close);
  node.appendChild(title);
  node.appendChild(flexDiv);
  node.appendChild(removeButton);

  // appending .info child to body;
  body.appendChild(layer);
  body.appendChild(node);

  close.addEventListener('click', () => {
    body.removeChild(node);
    body.removeChild(layer);
  });
  removeButton.addEventListener('click', () => {
    body.removeChild(node);
    body.removeChild(layer);
  });
}
for (count = 0; count < img.length; count++) {
  img[count].addEventListener('click', getContent);
}
