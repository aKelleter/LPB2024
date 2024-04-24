  function initCodeMirror(classes)
  {
    //DEBUG// console.log(classes);
    if (classes.length > 0) {            
        for (let id of classes) {
            let cdmr = CodeMirror.fromTextArea(id, {
            mode: "javascript",
            modeOption: null,
            lineNumbers: true,
            matchBrackets: true,
            theme: "eclipse",
            lineWiseCopyCut: true,
            styleActiveLine: true,
            readOnly : true,
            extraKeys: {
                "F11": function(cm) {
                  cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                },
                "Esc": function(cm) {
                  if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                }
              },
            undoDepth: 200            
          });
          cdmr.setSize("100%","100%") // Width, Height of editor 
        }
    } else {
        //DEBUG// console.log("id : " + id + " not found");
    }
  }

  initCodeMirror(document.getElementsByClassName("codem"));