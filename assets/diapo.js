var consta = 5;
          var boton;
          function agregar1() {
        boton = document.createElement('input');
    boton.type = 'button';
              boton.id = consta;
              boton.className = "bot";
              boton.value = ' ' + consta + ' ';
              consta = consta + 1;
              document.getElementById('Panel').appendChild(boton);

              var espacio = document.createElement('br');
              document.getElementById('Panel').appendChild(espacio);
              var espacio2 = document.createElement('br');
              document.getElementById('Panel').appendChild(espacio2);
          }