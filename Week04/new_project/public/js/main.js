window.addEventListener('load', (event) => {
    Array.from(document.getElementsByClassName('h1-title')).forEach(function(element) {
        element.addEventListener('click', function(){
            alert("This is: "+element.innerHTML)
        });
      });
  });