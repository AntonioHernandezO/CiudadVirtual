document.write('<div id=container ></div>');
      var width = window.innerWidth;
      var height = window.innerHeight;
      var widthCanvas=58;
      var heightCanvas=71.5;
    //Empieza prueba
    function update(activeAnchor) {
      var group = activeAnchor.getParent();

      var topLeft = group.get('.topLeft')[0];
      var topRight = group.get('.topRight')[0];
      var bottomRight = group.get('.bottomRight')[0];
      var bottomLeft = group.get('.bottomLeft')[0];
      var image = group.get('Image')[0];

      var anchorX = activeAnchor.getX();
      var anchorY = activeAnchor.getY();

      // update anchor positions
      switch (activeAnchor.getName()) {
        case 'topLeft':
          topRight.y(anchorY);
          bottomLeft.x(anchorX);
          break;
        case 'topRight':
          topLeft.y(anchorY);
          bottomRight.x(anchorX);
          break;
        case 'bottomRight':
          bottomLeft.y(anchorY);
          topRight.x(anchorX);
          break;
        case 'bottomLeft':
          bottomRight.y(anchorY);
          topLeft.x(anchorX);
          break;
      }

      image.position(topLeft.position());

      var width = topRight.getX() - topLeft.getX();
      var height = bottomLeft.getY() - topLeft.getY();
      if (width && height) {
        image.width(width);
        image.height(height);
      }
    }
    function addAnchor(group, x, y, name) {
      var stage = group.getStage();
      var layer = group.getLayer();

      var anchor = new Konva.Circle({
        x: x,
        y: y,
        stroke: '#666',
        fill: '#ddd',
        strokeWidth: 2,
        radius: 8,
        name: name,
        draggable: true,
        dragOnTop: false
      });

      anchor.on('dragmove', function() {
        update(this);
        layer.draw();
      });
      anchor.on('mousedown touchstart', function() {
        group.draggable(false);
        this.moveToTop();
      });
      anchor.on('dragend', function() {
        group.draggable(true);
        layer.draw();
      });
      // add hover styling
      anchor.on('mouseover', function() {
        var layer = this.getLayer();
        document.body.style.cursor = 'pointer';
        this.strokeWidth(4);
        layer.draw();
      });
      anchor.on('mouseout', function() {
        var layer = this.getLayer();
        document.body.style.cursor = 'default';
        this.strokeWidth(2);
        layer.draw();
      });

      group.add(anchor);
    }

    



      //Termina prueba
      var stage = new Konva.Stage({
        container: 'container',
        width: (width/100)*widthCanvas,
           height: (height/100)*heightCanvas
      });
      var layer = new Konva.Layer();
      stage.add(layer);
      stage.getContainer().style.border = '10px solid black';
      stage.getContainer().style.background='grey';
      stage.getContainer().style.width=widthCanvas+"%";
      
      // what is url of dragging element?
      var itemURL = '';
      document.getElementById('drag-items')
      document.addEventListener('dragstart', function(e) {
      itemURL = e.target.src;
      
        });

      var con = stage.container();
      con.addEventListener('dragover', function(e) {
        e.preventDefault(); // !important
      });

      con.addEventListener('drop', function(e) {
        e.preventDefault();
        
        // now we need to find pointer position
        // we can't use stage.getPointerPosition() here, because that event
        // is not registered by Konva.Stage
        // we can register it manually:
        stage.setPointersPositions(e);





        // Konva.Image.fromURL(itemURL, function(image) {
        // layer.add(image);
        // image.position(stage.getPointerPosition());
        // image.draggable(true);
        // layer.draw();
        
        // });

       var imagen = new Konva.Image({
         width:200,
         height:137
       });
       var imgGroup= new Konva.Group({
        x:180,
        y:50,
        draggable:true
       });

       layer.add(imgGroup);
       imgGroup.add(imagen);

       addAnchor(imgGroup,0,0,'topLeft');
       addAnchor(imgGroup, 200, 0, 'topRight');
       addAnchor(imgGroup, 200, 138, 'bottomRight');
       addAnchor(imgGroup, 0, 138, 'bottomLeft');

       var imageObj1 = new Image();
      imageObj1.onload = function() {
        imagen.image(imageObj1);
        layer.draw();
      };
      imageObj1.src=itemURL;





      });
      